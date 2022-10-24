<?php
    
    if(!empty($_GET['id']))

    {
                
        include_once('includes\config.php');

        $id = $_GET['id'];

        $sql_select = "SELECT * FROM tbl_usuarios WHERE ID=$id";

        $result = $conexao->query($sql_select);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                 
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $senha = $user_data['senha'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $endereco = $user_data['endereco'];

            }
            
        } 
        
        else 
        
        {
            header('Location: sistema.php?mensagem=Registro editado com sucesso!');
        }


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
            width: 30%;
            
            
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
        #update{
            background: linear-gradient(to right, rgb(0, 92, 97), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;           

        }
        #update:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19,195));
        }

         
    </style>

</head>
<body>
<br>
    <a href="sistema.php"> Voltar</a>
<br><br>


<div class="box">
    <form action="saveEdit.php" method="POST">

        <fieldset> 
            <legend><b>Formulario de Cadastro </b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome; ?>" required>
                <label for="nome" class="labelInput">Nome Completo</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha; ?>" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email; ?>" required>
                <label for="email" class="labelInput">E-mail</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone; ?>" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            

            <p> Sexo: </p>
            <input type="radio" id="feminino" name="genero"  value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '' ?> required>
            <label for="feminino">Feminino</label>
            <br>

            <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?> required>
            <label for="masculino">Masculino</label>
            <br>

            <input type="radio" id="outro" name="genero" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '' ?> required>
            <label for="outro">Outro</label>
            <br><br><br>

            
            
                <label for="data_nascimento"> Data de nascimento</label>    
                <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" value="<?php echo $data_nasc; ?>" required>
                
            
            <br><br><br>
            
            <div class="inputBox">
             
                <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade; ?>" required>
                <label for="cidade" class="labelInput">Cidade</label>

            </div>
             
            <br><br><br>

            <div class="inputBox">
             
                <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado; ?>" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            
            <br><br> <br>

            <div class="inputBox">
            
                <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco; ?>" required>
                <label for="endereco" class="labelInput">Endereco</label>
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>" >

            <br><br> <br>
            <input type="submit" name="update" id="update">

       </fieldset>

  

    
    </form>

</div>
    
</body>
</html>