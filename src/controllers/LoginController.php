<?php
namespace app\src\controllers;

use app\src\core\ErrorMsgValidation;
use app\src\core\validations\GetValidation;

class LoginController extends Controller
{
    public function displayView()
    {
        if ( isset($_POST['login']) ) {
            $this->handleLogin();
        }

        return $this -> views('login');
    }

    private function handleLogin()
    {
        session_start();
        session_unset();

        $username = new GetValidation();
        $user_data = $username->getUsernameValidation($_POST['username']);
        $password = new GetValidation();
        $input_pwd = $password->getPasswordValidation($_POST['pwd']);

        if ( empty($_SESSION['empty_username']) and empty($_SESSION['wrong_username']) and password_verify($input_pwd, $user_data[0]['password']) ) {
            session_unset();
            $_SESSION['username'] = $user_data[0]['username'];
            // $_SESSION['password'] = $user_data[0]['password'];
            $_SESSION['user_status'] = ( $user_data[0]['status'] == 1 ) ? 'admin' : 'moderateur';

            if ( $_SESSION['user_status'] == 'admin' ) {
                header('location: /menu-admin');
            } else {
                header('location: /menu');
            }
        } else {
            if ( empty($_SESSION['empty_password']) ) {
                ErrorMsgValidation::createErrorMsg('wrong', 'password');
            }
        }
    }
}