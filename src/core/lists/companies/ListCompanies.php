<?php
namespace app\src\core\lists\companies;

use app\src\core\lists\ModifiedDataForDisplay;
use app\src\models\GetAllData;

class ListCompanies{
    public function allCompanies()
    {
        $array[0] = $this->clientCompanies();
        $array[1] = $this->providerCompanies();

        return $array;
    }

    private function clientCompanies()
    {
        $provider_companies = new GetAllData();
        $data = $provider_companies->getDataWithId('companies', 'id_type', 1);

        $modified_data = new ModifiedDataForDisplay($data);
        $modified_data->modifiedCompanyType();
        $final_data = $modified_data->modifiedVatNumber();
        
        return $final_data;
    }
    
    private function providerCompanies()
    {
        $client_companies = new GetAllData();
        $data = $client_companies->getDataWithId('companies', 'id_type', 2);
        
        $modified_data = new ModifiedDataForDisplay($data);
        $modified_data->modifiedCompanyType();
        $final_data = $modified_data->modifiedVatNumber();
        
        return $final_data;
    }
}