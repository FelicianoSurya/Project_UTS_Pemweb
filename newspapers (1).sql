-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2021 pada 14.17
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newspapers`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `subjudul` varchar(100) NOT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `tanggal_publikasi` date DEFAULT NULL,
  `gambar` longtext DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `subjudul`, `penulis`, `deskripsi`, `tanggal_publikasi`, `gambar`, `id_kategori`, `username`) VALUES
(8, 'Berita 1', 'Andi menjadi pemimpin upacara untuk 17 agustusan', 'Felicanio', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2021-10-05', '/Assets/images/berita/madelynn-woods-7MiYEXgnqBg-unsplash.jpg', 2, 'admin'),
(9, 'Berita 2', 'Kevin Mati diterkam harimau kemarin jam 10 pagi', 'Fernando', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2021-10-03', '/Assets/images/berita/pathum-danthanarayana-t8TOMKe6xZU-unsplash.jpg', 3, 'admin'),
(10, 'Berita 3', 'Ekspor barang dari Sumatera Utara (Sumut) ke China mencapai US$166,18 juta pada Agustus 2021. Porsin', 'Dea', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2021-10-11', '/Assets/images/berita/damian-markutt-IsUFGqxI5Ck-unsplash.jpg', 4, 'admin'),
(11, 'Berita 4', 'Indahnya berbagi kebahagiaan bersama semua orang yang capek sama uts', 'Lifosmin', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2021-08-31', '/Assets/images/berita/pathum-danthanarayana-7xMpOEQWpno-unsplash.jpg', 3, 'admin'),
(12, 'Berita 5', 'hadu kok keren banget ini dunia, banyak tugas, banyak project', 'Feliciano', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2021-10-03', '/Assets/images/berita/damian-markutt-vaG8rOJLDHo-unsplash.jpg', 3, 'admin'),
(13, 'Charlie Frederico mati ditelan bumi', 'hey kamu gimana sekarang kabarnya, aku lelah sama kebiasaan sekarang', 'Charlie', 'MAMPUS CHARLIE MATI DITELAN BUMI', '2021-10-05', '/Assets/images/berita/madelynn-woods-7MiYEXgnqBg-unsplash.jpg', 2, 'admin'),
(14, 'Test Summernote', 'Feliciano', 'Test Summernote gaes', '<p>halo <u><i>gaes mau coba test summernote</i></u></p><p><br></p><p>keren banget</p>', '2021-10-01', '/Assets/images/berita/846502.jpg', 2, 'admin'),
(15, 'lala', 'test', 'test', '<p>ffff</p>', '2021-10-01', '/Assets/images/berita/846482.jpg', 3, 'admin'),
(16, 'highlight test', 'lla', 'laala', '<p>sss</p>', '2021-10-12', '/Assets/images/berita/846467.jpg', 2, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees`
--

CREATE TABLE `employees` (
  `username` varchar(50) NOT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `highlight`
--

CREATE TABLE `highlight` (
  `id` int(11) NOT NULL,
  `id_berita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `highlight`
--

INSERT INTO `highlight` (`id`, `id_berita`) VALUES
(4, 8),
(6, 12),
(7, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Sport'),
(2, 'Covid-19'),
(3, 'Politik'),
(4, 'Bencana Alam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `komentar` longtext DEFAULT NULL,
  `tanggal_komentar` date DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `id_berita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `komentar`, `tanggal_komentar`, `username`, `id_berita`) VALUES
(1, 'bagus sekali websitenya, saya kasih nilai 100', '2021-10-03', 'feliciano', 10),
(7, 'keren banget beritanya. sangat inspiratif', '2021-10-05', 'feliciano', 10),
(11, 'haloo feliciano', '2021-10-05', 'nando', 10),
(20, 'keren banget beritanya', '2021-10-07', 'feliciano', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `likes`
--

CREATE TABLE `likes` (
  `username` varchar(50) NOT NULL,
  `id_komentar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `likes`
--

INSERT INTO `likes` (`username`, `id_komentar`) VALUES
('feliciano', 1),
('feliciano', 11),
('feliciano', 20),
('nando', 1),
('nando', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `image` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`username`, `first_name`, `last_name`, `jenis_kelamin`, `birth_date`, `image`) VALUES
('feliciano', 'Feliciano', 'Surya', 'L', '2021-10-12', '/Assets/images/profile/1599665802234.jpg'),
('nando', 'Fernando', 'Khorasani', 'L', '2021-10-14', '/Assets/images/profile/activity diagram-Page-3.drawio.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','pengguna','karyawan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `role`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('feliciano', '202cb962ac59075b964b07152d234b70', 'pengguna'),
('nando', '45a9a31e5f1ff59621b681a5edbffe85', 'pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `utama`
--

CREATE TABLE `utama` (
  `id` int(11) NOT NULL,
  `id_berita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `utama`
--

INSERT INTO `utama` (`id`, `id_berita`) VALUES
(4, 9),
(5, 10),
(6, 15);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `beritaeditor_ibfk_1` (`username`);

--
-- Indeks untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `highlight`
--
ALTER TABLE `highlight`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indeks untuk tabel `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`username`,`id_komentar`),
  ADD KEY `id_komentar` (`id_komentar`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `utama`
--
ALTER TABLE `utama`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_berita` (`id_berita`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `highlight`
--
ALTER TABLE `highlight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `utama`
--
ALTER TABLE `utama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `beritaeditor_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Ketidakleluasaan untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Ketidakleluasaan untuk tabel `highlight`
--
ALTER TABLE `highlight`
  ADD CONSTRAINT `highlight_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id`);

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id`);

--
-- Ketidakleluasaan untuk tabel `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_komentar`) REFERENCES `komentar` (`id`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Ketidakleluasaan untuk tabel `utama`
--
ALTER TABLE `utama`
  ADD CONSTRAINT `utama_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
