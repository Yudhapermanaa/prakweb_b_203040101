<?php

require 'functions.php';
$buku = query("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Halaman Admin</title>
     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
     <link rel="stylesheet" href="../css/style.css">
</head>

<body>
     <!-- Navbar -->
     <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow-sm py-auto bg-white">
          <div class="container">
               <a class="navbar-brand">
                    YUDHA<span class="span">Book.com </span>
               </a>
               <div class="input-group" style="width: 400px;">
                    <input type="search" class="form-control" placeholder="Username" style="background-color: aquamarine;">
                    <span class="input-group-text" style="background-color: aquamarine;"><i class="bi bi-search"></i></span>
               </div>
               <ul class="navbar-nav">
                    <li class="nav-item">
                         <a class="nav-link text-capitalize" href="">Masuk</a>
                    </li>
               </ul>
          </div>
     </nav>
     <!-- Akhir Navbar -->

     <!-- Table -->
     <section id="table-produk" class="list-produk">
          <div class="container">
               <h2 class="mb-3 text-center" style="color: rgb(49, 0, 165);">List Produk Buku</h2>
               <!-- <hr class="hr-produk" style="margin-top: 15px; margin-bottom: 50px;"> -->
               <div class="kotak-tabel rounded-3">
                    <a href="tambah.php" class="btn btn-primary shadow-sm mb-3" style="font-size: 14px;"><i class="bi bi-plus-circle"></i> Tambah Data</a>
                    <table class="table table-bordered text-center">
                         <thead style="background-color: rgb(132, 110, 255); color: white;">
                              <tr>
                                   <th class="text-center" width="4%">No</th>
                                   <th width="120px">Judul</th>
                                   <th width="120px">Penulis</th>
                                   <th width="120px">Penerbit</th>
                                   <th width="95px">Tanggal Terbit</th>
                                   <th>Deskripsi</th>
                                   <th>Gambar</th>
                                   <th width="60px">Aksi</th>
                              </tr>
                         </thead>

                         <?php $i = 1; ?>
                         <?php foreach ($buku as $b) : ?>
                              <tr class="bg-white">
                                   <td class="text-center"><?= $i; ?></td>
                                   <td><?= $b['judul_buku']; ?></td>
                                   <td><?= $b['penulis_buku']; ?></td>
                                   <td><?= $b['penerbit_buku']; ?></td>
                                   <td><?= $b['tanggal_terbit']; ?></td>
                                   <td><?= $b['deskripsi_buku']; ?></td>
                                   <td class="text-center"><img src="../assets/img/buku/<?= $b['gambar']; ?>" alt="" width="80" height="120"></td>
                                   <td class="text-center" style="font-size: 16px;">
                                        <a href="ubah.php?id=<?= $b['id'] ?>"><i class="bi bi-pencil-square"></i></a>
                                        <a href="hapus.php?id=<?= $b['id'] ?>" onclick="return confirm('Yakin akan dihapus??')"><i class=" bi bi-trash"></i></a>
                                   </td>
                              </tr>
                              <?php $i++; ?>
                         <?php endforeach; ?>
                    </table>
               </div>
          </div>
     </section>

     <footer class="footer">
          <div class="container">
               <p class="text-center py-auto">Yudha Permana. Copyright 2022.</p>
          </div>
     </footer>

</body>

</html>