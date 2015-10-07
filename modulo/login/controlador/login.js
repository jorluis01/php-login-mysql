

function  login(){
    var data=$("#form-login").serialize()+"&type=1";
    $.get(carpetaroot()+"/modulo/login/modelo/consultas.php",data,function(html){
       alert(html);
    });  //envio de informacion mediante jquery, envio del formulario 
  
    
    
}
