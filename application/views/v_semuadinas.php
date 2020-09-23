    <div class="page">
    	<div class="page-header">
    		<h1 class="page-title">Data Dinas Provinsi Riau</h1>
    		<ol class="breadcrumb">
    			<li class="breadcrumb-item"><a href="<?= base_url('admin')?>">Dashboard</a></li>
    			<li class="breadcrumb-item active">Data Dinas Provinsi Riau</li>
    		</ol>
    	</div>
    	<div class="page-content container-fluid">
    		<div class="row" data-plugin="matchHeight" data-by-row="true">
			<?= $this->session->flashdata('message') ?>

    			<div class="panel" style="width: 100%">
    				<header class="panel-heading">
    					<h3 class="panel-title">Arsip Data Dinas Provinsi Riau</h3>
    					<?php if( $this->session->userdata('level') === 'admin' ):?>
    			<a href="<?= base_url('admin/v_import') ?>"><button class="btn btn-primary active"
    					style="margin-left: 1rem">Import Excel</button></a>
    			<?php endif;?>
    				</header>
 
    				<div class="panel-body">
    					<table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
    						<thead>
    							<tr>
    								<th>Nama Dinas</th>
    							</tr>
    						</thead>
    						<tbody>

    							<?php foreach ($data->result_array() as $i) :
									$id = $i['id_dinas'];
									$nama_dinas = $i['nama_dinas'];
									?>

    							<tr>
    								<td><?php echo $nama_dinas; ?></td>
								
    							</tr>
    							<?php endforeach ?>
    						</tbody>
    					</table>
					</div>
					
    			</div>

    		</div>
    	</div>
    </div>
