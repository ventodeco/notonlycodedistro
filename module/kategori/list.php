<div id="frame-tambah">
	<!-- untuk menambah kategori -->
	<a href="<?php echo BASE_URL."index.php?page=profilku&module=kategori&action=form"; ?>" class="tombol-action">+ Tambah kategori</a>

</div>

<?php
	// mengambil data di kategori
	$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori");

	// mengecek apakah ada data yang terambil atau tidak
	if(mysqli_num_rows($queryKategori) == 0){
		// jika tidak ada data kategori
		echo "<h3>Saat ini belum ada nama kategori di dalam tabel kategori</h3>";
	} else{
		// menampilkan data kategori
		echo "<table class='table-list'>";

		echo "<tr class='baris-title'>
				<th class='kolom-nomor' >No</th>
				<th class='kiri' >Kategori</th>
				<th class='tengah' >Status</th>
				<th class='tengah' >Action</th>
			</tr>";

		$no = 1;
		while($row = mysqli_fetch_assoc($queryKategori)){

			echo "<tr>
					<td class='kolom-nomor'>$no</td>
					<td class='kiri'>$row[kategori]</td>
					<td class='tengah'>$row[status]</td>
					<td class='tengah'>
						<a class='edit-a' href='".BASE_URL."index.php?page=profilku&module=kategori&action=form&kategori_id=$row[kategori_id]'>Edit</a>
					</td>


				</tr>";
			$no++;
		}

		echo "</table>";
	}

?>

