<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Person</h1>
<?php
$form = ActiveForm::begin();
?>
<?= $form->field($model,'firstname')?>
<?= $form->field($model,'lastname')?>
<?= $form->field($model,'email')?>
<?= $form->field($model,'address')->textarea();?>
<?= Html::submitButton('ส่งข้อมูล',['class'=>'btn btn-success']);?>
<?php ActiveForm::end();?>

<?php print_r($value);
