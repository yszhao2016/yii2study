<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author zys
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex($message = 'hello world')
    {
        //        $sql = "select * from fund_info";
//        $data = Yii::$app->db->createCommand($sql)->queryAll();
//        $data = FundInfo::findAll(['id'=>2,'num'=>123]);
//        print_r($data);
//        查找id为2的数据
//        $data = FundInfo::findOne(2);
//        echo $data->num;
//        
//        查找所有数据  返回时数组  
//        $data  = FundInfo::find()->all();
//        echo $data[0]->num;
//        print_r($data[0]);
        
//        $data = FundInfo::find()->where(['id'=>1])->all();  // all 返回 数组
//        $data = FundInfo::find()->where(['id'=>1])->one();  // one 返回 对象
//        print_r($data);

//        统计返回 数据 数       
//        $data_count_num = FundInfo::find()->count();
//        $data_count_num = FundInfo::find()->where()->count();
//        echo $data_count_num;

 //    有问题  待学习  limit  分页
//            $data = FundInfo::find()->limit(3);
//        $data = FundInfo::find()->where();
//        print_r($data);exit;
//        $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '2']);
//        $data = $data->offset($pages->offset)->limit($pages->limit)->all();
//        print_r($data);
        
//        $data = FundInfo::find()->batch(3);
//        print_r($data);
        
        
//         $data = FundInfo::find()->limit(1)->offset(1)->with("id")->all();
//         print_r($data);
    }
    
    
    public function actionTest()
    {
        echo "test";
        
    }
}
