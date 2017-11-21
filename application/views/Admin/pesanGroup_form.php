<?php $this->load->view('templates/admin/header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $button; ?> Data Pesanan</h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Jadwal group</label>
				<input type="text" name="jadwal_group" class="form-control" placeholder="Inputkan Jadwal group" 
				required value="<?php echo $jadwal_group; ?>" readonly>
			</div>
			<div class="form-group">
				<label>Lokasi group</label>
				<input type="text" name="lokasi_group" class="form-control" placeholder="Inputkan Lokasi group" 
				required value="<?php echo $lokasi_group; ?>" readonly>
			</div>			
			<input type="hidden" name="id_pesan" value="<?php echo $id_pesan; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('pesanGroup')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/footer'); ?>