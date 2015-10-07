<?php

class login{
    // esta clase me sirve para construir diferentes tipos de formularios de login
    public function _construct(){
        
    } 
    public function inline(){
        
     ?>
    
        <div class="container">
            <div class="col-md-12 " style="height: 50px"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-block"  >
                <form role="form" class="form-inline" id="form-login" action="#">
                    <div class="form-group">
                    <label  >Nombre:</label>
                    <input type="text" name="nom_user" class="form-control ">
                    </div>
                    <div class="form-group">
                    <label >Contra:</label>
                    <input type="password" name="contra_user" class="form-control">
                    </div>
                    <button class="form-control" onclick="login();return false">Enviar</button>
                    
                </form>   
            </div>
                
                
           
            
            
            
            
            
            
            
            
            
      



<?php
        
        
    }
    
    public function horizontal(){
    ?>
            <div class="container">
            <div class="col-md-12 " style="height: 50px"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-block" style="background: #46b8da ;   height: 400px " >
                <form role="form" >
                    <div class="form-group">
                    <label  >Nombre:</label>
                    <input type="text" name="nom_user" class="form-control ">
                    </div>
                    <div class="form-group">
                    <label >Contra:</label>
                    <input type="password" name="contra_user" class="form-control">
                    </div>
                    <button class="form-control">Enviar</button>
                    
                </form>   
                
                
                
            </div>
            </div>
            
            
            
            <?php
    }
    
}







/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

