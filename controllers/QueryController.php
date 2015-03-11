<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Contact;
use yii\data\ActiveDataProvider;
use yii\db\Query;

class QueryController extends Controller{
    public function actionQuery1(){
        $data = Contact::find()
                ->where('id>2')
                ->orderBy('firstname','lastname');
        $dataProvider = new ActiveDataProvider([
            'query'=>$data,
        ]);
        
        return $this->render('query1',
                ['dataProvider'=>$dataProvider]);
    }
    public function actionQuery2(){
        $query = new Query;
        $query->select('*')
                ->from('contact')
                ->all();
        $dataProvider = new ActiveDataProvider([
            'query'=>$query,
        ]);
        
        $query1 = new Query;
        $query1->select('firstname,lastname')
                ->from('contact')
                ->all();
        $dataProvider1 = new ActiveDataProvider([
            'query'=>$query1,
        ]);
        return $this->render('query2',
                ['dataProvider'=>$dataProvider,
                 'contact'=>$dataProvider1
                    ]);
    }
}