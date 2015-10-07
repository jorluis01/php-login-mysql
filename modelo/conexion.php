<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 * @author DR ROBERTO
 */
class conexion {
    private $url="localhost";
    private $contra="";
    private $user="root";
    private $data="datos";
    
    public function __construct() {
    
    }
    public function conexionprincipal(){
   
    $dbconn = mysqli_connect($this->url, $this->user, $this->contra, $this->data)
    or die('No se ha podido conectar: ' .  mysqli_error());
    
    return  $dbconn;
    
    }
    public function finalconexion(){
        mysqli_close($this->conexionprincipal());
        
    }
    
    
    
}
