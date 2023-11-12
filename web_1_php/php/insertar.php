<?php
include("conexion.php");
$connexion=conectar();

$Rut=$_POST['Rut'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Direccion=$_POST['Direccion'];
$Sexo=$_POST['Sexo'];
$Fecha_Nacimiento=$_POST['Fecha_Nacimiento'];


$sql="INSERT INTO usuarios VALUES('$Rut','$Nombre','$Apellidos','$Direccion','$Sexo','$Fecha_Nacimiento')";
$query= mysqli_query($connexion,$sql);

$sqledad="UPDATE usuarios SET Edad = (DATEDIFF(YEAR, Fecha_Nacimiento, GETDATE())) WHERE Rut='$Rut';";
    $queryedad=mysqli_query($connexion,$sqledad);



if($query){
    Header("Location: panelcontrol.php");
}
else{
}
?>
