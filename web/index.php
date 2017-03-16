<?php
/**
 * Main entry point for your website.
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.2
 */

require_once("../boot/bootmodule.php");
BootModule::boot();

$webTitle = APP_TITLE . " - " . $controller->title;

if ($controller->useLayout) {
    // Render view using layout
    $model = $controller->service();
    require_once(ROOT . PATH_VIEW . "/_layout.php");
} else {
    // Render view directly
    $model = $controller->service();
    $controller->view();
}