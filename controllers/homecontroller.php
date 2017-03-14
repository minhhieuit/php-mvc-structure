<?php
class HomeController extends Controller
{
    public $view = "home";
    public $title = "Home";

    public function service() {
        $model = new HomeViewModel();
        $model->welcome = "Welcome to PHP MVC.";
        return $model;
    }
}