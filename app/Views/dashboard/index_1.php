<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?php $session = session() ?>
                    <h1 class="m-0 text-dark">Seja bem vindo (a) <b><?= $session->get('primeiro_nome') ?></b>!</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
				<div class="col-lg-4 col-6 ">
							<!-- small card -->
							<div class="small-box bg-info">
								<div class="inner">
									<h3><?= $total_de_clientes ?></h3>

									<p>Clientes</p>
								</div>
								<div class="icon">
									<i class="fas fa-user-plus"></i>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-6">
							<!-- small card -->
							<div class="small-box bg-gradient-gray">
								<div class="inner">
									<h3><?= $total_de_produtos ?></h3>

									<p>Produtos</p>
								</div>
								<div class="icon">
									<i class="fas fa-barcode"></i>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-6">
							<!-- small card -->
							<div class="small-box bg-olive">
								<div class="inner">
									<h3><?= $total_de_vendas ?> </h3>
									<p>Vendas <?= date('m/Y') ?></p>
								</div>
								<div class="icon">
									<i class="fas fa-shopping-cart"></i>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-6">
							<!-- small card -->
							<div class="small-box bg-gradient-purple">
								<div class="inner">
									<h3><?= $total_de_pedidos ?></h3>

									<p>Pedidos <?= date('m/Y') ?></p>
								</div>
								<div class="icon">
									<i class="far fa-handshake"></i>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-6">
							<!-- small card -->
							<div class="small-box bg-danger">
								<div class="inner">
									<h3><?= $total_de_orcamentos ?></h3>

									<p>Orçamento <?= date('m/Y') ?></p>
								</div>
								<div class="icon">
									<i class="fas fa-search"></i>
								</div>
							</div>
						</div>


					</div>


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>
<!-- /.content-wrapper -->
