<?php
namespace app\src\core\validations;

use app\src\core\ErrorMsgValidation;
use app\src\core\Login;

class ValidateUsername
{
    private $username;

    public function setUsername(string $username)
    {
        $this->username = trim( htmlspecialchars($username) ); 
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function validate()
    {
        if ( !empty($this->username) and !ctype_space($this->username) ) {
            $isMatch = new Login();
            return $isMatch->matchInDb($this->username);
        } else {
            return ErrorMsgValidation::createErrorMsg('empty', 'username');
        }
    }
}