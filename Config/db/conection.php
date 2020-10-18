<?php 

//Conexión a la base de datos llamada Blog

$SERVER   = 'Localhost';
$USER     = 'Root';
$PASSWORD = '';
$DATABASE = 'blog';



$db = mysqli_connect($SERVER, $USER, $PASSWORD, $DATABASE);


//Consulta para que la base de datos me traiga los caracteres especiales correctamente

mysqli_query($db, "SET NAMES 'UTF8'");

?>