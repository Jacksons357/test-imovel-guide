<?php
session_start();
include './db/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $creci = $_POST['creci'];
  $cpf = $_POST['cpf'];

  if (strlen($nome) < 2) {
    $_SESSION['error_message'] = "O nome deve ter no mínimo 2 caracteres.";
    header('Location: index.php');
    exit;
  }

  if (strlen($creci) < 2) {
    $_SESSION['error_message'] = "O CRECI deve ter no mínimo 2 caracteres.";
    header('Location: index.php');
    exit;
  }

  if (strlen($cpf) !== 14) {
    $_SESSION['error_message'] = "O CPF deve ter no mínimo 11 caracteres.";
    header('Location: index.php');
    exit;
  }

  if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $stmt = $conn->prepare("UPDATE corretores SET nome = ?, creci = ?, cpf = ? WHERE id = ?");
    $stmt->bind_param('sssi', $nome, $creci, $cpf, $id);
    $stmt->execute();
    $stmt->close();

    $_SESSION['success_message'] = "Editado com sucesso!";
  } else {
    $stmt = $conn->prepare("INSERT INTO corretores (nome, creci, cpf) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $creci, $cpf);
    $stmt->execute();

    $_SESSION['success_message'] = "Enviado com sucesso!";
  };

  header('Location: index.php');
  exit;
}

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $stmt = $conn->prepare("DELETE FROM corretores WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $stmt->close();

  $_SESSION['success_message'] = "Deletado com sucesso!";

  header('Location: index.php');
  exit;
}
