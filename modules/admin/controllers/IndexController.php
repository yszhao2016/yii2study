<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexController
 *
 * @author sdgi
 */
namespace app\modules\admin\controllers;
use Yii;
use \yii\web\Controller;
class IndexController extends Controller {
    public function actionIndex()
    {
//        exit("这是后台");
        return $this->render("index");
        
        
    }
    
    
    
    public function actionStudy()
    {
        
        
        
        
        return $this->renderPartial("study");
        
        
        
        
    }
}
