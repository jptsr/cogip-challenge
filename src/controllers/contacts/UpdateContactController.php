<?php

namespace app\src\controllers\contacts;
use app\src\controllers\Controller;

class UpdateContactController extends Controller
{
    public function displayView()
    {
        return $this -> views('updateContact');
    }
}