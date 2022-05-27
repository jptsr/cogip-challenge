<?php

namespace app\src\controllers\contacts;
use app\src\controllers\Controller;
use app\src\core\lists\companies\ListCompanies;
use app\src\core\update\PrepareUpdateContact;
use app\src\core\validations\GetValidationUpdateContact;

class UpdateContactController extends Controller
{
    public function displayView()
    {
        session_start();

        if ( empty($_SESSION['username']) or empty($_SESSION['user_status']) ) {
            header('location: /logout');
        }
        
        unset($_SESSION['test']);
        unset($_SESSION['erreurNewcontact']);

        $id = $_SESSION['get_id_updates'];

        $data = new PrepareUpdateContact();
        $_SESSION['actual_contact'] = $data->contactData($id);

        $companies_list = new ListCompanies();
        $_SESSION['all_companies'] = $companies_list->allCompanies();

        $validation = new GetValidationUpdateContact();
        $validation->ValidationComplete();
        
        return $this -> views('updateContact');
    }
}