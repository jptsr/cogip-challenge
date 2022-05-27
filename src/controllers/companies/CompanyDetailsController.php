<?php

namespace app\src\controllers\companies;
use app\src\controllers\Controller;
use app\src\core\lists\details\GetCompanyDetails;
use app\src\core\Permission;

class CompanyDetailsController extends Controller
{
    public function displayView()
    {
        session_start();

        Permission::log();
        
        $id = $_SESSION['get_id_details'];

        $data = new GetCompanyDetails();
        $_SESSION['details_company'] = $data->details($id);
        
        return $this -> views('companyDetails');
    }

    public function store()
    {
        // create, show, index, update, delete, store
    }
}