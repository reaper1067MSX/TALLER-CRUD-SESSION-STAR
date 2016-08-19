<?php

require_once 'demoColector.php';
require_once 'demo.php';

$alm = new demo();
$model = new demoColector();

$id = $_POST['id'];
$nombre = $_POST['nombre'];

echo "<br>";
echo $id;
echo "<br>";
echo $nombre;



$model->InsertDEMO($id, $nombre);

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
	<a href="Frm_Create.php">Volver</a>

</body>
</html>