<?php
namespace app\src\controllers;

use app\src\core\lists\menu\CallListsMenu;

class HomeController extends Controller
{
    public function displayView()
    {
        session_start();

        $callLists = new CallListsMenu();
        $callLists->call();
        
        return $this->views('welcome');
    }
}