<!DOCTYPE html>
<html>
<head>
	<title>cetak</title>
</head>
<body>
	<center><h2>Data Mesin PT.NOK INDONESIA</h2></center>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>No.Mesin</th>
			<th>Nama Mesin</th>
			<th>Work Center</th>
			<th>Id.Section</th>
			<th>Section</th>
		</tr>
		<tr>
			<?php $no =1; foreach ($mesin as $msn ) : ?>
			<td><?php echo $no++; ?></td>
			<td><?php echo $msn['no_mesin']; ?></td>
			<td><?php echo $msn['nama_mesin']; ?></td>
			<td><?php echo $msn['work_center']; ?></td>
			<td><?php echo $msn['id_section']; ?></td>
			<td><?php echo $msn['section']; ?></td>  
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>
</html>

