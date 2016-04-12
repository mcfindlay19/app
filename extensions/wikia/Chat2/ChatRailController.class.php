<?php

class ChatRailController extends WikiaController {
	const MAX_CHATTERS = 6;
	const AVATAR_SIZE = 50;
	const CHAT_WINDOW_FEATURES = 'width=600,height=600,menubar=no,status=no,location=no,toolbar=no,scrollbars=no,resizable=yes';

	/**
	 * Render chat rail module placeholder. Content will be ajax-loaded for freshness.
	 */
	public function placeholder() {
		foreach ( ChatWidget::getTemplateVars( false ) as $name => $value ) {
			$this->setVal( $name, $value );
		}

		// As most the markup for this is the same as for the chat parser tag, we're reusing the tag template
		$this->response->getView()->setTemplatePath( dirname( __FILE__ ) . '/templates/entryPointTag.tmpl.php' );
	}

	public function executeAnonLoginSuccess() {
		wfProfileIn( __METHOD__ );

		if ( !empty( $this->totalInRoom ) ) {
			$this->buttonText = wfMsg( 'chat-join-the-chat' );
			ChatHelper::info( __METHOD__ . ': Method called - existing room' );
		} else {
			$this->buttonText = wfMsg( 'chat-start-a-chat' );
			ChatHelper::info( __METHOD__ . ': Method called - new room' );
		}
		$this->linkToSpecialChat = SpecialPage::getTitleFor( "Chat" )->escapeLocalUrl();

		wfProfileOut( __METHOD__ );
	}

	public function executeGetUsers() {
		wfProfileIn( __METHOD__ );
		$this->users = ChatWidget::getChatUsersInfo();
		if ( count( $this->users ) === 0 ) {
			ChatHelper::info( __METHOD__ . ': Method called - no users' );
			// CONN-436: If there are no users in the chat, cache the response in varnish for CACHE_STANDARD and on the
			// browser for the default CACHE_DURATION time;
			// Note: Varnish cache will be purged when user opens the chat page
			$this->response->setCacheValidity( WikiaResponse::CACHE_STANDARD, ChatWidget::CHAT_USER_LIST_CACHE_TTL );
		} else {
			ChatHelper::info( __METHOD__ . ': Method called - found users', [
				'chatters' => count( $this->users ),
			] );
			// If there are users in the chat, cache both in varnish and browser for default CACHE_DURATION;
			$this->response->setCacheValidity( ChatWidget::CHAT_USER_LIST_CACHE_TTL );
		}
		wfProfileOut( __METHOD__ );
	}

}
