<?php

namespace app\src\controllers\contacts;
use app\src\controllers\Controller;
use app\src\core\lists\details\GetContactDetails;
use app\src\core\Permission;

class ContactDetailsController extends Controller
{
    public function displayView()
    {
        session_start();

        Permission::log();
        
        $id = $_SESSION['get_id_details'];

        $data = new GetContactDetails();
        $_SESSION['details_contact'] = $data->details($id);

        return $this -> views('contactDetails');
    }
}