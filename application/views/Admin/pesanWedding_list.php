<?php $this->load->view('templates/admin/header');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Pesanan</h1>
		</div><?=$this->session->flashdata('pesan')?>	
	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID Pesan</th>
					<th>Nama Member</th>
					<th>Paket wedding</th>
					<th>Harga wedding</th>
					<th>Jadwal wedding</th>
					<th>Lokasi wedding</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pesan as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_pesan; ?></td>
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->paket_wedding; ?></td>
					<td><?php echo $value->harga_wedding; ?></td>
					<td><?php echo $value->jadwal_wedding; ?></td>
					<td><?php echo $value->lokasi_wedding; ?></td>
					<td>
						<a href="<?php echo site_url('pesanwedding/delete/'.$value->id_pesan); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('pesanwedding/update/'.$value->id_pesan); ?>"
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