<?php
namespace app\src\core;

use app\src\models\GetAllData;

class Login
{
    public function matchInDb($username)
    {
        $request = new GetAllData();
        $does_exist = $request->getData('employee', 'username', $username);

        if ( !empty($does_exist) ) {
            return $does_exist;
        } else {
            return ErrorMsgValidation::createErrorMsg('wrong', 'username');
        }
    }
}