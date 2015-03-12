<?php
$this->title = 'จำนวนผู้ป่วยในแยกรายเดือน';
$this->params['breadcrumbs'][]=$this->title;
use yii\grid\GridView;
use miloschuman\highcharts\Highcharts;
?>
<div class="row">
    <div class="col-md-12">
<?php
echo Highcharts::widget([
    'options'=>[
        'title'=>['text'=>'จำนวนผู้ป่วยในแยกรายเดือน'],
        'xAxis'=>[
            'categories'=>$mm
        ],
        'yAxis'=>[
            'title'=>['text'=>'จำนวน(คน)']
        ],
        'series'=>[
            [//'type'=>'line',
                'name'=>'จำนวนผู้ป่วยใน',
                'data'=>$cnt,
            ],
            ['name' => 'ผลรวม', 'data' => $sumadj],
            ['name' => 'LOS', 'data' => $los],
        ]
    ]
]);
?>
    </div>
    <div class="col-md-6">
        <?php
        echo Highcharts::widget([
            'options'=>[
                'title'=>['text'=>'ค่าเฉลี่ย CMI แยกรายเดือน'],
                'xAxis'=>[
                    'categories'=>$mm
                ],
                'yAxis'=>[
                    'title'=>['text'=>'เฉลี่ย(คน)']
                ],
                'series'=>[
                    ['type'=>'column',
                        'name'=>'CMI',
                        'data'=>$cmi,
                    ],
                    
                ]
            ]
        ]);?>
    </div>
    <div class="col-md-6">
        <?php
        echo Highcharts::widget([
            'options'=>[
                'title'=>['text'=>'นอนเฉลี่ยต่อราย'],
                'xAxis'=>[
                    'categories'=>$mm
                ],
                'yAxis'=>[
                    'title'=>['text'=>'เฉลี่ย(คน)']
                ],
                'series'=>[
                    ['type'=>'column',
                        'name'=>'Per Case',
                        'data'=>$los_per_case,
                        
                    ],
                    
                ]
            ]
        ]);?>
    </div>
    
    <div class="col-md-12">
<?php
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
        [
            'label'=>'รวม',
            'attribute'=>'sumadj',
            'format'=>['decimal',4]
        ],
        [
            'label'=>'CMI',
            'attribute'=>'cmi'
        ],
        [
            'label'=>'LOS',
            'attribute'=>'los',
            'format'=>['decimal']
        ],
        [
            'label'=>'นอนเฉลี่ยต่อราย',
            'attribute'=>'los_per_case'
        ],
        
    ]
]);?>
    </div>
</div>