<?php
    
    if(!empty($_GET['id']))

    {
                
        include_once('includes\config.php');

        $id = $_GET['id'];

        $sql_select = "SELECT * FROM tbl_usuarios WHERE ID=$id";

        $result = $conexao->query($sql_select);

        if($result->num_rows > 0)
        {
            $sql_delete = "DELETE FROM tbl_usuarios WHERE id='$id'";

            $executa = $conexao->query($sql_delete);

                        
        } 
        
            echo "<h1> <b> Registro deletado com sucesso! </b> <h/>";

            sleep(5);

     
            header('Location: sistema.php?mensagem=Registro deletado com sucesso!');
 


    }
?>