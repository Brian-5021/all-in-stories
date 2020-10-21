<?php 

    function DisplayErrors($errors, $campo){
        $badgeAlert = '';
        if(isset($errors[$campo]) && !empty($campo)){
            $badgeAlert = "";
            $badgeAlert = "<small id='emailHelp' class='form-text text-muted'>".$errors[$campo].'</small>';
        }

        return $badgeAlert;
    }


?>