<?php
namespace app\src\controllers;

use app\src\core\lists\PrepareLists;

class HomeController extends Controller
{
    public function displayView()
    {
        session_start();
        
        $getCompaniesList = new PrepareLists();
        $_SESSION['list_last_companies'] = $getCompaniesList->prepareCompaniesListMenu();
        
        return $this->views('welcome');
    }
}