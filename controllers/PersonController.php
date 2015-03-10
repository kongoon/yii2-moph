<?php
namespace app\controllers;
use yii\web\Controller;

class PersonController extends Controller{
    public function actionTest(){
        return $this->render('test');
    }
}
