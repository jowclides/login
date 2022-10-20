<?php

    //print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //echo "Existe";
        // Passou. Pode acessar pois existe campos preenchidos de e-mail e senha
        
        include_once('config.php');
            $email = $_POST['email'];
            $senha = $_POST['senha'];

        // print_r('E-mail: ' . $email);
        // echo "<br>";
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM tbl_usuarios WHERE email = '$email' AND senha = '$senha'";

        $result = $conexao->query($sql);

        //Mostra o resultado da pesquisa acima
        //print_r($result);

        //print_r('<br>');

        //print_r($sql);

        //print_r('<br>');

        if(mysqli_num_rows($result) < 1)
        {
            //print_r('Não existe');

            // Destruindo qq variaveis de sessao:
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            
            header('Location: login.php');

        }
        else
            {
                //print_r('OK. Existe sim.');

                //TRABALHANDO COM SESSOES
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;

                header('Location: sistema.php');
            }





    }else{

        //echo "Não existe";
        // Aqui não temos campos preenchidos entao usuario retorna para pagina de login e senha

        header('Location: login.php');

    }



?>