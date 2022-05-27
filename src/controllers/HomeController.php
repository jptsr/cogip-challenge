<?php
namespace app\src\controllers;

use app\src\core\lists\menu\CallListsMenu;
use app\src\core\Permission;

class HomeController extends Controller
{
    public function displayView()
    {
        session_start();

        Permission::log();

        $callLists = new CallListsMenu();
        $callLists->call();
        
        return $this->views('welcome');
    }
}