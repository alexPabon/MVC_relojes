<?php
require_once 'config/config.php';
require_once 'libraries/autoload.php';

//invocar al controlador frontal

$id=DB::insert("INSERT INTO telefonos VALUES(DEFAULT,'APPLEEE','Iphone',1200)");
$telfonos = Telefono::getAll();
$unTel= Telefono::get(20);

echo "el tel con id: $id <br>";
echo "<pre>";
var_dump($unTel);
echo '<br><hr><hr>';

var_dump($telfonos);
echo "</pre>";

$telNew = new Telefono();
$telNew->marca='HjjjHawei';
$telNew->modelo='150ll0';
$telNew->precio=90000;

$lastId = $telNew->save();
echo '<hr><hr><pre>';
echo var_dump($lastId);
echo '</pre>';


