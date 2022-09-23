<?php


session_start();

if ( !isset($_SESSION['tasks']) ) {
     $_SESSION['tasks'] = array();
}

if ( isset($_GET['task_name']) ) {
     array_push($_SESSION['tasks'], $_GET['task_name']);
     unset($_GET['task_name']);
}

if ( isset($_GET['clear']) ) {
    unset($_SESSION['tasks']);
}

 ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Meu CSS-->
      <link type="text/css" rel="stylesheet" href="css/estilo.css"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>
<body>

<div class="container">

<h1>Gerenciados de Tarefas</h1>

<div class="row">
 <div class="col s12 m6">
   <div class="card deep-purple lighten-4 z-depth-4">
     <div class="card-content white-text">
       <div class = "form" >
            <form action = "" method="get">
              <label for= "task_name">Tarefa:</label>
              <input type = "text" name = "task_name" placeholder = "">
                <div class="section"><br><br><br>
              <button type = "submit"> Cadastrar </button></div>
               </form>
       </div>
       <div class="separator"> </div>
       <div class = "list-tasks">
         <?php
          if ( isset($_SESSION['tasks']) ) {
            echo "<ul>";

            foreach ( $_SESSION['tasks'] as $key => $task ) {
               echo "<li>$task</li>";
             }
                echo "</ul>";
             }
          ?>
            <ul class="lista1">
                  <li class="lista"> Tarefa 1 </li>
                  <li class="lista"> Tarefa 1 </li>
                  <li class="lista"> Tarefa 1 </li>
             </ul>
             <form action="" method="get">
                      <input type="hidden" name="clear" value="clear">
                      <button type="submit">Limpar Tarefas</button>
                    </form>
       </div>

     </div>



   </div>
 </div>
</div>











</div>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
