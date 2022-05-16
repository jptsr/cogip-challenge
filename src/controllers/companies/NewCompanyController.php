<?php

namespace app\src\controllers\companies;
use app\src\controllers\Controller;

class NewCompanyController extends Controller
{
    public function displayView()
    {
        return $this -> views('newCompany');
    }
}