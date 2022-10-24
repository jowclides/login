<?php
        session_start();
        //print_r($_SESSION);
        
        $mensagem = 0;

        if (!empty($_GET['mensagem']))
        {
          $mensagem = $_GET['mensagem'];
        }


        if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
       
        $logado = $_SESSION['email'];

       
        include_once('includes\config.php');


        if(!empty($_GET['search']))
        {
          $data = $_GET['search'];
          $sql = "SELECT * FROM tbl_usuarios WHERE id LIKE'%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
          //print_r($sql);
        }
        else
        {
          $sql = "SELECT * FROM tbl_usuarios ORDER BY id DESC";
        }
       
        $result = $conexao->query($sql);

        //print_r($result);






    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>SISTEMA | LOGIN </title>
    <style>

        body{
            
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            
            
        }
        .botaoDeslogar{
            border-radius: 10px;
            background-color: red;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 15px;
            padding: 10px;
            margin-left: 10px;
             
            }
        .botaoDeslogar:hover{
            background-color: dodgerblue;
        }

        
      .table-bg{
        background-color: rgba(0,0,0,0.3);
        border-radius: 15px 15px 0 0;

      }

      .box-search{
        display: flex;
        justify-content: center;
        gap: 1%;
      }


    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema de Login | Emerson Silva </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="formulario.php">Form Cadastro</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link 1</a>
        </li> -->
        
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Formulários
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Form 1</a></li>
            <li><a class="dropdown-item" href="#">Form 2</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Form 3</a></li>
          </ul>
        </li> -->
        
        <!-- <li class="nav-item">
          <a class="nav-link disabled">Link</a>
        </li> -->
      </ul>

      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
      
        <a  href="desloga.php"> <button class="botaoDeslogar"> Deslogar</button> </a>
      
      
      
    </div>
  </div>
</nav>


<br>
<br>
    

    <h1 style="color:aliceblue; text-align:center">Bem vindo - <?php echo "<u>" . $logado . "</u>" ;?> - !  </h1>

    <br><br>

    <div class="box-search"> 
        
            <input type="search" placeholder="pesquisar" class="form-control w-25" id="pesquisar">
                 <button class="btn btn-success" onclick="searchData">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                 </svg>
                 </button>   
    </div>

    <div class="m-5">
          <table class="table text-white table-bg">
            <caption>List of users</caption>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Sexo</th>
                <th scope="col">Data Nasc</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php
              
                  while($user_data = mysqli_fetch_assoc($result))
                  {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] ."</td>";
                    echo "<td>" . $user_data['nome'] ."</td>";
                    echo "<td>" . $user_data['email'] ."</td>";
                    echo "<td>" . $user_data['telefone'] ."</td>";
                    echo "<td>" . $user_data['sexo'] ."</td>";
                    echo "<td>" . $user_data['data_nasc'] ."</td>";
                    echo "<td>" . $user_data['cidade'] ."</td>";
                    echo "<td>" . $user_data['estado'] ."</td>";
                    echo "<td>" . $user_data['endereco'] ."</td>";
                    echo "<td>" . 
                    "<a class='btn btm-sm btn-primary' href='edit.php?id=" . $user_data['id'] . "'> 
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                      <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                    </svg>" 
                    . "</a>   "
                    . "<a class='btn btm-sm btn-primary' href='delete.php?id=" . $user_data['id'] . "'> 
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                    <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                    </svg>" 
                    . "</a>"
                    ."</td>";
                  }
              
              ?>
            </tbody>
          </table>
    </div>

    <h1 style="color:aliceblue; text-align:center">

          <?php
          
              if(!$mensagem == 0)
              {
                echo $mensagem;
              }

          ?>
  
     </h1>

    <?php
    
            // DEBUG Variaveis de Ambiente
           //print_r($_SESSION);
         
    ?>


       
    
</body>
<script>
  var search = document.getElementById('pesquisar');

  search.addEventListener("keydown", function(event){

    if (event.key == "Enter")
    {
      searchData();
    }
  });

  function searchData()
  {
    window.location = 'sistema.php?search='+search.value;
    
  }

</script>
</html>