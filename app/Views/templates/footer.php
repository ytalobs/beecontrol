<!-- Main Footer -->
<footer id="footer" class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Desenvolvido por <a href="http://beepixel.com.br/">BeePixel</a>
    </div>
    <!-- Default to the left -->
    <?php $session = session() ?>
    <strong><?= $session->get('nome_fantasia') ?> &copy; <?= date('Y') ?> </strong> - Todos os direitos reservados.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- Bootstrap 4 -->
<script src="<?= base_url('theme/plugins/bootstrap/js/bootstrap.bundle.js') ?>"></script>
<!-- Select2 -->
<script src="<?= base_url('theme/plugins/select2/js/select2.full.js') ?>"></script>
<!-- DataTables -->
<script src="<?= base_url('theme/plugins/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?= base_url('theme/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('theme/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('theme/dist/js/adminlte.js') ?>"></script>
<script>
    $(function() {
        // DataTables
        $("#example1").DataTable();
        $("#example1-2").DataTable();
        $("#example1-3").DataTable();
        $("#example1-4").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });

        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

    });

    function confirmaAcaoExcluir(msg, rota) {
        if (confirm(msg)) {
            window.location.href = rota;
        }
    }

    function trocaVirguraPorPonto(id) {
        var valor = document.getElementById(id).value;
        document.getElementById(id).value = valor.replace(',', '.')
    }

    document.getElementById('<?= $links['menu'] ?>').className += " menu-open";
    document.getElementById('<?= $links['item'] ?>').className += " active";
    <?php if (isset($links['subItem'])) : ?>
        document.getElementById('<?= $links['subItem'] ?>').className += " active";
    <?php endif; ?>
</script>
</body>

</html>
