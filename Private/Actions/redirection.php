<!-- Redireccion si el usuario no está logueado -->

<?php 

if(!isset($_SESSION['usuario'])){
    session_start();
}




if(!isset($_SESSION)) {
    header("Location: ../../index.php");
}


?>