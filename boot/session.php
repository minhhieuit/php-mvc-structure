<?php
/**
 * Starts, destroys and regenerates session.
 * 
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 */

class Session
{
    /**
     * Refresh / regenerate interval in seconds
     */
    public static $refreshInterval = 1800;

    private function __construct() {}

    private function __clone() {}

    public static function start() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function destroy() {
        session_unset();
        session_destroy();
    }

    public static function refresh() {
        if (isset($_SESSION['created'])) {
            if (time() - $_SESSION['created'] > self::$refreshInterval) {
                session_regenerate_id();
            }
        } else {
            $_SESSION['created'] = time();
        }
    }
}