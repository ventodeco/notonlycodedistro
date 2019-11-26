<div id="frame-tambah">
	<!-- untuk menambah barang -->
	<a href="<?php echo BASE_URL."index.php?page=profilku&module=barang&action=form"; ?>" class="tombol-action">+ Tambah barang</a>

</div>

<?php
	// mengambil data di barang
	$query = mysqli_query($koneksi, "SELECT barang.*, kategori FROM barang JOIN kategori using (kategori_id) ORDER BY nama_barang ASC");

	// mengecek apakah ada data yang terambil atau tidak
	if(mysqli_num_rows($query) == 0){
		// jika tidak ada data barang 
		echo "<h3>Saat ini belum ada nama barang di dalam tabel barang</h3>";
	} else{
		// menampilkan data barang
		echo "<table class='table-list'>";

		echo "<tr class='baris-title'>
				<th class='kolom-nomor' >No</th>
				<th class='kiri' >Barang</th>
				<th class='kiri' >Kategori</th>
				<th class='kiri' >Harga</th>
				<th class='tengah' >Status</th>
				<th class='tengah' >Action</th>
			</tr>";

		$no = 1;
		while($row = mysqli_fetch_assoc($query)){

			echo "<tr>
					<td class='kolom-nomor'>$no</td>
					<td class='kiri'>$row[nama_barang]</td>
					<td class='kiri'>$row[kategori]</td>
					<td class='kiri'>".rupiah($row["harga"])."</td>
					<td class='tengah'>$row[status]</td>
					<td class='tengah'>
						<a class='edit-a' href='".BASE_URL."index.php?page=profilku&module=barang&action=form&barang_id=$row[barang_id]'>Edit</a>
					</td>


				</tr>";
			$no++;
		}

		echo "</table>";
	}

?>

