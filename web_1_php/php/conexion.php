<?php

function conectar(){

$server = "localhost";
$user = "root";
$passw= "sonsofeter";
$db= "HDMWebdb";

$connexion = new mysqli($server,$user,$passw,$db);

if($connexion->connect_errno){
    die("conexion falida" . $connexion->connect_errno);
}

mysquli_select_db($connexion,$db);
return $connexion;

}



?>
