<?php
namespace app\controllers;
use yii\web\Controller;

//ชื่อ Class ตามด้วย Controller
class PersonController extends Controller{
    //action ที่ render view ต้องมี action นำหน้า
    //
    public function actionTest(){
        $name = "มานพ กองอุ่น";
        return $this->render('test',['myname'=>$name]);
    }
}
