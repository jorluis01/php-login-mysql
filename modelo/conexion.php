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
    
    public function __construct() {
    
    }
    public function conexionprincipal(){
    $url="ec2-54-197-241-239.compute-1.amazonaws.com";
   $contra="zTEH0ePQCWzpNI1ow6W1iVTZGu";
     $user="rbxkyusgfryans";
    $data="d6h3hnkdi41pd7";
    $dbconn="";
    $dbconn = pg_connect("host=".$url." dbname=".$data." user=".$user." password=".$contra."")
    or die('No se ha podido conectar: ' . pg_last_error());
    
    return  $dbconn;
    }
    public function finalconexion(){
        pg_close(conexionprincipal());
    }
    
    
    
}
