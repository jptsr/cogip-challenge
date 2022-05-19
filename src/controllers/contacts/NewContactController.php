<?php

namespace app\src\controllers\contacts;

use app\src\controllers\Controller;

class NewContactController extends Controller
{
    public function displayView()
    {
        if (isset($_POST['newContact'])) {
            // ma validation
            $data = $_POST;
            foreach ($data as $champ) {
                if ($champ == $_POST['email']) {
                    $this->validationMail($champ);
                } else {
                    $this->validationSpecial($champ);
                }
            }
        }
        return $this->views('newContact');
    }
    public function validationSpecial($string)
    {

        $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
        trim($string);
        if (preg_match($pattern, $string) === false || preg_match($pattern, $string) == 1) {
            $error = "une erreur ". $string . ". ";
            echo $error;
        }
    }
    public function validationMail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo ("$email is a valid email address! ");
        } else {
            echo ("$email is not a valid email address! ");
        }
    }
}
