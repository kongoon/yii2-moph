<?php
namespace app\modules\report\controllers;
use Yii;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
class ReportController extends Controller{
    
    public function actionReport1(){
        $connection = Yii::$app->db;
        $data = $connection->createCommand('
            SELECT year(t.DATETIME_DISCH) as yy,
            month(t.DATETIME_DISCH) as mm,
            COUNT(t.AN) as cnt
            FROM admission t
            GROUP BY yy,mm
            ORDER BY yy,mm
            ')->queryAll();
        //เตรียมข้อมูลส่งให้กราฟ
        for($i=0;$i<sizeof($data);$i++){
            $yy[] = $data[$i]['yy'];
            $mm[] = $data[$i]['yy'].'-'.$data[$i]['mm'];
            $cnt[] = $data[$i]['cnt'];
        }
        
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$data,
            'sort'=>[
                'attributes'=>['yy','mm','cnt']
            ],
        ]);
        return $this->render('report1',[
            'dataProvider'=>$dataProvider,
            'yy'=>$yy,'mm'=>$mm,'cnt'=>$cnt,
        ]);
    }
}
