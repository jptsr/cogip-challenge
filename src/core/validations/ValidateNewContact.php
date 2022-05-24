<?php

namespace app\src\core\validations;

class ValidateNewContact
{
    public function validationPhone(int $index, array $arrV, array $arrK)
    {
        $number = $arrV[$index];
        $numberCar = $this->validationCar($number, $index, $arrK);
        $_SESSION[$arrK[$index]] = $numberCar;
    }
    public function validationMail(int $index, array $arrV, array $arrK)
    {
        $email = $arrV[$index];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $emailBon = $this->validationCar($email, $index, $arrK);
        $_SESSION[$arrK[$index]] = $emailBon;
    }
    public function validationSpecial(int $index, array $arrV, array $arrK)
    {
        $string = $arrV[$index];
        $ErrorCar = $this->validationCar($string, $index, $arrK);
        $_SESSION[$arrK[$index]] = $ErrorCar;
    }


    public function validationCar($string, $index, $arrK)
    {
        if ($string == '') {
            return 'Ce champ ne peut pas être vide.';
        } else {
            if ($arrK[$index] == 'phone') {
                $patternNumber = '/\d/';
                return $this->validationNulberPhone($string, $patternNumber);
            } elseif ($arrK[$index] == 'email') {
                return $this->validationMailFilter($string);
            } else {
                $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
                trim($string);
                return $this->validationCarSpecial($string, $pattern);
            }
        }
    }


    public function validationNulberPhone($string, $pattern)
    {
        if (preg_match_all($pattern, $string, $matches)) {
            $sum = count($matches[0]);
            if ($sum < 10 || $sum > 10) {
                return 'Il faut 10 nombres.';
            }
        } else {
            return 'Seul les nombres sont admis.';
        }
    }
    public function validationMailFilter($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        } else {
            return "L'adresse mail n'est pas valide.";
        }
    }
    public function validationCarSpecial($string, $pattern)
    {
        if (preg_match($pattern, $string) === false || preg_match($pattern, $string) == 1) {
            return 'Il y a des caractère spéciaux non autorisé.';
        }
    }
}
