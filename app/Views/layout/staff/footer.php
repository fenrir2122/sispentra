
<footer>
                <div class="pull-right">
                    Solo Tehnik
                </div>
                <div class="clearfix"></div>
            </footer>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('asset/gentelella-master/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- <script src="../vendors/jquery/dist/jquery.min.js"></script> -->
    <!-- Bootstrap -->
    <script src="<?php echo base_url('asset/gentelella-master/vendors/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <!-- <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- FastClick -->
    <script src="<?php echo base_url('asset/gentelella-master/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- <script src="../vendors/fastclick/lib/fastclick.js"></script> -->
    <!-- NProgress -->
    <script src="<?php echo base_url('asset/gentelella-master/vendors/nprogress/nprogress.js'); ?>"></script>
    <!-- <script src="../vendors/nprogress/nprogress.js"></script> -->
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('asset/gentelella-master/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js'); ?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-buttons/js/dataTables.buttons.min.js');?>"></script>
    <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-buttons/js/buttons.flash.min.js');?>"></script>
    <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-buttons/js/buttons.html5.min.js');?>"></script>
    <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-buttons/js/buttons.print.min.js');?>"></script>
    <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js');?>"></script>
    <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js');?>"></script>
    <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-responsive/js/dataTables.responsive.min.js');?>"></script>
    <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js');?>"></script>
    <script src="<?php echo base_url('asset/gentelella-master/vendors/datatables.net-scroller/js/dataTables.scroller.min.js');?>"></script>
    <script src="<?php echo base_url('asset/gentelella-master/vendors/jszip/dist/jszip.min.js');?>"></script>
    <script src="<?php echo base_url('asset/gentelella-master/vendors/pdfmake/build/pdfmake.min.js');?>"></script>
    <script src="<?php echo base_url('asset/gentelella-master/vendors/pdfmake/build/vfs_fonts.js');?>"></script>
    <!-- Chart.js -->
    
    <script src="<?php echo base_url('asset/gentelella-master/vendors/Chart.js/dist/Chart.min.js');?>"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url('asset/gentelella-master/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js');?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('asset/gentelella-master/build/js/custom.js'); ?>"></script>
    <!-- <script src="../build/js/custom.min.js"></script> -->
    
    <!-- Initialize datetimepicker -->
<script  type="text/javascript">
   $(function () {
                $('#myDatepicker').datetimepicker();
            });
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
