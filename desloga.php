<?php

    //print_r($_REQUEST);

            session_start();
            
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            session_destroy();
            
            header('Location: login.php');

    
?>