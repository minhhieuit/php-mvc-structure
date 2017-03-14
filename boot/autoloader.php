<?php
/**
 * AutoLoader registrations
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.1.1
 */

function autoLoadClass($class) {
    $filename = strtolower($class) . '.php';

    if (preg_match('/.controller/i', $class)) {
        checkAndInclude(PATH_CONTROLLER, $filename);
        return;
    } else if (preg_match('/.service/i', $class)) {
        checkAndInclude(PATH_SERVICE, $filename);
        return;
    } else if (preg_match('/.viewmodel/i', $class)) {
        checkAndInclude(PATH_VIEWMODEL, $filename);
        return;
    } else if (preg_match('/.model/i', $class)) {
        checkAndInclude(PATH_MODEL, $filename);
        return;
    } else if (preg_match('/.api/i', $class)) {
        checkAndInclude(PATH_API, $filename);
        return;
    } else {
        if (checkAndInclude(PATH_CLASS, $filename)) {
            return;
        }
        if (checkAndInclude(PATH_HELPER, $filename)) {
            return;
        }
    }
    
    Log::warn("Couldn't find class. ($filename)", __CLASS__, __FILE__, __FUNCTION__, __LINE__);
}

function checkAndInclude($folder, $filename) {
    if (file_exists(ROOT . $folder . "/" . $filename)) {
        require(ROOT . $folder . "/" . $filename);
        return true;
    } else {
        return false;
    }
}

spl_autoload_register('autoLoadClass');