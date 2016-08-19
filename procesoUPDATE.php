<?php

require_once 'demoColector.php';
require_once 'demo.php';

$alm = new demo();
$model = new demoColector();

$id = $_POST['id'];
$nombre = $_POST['nombre'];

echo $id;
echo $nombre;



$model->UpdateDEMO($id, $nombre);

/*
if ($model == true){
	echo "Operacion Successful"

}else{
	echo "Operacion FAIL"
}
*/






?>