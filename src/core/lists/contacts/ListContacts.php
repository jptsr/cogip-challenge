<?php
namespace app\src\core\lists\contacts;

use app\src\core\lists\ModifiedDataForDisplay;
use app\src\models\GetAllData;

class ListContacts
{
    public function getContacts()
    {
        return $this->retrieve();
    }

    private function retrieve()
    {
        $contact = new GetAllData();
        $tables = ['contacts', 'companies'];
        $data = $contact->getJoinNoCondition(
            $tables,
            'INNER JOIN', 'contacts.id_company', 'companies.id_company',
            'contacts.id_contact', 'contacts.lastname', 'contacts.firstname', 'contacts.phone_number', 'contacts.email', 'companies.name'
        );

        $modified_data = new ModifiedDataForDisplay($data);
        $modified_data->modifiedName();
        $final_data = $modified_data->modifiedPhoneNumber();

        return $final_data;
    }
}