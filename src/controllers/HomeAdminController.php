<?php
namespace app\src\controllers;

class HomeAdminController extends Controller
{
    public function displayView()
    {
        return $this -> views('adminWelcome');
    }
}