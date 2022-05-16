<?php
namespace app\src\controllers;

class HomeController extends Controller
{
    public function displayView()
    {
        return $this->views('welcome');
    }
}