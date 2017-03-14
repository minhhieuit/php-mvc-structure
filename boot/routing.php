<?php
/**
 * Web routing.
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.1.1
 */

class Routing
{
    public static function init() {
        global $controller, $webTitle;

        if (!isset($_GET['p'])) {
            header("Location: /home");
            return;
        }

        $controller = ucfirst($_GET['p']) . "Controller";
        if (class_exists($controller)) {
            $controller = new $controller();
        } else {
            $controller = new ErrorController();
        }
    }
}
