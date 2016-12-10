<?php
/**
 * Routing
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 * @date       08/12/2016
*/

global $controller, $webTitle;

$webTitle = APP_TITLE;

if (isset($_GET['p'])) {
    $parameter = $_GET['p'];
} else {
    $parameter = "home";  
}

$request = ucfirst($parameter) . "Controller";
if (class_exists($request)) {
    $controller = new $request();
    $webTitle = $webTitle . " - " . $controller::$title;
} else {
    die("Controller not found.");
}