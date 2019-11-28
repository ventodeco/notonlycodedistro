<?php
	// memanggil file koneksi
    include("../../function/koneksi.php");   
    // memanggil file helper
    include("../../function/helper.php");   
     

   	// isi variabel dengan fungsi POST yang didapat dari form.php
    $user_id = $_GET['user_id'];
	
    $nama = $_POST['nama'];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$alamat = $_POST["alamat"];
	$level = $_POST["level"];
	$status = $_POST["status"];	

	// update data dari user
	mysqli_query($koneksi, "UPDATE user SET nama='$nama',
											   email='$email',
											   phone='$phone',
											   alamat='$alamat',
											   level='$level',
											   status='$status'
											   WHERE user_id='$user_id'");

    header("location: ".BASE_URL."index.php?page=profilku&module=user&action=list");
?>