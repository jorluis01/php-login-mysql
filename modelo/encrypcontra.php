<?php

 

class encrypcontra {
    public function __construct(){
        
    }
    public function encriptar($metodo,$mensaje){
        if($metodo=="sha2"){
            return $this->Sha2($mensaje);
            
        }
        
    }
    private function Sha2($mensaje){
        
        return  hash ( 'sha256' , $mensaje ) ;
        
        
    }
    
}
