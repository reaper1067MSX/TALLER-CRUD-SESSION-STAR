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
 
 
 public function InsertDEMO()
 {
 try
		{
		    $result= $this->modelo->operacion("insert into demo (id, nombre, foto) values (7,'Ramses','../foto/Raiden.jpg')");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function UpdateDEMO()
 {
 try
		{
		    $result= $this->modelo->operacion("update demo set nombre= 'Omicron' where id= 7");





                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function DeleteDEMO()
 {
 try
		{
		     $result= $this->modelo->operacion("delete from demo where id= 7");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
