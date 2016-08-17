<?php
require_once 'demoColector.php';
require_once 'conexion.php';
require_once 'demo.php';

// Logica
$alm = new demo();
$model = new demoColector();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title> - CONSULTAR - </title>       
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;">ID</th>
                            <th style="text-align:left;">Nombre</th>
                            <th style="text-align:left;">Option</th>
                            <th style="text-align:left;">Option</th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarDEMO() as $r): ?>
                        <tr>
                            <td><?php echo $r->getId_demo(); ?></td>
                            <td><?php echo $r->getNombre(); ?></td>
							<td><a href="../PHP-CRUD/Update.php">Update</a></td>
							<td><a href="../PHP-CRUD/Delete.php">Delete</a></td>

                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
