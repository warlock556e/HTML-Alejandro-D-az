<?php
include("conexion.php");
$con=conectar();

$Rut=$_POST['Rut'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Direccion=$_POST['Direccion'];
$Sexo=$_POST['Sexo'];
$Fecha_de_Nacimiento=$_POST['Fecha_de_Nacimiento'];
$Edad=$_POST['Edad'];

  $sqledad="SELECT DATEDIFF(YEAR,FechaNac,GETDATE())
-(CASE
   WHEN DATEADD(YY,DATEDIFF(YEAR,usuarios.FechaNac,GETDATE()),clientesFechaNac)>GETDATE() THEN 
      1
   ELSE 
      0 
   END) as Edad
 from usuario";

$sql="INSERT INTO alumno VALUES('$Rut','$dni','$Nombre','$Apellidos','$Direccion','$Sexo','$Fecha_de_Nacimiento','$Edad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: panelcontrol.php");
    
}else {
}
?>