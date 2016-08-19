<?php
require_once 'demoColector.php';
require_once 'demo.php';

$alm = new demo();
$model = new demoColector();

//$id = $_GET['id'];

$count = 0;


foreach($model->ListarDEMO() as $r){
    $count++;
}

 
$count = $count +1 ; 
    


?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title> - INSERT - </title>       
	</head>
    <body style="padding:15px;">


    			<form action="procesoInsert.php" method="post" name="INSERT">
    				
                    
    				<div>
    				
    					<br>
    					<label>ID</label>
    					<input type="text" id="id" name="id" value=<?php echo $count ?> >

    				</div>


    				<div>

    					<br>
    					<label>Nombre</label>
    					<input type="text" id="nombre" name="nombre" >

    				</div>

    				<div>
        				<input type="submit" name="X" value="X"> 
    				</div>

    			</form> 

    			<br>
                <a href="DemoList.php">Volver</a>

    </body>
</html>