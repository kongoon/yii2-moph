<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "base_district".
 *
 * @property integer $id
 * @property integer $province_id
 * @property string $district_name
 *
 * @property BaseProvince $province
 * @property BaseTambon[] $baseTambons
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'base_district';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'province_id', 'district_name'], 'required'],
            [['id', 'province_id'], 'integer'],
            [['district_name'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสอำเภอ',
            'province_id' => 'รหัสจังหวัด',
            'district_name' => 'ชื่ออำเภอ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['id' => 'province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBaseTambons()
    {
        return $this->hasMany(Tambon::className(), ['district_id' => 'id']);
    }
}
