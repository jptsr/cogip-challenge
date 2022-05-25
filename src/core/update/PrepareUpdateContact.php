<?php
namespace app\src\core\update;

use app\src\models\GetAllData;

class PrepareUpdateContact extends SetDataContact
{
    public function contactData($id)
    {
        $actual_contact = new GetAllData();
        $tables = ['contacts', 'companies'];
        $data = $actual_contact->getInnerJoinListAll(
            $tables, 
            'INNER JOIN', 'contacts.id_company', 'companies.id_company',
            'contacts.id_contact', $id,
            'contacts.id_contact', 'contacts.lastname', 'contacts.firstname', 'contacts.phone_number', 'contacts.email', 'companies.name'
        );

        return $data;
    }

    public function prepareUpdateInDb() : array
    {
        $this->setLastname($_POST['nom']);
        $this->setFirstname($_POST['prenom']);
        $this->setPhoneNb($_POST['phone']);
        $this->setEmail($_POST['email']);
        $this->setCompany($_POST['compagnie']);
        $final_data = $this->getData();

        return $final_data;
    }
}