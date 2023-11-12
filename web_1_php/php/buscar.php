<?php 

include("conexion.php");
$connexion=conectar();

$busqueda=$_GET('busqueda');

$sql="SELECT * FROM usuarios WHERE Rut='$busqueda' OR Nombre='$busqueda' OR Apellidos='$Apellidos'";

$query=mysqli_query($connexion,$sql);

$row=mysqli_fetch_array($query);

    if($query){
        Header("Location: panelcontrol.php");
    }


?>

