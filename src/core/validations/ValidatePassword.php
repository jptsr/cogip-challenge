<?php
namespace app\src\core\validations;

use app\src\core\ErrorMsgValidation;

class ValidatePassword
{
    private $pwd;

    public function setPassword(string $password)
    {
        $this->pwd = trim( htmlspecialchars($password) );
    }

    public function getPassword()
    {
        return $this->pwd;
    }

    public function validate()
    {
        if ( !empty($this->pwd) and !ctype_space($this->pwd) ) {
            return $this->pwd;
        } else {
            return ErrorMsgValidation::createErrorMsg('empty', 'password');
        }
    }
}