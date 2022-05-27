<?php
namespace app\src\core\update;

use app\src\models\GetAllData;

class PrepareUpdateCompany extends SetDataCompany
{
    public function companyData($id)
    {
        $actual_contact = new GetAllData();
        $tables = ['companies', 'company_type'];
        $data = $actual_contact->getInnerJoinListAll(
            $tables, 
            'INNER JOIN', 'companies.id_type', 'company_type.id_type',
            'companies.id_company', $id,
            'companies.id_company', 'companies.name', 'companies.country', 'companies.VAT', 'company_type.id_type'
        );

        return $data;
    }

    public function modifyVat($id)
    {
        $data = $this->companyData($id);
        explode(" ", $data[0]['VAT']);
        $new = explode(" ", $data[0]['VAT'])[0] . explode(" ", $data[0]['VAT'])[1] . explode(" ", $data[0]['VAT'])[2] . explode(" ", $data[0]['VAT'])[3];
        $data[0]['VAT'] = $new;

        return $data[0]['VAT'];
    }

    public function prepareUpdateInDb() : array
    {
        $this->setName($_POST['nom']);
        $this->setVat($_POST['tva']);
        $this->setVatCorrectly();
        $this->setCountry($_POST['pays']);
        $this->setType($_POST['type']);
        $final_data = $this->getData();

        return $final_data;
    }
}