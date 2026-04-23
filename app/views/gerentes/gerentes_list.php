<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Projeto Integrador • Lista de Gerentes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="d-flex flex-row">
              <h2 class="mb-0">Lista de Gerentes</h2>
              <div class="ms-3">
                  <a href="<?= URL_BASE ?>/jogadores" class="btn btn-link">Ver Jogadores</a>
                  <a href="<?= URL_BASE ?>/usuarios" class="btn btn-link">Ver Usuários</a>
              </div>
           </div>
            <a href="<?= URL_BASE ?>/gerentes/cadastrar" class="btn btn-primary">
                <i class="bi bi-person-plus"></i> Novo Gerente
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="px-4 py-3">ID</th>
                                <th class="px-4 py-3">Placeholder</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--<?php foreach ($gerentes as $g): ?>
                                <tr>
                                    <td class="px-4 py-3 align-middle"><?= $u['id'] ?></td>
                                    <td class="px-4 py-3 align-middle"><?= $u['nomeUsuario'] ?></td>
                                    <td class="px-4 py-3 align-middle"><?= $u['email'] ?></td>
                                    <td class="px-4 py-3 align-middle">
                                        <span class="badge bg-secondary"><?= $u['perfil'] ?></span>
                                    </td>
                                    <td class="px-4 py-3 align-middle text-end">
                                        <a href="<?= URL_BASE ?>/usuarios/editar?id=<?= $u['id'] ?>" class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-pencil"></i> Editar
                                        </a>
                                        <a href="<?= URL_BASE ?>/usuarios/excluir?id=<?= $u['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Deseja excluir este usuário?')">
                                            <i class="bi bi-trash"></i> Excluir
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
