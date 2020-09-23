<!-- Page -->
<div class="page">

	<div class="page-header">
		<h1 class="page-title">Edit Kebutuhan Pegawai</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url('admin')?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= base_url('admin/v_kebutuhan')?>">Data Kebutuhan Pegawai</a></li>
			<li class="breadcrumb-item active">Edit Kebutuhan Data Pegawai</li>
		</ol>
	</div>

	<div class="page-content">

		<div class="panel panel-bordered myshadow">
			<div class="panel-heading text-center">
				<h3 class="panel-title">Form Edit Data Kebutuhan Pegawai</h3>
				<div class="panel-actions">

					<a class="panel-action icon wb-minus" aria-expanded="true" data-toggle="panel-collapse"
						aria-hidden="true"></a>
					<a class="panel-action icon wb-expand" data-toggle="panel-fullscreen" aria-hidden="true"></a>

				</div>
			</div>
			<div class="panel-body">
				<form method="post" action="<?= base_url('admin/editKpgw/')?><?= $dns_kominfo['id_kominfo']?>">
				<div class="row">
				<div class="form-group col-md-4 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="pangkat">Pangkat</label>
							<select name="pangkat" id="pangkat" class="form-control">
									<option value="">Pilih Pangkat</option>
									<?php foreach ($pangkat as $p) : ?>
                                        <?php if ($p['nama_pangkat'] == $dns_kominfo['nama_pangkat']) : ?>
                                            <option value="<?= $p['id_pangkat']; ?>" selected><?= $p['nama_pangkat']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $p['id_pangkat']; ?>"><?= $p['nama_pangkat']; ?></option>
                                        <?php endif; ?>
									<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group col-md-6 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="kebutuhan">Kebutuhan Pegawai</label>
							<input value="<?= $dns_kominfo['kebutuhan']?>" type="number" class="form-control" name="kebutuhan" required />
						</div>
						<div class="form-group col-md-6 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="keterangan">Keterangan</label>
							<input value="<?= $dns_kominfo['keterangan']?>" type="text" class="form-control" name="keterangan" required />
						</div>
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
