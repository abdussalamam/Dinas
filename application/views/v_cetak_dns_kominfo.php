<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition:attachment; filename=kebutuhan dinas kominfo.xls");
?>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
	<title>Sistem Informasi Kerja Sama</title>
</head> 

<body style="background-color: white">
	<h1 style="text-align:center;">Daftar Kebutuhan Dinas Kominfo</h1>
	<div style="text-align: center;">
		<table cellpadding="4" cellspacing="1" border="2" align="center">
			<thead>
    							<tr>
    								<th>Golongan / Pangkat</th>
    								<th>Kebutuhan Pegawai</th>
    								<th>Keterangan</th>
    							</tr>
								<div class="col-xl-3 col-md-6 info-panel">
				
    		</thead>
    		<tbody>
								<?php foreach ($data->result_array() as $i) :
									$id_kominfo = $i['id_kominfo'];
									$pangkat = $i['pangkat'];
									$kebutuhan = $i['kebutuhan'];
									//$tersedia = $i['tersedia'];
									$keterangan = $i['keterangan'];
									?>

    								<tr>
    								<td><?php echo $pangkat; ?></td>
    								<td><?php echo $kebutuhan; ?></td>
    								<!--<td><?php echo $tersedia; ?></td> -->
    								<td><?php echo $keterangan; ?></td>
    							<?php endforeach ?>
																
    		</tbody>
			
		</table>
		<br>
		<body style="background-color: white">
		<div style="text-align: center;">
		<table cellpadding="4" cellspacing="1" border="2" align="center">
			<thead>
				<th>Golongan 1</th>
				<th>Golongan 2</th>
				<th>Golongan 3</th>
				<th>Golongan 4</th>
			</thead>
			<tbody>
				<tr>
				<td><?= $pngktKominfoIa ?></td>
				<td><?= $pngktKominfoIIa ?></td>
				<td><?= $pngktKominfoIIIa ?></td>
				<td><?= $pngktKominfoIVa ?></td>
				</tr>
				<tr>
				<td><?= $pngktKominfoIb ?></td>
				<td><?= $pngktKominfoIIb ?></td>
				<td><?= $pngktKominfoIIIb ?></td>
				<td><?= $pngktKominfoIVb ?></td>
				</tr>
				<tr>
				<td><?= $pngktKominfoIc ?></td>
				<td><?= $pngktKominfoIIc ?></td>
				<td><?= $pngktKominfoIIIc ?></td>
				<td><?= $pngktKominfoIVc ?></td>
				</tr>
				<tr>
				<td><?= $pngktKominfoId ?></td>
				<td><?= $pngktKominfoIId ?></td>
				<td><?= $pngktKominfoIIId ?></td>
				<td><?= $pngktKominfoIVd ?></td>
				</tr>
				<tr>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td><?= $pngktKominfoIVe ?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>