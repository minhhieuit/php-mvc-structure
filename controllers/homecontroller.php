<?php
namespace app\controllers;
use app\services\TestService;
use app\viewmodels\HomeViewModel;

/**
 * Sample home controller with model binding.
 * 
 * @author     Serhan Polat
 * @version    2.1
 */

class HomeController extends ControllerBase
{
    public function index()
    {
        $this->render("home/index", "Home");
    }

    public function test($foo = "bar")
    {
        $service = new TestService();
        $model = new HomeViewModel();
        $model->welcome = "Welcome to PHP MVC.";
        $model->number = $service->division(10, 5);
        $model->foo = $foo;
        $this->render("home/test", "Home Test", $model);
    }
}