<?php
namespace app\src\core\lists\menu;

class CountSelectedColumn
{
    public $columns;

    public function __construct($columns)
    {
        $this->columns = $columns;
    }

    public function createQuery()
    {
        $nb = count($this->columns);

        $listColumns = '';
        for ($i = 0; $i < $nb; $i++) {
            if ($i == ($nb-1)) {
                $listColumns .= $this->columns[$i];
            } else {
                $listColumns .= $this->columns[$i].',';
            }
        }

        return $listColumns;
    }
}