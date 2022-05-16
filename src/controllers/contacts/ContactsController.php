<?php

namespace app\src\controllers\contacts;
use app\src\controllers\Controller;

class ContactsController extends Controller
{
    public function displayView()
    {
        return $this -> views('contacts');
    }
}