<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="card no-print">
                <div class="card-body">
                    <form action="/relatorios/faturamentoDetalhado" method="post">
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
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <p><b>EMPRESA:</b> <?= $empresa['nome_fantasia'] ?></p>
                                    <p><b>CNPJ:</b> <?= $empresa['cnpj'] ?></p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <p><b>CONTATO:</b> <?= $empresa['telefone'] ?></p>
                                    <p><b>ENDEREÇO:</b> <?= $empresa['endereco'] ?></p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 50px">
                                <div class="col-lg-12">
                                    <table id="" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th colspan="6" style="text-align: center">VENDAS</th>
                                            </tr>
                                            <tr>
                                                <th>Cód.</th>
                                                <th>Data</th>
                                                <th>Hora</th>
                                                <th>Valor</th>
                                                <th>Cód. Cliente</th>
                                                <th>Cód. Caixa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $total_em_vendas = 0 ?>
                                            <?php if(!empty($vendas)): ?>
                                                <?php foreach($vendas as $venda): ?>
                                                    <tr>
                                                        <td><?= $venda['id_venda'] ?></td>
                                                        <td><?= $venda['data'] ?></td>
                                                        <td><?= $venda['hora'] ?></td>
                                                        <td><?= $venda['valor_a_pagar'] ?></td>
                                                        <td><?= $venda['id_cliente'] ?></td>
                                                        <td><?= $venda['id_caixa'] ?></td>
                                                    </tr>
													<?php $total_em_vendas += ($venda['valor_a_pagar']) ?>
                                                <?php endforeach; ?>
												<tr>
													<td colspan="5"><b>TOTAL EM VENDAS:</b></td>
													<td><b><?= number_format($total_em_vendas, 2, ',', '.') ?></b></td>
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
                            <div class="row" style="margin-top: 50px">
                                <div class="col-lg-12">
                                    <table id="" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th colspan="6" style="text-align: center">LANÇAMENTOS</th>
                                            </tr>
                                            <tr>
                                                <th>Cód.</th>
                                                <th>Descrição</th>
                                                <th>Data</th>
                                                <th>Hora</th>
                                                <th>Valor</th>
                                                <th>Cód. Caixa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $total_lancamentos = 0 ?>
                                            <?php if(!empty($lancamentos)): ?>
                                                <?php foreach($lancamentos as $lancamento): ?>
                                                    <tr>
                                                        <td><?= $lancamento['id_lancamento'] ?></td>
                                                        <td><?= $lancamento['descricao'] ?></td>
                                                        <td><?= $lancamento['data'] ?></td>
                                                        <td><?= $lancamento['hora'] ?></td>
                                                        <td><?= $lancamento['valor'] ?></td>
                                                        <td><?= $lancamento['id_caixa'] ?></td>
                                                    </tr>
													<?php $total_lancamentos += ($lancamento['valor']) ?>
                                                <?php endforeach; ?>
												<tr>
													<td colspan="5"><b>TOTAL EM LANÇAMENTOS:</b></td>
													<td><b><?= number_format($total_lancamentos, 2, ',', '.') ?></b></td>
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
                                    <br>
                                    <p><b>Tipo: </b>Detalhado</p>
                                    <p><b>Data: </b>de <?= $data_inicio?> até <?= $data_final ?></p>
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
