var treeRootPathConfig = mw.config.get('bsPageTreeRoot');
var treeRootPath = "";
if ( treeRootPathConfig.indexOf(':') !== -1 ){//handle pagename where namespace is propperly set
	treeRootPath = treeRootPathConfig;
} else {
	treeRootPath = ":" + treeRootPathConfig; //assume main namespace
}

var tree = Ext.create('BS.tree.WikiSubPages', {
	renderTo: 'pagetree',//this div is created by BlueSpicePageTree::renderPageTree (ParserFirstCallInit)
	treeRootPath: treeRootPath,
	listeners: {
		itemclick: function( obj, record, item, index, e, eOpts ){
			window.location.href = mw.util.wikiGetlink( record.internalId ) ;
		}
	}
});