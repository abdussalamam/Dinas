<!-- Page -->
<div class="page">

	<div class="page-header">
		<h1 class="page-title">Detail Data Pegawai</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url('admin')?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= base_url('admin/dinas')?>">Data Pegawai Per-Dinas</a></li>
			<li class="breadcrumb-item active">Detail Data Pegawai</li>
		</ol>
	</div>

	<div class="page-content">
	<?= $this->session->flashdata('message') ?>

		<div class="panel panel-bordered myshadow mx-auto" style="width:60%">
			<div class="panel-heading text-center">
				<h3 class="panel-title">Detail Data Pegawai</h3>
				<div class="panel-actions">

					<a class="panel-action icon wb-minus" aria-expanded="true" data-toggle="panel-collapse"
						aria-hidden="true"></a>
					<a class="panel-action icon wb-expand" data-toggle="panel-fullscreen" aria-hidden="true"></a>

				</div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-4">
						<h4>Nama</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= $pegawai['nama']?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>NIP</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= $pegawai['nip']?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>Pangkat</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= $pegawai['pangkat']?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>Fungsional</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= $pegawai['fungsional']?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>Tingkatan</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= $pegawai['tingkatan']?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>Perpres</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= $pegawai['perpres']?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>Tunjangan Pres</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= "Rp " . number_format($pegawai['tunjangan_pres'],2,',','.')?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>TPP</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= "Rp " . number_format($pegawai['tpp'],2,',','.')?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>Grade</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= $pegawai['grade']?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>bagian</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= $pegawai['bagian']?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>OPD</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= $pegawai['opd']?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>Jenis ADM</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= $pegawai['jenis_adm']?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>Perjalanan Berkas</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= $pegawai['perjalanan_berkas']?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>Tanggal SK</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= date('d F Y', strtotime($pegawai['tgl_sk']))?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>No PAK</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= $pegawai['no_pak']?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>Tanggal PAK</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= date('d F Y', strtotime($pegawai['tgl_pak']))?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>TMT</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= $pegawai['tmt']?></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<h4>Dinas</h4>
					</div>
					<div class="col-lg-1">
						<p><b>:</b></p>
					</div>
					<div class="col-lg-7">
						<h4><?= $pegawai['dinas']?></h4>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- End Page -->
