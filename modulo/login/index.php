

<?php
$inicio=new htmlprincipal();
$inicio->inicio();
include_once  ''.$inicio->carpeta_proyecto().'php-login/modulo/login/vista/login.php';
 include_once  ''.$inicio->carpeta_proyecto().'php-login/modulo/login/controlador/js.php';

$login=new login();
$login->inline();
$js=new jslogin();
$js->jsusados($inicio->carpeta_proyecto());







