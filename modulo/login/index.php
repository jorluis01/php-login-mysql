<?php
include_once '../../modelo/conexion.php';;
$conexion=  new conexion();

$conexion->conexionprincipal();
$conexion->finalconexion();
echo "hola lk";