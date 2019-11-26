<?php
	
	// memanggil file koneksi
	include_once("../../function/koneksi.php");
	// memanggil file helper
	include_once("../../function/helper.php");

	// isi variabel dengan fungsi POST yang didapat dari form.php
	$nama_barang = $_POST['nama_barang'];
	$kategori_id = $_POST['kategori_id'];
	$spesifikasi = $_POST['spesifikasi'];
	$status = $_POST['status'];
	$button = $_POST['button'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$update_gambar = "";

	if(!empty($_FILES["file"]["name"])){
		$nama_file = $_FILES["file"]["name"];
		// simpan data foto di folder
		move_uploaded_file($_FILES["file"]["tmp_name"], "../../images/barang/".$nama_file);

		$update_gambar = ", gambar='$nama_file' ";
	}

	// insert data baru
	if($button == "Add"){
		mysqli_query($koneksi, "INSERT INTO barang (nama_barang, kategori_id, spesifikasi, gambar, harga, stok, status) VALUES ('$nama_barang', '$kategori_id', '$spesifikasi', '$nama_file', '$harga', '$stok', '$status')");
 	} else if ($button == "Update") {
 		$barang_id = $_GET['barang_id'];

 		mysqli_query($koneksi, 	"UPDATE barang SET kategori_id='$kategori_id',
 													nama_barang='$nama_barang',
 													spesifikasi='$spesifikasi',
 													harga='$harga',
 													stok='$stok'
 													$update_gambar WHERE barang_id='$barang_id' ");
 	}
 	// else if($button == "Update") {
 	// 	$kategori_id = $_GET['kategori_id'];
 	// 	mysqli_query($koneksi, "UPDATE kategori SET kategori = '$kategori',
 	// 												status = '$status' WHERE kategori_id = '$kategori_id' ");
 	// }
	header("location:".BASE_URL."index.php?page=profilku&module=barang&action=list");


?>