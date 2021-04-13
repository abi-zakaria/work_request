<html>
<head>
	<title>Cetak PDF</title>
</head>
<body>
	<h1 style="text-align: center;">Data Karyawan Maintenance</h1>
	<?php echo "Tanggal : ".date('d-m-Y'); ?><br><br>
	<table border="1" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<th width="30" height="30" align="center">No</th>
			<th width="100" align="center">NRP</th>
			<th width="220" align="center">Nama Karyawan</th>
			<th width="90" align="center">Shift</th>
			<th width="90" align="center">Jabatan</th>
			<th width="90" align="center">Id.Section</th>
			<th width="100" align="center">Section</th>
		</tr>
		<?php
		if(!empty($data_kry_mtn)){
			
			$no = 1;
			foreach($data_kry_mtn as $data){
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$data->nrp."</td>";
				echo "<td>".$data->nama_karyawan."</td>";
				echo "<td>".$data->shift."</td>";
				echo "<td>".$data->jabatan."</td>";
				echo "<td>".$data->id_section."</td>";
				echo "<td>".$data->section."</td>";
				echo "</tr>";
				$no++;
			}
		}
		?>
	</table>
</body>
</html>
