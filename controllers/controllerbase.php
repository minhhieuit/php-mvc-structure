<?php
namespace app\controllers;

/**
 * Controller base class
 *
 * @author     Serhan Polat
 * @version    2.1.1
 */

class ControllerBase
{
    function __construct() {}

     /**
      * Binds model to view and requires the view.
      * 
      * @param string $view 
      * @param string $title
      * @param object $model
      * @param boolean $useLayout
      * @return void
      */
    public function render($view = "home/index", $title = "Home", $model = null, $useLayout = true)
    {
        $file = ROOT . PATH_VIEWS . "/" . $view . ".php";

        if ($useLayout) {
            require_once(ROOT . PATH_VIEWS . "/shared/_layout.php");
        } else {
            require_once($file);
        }
    }
}