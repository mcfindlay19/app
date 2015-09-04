<?php

class AttributeServiceHelperController extends WikiaController {

    /**
     * Helper function for the attribute service to clear user MediaWiki.
     * This is called when a client other than MW updates an attribute
     * using the attribute service to clear the User cache.
     */
    public function purgeUserCache() {

        $userId = $this->request->getVal( 'userId' );
        $signature = $this->request->getVal( 'signature' );

       if ( !$this->assertValidParameters( $userId, $signature ) ) {
           return;
       }

        if ( !$this->assertValidSignature( $userId, $signature ) ) {
            return;
        }

        User::clearUserCache( $userId );
        $userIdentityBox = new UserIdentityBox( User::newFromId( $userId ) );
        $userIdentityBox->clearCache();
    }

    /**
     * Asserts the request is properly formed, ie, contains 'userId' and 'signature' in the
     * post data.
     *
     * @param $userId
     * @param $signature
     * @return bool
     */
    private function assertValidParameters( $userId, $signature ) {
        if ( empty( $userId )  || empty( $signature ) ) {
            $this->setErrorResponse( 'invalid parameters: (userId) and (signature) must not be empty',
                \WikiaResponse::RESPONSE_CODE_BAD_REQUEST );
            return false;
        }

        return true;
    }

    /**
     * Assert the request contains a valid signature
     *
     * @param $userId
     * @param $signature
     * @return bool
     */
    private function assertValidSignature( $userId, $signature ) {

        if ( $signature != $this->getComputedSignature( $userId ) ) {
            $this->setErrorResponse( 'invalid signature', \WikiaResponse::RESPONSE_CODE_FORBIDDEN );
            return false;
        }

        return true;
    }

    /**
     * Computes a signature using a shared secret.
     *
     * @param $userId
     * @return string
     */
    private function getComputedSignature( $userId ) {
        global $wgTheSchwartzSecretToken;

        $computedSignature = hash_hmac( 'sha256', $userId, $wgTheSchwartzSecretToken, true );
        return base64_encode( $computedSignature );
    }

    private function setErrorResponse( $message, $responseCode ) {
        $this->response->setVal( 'message', $message );
        $this->response->setCode( $responseCode );
    }
}

