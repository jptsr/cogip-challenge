<?php

namespace app\src\core\validations;

class ValidateNewInvoice
{
    public function ValidateNewInvoice(int $index, array $arrV, array $arrK)
    {
        $string = $arrV[$index];
        $_SESSION['test2'] = $string;
        $error = $this->validationForInvoice($string, $index, $arrK);
        $_SESSION['erreurNewInvoice'] = $error;
    }
    public function validationForInvoice($string, $index, $arrK)
    {
        if($string == ''){
            return 'Ce champ ne peut pas être vide.';
        }elseif($string < 12 || $string > 12){
            return 'Il faut 1 lettres et 12 nombres.';
        }
        // else{
        //     $this -> validationSpecial($string);
        //     $p1String = substr($string, 0, 1);
        //     $this->validationPartOne($p1String);
        //     $p2String = substr($string, 1, 8);
        //     $p3String = substr($string, 8, 3);
        //     $fullString = strtoupper($p1String) . $p2String . "-" . $p3String;
        //     return $fullString;
        // }
    }
    public function validationSpecial($string)
    {
        $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
        return $this->validationSpecialCar($string, $pattern);
    }
    public function validationPartOne($string){
        $pattern = '/\d/';
        if(preg_match($pattern, $string) == 1){
            return 'La premère lettre ne peut pas être un nombre.';
        }
    }
    public function validationPartTwo($string){
        $pattern = '/\d/';
        if(preg_match($pattern, $string, $matches)){
            $sum = count($matches);
            if($sum != 8)
            {
                return 'Il faut 11 nombres.';
            }
        }
    }
    public function validationPartThree($string){
        $pattern = '/\d/';
        if(preg_match($pattern, $string, $matches)){
            $sum = count($matches);
            if($sum != 3)
            {
                return 'Il faut 11 nombres.';
            }
        }
    }

    public function validationSpecialCar($string, $pattern)
    {
        if (preg_match($pattern, $string) === false || preg_match($pattern, $string) == 1) {
            return 'Il y a des caractère spéciaux non autorisé.';
        }
    }
}