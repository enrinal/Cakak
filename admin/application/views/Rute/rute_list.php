<?php
$this->load->view('templates/header');
$status=$this->session->userdata('status');
?>
<div class="row">
	<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
	<?php echo anchor(site_url("Rute/tambah"),'<i class="fa fa-plus"></i> Tambah Data','class= "btn btn-primary"'); ?>
</div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
	<tr>
		<th>No</th>
		<th>Origin</th>
		<th>Destination</th>
		<th>Way Point 0</th>
		<th>Way Point 1</th>
		<th>Way Point 2</th>
		<th>Way Point 3</th>
		<th>Aksi</th>

	</tr>
	</thead>
	<tbody>
	<?php foreach ($rute as $key => $value) {?>

		<tr>
			<td><?php echo $value->no; ?></td>
			<td><?php echo $value->origin; ?></td>
			<td><?php echo $value->destination; ?></td>
			<td><?php echo $value->waypoint0; ?></td>
			<td><?php echo $value->waypoint1; ?></td>
			<td><?php echo $value->waypoint2; ?></td>
			<td><?php echo $value->waypoint3; ?></td>
			

			<td>
			<?php echo anchor(site_url('Rute/edit/'.$value->no),
			'<i class="fa fa-pencil"></i>',
			'class="btn btn-warning"');
			?>

				<?php echo anchor(site_url('Rute/delete/'.$value->no),
				'<i class="fa fa-trash"></i>',
				'class="btn btn-danger"'); ?>
</td>

		</tr>
		<?php } ?>

	</tbody>

</table>
</div>
<?php
$this->load->view('templates/footer');

?>

<script type="text/javascript">
	$(document).ready(function() {
	$('#example').DataTable();
	});
</script>
