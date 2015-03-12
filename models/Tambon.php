<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "base_tambon".
 *
 * @property integer $id
 * @property integer $district_id
 * @property integer $province_id
 * @property string $tambon_name
 *
 * @property BaseDistrict $district
 * @property BaseProvince $province
 */
class Tambon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'base_tambon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'district_id', 'province_id', 'tambon_name'], 'required'],
            [['id', 'district_id', 'province_id'], 'integer'],
            [['tambon_name'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสตำบล',
            'district_id' => 'รหัสอำเภอ',
            'province_id' => 'รหัสจังหวัด',
            'tambon_name' => 'ชื่อตำบล',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(BaseDistrict::className(), ['id' => 'district_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(BaseProvince::className(), ['id' => 'province_id']);
    }
}
