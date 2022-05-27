<?php

namespace app\src\controllers\contacts;

use app\src\controllers\Controller;
use app\src\core\lists\companies\ListCompanies;
use app\src\core\Permission;
use app\src\core\validations\ValidateNewContact;
use app\src\models\CreateData;

class NewContactController extends Controller
{
    public function displayView()
    {

        session_start();

        Permission::log();

        unset($_SESSION['test']);
        unset($_SESSION['erreurNewcontact']);

        $companies_list = new ListCompanies();
        $_SESSION['all_companies'] = $companies_list->allCompanies();

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
            for ($m = 0; $m < 5; $m++) {
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
        // Je vérifie si on envoi les infos et si oui, on procède a la vérification de la validation
        if (isset($_POST['newContact'])) {
            // Je crée un compteur pour le foreach, si chaque erreur est vide, on incrémente
            $compteur = 0;
            foreach ($_SESSION['erreurNewcontact'] as $data) {
                if ($data == '') {
                    $compteur += 1;
                }
            }
            // Si il n'y a pas d'erreur alors on push dans la db et on redirige vers la liste des contacts sinon, on recharge la page
            if ($compteur == 5) {
                $CreateNewContactDb = new CreateData();
                $CreateNewContactDb->CreateNewContact('contacts', $_POST['nom'], $_POST['prenom'], $_POST['phone'], $_POST['email'], $_POST['compagnie']);
                header('location: /liste-contacts');
                $compteur = 0;
            } elseif ($compteur == 0) {
                // je n'ai rien à mettre ici
            } else {
                // header('location: /nouveau-contact');
                $compteur = 0;
            }
        }
    }
}
