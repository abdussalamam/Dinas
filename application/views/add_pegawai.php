<!-- Page -->
<div class="page">

	<div class="page-header">
		<h1 class="page-title">Tambah Data Pegawai</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url('admin')?>">Dashboard</a></li>
			<li class="breadcrumb-item active">Tambah Data Pegawai</li>
		</ol>
	</div>
 
	<div class="page-content">

		<div class="panel panel-bordered myshadow">
			<div class="panel-heading text-center">
				<h3 class="panel-title">Form Tambah Data Pegawai</h3>
				<div class="panel-actions">

					<a class="panel-action icon wb-minus" aria-expanded="true" data-toggle="panel-collapse"
						aria-hidden="true"></a>
					<a class="panel-action icon wb-expand" data-toggle="panel-fullscreen" aria-hidden="true"></a>

				</div>
			</div>
			<div class="panel-body">
				<form method="post" action="<?= base_url('admin/tambahPegawai')?>">
					<div class="row">
						<div class="form-group col-md-6 form-material" data-plugin="formMaterial">
							<label class="text-dark " for="nama">Nama</label>
							<input type="text" class="form-control" name="nama"/>
						</div>
						<div class="form-group col-md-6 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="nip">NIP</label>
							<input type="number" class="form-control" name="nip"  />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="pangkat">Golongan/Pangkat</label>
							<select name="pangkat" id="pangkat" class="form-control">
                                    <option value="">Pilih Pangkat</option>
                                    <?php foreach ($pangkat as $p) : ?>
                                        <option value="<?= $p['id_pangkat']; ?>"><?= $p['nama_pangkat']; ?></option>
                                    <?php endforeach; ?>
                                </select>
						</div>
						<div class="form-group col-md-4 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="fungsional">Jabatan Fungsional</label>
							<select name="jabfung" id="jabfung" class="form-control">
                                    <option value="">Pilih Jabatan Fungsional</option>
                                    <?php foreach ($jabfung as $q) : ?>
                                        <option value="<?= $q['id_jabfung']; ?>"><?= $q['nama_jabfung']; ?></option>
                                    <?php endforeach; ?>
                                </select>
						</div>
					
						<div class="form-group col-md-4 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="perpres">PerMenpan</label>
							<input type="text" class="form-control" name="perpres" required />
						</div>
					</div>
					<div class="row">	
						<div class="form-group col-md-4 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="bagian">Bagian</label>
							<input type="text" class="form-control" name="bagian" required />
						</div>
						<div class="form-group col-md-4 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="opd">OPD</label>
							<input type="text" class="form-control" name="opd" required />
						</div>
					
						<div class="form-group col-md-4 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="jenis_adm">Jenis ADM</label>
							<input type="text" class="form-control" name="jenis_adm" required />
						</class>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="bagperjalanan_berkasian">Perjalanan Berkas</label>
							<input type="text" class="form-control" name="perjalanan_berkas"  />
						</div>
						<div class="form-group col-md-6 form-material" data-plugin="formMaterial">
							<label class="text-dark" for="tgl_sk">Tanggal SK</label>
							<input type="date" class="form-control" name="tgl_sk"  />
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12 form-material text-center" data-plugin="formMaterial">
							<label class="text-dark" for="dinas">Dinas</label>							
							<!--<input type="text" class="form-control" name="dinas" required />-->
							<select name="dinas" id="dinas" class="form-control">
                                    <option value="">Pilih Dinas</option>
                                    <?php foreach ($dinas as $d) : ?>
                                        <option value="<?= $d['id_dinas']; ?>"><?= $d['nama_dinas']; ?></option>
                                    <?php endforeach; ?>
                                </select>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-md btn-block bg-green-600 mx-auto"
							style="width:40%;color:white;font-size:16px">
							Tambah
						</button>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>

<!-- End Page -->
