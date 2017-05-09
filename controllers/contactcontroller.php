<?php
namespace app\controllers;

/**
 * Sample controller.
 * 
 * @author     Serhan Polat
 * @version    2.0
 */

class ContactController extends ControllerBase
{
    public function index()
    {
        $this->formular();
    }

    public function formular()
    {
        $this->render("contact/formular", "Contact Us", null, false);
    }
}