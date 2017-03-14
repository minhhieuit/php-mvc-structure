<?php
/**
 * Main entry point for your website.
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.1
 */

require_once("../boot/bootmodule.php");
BootModule::boot();

$webTitle = APP_TITLE . " - " . $controller->title;

// Render view
if ($controller->useLayout) {
    require_once(ROOT . PATH_VIEW . "/_layout.php");
} else {
    $controller->view();
}