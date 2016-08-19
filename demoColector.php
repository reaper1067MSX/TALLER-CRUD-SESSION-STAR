<?php

require_once("colector.php");
class demoColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function ListarDEMO()
	{
		try
		{
		    $result= $this->modelo->Listar("demo");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function InsertDEMO($id, $nombre, $path)
 {
 try
		{
		    $result= $this->modelo->operacion("INSERT into demo (id, nombre, foto) values ('".$id."', '".$nombre."', '".$path."' )");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function UpdateDEMO($id, $nombre, $path)
 {
 try
		{
		    $result= $this->modelo->operacion("UPDATE demo set nombre= '".$nombre."' , foto = '".$path."' WHERE id='".$id."' ");
        
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function DeleteDEMO($id)
 {
 try
		{
		     $result= $this->modelo->operacion("delete from demo where id= '" . $id . "' ");

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }

 public function ConsultarNombre($id){

 	try
		{
		    $result= $this->modelo->operacion("SELECT from demo where id= '" . $id . "' ");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

 }


 public function UltimoID(){

 	try
		{
		    $result= $this->modelo->operacion( "SELECT count(*) FROM demo");

		    
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}

 }
 
 
 
}
 ?>
