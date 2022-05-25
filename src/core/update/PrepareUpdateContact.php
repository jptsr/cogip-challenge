<?php
namespace app\src\core\update;

use app\src\models\GetAllData;

class PrepareUpdateContact
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
}