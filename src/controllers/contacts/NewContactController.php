<?php

namespace app\src\controllers\contacts;

use app\src\controllers\Controller;
use app\src\core\ErrorMsgValidation;

class NewContactController extends Controller
{
    public function displayView()
    {

        session_start();
        session_unset();

        if (isset($_POST['newContact'])) {
            // ma validation
            $data = $_POST;
            // elles sont bien là
            foreach ($data as $champ) {
                // si c'est un email, je l'envoie dans la fonction liée à l'email
                if ($champ == $_POST['email']) {
                    $this->validationMail($champ);
                } elseif($champ == $_POST['phone']) {
                    $this->validationPhone($champ);
                }
                else{
                    $this->validationSpecial($champ);
                }
            }
        }
        return $this->views('newContact');
    }
    public function validationPhone($number)
    {
        $pattern = '/\d/';
        if(preg_match_all($pattern, $number, $matches)) {
            $sum = count($matches[0]);
            if($sum !== 10){
                
            }
          }
    }
    public function validationSpecial($string)
    {
        $arrErreur = [];
        $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';

        trim($string);

        if (preg_match($pattern, $string) === false || preg_match($pattern, $string) == 1) {

            //faire un tableau avec les erreurs, mettre ces erreurs avec messages dans une variable session, mettre cette variable session dans une autre variable session, faire une boucle dans ma variable session erreur pour check les erreurs et les affichers dans l'html
            $NomErreur = $this->retrouverLeNomDansLePost($string);
            
            array_push($arrErreur, $NomErreur);
            return ErrorMsgValidation::createErrorMsg('mauvais', $NomErreur);
        }
    }
    public function validationMail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            // l'adresse est bonne mais je sais pas quoi faire ici du coup
            
        } else {
            $_SESSION['email'] = "l'adresse mail n'est pas valide.";
            // C'est ok, on a bien la variable dans session key -> value
        }
    }
    public function retrouverLeNomDansLePost($string)
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $tel = $_POST['phone'];
        $mail = $_POST['email'];
        $arr = [$nom, $prenom, $tel, $mail];
        for ($i = 0; $i < 4; $i++) {
            if ($arr[$i] == $string) {
                $key = array_search($arr[$i], $_POST);
                return $key;
            }
        }
    }
}
