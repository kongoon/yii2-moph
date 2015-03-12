<?php
namespace app\modules\report\controllers;
use Yii;
use yii\data\ArrayDataProvider;
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
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$data,
        ]);
        return $this->render('report1',[
            'dataProvider'=>$dataProvider
        ]);
    }
}
