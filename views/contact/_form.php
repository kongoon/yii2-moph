<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Province;
/* @var $this yii\web\View */
/* @var $model app\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::label('จังหวัด','province');?>
        <?= Html::dropDownList('province',null,
            ArrayHelper::map(Province::find()
                    ->orderBy('province_name ASC')
                    ->all(),'id','province_name'),
                [
                    'class'=>'form-control',
                    'id'=>'province',
                    'prompt'=>'-เลือกจังหวัด-',
                    'onchange'=>'
                        $.get("'.Url::toRoute('base/loaddistrict').'",
                        {id:$(this).val()})
                        .done(function(data){
                            $("select#district").html(data);
                        });
                    '
                ]
                );?>
    </div>
    
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
