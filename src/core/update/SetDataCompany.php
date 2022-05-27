<?php
namespace app\src\core\update;

class SetDataCompany
{
    protected string $name;
    protected string $vat;
    protected string $country;
    protected int $type;

    protected function setName($name)
    {
        $this->name = trim(htmlspecialchars($name));
    }

    protected function setVat($vat)
    {
        $this->vat = trim(htmlspecialchars($vat));
    }

    protected function setCountry($country)
    {
        $this->country = trim(htmlspecialchars($country));
    }

    protected function setType($type)
    {
        $this->type = trim(htmlspecialchars($type));
    }

    protected function setVatCorrectly()
    {
        explode(" ", $this->vat);

        if ( explode(" ", $this->vat)[0] !== NULL  ) {
            $all = '';
            foreach ( explode(" ", $this->vat) as $part ) {
                $all .= $part;
            }
            $p1 = substr($all, 0, 2);
            $p2 = substr($all, 2, 3);
            $p3 = substr($all, 5, 3);
            $p4 = substr($all, 8, 3);
            
            $this->vat = $p1.' '.$p2.' '.$p3.' '.$p4;
            return $this->vat;
        } else {
            $p1 = substr($this->vat, 0, 2);
            $p2 = substr($this->vat, 2, 3);
            $p3 = substr($this->vat, 5, 3);
            $p4 = substr($this->vat, 8, 3);
            
            $this->vat = $p1.' '.$p2.' '.$p3.' '.$p4;
            return $this->vat;
        }
    }

    protected function getData() : array
    {
        $data['name'] = $this->name;
        $data['country'] = $this->country;
        $data['vat'] = $this->vat;
        $data['type'] = $this->type;

        return $data;
    }
}