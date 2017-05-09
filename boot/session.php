<?php
namespace app\boot;

/**
 * Starts, destroys and regenerates session.
 * 
 * @author     Serhan Polat
 * @version    2.0
 */

class Session
{
    /**
     * Refresh / regenerate interval in seconds
     */
    public $refreshInterval = 900;

    function __construct() {}

    function __clone() {}

    public function destroy()
    {
        session_unset();
        session_destroy();
    }

    public function refresh()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['session_created'])) {
            if (TIME - $_SESSION['session_created'] > $this->refreshInterval) {
                session_regenerate_id();
            }
        } else {
            $_SESSION['session_created'] = TIME;
        }
    }
}