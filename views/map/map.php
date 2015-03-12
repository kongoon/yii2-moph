<?php
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;
$coord = new LatLng(['lat'=>13.777234,'lng'=>100.561981]);
$map = new Map([
    'center'=>$coord,
    'zoom'=>12,
    'width'=>'100%',
    'height'=>'600',
]);
foreach($contacts as $c){
  $coords = new LatLng(['lat'=>$c->lat,'lng'=>$c->lng]);  
  $marker = new Marker(['position'=>$coords]);
  $marker->attachInfoWindow(
    new InfoWindow([
        'content'=>'
     
            <h4>'.$c->firstname.' '.$c->lastname.'</h4>
              <table class="table table-striped table-bordered table-hover">
                <tr>
                    <td>ที่อยู่</td>
                    <td>'.$c->address.'</td>
                </tr>
                <tr>
                    <td>ตำบล</td>
                    <td>'.$c->tambon->tambon_name.'</td>
                </tr>
                <tr>
                    <td>อำเภอ</td>
                    <td>'.$c->tambon->district->district_name.'</td>
                </tr>
                <tr>
                    <td>จังหวัด</td>
                    <td>'.$c->tambon->province->province_name.'</td>
                </tr>
                <tr>
                    <td>อีเมลล์</td>
                    <td>'.$c->email.'</td>
                </tr>
              </table>

        '
    ])
  );
  
  $map->addOverlay($marker);
}

echo $map->display();
