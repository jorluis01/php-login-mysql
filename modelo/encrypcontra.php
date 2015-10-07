<?php


class encrypcontra {
    public function _construct(){
        
    }
    public function encriptar($metodo,$mensaje){
        if($metodo=="sha2"){
            $this->Sha2($mensaje);
            
        }
        
    }
    private function Sha2($mensaje){
        
       echo  hash ( 'sha256' , $mensaje ) ;
        
        
    }
    
}
