<?php
  require_once "dataBase.php";
  $email = $_POST['email'];
  $nome = $_POST['nome'];
  $apelido = $_POST['apelido'];
  $telefone = $_POST['telefone'];
  if (empty($email)) {
    die("E-mail obrigatório");
  }
  if (empty($nome)) {
    die("Nome obrigatório");
  }
  if (empty($apelido)) {
    die("Usuário obrigatório");
  }
  if (empty($telefone)) {
    die("Telefone obrigatório");
  }
  try{
    $sql = "INSERT INTO usuarios(nome, email, apelido, telefone) VALUES (:nome, :email, :apelido,:telefone)";
    $stmt = getConnection()->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':apelido', $apelido);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    if ($stmt->execute()){
      header('Location: cadastro.php');
      }
    else
      echo "Falhou";
  }catch(PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
  }
?>
