<?php
namespace app\src\core\update;

class SetDataContact
{
    protected string $lastname;
    protected string $firstname;
    protected string $phone;
    protected string $email;
    protected int $company;

    protected function setLastname($lastname)
    {
        $this->lastname = trim(htmlspecialchars($lastname));
    }

    protected function setFirstname($firstname)
    {
        $this->firstname = trim(htmlspecialchars($firstname));
    }

    protected function setPhoneNb($phone)
    {
        $this->phone = trim(htmlspecialchars($phone));
    }

    protected function setEmail($email)
    {
        $this->email = trim(htmlspecialchars($email));
    }

    protected function setCompany($company)
    {
        $this->company = trim(htmlspecialchars($company));
    }

    protected function getData() : array
    {
        $data['lastname'] = $this->lastname;
        $data['firstname'] = $this->firstname;
        $data['phone'] = $this->phone;
        $data['email'] = $this->email;
        $data['company'] = $this->company;

        return $data;
    }
}