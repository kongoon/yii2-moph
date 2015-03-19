<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Contact;
use Yii;
use yii\data\ArrayDataProvider;

class MapController extends Controller{
    public function actionMap(){
        $contacts = Contact::find()->all();
        
        return $this->render('map',['contacts'=>$contacts]);
    }
    public function actionGeo(){
        $connection = Yii::$app->db;
        $data = $connection->createCommand('
            SELECT a.accident,a.injury,a.dead,af.accident_festival,p.province_name
            FROM accident a
            LEFT JOIN accident_festival af ON af.id = a.accident_festival_id
            LEFT JOIN base_province p ON p.id = a.province_id
            WHERE af.id = 1
            GROUP BY a.province_id
            ')->queryAll();
        //เตรียมข้อมูลส่งให้กราฟ
        $dataok = '';
        for($i=0;$i<sizeof($data);$i++){
            $dataok .= "['".$data[$i]['province_name']."',".$data[$i]['accident']."],";
        }
        
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$data,
            'sort'=>[
                'attributes'=>['accident_festival','province_name','accident','injury','dead']
            ],
        ]);
        return $this->render('geo',['dataProvider'=>$dataProvider,'dataok'=>$dataok]);
    }
}

