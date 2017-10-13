<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author sdgi
 */
namespace app\controllers\home;
use app\components\BaseController;
class IndexController extends BaseController{

    public function actionIndex()
    {
        echo "我是前台测试";
    }
    
    
}
