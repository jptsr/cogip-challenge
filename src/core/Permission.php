<?php
namespace app\src\core;

class Permission
{
    public static function log()
    {
        if ( empty($_SESSION['username']) or empty($_SESSION['user_status']) ) {
            header('location: /logout');
        }
    }

    public static function admin()
    {
        if ( $_SESSION['user_status'] !== 'admin' ) {
            $_SESSION['non_admin'] = 'Vous n\'avez pas les droits';
            header('location: /menu');
        }
    }
}