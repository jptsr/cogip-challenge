<?php

namespace app\src\controllers\companies;
use app\src\controllers\Controller;

class UpdateCompanyController extends Controller
{
    public function displayView()
    {
        session_start();

        $id = $_SESSION['get_id_updates'];
        
        return $this -> views('updateCompany');
    }
}