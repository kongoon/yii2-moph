<div class="row">
<?php
use yii\widgets\ListView;

echo ListView::widget([
    'dataProvider'=>$dataProvider,
    'itemView'=>'_contact',
    
]);
?>
</div>