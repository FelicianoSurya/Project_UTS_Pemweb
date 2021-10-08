-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Okt 2021 pada 16.14
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
(8, 'Covid-19 Spanyol untuk Pertama Kalinya di \"Rendah\"', 'Jumlah kasus Covid-19 di Spanyol turun di bawah angka 50 kasus per 100.000 orang pada Kamis (7/10/20', 'Sintia Margareth', '<p style=\"font-family: Montserrat, sans-serif; font-size: 11pt; line-height: 20pt !important;\">Jumlah kasus Covid-19 di Spanyol turun di bawah angka 50 kasus per 100.000 orang pada Kamis (7/10/2021), ambang batas yang dianggap sebagai \"risiko rendah\" oleh kementerian kesehatan untuk pertama kalinya dalam setahun lebih.</p><p style=\"font-family: Montserrat, sans-serif; font-size: 11pt; line-height: 20pt !important;\">Lebih dari tiga perempat penduduk Spanyol kini sudah menerima vaksin Covid-19 lengkap dan sebagian besar pembatasan sosial baru-baru ini telah dihapus, meski kewajiban penggunaan masker masih berlaku di ruangan tertutup.</p><p style=\"font-family: Montserrat, sans-serif; font-size: 11pt; line-height: 20pt !important;\">Kementerian Kesehatan pada Kamis mencatat, penambahan 1.807 kasus sehingga totalnya menjadi 4,97 juta kasus sejak pandemi mulai merebak. Jumlah korban meninggal naik 23 menjadi 86.701 jiwa.</p><p style=\"font-family: Montserrat, sans-serif; font-size: 11pt; line-height: 20pt !important;\">Tingkat infeksi yang diukur selama 14 hari terakhir turun menjadi 49 kasus per 100.000 orang, menurut data tersebut, turun di bawah angka 50 kasus untuk pertama kalinya sejak 27 Juli 2020.</p><p style=\"font-family: Montserrat, sans-serif; font-size: 11pt; line-height: 20pt !important;\">Pada saat itu, Spanyol baru saja terbebas dari salah satu penguncian terketat di Eropa, langkah yang sedikit mengurangi jumlah kasus baru.</p><p style=\"font-family: Montserrat, sans-serif; font-size: 11pt; line-height: 20pt !important;\">Akan tetapi, penularan virus langsung kembali marak dan menginfeksi jutaan orang selama empat gelombang beruntun hingga membuat jumlah kasus mencapai puncaknya menjadi 900 kasus per 100.000 orang pada akhir Januari, sebelum gerakan vaksinasi dilancarkan secara besar-besaran.</p>', '2021-10-08', '/Assets/images/berita/SpanyolCovid.jpg', 2, 'kevin'),
(9, 'Covid di Jakarta Sudah Terkendali', 'Gubernur DKI Jakarta Anies Baswedan Temui Presiden Joko Widodo. ', 'Sigid Kurniawan', '<span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Gubernur DKI Jakarta Anies Baswedan menemui Presiden Joko Widodo di Istana Kepresidenan, Jakarta. Anies datang tepat setelah Jokowi mengadakan rapat terbatas soal pandemi virus corona (Covid-19).</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Kepada awak media massa, Anies mengaku membahas penanganan pandemi Covid-19 bersama Jokowi. Ia melaporkan kondisi pandemi Covid-19 di DKI saat ini.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">\"Update aja atas pandemi Jakarta. Alhamdulillah kondisinya sudah terkendali,\" kata Anies usai pertemuan, dikutip dari rekaman video yang diterima, Kamis (7/10).</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Anies tak bicara banyak soal pertemuan di dalam Istana. Ia pun menyampaikan tidak ada pembahasan soal rencana pelonggaran pembatasan di DKI Jakarta.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Saat ditanya apakah pertemuan itu membahas izin Formula E di Monumen Nasional, Anies enggan menjawab. Ia memilih menaiki mobil dan pamit meninggalkan Istana.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Sebelum kedatangan Anies, Jokowi mengadakan rapat bersama sejumlah menteri. Rapat itu membahas rencana pelonggaran syarat karantina bagi orang yang baru datang dari luar negeri.</span><br>', '2021-10-07', '/Assets/images/berita/OIP (1).jpeg', 2, 'kevin'),
(10, 'Papua 2021, 24 Orang Terpapar Covid-19  ', 'Tes swab Covid-19 untuk mendeteksi infeksi virus corona untuk hentikan pandemi Covid-19.', 'Josephus Primus', '<p><span style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px;\">Pengurus Besar (PB) PON XX Papua 2021 menyebut dalam data terkininya bahwa ada 24 orang terpapar Covid-19. \"Mereka terdiri dari atlet, pelatih, wasit, dan panitia pelaksana,\" kata pernyataan PB PON XX Papua 2021, Kamis (7/10/2021).</span></p><p><span style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px;\">Secara rinci, mereka yang terpapar berasal dari Kota Jayapura sebanyak 10 orang, Kabupaten Jayapura (7), Kabupaten Mimika (3), dan Kabupaten Merauke (4). Sementara itu, Badan Nasional Penanggulangan Bencana (BNPB) hingga Kamis (7/10/2021) mencatat ada sembilan kontingen pada PON XX Papua 2021 terpapar Covid-19.</span></p><p><span style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px;\">Para korban terpapar berasal dari DKI Jakarta, Sumatra Utara, Jawa Tengah, Jambi, Yogyakarta, Bali, Kalimantan Tengah, Kalimantan Timur, dan Papua. PON XX Papua 2021 berlangsung pada 2-15 Oktober 2021.</span><br style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px;\"></p><p><span style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px;\">Ada empat klaster penyelenggsrs yakni Kota Jayapura, Kabupaten Jayapura, Kabupaten Mimika, dan Kabupaten Merauke. Catatan BNPB juga menunjukkan ada delapan cabang olahraga menjadi sumber paparan kasus baru Covid-19.</span><br style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px;\"><br style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px;\">Asep menambahkan, 29 orang tersebut sudah mendapat tindakan dan penanganan langsung oleh Kemmenterian Kesehatan. \"Semua sudah kami isolasi dan mereka mendapatkan perawatan,\" kata Asep Chaerudin.</span><br></p>', '2021-10-11', '/Assets/images/berita/damian-markutt-IsUFGqxI5Ck-unsplash.jpg', 2, 'kevin'),
(11, 'Putin Undang Taliban Hadiri Forum Afghanistan ', 'Meski menaruh kekhawatiran soal Taliban, Rusia menjadi salah satu negara yang mulai melirik untuk me', 'News Paper ', '<span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Utusan khusus Presiden Vladimir Putin, Zamir Kabulov, menuturkan Rusia&nbsp;akan mengundang perwakilan Taliban&nbsp;dalam dialog internasional soal Afghanistan&nbsp;di Moskow.&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Kabulov menuturkan pertemuan itu akan digelar sekitar 20 Oktober mendatang.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Dikutip kantor berita Rusia via Reuters, Kabulov juga tak memberikan rincian terkait tujuan dan detail lainnya terkait pertemuan tersebut.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Namun, ini bukan pertama kalinya Rusia menggelar forum internasional tentang Afghanistan. Pada Maret lalu, Moskow juga menjadi tuan rumah konferensi internasional tentang Afghanistan.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Dalam konferensi itu, Rusia, Amerika Serikat, China, dan Pakistan merilis pernyataan bersama yang menyerukan Afghanistan yang saat itu masih dirundung konflik sipil untuk mencapai kesepakatan rekonsiliasi nasional dan menghentikan kekerasan.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Keempat negara itu juga meminta Taliban tak meluncurkan serangan apa pun di musim semi dan musim panas tahun ini</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Sejak itu, AS dan sekutunya mulai menarik pasukan dari Afghanistan sebagai bagian dari kesepakatan pada 2020 lalu.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Penarikan pasukan itu pun menjadi awal manuver &nbsp;Taliban mengambil alih kekuasaan dari tangan pemerintah Afghanistan dengan cepat pada 15 Agustus lalu.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Sejak Taliban kembali berkuasa, Rusia berulang kali menegaskan kekhawatirannya terkait kemungkinan kelompok militan di Afghanistan menyusup ke negara tetangga, terutama bekas pecahan Uni Soviet yang kini sekutu Moskow.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Rusia juga telah mengadakan latihan militer dengan Tajikistan dan Uzbekistan tak lama setelah Taliban mengklaim kembali berkuasa lagi.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Pada kamis (7/10) Putin juga bertelepon dengan Presiden Tajikistan Emomali Rakhmon. Kedua presiden membahas situasi keamanan seputar perkembangan terakhir di Afghanistan.</span><br>', '2021-08-17', '/Assets/images/berita/FIDESZ-Orbán-politics-Hungary.jpg', 3, 'kevin'),
(12, 'Presiden Tsai Ing-wen: Taiwan Tak Ingin Perang ', 'Presiden Taiwan Tsai Ing-wen ingin menjaga stabilitas dan perdamaian di Selat Taiwan hingga Laut Chi', 'Dukian Sandi', '<span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Presiden Taiwan Tsai Ing-wen menegaskan bahwa negaranya tidak mencari konfrontasi militer dengan siapa pun, termasuk China.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Walaupun begitu, Tsai bersumpah negaranya akan melakukan apa pun untuk mempertahankan kedaulatan dan kebebasannya.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">\"Taiwan tidak mencari konfrontasi militer,\" kata Tsai dalam forum keamanan di Taipei, Jumat (8/10). </span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">\"Taiwan berharap hidup berdampingan secara damai, stabil, dapat diprediksi, dan saling menguntungkan dengan tetangganya. Namun, Taiwan juga akan melakukan apa pun untuk mempertahankan kebebasan dan cara hidup demokratisnya,\" papar perempuan 65 tahun itu menambahkan.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Baru-baru ini, Menteri Luar Negeri Taiwan, Joseph Wu, bahkan menyatakan kesiapan negaranya untuk berperang melawan China setelah Negeri Tirai Bambu dapat meluncurkan invasi ke wilayah itu dalam beberapa tahun mendatang.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">\"Tetapi ini juga membawa ketegangan baru dan kontradiksi sistemik yang dapat berdampak buruk pada keamanan internasional dan ekonomi global jika tidak ditangani dengan hati-hati,\" ucap Tsai. </span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Tsai menegaskan Taiwan akan bekerja sama dengan negara di kawasan lainnya untuk memastikan stabilitas itu tercapai.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">\"Taiwan berkomitmen penuh untuk berkolaborasi dengan pemain regional dalam mencegah konflik bersenjata di China Timur, Laut China Selatan, dan di Selat Taiwan,\" kata Tsai. </span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Sebelumnya, Menteri Pertahanan Taiwan, Chiu Kuo-cheng, mengatakan China dapat melakukan invasi skala besar pada 2025 terhadap Taiwan.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Di hadapan parlemen, Chiu mengatakan bahwa China sebenarnya sudah punya kemampuan untuk menginvasi Taiwan sekarang ini. Namun, China baru bisa melakukan invasi \"skala penuh\" pada 2025.</span><br>', '2021-10-10', '/Assets/images/berita/R (4).jpeg', 3, 'kevin'),
(13, 'Ramai Rumakiek Langganan Cetak Gol ', 'Kondisi saat permainan berlangsung.', 'Charlie Jayaputra', '<span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Ramai Rumakiek&nbsp;mencetak gol debut di Timnas Indonesia, mengulang torehan ketika pemuda 19 tahun itu melakoni laga pertama di Persipura Jayapura.</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">&nbsp;Ramai menjadi perhatian usai mencetak gol dalam laga debut di Timnas Indonesia pada pertandingan playoff kualifikasi Piala Asia 2023 melawan Taiwan, Kamis (7/10) malam.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Gol pembuka kemenangan Indonesia atas Taiwan melambungkan namanya. Ramai memperkenalkan diri dengan cara yang berkelas. Satu pertandingan dan satu gol untuk Timnas Indonesia.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Ramai merupakan pemain baru Tim Mutiara Hitam. Di bawah arahan pelatih Jacksen F Tiago, Ramai muncul sebagai salah satu pemain di lini depan sepeninggal Boaz Solossa.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Pada laga debut melawan Persita Tangerang di Liga 1 2021, Ramai mencetak satu gol yang membuat skor menjadi imbang 1-1 sebeum Persita kembali mencetak gol kemenangan.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Gol pada laga pertama tersebut membuat Ramai kembali mendapat kepercayaan sebagai starter dalam dua laga berikutnya.</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Bersama Persipura, Ramai sudah lima kali bermain dengan 287 menit bermain dan melesakkan satu gol.&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Jika sudah pulih dari cedera, Ramai punya kesempatan besar kembali bermain pada laga kedua menghadapi Taiwan, Senin (11/10).</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br>', '2021-07-26', '/Assets/images/berita/R.jpeg', 1, 'kevin'),
(15, 'Gempa Australia Terkuat dari 50 Tahun Terakhir ', 'BMKG menyebut gempa magnitudo 6.0 yang mengguncang Melbourne merupakan gempa terkuat dalam 50 tahun ', 'Albert Anthony', '<p><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Badan Meteorologi, Klimatologi, dan Geofisika (BMKG) menyebut gempa bumi berkekuatan 6,0 magnitudo yang melanda wilayah dekat Melbourne, Australia, pada Rabu (22/9), merupakan gempa terkuat selama 50 tahun terakhir.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">\"Gempa ini adalah yang terbesar yang pernah terjadi di Victoria dalam kurun waktu 50 tahun terakhir,\" kata Kepala Mitigasi Gempa dan Tsunami BMKG, Daryono, kepada CNNIndonesia.com melalui keterangan tertulis, Rabu (22/9).</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Gempa berkekuatan 5,9 terjadi pada pagi hari Rabu 22 September 2021 pukul 07.15 WIB dengan pusat gempa di dekat Mansfield di Victoria.</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Gempa kerak dangkal atau shallow crustal earthquake ini dilaporkan mengguncang wilayah yang sangat luas di bagian tenggara Benua Australia.</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Daryono mengatakan episenter gempa ini terletak pada koordinat 146,35 Bujur Timur dan 37.49 Lintang Selatan tepatnya di darat sebelah selatan Kota Mansfield dengan kedalaman 10 kilometer.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Peta dampak guncangan gempa atau ShakeMap menunjukkan bahwa guncangan gempa mencapai Melbourne bagian timur bahkan hingga di Canberra. Gempa ini dilaporkan banyak menimbulkan kerusakan di Kota Woods Point termasuk di pinggiran kota Melbourne.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Menurut Daryono, berdasarkan hasil monitoring BMKG terdapat beberapa aktivitas gempa susulan atau aftershocks pasca terjadinya gempa utama atau mainshock.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Lebih lanjut, Daryono juga mengatakan bahwa aktivitas gempa kuat tersebut sangat menarik untuk dicermati karena Australia pada umumnya merupakan benua yang stabil.</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Tetapi bagaimanapun lempeng benua dapat mengalami tekanan tektonik dari lempeng tektonik lainnya sehingga dapat mereaktivasi jalur sesar aktif.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">\"Dugaan kuat bahwa akumulasi energi tektonik pemicu gempa ini berkaitan dengan dorongan Lempeng Pasifik yang menekan bagian Australia tenggara,\" imbuh Daryono.</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Sebelumnya, gempa bumi melanda wilayah dekat Melbourne, Australia, pada Rabu (22/9), memicu kepanikan dan menyebabkan kerusakan bangunan.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Warga di Melbourne pun panik dan langsung berlarian keluar gedung ketika gempa terjadi, salah satunya Zume Phim.</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Foto dan rekaman video yang beredar di media sosial menunjukkan puing-puing menghalangi salah satu jalan utama di Melbourne.</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Sementara itu, warga di bagian utara kota juga mengeluhkan listrik padam. Beberapa mengatakan mereka sudah dievakuasi dari gedung.</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Gempa juga dirasakan hingga Kota Adelaide, negara bagian Australia Selatan, dan Sydney di negara bagian New South Wales.</span><br></p>', '2021-09-23', '/Assets/images/berita/KerrySieh_Padang_Earthquake2004.jpg', 4, 'kevin'),
(16, 'Gunung Ile Lewotolok di NTT Erupsi ', 'Gunung Ile Lewotolok di NTT meletus, Selasa (5/10).  ', 'Sudirma Jojo', '<p><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Bandara Wonopito, Lewoleba di Pulau Lembata, Kecamatan Nubatukan, Kabupaten Lembata,&nbsp;Nusa Tenggara Timur ditutup imbas dari erupsi dan aktivitas Gunung Ile Lewotolok.&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">\"Penutupan bandar udara adalah dampak dari erupsi dan aktivitas Gunung Ile Lewotolok. Sebagai informasi penting, material abu vulkanik (volcanic ash) dapat merusak pesawat udara, sehingga membahayakan penerbangan,\" kata Corporate Communications Strategic of Wings Air, Danang Mandala Prihantoro, Selasa (5/10).</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Ia menyebut kondisi terganggunya operasional dari akibat gunung meletus termasuk force majeure yaitu keadaan yang terjadi di luar kemampuan sumber daya manusia dan perusahaan.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">\"Wings Air selalu memprioritaskan aspek keselamatan dan keamanan sehingga dampak yang kemungkinan timbul dari kondisi tersebut dapat diminimalisir dan diantisipasi sedini mungkin (lebih awal),\" ucapnya.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Terkait itu, ia menyatakan, pihaknya memberikan solusi kepada seluruh pelanggan yang terkena dampak. Solusi itu, kata Danang, antara lain penjadwalan ulang keberangkatan di hari berikutnya (reschedule) dan melakukan pengembalian dana (refund) sesuai aturan yang berlaku.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">\"Operasional penerbangan Wings Air akan menyesuaikan (melayani atau terbang kembali) menurut keputusan otoritas bandar udara dan bandar udara tujuan dinyatakan aman untuk lepas landas serta mendarat (safe for flight),\" ujar dia.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Subkoordinator Mitigasi Gunungapi Wilayah Timur Indonesia, PVMBG Devy Kamil Syahbana&nbsp;menyebut Gunung&nbsp;Ile Lewotolok di Pulau Lembata&nbsp;sedang dalam fase erupsi sejak 27 November 2020 atau sudah hampir satu tahun.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">\"Kalau angin kebetulan sedang mengarah ke bandara maka abu kemungkinan akan melanda bandara dan mau tidak mau bandara akan ditutup sesuai SOP keselamatan penerbangan,\" kata dia.</span><br></p>', '2021-01-05', '/Assets/images/berita/Volcano.jpg', 4, 'kevin'),
(18, 'Pau Gasol Resmi Pensiun ', 'Pau Gasol resmi menyatakan pensiun dari bola basket profesional. ', 'Christian Ronaldi', '<p><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Atlet bola basket asal Spanyol yang sempat memperkuat beberapa tim NBA, Pau Gasol, resmi menyatakan pensiun pada usia 41 setelah berkarier selama lebih dari dua dekade.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Gasol menyudahi karier selama 23 tahun yang dirintis dari Spanyol dan kemudian menuju Amerika Serikat.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Mantan pemain Los Angeles Lakers itu mengumumkan pensiun dalam sebuah konferensi pers di teater Liceu Barcelona.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Gasol adalah salah satu talenta besar yang dimiliki Spanyol. Pemain yang bisa menempati posisi sebagai center atau power forward itu mengawali karier profesional di tim Barcelona pada 1998.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Setelah bermain bersama Barcelona, Gasol kemudian bergabung dengan Memphis Grizzlies di NBA pada 2001 hingga 2008. Pada 2002, Gasol mendapat predikat Rookie of the year.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Pau Gasol&nbsp;ketika menyatakan pensiun dari olahraga yang membesarkan namanya selama ini. (REUTERS/ALBERT GEA)</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Kariernya kemudian menanjak ketika bergabung dengan Lakers pada 2009. Bersama Lakers, Gasol merasakan gelar juara NBA pada 2009 dan 2010.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Selain gelar bergengsi tersebut, Gasol juga enam kali masuk ke tim NBA All Star.</span><br></p>', '2021-01-14', '/Assets/images/berita/gators-ncaa-team.jpg', 1, 'kevin'),
(22, 'Amsterdam Berseluncur di Kanal yang Membeku', 'Untuk yang pertama kali sejak 2018 kanal Prinsengracht, di Amsterdam, Belanda, membeku. Warga langsu', 'Angelo Bernardi', '<p><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Lusinan orang mendatangi kanal Prinsengracht, Amsterdam, Belanda, pada akhir pekan kemarin ketika cuaca beku yang mencengkeram Eropa membekukan permukaan air di sana untuk yang pertama kalinya sejak 2018.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Orang-orang meluncur dengan sepatu ice skating (seluncur es) di atas permukaan kanal yang membeku di antara dua jembatan yang dekat dengan ikon Gereja Westerkerk.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Seorang pria bahkan terlihat berseluncur di atas permukaan es dengan naik dek skateboard tanpa roda. </span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Seorang warga, Marc Burkett, menggambarkan suasana itu sebagai \"pengalaman unik yang hanya terjadi sekali dalam beberapa tahun\" saat ia mengenakan sepatu ice skating dan turun ke kanal untuk berseluncur.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Orang tua terlihat menarik kereta luncur yang ditumpang anak-anak mereka, ada juga yang datang untuk bermain hoki, bahkan anjing juga terlihat kegirangan saat bermain es.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Asosiasi skating dan otoritas lokal meminta orang-orang untuk turun ke es di dekat rumah mereka untuk menghindari kerumunan berlebih di danau-danau yang populer, demi jarak sosial di tengah penguncian wilayah untuk menekan angka penularan dan kematian akibat virus Corona di Negara Kincir Angin.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Lebatnya salju yang turun nyatanya sempat membuat repot pengelola transportasi umum.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Layanan kereta sempat ditangguhkan dan Bandara Schiphol Amsterdam memperingatkan penumpang tentang kemungkinan pembatalan penerbangan.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Kantor meteorologi Belanda KNMI juga sempat menaikkan peringatan cuacanya menjadi kode merah untuk seluruh kawasan.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Per Senin (1/3), suhu udara di Amsterdam tercatat 4 derajat Celcius.</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">KNMI juga memberi peringatan cuaca menjadi kode kuning, karena diperkirakan akan sangat berkabut di sebagian besar kawasan.</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Jarak pandang akan kurang dari 200 meter, yang dapat menyebabkan kondisi berkendara yang berbahaya.</span><br></p>', '2021-03-01', '/Assets/images/berita/pexels-melvin-wahlin-3741382.jpg', 1, 'kevin');
INSERT INTO `berita` (`id`, `judul`, `subjudul`, `penulis`, `deskripsi`, `tanggal_publikasi`, `gambar`, `id_kategori`, `username`) VALUES
(23, 'Sepeda Gresik Bakal Guncang Tokyo ', 'Sepeda Thrill. (Foto: ANTARA FOTO/Zabur Karuru) ', 'Zabur Karuru', '<p><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Produsen&nbsp;sepeda asal Gresik, Jawa Timur Thrill Bicycle dilaporkan akan mengguncang pagelaran Olimpiade Tokyo, yang dimulai Juli hingga Agustus 2021.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Marketing Promotion Thrill Bicycle Nita Yuliana mengatakan sepeda Thrill merupakan hasil karya anak bangsa, yaitu mulai desain hingga produksinya.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">\"Semua [sepeda] dikerjakan oleh tim dari dalam negeri. Dari mulai desain sampai produksi,\" ujar Nita kepada CNNIndonesia.com, Kamis (17/6).</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Menurut Nita Thrill Bicycle telah mengikuti kejuaraan dunia seperti BMX International Championship 2021, Asian Games 2018 dan Olimpiade Rio 2016.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Kini, divisi BMX race dari Thrill Factory Racing dilaporkan telah meloloskan dua pembalapnya, yakni Vineta Petersone (Latvia) dan Axelle Etienne (Prancis) ke Olimpiade Tokyo, Jepang.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Dalam pengembangannya, kata dia, Thrill Bicycle dipadu dengan riset dari tim pengembangan atlet balap nasional dan internasional.&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Nita menjelaskan salah satu produk yang menjadi andalan dalam kejuaraan BMX yakni Thrill Havoc.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Nita mengklaim&nbsp;produk Thrill kerap dilibatkan di berbagai event sepeda dari level nasional seperti Pekan Olahraga Nasional (PON) hingga Olimpiade. Produk itu diklaim memiliki akselerasi tercepat di kelasnya.&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Di samping itu, ia menjelaskan Thrill Bicycle tidak hanya mengembangkan produk untuk BMX saja, melainkan jenis Mountain Bike dan Roadbike.</span><br></p>', '2021-06-18', '/Assets/images/berita/imageForSharing.jpg', 1, 'kevin'),
(24, 'Lima Negara Bela Taiwan ', 'Sejumlah kabar meramaikan berita internasional Kamis (7/10), salah satunya sejumlah negara terlihat ', 'Ariana Madena', '<p><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Sejumlah kabar meramaikan berita internasional, mulai dari negara-negara terlihat membela&nbsp;Taiwan di tengah ancaman China hingga&nbsp;Taliban menangkap empat anggota ISIS.</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">1. Gerak-gerik Lima Negara Bela Taiwan Lawan China</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Meski tak menjalin hubungan diplomatik resmi, sejumlah negara kini mulai menunjukkan gerak-gerik membela Taiwan &nbsp;di tengah peningkatan provokasi China.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Amerika Serikat sebagai rival bebuyutan China memimpin \"blok\" ini. Di samping AS, ada pula para sekutunya yang sudah menunjukkan gelagat membela Taiwan, seperti Inggris, Australia, Prancis, dan Jepang.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">AS, Inggris, dan Jepang, belakangan menggelar latihan militer bersama di perairan Okinawa, yang terletak di utara Selat Taiwan. AS dan Inggris juga kerap merilis pernyataan kecaman jika militer China melakukan provokasi di Selat Taiwan.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Sementara itu, Prancis dan Inggris bahkan mengirimkan pejabatnya untuk bertemu dengan Presiden Tsai Ing-wen pada Kamis (7/10). Dalam pertemuan itu, delegasi senator Prancis dan mantan PM Australia, Tony Abbott, menyatakan dukungan mereka untuk Taiwan.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">2. Kapal Selam Nuklir AS Tabrak Benda di Laut China Selatan</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Isu Laut China Selatan juga masih menyedot perhatian. Terbaru, kapal selam bertenaga nuklir AS, USS Connecticut, dilaporkan menabrak objek di bawah air ketika melintas di LCS pada Sabtu (2/10) lalu.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Armada Pasifik AS melaporkan bahwa insiden itu mengakibatkan sejumlah pelaut terluka. Meski demikian, AS memastikan tak ada pelaut yang mengalami masalah serius.&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Hingga saat ini, belum diketahui pasti objek yang ditabrak kapal selam kelas Seawolf itu.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">3. Taliban Tangkap Empat Anggota ISIS di Dekat Kabul</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Selain isu Indo-Pasifik, Taliban juga masih menjadi sorotan. Taliban mengklaim menangkap empat anggota ISIS dalam operasi penyerbuan di salah satu kawasan di dekat Ibu Kota Afghanistan, Kabul, pada Rabu (6/10).</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Juru bicara Taliban, Zabihullah Mujahid, mengatakan bahwa operasi itu digelar di distrik Paghman. Dalam operasi itu, Taliban juga menyita sejumlah dokumen dan senjata.&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Sebagaimana dilansir Reuters, operasi ini digelar setelah serentetan insiden yang melibatkan ISIS dengan pasukan Taliban.</span><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><br style=\"-webkit-font-smoothing: antialiased; backface-visibility: hidden; color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Pada Rabu, ISIS melalui kanal Telegram menyatakan bahwa mereka menangkap dan memenggal seorang anggota Taliban di Jalalabad.&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: CNNSansW04-Regular, Arial, Helvetica, Tahoma; font-size: 14px;\">Beberapa pekan sebelumnya, ISIS juga melancarkan sejumlah serangan di Jalalabad yang menargetkan anggota Taliban. Serangan itu menewaskan sejumlah orang.</span><br></p>', '2021-10-08', '/Assets/images/berita/8747039507_0a5d0108ed_b.jpg', 3, 'kevin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees`
--

CREATE TABLE `employees` (
  `username` varchar(50) NOT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `employees`
--

INSERT INTO `employees` (`username`, `nama_depan`, `nama_belakang`) VALUES
('kevin', 'Kevin ', 'Jaya');

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
(4, 'Bencana Alam'),
(6, 'halo');

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
('kevin', '202cb962ac59075b964b07152d234b70', 'karyawan'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `highlight`
--
ALTER TABLE `highlight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
