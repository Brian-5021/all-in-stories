<?php


    if (isset($_POST)) 
        {
            require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Config\db\conection.php';
            if(!isset($_SESSION)){
                session_start();
            }
            
            $name = isset($_POST['reg_nombre']) ? $_POST['reg_nombre']: false;
            //esto es lo mismo que
            // if(isset($_POST['nombre'])){
            //     $nombre = $_POST['nombre'];
            // }else {
            //     $nombre = false;
            // }
            $lastname = isset($_POST['reg_apellido']) ? $_POST['reg_apellido']: false;
            $email = isset($_POST['reg_email']) ? $_POST['reg_email']: false;
            $password = isset($_POST['reg_pass']) ? $_POST['reg_pass']: false;
            $repassword = isset($_POST['reg_repass']) ? $_POST['reg_repass']: false;
            $file = isset($_POST['reg_file']) ? $_POST['reg_file']: false;
    

            //array para capturar errores

            $errors = array();

            //validar los datos antes de guardarlos en la base de datos

            //validar nombre
            if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {
                $name_validate = true;
            }else {
                $name_validate = false;
                $errors['reg_nombre'] = "Error Name";
            }

            //validar apellido
            if (!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/", $lastname)) {
                $lastname_validate = true;
            }else {
                $lastname_validate = false;
                $errors['reg_apellido'] = "Error Lastame";
            }

            //validar email
            if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {
                $validate_email = true;
            } else {
                $validate_email = false;
                $errors['reg_email'] = "Error Email";
            }

            //ya verificamos que no esté vacío

            if(!empty($password)) {
                $validate_pass = true;
            }else {
                $validate_pass = false;
                $errors['reg_pass'] = "La contraseña está vacía";
            }

            
            $save_user = false;

            if (count($errors) == 0) {
                $save_user = true;
                //cifrar contraseña
                $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);

                //insertar usuario en base de datos

                $sql = "INSERT INTO usuarios VALUES(null, '$name', '$lastname', '$email', '$password_segura', null, CURDATE() );";

                $save = mysqli_query($db, $sql);

                var_dump(mysqli_error($db));
                die();

                if($save){
                    $_SESSION['completed'] = "El registrose ha completado con exito";
                }else {
                    $_SESSION['errors']['general'] = "Fallo al guardar";
                }

            } else {
                $save_user = false;
                $_SESSION['errors'] = $errors;
            }
        }

        header('Location: ../index.php');
?>
