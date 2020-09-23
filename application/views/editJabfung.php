<!-- Page -->
<div class="page">

	<div class="page-header">
		<h1 class="page-title">Edit Data Jabatan Fungsional</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url('admin')?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= base_url('admin/dinas')?>">Data Jabatan Fungsional</a></li>
			<li class="breadcrumb-item active">Edit Data Jabatan Fungsional</li>
		</ol>
	</div>

	<div class="page-content">

		<div class="panel panel-bordered myshadow">
			<div class="panel-heading text-center">
				<h3 class="panel-title">Form Edit Data Jabatan Fungsional</h3>
				<div class="panel-actions">

					<a class="panel-action icon wb-minus" aria-expanded="true" data-toggle="panel-collapse"
						aria-hidden="true"></a>
					<a class="panel-action icon wb-expand" data-toggle="panel-fullscreen" aria-hidden="true"></a>

				</div>
			</div>
			<div class="panel-body">
				<form method="post" action="<?= base_url('admin/editJabfung/')?><?= $jabfung['id_jabfung']?>">
				<div class="row">
						<div class="form-group col-md-6 form-material" data-plugin="formMaterial">
							<label class="text-dark " for="jabfung">Nama Jabatan Fungsional</label>
							<input value="<?= $jabfung['nama_jabfung']?>" type="text" class="form-control" name="nama_jabfung" required />
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-md btn-block bg-green-600 mx-auto"
							style="width:40%;color:white;font-size:16px">
							Edit
						</button>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>
<!-- End Page -->
