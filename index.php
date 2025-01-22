<?php session_start();

include './db/connection.php';

$nome = '';
$creci = '';
$cpf = '';
$id = '';

if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $result = $conn->query("SELECT * FROM corretores WHERE id = $id");

  $corretor = $result->fetch_assoc();
  $nome = $corretor['nome'];
  $creci = $corretor['creci'];
  $cpf = $corretor['cpf'];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Imóvel Guide | Cadastro de Corretores</title>
</head>

<body>
  <?php
  if (isset($_SESSION['success_message'])) {
    echo '<div class="toastSuccess show" id="successToast">'
      . $_SESSION['success_message'] . '</div>';
    unset($_SESSION['success_message']);
  }

  if (isset($_SESSION['error_message'])) {
    echo '<div class="toastError show" id="errorToast">'
      . $_SESSION['error_message'] . '</div>';
    unset($_SESSION['error_message']);
  }
  ?>

  <h1 class="mt-5">Cadastro de Corretores</h1>

  <?php

  include('components/form.php');

  include('components/table.php');

  include('components/modal.php');

  include('components/footer.php');

  ?>

  <script src="scripts/form-validation.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>