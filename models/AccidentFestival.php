<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accident_festival".
 *
 * @property integer $id
 * @property string $accident_festival
 * @property string $date_start
 * @property string $date_end
 *
 * @property Accident[] $accidents
 */
class AccidentFestival extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accident_festival';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['accident_festival', 'date_start', 'date_end'], 'required'],
            [['date_start', 'date_end'], 'safe'],
            [['accident_festival'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'accident_festival' => 'เทศกาล',
            'date_start' => 'วันเริ่มต้น',
            'date_end' => 'วันสิ้นสุด',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccidents()
    {
        return $this->hasMany(Accident::className(), ['accident_festival_id' => 'id']);
    }
}
