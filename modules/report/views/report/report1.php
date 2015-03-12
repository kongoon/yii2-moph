<?php
use yii\grid\GridView;

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