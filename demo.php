<?php
class demo {  
    private $id;  
    private $nombre;
	private $foto;
  
   function __construct() {  
    

   }  
   /*
      function __construct() {  
    print "En el constructor BaseClass\n";
   } */ 
   
   
   function __clone() {  
     $this->id = ++$this->id;   
   }  
   public function getId_demo() {  
     return $this->id;  
   }  
   public function setId_demo($id) {  
     $this->id = $id;  
   }  
   public function getNombre() {  
     return $this->nombre;  
   }  
   public function setNombre($nombre) {  
     $this->nombre = $nombre;  
   }
	
   public function getFoto() {  
     return $this->foto;  
   }  
   public function setFoto($foto) {  
     $this->foto = $foto;  
   }

 }
 ?>
