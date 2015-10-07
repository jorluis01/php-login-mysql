

function  login(){
    var data=$("#form-login").serialize();
    $.get(carpetaroot()+"/modulo/login/modelo/hola.php",data,function(html){
       alert(html);
    });  //envio de informacion mediante jquery, envio del formulario 
  
    
    
}
