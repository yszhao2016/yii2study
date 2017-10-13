<?php

namespace app\commands;
use Yii;
use yii\console\Controller;
/**
 * Description of crawFundData
 *
 * @author zys
 */
class FundCrawController extends Controller {
        
   /** http://fund.eastmoney.com/
    * class="fundInfoItem"
    */
    public function actionIndex()
    {
        $sql = "select * from fund_info";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        print_r($data);
    }
}
