<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Province;
use app\models\District;
use app\models\Tambon;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Contact */
/* @var $form yii\widgets\ActiveForm */
if($model->isNewRecord){
    $province = [];
    $district = [];
    $tambon = [];
    
    $district_list = [];
    $tambon_list = [];
}else{
    $province = $model->tambon->province_id;
    $district = $model->tambon->district_id;
    $tambon = $model->tambon_id;
    
    $district_list = ArrayHelper::map(District::find()
            ->where(['province_id'=>$province])->all(), 'id', 'district_name');
    $tambon_list = ArrayHelper::map(Tambon::find()
            ->where(['district_id'=>$district])->all(), 'id', 'tambon_name');
}

?>

<div class="contact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::label('จังหวัด','province');?>
        <?= Html::dropDownList('province',$province,
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
    <div class="form-grop">
        <?= Html::label('อำเภอ','district');?>
        <?= Html::dropDownList('district',$district,$district_list,[
            'class'=>'form-control',
            'id'=>'district',
            'prompt'=>'-เลือกอำเภอ-',
            'onchange'=>'
                $.get("'.Url::toRoute('base/loadtambon').'",
                {id:$(this).val()})
                .done(function(data){
                    $("select#tambon").html(data);
                });
            '
        ]);?>
    </div>
    <?= $form->field($model, 'tambon_id')
        ->dropDownList($tambon_list,
            ['id'=>'tambon','prompt'=>'เลือกตำบล']);?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
