<!DOCTYPE html>
<html>
<head>
	<title>Laporan Harian Work Harian</title>
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/nok.ico">
</head>
<body>
	<style type="text/css">
		.table-data{
			width: 100%;
			border-collapse: collapse;
		}

		.table-data tr th,
		.table-data tr td{
			border: 1px solid black;
			font-size: 10pt;
			text-align: center;
		}
	</style>
	<center>
		Data Work Request Selesai Maintenance <br>
		PT.NOK INDONESIA
	</center>
	<br/><br/>
	<table class="table-data">
		<thead>
			<tr>
				<th>No</th>
				<th>No WR</th>
				<th>Tanggal Wr</th>
				<th>Jam Wr</th>
				<th>No.Mesin</th>
				<th>Nama Mesin</th>
				<th>PIC Pembuat</th>
				<th>Problem</th>
				<th>Detail Penyebab</th>
				<th>Detail Perbaikan</th>
				<th>Tanggal Dikerjakan</th>
				<th>Jam Dikerjakan</th>
				<th>Tanggal Selesai</th>
				<th>Jam Selesai</th>
				<th>PIC MTN</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach($wr_rekap as $data) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['no_wr']; ?></td>
				<td><?php echo $data['tanggal_wr']; ?></td>
				<td><?php echo $data['jam_wr']; ?></td>
				<td><?php echo $data['no_mesin']; ?></td>
				<td><?php echo $data['nama_mesin']; ?></td>
				<td><?php echo $data['nrp_prod']; ?></td>
				<td><?php echo $data['problem']; ?></td>
				<td><?php echo $data['detail_penyebab']; ?></td>
				<td><?php echo $data['penyelesaian']; ?></td>
				<td><?php echo $data['tanggal_dikerjakan']; ?></td>
				<td><?php echo $data['jam_dikerjakan']; ?></td>
				<td><?php echo $data['tanggal_selesai']; ?></td>
				<td><?php echo $data['jam_selesai']; ?></td>
				<td><?php echo $data['nrp_mtn']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>