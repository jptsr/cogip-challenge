<?php

namespace app\src\controllers\companies;
use app\src\controllers\Controller;
use app\src\core\update\PrepareUpdateCompany;
use app\src\core\validations\GetValidationUpdateCompany;

class UpdateCompanyController extends Controller
{
    public function displayView()
    {
        session_start();

        if ( empty($_SESSION['username']) or empty($_SESSION['user_status']) ) {
            header('location: /logout');
        }

        unset($_SESSION['test']);
        unset($_SESSION['test2']);
        unset($_SESSION['erreurNewCompany']);

        $id = $_SESSION['get_id_updates'];

        $data = new PrepareUpdateCompany();
        $_SESSION['actual_company'] = $data->companyData($id);
        $_SESSION['actual_company'][0]['VAT'] = $data->modifyVat($id);

        $validation = new GetValidationUpdateCompany();
        $validation->ValidationCompleteCompany();
        
        return $this -> views('updateCompany');
    }
}