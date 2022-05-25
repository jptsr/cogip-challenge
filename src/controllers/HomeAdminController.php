<?php
namespace app\src\controllers;

use app\src\core\lists\menu\CallListsMenu;
use app\src\models\DeleteData;

class HomeAdminController extends Controller
{
    public function displayView()
    {
        session_start();

        if ( $_SESSION['user_status'] !== 'admin' ) {
            $_SESSION['non_admin'] = 'Vous n\'avez pas les droits';
            header('location: /menu');
        }
        
        if ( !empty($_SESSION['get_id_delete']) ) {
            echo 'delete';
            $this->delete();
            unset($_SESSION['get_id_delete']);
        }
        
        $callLists = new CallListsMenu();
        $callLists->call();

        return $this -> views('adminWelcome');
    }

    private function delete()
    {
        if ( $_SESSION['get_id_delete'][1] == 'factures' ) {
            echo 'facture';
            $id = $_SESSION['get_id_delete'][0];
            $delete_invoice = new DeleteData();
            $delete_invoice->deleteOnId('invoices', 'id_invoice', $id);
            echo 'done';
        }
        
        if ( $_SESSION['get_id_delete'][1] == 'contacts' ) {
            echo 'contact';
            $id = $_SESSION['get_id_delete'][0];
            $delete_contact = new DeleteData();
            $delete_contact->deleteOnId('contacts', 'id_contact', $id);
            echo 'done';
        }
        
        if ( $_SESSION['get_id_delete'][1] == 'entreprises' ) {
            echo 'entreprise';
            $id = $_SESSION['get_id_delete'][0];
            $delete_invoice = new DeleteData();
            $delete_invoice->deleteOnId('companies', 'id_company', $id);
            echo 'done';
        }
    }
}