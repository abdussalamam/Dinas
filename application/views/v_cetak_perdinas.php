<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition:attachment; filename=pegawai_perdinas.xls");
?>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
	<title>Sistem Informasi Kerja Sama</title>
</head>

<body style="background-color: white">
	<h1 style="text-align:center;">Daftar Pegawai Per Dinas</h1>
	<div style="text-align: center;">
		<table cellpadding="4" cellspacing="1" border="2" align="center">
			<thead>
    							<tr>
    								<th>Nama</th>
    								<th>NIP</th>
    								<th>Pangkat</th>
    								<th>Fungsional</th>
    								<th>Tingkatan</th>
    								<th>Perpres</th>
    								<th>Tunjangan Perpres</th>
                                    <th>TPP</th>
                                    <th>Grade</th>
                                    <th>Bagian</th>
                                    <th>OPD</th>
                                    <th>Jenis Administrasi</th>
                                    <th>Perjalanan Berkas</th>
                                    <th>Tanggal SK</th>
                                    <th>NO.PAK</th>
                                    <th>Tanggal PAK</th>
                                    <th>TMT</th>
                                    <th>Dinas</th>
    							</tr>
    						</thead>
    						<tbody>

    							<?php foreach ($data->result_array() as $i) :
									$id = $i['id_pegawai'];
									$nama = $i['nama'];
									$nip = $i['nip'];
									$pangkat = $i['pangkat'];
									$fungsional = $i['fungsional'];
									$tingkatan = $i['tingkatan'];
									$perpres = $i['perpres'];
									$tunjangan_pres = $i['tunjangan_pres'];
                                    $tpp = $i['tpp'];
                                    $grade = $i['grade'];
                                    $bagian = $i['bagian'];
                                    $opd = $i['opd'];
                                    $jenis_adm = $i['jenis_adm'];
                                    $perjalanan_berkas = $i['perjalanan_berkas'];
                                    $tgl_sk = $i['tgl_sk'];
                                    $no_pak = $i['no_pak'];
                                    $tgl_pak = $i['tgl_pak'];
                                    $tmt = $i['tmt'];
                                    $dinas = $i['dinas'];
									?>

    								<tr>
    									<td><?php echo $nama; ?></td>
    									<td><?php echo $nip; ?></td>
    									<td><?php echo $pangkat; ?></td>
    									<td><?php echo $fungsional; ?></td>
    									<td><?php echo $tingkatan; ?></td>
    									<td><?php echo $perpres; ?></td>
    									<td><?php echo $tunjangan_pres; ?></td>
                                        <td><?php echo $tpp; ?></td>
                                        <td><?php echo $grade; ?></td>
                                        <td><?php echo $bagian; ?></td>
                                        <td><?php echo $opd; ?></td>
                                        <td><?php echo $jenis_adm; ?></td>
                                        <td><?php echo $perjalanan_berkas; ?></td>
                                        <td><?php echo $tgl_sk; ?></td>
                                        <td><?php echo $no_pak; ?></td>
                                        <td><?php echo $tgl_pak; ?></td>
                                        <td><?php echo $tmt; ?></td>
                                        <td><?php echo $dinas; ?></td>
    								</tr>
    							<?php endforeach ?>
    						</tbody>
		</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>