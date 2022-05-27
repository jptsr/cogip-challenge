<?php
namespace app\src\core\validations;

class GetValidation
{
    public function getUsernameValidation(string $username)
    {
        $input = new ValidateUsername();
        $input->setUsername($username);
        return $input->validate();
    }

    public function getPasswordValidation(string $password) : string
    {
        $input = new ValidatePassword();
        $input->setPassword($password);
        return $input->validate();

        if ( empty($_SESSION['mot-de-passe_vide']) and empty($_SESSION['mauvais_mot-de-passe']) ) {
            return $input->getPassword();
        } else {
            return $input->validate();
        }
    }
}