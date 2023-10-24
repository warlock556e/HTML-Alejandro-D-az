<?php

include("conexion.php");
$connexion=conectar();

$sql="SELECT * FROM usuarios";
$query=myslqi_querry($connexion,$sql);

$row=mysqli_fetch_array($query);


   $sqledad="SELECT DATEDIFF(YEAR,FechaNac,GETDATE())
-(CASE
   WHEN DATEADD(YY,DATEDIFF(YEAR,usuarios.FechaNac,GETDATE()),clientesFechaNac)>GETDATE() THEN 
      1
   ELSE 
      0 
   END) as Edad
 from usuario";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

 

    <div class="container mt-5">

    <div class="row">

<div class="col-md-3">
    <h1>Ingrese datos</h1>
    <form action="insertar.php" method="POST">

    <label for=""></label>
<input type="text" class="form-control mb-3" name="Nombre" placeholder="">
    <label for=""></label>
<input type="text" class="form-control mb-3" name="Apellidos" placeholder="">
    <label for=""></label>
<input type="text" class="form-control mb-3" name="Rut" placeholder="">
    <label for=""></label>
<input type="text" class="form-control mb-3" name="Direccion" placeholder="">
    <label for="Sexo"></label>
<input type="text" class="form-control mb-3" name="Sexo" placeholder="">
    <label for=""></label>
<input type="text" class="form-control mb-3" name="Fecha de Nacimiento" placeholder="">



    </form>
</div>

    </div>

    </div>

</body>
</html>