<?php 

require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Config\db\conection.php';

if(isset($_POST)){


    $email = trim($_POST['log_email']);
    $password = $_POST['log_pass'];


    //consulta para consultar credenciales

    $query = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
    
    $login = mysqli_query($db, $query);


    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);

        $verify = password_verify($password, $usuario['password']);
        $_SESSION['usuario'] = $usuario;
    }else {
        $_SESSION['error_login'] = "Login incorrecto";
    }


}


header('Location: http://localhost/php/All-In-Stories/index.php');

?>