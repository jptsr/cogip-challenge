<?php

namespace app\src\controllers;

use app\src\core\Permission;

class ErrorController extends Controller
{
    public function displayView()
    {
        session_start();

        Permission::log();
        
        if ( preg_match('/\d+/', explode('=', $_SERVER['REQUEST_URI'])[1]) and substr($_SERVER['REQUEST_URI'], 0, 8) == '/details' ) {
            session_start();
            $page = substr($_SERVER['REQUEST_URI'], 9);
            $this->getDetailsId($_SERVER['REQUEST_URI'], $page);
        }

        if ( preg_match('/\d+/', explode('=', $_SERVER['REQUEST_URI'])[1]) and substr($_SERVER['REQUEST_URI'], 0, 13) == '/modification' ) {
            session_start();
            $page = substr($_SERVER['REQUEST_URI'], 14);
            $this->getUpdatesId($_SERVER['REQUEST_URI'], $page);
        }
        
        return $this->views('error');
    }

    private function getDetailsId($url, $page)
    {
        $page = explode('-', $url)[1];
        $url = explode('=', $url);
        $id = $url[1];
        $location = 'location: /details-'.$page;
        $_SESSION['get_id_details'] = $id;
        header($location);
    }

    private function getUpdatesId($url, $page)
    {
        $page = explode('-', $url)[1];
        $url = explode('=', $url);
        $id = $url[1];
        $location = 'location: /modification-'.$page;
        $_SESSION['get_id_updates'] = $id;
        header($location);
    }
}