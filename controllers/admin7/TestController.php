<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\controllers\admin;
use app\components\BaseController;
class TestController extends  BaseController
{
    public function actionIndex()
    {
        echo "123";
    }

    public function actionSave()
    {
        echo "abc";
    }
}

