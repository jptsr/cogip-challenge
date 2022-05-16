<?php
namespace app\src\controllers;

class LoginController extends Controller
{
    public function displayView()
    {
        return $this -> views('login');
    }
}