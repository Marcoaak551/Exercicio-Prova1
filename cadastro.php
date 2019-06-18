<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Contatos</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  </head>
  <body>
    <main>
      <section>
        <header>
          <h1 class="title">
            Cadastro de Contatos
          </h1>
        </header>
        <div class="registro-panel">
          <form method="POST" action="register.php">
            <div>
              <input type="email" name="email" required="true" placeholder="Email" class="input-control">
            </div>
            <div>
              <input type="text" name="nome" required="true"  placeholder="Nome completo" class="input-control">
            </div>
            <div>
              <input type="text" name="apelido" pattern="[a-zA-Z]+" required="true"  placeholder="Apelido" class="input-control">
            </div>
            <div>
              <input type="text" name="telefone" required="true"  placeholder="Telefone" class="input-control">
            </div>
            <div>
              <input type="checkbox" name="concordo">
              <label for="concordo">Concordo com os termos e contratos.</label>
            </div>
            <div>
              <span style="color:#0062bf;">Inserir Cadastro </span><button type="submit" id="Cadastrar contato" <i class="fas fa-user-plus"></i></button><br>
            </div>
          </form>
          <span style="color:#0062bf;">Consultar cadastros </span><a href="consulta.php"><button><i class="fas fa-search-plus"></i></button></a>﻿
        </div>
      </section>
    </main>
  </body>
</html>
