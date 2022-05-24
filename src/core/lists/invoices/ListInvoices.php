<?php
namespace app\src\core\lists\invoices;

use app\src\core\lists\ModifiedDataForDisplay;
use app\src\models\GetAllData;

class ListInvoices
{
    public function getInvoices()
    {
        return $this->retrieve();
    }

    private function retrieve()
    {
        $invoices = new GetAllData();
        $tables = ['invoices', 'companies', 'company_type'];
        $join_type = ['INNER JOIN', 'INNER JOIN'];
        $cols = ['invoices.id_company', 'companies.id_company', 'companies.id_type', 'company_type.id_type'];
        $data = $invoices->getDoubleJoin(
            $tables, $join_type, $cols,
            'invoices.id_invoice', 'invoices.facture_number', 'invoices.date', 'companies.name', 'company_type.type'
        );

        $modified_data = new ModifiedDataForDisplay($data);
        $final_data = $modified_data->modifiedDate();

        return $final_data;
    }
}