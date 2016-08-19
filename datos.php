 <?php
	require_once 'conexion.php';


	$n= "reaper"; //USER
	$p= "123";	  //PASS

	$Nombre = $_GET['Nombre'];
	$Password = $_GET['Password'];


	if ($Nombre == $n and $Password == $p){
		echo "Bienvenida  ";
		echo $Nombre;
		echo nl2br(" \n ");

		//conexion a la base 
		$cone = new conexion();
		//fin conexion a la base


		require_once 'Administrator.php';
		//$boto = new botones();



	}else{
		echo "usuario o contraseña incorrectos";
	}

?>


