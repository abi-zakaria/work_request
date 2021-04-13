<!DOCTYPE html>
<html>
<head>
	<title></title>
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

	<img src="<?php base_url(); ?>assets/img/nok.jpg" width="160px" height="80px">
	<center style="font-size: 25px;"><b>
		PT.NOK INDONESIA <br>
		Work Request Maintenance </b>
	</center>
	<hr width="300px">
	<br><br>

	<table>
		<tr>
			<td width="170">No Work Request</td>
			<td width="33">:</td>
			<td><?php echo $detail_wr_selesai['no_wr']; ?></td>
		</tr>

		<tr>
			<td>Tanggal Work Request</td>
			<td>:</td>
			<td><?php echo $detail_wr_selesai['tanggal_wr']; ?></td>
		</tr>

		<tr>
			<td>Jam Work Request</td>
			<td>:</td>
			<td><?php echo $detail_wr_selesai['jam_wr']; ?></td>
		</tr>

		<tr>
			<td>Id.Section</td>
			<td>:</td>
			<td><?php echo $detail_wr_selesai['id_section']; ?></td>
		</tr>

	</table>
	<br><br>
	<hr>
	<table border="1" class="table table-data table-bordered" width="100%">

		<tr>
			<td colspan="4" bgcolor="red" height="30px"><center><span style="font-size: 20px; font-weight: bold;">Detail Work Request</span></center></td>
		</tr>

		<tr>
			<td bgcolor="aqua" height="20px" width="16%" style="font-size: 15px; font-weight: bold;"><center>No.Mesin</center></td>
			<td bgcolor="aqua" width="20%" style="font-size: 15px; font-weight: bold;"><center>Nama Mesin</center></td>
			<td bgcolor="aqua" width="40%" style="font-size: 15px; font-weight: bold;"><center>Problem</center></td>
			<td bgcolor="aqua" style="font-size: 15px; font-weight: bold;"><center>PIC</center></td>
		</tr>

		<tr>
			<td height="20%"><center><?php echo $detail_wr_selesai['no_mesin']; ?></center></td>
			<td><center><?php echo $detail_wr_selesai['nama_mesin']; ?></center></td>
			<td><center><?php echo $detail_wr_selesai['problem']; ?></center></td>
			<td><center><?php echo $detail_wr_selesai['nrp_prod']; ?> - <?php echo $detail_wr_selesai['nama_karyawan']; ?></center></td>
		</tr>

	</table>
	<br><br>
	<hr>
	<table border="1" class="table table-data table-bordered" width="100%">

		<tr>
			<td colspan="5" bgcolor="red" height="30px"><center><span style="font-size: 20px; font-weight: bold;">Detail Pengerjaan Work Request</span></center></td>
		</tr>

		<tr>
			<td bgcolor="aqua" height="20px" width="12%" style="font-size: 15px; font-weight: bold;"><center>Tanggal Dikerjakan</center></td>
			<td bgcolor="aqua" width="12%" style="font-size: 15px; font-weight: bold;"><center>Tanggal Selesai</center></td>
			<td bgcolor="aqua" width="25%" style="font-size: 15px; font-weight: bold;"><center>Detail Penyebab</center></td>
			<td bgcolor="aqua" width="25%" style="font-size: 15px; font-weight: bold;"><center>Penyelesaian</center></td>
			<td bgcolor="aqua" style="font-size: 15px; font-weight: bold;"><center>PIC</center></td>
		</tr>

		<tr>
			<td height="20%"><center><?php echo $detail_wr_selesai['tanggal_dikerjakan']; ?> <br><?php echo $detail_wr_selesai['jam_dikerjakan']; ?> </center></td>
			<td><center><?php echo $detail_wr_selesai['tanggal_selesai']; ?> <br><?php echo $detail_wr_selesai['jam_selesai']; ?> </center></td>
			<td><center><?php echo $detail_wr_selesai['detail_penyebab']; ?></center></td>
			<td><center><?php echo $detail_wr_selesai['penyelesaian']; ?></center></td>
			<td><center><?php echo $detail_wr_selesai['nrp_mtn']; ?> - <?php echo $detail_wr_selesai['nama_karyawan_mtn']; ?></center></td>
		</tr>

	</table>
</body>
</html>