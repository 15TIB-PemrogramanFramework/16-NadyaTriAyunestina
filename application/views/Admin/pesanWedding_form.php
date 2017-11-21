<?php $this->load->view('templates/admin/header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $button; ?> Data Pesanan</h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Jadwal wedding</label>
				<input type="text" name="jadwal_wedding" class="form-control" placeholder="Inputkan Jadwal wedding" 
				required value="<?php echo $jadwal_wedding; ?>" readonly>
			</div>
			<div class="form-group">
				<label>Lokasi wedding</label>
				<input type="text" name="lokasi_wedding" class="form-control" placeholder="Inputkan Lokasi wedding" 
				required value="<?php echo $lokasi_wedding; ?>" readonly>
			</div>			
			<input type="hidden" name="id_pesan" value="<?php echo $id_pesan; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('pesan')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/footer'); ?>