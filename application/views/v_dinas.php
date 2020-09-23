<div class="page">
    	<div class="page-header">
    		<h1 class="page-title">Data Pegawai Per-Dinas</h1>
    		<ol class="breadcrumb">
    			<li class="breadcrumb-item"><a href="<?= base_url('admin')?>">Dashboard</a></li>
    			<li class="breadcrumb-item active">Data Pegawai</li>
    		</ol>
    	</div>

<div class="row">
	 <div class="col-8">
	 <select name="dinas" onchange="cek_data()">
      <option value="">- Pilih Dinas -</option>
      	<?php foreach ($dinas as $d) : ?>
					<option value="<?= $d['id_dinas']; ?>"><?= $d['nama_dinas']; ?></option>
            <?php endforeach; ?>
    </select>
	</div>
	<div class="col-12">
		<div class="tab-content" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<!-- <h4>Badan Kepegawaian Daerah</h4> -->
				<div class="page-content container-fluid">
    		<div class="row" data-plugin="matchHeight" data-by-row="true">
			<?= $this->session->flashdata('message') ?>
			<div class="panel" style="width: 100%">
    				<header class="panel-heading">
						<h3 class="panel-title">Arsip Data Per Dinas</h3>
						<a href="<?= base_url('admin/tambahPegawai') ?>"><button class="btn btn-primary active"
    							style="margin-left: 2rem">Tambah Pegawai</button></a>
    					<a href="<?= base_url('admin/ekspor_gabungan') ?>"><button class="btn btn-success active"
								style="margin-left: 2rem">Export Excel</button></a>
    				</header>
				<div class="panel-body">
    					<table class="table table-hover dataTable table-striped w-full" id="table1">
    						<thead>
    							<tr>
								<th>No</th>
    								<th>Nama</th>
    								<th>NIP</th>
    								<th>Pangkat</th>
    								<th>Jabatan Fungsional</th>
    								<th>PerMenpan</th>
    								<th>Bagian</th>
    								<th>OPD</th>
    								<th>Jenis Administrasi</th>
    								<th>Perjalanan Berkas</th>
    								<th>Tanggal SK</th>
    								<th>Dinas</th>
    								<th>Aksi</th>
    							</tr>
    						</thead>
    						<tbody>
							<!-- <?php $a = 1; ?>
    							<?php foreach ($data->result_array() as $i) :
									$id = $i['id_pegawai'];
									$nama = $i['nama'];
									$nip = $i['nip'];
									$pangkat = $i['nama_pangkat'];
									$tingkatan = $i['nama_jabfung'];
									$perpres = $i['perpres'];
                                    $bagian = $i['bagian'];
                                    $opd = $i['opd'];
                                    $jenis_adm = $i['jenis_adm'];
                                    $perjalanan_berkas = $i['perjalanan_berkas'];
                                    $tgl_sk = $i['tgl_sk'];
                                    $dinas = $i['nama_dinas'];
									?>

    							<tr>
								<th scope="row"><?= $a; ?></th>
    								<td><?php echo $nama; ?></td>
    								<td><?php echo $nip; ?></td>
    								<td><?php echo $pangkat; ?></td>
    								<td><?php echo $tingkatan; ?></td>
    								<td><?php echo $perpres; ?></td>
    								<td><?php echo $bagian; ?></td>
    								<td><?php echo $opd; ?></td>
    								<td><?php echo $jenis_adm; ?></td>
    								<td><?php echo $perjalanan_berkas; ?></td>
    								<td><?php echo $tgl_sk; ?></td>
									<td><?php echo $dinas; ?></td>
									<td>
									<?php $a++; ?>
    								<?php if( $this->session->userdata('level') === 'admin' ):?>
    							 	
    								<a href="editPg/<?= $id  ?>"
    									class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
    									data-toggle="tooltip" data-original-title="Edit"><i style="color:grey"
    										class="icon wb-edit" aria-hidden="true"></i></a>
    								<span data-target="#removeP<?= $id  ?>" data-toggle="modal">

    									<a href="javascript:void(0)"
    										class=" btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
    										data-toggle="tooltip" data-original-title="Remove"><i style="color:#ff4c52"
    											class="icon wb-trash" aria-hidden="true"></i></a>
    								</span>
    								<?php endif;?>
    								<?php if( $this->session->userdata('level') === 'pegawai' ):?>
    								<a href="lihatP/<?= $id ?>"
    									class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
    									data-toggle="tooltip" data-original-title="Detail"><i style="color:#3e8ef7"
    										class="icon fa-eye" aria-hidden="true"></i></a>

    								<?php endif;?>
    							</td>
    							</tr>
    							<?php endforeach ?> -->
    						</tbody>
    					</table>
					</div>
					</div>
					</div>
									</div>
		</div>
			<div class="tab-pane fade" id="v-pills-profil" role="tabpanel" aria-labelledby="v-pills-profil-tab">
				<h4>Profil</h4>
				<p>hai, Saya Diki.</p>
			</div>
			<div class="tab-pane fade" id="v-pills-kontak" role="tabpanel" aria-labelledby="v-pills-kontak-tab">
				<h4>Kontak</h4>
				<p>Email : malasngoding@gmail.com</p>
			</div>
		</div>
	</div>
</div>
</div>