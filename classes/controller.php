<?php
/**
 * Controller base class
 * Runs service and displays view.
 *
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.1.1
 **/

class Controller
{
    /**
     * Title of the page.
     **/
    public $title;

    /**
     * Name of the view file (without extension).
     **/
    public $view;
    
    /**
     * Array of JavaScript files which should be included with this page controller.
     **/    
    public $javaScriptFiles = [];

    /**
     * JavaScript code that should be embedded with this page controller.
     **/    
    public $javaScript;
    
    /**
     * True if you want to use this view in your _layout view.
     **/    
    public $useLayout = true;

    function __construct() {}

    /**
     * Executes service and renders the view.
     **/
    public function view() {
        // Access to global variables
        global $pageTitle, $webTitle, $model;

        if (!isset($this->view)) {
            Log::error("View is not set.", __CLASS__, __FILE__, __FUNCTION__, __LINE__);
            $this->error();
            return;
        }
        if (is_null($this->view)) {
            Log::error("View is null.", __CLASS__, __FILE__, __FUNCTION__, __LINE__);
            $this->error();
            return;
        }

        $file = $this->getFileName($this->view);

        if (!file_exists($file)) {
            Log::error("View file does not exist. ($file)", __CLASS__, __FILE__, __FUNCTION__, __LINE__);
            $this->error();
            return;
        }
        
        require_once($file);
    }

    /**
     * This will be run before the view is displayed.
     * Is only responsible for calling functions from service classes and binding results to viewmodels.
     **/
    public function service() {}

    /**
     * Renders error page.
     **/
    private function error() {
        $this->title = "Error";
        $this->view = "error";
        $file = $this->getFileName($this->view);
        require_once($file);
    }

    /**
     * Gets JavaScript files / code from the controller and returns a string which can be embedded into the view.
     **/
    public function getJavaScript() {
        $result = "<script>" . $this->javaScript . "</script>";
        
        foreach ($this->javaScriptFiles as $script) {
            $result .= "<script src='" . $script . "'></script>";
        }

        return $result;
    }


    private function getFileName($file) {
        return ROOT . PATH_VIEW . "/" . $file . ".php";
    }
}