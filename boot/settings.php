<?php
/**
 * Application settings.
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.1
 */

/**
 * Title of your website.
 */
const APP_TITLE = "PHP MVC";

/**
 * Set to false if you're in production mode.
 */
const DEBUG_MODE = true;

$root = str_replace("\\", "/", str_replace("boot", "", __DIR__));
define("ROOT", $root);
const PATH_API = "api";
const PATH_CLASS = "classes";
const PATH_CONTROLLER = "controllers";
const PATH_SERVICE = "services";
const PATH_MODEL = "models";
const PATH_VIEWMODEL = "viewmodels";
const PATH_HELPER = "helpers";
const PATH_VIEW = "web";

/**
 * Set your timezone here.
 */
date_default_timezone_set("Europe/Berlin");

if (DEBUG_MODE) {
    /**
     * Set a custom timestamp here.
     */
    $time = mktime(19, 1, 0, 1, 1, 2017);

    error_reporting(E_ALL);
    ini_set("display_errors", 1);
} else {
    $time = time();
    error_reporting(E_NONE);
    ini_set("display_errors", 0);
}