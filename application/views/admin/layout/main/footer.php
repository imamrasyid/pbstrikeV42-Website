</section>
</div>
<footer class="main-footer">
    <strong>Copyright &copy; <a href="<?php echo base_url('home') ?>">Point Blank Strike</a> <?php echo date('Y') ?>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.1
    </div>
</footer>
</div>
<script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/datatables/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () 
    {
        $('#table_id').DataTable();
    } );
</script>
<script src="<?php echo base_url() ?>assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.js"></script>
</body>
</html>