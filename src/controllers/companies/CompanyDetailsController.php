<?php

namespace app\src\controllers\companies;
use app\src\controllers\Controller;
use app\src\controllers\ErrorController;

class CompanyDetailsController extends Controller
{
    public function displayView()
    {
        session_start();

        var_dump($_SESSION['get_id_company']);
        
        return $this -> views('companyDetails');
    }
}