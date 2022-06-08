<?php

class SiteController
{

    public function actionIndex()
    {

        require_once ROOT . '/views/home/index.php';

        return true;

    }

}
