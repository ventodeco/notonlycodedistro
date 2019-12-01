<?php
	// untuk memulai session
	session_start();

	// memanggil file koneksi
	include_once("function/koneksi.php");
	// memanggil file helper
	include_once("function/helper.php");

	// digunakan untuk mengecek apakah get dengan nilai page ada di url
	$page = isset($_GET['page']) ? $_GET['page'] : false;

	$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;

	// jika SESSION ada nilainya akan ditampung di variabel
	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
	$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
	$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
	
	// array karena akan di count 
	$keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : array();

	$totalBarang = count($keranjang);

	// echo "<pre>";
	// print_r($keranjang);
	// echo "</pre>";

	// untuk upperstring ke nama
	$namaup = strtoupper($nama);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Not Only Code Distro</title>	
	<!-- memanggil file css -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL."css/style.css"  ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL."css/slide.css"  ?>">

	<script src="<?php echo BASE_URL."js/jquery-3.4.1.min.js"; ?>"></script>
	<script src="<?php echo BASE_URL."js/Slides-SlidesJS-3/source/jquery.slides.min.js"; ?>"></script>

	<script>
		$(function() {
      		$('#slides').slidesjs({
		        width: 940,
		        height: 300,
		        play: {
		          active: true,
		          auto: true,
		          interval: 4000,
		          swap: true
		        }
	      	});
	   	});
	</script>

</head> 	
<body>
	<div id="container">
		<!-- HEADER -->
		<div id="header">
			<a href="<?php echo BASE_URL."index.php"; ?>">
				<img id="logo" src="<?php echo BASE_URL."images/logo.png" ?>">
			</a>
		</div>


		<div id="menu">
			<?php
				// cek nilai di user id
				if($user_id){
					// jika ada nilai maka dapat masuk
					echo "SELAMAT DATANG $namaup <a href='".BASE_URL."index.php?page=profilku&module=pesanan&action=list'> MY PROFILE</a> <a href='".BASE_URL."logout.php'>LOGOUT</a>";
				} else {
					// jika tidak ada nilai di user id maka akan masuk page awal
					echo "<a href='".BASE_URL."index.php?page=login'>LOGIN</a>";
					echo "<a href='".BASE_URL."index.php?page=register'>REGISTER</a>";

				}

			?>

			<a class="cartt" href="<?php echo BASE_URL."index.php?page=keranjang" ?>">
				<img src="<?php echo BASE_URL."images/cart.png" ?>">
				<?php

					if($totalBarang != 0){
						echo "<span class='total-barang'>$totalBarang</span>";
					}

				?>
			</a>
		</div>

		<!-- CONTENT -->
		<div id="content">
			
			<?php
				// mentransfer isi dari page ke filename
				$filename = "$page.php";
				
				// mengecek apakah filename ada isinya
				if(file_exists($filename)){
					include_once($filename);
				} else {
					include_once("main.php");
				}

			?>

		</div>


		<!-- FOOTER -->
		<div id="footer">
			<p>&copy; 2019 Hak Cipta oleh Not Only Code Distro  &bull; Hubungi Kami di 081809929885 </p>
		</div>
	</div>
</body>
</html>