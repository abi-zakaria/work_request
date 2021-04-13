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
		Data Mesin <br>
		PT.NOK INDONESIA
	</center>
	<br><br>
	<table class="table-data">
		<thead>
			<tr>
				<th>No</th>
				<th>No.Mesin</th>
				<th>Nama Mesin</th>
				<th>Work Center</th>
				<th>Id Section</th>
				<th>Section</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach($mesin as $data) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['no_mesin']; ?></td>
				<td><?php echo $data['nama_mesin']; ?></td>
				<td><?php echo $data['work_center']; ?></td>
				<td><?php echo $data['id_section']; ?></td>
				<td><?php echo $data['section']; ?></td>
				<td><?php echo $data['status']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>