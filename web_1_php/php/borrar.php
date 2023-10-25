<?php

include("conexion.php");
$connexion=conectar();

$Rut=$_GET['Rut'];

$sql="DELETE FROM usuarios  WHERE Rut='$Rut'";
$query=mysqli_query($connexion,$sql);

    if($query){
        Header("Location: panelcontrol.php");
    }
?>
