<?php
namespace app\boot;

/**
 * Establishes a database connection or gets instance of current connection.
 *
 * @author     Serhan Polat
 * @version    2.0
*/

class Database
{
    private static $_instance;

    private function __construct() {}

    private function __destruct() {}

    private function __clone() {}

    public static function get()
    {
        if (!isset(self::$_instance)) {
            try {
                // TODO: Store credentials in a safe environment.
                self::$_instance = new PDO('mysql:host=localhost;dbname=rocketgarage;charset=utf8', 'root', '');
                self::$_instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$_instance->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }
            catch (PDOException $ex) {
                die("<b>Database connection failed.</b><br/>Please contact an administrator.");
            }
        }
        return self::$_instance;
    }

    public static function destroy()
    {
        if (isset(self::$_instance)) {
            // Close connection
            self::$_instance = null;
        }
    }
}