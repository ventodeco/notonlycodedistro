<?php
	// memanggil file koneksi
	include_once("function/koneksi.php");
	// memanggil file helper
	include_once("function/helper.php");
	// data didapat dari register.php

	$level = "customer";
	$status = "on";
	$nama_lengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$alamat = $_POST['alamat'];
	$password = $_POST['password'];
	$re_password = $_POST['re_password'];

	// menghapus POST dari password agar tidak ikut masuk ke dataForm
	unset($_POST['password']);
	unset($_POST['re_password']);
	// menyimpan query post ke var dataForm
	$dataForm = http_build_query($_POST);

	// mengambil data email
	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email' ");

	// pengecekan field
	if(empty($nama_lengkap) || empty($email) || empty($phone) || empty($alamat) || empty($password) || empty($re_password) ){
		// jika ada yang kosong akan dikembalikan dengan get notif require dan dataForm
		header("location:".BASE_URL."index.php?page=register&notif=require&$dataForm");
	} else if ($password != $re_password){
		// jika password tidak match akan dikembalikan dengan get password dan dataForm
		header("location:".BASE_URL."index.php?page=register&notif=password&$dataForm");
	} else if (mysqli_num_rows($query) == 1) {
		// jika email sudah terdaftar akan dikembalikan ke page register dengan get notif email dan dataForm
		header("location:".BASE_URL."index.php?page=register&notif=email&$dataForm");
	} else {
		// enkripsi password
		$password = md5($password);
		// data akan dimasukkan ke database
		mysqli_query($koneksi, "INSERT INTO user (level, nama, email, alamat, phone, password, status) 
							VALUES ('$level', '$nama_lengkap', '$email', '$alamat', '$phone', '$password', '$status')"); 
		
		// setelah selesai registrasi dikembalikan ke login
		header("location:".BASE_URL."index.php?page=login");

	}
	
	