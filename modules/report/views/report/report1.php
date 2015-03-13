<?php
$this->title = 'จำนวนผู้ป่วยในแยกรายเดือน';
$this->params['breadcrumbs'][] = $this->title;

use yii\grid\GridView;
use miloschuman\highcharts\Highcharts;
?>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="glyphicon glyphicon-signal"></i> จำนวนผู้ป่วยในแยกรายเดือน</h3>
    </div>
    <div class="panel-body">
        <?php
        echo Highcharts::widget([
            'options' => [
                'title' => ['text' => 'จำนวนผู้ป่วยในแยกรายเดือน'],
                'xAxis' => [
                    'categories' => $mm
                ],
                'yAxis' => [
                    'title' => ['text' => 'จำนวน(คน)']
                ],
                'series' => [
                    [
                        'type' => 'column',
                        'name' => 'CNT',
                        'data' => $cnt,
                    ]
                ]
            ]
        ]);
        ?>
    </div>
</div>
<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="glyphicon glyphicon-signal"></i> จำนวนผู้ป่วยในแยกรายเดือน</h3>
    </div>
    <div class="panel-body">
        <?php
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'label' => 'ปี',
                    'attribute' => 'yy'
                ],
                [
                    'label' => 'เดือน',
                    'attribute' => 'mm'
                ],
                [
                    'label' => 'จำนวนผู้ป่วยใน',
                    'attribute' => 'cnt'
                ],
            ]
        ]);
        ?>
    </div>
</div>