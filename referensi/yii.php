<?php 
//import ektensi EGMap yang ada di folder protected/extensions
Yii::import('ext.EGMap.*');
 
//buat object EGMap dan setting posisi, tipe dan controlnya
$gMap = new EGMap();
$gMap->setWidth(827);
$gMap->setHeight(400);
$gMap->zoom = 6;
$mapTypeControlOptions = array(
  'position' => EGMapControlPosition::RIGHT_TOP,
  'style' => EGMap::MAPTYPECONTROL_STYLE_HORIZONTAL_BAR
);
 
$gMap->mapTypeId = EGMap::TYPE_ROADMAP;
$gMap->mapTypeControlOptions = $mapTypeControlOptions;
 
// Setting gambar icon. Gambar icon lain bisa dilihat di http://google-maps-icons.googlecode.com
$icon = new EGMapMarkerImage("http://google-maps-icons.googlecode.com/files/workoffice.png");
 
// setting ukuran icon
$icon->setSize(32, 37);
$icon->setAnchor(16, 16.5);
$icon->setOrigin(0, 0);
 
// menghitung jumlah data dari CActiveDataProvider("Ruang")
$count = $dataProvider->getTotalItemCount();
 
// cek apakah tedapat data
if ($count > 0) {
 $i = 0;
 
 // lakukan pengulangan dari data pada dataprovider
 foreach($dataProvider->getData() as $record) {
 
 //buat marker berdasarkan lat dan lng setiap record
     $marker[$i] = new EGMapMarker($record->lat, $record->lng, array('title' => Yii::t('catalog', $record->nama),
             'icon'=>$icon, 'draggable'=>false), 'marker', array());
 
     //set infowindow dengan nama ruang
     $info_window_m[$i] = new EGMapInfoWindow('<div>'.$record->nama.'</div>');
     $marker[$i]->addHtmlInfoWindow($info_window_m[$i]);
 
     //memasukan marker pada peta
     $gMap->addMarker($marker[$i]);
     $i++;
 }
 
 // mengeset pusat peta dengan koordinat pada marker pertama
 $gMap->setCenter($marker[0]->lat, $marker[0]->lng);
 $gMap->zoom = 19;
 
// jika tidak terdapat data pada di tabel Ruang, maka akan mengeset pusat peta dengan koordinat default
} else {
 $gMap->setCenter(-7.771083, 110.387147);
}
 
//merender dan menampilkan peta
$gMap->renderMap(array(), Yii::app()->language);
 
?>