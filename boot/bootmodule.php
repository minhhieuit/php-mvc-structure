<?php
/**
 * This module is responsible for booting all the required scripts.
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.1
*/

class BootModule
{
    private function __construct() {}

    private function __clone() {}

    public static function load() {
        global $time;
        require_once("settings.php");
        require_once("autoloader.php");
        require_once("database.php");
    }

    public static function init() {
        require_once("session.php");
        Session::start();
        Session::refresh();
    }

    public static function routing() {
        require_once("routing.php");
        global $controller, $webTitle;
        Routing::init();
    }

    public static function boot() {
        self::load();
        self::init();
        self::routing();
    }
}