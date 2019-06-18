<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Contatos Cadastrados</title>
  </head>
  <body>
    <table border="1">
      <thead>
      <th>ID</th><th>Nome</th><th>E-mail</th><th>Apelido</th><th>Telefone</th>
      </thead>
      <tbody>
        <?php
        require_once "dataBase.php";
        $sql = "select id,nome, apelido, email, telefone from usuarios";
        foreach (getConnection()->query($sql) as $row) {
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['nome']."</td>";
          echo "<td>".$row['apelido']."</td>";
          echo "<td>".$row['email']."</td>";
          echo "<td>".$row['telefone']."</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
    <span style="color:#0062bf;">Home </span><a href="cadastro.php"><button><i class="fas fa-home"></i></button></a>﻿
    <div>
      <form method="POST" action="delete.php">
        <input type = "text" name="id" placeholder="Excluir pelo ID:">
        <input type = "submit" value = "Excluir">
      </form>
    </div>
  </body>
</html>
