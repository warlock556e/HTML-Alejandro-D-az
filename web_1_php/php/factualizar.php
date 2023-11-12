<?php

include("conexion.php");
$connexion=conectar();


$Rut=$_POST['Rut'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Direccion=$_POST['Direccion'];
$Sexo=$_POST['Sexo'];
$Fecha_Nacimiento=$_POST['Fecha_Nacimiento'];


$sql="UPDATE usuarios SET Nombre='$Nombre', Apellidos='$Apellidos', Direccion='$Direccion',Sexo='$Sexo',Fecha_Nacimiento='$Fecha_Nacimiento' WHERE Rut='$Rut'";

                                                
                                                $sqledad="UPDATE usuarios SET Edad = (DATEDIFF(YEAR, fecha_nacimiento, GETDATE())) WHERE Rut='$Rut';";
                                                $query=mysqli_query($connexion,$sqledad);

                                                

$query=mysqli_query($connexion,$sql);

    if($query){
        Header("Location: panelcontrol.php");
    }
?>