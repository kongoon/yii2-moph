
<?php
use yii\grid\GridView;
use yii\widgets\Pjax;

Pjax::begin();
echo GridView::widget([
    'dataProvider'=>$dataProvider,
    'options'=>['class'=>'table-responsive','id'=>'mytable']
]);
Pjax::end();
Pjax::begin();
echo GridView::widget([
    'dataProvider'=>$contact,
    'options'=>['class'=>'table-responsive','id'=>'yourtable']
]);
Pjax::end();
?>
