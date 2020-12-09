<?php

    if(isset($_POST)){

        require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Config\db/conection.php';

        $title = isset($_POST['title']) ? mysqli_real_escape_string($db, $_POST['title']) : false;
        $description = isset($_POST['description']) ? mysqli_real_escape_string($db, $_POST['title']) : false;
        $category = isset($_POST['category']) ? (int)$_POST['category'] : false;

        $user = (int)$_SESSION['usuario']['id'];


        //array errores

        $errors = array();


        //validar datos antes de guardarlos

        if(empty($title)){
            $errors['title'] = "Titulo no valido";
        }
        if(empty($description)){
            $errors['description'] = "Descripción no valida";
        }
        if(empty($category) && !is_numeric($category)){
            $errors['category'] = "La categoría no es valida";
        }

        //validemos que no haya errores

        if(count($errors) == 0){
            $sql = "INSERT INTO entradas VALUES(null, $user, $category, '$title', '$description', null, CURDATE());";
            $save= mysqli_query($db, $sql);
        }
        else {
            $_SESSION["errors_entrie"] = $errors;
        }
    }
    echo "Exito";
// header("Location: ../../index.php");

?>