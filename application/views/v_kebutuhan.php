<div class="page">
    	<div class="page-header">
    		<h1 class="page-title">Data Kebutuhan Pegawai Per-Dinas</h1>
    		<ol class="breadcrumb">
    			<li class="breadcrumb-item"><a href="<?= base_url('admin')?>">Dashboard</a></li>
    			<li class="breadcrumb-item active">Data Kebutuhan Pegawai</li>
    		</ol>
    	</div>

<div class="row">
	<div class="col-2">
		<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Dinas Kominfo</a>
			<a class="nav-link" id="v-pills-profil-tab" data-toggle="pill" href="#v-pills-profil" role="tab" aria-controls="v-pills-profil" aria-selected="false">Dinas Perikanan</a>
			<a class="nav-link" id="v-pills-kontak-tab" data-toggle="pill" href="#v-pills-kontak" role="tab" aria-controls="v-pills-kontak" aria-selected="false">Dinas Pendidikan</a>
		</div>
	</div>
	<div class="col-10">
		<div class="tab-content" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<h4>Dinas Kominfo</h4>
			<div class="page-content container-fluid">
    		<div class="row" data-plugin="matchHeight" data-by-row="true">
			<?= $this->session->flashdata('message') ?>

    			<div class="panel" style="width: 100%">
    				<header class="panel-heading">
    					<h3 class="panel-title">Kebutuhan Pegawai</h3>
						<?php if( $this->session->userdata('level') === 'admin' ):?>
    			<a href="<?= base_url('admin/v_import') ?>"><button class="btn btn-primary active"
    					style="margin-left: 1rem">Import Excel</button></a>
    			<?php endif;?>
    					<a href="<?= base_url('admin/ekspor_kebutuhan_kominfo') ?>"><button class="btn btn-primary active"
    							style="margin-left: 2rem">Export Excel</button></a>
    				</header>
 
    				<div class="panel-body">
					<div class="row">
			<!-- First Row -->
			<!-- <div class="col-xl-3 col-md-6 info-panel">
				<div class="card card-shadow">
					<div class="card-block bg-white p-20">
						<button type="button" class="btn btn-floating btn-sm btn-success">
							<i class="icon fa-user"></i>
						</button>
						<span class="ml-15 font-size-20 font-weight-400">Golongan I</span>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">A = <?= $pngktKominfoIa ?></span>
						</div>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">B = <?= $pngktKominfoIb ?></span>
						</div>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">C = <?= $pngktKominfoIc ?></span>
						</div>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">D = <?= $pngktKominfoId ?></span>
						</div>
					</div>
				</div>
			</div> -->
		
			<!-- <div class="col-xl-3 col-md-6 info-panel">
				<div class="card card-shadow">
					<div class="card-block bg-white p-20">
						<button type="button" class="btn btn-floating btn-sm btn-success">
							<i class="icon fa-user"></i>
						</button>
						<span class="ml-15 font-size-20 font-weight-400">Golongan II</span>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">A = <?= $pngktKominfoIIa ?></span>
						</div>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">B = <?= $pngktKominfoIIb ?></span>
						</div>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">C = <?= $pngktKominfoIIc ?></span>
						</div>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">D = <?= $pngktKominfoIId ?></span>
						</div>
					</div>
				</div>
			</div> -->
		
			<!-- <div class="col-xl-3 col-md-6 info-panel">
				<div class="card card-shadow">
					<div class="card-block bg-white p-20">
						<button type="button" class="btn btn-floating btn-sm btn-success">
							<i class="icon fa-user"></i>
						</button>
						<span class="ml-15 font-size-20 font-weight-400">Golongan III</span>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">A = <?= $pngktKominfoIIIa ?></span>
						</div>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">B = <?= $pngktKominfoIIIb ?></span>
						</div>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">C = <?= $pngktKominfoIIIc ?></span>
						</div>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">D = <?= $pngktKominfoIIId ?></span>
						</div>
					</div>
				</div>
			</div>
		 -->
			<!-- <div class="col-xl-3 col-md-6 info-panel">
				<div class="card card-shadow">
					<div class="card-block bg-white p-20">
						<button type="button" class="btn btn-floating btn-sm btn-success">
							<i class="icon fa-user"></i>
						</button>
						<span class="ml-15 font-size-20 font-weight-400">Golongan IV</span>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">A = <?= $pngktKominfoIVa ?></span>
						</div>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">B = <?= $pngktKominfoIVb ?></span>
						</div>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">C = <?= $pngktKominfoIVc ?></span>
						</div>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">D = <?= $pngktKominfoIVd ?></span>
						</div>
						<div class="content-text text-center mb-0">
							<span class="font-size-20 font-weight-100">E = <?= $pngktKominfoIVe ?></span>
						</div>
					</div>
				</div>
			</div> -->
		
		</div>
    					<table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
    						<thead>
    							<tr>
									<th>Golongan / Pangkat</th>
									<th>Pegawai Tersedia</th>
    								<th>Kebutuhan Pegawai</th>
    								<th>Keterangan</th>
    								<th>Aksi</th>
    							</tr>
    						</thead>
    						<tbody>

    							<?php foreach ($data->result_array() as $i) :
									$id_kominfo = $i['id_kominfo'];
									$pangkat = $i['nama_pangkat'];
									// $tersedia = $i['tersedia'];
									$kebutuhan = $i['kebutuhan'];
									$keterangan = $i['keterangan'];
									?>

    							<tr>
    								<td><?php echo $pangkat; ?></td>
									<td><?php echo $kebutuhan; ?></td>
									<td><?php echo $kebutuhan; ?></td>
    								<td><?php echo $keterangan; ?></td>
									<td>
    								<?php if( $this->session->userdata('level') === 'admin' ):?>
    							 	
    								<a href="editKpgw/<?= $id_kominfo  ?>"
    									class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
    									data-toggle="tooltip" data-original-title="Edit"><i style="color:grey"
    									class="icon wb-edit" aria-hidden="true"></i></a>
    								<span data-target="#removeP<?= $id_kominfo  ?>" data-toggle="modal">

    									<a href="javascript:void(0)"
    										class=" btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
    										data-toggle="tooltip" data-original-title="Remove"><i style="color:#ff4c52"
    											class="icon wb-trash" aria-hidden="true"></i></a>
    								</span>
    								<?php endif;?>
    								<?php if( $this->session->userdata('level') === 'pegawai' ):?>
    								<a href="lihatP/<?= $id_kominfo ?>"
    									class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
    									data-toggle="tooltip" data-original-title="Detail"><i style="color:#3e8ef7"
    										class="icon fa-eye" aria-hidden="true"></i></a>

    								<?php endif;?>
    							</td>
    							</tr>
    							<?php endforeach ?>
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