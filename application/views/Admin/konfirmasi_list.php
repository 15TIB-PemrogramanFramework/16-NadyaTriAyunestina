<?php $this->load->view('templates/admin/header');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Konfirmasi</h1>
		</div>
	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID Konfirmasi</th>
					<th>ID Pesan</th>
					<th>Nama Pemesan</th>
					<th>Transfer Atas Nama</th>
					<th>Metode Transfer</th>
					<th>Bukti Transfer</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($konfirmasi as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_konfirmasi; ?></td>
					<td><?php echo $value->id_pesan ?></td>
					<td><?php echo $value->nama_member; ?></td>
					<td><?php echo $value->rek_nama; ?></td>
					<td><?php echo $value->met_transfer; ?></td>
					<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->bukti_transfer; ?>"></td>
					<td>
						<a href="<?php echo site_url('konfirmasi/download/'.$value->id_konfirmasi); ?>" class="btn btn-info">Download</a>
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