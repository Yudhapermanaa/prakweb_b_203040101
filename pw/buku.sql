-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2022 pada 17.44
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_2022_b_203040101`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penulis_buku` varchar(100) NOT NULL,
  `penerbit_buku` varchar(100) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `deskripsi_buku` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `penulis_buku`, `penerbit_buku`, `tanggal_terbit`, `deskripsi_buku`, `gambar`) VALUES
(3, 'Dilan : Dia Adalah Dilanku Tahun 1990', 'Pidi Baiq', 'Mizan', '2016-03-10', '“Milea kamu cantik, tapi aku belum mencintaimu. Enggak tahu kalau sore. Tunggu aja.”\r\n\r\n(Dilan 1990)\r\n\r\n“Milea jangan pernah bilang ke aku ada yang menyakitimu., nanti besoknya, orang itu akan hilang.” (Dilan 1990)\r\n\r\n“Cinta sejati adalah kenyamanan, kepercayaan, dan dukungan. Kalau kamu tidak setuju, aku tidak peduli. “ (Milea 1990)', '633ef7047cfd9.jpg'),
(5, 'Perahu Kertas', 'Dewi Lestari', 'Mizan Publishing', '2016-03-10', 'Namanya Kugy. Mungil, pengkhayal, dan berantakan. Dari benaknya, mengalir untaian dongeng indah. Keenan belum pernah bertemu manusia seaneh itu .... Namanya Keenan. Cerdas, artistik, dan penuh kejutan. Dari tangannya, mewujud lukisan-lukisan magis. Kugy belum pernah bertemu manusia seajaib itu .... Dan kini mereka berhadapan di antara hamparan misteri dan rintangan. Akankah dongeng dan lukisan itu bersatu? Akankah hati dan impian mereka bertemu?', 'buku5.jpg'),
(6, 'Ayat - Ayat Cinta', 'Habiburrahman El Shirazy', 'Republika Penerbit', '2013-07-25', 'Tentang seorang pemuda Indonesia yang mencari ilmu jauh di tanah Arab. Berbekal iman yang kuat dan ketabahan, Fahri mengalami banyak hal yang menggetarkan hidupnya, yang sesaat membuat Fahri mempertanyakan jalan hidupnya.\r\n\r\nKesabaran dan keimanan adalah kunci kehidupan. Fahri, Aisyah dan Maria membuktikannya dalam cerita yang halus dan mengalir.', 'buku6.jpg'),
(8, 'Surga Yang Tak Dirindukan', 'Asma Nadia', 'Asma Nadia Publisher', '2014-06-20', 'Tak kusimpan rahasia pada Hawa\r\nmeski tak juga kuceritakan semua\r\nbahwa padanya hanya ada sedikit cinta\r\n\r\nApa artinya rumah jika tak lagi menjadi pelabuhan yang ramah bagi hati seorang suami?\r\nApa jadinya surga jika ia tak lagi dirindukan?\r\nBenarkah dongeng seorang perempuan harus mati agar dongeng perempuan lain mendapatkan kehidupan?\r\n\r\nAh.\r\nIstana yang retak-retak.\r\nPeristiwa tragis dan e-mail aneh dari gadis bernama Bulan.\r\nPertanyaan yang terus mendera : “Jika cinta bisa membuat seorang perempuan setia pada satu lelaki, kenapa cinta tidak cukup membuat lelaki bertahan dengan satu perempuan?”\r\nSementara seseorang berjuang melawan Tuhan, waktu dengan sabar menyusun keping-keping puzzle kehidupan yang terserak, lewat skenario yang rumit namun menakjubkan.', 'buku8.jpg'),
(9, 'Padang Bulan', 'Andrea Hirata', 'Bentang', '2017-03-18', 'Melalui pergolakan nasib seorang perempuan dan huru-hara kecemburuan, Andrea Hirata kembali memilih sudut yang tidak terduga untuk menampilkan kisah yang inspiratif tentang kegigihan karakter-karakter di dalam novelnya. Novel Padang Bulan bermula dari kisah seorang gadis kecil berusia 14 tahun, Enong namanya, yang sangat gemar pada pelajaran bahasa Inggris, namun secara mendadak terpaksa harus berhenti sekolah dan mengambil alih seluruh tanggung jawab keluarga. Tersambung pada sekuel novel ini, Cinta di Dalam Gelas,perjalanan nasib anak perempuan kecil itu, melalui gaya khasnya: menertawakan kepedihan, memarodikan tragedi, mengkritik tanpa menjadi sarkastik, kisah Enong menjadi seperti panggung di dalam lembaran-lembaran kertas. Membaca novel ini seperti melihat sebuah gambar.', 'buku9.jpg'),
(11, 'Matahari', 'Tere Liye', 'Penerbit Sabak Grip', '2022-09-05', 'Namanya Ali, 15 tahun, kelas X. Jika saja orangtuanya mengizinkan, seharusnya dia sudah duduk di tingkat akhir ilmu fisika program doktor di universitas ternama. Ali tidak menyukai sekolahnya, guru-gurunya, teman-teman sekelasnya. Semua membosankan baginya. Tapi sejak dia mengetahui ada yang aneh pada diriku dan Seli, teman sekelasnya, hidupnya yang membosankan berubah seru. Aku bisa menghilang, dan Seli bisa mengeluarkan petir. Ali sendiri punya rahasia kecil. Dia bisa berubah menjadi beruang raksasa. Kami bertiga kemudian bertualang ke tempat-tempat menakjubkan. Namanya Ali. Dia tahu sejak dulu dunia ini tidak sesederhana yang dilihat orang. Dan di atas segalanya, dia akhirnya tahu persahabatan adalah hal yang paling utama.', '63363b88aec39.jpg'),
(13, '1 Kos, 3 Cinta, 7 Keberuntungan', 'Astrid Tito', 'Gramedia Pustaka Utama', '2019-10-21', 'Ada apa dengan kamar nomor 7 di kosan 7? Mengapa penghuni kamar tersebut selalu berulah dan bermasalah? Linda sang perempuan kusut, pengidap skizofrenia. Renata yang diduga pelakor akibat berwajah cantik berbodi biola. Serta Bram si laki-laki kemayu yang digebukin penagih utang akibat utang kartu kredit yang menggulung hingga segunung. Lantas, bagaimana keempat sahabat: Aol-Rendy-Vika-Eda mampu membantu permasalahan para penghuni kamar kos nomor 7? Bagaimana pula kisah cinta Aol dan Rendy, Vika dan Rakai, serta Patty dan Arya? Ada misteri apa yang melibatkan Patty, sang pemilik kos-kosan dengan angka 7 dan kamar nomor 7?', '63363d7a9b404.jpg'),
(14, ' Kita Pergi Hari Ini', 'Ziggy Zezsyazeoviennazabrizkie', 'Gramedia Pustaka Utama', '2021-10-26', 'Mi dan Ma dan Mo tidak pernah melihat kucing seperti Nona Gigi. Tentu saja, mereka sudah pernah melihat kucing biasa. Tapi Nona Gigi adalah Kucing Luar Biasa. Kucing Luar Biasa berarti kucing yang di luar kebiasaan. Nona Gigi adalah Cara Lain yang dinantikan oleh Bapak dan Ibu Mo untuk menjaga Mi, Ma, dan Mo ketika keduanya keluar rumah mencari uang. Sebab di Kota Suara, semua uang yang tersedia di dasar laut sudah diambil oleh para perompak, uang di bawah tanah diambil oleh para perampok, dan uang di ranting pohon diambil oleh pengusaha kayu yang jahat.\r\n\r\nNona Gigi mengajak Mi dan Ma dan Mo dan Fifi dan Fufu—anak kembar Tetangga Baru bertualang mengunjungi tempat-tempat indah. Mereka naik Kereta Air, bertemu Kolonel Jagung, bermain di Sirkus Sendu, dan menyaksikan kemegahan Kota Terapung Kucing Luar Biasa.\r\nKita pergi hari ini. Ke tempat-tempat indah dalam mimpi-mimpi anak-anak baik-baik.', '63363e9d90a6e.jpg'),
(15, 'Bulan', 'Tere Liye', 'Penerbit Sabak Grip', '2022-09-05', 'Namanya Seli, usianya 15 tahun, kelas sepuluh, dan dia salah satu teman baikku. Dia sama seperti remaja yang lain. Menyukai hal yang sama, mendengarkan lagu-lagu yang sama, pergi ke gerai fast food, menonton serial drama, film, dan hal-hal yang disukai remaja.\r\n\r\nTetapi ada sebuah rahasia kecil Seli dan aku yang tidak pernah diketahui siapa pun. Sesuatu yang kami simpan sendiri sejak kecil. Aku bisa menghilang dan Seli bisa mengeluarkan petir.\r\n\r\nDengan kekuatan itu, kami bertualang menuju tempat-tempat yang menakjubkan.\r\n\r\nBuku kedua dari serial “BUMI”', '633655a7c3114.jpg'),
(19, 'Sunshine Becomes You', 'Ilana Tan', 'Gramedia Pustaka Utama', '2021-04-28', '“Walaupun tidak ada hal lain di dunia ini yang bisa kaupercayai, percayalah bahwa aku mencintaimu. Sepenuh hatiku.” Ini adalah salah satu kisah yang terjadi di bawah langit kota New York… Ini kisah tentang harapan yang muncul di tengah keputusasaan… Tentang impian yang bertahan di antara keraguan… Dan tentang cinta yang memberikan alasan untuk bertahan hidup. Awalnya Alex Hirano lebih memilih jauh-jauh dari gadis itu—malaikat kegelapannya yang sudah membuatnya cacat. Kemudian Mia Clark tertawa dan Alex bertanya-tanya bagaimana ia dulu bisa berpikir gadis yang memiliki tawa secerah matahari itu adalah malaikat kegelapannya. Awalnya mata hitam yang menatapnya dengan tajam dan dingin itu membuat Mia gemetar ketakutan dan berharap bumi menelannya detik itu juga. Kemudian Alex Hirano tersenyum dan jantung Mia yang malang melonjak dan berdebar begitu keras sampai Mia takut Alex bisa mendengarnya.', '633688fb0bc49.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
