<?php 

    function DisplayErrors($errors, $campo){
        $badgeAlert = '';
        if(isset($errors[$campo]) && !empty($campo)){
            $badgeAlert = "";
            $badgeAlert = "<span class='badge badge-danger text-white float-left'>".$errors[$campo].'</span>';
        }

        return $badgeAlert;
    }

    //borrar errores

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

//Traer categorias 

    function getCategories($conection){
        $sql = "SELECT * FROM categorias ORDER BY id ASC;";

        $categories = mysqli_query($conection, $sql);

        $result = array();

        if ($categories && mysqli_num_rows($categories) >= 1){
            $result = $categories;
        }

        return$result;
    }



    //Traer entradas últimas entradas


    function getLastEntries($conection){
        $sql = "SELECT e.*, c.* FROM entradas e
                INNER JOIN categorias c ON e.categoria_id = c.id
                ORDER BY e.id DESC LIMIT 3";

        $entries = mysqli_query($conection, $sql);

        $result = array();

        if($entries && mysqli_num_rows($entries) >= 1){
            $result = $entries;
        }

        return $result;
    }











?>