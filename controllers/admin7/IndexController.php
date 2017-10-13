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
namespace app\controllers\admin;
use app\components\BaseController;

class IndexController extends BaseController{
    //put your code here
    
    public function actionIndex()
    {

        return $this->renderPartial('index'); 
        
    }
    
    
    public function actionTest()
    {
        echo "测试";
    }
}
