<?php

namespace app\src\controllers\contacts;
use app\src\controllers\Controller;

class UpdateContactController extends Controller
{
    public function displayView()
    {
        session_start();
        
        return $this -> views('updateContact');
    }
}