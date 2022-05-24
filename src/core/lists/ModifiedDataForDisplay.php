<?php
namespace app\src\core\lists;

class ModifiedDataForDisplay
{
    private $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function modifiedDate() : array
    {
        for ($i=0; $i < count($this->array); $i++) {
            $this->array[$i]['date'] = explode("-", $this->array[$i]['date']);
            $this->array[$i]['date'] = array_reverse($this->array[$i]['date']);
            $this->array[$i]['date'] = $this->array[$i]['date'][0] . '/' . $this->array[$i]['date'][1] . '/' . $this->array[$i]['date'][2];
        }

        return $this->array;
    }

    public function modifiedPhoneNumber() : array
    {
        for ($i=0; $i < count($this->array); $i++) {
            $part1 = substr($this->array[$i]['phone_number'], 0, 4);
            $part2 = substr($this->array[$i]['phone_number'], 4, 2);
            $part3 = substr($this->array[$i]['phone_number'], 6, 2);
            $part4 = substr($this->array[$i]['phone_number'], 8, 2);
            $this->array[$i]['phone_number'] = $part1 . '/' . $part2 . '.' . $part3 .  '.' . $part4;
        }

        return $this->array;
    }

    public function modifiedName() : array
    {
        for ($i=0; $i < count($this->array); $i++) {
            $this->array[$i]['lastname'] .= ' ' . $this->array[$i]['firstname'];
        }

        return $this->array;
    }

    public function modifiedVatNumber() : array
    {
        for ($i=0; $i < count($this->array); $i++) {
            $this->array[$i]['VAT'] = explode(" ", $this->array[$i]['VAT']);
            $this->array[$i]['VAT'] = $this->array[$i]['VAT'][0] . $this->array[$i]['VAT'][1] . $this->array[$i]['VAT'][2] . $this->array[$i]['VAT'][3];
        }

        return $this->array;
    }

    public function modifiedCompanyType() : array
    {
        for ($i=0; $i < count($this->array); $i++) {
            $this->array[$i]['id_type'] = ( $this->array[$i]['id_type'] == 1 ) ? 'fournisseur' : 'client';
        }

        return $this->array;
    }
}