<?php
$consulta=new consultas($_REQUEST['type']);
//require_once '../../../modelo/encrypcontra.php';
//require_once '../../../modelo/conexion.php';
        


class consultas {
    
    function __construct($type) {
        require_once '../../../modelo/encrypcontra.php';
        require_once '../../../modelo/conexion.php';
   switch ($type) {
    case 1: 
        $this->Select();
        break;
        
        }




    }
    function Select(){
       $jsondata = array();
        $user=$_REQUEST['nom_user'];
        
        $contra=new encrypcontra();
        $conexion=new conexion();
        $contrase=$contra->encriptar("sha2",$_REQUEST['contra_user']);
       
        $sql="Select Id_Usr from usr_regis where Usr like '".$user."' and Contra like '".$contrase."'";
        $resultado=mysqli_query($conexion->conexionprincipal(), $sql)or die("error". mysqli_error($conexion->conexionprincipal()));
        
        if ($reg=mysqli_fetch_array($resultado))
        {
            
           if(!($reg['Id_Usr'])==""){
               echo "1";
           }
           if(($reg['Id_Usr'])==""){
               echo "";
           }
            
        }
        $conexion->finalconexion();
        
        
        
        
    }
}
