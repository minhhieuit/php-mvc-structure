<?php
/**
 * Includes the requested API script.
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 */

require_once("../boot/bootmodule.php");
BootModule::load();
BootModule::init();

if (!isset($_GET['api'])) {
    return false;
}

$file = $_GET['api'] . ".php";
$class = ucfirst($_GET['api']);

if (!file_exists($file)) {
    Log::error("API file does not exist. ($file)", __CLASS__, __FILE__, __FUNCTION__, __LINE__);
    header("Location: /error");
    return false;
}

require_once($file);
$api = new $class();
$api->api();