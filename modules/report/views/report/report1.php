<?php
use yii\grid\GridView;
use miloschuman\highcharts\Highcharts;


echo GridView::widget([
    'dataProvider'=>$dataProvider,
    'columns'=>[
        ['class'=>'yii\grid\SerialColumn'],
        [
            'label'=>'ปี',
            'attribute'=>'yy'
        ],
        [
            'label'=>'เดือน',
            'attribute'=>'mm'
        ],
        [
            'label'=>'จำนวนผู้ป่วยใน',
            'attribute'=>'cnt'
        ],
    ]
]);