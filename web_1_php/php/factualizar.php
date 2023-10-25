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

$sql="UPDATE usuarios SET Nombre='$Nombre', Apellidos='$Apellidos', Direccion='$Direccion',Sexo='$Sexo',Fecha_Nacimiento='$Fecha_Nacimiento',Edad='$Edad' WHERE Rut='$Rut'";
$query=mysqli_query($connexion,$sql);

    if($query){
        Header("Location: panelcontrol.php");
    }
?>