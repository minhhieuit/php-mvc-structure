<?php
/**
 * Includes the requested action script.
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 */

require_once("../boot/bootmodule.php");
BootModule::load();
BootModule::init();

if (!isset($_GET['action'])) {
    return false;
}

$request = $_GET['action'] . "action";
$file = $request . ".php";

if (!file_exists($file)) {
    Log::error("Action file does not exist. ($file)", __CLASS__, __FILE__, __FUNCTION__, __LINE__);
    header("Location: /error");
    return false;
}

require_once($file);
$action = new $request();
$action->action();