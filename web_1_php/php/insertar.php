<?php
include("conexion.php");
$connexion=conectar();

$Rut=$_POST['Rut'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Direccion=$_POST['Direccion'];
$Sexo=$_POST['Sexo'];
$Fecha_de_Nacimiento=$_POST['Fecha_Nacimiento'];
$Edad=$_POST['Edad'];


$sql="INSERT INTO usuarios VALUES('$Rut','$Nombre','$Apellidos','$Direccion','$Sexo','$Fecha_de_Nacimiento','$Edad')";
$query= mysqli_query($connexion,$sql);

if($query){
    Header("Location: panelcontrol.php");
    
}else {
}
?>