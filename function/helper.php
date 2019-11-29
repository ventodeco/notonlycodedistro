<?php
	// membuat base url menerapkan design pattern singleton
	define("BASE_URL", "http://localhost/notonlycode/");

	// fungsi convert ke rupiah
	function rupiah($nilai = 0) {
		$string = "Rp," . number_format($nilai);
		return $string;
	}

	function kategori($kategori_id = false){

		global $koneksi;

		$tmp = "<div id='menu-kategori'>";

			$tmp .= "<ul>";
				
					$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on'");

					while($row=mysqli_fetch_assoc($query)){
						if($kategori_id == $row['kategori_id']){
							$tmp .= "<li><a href='".BASE_URL."index.php?kategori_id=$row[kategori_id]' class='active'>$row[kategori]</a></li>";

						} else {
							$tmp .= "<li><a href='".BASE_URL."index.php?kategori_id=$row[kategori_id]'>$row[kategori]</a></li>";
						}

					}

			$tmp .= "</ul>";

		$tmp .= "</div>";

		return $tmp;
	} 