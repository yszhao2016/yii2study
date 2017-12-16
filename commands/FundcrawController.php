<?php

namespace app\commands;
use Yii;
use yii\console\Controller;
use app\models\FundInfo;
use app\models\DayData;
use \yii\data\Pagination;
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
        $data = FundInfo::find()->select(['id','num'])->asArray()->all();

        foreach($data  as $v){
            $url = $this->Geturl($v);
            $data = $this->GetData($url);
            //获取当前天 日期
            $today_date = date("Y-m-d");
            echo $data['value']."\t".$data['pre_value']."\n";
            //查询当天是否有数据
            $model = DayData::find()->where(['num'=>$v['num']])->andwhere(['date'=>$today_date])->one();
            if(!$model){
                $model = new DayData;
            } 
            $model->num =  $v['num'];
            $model->near_value = $data['value'];
            $model->date = $today_date;
            $model->save();
            
            
            
            //查询前一天 数据是否存在 
            $predate = date("Y-m-d", strtotime("-1 days"));
            
            $preday_model = DayData::find()->where(['num'=>$v['num']])->andwhere(['date'=>$predate])->one();
            
            //如果前一天数据存在更新 前一天真实数据
            if($preday_model){
                $preday_model->real_value = $data['pre_value'];
                $preday_model->save();
            }
            
        }

        
    }
    
    
    /**
     * 
     * @param type $data
     * @return $array   返回url
     */
    public function Geturl($value)
    {
   
        $url = 'http://fund.eastmoney.com/'.$value['num'].".html";
        return $url;
    }
    
    
    
    
    public function GetData($url)
    {
        
        $str_data = $this->get_html($url);
        $str = $this->MatchStr_once('/<div class="fundInfoItem">(.*?)<\/table>/is',$str_data);
        $str_value = $this->MatchStr_once('/id="gz_gszzl">(.*?)<\/span>/',$str);
        $data['value']= floatval(preg_replace('/[+|%]/','',$str_value)); 
//        echo $value."\t";  
        
        $pre_value = $this->MatchStr_once('/class="dataItem02">(.*?)<\/dd>/',$str);
        $pre_value = $this->MatchStr_once('/ui-font-middle.*?">(.*?)</',$pre_value);
        $data['pre_value'] = floatval(preg_replace('/[+|%]/','',$pre_value));
//        echo $pre_value."\n";
        return $data;
        
        
    }
            
            
            
    public function MatchStr($rulestr,$str)
    {
        if(preg_match_all($rulestr, $str,$new_str)){
            return $new_str[1];
        }else{
            return 0;
        }
        
    }  
    
    public function MatchStr_once($rulestr,$str)
    {
        if(preg_match($rulestr, $str,$new_str)){
            return $new_str[1];
        }
        else{
            return 0;
        }
        
    }
    
    
    
     static function get_html($url, $arg=array())
     {
        //Minion_CLI::write($url);
       $ch = curl_init($url); 
       curl_setopt($ch, CURLOPT_USERAGENT
                  , "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36");
       curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
       curl_setopt($ch, CURLOPT_TIMEOUT, 5); 


       if(isset($arg['REFERER'])){
               curl_setopt($ch, CURLOPT_REFERER, $arg['REFERER']); 
       }
       if(isset($arg['HTTPHEADER'])){
               curl_setopt($ch, CURLOPT_HTTPHEADER, $arg['HTTPHEADER']); 
       }
       if(isset($arg['HEADER'])){
               curl_setopt($ch, CURLOPT_HEADER, 1);
       }
       if(isset($arg['HTTPS'])){
               curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
               curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
       }
       if(isset($arg['POST'])){
           curl_setopt ($ch, CURLOPT_POSTFIELDS, $arg['POST']);
       }
       $content = curl_exec($ch);
       if(curl_errno($ch)===28)
       {
               return 'TIME_OUT';
       }

       curl_close($ch);
       return $content;
     }
}
