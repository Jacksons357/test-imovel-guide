<table class="table table-bordered table-responsive" style="width: 40%;">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>CRECI</th>
      <th>CPF</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $result = $conn->query("SELECT * FROM corretores");
    if ($result->num_rows > 0):
      while ($row = $result->fetch_assoc()):
    ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['nome'] ?></td>
          <td><?= $row['creci'] ?></td>
          <td><?= $row['cpf'] ?></td>
          <td>
            <a href="index.php?edit=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Editar</a>
            <a href="#" class="delete-link btn btn-danger btn-sm" data-id="<?= $row['id'] ?>" data-bs-toggle="modal" data-bs-target="#deleteModal">Deletar</a>
          </td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr>
        <td colspan="5" class="text-center">Ainda não há corretores cadastrados</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>