<?php
require_once 'demoColector.php';
require_once 'demo.php';

$alm = new demo();
$model = new demoColector();

$id = $_GET['id'];




?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title> - DELETE - </title>       
	</head>
    <body style="padding:15px;">

		
                 <?php $model->DeleteDEMO($id);?>

				 <br>
                 <a href="DemoList.php">Volver</a>
               
 
    </body>
</html>
