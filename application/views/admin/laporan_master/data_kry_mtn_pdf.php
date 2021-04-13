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
	<center>
		Data Karyawan Maintenance <br>
		PT.NOK INDONESIA
	</center>
	<br><br>
	<table class="table-data">
		<thead>
			<tr>
				<th>No</th>
				<th>Nrp</th>
				<th>Nama Karyawan</th>
				<th>Shift</th>
				<th>Jabatan</th>
				<th>Id.Section</th>
				<th>Section</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach($kry_mtn as $data) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data->nrp_mtn; ?></td>
				<td><?php echo $data->nama_karyawan_mtn; ?></td>
				<td><?php echo $data->shift; ?></td>
				<td><?php echo $data->jabatan; ?></td>
				<td><?php echo $data->id_section; ?></td>
				<td><?php echo $data->section; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>