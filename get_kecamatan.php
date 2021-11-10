
<?php
	include 'koneksi.php';
	$kabupaten = $_POST['kabupaten'];
 
	echo "<option value=''>Pilih Kecamatan</option>";
 
	$query = "SELECT * FROM kecamatan WHERE id_kab=? ORDER BY nama ASC";
	$q_kec = $db1->prepare($query);
	$q_kec->bind_param("i", $kabupaten);
	$q_kec->execute();
	$kec = $q_kec->get_result();
	while ($row = $kec->fetch_assoc()) {
		echo "<option value='" . $row['id_kec'] . "'>" . $row['nama'] . "</option>";
	}
?>