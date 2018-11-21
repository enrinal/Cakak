	<?php $this->load->view('templates/header') ?>
	<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>No</label>
		<input type="text" placeholder="Masukkan No" value="<?php echo $no; ?>" class="form-control" name="no">
	</div>
	

	<div class="form-group">
		<label>Destination</label>
		<input type="text" placeholder="Masukkan Destination" value="<?php echo $destination; ?>" class="form-control" name="destination">
	</div>
	<div class="form-group">
		<label>Origin</label>
		<input type="text" placeholder="Masukkan Origin" value="<?php echo $origin; ?>" class="form-control" name="origin">
	</div>
	<div class="form-group">
		<label>WayPoint 0</label>
		<input type="text" placeholder="Masukkan WayPoint" value="<?php echo $waypoint0; ?>" class="form-control" name="waypoint0">
	</div>
	<div class="form-group">
		<label>WayPoint 1</label>
		<input type="text" placeholder="Masukkan WayPoint" value="<?php echo $waypoint1; ?>" class="form-control" name="waypoint1">
	</div>
	<div class="form-group">
		<label>WayPoint 2</label>
		<input type="text" placeholder="Masukkan WayPoint" value="<?php echo $waypoint2; ?>" class="form-control" name="waypoint2">
	</div>
	<div class="form-group">
		<label>WayPoint 3</label>
		<input type="text" placeholder="Masukkan WayPoint" value="<?php echo $waypoint3; ?>" class="form-control" name="waypoint3">
	</div>
	

	<!-- <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>"> -->
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>

	<a href="<?php echo site_url('Rute')?>" class="btn btn-default">Cancel</a>

	</form>

	<?php $this->load->view('templates/footer') ?>
