<!-- jQuery -->
<script src="{{ asset('theme/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('theme/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('theme/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('theme/vendors/nprogress/nprogress.js') }}"></script>
<!-- Chart.js -->
<script src="{{ asset('theme/vendors/Chart.js/dist/Chart.min.js') }}"></script>
<!-- jQuery Sparklines -->
<script src="{{ asset('theme/vendors/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- gauge.js -->
<script src="{{ asset('theme/vendors/gauge.js/dist/gauge.min.js') }}"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('theme/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('theme/vendors/iCheck/icheck.min.js') }}"></script>
<!-- Skycons -->
<script src="{{ asset('theme/vendors/skycons/skycons.js') }}"></script>
<!-- Flot -->
<script src="{{ asset('theme/vendors/Flot/jquery.flot.js') }}"></script>
<script src="{{ asset('theme/vendors/Flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('theme/vendors/Flot/jquery.flot.time.js') }}"></script>
<script src="{{ asset('theme/vendors/Flot/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('theme/vendors/Flot/jquery.flot.resize.js') }}"></script>
<!-- Flot plugins -->
<script src="{{ asset('theme/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('theme/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset('theme/vendors/flot.curvedlines/curvedLines.js') }}"></script>
<!-- DateJS -->
<script src="{{ asset('theme/vendors/DateJS/build/date.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('theme/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
<script src="{{ asset('theme/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('theme/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('theme/vendors/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('theme/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('theme/build/js/custom.min.js') }}"></script>
<script src="{{ asset('theme/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<!-- Select2 -->
<script src="{{ asset('theme/vendors/select2/dist/js/select2.min.js') }}"></script>

<!-- morris.js -->
<script src="{{ asset('theme/vendors/raphael/raphael.min.js') }}"></script>
<!-- Datatables -->
<script src="{{ asset('theme/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('theme/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('theme/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('theme/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('theme/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('theme/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('theme/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('theme/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('theme/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
<script src="{{ asset('theme/vendors/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('theme/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('theme/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
<!-- PNotify -->

<script src="{{ asset('theme/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<script src="{{ asset('theme/vendors/pnotify/pnotify.custom.min.js') }}"></script>

@if(session('message'))
	<script type="text/javascript">
		$(document).ready(function(){
			var message = {!! json_encode(session('message')) !!};
	    	new PNotify({
	          	title: 'Success!',
	          	text: message,
	          	type: 'success',
	          	styling: 'fontawesome'
	      	});
	    });     		
	</script>
@elseif(session('error'))
<script type="text/javascript">
		$(document).ready(function(){
			var message = {!! json_encode(session('error')) !!};
	    	new PNotify({
	          	title: 'Oops!!',
	          	text: message,
	          	type: 'danger',
	          	styling: 'fontawesome'
	      	});
	    });     		
	</script>
@endif

<script>
	$(document).ready(function() {
		
		$(".datatables").DataTable({
			 dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'Sms delivery report',
                        text:'Export to excel',
                        //Columns to export
                        exportOptions: {
                           columns: [2, 3]
                       }
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'PDF',
                        text: 'Export to PDF'
                        //Columns to export
                        //exportOptions: {
                       //     columns: [0, 1, 2, 3, 4, 5, 6]
                      //  }
                    }
                ]
		});



		
	});
</script>


