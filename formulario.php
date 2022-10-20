<?php
    
    if(isset($_POST['submit']))
    {

        // DEBUG dos CAMPOS
        print_r($_POST['nome']);
        echo" , ";
        print_r($_POST['senha']);
        echo" , ";
        print_r($_POST['email']);
        echo" , ";
        print_r($_POST['telefone']);
        echo" , ";
        print_r($_POST['genero']);
        echo" , ";
        print_r($_POST['data_nascimento']);
        echo" , ";
        print_r($_POST['cidade']);
        echo" , ";
        print_r($_POST['estado']);
        echo" , ";
        print_r($_POST['endereco']);
        
        include_once('includes\config.php');


        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $sql = "INSERT INTO tbl_usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ($nome,$senha,$email,$telefone,$sexo,$data_nasc,$cidade,$estado,$endereco)";

        //$result = mysqli_query($conexao, $sql);

        $result = mysqli_query($conexao, "INSERT INTO tbl_usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')") or die(mysqli_error($conexao));



    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO | GN</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: white;
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);                       
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            
            
        }
        fieldset{
            
            border: 3px solid dodgerblue;
            text-align: left;
        }

        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 08px;
            color: white;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 15px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;

        }

        .botaoEnviar{
            border-radius: 10px;
            background-color: dodgerblue;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 15px;
            padding: 10px;
            margin-left: 10px;
            
             
            }
        
        #data_nascimento{
            
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            text-align: left;
            

        }
        #submit{
            background: linear-gradient(to right, rgb(0, 92, 97), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;           

        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19,195));
        }

         
    </style>

</head>
<body>
<br>
    <a href="home.php"> Voltar</a>
<br><br>


<div class="box">
    <form action="formulario.php" method="POST">

        <fieldset> 
            <legend><b>Formulario de Cadastro </b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome Completo</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">E-mail</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            

            <p> Sexo: </p>
            <input type="radio" id="feminino" name="genero"  value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>

            <input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>

            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Outro</label>
            <br><br><br>
            
                <label for="data_nascimento"> Data de nascimento</label>    
                <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                
            
            <br><br><br>

            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereco</label>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit">

       </fieldset>

  

    
    </form>

</div>
    
</body>
</html>