<?php
use yii\grid\GridView;

echo GridView::widget([
    'dataProvider'=>$dataProvider,
    'columns'=>[
        //'firstname',
    ]
]);

