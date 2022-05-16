<?php

namespace app\src\controllers\companies;
use app\src\controllers\Controller;

class CompaniesController extends Controller
{
    public function displayView()
    {
        return $this -> views('companies');
    }
}