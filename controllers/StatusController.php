<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

/**
 * Description of StatusController
 *
 * @author sdgi
 */
use Yii;
use yii\web\Controller;
use app\models\Status;

class StatusController extends Controller
{
    public function actionCreate()
    {
        $model = new Status;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            //  $model 有post数据时直接展示
            print_r(Yii::$app->request->post());
            return $this->render('view', ['model' => $model]);
        } else {
            // 没有数据的时候，直接渲染create视图
            return $this->render('create', ['model' => $model]);
        }
    }
}

