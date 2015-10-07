<?php

class htmlprincipal{
   
    
    public function _construct(){
        
        
    } 
    public function inicio(){
        
        ?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href=" <?php echo $this->carpeta_proyecto() ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
         <script src="<?php echo $this->carpeta_proyecto() ?>/js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src=" <?php echo $this->carpeta_proyecto() ?>/js/bootstrap.min.js" type="text/javascript"></script>
       
    </head>
        <?php
        
    }
    function carpeta_proyecto(){ 
    $this_directory = dirname(__FILE__); 
    $archivos = scandir($this_directory); 
    $atras = ""; 
    $cuenta = 0; 
    while (true){ 
        foreach($archivos as $actual){ 
            if ($actual == "principal.patch"){ 
                if ($cuenta == 0) 
                return "./"; 
                return $atras; 
            } 
        } 
        $cuenta++; 
        $atras = $atras . "../"; 
        $archivos = scandir($atras); 
    } 
}  
    
    
}


