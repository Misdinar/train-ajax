<?php
	include 'koneksi.php';
	$provinsi = $_POST['provinsi'];

	echo "<option value=''>Pilih Kabupaten</option>";

	$query = "SELECT * FROM kabupaten WHERE id_prov=? ORDER BY nama ASC";
	$q_kab = $db1->prepare($query);
	$q_kab->bind_param("i", $provinsi);
	$q_kab->execute();
	$kab = $q_kab->get_result();
	while ($row = $kab->fetch_assoc()) {
		echo "<option value='" . $row['id_kab'] . "'>" . $row['nama'] . "</option>";
	}
?>