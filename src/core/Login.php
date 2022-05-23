<?php
namespace app\src\core;

use app\src\models\GetData;

class Login
{
    public function matchInDb($username)
    {
        $request = new GetData();
        $does_exist = $request->getData('employee', 'username', $username);

        if ( !empty($does_exist) ) {
            return $does_exist;
        } else {
            return ErrorMsgValidation::createErrorMsg('wrong', 'username');
        }
    }
}