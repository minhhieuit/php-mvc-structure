<?php
/**
 * Boot Module
 * This module is the entry point for your web application. It's responsible for booting all the required scripts.
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 * @date       08/12/2016
*/

class BootModule {
    public function Boot() {
        require_once("settings.php");
        require_once("autoloader.php");
        require_once("database.php");
        require_once("routing.php");
    }
}