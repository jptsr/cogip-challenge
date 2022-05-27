<?php
namespace app\src\controllers;

class LogoutController extends Controller
{
    public function displayView()
    {
        session_start();
        session_unset();
        session_destroy();
        
        return $this->views('login');
    }
}