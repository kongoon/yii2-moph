<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Contact;
class MapController extends Controller{
    public function actionMap(){
        $contacts = Contact::find()->all();
        
        return $this->render('map',['contacts'=>$contacts]);
    }
}

