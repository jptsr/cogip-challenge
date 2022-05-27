<?php
namespace app\src\core\validations;

use app\src\core\update\PrepareUpdateCompany;
use app\src\core\validations\ValidateNewCompany;
use app\src\models\UpdateData;

class GetValidationUpdateCompany
{
    public function ValidationCompleteCompany()
    {
        if (isset($_POST['newCompany'])) {
            $data = $_POST;
            $arrKeys = array_keys($data);
            $arrValues = [];
            $arrSession = [];
            // J'assigne les values de $data dans un tableau
            foreach ($data as $datas) {
                array_push($arrValues, $datas);
            }
            // J'assigne la valeur NULL dans chaque champ avec '' 
            for ($k = 0; $k < 4; $k++) {
                if ($arrValues[$k] == '') {
                    $arrValues[$k] = '';
                }
            }
            for ($m = 0; $m < 4; $m++) {
                if ($arrKeys[$m] == 'phone') { // normalement le phone n'est pas utilisé
                    $phoneCompanyValidation = new ValidateNewCompany();
                    $phoneCompanyValidation->validationPhone($m, $arrValues, $arrKeys, $arrSession);
                } elseif ($arrKeys[$m] == 'tva') {
                    $tvaValidation = new ValidateNewCompany();
                    $tvaValidation->validationTVAspecial($m, $arrValues, $arrKeys, $arrSession);
                } else {
                    $otherCompanyValidation = new ValidateNewCompany();
                    $otherCompanyValidation->validationSpecial($m, $arrValues, $arrKeys, $arrSession);
                }
            }
            // J'assigne les keys et les values dans un nouveau tableau
            for ($i = 0; $i < 4; $i++) {
                $arrSession[$arrKeys[$i]] = $arrValues[$i];
            }

            unset($_SESSION['erreurNewCompany']['newCompany']);

            if (isset($_POST['newCompany'])) {
                $compteur = 0;
                foreach ($_SESSION['erreurNewCompany'] as $data) {
                    if ($data == '' or $data == NULL) {
                        $compteur += 1;
                    }
                }
                // Mise en forme pour la tva
                $string = $arrSession['tva'];
                $p1string = substr($string, 0, 2);
                $p2string = substr($string, 2, 3);
                $p3string = substr($string, 5, 3);
                $p4string = substr($string, 8, 3);
                $fullString = strtoupper($p1string) . " " . $p2string . " " . $p3string . " " . $p4string;
                $_SESSION['test'] = $arrValues;
                $arrValues[1] = $fullString;
                $arrSession['tva'] = $arrValues[1];
                $_SESSION['test2'] = $arrValues;
                // Si il n'y a pas d'erreur alors on push dans la db et on redirige vers la liste des contacts sinon, on recharge la page
                if ($compteur == 4) {
                    $update = new PrepareUpdateCompany();
                    $final_data = $update->prepareUpdateInDb();

                    $update_company = new UpdateData();
                    $update_company->updateCompany('companies', $final_data['name'], $final_data['country'], $final_data['vat'], $final_data['type'], $_SESSION['get_id_updates']);

                    $compteur = 0;

                    header('location: /liste-entreprises');
                } elseif ($compteur == 0) {
                    // je n'ai rien à mettre ici
                } else {
                    $compteur = 0;
                }
            }
        }
    }
}