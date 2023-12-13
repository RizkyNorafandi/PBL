
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


<!-- Bootstrap core JavaScript-->
<script src=<?php echo base_url("assets_2/vendor/jquery/jquery.min.js")?>></script>
    <script src=<?php echo base_url("assets_2/vendor/bootstrap/js/bootstrap.bundle.min.js")?>></script>

    <!-- Core plugin JavaScript-->
    <script src=<?php echo base_url("assets_2/vendor/jquery-easing/jquery.easing.min.js")?>></script>

    <!-- Custom scripts for all pages-->
    <script src=<?php echo base_url("assets_2/js/sb-admin-2.min.js")?>></script>

    <!-- Page level plugins -->
    <script src=<?php echo base_url("assets_2/vendor/chart.js/Chart.min.js")?>></script>

    <!-- Page level custom scripts -->
    <script src=<?php echo base_url("assets_2/js/demo/chart-area-demo.js")?>></script>
    <script src=<?php echo base_url("assets_2/js/demo/chart-pie-demo.js")?>></script>

    <!-- Page level tables plugins -->
    <script src=<?php echo base_url("assets_2/vendor/datatables/jquery.dataTables.min.js")?>></script>
    <script src=<?php echo base_url("assets_2/vendor/datatables/dataTables.bootstrap4.min.js")?>></script>

    <!-- jQuery -->
    <script src="<?= base_url('assets_3/tamplate')?>/plugins/jquery/jquery.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('assets_3/tamplate')?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets_3/tamplate')?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets_3/tamplate')?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets_3/tamplate')?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets_3/tamplate')?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets_3/tamplate')?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets_3/tamplate')?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('assets_3/tamplate')?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('assets_3/tamplate')?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('assets_3/tamplate')?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets_3/tamplate')?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets_3/tamplate')?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

    <!-- Page level custom scripts -->
    <script src=<?php echo base_url("assets_2/js/demo/datatables-demo.js")?>></script>

</body>

</html>