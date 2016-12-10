<?php
/**
 * Controller class
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 * @date       09/12/2016
 */

class Controller implements IController {
    public static $service;
    public static $title;
    public static $view;
    public static $model;

    function __construct() {}

    public function View() {
        global $output, $pageTitle;

        if (!isset(self::$view)) {
            echo "\$view is not set.", "<br>";
            return;
        }
        if (is_null(self::$view)) {
            echo "\$view is null.", "<br>";
            return;
        }

        $file = PATH_BASE . PATH_VIEW . "/" . self::$view . ".php";

        if (!file_exists($file)) {
            echo "\$view file was not found.", "<br>";
            return;
        }

        $pageTitle = self::$title;
        require_once($file);
    }

    public function Service() {}
}