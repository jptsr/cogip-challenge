<?php

namespace app\src\controllers\companies;

use app\src\controllers\Controller;
use app\src\core\validations\ValidationNewCompany;

class NewCompanyController extends Controller
{
    public function displayView()
    {
        session_start();

        unset($_SESSION['test']);

        unset($_SESSION['erreurNewcompagnie']);

        $this->ValidationComplete(); // changer pour compagnie

        return $this->views('newCompany');
    }

    private function ValidationComplete()
    {
        if (isset($_POST['newCompany'])) {
            $data = $_POST;
            $arrKeys = array_keys($data);
            $arrValues = [];
            // $arrSession = [];
            // J'assigne les values de $data dans un tableau
            foreach ($data as $datas) {
                array_push($arrValues, $datas);
            }
            // J'assigne la valeur NULL dans chaque champ avec '' 
            for ($k = 0; $k < 4; $k++) { // ATTENTION je mets 4 mais c'est 5 avec la pays
                if ($arrValues[$k] == '') {
                    $arrValues[$k] = '';
                }
            }
            for ($m = 0; $m < 5; $m++) {
                if ($arrKeys[$m] == 'phone') {
                    $phoneValidation = new ValidationNewCompany();
                    $phoneValidation->validationPhone($m, $arrValues, $arrKeys); //pas encore
                } elseif ($arrKeys[$m] == 'tva') {
                    $tvaValidation = new ValidationNewCompany();
                    $tvaValidation->validationTVAspecial($m, $arrValues, $arrKeys); // pas encore
                } else {
                    $otherValidation = new ValidationNewCompany();
                    $otherValidation->validationSpecial($m, $arrValues, $arrKeys);
                }
            }


        }
    }
}
