<?php
class HomeController extends Controller {
    function __construct() {
        self::$view = "home";
        self::$title = "Home";
        self::$service = new HomeService;
    }

    public function Service() {
    }
}