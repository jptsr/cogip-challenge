<?php
namespace app\src\controllers;

use app\src\core\lists\menu\CallListsMenu;

class HomeAdminController extends Controller
{
    public function displayView()
    {
        session_start();

        $callLists = new CallListsMenu();
        $callLists->call();

        return $this -> views('adminWelcome');
    }
}