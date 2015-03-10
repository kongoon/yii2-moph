<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $address
 * @property string $email
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'address', 'email'], 'required'],
            [['address'], 'string'],
            [['firstname', 'lastname', 'email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'ชื่อ',
            'lastname' => 'นามสกุล',
            'address' => 'ที่อยู่',
            'email' => 'อีเมลล์',
        ];
    }
}
