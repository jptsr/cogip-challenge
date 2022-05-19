<?php
namespace app\src\core\lists;

use app\src\models\GetData;

class PrepareLists
{
    public function prepareCompaniesListMenu()
    {
        $companies = new GetData();
        $list = $companies->getList('companies', 'id_company', 'DESC', 5);

        return CreateListLastCompanies::createList($list);
    }
}