<?php $this->load->view('templates/admin/header');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Prawedding</h1>
		</div><?=$this->session->flashdata('pesan')?>	
		<div class="col-md-12 text-right">
		<a href="<?php echo site_url('prawedding/tambah'); ?>" class="btn btn-primary" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-circle"></i> Insert</a>
		</div>	

	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Kode Prawedding</th>
					<th>Paket Prawedding</th>
					<th>Deskripsi Prawedding</th>
					<th>Harga Prawedding</th>
					<th>Gambar Prawedding</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($prawedding as $key => $value) { ?>
				<tr>
					<td><?php echo $value->kode_prawedding; ?></td>
					<td><?php echo $value->paket_prawedding; ?></td>
					<td><?php echo $value->deskripsi_prawedding; ?></td>
					<td><?php echo $value->harga_prawedding; ?></td>
					<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar_prawedding; ?>"></td>
					<td>
						<a href="<?php echo site_url('prawedding/delete/'.$value->kode_prawedding); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('prawedding/update/'.$value->kode_prawedding); ?>"
							class="btn btn-warning">
							<i class="fa fa-pencil-square"></i>
						</a>
					</td>	
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<?php $this->load->view('templates/admin/footer'); ?>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>