<?php

namespace app\src\core;

class ValidateNewContact extends Validate
{
    public function validate()
    {
        return $this->validates($_POST);
    }
}