<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;
/**
 * Description of FundInfo
 *
 * @author sdgi
 */
class FundInfo extends ActiveRecord {
    
    
    /**
     * @return string 返回该AR类关联的数据表名
     */
    public static function tableName()
    {
        return 'fund_info';
    }
    
    
    
    
    /**
     * 如果在你的应用中应用了不止一个数据库，
     * 且你需要给你的 AR 类使用不同的数据库链接（DB connection） ，
     * 你可以覆盖掉 getDb() 方法
     */
    
//    public static function  getDb()
//    {
//        
//    }
    
    
    
    /**
     * 
     * 
     */
//    public static  function rules() 
//    {
//         return [
        // name, email, subject 和 body 属性必须有值
//        [['name', 'email', 'subject', 'body'], 'required'],

        // email 属性必须是一个有效的电子邮箱地址
//        ['email', 'email'],
//    ];
//    }
}
