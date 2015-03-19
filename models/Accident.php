<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accident".
 *
 * @property integer $id
 * @property integer $accident_festival_id
 * @property integer $province_id
 * @property integer $accident
 * @property integer $injury
 * @property integer $dead
 *
 * @property BaseProvince $province
 * @property AccidentFestival $accidentFestival
 */
class Accident extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accident';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['accident_festival_id', 'province_id'], 'required'],
            [['accident_festival_id', 'province_id', 'accident', 'injury', 'dead'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'accident_festival_id' => 'เทศกาล',
            'province_id' => 'จังหวัด',
            'accident' => 'จำนวนอุบัติเหตุ',
            'injury' => 'จำนวนผู้บาดเจ็บ',
            'dead' => 'จำนวนผู้เสียชีวิต',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(BaseProvince::className(), ['id' => 'province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccidentFestival()
    {
        return $this->hasOne(AccidentFestival::className(), ['id' => 'accident_festival_id']);
    }
}
