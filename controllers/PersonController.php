<?php
namespace app\controllers;
use yii\web\Controller;

class PersonController extends Controller{
    public function actionTest(){
        $name = "มานพ กองอุ่น";
        return $this->render('test',['myname'=>$name]);
    }
}
