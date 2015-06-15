<?php
/**
 * TreeAndMenu extension - Adds #tree and #menu parser functions for collapsible treeview's and dropdown menus
 *
 * See http://www.mediawiki.org/wiki/Extension:TreeAndMenu for installation and usage details
 * - Tree component uses the FancyTree jQuery plugin, see http://wwwendt.de/tech/fancytree (changed from dTree to FancyTree in version 4, March 2015)
 * - Menu component uses Son of Suckerfish, see http://alistapart.com/article/dropdowns
 * 
 * @file
 * @ingroup Extensions
 * @author Aran Dunkley [http://www.organicdesign.co.nz/nad User:Nad]
 * @copyright © 2007-2015 Aran Dunkley
 * @licence GNU General Public Licence 2.0 or later
 */
if( !defined( 'MEDIAWIKI' ) ) die( 'Not an entry point.' );

define( 'TREEANDMENU_VERSION','4.1.3, 2015-06-15' );
define( 'TREEANDMENU_TREE', 1 );
define( 'TREEANDMENU_MENU', 2 );

$wgTreeAndMenuPersistIfId = false; // Makes trees with id attributes have persistent state

$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'TreeAndMenu',
	'author'         => '[http://www.organicdesign.co.nz/aran Aran Dunkley]',
	'url'            => 'http://www.mediawiki.org/wiki/Extension:TreeAndMenu',
	'descriptionmsg' => 'treeandmenu-desc',
	'version'        => TREEANDMENU_VERSION,
);

$wgExtensionMessagesFiles['TreeAndMenu'] = __DIR__ . '/TreeAndMenu.i18n.php';
$wgExtensionMessagesFiles['TreeAndMenuMagic'] = __DIR__ . '/TreeAndMenu.i18n.magic.php';
require_once( __DIR__ . '/TreeAndMenu_body.php' );

new TreeAndMenu();
