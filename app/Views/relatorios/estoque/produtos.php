<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="card no-print">
                <div class="card-body">
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-info" onclick="print()"><i class="fas fa-print"></i> Imprimir / Salvar PDF</button>
                        <!-- <a href="/inventarioDoEstoque/listaProdutos/" class="btn btn-primary"><i class="fas fa-edit"></i> Alterar/Excluir Produto</a>
                        <a href="/inventarioDoEstoque/add/" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Adicionar produto</a> -->
                    </div>
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
                                                <th>Cód.</th>
                                                <th>Nome</th>
                                                <th>Un</th>
                                                <th>Cód. Barras</th>
                                                <th>Qtd</th>
                                                <th>Qtd. Mínima</th>
                                                <th>Marg. L.</th>
                                                <th>Custo</th>
                                                <th>Venda</th>
                                                <th>Lucro</th>
                                                <!-- <th>NCM</th> -->
                                                <!-- <th>CFOP</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $total_de_custos = 0 ?>
										<?php $total_em_lucro = 0 ?>
										<?php $total_em_vendas = 0 ?>
                                            <?php if(!empty($produtos)): ?>
                                                <?php foreach($produtos as $produto): ?>
                                                    <tr>
                                                        <td><?= $produto['id_produto'] ?></td>
                                                        <td><?= $produto['nome'] ?></td>
                                                        <td><?= $produto['unidade'] ?></td>
                                                        <td><?= ($produto['codigo_de_barras'] != 0) ? $produto['codigo_de_barras'] : "S/N" ?></td>
                                                        <td><?= $produto['quantidade'] ?></td>
                                                        <td><?= $produto['quantidade_minima'] ?></td>
                                                        <td><?= round($produto['margem_de_lucro'], 1) ?>%</td>
                                                        <td><?= number_format($produto['valor_de_custo'], 2, ",", ".") ?></td>
                                                        <td><?= number_format($produto['valor_de_venda'], 2, ",", ".") ?></td>
                                                        <td><?= number_format($produto['lucro'], 2, ",", ".") ?></td>
                                                        <!-- <td><?= $produto['NCM'] ?></td> -->
                                                        <!-- <td><?= $produto['CFOP'] ?></td> -->
                                                    </tr>
													<?php $total_de_custos += ($produto['valor_de_custo']* $produto['quantidade']) ?>
													<?php $total_em_lucro += ($produto['lucro']* $produto['quantidade']) ?>
													<?php $total_em_vendas += ($produto['valor_de_venda']* $produto['quantidade']) ?>
                                                <?php endforeach; ?>
												<tr>
													<td colspan="2"><b>TOTAL DE CUSTO:</b></td>
													<td><b><?= number_format($total_de_custos, 2, ',', '.') ?></b></td>
													<td colspan="2"><b>TOTAL DE LUCRO:</b></td>
													<td><b><?= number_format($total_em_lucro, 2, ',', '.') ?></b></td>
													<td colspan="3"><b>TOTAL EM VENDAS:</b></td>
													<td><b><?= number_format($total_em_vendas, 2, ',', '.') ?></b></td>
												</tr>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="10">Nenhum registro!</td>
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
