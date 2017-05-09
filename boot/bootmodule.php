<?php
namespace app\boot;

/**
 * This module is responsible for booting all the required scripts.
 *
 * @author     Serhan Polat
 * @version    2.0
 */

class BootModule
{
    private function __construct() {}

    private function __clone() {}

    private static function load()
    {
        require_once("config.php");
        require_once("constants.php");
        require_once("autoloader.php");
    }

    private static function init()
    {
        $session = new Session();
        $session->refresh();
        Routing::init();
    }

    public static function boot()
    {
        self::load();
        self::init();
    }
}