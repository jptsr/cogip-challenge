<?php

namespace app\src\controllers\contacts;

use app\src\controllers\Controller;
use app\src\core\validations\ValidateNewContact;

class NewContactController extends Controller
{
    public function displayView()
    {

        session_start();
        unset($_SESSION['nom']);
        unset($_SESSION['prenom']);
        unset($_SESSION['phone']);
        unset($_SESSION['email']);
        $this->ValidationComplete();
        return $this->views('newContact');
    }

    private function ValidationComplete()
    {
        if (isset($_POST['newContact'])) {
            $data = $_POST;
            $arrKeys = array_keys($data);
            $arrValues = [];
            $arrSession = [];
            // J'assigne les values de $data dans un tableau
            foreach ($data as $datas) {
                array_push($arrValues, $datas);
            }
            // J'assigne la valeur NULL dans chaque champ avec '' 
            for ($k = 0; $k < 5; $k++) {
                if ($arrValues[$k] == '') {
                    $arrValues[$k] = '';
                }
            }
            // Je boucle sur le tableau des Keys pour une correspondance avec les champ du formulaire
            for ($m = 0; $m < 4; $m++) {
                if ($arrKeys[$m] == 'phone') {
                    $phoneValidation = new ValidateNewContact();
                    $phoneValidation->validationPhone($m, $arrValues, $arrKeys);
                } elseif ($arrKeys[$m] == 'email') {
                    $mailValidation = new ValidateNewContact();
                    $mailValidation->validationMail($m, $arrValues, $arrKeys);
                } else {
                    $otherValidation = new ValidateNewContact();
                    $otherValidation->validationSpecial($m, $arrValues, $arrKeys);
                }
            }
            // J'assigne les keys et les values dans un nouveau tableau
            for ($i = 0; $i < 5; $i++) {
                $arrSession[$arrKeys[$i]] = $arrValues[$i];
            }
        }
    }
}
