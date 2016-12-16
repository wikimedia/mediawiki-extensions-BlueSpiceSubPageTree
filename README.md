# mediawiki-extensions-BlueSpicePageTree
make &lt;pagetree root="Namespace:Rootpage" /> tag available and show extjs tree panel with subpage structure

## Installation

Inside of MediaWiki base path:

	git clone https://github.com/ljonka/mediawiki-extensions-BlueSpicePageTree.git extensions/BlueSpicePageTree

Dependencies:

	BlueSpiceFoundation

Activate Extension in LocalSettings.php

	echo "wfLoadExtension(\"BlueSpicePageTree\");" >> LocalSettings.php

Usage in Wiki Editor

	<pagetree root=":"/> or <pagetree root="Template:"/> or <pagetree root="Main Page"/>