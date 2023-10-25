<?php

include("conexion.php");



$nombre="";
$apelllidos="";
$contrasena="";
$rutnum="";
$edad="";
$direccion="";
$fechadn="";
$id="";



//ingresar datos

myslqi_querry($conexion, "INSERT INTO usuarios (rut,username,userlastname,pass,age,adress,birthdate, registerdate) VALUES ( '$nutnum','$nombre','$apelllidos','$edad','$direccion','&fechadn', 'now()')");

myslqi_close($conexion);
// mostrar datos


myslqi_querry($conexion, "SELECT * FROM usuarios  WHERE id='$id' OR username='$nombre'");


myslqi_close($conexion);

//modificar datos

myslqi_querry($conexion, "UPDATE usuarios SET '$nombre'  WHERE id='$id'");
myslqi_close($conexion);

//eliminar usuario

myslqi_querry($conexion, "DELETE FROM usuarios  WHERE id='$id'");
myslqi_close($conexion);


?>