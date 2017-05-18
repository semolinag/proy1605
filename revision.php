<?php
session_start();

$PATH='lib/';
include $PATH.'Conexion.php';
include $PATH.'Usuario.php';
$oUsr=new Usuario();
$oUsr->nombre=$_POST['nombre'];
$oUsr->clave=$_POST['clave'];

if($oUsr->VerificaUsuarioClave()){
    $_SESSION['USR']=$oUsr;
    header('location:http://localhost:8081/proy1605/index.php');
}
else 
{
    echo 'No Existe';
}
?>
