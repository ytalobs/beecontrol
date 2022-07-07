<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="../../../public/theme/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<!-- Theme style -->
<link rel="stylesheet" href="../../../public/theme/dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- Content Wrapper. Contains page content -->


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?php $session = session() ?>
                    <h1 class="m-0 text-dark">Seja bem vindo <b><?= $session->get('primeiro_nome') ?></b>!</h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div> -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">

					<div class="col-lg-4 col-6">
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
						<div class="small-box bg-success">
							<div class="inner">
								<h3>R$ <?= number_format($faturamento_total, 2, ',', '.') ?> </h3>
								<p>Faturamento <?= date('m/Y') ?></p>
							</div>
							<div class="icon">
								<i class="far fa-money-bill-alt"></i>
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



                <div class="col-lg-6">
                    <!-- BAR CHART -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Faturamento em <?= date('Y') ?></h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>

                            <script>
                                new Chart(document.getElementById("chartjs-0"), {
                                    "type": "line",
                                    "data": {
                                        "labels": ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
                                        "datasets": [{
                                            "label": "Faturamento",
                                            "data": [
                                                <?php
                                                if (!empty($faturamentos)) {
                                                    foreach ($faturamentos as $faturamento) {
                                                        echo $faturamento . ", ";
                                                    }
                                                }
                                                ?>
                                            ],
                                            "fill": false,
                                            "borderColor": "rgb(75, 192, 192)",
                                            "lineTension": 0.1
                                        }]
                                    },
                                    "options": {}
                                });
                            </script>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-lg-6">
                    <!-- BAR CHART -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Faturamento em <?= date('Y') ?></h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>

                            <script>
                                new Chart(document.getElementById("chartjs-1"), {
                                    "type": "bar",
                                    "data": {
                                        "labels": ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
                                        "datasets": [{
                                            "label": "Faturamento",
                                            "data": [
                                                <?php
                                                if (!empty($faturamentos)) {
                                                    foreach ($faturamentos as $faturamento) {
                                                        echo $faturamento . ", ";
                                                    }
                                                }
                                                ?>
                                            ],
                                            "fill": false,
                                            "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                                            "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                                            "borderWidth": 1
                                        }]
                                    },
                                    "options": {
                                        "scales": {
                                            "yAxes": [{
                                                "ticks": {
                                                    "beginAtZero": true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-lg-12">
                    <!-- BAR CHART -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Contas à Receber em <?= date('m/Y') ?> (Abertas e Vencidas)</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Cód</th>
                                                <th>Status</th>
                                                <th>Descrição</th>
                                                <th>Vencimento</th>
                                                <th>Valor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($contas_a_receber_do_mes_atual)) : ?>
                                                <?php foreach ($contas_a_receber_do_mes_atual as $conta) : ?>
                                                    <tr>
                                                        <td><?= $conta['id_conta'] ?></td>
                                                        <td><?= $conta['status'] ?></td>
                                                        <td><?= $conta['nome'] ?></td>
                                                        <td><?= date('d/m/Y', strtotime($conta['data_de_vencimento'])) ?></td>
                                                        <td><?= number_format($conta['valor'], 2, ',', '.') ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <tr>
                                                    <td colspan="5">Nenhum registro!</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <!-- <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-12" style="text-align: right">
                                    <button type="button" class="btn btn-info">Gerar Relatório</button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-lg-12">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Contas à Pagar em <?= date('m/Y') ?> (Abertas e Vencidas)</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Cód</th>
                                                <th>Status</th>
                                                <th>Descrição</th>
                                                <th>Vencimento</th>
                                                <th>Valor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($contas_a_pagar_do_mes_atual)) : ?>
                                                <?php foreach ($contas_a_pagar_do_mes_atual as $conta) : ?>
                                                    <tr>
                                                        <td><?= $conta['id_conta'] ?></td>
                                                        <td><?= $conta['status'] ?></td>
                                                        <td><?= $conta['nome'] ?></td>
                                                        <td><?= date('d/m/Y', strtotime($conta['data_de_vencimento'])) ?></td>
                                                        <td><?= number_format($conta['valor'], 2, ',', '.') ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <tr>
                                                    <td colspan="5">Nenhum registro!</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        <?php if (!empty($produtos)) : ?>
            $(document).Toasts('create', {
                class: 'bg-default',
                title: 'Produtos do Estoque',
                // subtitle: 'Atenção',
                body: 'Existem produtos no estoque que precisam de reposição. <a href="/relatorios/estoqueMinimo">Acessar Relatório</a>'
            })
        <?php endif; ?>

        <?php if (!empty($caixas)) : ?>
            $(document).Toasts('create', {
                class: 'bg-default',
                title: 'Caixas Abertos',
                // subtitle: 'Atenção',
                body: 'Existem caixas abertos. <a href="/caixas">Ver Caixas</a>'
            })
        <?php endif; ?>

        <?php if (!empty($contas_a_pagar)) : ?>
            // $(document).Toasts('create', {
            //     class: 'bg-default',
            //     title: 'Contas à Pagar',
            //     // subtitle: 'Atenção',
            //     body: 'Existem contas à pagar que necessitam de atenção. <a href="/contasPagar">Ver Contas</a>'
            // })
        <?php endif; ?>

        <?php if (!empty($contas_a_receber)) : ?>
            // $(document).Toasts('create', {
            //     class: 'bg-default',
            //     title: 'Contas à Receber',
            //     // subtitle: 'Atenção',
            //     body: 'Existem contas à receber que necessitam de atenção. <a href="/contasReceber">Ver Contas</a>'
            // })
        <?php endif; ?>
    });

    $(function() {
        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'Receitas',
                'Despesas'
            ],
            datasets: [{
                data: [<?= $receitas['valor'] ?>, <?= $despesas['valor'] ?>],
                backgroundColor: ['#00a65a', '#f56954'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var donutChart = new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })
    })

    $(function() {
        // -------------- ALERTAS ---------------- //
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
            <?php if ($alert == "success_autentication") : ?>
                Toast.fire({
                    type: 'success',
                    title: 'Seja bem vindo <?= $session->get('primeiro_nome') ?>!'
                })
            <?php elseif ($alert == "success_bkp_database") : ?>
                Toast.fire({
                    type: 'success',
                    title: 'Backup de <?= $session->get('nome_fantasia') ?> realizado com sucesso!'
                })
            <?php endif; ?>
        <?php endif; ?>
    });
</script>
