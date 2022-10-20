<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login Html</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;

        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;

        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: #fff;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <a href="home.php"> Voltar</a>

    <div>
        <?php
            //$tentativalogin = $_GET['login'];
            
            //if(!empty($tentativalogin))
            //{
                //print_r('<b>Oppsss:</b> Acesso negado. <br> Verifique Usuário e Senha por favor!');
                //sleep(5);
                //header('Location: login.php?login=ok');
            //}//else{
                //header('Location: login.php?login=ok');
            //}
        ?>
        <h1>Login</h1>
        <form action="verificaLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Logar">
        </form>
    </div>
    
</body>
</html>