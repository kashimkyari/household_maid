<footer class="main-footer" style="text-align: center;">
    <strong>&copy; HOUSEHOLD MAID SYSTEM <?php echo date('Y'); ?>.</strong> Designed by
    <a style="color: white;">Aisha Abba</a>
</footer>    </div><!-- ./wrapper -->

<script src="../assets/modal-effect/js/classie.js"></script>
<script src="../assets/modal-effect/js/modalEffects.js"></script>
<!-- jQuery 2.1.4 -->
<script src="../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="../assets/swal2/sweetalert2.min.js"></script>
<script src="../js/validation.js"></script>
<script src="../js/user_applicant.js"></script>
<script src="../js/form-validator.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    /* $.widget.bridge('uibutton', $.ui.button);*/
</script>
<!-- Bootstrap 3.3.5 -->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>

<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../assets/plugins/datepicker/bootstrap-datepicker.js"></script>


<script src="../assets/plugins/ckeditor/ckeditor.js"></script>


<!-- Slimscroll -->
<!--  <script src="http://localhost/dash/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script> -->
<!-- FastClick -->
<!--  <script src="http://localhost/dash/assets/plugins/fastclick/fastclick.min.js"></script> -->
<!-- AdminLTE App -->
<script src="../assets/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="http://localhost/dash/assets/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!--  <script src="http://localhost/dash/assets/js/demo.js"></script> -->

<!-- loading client side files for elibrary -->


<!--   <script type="text/javascript" src="http://localhost/chats/arrowchat/external.php?type=djs" charset="utf-8"></script>
<script type="text/javascript" src="http://localhost/chats/arrowchat/external.php?type=js" charset="utf-8"></script>
   -->
<script src="../assets/elibrary/js/system.js"> </script>
<script src="../assets/elibrary/plugins/dataTables/jquery.dataTables.js"></script>


<script src="../assets/elibrary/plugins/dataTables/jquery.dataTables.js"></script>
<script src="../assets/elibrary/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="../assets/elibrary/fileinput/js/fileinput.js" type="text/javascript"></script>
<script src="../assets/elibrary/modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="../assets/elibrary/modal/js/bootstrap-modal.js" type="text/javascript"></script>
<script>
    $("#userFileUploader").fileinput({
        dropZoneEnabled: true,
        uploadAsync: true,
        maxFileSize: 9999999999999,
        /*
         allowedFileExtensions: ["jpg", "gif", "png"],
         allowedFileTypes: ["image"],
         allowedPreviewTypes: ["image"],*/
        previewSettings: {
            image: {width: "240px", height: "auto"},
            other: {width: "240px", height: "auto"},
        },
        showRemove: true,
        showUpload: true,
        maxFileCount: 10,
        uploadUrl: "http://localhost/dash/elibrary/portal/su/",
        msgFilesTooMany: "Number of files selected for upload ({n}) exceeds maximum allowed limit of {m}. Please retry your upload!",
        msgSizeTooLarge: "File {name} ({size} KB) exceeds maximum allowed upload size of {maxSize} KB. Please retry your upload!",
        msgInvalidFileExtension: "Invalid extension for file {name}. Only {extensions} files are supported.",
        msgFileNotFound: "File {name} not found!",
        msgFilePreviewError: "An error occurred while reading the file {name}.",
        msgInvalidFileType: "Invalid type for file {name}. Only {types} files are supported.",
        msgInvalidFileExtension: "Invalid extension for file {name}. Only {extensions} files are supported.",
        msgValidationError:"<span class='text-danger'><i class='glyphicon glyphicon-exclamation-sign'></i> File Upload Error</span>",
        msgSelected: "{n} files selected.",
        /*browseLabel: "Chọn ảnh",
         initialCaption: "Chọn tối đa 10 ảnh",*/
    });
</script>

<script>
    $(document).ready(function () {
        $('.dataTable .dataTables table').dataTable();


        $('#myMiscTab a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })

    <!--

                       $('.datepicker').datepicker({
                        format: 'yyyy-mm-dd'});

                        $('.dataTables, .dataTable').dataTable();
                     });
                     -->


</script>







<script type="text/javascript">

    $.fn.modal.defaults.spinner = $.fn.modalmanager.defaults.spinner =
        '<div class="loading-spinner" style="width: 200px; margin-left: -100px;">' +
        '<div class="progress progress-striped active">' +
        '<div class="progress-bar" style="width: 100%;"></div>' +
        '</div>' +
        '</div>';
</script>


<script type="text/javascript">

    $(function(){

        $.fn.modal.defaults.spinner = $.fn.modalmanager.defaults.spinner =
            '<div class="loading-spinner" style="width: 200px; margin-left: -100px;">' +
            '<div class="progress progress-striped active">' +
            '<div class="progress-bar" style="width: 100%;"></div>' +
            '</div>' +
            '</div>';

        $.fn.modalmanager.defaults.resize = true;

        $('[data-source]').each(function(){
            var $this = $(this),
                $source = $($this.data('source'));

            var text = [];
            $source.each(function(){
                var $s = $(this);
                if ($s.attr('type') == 'text/javascript'){
                    text.push($s.html().replace(/(\n)*/, ''));
                } else {
                    text.push($s.clone().wrap('<div>').parent().html());
                }
            });

            $this.text(text.join('\n\n').replace(/\t/g, '    '));
        });


    });
</script>

<script src="../assets/elibrary/js/jquery.li-scroller.1.0.js" type="text/javascript"></script>


<script type="text/javascript">
    $(document).ready(function(){
        CKEDITOR.replace('elibrary_editor');

    });

</script>



</body>
</html>