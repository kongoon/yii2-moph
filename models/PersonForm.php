<?php
namespace app\models;

use yii\base\Model;

class PersonForm extends Model{
    public $firstname;
    public $lastname;
    public $address;
    public $email;
    
    public function attributeLabels() {
        return [
            'firstname' =>'ชื่อ',
            'lastname'  =>'นามสกุล',
            'address'   =>'ที่อยู่',
            'email'     =>'อีเมลล์',
        ];
    }
    public function rules(){
        return [
            [['firstname','lastname','address','email'],'required'],
            ['address','string'],
            ['email','email']
        ];
    }
}
