<?php

class jslogin{
    
    public function _construct(){
        
    } 
    public function jsusados($direccion){
        ?> 
 <script src="<?php echo $direccion ?>modulo/login/controlador/login.js" type="text/javascript"></script>
        
        <?php  //esto me sirve para llamar js especificos para mi modulo
    }
}

