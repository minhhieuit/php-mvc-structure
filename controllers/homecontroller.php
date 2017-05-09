<?php
namespace app\controllers;
use app\services\TestService;
use app\viewmodels\HomeViewModel;

/**
 * Sample home controller with model binding.
 * 
 * @author     Serhan Polat
 * @version    2.0
 */

class HomeController extends ControllerBase
{
    public function index()
    {
        $service = new TestService();
        $model = new HomeViewModel();
        $model->welcome = "Welcome to PHP MVC.";
        $model->number = $service->division(10, 5);
        $this->render("home/index", "Home", $model);
    }

    public function test()
    {
        $this->render("home/test", "Home Test");
    }
}