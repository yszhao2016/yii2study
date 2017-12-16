<?php

namespace app\commands;
use Yii;
use yii\console\Controller;
/**
 * Description of crawFundData
 *
 * @author zys
 */
class FundcrawController extends Controller {
        
   /** http://fund.eastmoney.com/
    * class="fundInfoItem"
    */
    public function actionIndex()
    {
        $sql = "select * from fund_info";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
    }
}
