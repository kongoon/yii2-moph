<?php
//ดูเพิ่มเติมได้ที่
//http://www.bsourcecode.com/yiiframework2/select-query-sql-queries/
//http://www.yiiframework.com/doc-2.0/guide-db-query-builder.html
//http://stuff.cebe.cc/yii2docs/yii-db-query.html
namespace app\controllers;
use yii\web\Controller;
use app\models\Contact;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use Yii;
use yii\data\ArrayDataProvider;

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
    public function actionQuery3(){
        $connection = Yii::$app->db;
        $contact = $connection->createCommand('SELECT * FROM contact')
                ->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$contact,
            'pagination'=>[
                'pageSize'=>2
            ]
        ]);
        return $this->render('query3',['contact'=>$dataProvider]);
    }
}