<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin([
    'options'=>[
        'enctype'=>'multipart/form-data'
        ]
    ])?>
<?= $form->field($model,'file')->fileInput();?>
<?= Html::submitButton('ส่งข้อมูล', 
    ['class'=>'btn btn-warning']);?>
<?php ActiveForm::end();

