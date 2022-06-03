<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- dataTables -->

<script src = "datatables.net/dataTables.buttons.min.js"></script>
<script src = "datatables.net/buttons.flash.min.js"></script>
<script src = "datatables.net/jszip.min.js"></script>
<script src = "datatables.net/pdfmake.min.js"></script>
<script src = "datatables.net/vfs_fonts.js"></script>
<script src = "datatables.net/buttons.html5.min.js"></script>
<script src = "datatables.net/buttons.print.min.js"></script>
<script src = "datatables.net/buttons.colVis.min.js"></script>

<script>
  $(function () {
  $('#example1').DataTable({
	  'responsive'	: true,
	  'scrollX'     : true,
		dom: 'lBfrtip',
		                buttons: 
				[
				
					{
						extend:  'colvis',
						title: 'Centers',
						},
					{
						extend: 'copy',
						exportOptions: {
						columns: ':visible'}},
						
					{
						extend: 'csvHtml5',
						exportOptions: {
						columns: ':visible'}},
					{
						extend: 'excelHtml5'  ,
						exportOptions: {
						columns:  ':visible'}},
					{
						extend: 'pdfHtml5' ,
						exportOptions: {
						columns: ':visible'
					}},
					{
						extend: "print",
						exportOptions: {
							columns: ':visible'
							},  
						
						customize: function(win)
						{
	 
							var last = null;
							var current = null;
							var bod = [];
	 
							var css = '@page { size: A4 Landscape; }',
								head = win.document.head || win.document.getElementsByTagName('head')[0],
								style = win.document.createElement('style');
			 
							style.type = 'text/css';
							style.media = 'print';
			 
							if (style.styleSheet)
							{
							  style.styleSheet.cssText = css;
							}
							else
							{
							  style.appendChild(win.document.createTextNode(css));
							}
			 
							head.appendChild(style);
						}
					}
         
                ],
	  
	})
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

