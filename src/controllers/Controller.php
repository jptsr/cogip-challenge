<?php

namespace app\src\controllers;

class Controller
{
    public function views($view)
    {
        require __DIR__. '/../views/pages/'.$view.'.php';
    }
}