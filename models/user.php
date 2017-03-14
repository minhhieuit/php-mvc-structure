<?php
class User
{
    public $firstName;
    public $lastName;
    public $age;
    public $email;

    public function getFullName() {
        return $firstName . " " . $lastName;
    }
}