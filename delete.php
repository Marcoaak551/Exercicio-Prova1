<?php
  require_once "dataBase.php";
  $id = $_POST['id'];
  try{
    $sql = "DELETE FROM usuarios WHERE id=:id";
    $stmt = getConnection()->prepare($sql);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute())
      header('Location: consulta.php');

    else
    echo "Falha";
  }catch(PDOException $e) {
  echo 'Erro: ' . $e->getMessage();
  }
?>
