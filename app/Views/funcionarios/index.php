<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: 15px">
                <div class="col-sm-6">
                    <h6 class="m-0 text-dark"><i class="<?= $titulo['icone'] ?>"></i> <?= $titulo['modulo'] ?></h6>
                </div><!-- /.col -->
                <div class="col-sm-6 no-print">
                    <ol class="breadcrumb float-sm-right">
                        <?php foreach ($caminhos as $caminho) : ?>
                            <?php if (!$caminho['active']) : ?>
                                <li class="breadcrumb-item"><a href="<?= $caminho['rota'] ?>"><?= $caminho['titulo'] ?></a></li>
                            <?php else : ?>
                                <li class="breadcrumb-item active"><?= $caminho['titulo'] ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ol>
                </div><!-- /.col -->
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="/funcionarios/create" class="btn btn-primary"><i class="fa fa-user-plus"></i> Novo Funcionário</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
            </div>
            <!-- /.card -->
            <div class="card">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 35px">Cód.</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th style="width: 110px">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($funcionarios)) : ?>
                                <?php foreach ($funcionarios as $funcionario) : ?>
                                    <tr>
                                        <td><?= $funcionario['id_funcionario'] ?></td>
                                        <td><?= $funcionario['nome'] ?></td>
                                        <td><?= $funcionario['cpf'] ?></td>
                                        <td>
                                            <a href="/funcionarios/show/<?= $funcionario['id_funcionario'] ?>" class="btn btn-info style-action"><i class="fa fa-folder-open"></i></a>
                                            <a href="/funcionarios/edit/<?= $funcionario['id_funcionario'] ?>" class="btn btn-warning style-action"><i class="fa fa-edit"></i></a>
                                            <button type="button" class="btn btn-danger style-action" onclick="confirmaAcaoExcluir('Deseja realmente excluir esse funcionário?', '/funcionarios/delete/<?= $funcionario['id_funcionario'] ?>')"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });

        <?php
        $session = session();
        $alert = $session->getFlashdata('alert');

        if (isset($alert)) :
        ?>
            <?php if ($alert == "success_create") : ?>
                Toast.fire({
                    type: 'success',
                    title: 'Funcionário cadastrado com sucesso!'
                })
            <?php elseif ($alert == "success_edit") : ?>
                Toast.fire({
                    type: 'success',
                    title: 'Funcionário atualizado com sucesso!'
                })
            <?php elseif ($alert == "success_delete") : ?>
                Toast.fire({
                    type: 'success',
                    title: 'Funcionário excluido com sucesso!'
                })
            <?php endif; ?>
        <?php endif; ?>
    });
</script>