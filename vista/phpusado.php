<?php

class htmlprincipal{
   //aca en esta clase añado los html5 mas usados en mi proyecto, con esto pretendo reusar los que mas pueda
    //mi codigo sin la necesidad de volver a escribir, solo lo llamo como una funcion de una 
   //clase de php 
    
    public function __construct(){
        
        
    } 
    public function inicio(){
        
        ?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $this->carpeta_proyecto() ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
         <script src="<?php echo $this->carpeta_proyecto() ?>js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src=" <?php echo $this->carpeta_proyecto() ?>js/bootstrap.min.js" type="text/javascript"></script>
         <script src="<?php echo $this->carpeta_proyecto() ?>js/config.js" type="text/javascript"></script>
       
    </head>
        <?php
        
    }
    function carpeta_proyecto(){ 
    $this_directory = dirname(__FILE__); 
    
    $archivos = scandir($this_directory); 
    $atras = ""; 
    
    $cuenta = -1;//para  evitar pegar  "principal.patch" afuera del proyecto, se recomienda revisar este numero.
    //se coloca dependiendo de la ubicacion de script 
    while (true){ 
        foreach($archivos as $actual){ 
            if ($actual == "principal.patch"){ /* este codigo aunque no es mio, me sirve  para conocer la 
                carpeta  principal de mi proyecto, tener en cuenta que el "principal.patch" se pega afuera 
                de la carpeta del proyecto

             *              */
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


