<?php
include_once '../../modelo/conexion.php';;
$conexion=  new conexion();
echo "hola lk";
$conexion->conexionprincipal();
$conexion->finalconexion();
