<?php
/**
 * Sample home controller with model binding.
 * 
 * @author     Serhan Polat <kontakt@serhanp.de>
 * @version    1.0
 */

class HomeController extends Controller
{
    public $view = "home";
    public $title = "Home";

    public function service() {
        $service = new TestService();
        $model = new HomeViewModel();
        $model->welcome = "Welcome to PHP MVC.";
        $model->number = $service->division(10, 5);
        return $model;
    }
}