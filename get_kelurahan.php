<?php
	include 'koneksi.php';
	$kecamatan = $_POST['kecamatan'];

	echo "<option value=''>Pilih Kelurahan</option>";

	$query = "SELECT * FROM kelurahan WHERE id_kec=? ORDER BY nama ASC";
	$q_kelu = $db1->prepare($query);
	$q_kelu->bind_param("i", $kecamatan);
	$q_kelu->execute();
	$kelu = $q_kelu->get_result();
	while ($row = $kelu->fetch_assoc()) {
		echo "<option value='" . $row['id_kel'] . "'>" . $row['nama'] . "</option>";
	}
?>