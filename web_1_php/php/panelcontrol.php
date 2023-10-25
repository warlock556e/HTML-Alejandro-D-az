<?php

include("conexion.php");
$connexion=conectar();

$sql="SELECT * FROM usuarios";
$query=mysqli_query($connexion,$sql);

$row=mysqli_fetch_array($query);


 

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

    
<input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
    
<input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos">
    
<input type="text" class="form-control mb-3" name="Rut" placeholder="Rut">
    
<input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion">
    
<select class="form-select mb-3" id="Sexo" >

      <option selected hidden> Sexo</option>

      <option value="Masculino">Masculino</option>

      <option value="Femenino">Femenino</option>

      <option value="Otro">Otro</option>




</select>

    <label for="Fecha de Nacimiento"> Fecha de Nacimiento</label>
<input type="date" class="form-control mb-3" name="Fecha_Nacimiento" placeholder="Fecha de Nacimiento">

<input type="submit" class="btn btn-primary">



    </form>
</div>

                       <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Rut</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Direccion</th>
                                        <th>Sexo</th>
                                        <th>Fecha de nacimiento</th>
                                        <th>Edad</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Rut']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Apellidos']?></th>
                                                <th><?php  echo $row['Direccion']?></th>
                                                <th><?php  echo $row['Sexo']?></th>
                                                <th><?php  echo $row['Fecha_naciemento']?></th>
                                                <th><?php  echo $row['Edad']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['Rut'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Rut'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                            
                        </div>

    </div>

    </div>

</body>
</html>