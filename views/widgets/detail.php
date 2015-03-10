<?php
$this->title = 'ข้อมูลของ '.$model->firstname;
use yii\widgets\DetailView;

echo DetailView::widget([
    'model'=>$model,
    'attributes'=>[
        'firstname',
        'lastname',
        'address:html',
        'email',
    ]
]);

