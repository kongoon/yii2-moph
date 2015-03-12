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
    public function actionReport2(){
        $connection = Yii::$app->db;
        $data = $connection->createCommand('
            SELECT year(t.DATETIME_DISCH) as yy, 
            month(t.DATETIME_DISCH) as mm, 
            count(t.AN) as cnt, 
            sum(t.ADJRW) as sumadj, 
            round(avg(t.ADJRW),4) as cmi , 
            sum(t.ACTLOS) as los, 
            round(avg(t.ACTLOS),2) as los_per_case
            FROM admission t  
            GROUP BY yy,mm
            ORDER BY yy,mm
            ')->queryAll();
        //เตรียมข้อมูลส่งให้กราฟ
        for($i=0;$i<sizeof($data);$i++){
            $yy[] = $data[$i]['yy'];
            $mm[] = $data[$i]['yy'].'-'.$data[$i]['mm'];
            $cnt[] = $data[$i]['cnt'];
            $sumadj[] = $data[$i]['sumadj'];
            $cmi[] = $data[$i]['cmi'];
            $los[] = $data[$i]['los'];
            $los_per_case[] = $data[$i]['los_per_case'];
        }
        
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$data,
            'sort'=>[
                'attributes'=>['yy','mm','cnt','sumadj','cmi','los','los_per_case']
            ],
        ]);
        return $this->render('report2',[
            'dataProvider'=>$dataProvider,
            'yy'=>$yy,'mm'=>$mm,'cnt'=>$cnt,'sumadj'=>$sumadj,'cmi'=>$cmi,'los'=>$los,'los_per_case'=>$los_per_case
        ]);
    }
    public function actionReport3(){
        $connection = Yii::$app->db;
        $data = $connection->createCommand('
            SELECT year(t.DATETIME_DISCH) as yy, 
            month(t.DATETIME_DISCH) as mm, 
            count(t.AN) as cnt, 
            sum(t.ADJRW) as sumadj, 
            sum(t.ADJRW)/sum(if(ADJRW>0,1,0)) as cmi ,
            sum(t.ACTLOS) as los, 
            avg(t.ACTLOS) as los_per_case
            FROM admission t  
            GROUP BY yy,mm
            ')->queryAll();
        //เตรียมข้อมูลส่งให้กราฟ
        for($i=0;$i<sizeof($data);$i++){
            $yy[] = $data[$i]['yy'];
            $mm[] = $data[$i]['yy'].'-'.$data[$i]['mm'];
            $cnt[] = $data[$i]['cnt'];
            $sumadj[] = $data[$i]['sumadj'];
            $cmi[] = $data[$i]['cmi'];
            $los[] = $data[$i]['los'];
            $los_per_case[] = $data[$i]['los_per_case'];
        }
        
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$data,
            'sort'=>[
                'attributes'=>['yy','mm','cnt','sumadj','cmi','los','los_per_case']
            ],
        ]);
        return $this->render('report3',[
            'dataProvider'=>$dataProvider,
            'yy'=>$yy,'mm'=>$mm,'cnt'=>$cnt,'sumadj'=>$sumadj,'cmi'=>$cmi,'los'=>$los,'los_per_case'=>$los_per_case
        ]);
    }
    
}
