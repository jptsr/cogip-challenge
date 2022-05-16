<?php

namespace app\src\controllers\companies;
use app\src\controllers\Controller;

class UpdateCompanyController extends Controller
{
    public function displayView()
    {
        return $this -> views('updateCompany');
    }
}