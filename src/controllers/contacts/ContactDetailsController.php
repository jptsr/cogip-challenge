<?php

namespace app\src\controllers\contacts;
use app\src\controllers\Controller;
use app\src\core\lists\details\GetContactDetails;

class ContactDetailsController extends Controller
{
    public function displayView()
    {
        session_start();

        if ( empty($_SESSION['username']) or empty($_SESSION['user_status']) ) {
            header('location: /logout');
        }
        
        $id = $_SESSION['get_id_details'];

        $data = new GetContactDetails();
        $_SESSION['details_contact'] = $data->details($id);

        return $this -> views('contactDetails');
    }
}