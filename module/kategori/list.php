<div id="frame tambah">
	<!-- untuk menambah kategori -->
	<a href="<?php echo BASE_URL."index.php?page=profilku&module=kategori&action=form"; ?>" class="tombol-action">+ Tambah kategori</a>

</div>

<?php
	// mengambil data di kategori
	$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori");

	// mengecek apakah ada data yang terambil atau tidak
	if(mysqli_num_rows($queryKategori) == 0){
		// jika tidak ada data
		echo "<h3>Saat ini belum ada nama kategori di dalam tabel kategori</h3>";
	} else{
		// mengubah data dalam bentuk tabel
		echo "<table class='table-list'>";

		echo "<tr>
				<th>No</th>
				<th>Kategori</th>
				<th>Status</th>
				<th>Action</th>
			</tr>";

		$no = 1;
		while($row = mysqli_fetch_assoc($queryKategori)){

			echo "<tr>
					<td>$no</td>
					<td>$row[kategori]</td>
					<td>$row[status]</td>
					<td>
						<a class='".BASE_URL."index.php?page=profilku&module=kategori&action=form&kategori_id=$row[kategori_id]'>Edit</a>
					</td>


				</tr>";

		}

		echo "</table>";
	}

?>

