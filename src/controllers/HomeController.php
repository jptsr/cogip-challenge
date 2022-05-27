<?php
namespace app\src\controllers;

use app\src\core\lists\menu\CallListsMenu;

class HomeController extends Controller
{
    public function displayView()
    {
        session_start();

        if ( empty($_SESSION['username']) or empty($_SESSION['user_status']) ) {
            header('location: /logout');
        }

        $callLists = new CallListsMenu();
        $callLists->call();
        
        return $this->views('welcome');
    }
}