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


    			<form action="procesoUPDATE.php" method="post" name="UPDATE id="UPForm" >
    				
    				<div>
    				
    					<br>
    					<label>ID</label>
    					<input type="text" id="id" value=<?php echo $id ?> disabled/>

    				</div>


    				<div>

    					<br>
    					<label>Nombre</label>
    					<input type="text" id="nombre" />

    				</div>

    				<div>
        				<input type="submit" value="Submit"/> 
    				</div>

    			</form> 

    			<br>
                <a href="DemoList.php">Volver</a>
 
                
               
 
    </body>
</html>
