<?php
require 'functions.php';
$id = $_GET['id'];
$bk = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>alert('Data Berhasil diubah!');
		document.location.href = '../index.php';
		</script>";
    } else {
        echo "<script>alert('Data Gagal diubah!');
		document.location.href = 'ubah.php';
		</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Data</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow-sm py-auto bg-white">
        <div class="container">
            <a class="navbar-brand">
                YUDHA<span class="span">Book.com </span>
            </a>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Form Tambah Data -->
    <section id="form-tambah">
        <div class="container">
            <form class="form-tambah" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?= $bk['id']; ?>">
                <input type="hidden" name="gambar_lama" value="<?= $bk['gambar']; ?>">
                <h2 class="mb-3 text-center" style="color: rgb(49, 0, 165);">Form Ubah Data Buku</h2>
                <div class="kotak rounded-3 row justify-content-center">
                    <div class="mb-3 col-md-6">
                        <label for="judul_buku" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $bk['judul_buku']; ?>" required>
                    </div>
                    <div class=" mb-3 col-md-6">
                        <label for="penulis_buku" class="form-label">Penulis Buku</label>
                        <input type="text" class="form-control" id="penulis_buku" name="penulis_buku" value="<?= $bk['penulis_buku']; ?>" required>
                    </div>
                    <div class=" mb-3 col-md-6">
                        <label for="penerbit_buku" class="form-label">Penerbit Buku</label>
                        <input type="text" class="form-control" id="penerbit_buku" name="penerbit_buku" value="<?= $bk['penerbit_buku']; ?>" required>
                    </div>
                    <div class=" mb-3 col-md-6">
                        <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
                        <input type="date" class="form-control" id="tanggal_terbit" name="tanggal_terbit" value="<?= $bk['tanggal_terbit']; ?>" required>
                    </div>
                    <div class=" mb-3 col-md-12">
                        <label for="deskripsi_buku" class="form-label">Deskripsi Buku</label>
                        <textarea class="form-control" id="deskripsi_buku" rows="6" name="deskripsi_buku" value="" required><?= $bk['deskripsi_buku']; ?></textarea>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="gambar" class="form-label">Masukkan Gambar</label>
                        <input class="form-control" type="file" id="gambar" name="gambar">
                    </div>
                    <div class="mb-3 btn-tambah pt-2 ">
                        <button class="btn btn-primary shadow-sm" type="submit" name="ubah" style="font-size: 14px; margin-right: 13px;"><i class="bi bi-pencil-square"></i> Ubah Data</button>
                        <a href="../index.php"><button class="btn btn-info text-light" type="button" style="font-size: 14px;">Kembali</button></a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Form Tambah Data -->

    <footer class="footer">
        <div class="container">
            <p class="text-center py-auto">Yudha Permana. Copyright 2022.</p>
        </div>
    </footer>
</body>

</html>