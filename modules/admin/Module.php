<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Module
 *
 * @author sdgi
 */


namespace app\modules\admin;
use Yii;
use yii\helpers\Url;
use \yii\base\Module as BaseModule;
class Module extends BaseModule{
    
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $layout = 'main.php';
    
    
    
    public function init()
    {
        parent::init();
        Yii::configure($this, require(__DIR__.'/config.php'));
        
//        $this->resetErrorHandler();
//        $this->rbacConfInit();
//        $this->resetLanguage();
        
        
        /**
         * 注册时间 记录下用户回退地址
         * 
         * 事件   $object->on($param1,$param2);第一个参数，其实就是所谓定义事件的语义名称，第二个参数才是处理主体
         * 
         * 
         */
//        $this->on(self::EVENT_AFTER_ACTION, function(){
//            if(Yii::$app->requestedRoute == 'backend/default/ueditor'){
//                return;
//            }
//            if(!Yii::$app->request->isAjax) {
//                Url::remember();
//            }
//        });
    }
    
    
     /**
     * 重新设置异常捕获页面
     */
    public function resetErrorHandler()
    {
//        Yii::$app->set(
//                'errorHandler',[
//                    'class' => 'yii\web\ErrorHandler',
//                    'error' => 'admin/default/error',
//                ]  
//        );
//          Yii::$app->errorHandler->register();
    }
    
    
    /**
     * 初始化rbac 配置初始化    yii2-admin
     */
//    protected  function rbacConfInit()
//    {
//        Yii::$container->set(
//                'mdm\admin\components\Configs',[
//                    'db' => 'customDb',
//                    'menuTable' => 'admin_menu',
//                    'userTable' => 'admin_user',
//                ]
//                
//        );
//        
//    }
    
    
    
    
    /**
     * 重置app language
     */
//    protected function resetLanguage()
//    {
//        Yii::$app->sourceLanguage = 'en-US';
//    }
}
