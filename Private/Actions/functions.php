<?php 

    function DisplayErrors($errors, $campo){
        $badgeAlert = '';
        if(isset($errors[$campo]) && !empty($campo)){
            $badgeAlert = "";
            $badgeAlert = "<span class='badge badge-danger text-white float-left'>".$errors[$campo].'</span>';
        }

        return $badgeAlert;
    }


    function DeleteErrors() {
        $borrado = false;
	
        if(isset($_SESSION['errors'])){
            $_SESSION['errors'] = null;
            $borrado = true;
        }
        
        if(isset($_SESSION['errores_entrada'])){
            $_SESSION['errores_entrada'] = null;
            $borrado = true;
        }
        
        if(isset($_SESSION['completed'])){
            $_SESSION['completed'] = null;
            $borrado = true;
        }
        
        return $borrado;
    }



    function getCategories($conection){
        $sql = "SELECT * FROM categorias ORDER BY id ASC;";

        $categories = mysqli_query($conection, $sql);

        $result = array();

        if ($categories && mysqli_num_rows($categories) >= 1){
            $result = $categories;
        }

        return$result;
    }











?>