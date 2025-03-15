<script src="{{ asset('asset/js/jquery.min.js') }}"></script>

<script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('asset/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('asset/plugins/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('asset/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('asset/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('asset/plugins/peity/jquery.peity.min.js') }}"></script>

<script src="{{ asset('asset/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('asset/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script>
  $(document).ready(function () {
    $('#example').DataTable({
      lengthChange: true,
      buttons: ['copy', 'excel', 'pdf', 'print']
    }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
      lengthChange: false,
      buttons: ['copy', 'excel', 'pdf', 'print']
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
  });
</script>

<script src="{{ asset('asset/plugins/fancy-file-uploader/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('asset/plugins/fancy-file-uploader/jquery.fileupload.js') }}"></script>
<script src="{{ asset('asset/plugins/fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('asset/plugins/fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>
<script src="{{ asset('asset/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<script>
  $('#fancy-file-upload').FancyFileUpload({
    params: {
      action: 'fileuploader'
    },
    maxfilesize: 10000000000000
  });

  // Initialize Image Uploadify
  $(document).ready(function () {
    $('#image-uploadify').imageuploadify();
  });
</script>


<script src="{{ asset('asset/js/main.js') }}"></script>
<script src="{{ asset('asset/js/dashboard1.js') }}"></script>
<script>
  $(".data-attributes span").peity("donut");
  new PerfectScrollbar(".user-list");
</script>

<script src="{{ asset('asset/js/pace.min.js') }}"></script>






<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('asset/plugins/select2/js/select2-custom.js') }}"></script>
{{-- <script src="{{ asset('asset/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
<script src="{{ asset('asset/plugins/bs-stepper/js/main.js') }}"></script> --}}
