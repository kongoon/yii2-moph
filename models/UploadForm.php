<?php
///UploadForm.php
namespace app\models;
use yii\base\Model;

class UploadForm extends Model{
    public $file;
    
    public function rules() {
        return [
            [['file'],'file','skipOnEmpty' => false],
        ];
    }
}
