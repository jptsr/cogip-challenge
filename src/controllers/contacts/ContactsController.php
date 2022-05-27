<?php

namespace app\src\controllers\contacts;
use app\src\controllers\Controller;
use app\src\core\lists\contacts\ListContacts;
use app\src\core\Permission;

class ContactsController extends Controller
{
    public function displayView()
    {
        session_start();

        Permission::log();

        $all_contacts = new ListContacts();
        $_SESSION['all_contacts'] = $all_contacts->getContacts();

        return $this -> views('contacts');
    }
}