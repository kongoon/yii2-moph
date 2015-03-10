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
    public function actionList(){
        $dataProvider = new ActiveDataProvider([
            'query'=>Contact::find(),
            'pagination'=>[
                'pageSize'=>2
            ]
        ]);
        return $this->render('list',['dataProvider'=>$dataProvider]);
    }
    public function actionDetail($id){
        $model = Contact::findOne($id);
        return $this->render('detail',['model'=>$model]);
    }
}