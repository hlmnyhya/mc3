	<!--   Core JS Files   -->
<script src="<?= site_url('assets2/js/core/jquery.3.2.1.min.js') ?>"></script>
<script src="<?= site_url('assets2/js/core/popper.min.js') ?>"></script>
<script src="<?= site_url('assets2/js/core/bootstrap.min.js') ?>"></script>

<!-- jQuery UI -->
<script src="<?= site_url('assets2/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>"></script>
<script src="<?= site_url('assets2/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') ?>"></script>

<!-- jQuery Scrollbar -->
<script src="<?= site_url('assets2/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') ?>"></script>

<!-- Chart JS -->
<script src="<?= site_url('assets2/js/plugin/chart.js/chart.min.js') ?>"></script>

<!-- jQuery Sparkline -->
<script src="<?= site_url('assets2/js/plugin/jquery.sparkline/jquery.sparkline.min.js') ?>"></script>

<!-- Chart Circle -->
<script src="<?= site_url('assets2/js/plugin/chart-circle/circles.min.js') ?>"></script>

<!-- Datatables -->
<script src="<?= site_url('assets2/js/plugin/datatables/datatables.min.js') ?>"></script>

<!-- Bootstrap Notify -->
<script src="<?= site_url('assets2/js/plugin/bootstrap-notify/bootstrap-notify.min.js') ?>"></script>

<!-- jQuery Vector Maps -->
<script src="<?= site_url('assets2/js/plugin/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?= site_url('assets2/js/plugin/jqvmap/maps/jquery.vmap.world.js') ?>"></script>

<!-- Sweet Alert -->
<script src="<?= site_url('assets2/js/plugin/sweetalert/sweetalert.min.js') ?>"></script>

<!-- Atlantis JS -->
<script src="<?= site_url('assets2/js/atlantis.min.js') ?>"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?= site_url('assets2/js/setting-demo.js') ?>"></script>
<script src="<?= site_url('assets2/js/demo.js') ?>"></script>

<!-- datatable produk -->

<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>