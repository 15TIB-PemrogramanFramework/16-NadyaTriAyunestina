<?php $this->load->view('templates/admin/header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Insert Data Prawedding</h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Paket Prawedding: </label>
				<input type="text" name="paket_prawedding" class="form-control" placeholder="Inputkan Lokasi Prawedding" 
				required value="<?php echo $paket_prawedding; ?>">
			</div>
			<div class="form-group">
				<label>Deskripsi Prawedding: </label>
				<input type="text" name="deskripsi_prawedding" class="form-control" placeholder="Inputkan Deskripsi Prawedding" 
				required value="<?php echo $deskripsi_prawedding; ?>">
			</div>
			<div class="form-group">
				<label>Harga Prawedding: </label>
				<input type="text" name="harga_prawedding" class="form-control" placeholder="Inputkan Deskripsi Prawedding" 
				required value="<?php echo $harga_prawedding; ?>">
			</div>
			<div class="form-group">
				<label>Gambar Prawedding: </label>
				<input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar Prawedding">
			</div>
			<input type="hidden" name="kode_prawedding" value="<?php echo $kode_prawedding; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/footer'); ?>