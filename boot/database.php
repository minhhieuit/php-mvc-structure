<?php
/**
 * Database
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 * @date       08/12/2016
*/

class Database {
    private static $instance = null;

    private function __construct() {}

    private function __clone() {}

    public static function get() {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            try {
                self::$instance = new PDO('mysql:host=localhost;dbname=DBNAME', 'DBUSER', 'DBPASSWORD', $pdo_options);
            }
            catch(PDOException $ex) {
                die("Connection to the database failed.");
            }
        }
        return self::$instance;
    }
}