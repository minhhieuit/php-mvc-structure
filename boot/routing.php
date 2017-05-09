<?php
namespace app\boot;
use app\controllers\ControllerBase;

/**
 * Application URL routing.
 *
 * @author     Serhan Polat
 * @version    2.0
 */

class Routing
{
    public static function init()
    {
        if (!isset($_GET["page"])) {
            header("Location: /home");
            return false;
        }

        $request = explode("/", $_GET["page"]);

        // Create object with requested page name.
        $controllerName = "app\controllers\\" . ucfirst($request[0]) . "Controller";
        $controller = new $controllerName();

        // Check if class with page name exists.
        if (!class_exists($controllerName)) {
            echo "Couldn't find requested page (class does not exist).";
            return false;
        }

        if (isset($request[1])) {
            $page = trim($request[1]);
        } else {
            $page = "index";
        }

        // Check if method with page name exists and method name is not used by controller base class.
        if (method_exists($controller, $page) && !method_exists(new ControllerBase(), $page)) {
            $controller->$page();
        } else {
            echo "Couldn't find requested page (method does not exist).";
            return false;
        }
    }
}
