<?php

    //print_r($_REQUEST);

           
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            
            header('Location: login.php');

    
?>