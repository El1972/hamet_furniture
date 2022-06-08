<?php

class LoginController
{

    public function actionIndex()
    {

        require_once ROOT . '/views/login/login.php';

        return true;

    }

}
