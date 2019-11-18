<?php
	// validasi agar, jika kalau belum login tidak bisa masuk ke page ini
	if($user_id){
		$module = isset($_GET['module']) ? $_GET['module'] : false;
		$action = isset($_GET['action']) ? $_GET['action'] : false;
		$mode = isset($_GET['mode']) ? $_GET['mode'] : false;
	} else {
		header("location: ".BASE_URL."index.php?page=login");
	}

?>

<div id="bg-page-profile">

	<div id="menu-profile">	
		<!-- kategori di module -->
		<ul>
			<li>
				<a <?php if($module == "kategori"){ echo "class='active'"; } ?> href="<?php echo BASE_URL."index.php?page=profilku&module=kategori&action=list"; ?>">Kategori</a>
			</li>
			<li>
				<a <?php if($module == "barang"){ echo "class='active'"; } ?> href="<?php echo BASE_URL."index.php?page=profilku&module=barang&action=list"; ?>">Barang</a>
			</li>
			<li>
				<a <?php if($module == "kota"){ echo "class='active'"; } ?> href="<?php echo BASE_URL."index.php?page=profilku&module=kota&action=list"; ?>">Kota</a>
			</li>
			<li>
				<a <?php if($module == "user"){ echo "class='active'"; } ?> href="<?php echo BASE_URL."index.php?page=profilku&module=user&action=list"; ?>">User</a>
			</li>
			<li>
				<a <?php if($module == "banner"){ echo "class='active'"; } ?> href="<?php echo BASE_URL."index.php?page=profilku&module=banner&action=list"; ?>">Banner</a>
			</li>
			<li>
				<a <?php if($module == "pesanan"){ echo "class='active'"; } ?> href="<?php echo BASE_URL."index.php?page=profilku&module=pesanan&action=list"; ?>">Pesanan</a>
			</li>
		</ul>
	</div>

	<div id="profile-content">
		<!-- untuk mengecek apakah ada var yang terisi di file -->
		<?php

			$file = "module/$module/$action.php";
			if(file_exists($file)){
				include_once($file);
			} else {
				echo "<h3>Maaf, halaman tersebut tidak ditemukan</h3>";
			}
		?>
	</div>

	
</div>