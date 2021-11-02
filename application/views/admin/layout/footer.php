<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

<!--Start footer-->
<footer class="footer">
    <div class="container">
        <div class="text-center">
            Copyright ©<script type="text/javascript">
                document.write(new Date().getFullYear());
            </script>
        </div>
    </div>
</footer>
<!--End footer-->

</div><!--End wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url()?>ext/assets/js/jquery.min.js"></script>
<script src="<?= base_url()?>ext/assets/js/popper.min.js"></script>
<script src="<?= base_url()?>ext/assets/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="<?= base_url()?>ext/assets/plugins/simplebar/js/simplebar.js"></script>
<!-- waves effect js -->
<script src="<?= base_url()?>ext/assets/js/waves.js"></script>
<!-- sidebar-menu js -->
<script src="<?= base_url()?>ext/assets/js/sidebar-menu.js"></script>
<!-- Custom scripts -->
<script src="<?= base_url()?>ext/assets/js/app-script.js"></script>

<!-- Vector map JavaScript -->
<script src=<?= base_url()?>ext/"assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?= base_url()?>ext/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Chart js -->
<script src="<?= base_url()?>ext/assets/plugins/Chart.js/Chart.min.js"></script>
<!-- Index js -->
<script src="<?= base_url()?>ext/assets/js/index.js"></script>
<script src="<?= base_url()?>ext/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>

<!--Select Plugins Js-->
<script src="<?= base_url()?>ext/assets/plugins/select2/js/select2.min.js"></script>
<script>
    $('#summernoteEditor').summernote({
        height: 400,
        tabsize: 2
    });
    $('#summernoteEditor2').summernote({
        height: 200,
        tabsize: 4
    });
    $('#summernoteEditor3').summernote({
        height: 100,
        tabsize: 4
    });
</script>
<!--Data Tables js-->
<script src="<?= base_url()?>ext/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>ext/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>ext/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>ext/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url()?>ext/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
<script src="<?= base_url()?>ext/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
<script src="<?= base_url()?>ext/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
<script src="<?= base_url()?>ext/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
<script src="<?= base_url()?>ext/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
<script src="<?= base_url()?>ext/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

<script>
    $(document).ready(function() {
        //Default data table
       // $('#blog_manager').DataTable();


        var table = $('#blog_manager').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
        } );

        table.buttons().container()
            .appendTo( '#example_wrapper .col-md-6:eq(0)' );

    } );

</script>

</body>



<!-- Mirrored from relexotech.com/demo/legendadmin/white-version/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 May 2019 20:21:22 GMT -->
</html>
