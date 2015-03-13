<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\UploadForm;
use yii\web\UploadedFile;
use Yii;
class UploadController extends Controller{
    public function actionUpload(){
        $model = new UploadForm;
        if(Yii::$app->request->isPost){
            $model->file = UploadedFile::getInstance($model, 'file');
            if($model->file && $model->validate()){
                $model->file->saveAs(
'uploads/'.$model->file->baseName.'.'.$model->file->extension);
                Yii::$app->session->setFlash('success', 'อัพโหลดไฟล์เรียบร้อยแล้ว');
            }else{
                Yii::$app->session->setFlash('danger', 'ไม่สามารถอัพโหลดไฟล์ได้ หรือยังไม่ได้เลือกไฟล์ กรุณาติดต่อเจ้าหน้าที่ไอที');
            }
        }
        /*Yii::$app->session->setFlash('success', 'สำเร็จ');
        Yii::$app->session->setFlash('info', 'ข้อมูลเพิ่มเติม');
        Yii::$app->session->setFlash('warning', 'เตือน');
        Yii::$app->session->setFlash('danger', 'อันตราย');
        Yii::$app->session->setFlash('default', 'ปกติ');*/
        
        
        return $this->render('upload',
                ['model'=>$model]);
    }
}
