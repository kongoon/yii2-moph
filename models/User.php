<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface{
 
    //กำหนดสถานะ ค่าเริ่มต้น 1
    const STATUS_NOTACTIVE = 0;
    const STATUS_ACTIVE = 1;
    //กำหนดสิทธิื ค่าเริ่มต้น 1
    const ROLE_USER = 1;
    const ROLE_MANAGER = 5;
    const ROLE_ADMIN = 10;
    
    public static function tableName(){
        return 'user';
    }
    public function rules(){
        return [
            ['status','default','value'=>self::STATUS_ACTIVE],
            ['status','in','range'=>
                [self::STATUS_ACTIVE, self::STATUS_NOTACTIVE]],
            
            ['role','default','value'=>self::ROLE_USER],
            ['role','in','range'=>
                [self::ROLE_USER,self::ROLE_MANAGER,self::ROLE_ADMIN]],
            [['username','email'],'unique'],
            [['username','password_hash'],'required']
        ];
    }


    #### Interface Method ####
    public function getAuthKey() {
        
    }

    public function getId() {
        
    }

    public function validateAuthKey($authKey) {
        
    }

    public static function findIdentity($id) {
        
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        
    }


}
