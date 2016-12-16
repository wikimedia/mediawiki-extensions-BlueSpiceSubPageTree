<?php
class BlueSpicePageTree extends BsExtensionMW {
	// Register any render callbacks with the parser
	public static function onParserSetup( Parser $parser ) {
		// When the parser sees the <sample> tag, it executes renderTagSample (see below)
		$parser->setHook( 'pagetree', 'BlueSpicePageTree::renderPageTree' );

		return true;
	}

	// Render pagetree
	public static function renderPageTree( $input, array $args, Parser $parser, PPFrame $frame ) {
		$parser->getOutput()->addModules("ext.bluespice.pagetree");

		if( !empty( $args["root"] ) ){
			$parser->getOutput()->addJsConfigVars( "bsPageTreeRoot", $args["root"] );
		}else{
			global $wgBlueSpicePageTreeRoot;
			$parser->getOutput()->addJsConfigVars( "bsPageTreeRoot", $wgBlueSpicePageTreeRoot );
		}

		return "<div id='pagetree'></div>";
	}

}