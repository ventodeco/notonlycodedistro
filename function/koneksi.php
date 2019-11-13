<?php
	// meng koneksikan ke database
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "notonlycode";

	$koneksi = mysqli_connect($server, $username, $password, $database) or die("Koneksi ke database gagal");
