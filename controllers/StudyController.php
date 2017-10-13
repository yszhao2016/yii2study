<?php

/*
 *  study
 *  @auther zys
 */
namespace app\controllers;
use yii\web\Controller;
class StudyController extends Controller
{
    
    public function actionSay()
    {
        $param = array('str'=>'<script>alert("测试 html");</script>"$<>world+-/*"');
        return $this->renderPartial("say",$param);
    }
}

