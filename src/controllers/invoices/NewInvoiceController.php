<?php

namespace app\src\controllers\invoices;

use app\src\controllers\Controller;
use app\src\core\validations\ValidateNewInvoice;

class NewInvoiceController extends Controller
{
    public function displayView()
    {
        session_start();

        unset($_SESSION['erreurNewInvoice']);

        $this->ValidationCompleteInvoice();

        return $this->views('newInvoice');
    }

    private function ValidationCompleteInvoice()
    {
        if (isset($_POST['newInvoice'])) {
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
            // Il n'y a qu'un seul champ a vérifié
            for ($i = 0; $i < 3; $i++) {
                if ($arrKeys[$i] == 'factureNumber') {
                    $numberFacture = new ValidateNewInvoice();
                    $numberFacture->ValidateNewInvoice($i, $arrValues, $arrKeys);
                }
            }
            $_SESSION['test'] = $arrKeys[0];
        }
    }
}
