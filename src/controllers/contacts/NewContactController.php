<?php

namespace app\src\controllers\contacts;
use app\src\controllers\Controller;

class NewContactController extends Controller
{
    public function displayView()
    {
        return $this -> views('newContact');
    }
}