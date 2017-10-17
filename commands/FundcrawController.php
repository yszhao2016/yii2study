<?php

namespace app\commands;
use Yii;
use yii\console\Controller;
use app\models\FundInfo;
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
        $url_arr = $this->actionGeturl($data);
        foreach($url_arr as $url){
            $this->GetData($url);
        }

        
    }
    
    
    /**
     * 
     * @param type $data
     * @return $array   返回url
     */
    public function actionGeturl($data)
    {
        $url=array();
        foreach ($data as $value){
            $url[] = 'http://fund.eastmoney.com/'.$value['num'].".html";
        }
        print_r($url);
        return $url;
    }
    
    
    
    
    public function GetData($url)
    {
        
        $str_data = $this->get_html($url);
        $str = $this->MatchStr_once('/<div class="fundInfoItem">(.*?)<\/table>/is',$str_data);
        $str_value = $this->MatchStr_once('/id="gz_gszzl">(.*?)<\/span>/',$str);
        $value= floatval(preg_replace('/[+|%]/','',$str_value)); 
        $pre_value = $this->MatchStr_once('/class="dataItem02">(.*?)<\/dd>/',$str);
        $pre_value = $this->MatchStr_once('/ui-font-middle.*?">(.*?)</',$pre_value);
        $pre_value = floatval(preg_replace('/[+|%]/','',$pre_value));
        echo $pre_value."\n";
        
        
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
