<?php
	// untuk mencegah user yang sudah login untuk ke page login
	if($user_id){
		header("location:".BASE_URL);
	}

?>

<div id="container-user-akses">

	<?php
		// mengecek get notif yang didapat dari pengecekan di proses register
		$notif = isset($_GET['notif']) ? $_GET['notif'] : false;

		// pengambilan keputusan jika notif ada nilainya
		if($notif == "require"){
			// notif peringatan untuk melengkapi isi form
			echo "<div class='notif'>Maaf, username dan password yang anda masukkan mungkin salah</div>";
		} 

	?>


	<!-- data yang di dapat di POST ke proses_registrasi untuk dimasukkan ke database -->
	<form action="<?php echo BASE_URL."proses_login.php"; ?>" method="POST">

		<div class="element-form">
			<label>Email</label>
			<span><input type="text" name="email" /></span>
		</div>

		<div class="element-form">
			<label>Password</label>
			<span><input type="password" name="password" /></span>
		</div>

		<div class="element-form">
			<span><input type="submit" value="Login" /></span>
		</div>

	</form>

</div>