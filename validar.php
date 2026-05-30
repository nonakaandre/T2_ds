<?php 
      session_start();
      require('funcoes.php');

      $usuario = htmlspecialchars($_POST['email']);
      $senha = htmlspecialchars($_POST['senha']);

      if (validar_admin($_POST['email'], $_POST['senha'])) {
          $_SESSION['admin'] = true;
          header('Location: admin.php');
          exit();
      } else {
          header('Location: login.php?error=1');
    
      }

      if (validar_convidado($_POST['email'], $_POST['senha'])) {
          $_SESSION['convidado'] = true;
          header('Location: convidado.php');
          exit();
      } else {
          header('Location: login.php?error=1');
          exit();
      }
?>
<h1 style="color: red;"> Acesso Negado!!! </h1>