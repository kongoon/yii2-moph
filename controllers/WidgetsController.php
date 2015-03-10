<?php
namespace app\controllers;

use yii\web\Controller;
use yii\data\ActiveDataProvider;
use app\models\Contact;

class WidgetsController extends Controller{
    
    public function actionGrid(){
        $dataProvider = new ActiveDataProvider([
            'query'=>Contact::find(),
        ]);
        return $this->render('grid',['dataProvider'=>$dataProvider]);
    }
}