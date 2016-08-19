<?php

require_once 'demoColector.php';
require_once 'demo.php';

$alm = new demo();
$model = new demoColector();

$id = $_POST['id'];
$nombre = $_POST['nombre'];

$NON = "";
$path = $_POST['imagen'];

$NON ="../foto/";
$NON= $NON . $path;



$model->UpdateDEMO($id, $nombre, $NON);

/*
if ($model == true){
	echo "Operacion Successful"

}else{
	echo "Operacion FAIL"
}
*/






?>

<!DOCTYPE html>
<html>
<head>
	<title>Proceso de UPDATE</title>
</head>
<body>
	<a href="DemoList.php">Volver</a>

</body>
</html>