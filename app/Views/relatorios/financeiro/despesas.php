<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="card no-print">
                <div class="card-body">
                    <form action="/relatorios/despesas" method="post">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Data Inicio</label>
                                    <input type="date" class="form-control" name="data_inicio" value="<?= (isset($data_inicio)) ? $data_inicio : "" ?>">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Data Final</label>
                                    <input type="date" class="form-control" name="data_final" value="<?= (isset($data_final)) ? $data_final : "" ?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <button type="submit" class="btn btn-success" style="margin-top: 30px">Gerar Relatório</button>
                                <button type="button" class="btn btn-info" onclick="print()" style="margin-top: 30px"><i class="fas fa-print"></i> Imprimir / Salvar PDF</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h6 class="m-0 text-dark" style="text-align: center"><b><?= $titulo['modulo'] ?></b></h6>
                                    <hr>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 30px">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <p><b>EMPRESA:</b> <?= $empresa['nome_fantasia'] ?></p>
                                    <p><b>CNPJ:</b> <?= $empresa['cnpj'] ?></p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <p><b>CONTATO:</b> <?= $empresa['telefone'] ?></p>
                                    <p><b>ENDEREÇO:</b> <?= $empresa['endereco'] ?></p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <p><b>DATA: </b>de <?= $data_inicio?> até <?= $data_final ?></p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 50px">
                                <div class="col-lg-12">
                                    <table id="" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th colspan="6" style="text-align: center">DESPESAS</th>
                                            </tr>
                                            <tr>
                                                <th>Cód.</th>
                                                <th>Tipo</th>
                                                <th>Descrição</th>
                                                <th>Data</th>
                                                <th>Hora</th>
                                                <th>Valor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $total_despesas = 0 ?>
                                            <?php if(!empty($despesas)): ?>
                                                <?php foreach($despesas as $despesa): ?>
                                                    <tr>
                                                        <td><?= $despesa['id_despesa'] ?></td>
                                                        <td><?= $despesa['tipo'] ?></td>
                                                        <td><?= $despesa['descricao'] ?></td>
                                                        <td><?= $despesa['data'] ?></td>
                                                        <td><?= $despesa['hora'] ?></td>
                                                        <td><?= $despesa['valor'] ?></td>
                                                    </tr>
													<?php $total_despesas += ($despesa['valor']) ?>
                                                <?php endforeach; ?>
												<tr>
													<td colspan="5"><b>TOTAL DE DESPESAS:</b></td>
													<td><b><?= number_format($total_despesas, 2, ',', '.') ?></b></td>
												</tr>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="6">Nenhum registro!</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>Relatório gerado em: <?= date('d/m/Y') ?> às <?= date('H:i') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            <?php if ($alert == "success_gerar_relatorio") : ?>
                Toast.fire({
                    type: 'success',
                    title: 'Relatório gerado com sucesso!'
                })
            <?php endif; ?>
        <?php endif; ?>
    });
</script>
