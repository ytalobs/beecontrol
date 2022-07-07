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



							<div class="card">

								<!-- /.card-header -->
								<div class="card-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
										<tr>
											<th>Cód.</th>
											<th>Nome</th>
											<th>Un</th>
											<th>Cód. Barras</th>
											<th>Qtd</th>
											<th>Qtd M.</th>
											<th>Cód. Fornecedor</th>
											<th>Localização</th>
										</tr>
										</thead>
										<tbody>
										 <?php if(!empty($produtos)): ?>
											<?php foreach($produtos as $produto): ?>
												<tr>
													<td><?= $produto['id_produto'] ?></td>
													<td><?= $produto['nome'] ?></td>
													<td><?= $produto['unidade'] ?></td>
													<td><?= ($produto['codigo_de_barras'] != 0) ? $produto['codigo_de_barras'] : "S/N" ?></td>
													<td><?= $produto['quantidade'] ?></td>
													<td><?= $produto['quantidade_minima'] ?></td>
													<td><?= $produto['id_fornecedor'] ?></td>
													<td><?= ($produto['localizacao'] != "") ? $produto['localizacao'] : "Não Cad." ?></td>
												</tr>
											<?php endforeach; ?>
										<?php else: ?>
											<tr>
												<td colspan="10">Nenhum registro!</td>
											</tr>
										<?php endif; ?>

										</tbody>

									</table>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
					</section>
					<!-- /.content -->
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
<!- /.content -->
</div>


<!-- /.content-wrapper -->
