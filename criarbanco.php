<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Aula de PDO</title>
</head>

<body>

    <?php

        require_once "config.php";


      try {
          $conexao = new PDO("mysql:host=$servidor", $usuario, $senha);
          $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $conexao->exec("CREATE DATABASE livraria");
            echo "banco de dados criado com sucesso";

      } 
          catch (PDOException $e) {
            echo "não foi possivel criar o banco de dados";
            $e->getMessage();
      }

      $conexao = null;

    ?>

</body>
</html>