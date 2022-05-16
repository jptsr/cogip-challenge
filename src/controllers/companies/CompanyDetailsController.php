<?php

namespace app\src\controllers\companies;
use app\src\controllers\Controller;

class CompanyDetailsController extends Controller
{
    public function displayView()
    {
        return $this -> views('companyDetails');
    }
}