<?php
	// memanggil file koneksi
    include("../../function/koneksi.php");   
    // memanggil file helper
    include("../../function/helper.php");   

    // isi variabel dengan fungsi POST dari form.php
    $kota = $_POST['kota'];
    $tarif = $_POST['tarif'];
    $status = $_POST['status'];
    $button = $_POST['button'];
	
	// insert data
	if($button == "Add"){
		mysqli_query($koneksi, "INSERT INTO kota (kota, tarif, status) VALUES('$kota', '$tarif', '$status')");
	}
	// update data
	else if($button == "Update"){
		$kota_id = $_GET['kota_id'];
		
		mysqli_query($koneksi, "UPDATE kota SET kota='$kota',
												tarif='$tarif',
												status='$status' WHERE kota_id='$kota_id'");
	}
	
	header("location:" .BASE_URL."index.php?page=profilku&module=kota&action=list");