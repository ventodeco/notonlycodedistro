<?php
	// untuk mencegah user yang sudah login untuk ke page register
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
			echo "<div class='notif'>Maaf, kamu belum menlengkapi form dibawah ini</div>";
		} else if ($notif == "password"){
			// notif peringatan password tidak sama
			echo "<div class='notif'>Maaf, password yang anda masukkan tidak sama</div>";
		} else if ($notif == "email"){
			// notif peringatan email sudah terpakai
			echo "<div class='notif'>Maaf, email sudah digunakan</div>";
		}

		// mengembalikan dataForm
		$nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
		$email = isset($_GET['email']) ? $_GET['email'] : false;
		$phone = isset($_GET['phone']) ? $_GET['phone'] : false;
		$alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;
	?>


	<!-- data yang di dapat di POST ke proses_registrasi untuk dimasukkan ke database -->
	<form action="<?php echo BASE_URL."proses_register.php"; ?>" method="POST">
		
		<div class="element-form">
			<label>Nama Lengkap</label>
			<span><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" /></span>
		</div>

		<div class="element-form">
			<label>Email</label>
			<span><input type="text" name="email" value="<?php echo $email; ?>" /></span>
		</div>

		<div class="element-form">
			<label>Nomor Telepon</label>
			<span><input type="text" name="phone" value="<?php echo $phone; ?>" /></span>
		</div>

		<div class="element-form">
			<label>Alamat</label>
			<span><textarea name="alamat" /><?php echo $alamat; ?></textarea></span>
		</div>

		<div class="element-form">
			<label>Password</label>
			<span><input type="password" name="password" /></span>
		</div>

		<div class="element-form">
			<label>Re-type Password</label>
			<span><input type="password" name="re_password" /></span>
		</div>

		<div class="element-form">
			<span><input type="submit" value="Register" /></span>
		</div>

	</form>

</div>