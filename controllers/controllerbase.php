<?php
namespace app\controllers;

/**
 * Controller base class
 *
 * @author     Serhan Polat
 * @version    2.0
 */

class ControllerBase
{
    /**
     * Title of the page.
     */
    public $title;
    
    /**
     * Array of JavaScript files which should be included with this page controller.
     */    
    public $javaScriptFiles = [];
    
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

    /**
     * Returns HTML code which contains JS embeds.
     * 
     * @return string
     */
    public function getJavaScript()
    {
        $result = "";
        foreach ($this->javaScriptFiles as $script) {
            $result .= "<script src='" . $script . "'></script>";
        }
        return $result;
    }
}