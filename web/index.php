<?php
/**
 * Main entry point for your website.
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 */

require_once("../boot/bootmodule.php");
BootModule::boot();

// Render view
if ($controller->useLayout) {
    require_once(ROOT . PATH_VIEW . "/_layout.php");
} else {
    $controller->view();
}