<?php
namespace app\src\core;

class ErrorMsgValidation
{
    public static function createErrorMsg(string $error, string $input)
    {
        $error = mb_strtolower($error);
        $input = mb_strtolower($input);
        $_SESSION[$error.'_'.$input] = ucfirst($error).' '.$input;
        return $_SESSION[$error.'_'.$input];
    }
    public static function createErrorMsgNewContact(array $errors)
    {
        return $_SESSION[$errors] = $errors;
    }
}