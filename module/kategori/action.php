<?php
	
	// memanggil file koneksi
	include_once("../../function/koneksi.php");
	// memanggil file helper
	include_once("../../function/helper.php");

	// isi variabel dengan fungsi POST yang didapat dari form.php
	$kategori = $_POST['kategori'];
	$status = $_POST['status'];
	$button = $_POST['button'];

	// insert data baru
	if($button == "Add"){
		mysqli_query($koneksi, "INSERT INTO kategori (kategori, status) VALUES ('$kategori', '$status')");
 	} else if($button == "Update") {
 		// update data
 		$kategori_id = $_GET['kategori_id'];
 		mysqli_query($koneksi, "UPDATE kategori SET kategori = '$kategori',
 													status = '$status' WHERE kategori_id = '$kategori_id' ");
 	}
	header("location:".BASE_URL."index.php?page=profilku&module=kategori&action=list");


?>