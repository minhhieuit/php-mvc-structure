<?php
/**
 * Web routing.
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.1
*/

class Routing
{
    public static function init() {
        global $controller, $webTitle;

        if (isset($_GET['p'])) {
            $page = str_replace("-", "", $_GET['p']);

            $controller = ucfirst($page) . "Controller";

            if (class_exists($controller)) {
                $controller = new $controller();
            } else {
                $controller = new ErrorController();
            }
        }

        if (!isset($page)) {
            header("Location: /home");
        }

        $webTitle = APP_TITLE . " - " . $controller->title;
    }
}
