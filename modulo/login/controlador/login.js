

function  login(){
    var data=$("#form-login").serialize()+"&type=1";
    $.get(carpetaroot()+"/modulo/login/modelo/consultas.php",data,function(html){
       if(html===""){
          alert("Contraseña o Usuario Incorecto"); 
       }
       if (!(html==="")){
            alert("Correcto");
       }
        
        
    });  //envio de informacion mediante jquery, envio del formulario 
  
    
    
}
