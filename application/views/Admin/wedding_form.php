<?php $this->load->view('templates/admin/header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Insert Data Wedding</h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Paket Wedding: </label>
				<input type="text" name="paket_wedding" class="form-control" placeholder="Inputkan Paket Wedding" 
				required value="<?php echo $paket_wedding; ?>">
			</div>
			<div class="form-group">
				<label>Deskripsi Wedding: </label>
				<input type="text" name="deskripsi_wedding" class="form-control" placeholder="Inputkan Deskripsi Wedding" 
				required value="<?php echo $deskripsi_wedding; ?>">
			</div>
			<div class="form-group">
				<label>Harga Wedding: </label>
				<input type="text" name="harga_wedding" class="form-control" placeholder="Inputkan Harga Wedding" 
				required value="<?php echo $harga_wedding; ?>">
			</div>
			<div class="form-group">
				<label>Gambar Wedding: </label>
				<input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar Wedding">
			</div>
			<input type="hidden" name="kode_wedding" value="<?php echo $kode_wedding; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('Wedding')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/footer'); ?>