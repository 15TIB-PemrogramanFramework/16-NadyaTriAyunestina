<?php $this->load->view('templates/admin/header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Insert Data Group</h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Paket Group: </label>
				<input type="text" name="paket_group" class="form-control" placeholder="Inputkan Paket Group" 
				required value="<?php echo $paket_group; ?>">
			</div>
			<div class="form-group">
				<label>Deskripsi Group: </label>
				<input type="text" name="deskripsi_group" class="form-control" placeholder="Inputkan Deskripsi Group" 
				required value="<?php echo $deskripsi_group; ?>">
			</div>
			<div class="form-group">
				<label>Harga Group: </label>
				<input type="text" name="harga_group" class="form-control" placeholder="Inputkan Harga Group" 
				required value="<?php echo $harga_group; ?>">
			<div class="form-group">
				<label>Gambar Group: </label>
				<input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar Group">
			</div>
			<input type="hidden" name="kode_group" value="<?php echo $kode_group; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('group')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/footer'); ?>