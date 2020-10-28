<?php


    if (isset($_POST)) 
        {
            require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Config\db\conection.php';
            if(!isset($_SESSION)){
                session_start();
            }
            
            $name = isset($_POST['reg_nombre']) ? mysqli_real_escape_string($db, $_POST['reg_nombre'])  : false;
            //esto es lo mismo que
            // if(isset($_POST['nombre'])){
            //     $nombre = $_POST['nombre'];
            // }else {
            //     $nombre = false;
            // }
            $lastname = isset($_POST['reg_apellido']) ? mysqli_real_escape_string($db, $_POST['reg_apellido'])  : false;
            $email = isset($_POST['reg_email']) ? mysqli_real_escape_string($db, $_POST['reg_email'])  : false;
            $password = isset($_POST['reg_pass']) ? mysqli_real_escape_string($db, $_POST['reg_pass'])  : false;
            $repassword = isset($_POST['reg_repass']) ? mysqli_real_escape_string($db, $_POST['reg_repass'])  : false;
            $file = isset($_POST['reg_file']) ? $_POST['reg_file']: false;
    

            //array para capturar errores

            $errors = array();

            //validar los datos antes de guardarlos en la base de datos

            //validar nombre
            if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {
                $name_validate = true;
            }else {
                $name_validate = false;
                $errors['reg_nombre'] = "¡Ha habido un error en el nombre, digita nuevamente!";
            }

            //validar apellido
            if (!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/", $lastname)) {
                $lastname_validate = true;
            }else {
                $lastname_validate = false;
                $errors['reg_apellido'] = "¡Ha habido un error en el apellido, digita nuevamente!";
            }

            //validar email
            if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {
                $validate_email = true;
            } else {
                $validate_email = false;
                $errors['reg_email'] = "¡Oops!...Hay un error en el email ingresado, digita otra vez";
            }

            //ya verificamos que no esté vacío

            if(!empty($password)) {
                $validate_pass = true;
            }else {
                $validate_pass = false;
                $errors['reg_pass'] = "La contraseña no puede estar vacía";
            }

            //verificar que las contraseñas coincidan

            if ($password === $repassword) {
                $validate_repass = true;
          }
          else {
            $validate_repass = false;
            $errors['reg_repass'] = "La contraseña debe coincidir";
          }




            $save_user = false;

            if (count($errors) == 0 && $validate_repass = true) {
                $save_user = true;
                //cifrar contraseña
                $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);

                //insertar usuario en base de datos

                $sql = "INSERT INTO usuarios VALUES(null, '$name', '$lastname', '$email', '$password_segura', '$imgContenido', CURDATE() );";

                $save = mysqli_query($db, $sql);

                if($save){
                    $_SESSION['completed'] = "El registro se ha completado con exito";
                }else {
                    $_SESSION['errors']['general'] = "Fallo al guardar";
                }

            } else {
                $save_user = false;
                $_SESSION['errors'] = $errors;
            }
        }

        header('Location: ../Pages/check-in.php');
        exit();
?>
