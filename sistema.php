<?php
        session_start();
        //print_r($_SESSION);

        if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
       
        $logado = $_SESSION['email'];

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
    <h1 style="color:aliceblue; text-align:center">Sessões PHP - Acesso OK</h1>

    <h1 style="color:aliceblue; text-align:center">Bem vindo - <?php echo "<u>" . $logado . "</u>" ;?> - !  </h1>

    <?php
    
            // DEBUG Variaveis de Ambiente
           //print_r($_SESSION);
         
    ?>


    

   
    
</body>
</html>