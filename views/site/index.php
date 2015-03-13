<?php
/* @var $this yii\web\View */
$this->title = 'MOPH Report';

Yii::$app->db->open();
use yii\helpers\Html;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>MOPH Report</h1>

        <p class="lead">ระบบรายงาน</p>

        <p>
        <?= Html::a('ดูรายงาน', ['/report'], ['class'=>'btn btn-lg btn-success']);?>
        </p>
    </div>

    
</div>
<?php
//echo Yii::$app->security->generatePasswordHash('manop');