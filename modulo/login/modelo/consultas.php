<?php
//$consulta=new consultas($_REQUEST['type']);
require_once '../../../modelo/encrypcontra.php';
        


class consultas {
    
    function __construct() {
        
   switch ($_REQUEST['type']) {
    case 1: 
        $this->Select();
        break;
        
        }




    }
    function Select(){
        
        
        
        
        
    }
}
