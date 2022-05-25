<?php

namespace app\src\core\validations;

class ValidationNewCompany
{
    public function validationSpecial(int $index, array $arrV, array $arrK)
    {
        $string = $arrV[$index];
        $errorCar = $this->validationCar($string, $index, $arrK);
        $_SESSION['erreurNewCompany'][$arrK[$index]] = $errorCar;
    }
    public function validationTVAspecial(int $index, array $arrV, array $arrK)
    {
        $string = $arrV[$index];
        $errorCar = $this->validationCar($string, $index, $arrK);
        $_SESSION['erreurNewCompany'][$arrK[$index]] = $errorCar;
    }
    public function validationPhone(int $index, array $arrV, array $arrK)
    {
        $string = $arrV[$index];
        $errorCar = $this->validationCar($string, $index, $arrK);
        $_SESSION['erreurNewCompany'][$arrK[$index]] = $errorCar;
    }

    public function validationCar($string, $index, $arrK)
    {
        if ($string == '') {
            return 'Ce champ ne peut pas être vide.';
        } else {
            if ($arrK[$index] == 'phone') {
                $patternNumber = '/\d/';
                return $this->validationNumberPhone($string, $patternNumber);
            } elseif ($arrK[$index] == 'tva') {
                $patternTVA = ['/\d/', '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', '/\D/'];
                trim($string);
                return $this->validationTva($string, $patternTVA);
            } else {
                $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
                trim($string);
                return $this->validationCarSpecial($string, $pattern);
            }
        }
    }
    public function validationTva($string, $patternTVA)
    {
        $compteur = 0;
        if (preg_match_all($patternTVA[0], $string, $matches)) {
            $sum = count($matches[0]);
            $compteur += $sum;
            if ($sum < 9 || $sum > 9) {
                return 'Il faut 9 nombres.';
            } elseif (preg_match_all($patternTVA[1], $string, $matches)) {
                $add = count($matches[0]);
                $compteur += $add;
                if ($add != 0) {
                    return 'Il a des caractère spéciaux non admis.';
                }
            } else {
                if (preg_match_all($patternTVA[2], $string, $matches)) {
                    $plus = count($matches[0]);
                    $compteur += $plus;
                    if ($compteur != 11) {
                        return 'Il manque des caractères.';
                    }
                }
            }
        }
    }
    public function validationNumberPhone($string, $pattern)
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
    public function validationCarSpecial($string, $pattern)
    {
        if (preg_match($pattern, $string) === false || preg_match($pattern, $string) == 1) {
            return 'Il y a des caractère spéciaux non autorisé.';
        }
    }
}
