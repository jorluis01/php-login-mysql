<?php


class conexion {
    private $url="localhost";
    private $contra="";
    private $user="root";
    private $data="datos";
    
    public function __construct() {
    
    }
    public function conexionprincipal(){
   
    $dbconn = mysqli_connect($this->url, $this->user, $this->contra, $this->data)
    or die('No se ha podido conectar: ' .  mysqli_error());  //conexion de mi base de datos 
    
    return  $dbconn;
    
    }
    public function finalconexion(){
        mysqli_close($this->conexionprincipal());
        
    }
    
    
    
}
