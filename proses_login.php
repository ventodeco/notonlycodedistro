<?php
	
	// menmanggil fungsi koneksi untuk mengkoneksikan ke database
	include_once("function/koneksi.php");
	// memanggil fungsi helper
	include_once("function/helper.php");

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email' AND password = '$password' AND status = 'on'");

	if(mysqli_num_rows($query) == 0){
		// jika data tidak ditemukan maka akan dikembalikan ke page login dengan notif require
		header("location:".BASE_URL."index.php?page=login&notif=require");
	} else{
		// mengambil data di tabel user pada user tertentu
		$row = mysqli_fetch_assoc($query);

		// memulai session
		session_start();

		// menyimpan data di session
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['level'] = $row['level'];

		// dikembalikan ke my profile
		header("location:".BASE_URL."index.php?page=profilku&module=banner&action=list");
	}