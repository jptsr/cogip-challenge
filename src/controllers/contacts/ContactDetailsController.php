<?php

namespace app\src\controllers\contacts;
use app\src\controllers\Controller;

class ContactDetailsController extends Controller
{
    public function displayView()
    {
        return $this -> views('contactDetails');
    }
}