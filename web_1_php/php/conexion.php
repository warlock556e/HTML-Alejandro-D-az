<?php

function conectar(){

$server = "localhost";
$user = "root";
$passw= "sonsofeter";
$db= "hdmwebdb";

$connexion = new mysqli($server,$user,$passw,$db);

if($connexion->connect_errno){
    die("conexion falida" . $connexion->connect_errno);
}

mysqli_select_db($connexion,$db);
return $connexion;

}



?>

