<?php

namespace app\src\controllers\companies;
use app\src\controllers\Controller;
use app\src\core\lists\companies\ListCompanies;
use app\src\core\Permission;

class CompaniesController extends Controller
{
    public function displayView()
    {
        session_start();

        Permission::log();

        $companies_list = new ListCompanies();
        $_SESSION['all_companies'] = $companies_list->allCompanies();

        return $this -> views('companies');
    }
}