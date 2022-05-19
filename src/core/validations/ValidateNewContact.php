<?php

namespace app\src\core\validations;

class ValidateNewContact extends Validate
{
    public function validate()
    {
        echo '1';
        return $this->validates($_POST);
    }
}