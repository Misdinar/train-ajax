<?php
	include 'koneksi.php';
 
	echo "<option value=''>Pilih Provinsi</option>";
 
	$query = "SELECT * FROM provinsi ORDER BY nama ASC";
	$q_prov = $db1->prepare($query);
	$q_prov->execute();
	$prov = $q_prov->get_result();
	while ($row = $prov->fetch_assoc()) {
		echo "<option value='" . $row['id_prov'] . "'>" . $row['nama'] . "</option>";
	}
?>