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


?>