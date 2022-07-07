<!-- FILTRAR -->
<div class="modal fade" id="modal-filtrar">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-filter"></i> Filtrar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formFiltrar" action="/pedidos" method="get">
                    <div class="row no-print">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Cód.</label>
                                <input type="text" class="form-control" name="id_pedido" value="<?= (isset($id_pedido)) ? $id_pedido : "" ?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Data Inicio</label>
                                <input type="date" class="form-control" name="data_inicio" value="<?= isset($data_inicio) ? $data_inicio : "" ?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Data Final</label>
                                <input type="date" class="form-control" name="data_final" value="<?= isset($data_final) ? $data_final : "" ?>">
                            </div>
                        </div>
						<?php $id_cliente = "Todos"?>

                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <div class="col-lg-4">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
                <div class="col-lg-8" style="text-align: right">
                    <a href="/pedidos" class="btn btn-danger"><i class="fas fa-filter"></i> Remover Filtro</a>
                    <button type="submit" class="btn btn-success" onclick="document.getElementById('formFiltrar').submit()"><i class="fas fa-filter"></i> Filtrar</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
                <div class="card-body no-print">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="/vendaRapida" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Novo Pedido</a>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-filtrar"><i class="fa fa-filter"></i> Filtrar</button>
                            <button type="button" class="btn btn-info" onclick="print()"><i class="fas fa-print"></i> Imprimir</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h6 class="m-0 text-dark"><i class="fas fa-list"></i> Registros</h6>
                        </div><!-- /.col -->
                    </div>
                </div>

				<div class="card">
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped ">
							<thead>
							<tr>
								<th >Cód.</th>
								<th>Cliente</th>
								<th>Data</th>
								<th>Situação</th>
								<th>Valor</th>
								<th class="no-print" style="width: 110px">Ações</th>
							</tr>
							</thead>
							<tbody>
							<?php if (!empty($pedidos)) : ?>
								<div class="sorting_asc"> <?php foreach ($pedidos as $pedido) : ?>
									<tr>
										<td><?= $pedido['id_pedido'] ?></td>
										<td>
											<a href="/clientes/show/<?= $pedido['id_cliente'] ?>" style="color: black"><u><?= $pedido['nome'] ?></u></a>
											<a href="/clientes/show/<?= $pedido['id_cliente'] ?>" style="color: black"><u><?= $pedido['razao_social'] ?></u></a>
										</td>
										<td><?= date('d/m/Y', strtotime($pedido['data'])) ?></td>
										<td>
											<?php if($pedido['situacao'] == "Não Pago - Andamento"): ?>
											<span style="height: 20px; font-size: 12px; color: white; border-radius: 2px; background: #FFC125" class="badge badge-warning"><?= $pedido['situacao'] ?>
												<?php else: ?>
                                                <span style="height: 20px; font-size: 12px; color: white; border-radius: 2px;" class="badge badge-success"><?= $pedido['situacao'] ?>
													<?php endif; ?>
										<td><?= number_format($pedido['valor_a_pagar'], 2, ',', '.') ?></td>
										<td class="no-print">
											<a href="/pedidos/show/<?= $pedido['id_pedido'] ?>" class="btn btn-info style-action"><i class="fa fa-folder-open"></i></a>
											<button type="button" class="btn btn-danger style-action" onclick="confirmaAcaoExcluir('Deseja realmente excluir esse pedido?', '/pedidos/delete/<?= $pedido['id_pedido'] ?>')"><i class="fa fa-trash"></i></button>
										</td>
									</tr>
								<?php endforeach; ?>
							<?php else : ?>
								<tr>
									<td colspan="7">Nenhum registro!</td>
								</tr>
							<?php endif; ?>
							</tbody>

							<tfoot>
							<tr>
								<th class="sorting_asc" >Cód.</th>
								<th>Cliente</th>
								<th>Data</th>
								<th>Situação</th>
								<th>Valor</th>
								<th class="no-print" style="width: 110px">Ações</th>
							</tr>
							</tfoot>
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
	</div>

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
                    title: 'Despesa cadastrada com sucesso!'
                })
            <?php elseif ($alert == "success_delete") : ?>
                Toast.fire({
                    type: 'success',
                    title: 'Pedido excluido com sucesso!'
                })
            <?php elseif ($alert == "success_filter") : ?>
                Toast.fire({
                    type: 'success',
                    title: 'Filtro aplicado!'
                })
            <?php endif; ?>
        <?php endif; ?>
    });
</script>
