<?php

use MediaWiki\MediaWikiServices;

/**
 * Special:Discussions
 *
 * @file
 * @ingroup Extensions
 */

class SpecialDiscussions extends SpecialPage {
	/**
	 * Constructor -- set up the new special page
	 */
	public function __construct() {
		parent::__construct( 'Discussions' );
	}

	/**
	 * Show the special page
	 *
	 * @param string|null $par parameter passed to the page or null
	 */
	public function execute( $par ) {
		$out = $this->getOutput();
		$request = $this->getRequest();
		$user = $this->getUser();

		$this->setHeaders();

		// Add CSS
		$out->addModuleStyles( 'ext.Discussions' );
		$out->addModules( 'mediawiki.page.gallery' ); // needed to show galleries correctly. Should be a better way of doing this so it's only loaded if there is a gallery, but I can't find it.

		// JSDelivr has brotli compression and a good TTFB, so it's better than using foreign-resources.yaml in MediaWiki.
		// I also cannot get foreign-resources.yaml to work.
		// The minified version of this file is only ~0.2kb smaller than the unminified version after brotli compressin is applied to both,
		// so we are using the original .css file to improve readability
		$out->addHTML( '
			<link
				rel="stylesheet"
				href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/fontawesome.css"
				integrity="sha384-5t0634b3BeTSoxIIgd8lhUy22xY2BGs89gw0vReAMGcfJXXfA7fblIRGVkRFWRDL" 
				crossorigin="anonymous"
			/>
		' );

		// Create an output variable and add the constructed page from there
		$output = '';

		$out->addHTML( $output );
	}
}
