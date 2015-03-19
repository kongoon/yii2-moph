<?php
$this->title = 'การเกิดอุบัติเหตุในเทศกาลสงกรานต์ปี 2557';
$this->params['breadcrumbs'][] = 'การเกิดอุบัติเหตุในเทศกาลสงกรานต์ปี 2557';
use yii\grid\GridView;
?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages: ["geochart"]});
    google.setOnLoadCallback(drawRegionsMap);

    function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable([
            ['จังหวัด', 'จำนวนอุบัติเหตุ'],
<?php echo $dataok; ?>
        ]);

        var options = {
            region: 'TH',
            resolution: 'provinces',
            //displayMode: 'markers',
            colorAxis: {colors: ['white', 'yellow', 'orange', 'red']}
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
    }
</script>
<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="glyphicon glyphicon-signal"></i> การเกิดอุบัติเหตุในเทศกาลสงกรานต์ปี 2557</h3>
    </div>
    <div class="panel-body">

        <div id="regions_div" style="width: 100%; height: 500px;"></div>
    </div>
</div>

<!-- ส่วนแสดง Grid View -->
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="glyphicon glyphicon-signal"></i> การเกิดอุบัติเหตุในเทศกาลสงกรานต์ปี 2557</h3>
    </div>
    <div class="panel-body">
        <?php
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'label' => 'จังหวัด',
                    'attribute' => 'province_name'
                ],
                [
                    'label' => 'อุบัติเหตุ (ครั้ง)',
                    'attribute' => 'accident'
                ],
                [
                    'label' => 'บาดเจ็บ (คน)',
                    'attribute' => 'injury'
                ],
                [
                    'label' => 'เสียชีวิต (คน)',
                    'attribute' => 'dead'
                ],
            ]
        ]);
        ?>
    </div>
</div>