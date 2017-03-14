<?php
/**
 * Connects to the database.
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.1
 */

class Database
{
    private static $instance;

    private function __construct() {}

    private function __destruct() {
        if (isset(self::$instance)) {
            // Close your connection here
            unset(self::$instance);
        }
    }

    private function __clone() {}

    public static function db() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = null; // Replace this with your connection expression
            }
            catch (Exception $exception) {
                Log::error($exception, __CLASS__, __FILE__, __FUNCTION__, __LINE__);
                return false;
            }
        }
        return self::$instance;
    }
}