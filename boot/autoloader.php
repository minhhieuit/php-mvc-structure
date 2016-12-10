<?php
/**
 * AutoLoader registrations
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 * @date       08/12/2016
 */

function autoLoadClass($class) {
    $path = PATH_BASE . PATH_CLASS . "/";
    $filename = strtolower($class) . '.php';

    if(file_exists($path . $filename)) {
        require_once($path . $filename);
    }
}

function autoLoadController($class) {
    $path = PATH_BASE . PATH_CONTROLLER . "/";
    $filename = str_replace("controller", "_controller", strtolower($class)) . '.php';

    if(file_exists($path . $filename)) {
        require_once($path . $filename);
    }
}

function autoLoadInterface($class) {
    $path = PATH_BASE . PATH_INTERFACE . "/";
    $filename = strtolower($class) . '.php';

    if(file_exists($path . $filename)) {
        require_once($path . $filename);
    }
}

function autoLoadModel($class) {
    $path = PATH_BASE . PATH_MODEL . "/";
    $filename = str_replace("model", "_model", strtolower($class)) . '.php';

    if(file_exists($path . $filename)) {
        require_once($path . $filename);
    }
}

function autoLoadService($class) {
    $path = PATH_BASE . PATH_SERVICE . "/";
    $filename = str_replace("service", "_service", strtolower($class)) . '.php';

    if(file_exists($path . $filename)) {
        require_once($path . $filename);
    }
}

spl_autoload_register('autoLoadClass');
spl_autoload_register('autoLoadController');
spl_autoload_register('autoLoadInterface');
spl_autoload_register('autoLoadModel');
spl_autoload_register('autoLoadService');