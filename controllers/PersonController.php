<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\PersonForm;
use Yii;

//ชื่อ Class ตามด้วย Controller
class PersonController extends Controller{
    //action ที่ render view ต้องมี action นำหน้า
    //
    public function actionTest($name){
        //$name = $this->getName();
        return $this->render('test',['myname'=>$name]);
    }
    public function actionPerson(){
        $model = new PersonForm;
        if($model->load(Yii::$app->request->post())){
            $value = $_POST['PersonForm'];
        }else{
            $value = null;
        }
        return $this->render('person',['model'=>$model,'value'=>$value]);
    }
    
    
    public function getName(){
        $name = "มานพ กองอุ่น";
        return $name;
    }
}
