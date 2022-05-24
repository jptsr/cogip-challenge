<?php
namespace app\src\controllers;

use app\src\core\lists\menu\CallListsMenu;

class HomeAdminController extends Controller
{
    public function displayView()
    {
        session_start();

        if ( $_SESSION['user_status'] !== 'admin' ) {
            $_SESSION['non_admin'] = 'Vous n\'avez pas les droits';
            header('location: /menu');
        }

        $callLists = new CallListsMenu();
        $callLists->call();

        return $this -> views('adminWelcome');
    }
}