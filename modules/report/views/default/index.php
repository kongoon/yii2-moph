<?php
use yii\helpers\Html;
$this->title = 'MOPH Report';
$this->params['breadcrumbs'][]='MOPH Report';
?>
<div class="report-default-index text-center">
    <h1>MOPH Report</h1>
    <?= Html::a('Report1', ['/report/report/report1'], ['class'=>'btn btn-lg btn-info']);?>
    <?= Html::a('Report2', ['/report/report/report2'], ['class'=>'btn btn-lg btn-info']);?>
    <?= Html::a('Report3', ['/report/report/report3'], ['class'=>'btn btn-lg btn-info']);?>
</div>
