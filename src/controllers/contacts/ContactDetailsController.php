<?php

namespace app\src\controllers\contacts;
use app\src\controllers\Controller;

class ContactDetailsController extends Controller
{
    public function displayView()
    {
        session_start();
        var_dump($_SESSION['get_id_details']);

        return $this -> views('contactDetails');
    }
}