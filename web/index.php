<?php
/**
 * Index
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 * @date       10/12/2016
*/

require_once("../boot/boot_module.php");
$bootModule = new BootModule();
$bootModule->Boot();

// Bind service results to $output
$output = $controller->Service();

require_once(PATH_BASE . PATH_VIEW . "/_layout.php");
?>