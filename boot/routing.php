<?php
namespace app\boot;
use app\controllers\ControllerBase;

/**
 * Application URL routing.
 *
 * @author     Serhan Polat
 * @version    2.1
 */

class Routing
{
    public static function init()
    {
        if (!isset($_GET["url"])) {
            header("Location: /home");
            return false;
        }

        $request = explode("/", $_GET["url"]);

        // Create object with requested page
        if (isset($request[0])) {
            $controllerName = "app\controllers\\" . ucfirst(trim($request[0])) . "Controller";
            unset($request[0]);
        } else {
            $controllerName = "app\controllers\HomeController";
        }

        // Check if class with page name exists.
        if (!class_exists($controllerName)) {
            echo "Couldn't find requested page.<br><a href='/'>Go back to home page</a>";
            return false;
        }

        $controller = new $controllerName();

        // Check if method is given in url
        if (isset($request[1])) {
            $method = trim($request[1]);
            unset($request[1]);
        } else {
            $method = "index";
        }

        // Check if method with page name exists and method name is not used by controller base class.
        if (method_exists($controller, $method) && !method_exists(new ControllerBase(), $method)) {
            call_user_func_array([$controller, $method], $request);
        } else {
            echo "Couldn't find requested page.<br><a href='/'>Go back to home page</a>";
            return false;
        }
    }
}