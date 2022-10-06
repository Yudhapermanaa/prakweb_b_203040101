<?php

function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "prakweb_2022_b_203040101");

	return $conn;
}

function query($sql)
{
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function upload()
{
	$nama_file = $_FILES['gambar']['name'];
	$tipe_file = $_FILES['gambar']['type'];
	$ukuran_file = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmp_file = $_FILES['gambar']['tmp_name'];

	if ($error == 4) {
		return 'nophoto.png';
	}

	$daftar_gambar = ['jpg', 'jpeg', 'png'];
	$ekstensi_file = explode('.', $nama_file);
	$ekstensi_file = strtolower(end($ekstensi_file));
	if (!in_array($ekstensi_file, $daftar_gambar)) {
		echo "<script>
						alert('yang anda pilih bukan gambar!');
					</script>";
		return false;
	}

	if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png' && $tipe_file != 'image/jpg') {
		echo "<script>
						alert('yang anda pilih bukan gambar!');
					</script>";
		return false;
	}

	if ($ukuran_file > 5000000) {
		echo "<script>
						alert('size gambar terlalu besar');
					</script>";
		return false;
	}

	$nama_file_baru = uniqid();
	$nama_file_baru .= '.';
	$nama_file_baru .= $ekstensi_file;
	move_uploaded_file($tmp_file, '../assets/img/buku/' . $nama_file_baru);

	return $nama_file_baru;
}

function tambah($data)
{
	$conn = koneksi();

	$judul_buku = htmlspecialchars($data['judul_buku']);
	$penulis_buku = htmlspecialchars($data['penulis_buku']);
	$penerbit_buku = htmlspecialchars($data['penerbit_buku']);
	$tanggal_terbit = htmlspecialchars($data['tanggal_terbit']);
	$deskripsi_buku = htmlspecialchars($data['deskripsi_buku']);

	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query = "INSERT INTO buku
				VALUES ('', '$judul_buku', '$penulis_buku', '$penerbit_buku', '$tanggal_terbit', '$deskripsi_buku', '$gambar')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	$conn = koneksi();
	$id = htmlspecialchars($data['id']);
	$gambar_lama = htmlspecialchars($data['gambar_lama']);
	$judul_buku = htmlspecialchars($data['judul_buku']);
	$penulis_buku = htmlspecialchars($data['penulis_buku']);
	$penerbit_buku = htmlspecialchars($data['penerbit_buku']);
	$tanggal_terbit = htmlspecialchars($data['tanggal_terbit']);
	$deskripsi_buku = htmlspecialchars($data['deskripsi_buku']);

	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambar_lama;
	} else {
		$gambar = upload();
	}

	$query = "UPDATE buku SET 
					judul_buku = '$judul_buku', 
					penulis_buku = '$penulis_buku', 
					penerbit_buku = '$penerbit_buku', 
					tanggal_terbit = '$tanggal_terbit', 
					deskripsi_buku = '$deskripsi_buku', 
					gambar = '$gambar' WHERE id = '$id' ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id)
{
	$conn = koneksi();

	$buku = query("SELECT * FROM buku WHERE id = $id")[0];
	if ($buku['gambar'] != 0) {
		unlink('../assets/img/buku/' . $buku['gambar']);
	}

	mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}

function cari($keyword)
{
	$conn = koneksi();

	$query = "SELECT * FROM buku WHERE 
	judul_buku LIKE '%$keyword%' OR 
	penulis_buku LIKE '%$keyword%' OR 
	penerbit_buku LIKE '%$keyword%' ";

	$result = mysqli_query($conn, $query);

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}
