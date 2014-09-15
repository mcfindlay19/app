<?php

class MonetizationModuleController extends WikiaController {

	const DEFAULT_TEMPLATE_ENGINE = WikiaResponse::TEMPLATE_ENGINE_MUSTACHE;

	/**
	 * Monetization Module
	 * @responseParam array data - list of modules
	 */
	public function index() {
		wfProfileIn( __METHOD__ );

		if ( !MonetizationModuleHelper::canShowModule() ) {
			$this->data = '';
			wfProfileOut( __METHOD__ );
			return true;
		}

		$this->response->addAsset( 'monetization_module_css' );
		$this->response->addAsset( 'monetization_module_js' );

		$helper = new MonetizationModuleHelper();

		$params = [
			's_id' => $this->wg->CityId,
			'max' => MonetizationModuleHelper::calculateNumberOfAds( $this->wg->Title->mLength ),
			'vertical' => $helper->getWikiVertical(),
		];

		$mcachePurge = $this->wg->request->getVal( 'mcache', false );

		if ( $mcachePurge ) {
			$params['mcache'] = $mcachePurge;
		}

		$this->data = $helper->getMonetizationUnits( $params );

		// set cache control to 1 hour
		$this->response->setCacheValidity( $helper->getCacheTtl() );

		wfProfileOut( __METHOD__ );
	}

}
