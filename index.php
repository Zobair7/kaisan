<?php
//
// PHASE: BOOTSTRAP
//
define('Kaisan_INSTALL_PATH', dirname(__FILE__));
define('Kaisan_SITE_PATH', Kaisan_INSTALL_PATH . '/site');

require(Kaisan_INSTALL_PATH.'/src/CKaisan/bootstrap.php');

$ka = CKaisan::Instance();
//
// PHASE: FRONTCONTROLLER ROUTE
//
$ka->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$ka->ThemeEngineRender();
