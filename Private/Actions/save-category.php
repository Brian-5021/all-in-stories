<?php

if(isset($_POST)){
   require_once 'C:\xampp\htdocs\PHP\All-In-Stories\Config\db/conection.php';

   $name = isset($_POST['name']) ? mysqli_real_escape_string($db, $_POST['name']) : false;

   //array de errores

   $errors = array();

    echo $name;

    //validar datos antes de guardarlos en la BD

    //validate field input name

    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
        $validate_name = true;
    }else {
        $validate_name = false;
        $errors['nombre'] = "El nombre no es válido";
    }


    if(count($errors) == 0){
        $sql = "INSERT INTO categorias VALUES (NULL, '$name');";

        $save = mysqli_query($db, $sql);
    }

}

header("Location: ../../index.php");

?>