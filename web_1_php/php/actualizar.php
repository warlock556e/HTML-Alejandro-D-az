<?php 
    include("conexion.php");
    $connexion=conectar();

$Rut=$_GET['Rut'];

$sql="SELECT * FROM usuarios WHERE Rut='$Rut'";
$query=mysqli_query($connexion,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                <div class="container mt-5">
                    <form action="factualizar.php" method="POST">
                    
    <input type="hidden" name="Rut" value="<?php echo $row['Rut']?>">

    <label for=""></label>
<input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
    <label for=""></label>
<input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos']  ?>">
    <label for=""></label>
<input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion" value="<?php echo $row['Direccion']  ?>">

<select class="form-select mb-3" name="Sexo" id="Sexo" >

      <option value="<?php echo $row['Sexo']  ?>" selected hidden> <?php echo $row['Sexo']  ?></option>

      <option value="Masculino">Masculino</option>

      <option value="Femenino">Femenino</option>

      <option value="Otro">Otro</option>

      </select>


<input type="date" class="form-control mb-3" name="Fecha_Nacimiento" placeholder="Fecha de Nacimiento" value="<?php echo $row['Fecha_Nacimiento']  ?>">

                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
