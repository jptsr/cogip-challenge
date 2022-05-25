<?php

namespace app\src\controllers;

class ErrorController extends Controller
{
    public function displayView()
    {
        if ( preg_match('/\d+/', explode('=', $_SERVER['REQUEST_URI'])[1]) and substr($_SERVER['REQUEST_URI'], 0, 8) == '/details' ) {
            session_start();
            $page = substr($_SERVER['REQUEST_URI'], 9);
            $this->getDetailsId($_SERVER['REQUEST_URI'], $page);
        }

        if ( preg_match('/\d+/', explode('=', $_SERVER['REQUEST_URI'])[1]) and substr($_SERVER['REQUEST_URI'], 0, 6) == '/liste' ) {
            session_start();
            $type = explode('-', $_SERVER['REQUEST_URI'])[1];
            $this->getDeleteId($_SERVER['REQUEST_URI'], $type);
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

    private function getDeleteId($url, $type)
    {
        $url = explode('=', $url);
        $id = $url[1];
        $location = 'location: /menu-admin';
        $_SESSION['get_id_delete'][0] = $id;
        $_SESSION['get_id_delete'][1] = $type;
        header($location);
    }
}