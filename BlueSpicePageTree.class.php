<?php
class BlueSpicePageTree extends BsExtensionMW {
	// Register any render callbacks with the parser
	public static function onParserSetup( Parser $parser ) {
		// When the parser sees the <pagetree> tag, it executes BlueSpicePageTree::renderPageTree
		$parser->setHook( 'pagetree', 'BlueSpicePageTree::renderPageTree' );

		return true;
	}

	// Render pagetree
	public static function renderPageTree( $input, array $args, Parser $parser, PPFrame $frame ) {
		$parser->getOutput()->addModules("ext.bluespice.pagetree");

		$treeRoot = "";
		if( !empty( $args["root"] ) ){
			$treeRoot = $args["root"];
		}else{
			global $bsgPageTreeRoot;
			$treeRoot = $bsgPageTreeRoot;
		}
		if( strpos( $treeRoot, ":" ) === false ){
			$treeRoot = ":" . $treeRoot;
		}

		return "<div class='pagetree' root='" . $treeRoot . "'></div>";
	}

}