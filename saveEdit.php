<?php


include_once('includes\config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $sqlUpdate = "UPDATE tbl_usuarios SET nome='$nome', senha='$senha', email='$email', telefone='$telefone', sexo='$sexo', data_nasc='$data_nasc', cidade='$cidade', estado='$estado', endereco='$endereco' WHERE id='$id'";


        $result = $conexao->query($sqlUpdate);

        //print_r($sqlUpdate);


    } else {

        echo "Erro 1 aqui!";
        sleep(3);

        header('Location: sistema.php');
    }


     
        header('Location: sistema.php?mensagem=Registro editado com sucesso!');


?>