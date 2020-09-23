    <div class="page">
    	<div class="page-header">
    		<h1 class="page-title">Data Jabatan Fungsional</h1>
    		<ol class="breadcrumb">
    			<li class="breadcrumb-item"><a href="<?= base_url('admin')?>">Dashboard</a></li>
    			<li class="breadcrumb-item active">Data Jabatan Fungsional</li>
    		</ol>
    	</div>
    	<div class="page-content container-fluid">
    		<div class="row" data-plugin="matchHeight" data-by-row="true">
			<?= $this->session->flashdata('message') ?>

    			<div class="panel" style="width: 100%">
    				<header class="panel-heading">
    					<h3 class="panel-title">Arsip Data Jabatan Fungsional</h3>
    					<?php if( $this->session->userdata('level') === 'admin' ):?>
    			<a href="<?= base_url('admin/tambahJabfung') ?>"><button class="btn btn-success active"
    					style="margin-left: 1rem">Tambah Jabatan Fungsional</button></a>
    			<?php endif;?>
    				</header>
 
    				<div class="panel-body">
    					<table class="table table-hover dataTable table-striped w-full" id="table1">
    						<thead>
    							<tr>
									<th>No</th>
									<th>Nama Jabatan Fungsional</th>
									<th>Aksi</th>
    							</tr>
    						</thead>
    						<tbody>
							<?php $a = 1; ?>
    							<?php foreach ($data->result_array() as $i) :
									$id = $i['id_jabfung'];
									$nama_jabfung = $i['nama_jabfung'];
									?>

    							<tr>
								<th scope="row"><?= $a; ?></th>
									<td><?php echo $nama_jabfung; ?></td>
									<td>
									<?php $a++; ?>
    								<?php if( $this->session->userdata('level') === 'admin' ):?>
    							 	
    								<a href="editJabfung/<?= $id  ?>"
    									class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
    									data-toggle="tooltip" data-original-title="Edit"><i style="color:grey"
    										class="icon wb-edit" aria-hidden="true"></i></a>
    								<span data-target="#removeJabfung<?= $id  ?>" data-toggle="modal">

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
    							<?php endforeach ?>
    						</tbody>
    					</table>
					</div>
					<!-- Modal Delete Surat-->
					<?php foreach($data->result_array() as $i):?>
    			<div class="modal fade modal-slide-from-bottom" id="removeJabfung<?= $i['id_jabfung'] ?>" aria-hidden="true"
    				aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
    				<div class="modal-dialog modal-simple">
    					<div class="modal-content">
    						<form method="post" action="<?= base_url('admin/removeJabfung/')?><?= $i['id_jabfung']?>">

    							<div class="modal-header">
    								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    									<span aria-hidden="true">×</span>
    								</button>
    								<h4 class="modal-title">Hapus Jabatan Fungsional</h4>
    							</div>
    							<div class="modal-body text-center">
    								<h4>Apakah kamu Yakin Menghapus <b><?= $i['nama_jabfung']?></b></h4>
    							</div>
    							<div class="modal-footer">
    								<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
    								<button type="submit" class="btn btn-danger">Yakin</button>
    							</div>

    						</form>
    					</div>
    				</div>
    			</div>
    			<?php endforeach;?>
    			<!-- End Modal -->
    			</div>

    		</div>
    	</div>
    </div>
