<?
	// memanggil file helper
	include_once("function/helper.php");

	// digunakan untuk mengecek apakah get dengan nilai page ada di url
	$page = isset($_GET['page']) ? $_GET['page'] : false;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Not Only Code Distro</title>	
	<!-- memanggil file css -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL."css/style.css"  ?>">
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
			<a href="<?php echo BASE_URL."index.php?page=login"; ?>">LOGIN</a>
			<a href="<?php echo BASE_URL."index.php?page=register"; ?>">REGISTER</a>
			<a class="cartt" href="<?php echo BASE_URL."index.php?page=keranjang" ?>">
				<img src="<?php echo BASE_URL."images/cart.png" ?>">
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
					echo "Maaf file tersebut tidak ada";
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