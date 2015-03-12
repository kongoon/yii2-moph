<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\District;

class BaseController extends Controller{
    public function actionLoaddistrict($id=null){
        //$id คือ รหัส pk ของจังหวัด
        $districts = District::find()
                ->where(['province_id'=>$id])
                ->orderBy('district_name')
                ->all();
        $option = '<option value="">-กรุณาเลือกอำเภอ-</option>';
        foreach($districts as $d){
            $option .= '<option value="'.$d->id.'">'
                    .$d->district_name.'</option>';
        }
        echo $option;
    }
}