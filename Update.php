<?php
require_once 'demoColector.php';
require_once 'demo.php';

$alm = new demo();
$model = new demoColector();

$id = $_GET['id'];


$result = $model->ConsultarNombre($id);

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title> - UPDATE - </title>       
	</head>
    <body style="padding:15px;">


    			<form action="procesoUPDATE.php" method="post" name="UPDATE">
    				
    				<div>
    				
    					<br>
    					<label>ID</label>
    					<input type="text" id="id" name="id" value=<?php echo $id ?> >

    				</div>


    				<div>

    					<br>
    					<label>Nombre</label>
    					<input type="text" id="nombre" name="nombre" >

    				</div>

    				<div>
        				<input type="submit" name="X" value="X"> 
    				</div>
                    
                    <div>

    					<br>
    					<label>Imagen a Seleccionar: </label>
    					<input type="file" id="imagen" name="imagen" >

    				</div>

    			</form> 

    			<br>
                <a href="DemoList.php">Volver</a>
 
                
               
 
    </body>
</html>
