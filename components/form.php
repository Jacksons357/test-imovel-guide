<form action="process.php" method="POST" class="p-4 rounded mb-5 " style="width: 30%;">
  <input type="hidden" name="id" value="<?= $id ?>">
  <div class="mb-3">
    <label for="nome" class="form-label fw-semibold">Nome:</label>
    <input type="text" id="nome" name="nome" class="form-control" value="<?= $nome ?>" required>
  </div>
  <div class="mb-3">
    <label for="creci" class="form-label fw-semibold">CRECI:</label>
    <input type="text" id="creci" name="creci" class="form-control" value="<?= $creci ?>" required>
  </div>
  <div class="mb-3">
    <label for="cpf" class="form-label fw-semibold">CPF:</label>
    <input type="text" id="cpf" name="cpf" class="form-control" value="<?= $cpf ?>" required>
  </div>
  <button type="submit" class="btn <?= $id ? 'btn-warning' : 'btn-primary' ?> w-100">
    <?= $id ? 'Salvar' : 'Enviar' ?>
  </button>
</form>