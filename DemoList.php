<?php
require_once 'demoColector.php';
require_once 'conexion.php';
require_once 'demo.php';

// Logica
$alm = new demo();
$model = new demoColector();

$id=0;

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title> - CONSULTAR - </title>       
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                <br>
                <a href="Administrator.php">Volver</a>
                <br>

                <a href="Frm_Create.php">Create</a>              

                <table class="pure-table pure-table-horizontal" border= 2>
                    <thead>
                        <tr>
                            <th style="text-align:left;">ID</th>
                            <th style="text-align:left;">Nombre</th>
                            <th style="text-align:left;">Path</th>
                            <th style="text-align:left;">Option</th>
                            <th style="text-align:left;">Option</th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarDEMO() as $r): ?>
                        <tr>
                            <td><?php echo $r->getId_demo(); ?></td>
                            <td><?php echo $r->getNombre(); ?></td>
                            <td><?php echo $r->getFoto(); ?></td>

							<td><a href="Update.php?id=<?php echo $r->getId_demo(); ?>">Update</a></td>
							<td><a href="Delete.php?id=<?php echo $r->getId_demo(); ?>">Delete</a></td>
                            
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
