<?php

namespace app\src\controllers\companies;
use app\src\controllers\Controller;

class UpdateCompanyController extends Controller
{
    public function displayView()
    {
        session_start();
        
        return $this -> views('updateCompany');
    }
}