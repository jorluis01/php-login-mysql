<?php
$formulario=new formulario();
$formulario->formulario();

class formulario {
    public function __construct() {
        
    }

    public function formulario(){
        
        ?>
<form >
    <label  >NOMBRE</label> 
    <input type="text" class="form-control" name="nom_usr">
    <label  >APELLIDO</label> 
    <input type="text" class="form-control" name="ape_usr">
    <label >PAIS</label> 
    <select class="form-control" name="pais_user">
        
    </select>
    <label >DEPARTAMENTO</label> 
    <select class="form-control" name="region_usr">
        
    </select>
    <label >CIUDAD</label> 
    <select class="form-control" name="ciudad_usr">
        
    </select>
    <label >CORREO</label> 
    <div class="input-group">
    <input type="email" class="form-control"  name="correo_usr" placeholder="jane.doe@example.com">
    <div class=" input-group-addon ">@</div> </div>
    <label >CONTRASEÑA</label> 
    <input type="password" class="form-control" name="contra_usr">
           
    
</form>
<?php
        
    }
}
