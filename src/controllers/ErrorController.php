<?php

namespace app\src\controllers;

class ErrorController extends Controller
{
    public function displayView()
    {
        return $this->views('error');
    }
}