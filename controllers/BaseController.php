<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\District;
use app\models\Tambon;

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
    public function actionLoadtambon($id=null){
        //$id คือ รหัส pk ของอำเภอ
        $tambons = Tambon::find()
                ->where(['district_id'=>$id])
                ->orderBy('tambon_name')
                ->all();
        $option = '<option value="">-กรุณาเลือกตำบล-</option>';
        foreach($tambons as $d){
            $option .= '<option value="'.$d->id.'">'
                    .$d->tambon_name.'</option>';
        }
        echo $option;
    }
}