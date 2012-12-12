<?php


// define this directory
define('MODULE_MANAGER_DIR', basename(dirname(__FILE__)));

// enable CMS tab
//Object::add_extension('CMSPageEditController', 'ModuleManager');

CMSMenu::add_menu_item('ModuleManager', 'Module Manager', 'admin/module-manager/', 'ModuleManager');


// include css
LeftAndMain::require_css(MODULE_MANAGER_DIR . '/css/cms.css');

