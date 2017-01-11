var treeNodes = Ext.query('.pagetree');

treeNodes.forEach(function(node){
	Ext.create('BS.tree.WikiSubPages', {
		renderTo: node,//this div is created by BlueSpicePageTree::renderPageTree (ParserFirstCallInit)
		treeRootPath: node.getAttribute("root"),
		listeners: {
			itemclick: function( obj, record, item, index, e, eOpts ){
				window.location.href = mw.util.wikiGetlink( record.internalId ) ;
			}
		}
	});
});