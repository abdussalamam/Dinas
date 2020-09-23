<!-- Page -->
<div class="page">

	<div class="page-header">
		<h1 class="page-title">Edit Data Pegawai</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url('admin')?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= base_url('admin/dinas')?>">Data Pegawai Per-Dinas</a></li>
			<li class="breadcrumb-item active">Edit Data Pegawai</li>
		</ol>
	</div>

	<div class="page-content">

		<div class="panel panel-bordered myshadow">
			<div class="panel-heading text-center">
				<h3 class="panel-title">Form Edit Data Pegawai</h3>
				<div class="panel-actions">

					<a class="panel-action icon wb-minus" aria-expanded="true" data-toggle="panel-collapse"
						aria-hidden="true"></a>
					<a class="panel-action icon wb-expand" data-toggle="panel-fullscreen" aria-hidden="true"></a>

				</div>
			</div>
		
			<div class="panel-body" text-align="center">
				<form method="post" action="<?= base_url('admin/editPg/')?><?= $pegawai['id_pegawai']?>">
				<div class="row">
						<div class="form-group col-md-6 form-material" data-plugin="formMaterial">
							<label class="text-dark " for="nama">Nama</label>
							<input value="<?= $pegawai['nama']?>" type="text" class="form-control" name="nama" />
						</div>
						<div class="form-group col-md-6 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="nip">NIP</label>
							<input value="<?= $pegawai['nip']?>" type="number" class="form-control" name="nip" />
						</div>
				</div>
				<div class="row">
						<div class="form-group col-md-4 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="pangkat">Pangkat</label>
							<select name="pangkat" id="pangkat" class="form-control">
									<option value="">Pilih Pangkat</option>
									<?php foreach ($pangkat as $p) : ?>
                                        <?php if ($p['nama_pangkat'] == $pegawai['nama_pangkat']) : ?>
                                            <option value="<?= $p['id_pangkat']; ?>" selected><?= $p['nama_pangkat']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $p['id_pangkat']; ?>"><?= $p['nama_pangkat']; ?></option>
                                        <?php endif; ?>
									<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group col-md-4 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="jabfung">Jabatan Fungsional</label>
							<select name="jabfung" id="jabfung" class="form-control">
									<option value="">Pilih Jabatan Fungsional</option>
									<?php foreach ($jabfung as $j) : ?>
                                        <?php if ($j['nama_jabfung'] == $pegawai['nama_jabfung']) : ?>
                                            <option value="<?= $j['id_jabfung']; ?>" selected><?= $j['nama_jabfung']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $j['id_jabfung']; ?>"><?= $j['nama_jabfung']; ?></option>
                                        <?php endif; ?>
									<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group col-md-4 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="perpres">PerMenpan</label>
							<input value="<?= $pegawai['perpres']?>" type="text" class="form-control" name="perpres" required />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="bagian">Bagian</label>
							<input value="<?= $pegawai['bagian']?>" type="text" class="form-control" name="bagian" required />
						</div>
						<div class="form-group col-md-4 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="opd">OPD</label>
							<input value="<?= $pegawai['opd']?>" type="text" class="form-control" name="opd" required />
						</div>
						<div class="form-group col-md-4 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="jenis_adm">Jenis ADM</label>
							<input value="<?= $pegawai['jenis_adm']?>" type="text" class="form-control" name="jenis_adm"/>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="bagperjalanan_berkasian">Perjalanan Berkas</label>
							<input value="<?= $pegawai['perjalanan_berkas']?>" type="text" class="form-control" name="perjalanan_berkas" />
						</div>
						<div class="form-group col-md-6 form-material">
							<label class="text-dark" for="tgl_sk">Tanggal SK</label>
							<input value="<?= $pegawai['tgl_sk']?>" type="date" class="form-control" name="tgl_sk" />
						</div>
					
						</div>
						<div class="form-group col-md-12 form-material text-center" data-plugin="formMaterial" >
							<label class="text-dark" for="dinas">Dinas</label>
							<select name="dinas" id="dinas" class="form-control">
                                    <option value="">Pilih Dinas</option>
                                    <?php foreach ($dinas as $d) : ?>
                                        <?php if ($d['nama_dinas'] == $pegawai['nama_dinas']) : ?>
                                            <option value="<?= $d['id_dinas']; ?>" selected><?= $d['nama_dinas']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $d['id_dinas']; ?>"><?= $d['nama_dinas']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
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
<!-- End Page -->
