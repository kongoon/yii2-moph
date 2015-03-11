
<?php
use yii\grid\GridView;

echo GridView::widget([
    'dataProvider'=>$dataProvider,
    'options'=>['class'=>'table-responsive','id'=>'mytable']
]);
echo GridView::widget([
    'dataProvider'=>$contact,
    'options'=>['class'=>'table-responsive','id'=>'yourtable']
]);
?>
