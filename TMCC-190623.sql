-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 03:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmcc_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) UNSIGNED NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(255) NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tgl_berita` date NOT NULL,
  `id_kategori_berita` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `gambar_berita`, `slug_berita`, `user_id`, `tgl_berita`, `id_kategori_berita`, `created_at`, `updated_at`) VALUES
(2, 'Jokowi Beli Topi di NTT', '<p>Manggarai Barat - Presiden Joko Widodo (Jokowi) dan keluarganya meramaikan Tenun Fashion Bazar di halaman objek wisata Goa Batu Cermin, Labuan Bajo, Kabupaten Manggarai Barat, Nusa Tenggara Timur (NTT), Minggu (23/4/2023).<br />\r\nJokowi dan keluarga ikut berburu suvenir setelah berkeliling di Goa Batu Cermin. Pelaku UMKM memanggil-manggil Jokowi agar mampir ke lapak dagangan mereka yang berada di pintu keluar.<br />\r\n<br />\r\nDi sana, Jokowi mampir ke lapak yang menjual produk tenun motif Maumere, NTT. Sembari menggandeng sang cucu, Jan Ethes, Jokowi membeli satu kain tenun seharga Rp 1 juta, dan topi pantai tenun, serta bucket hat untuk Jan Ethes seharga masing-masing Rp 200 ribu.<br />\r\n&nbsp;</p>\r\n\r\n<p>Topi pantai yang dibeli Jokowi itu diproduksi Kananta Artshop Labuan Bajo.<br />\r\n<br />\r\nSementara, menantu Jokowi, Selvi Ananda yang merupakan istri Wali Kota Solo Gibran Rakabuming Raka juga mampir ke stand tersebut. Di sana, Selvi memilih membeli tas berbahan tenun motif Maumere dengan harga Rp500 ribu. Ia membeli juga gelang untuk anak perempuannya seharga Rp10 ribu.<br />\r\n<br />\r\nProduk tenun yang dipilih Selvi menggunakan pewarnaan alami. Sedangkan Gibran yang mampir di stand tersebut terpantau tidak membeli apapun.<br />\r\n<br />\r\n&quot;Ada lima produk yang dibeli Pak Jokowi. Totalnya, Rp 3 jutaan. Dibayar cash (tunai), tidak tawar menawar. Kami juga tidak menaikkan harga,&quot; tutur Rafika seusai melayani Jokowi membeli suvenirnya.<br />\r\n<br />\r\n<img alt=\"\" src=\"http://localhost:8000/images/gambar_1682522471.jfif\" style=\"height:150px; width:150px\" />&nbsp;Menurut Rafika, produk tenun yang bahan baku pewarnaanya dari tumbuh-tumbuhan atau disebut warna alam memakan waktu proses produksi tiga bulan untuk menyelesaikannya.<br />\r\n<br />\r\nRafika mengaku senang Jokowi dan keluarganya belanja di stand-nya. &quot;Senang sekali. Bapak Presiden tanya dari mana, saya jawab dari Labuan Bajo, tinggal di Labuan Bajo,&quot; imbuh dia.<br />\r\n<br />\r\nDiketahui, Jokowi dan keluarga menikmati libur Lebaran di Labuan Bajo sembari meninjau kesiapan KTT ASEAN ke-42 yang dilaksanakan pada 9-12 Mei 2023.<br />\r\n<br />\r\nJokowi tiba di Labuan Bajo, Sabtu (22/4/2023). Pukul 11.00 Wita, Jokowi dan keluarganya mengunjungi destinasi wisata Goa Batu Cermin di tengah Kota Labuan Bajo.<br />\r\n&nbsp;</p>', 'Berita20230427122145.jfif', 'jokowi-beli-topi-di-ntt', 1, '2023-04-27', 2, '2023-04-26 15:21:45', '2023-04-26 15:22:43'),
(3, 'Produk Baru Eiger', '<p>Jakarta - Kali ini EIGER memperkenalkan produk terbaru yang terinspirasi dari aktivitas militer. Harapannya produk kali ini bisa mendukung semua kegiatan ekstrim.<br />\r\nDalam jumpa media di EIGER Flagship Store Radio Dalam, Jakarta Selatan pada hati Selasa (4/4/2023) EIGER meluncurkan proyek terbaru bernama EIGER TAC. Koleksi ini dirancang untuk mereka yang mempunyai misi &#39;Know No Bounds&#39; misi dalam kehidupan sehari-hari tanpa ada ada batasan untuk mencapai tujuan.<br />\r\n<br />\r\n&quot;EIGER TAC itu mengajak kembali bahwa yang namanya batasan hanya ada dalam pikiran kita,&quot; ungkap General Manager Marketing EIGER Riadi Suwarno.<br />\r\n<br />\r\nRiadi juga mengatakan, benang merah dari seluruh aktivitas EIGER, termasuk dalam pengembangan EIGER TAC adalah tentang nature, people dan innovation.<br />\r\n<br />\r\n&quot;Inovasi terus dikerjakan oleh segenap tim EIGER untuk aktivitas luar ruang yang sangat ekstrem yakni aktivitas military. Tujuan kami mengembangkan EIGER TAC, dengan semangat adventure dan eksplorasi untuk mencapai standar yang lebih tinggi lagi, bukan hanya aman dan nyaman untuk berkegiatan luar ruang, namun juga tangguh dan andal,&quot; jelas Riadi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Sejalan dengan tagline yakni #KNOWNOBOUNDS atau tak mengenal batas, EIGER TAC percaya bahwa manusia bisa melampaui batasan-batasan konvensional, berusaha menggali potensi mereka sepenuhnya. Dengan tekad dan ketekunan, segala sesuatu mungkin terjadi.<br />\r\n<br />\r\n&quot;EIGER TAC dibuat dengan presisi, detail dan menggunakan bahan berkualitas tinggi yang tahan terhadap kondisi terberat, menjadikannya sempurna untuk pakaian sehari-hari, atau bagi mereka yang membutuhkan pakaian tangguh dan fungsional sesuai dengan misi mereka,&quot; ujar Riadi.<br />\r\n&nbsp;</p>', 'Berita20230427110746.jpeg', 'produk-baru-eiger', 1, '2023-04-27', 2, '2023-04-27 02:07:46', '2023-04-27 02:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `id_chapter` int(10) UNSIGNED NOT NULL,
  `nama_chapter` varchar(255) NOT NULL,
  `id_region` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`id_chapter`, `nama_chapter`, `id_region`, `created_at`, `updated_at`) VALUES
(1, 'Ambon', 1, '2023-05-16 16:23:48', '2023-05-16 16:23:48'),
(2, 'Bandung', 2, '2023-05-17 02:46:05', '2023-05-17 02:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `id_community` int(10) UNSIGNED NOT NULL,
  `nama_community` varchar(255) NOT NULL,
  `id_chapter` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`id_community`, `nama_community`, `id_chapter`, `created_at`, `updated_at`) VALUES
(1, 'Vespa', 1, '2023-05-17 02:11:48', '2023-05-17 02:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kegiatans`
--

CREATE TABLE `daftar_kegiatans` (
  `id_daftar_kegiatan` int(10) UNSIGNED NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tanggal_kegiatan` date DEFAULT NULL,
  `biaya_kegiatan` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_kegiatans`
--

INSERT INTO `daftar_kegiatans` (`id_daftar_kegiatan`, `id_kegiatan`, `id`, `tanggal_kegiatan`, `biaya_kegiatan`, `created_at`, `updated_at`) VALUES
(25, 9, 5, NULL, NULL, '2023-06-18 15:31:02', '2023-06-18 15:31:02'),
(27, 8, 1, NULL, NULL, '2023-06-18 16:45:17', '2023-06-18 16:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(10) UNSIGNED NOT NULL,
  `id_kategori_dokumen` int(11) NOT NULL,
  `nama_dokumen` varchar(255) NOT NULL,
  `file_dokumen` varchar(255) NOT NULL,
  `nomor_dokumen` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `id_kategori_dokumen`, `nama_dokumen`, `file_dokumen`, `nomor_dokumen`, `created_at`, `updated_at`) VALUES
(1, 1, 'Data Akta', 'Dokumen20230426032129.xlsx', '123/Dok/Akta/2023', '2023-04-25 18:21:29', '2023-04-25 18:21:29'),
(2, 2, 'Data fhdjhfjd', 'Dokumen20230426072859.pdf', '121/dhdfjd/blablaba', '2023-04-25 22:29:00', '2023-04-25 22:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(10) UNSIGNED NOT NULL,
  `nama_galeri` varchar(50) NOT NULL,
  `kategori_galeri` varchar(30) NOT NULL,
  `gambar_galeri` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_galeri`, `kategori_galeri`, `gambar_galeri`, `created_at`, `updated_at`) VALUES
(2, 'TMCC Indonesia', 'Galeri', 'Galeri20230517123748.jpg', '2023-05-17 03:37:48', '2023-05-17 03:37:48'),
(3, 'Telkom Group Motorcycle Community Indonesia', 'Banner', 'Galeri20230517042831.jpg', '2023-05-17 07:28:31', '2023-06-17 15:57:52'),
(4, 'Galeri 1', 'Galeri', 'Galeri20230517042852.png', '2023-05-17 07:28:52', '2023-05-17 07:28:52'),
(5, 'Galeri 2', 'Galeri', 'Galeri20230517042931.jpg', '2023-05-17 07:29:31', '2023-05-17 07:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `garasis`
--

CREATE TABLE `garasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `isi_garasi`
--

CREATE TABLE `isi_garasi` (
  `id` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `merek_item` varchar(255) NOT NULL,
  `jenis_item` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `isi_garasi`
--

INSERT INTO `isi_garasi` (`id`, `id_item`, `merek_item`, `jenis_item`, `gambar`, `created_at`, `updated_at`) VALUES
(5, 1, 'KYT', '1', 'garasi20230516103133.webp', '2023-05-16 01:31:33', '2023-05-16 01:31:33'),
(6, 1, 'NGK', '1', 'garasi20230516103203.jpg', '2023-05-16 01:32:03', '2023-05-16 01:32:03'),
(7, 2, 'YAMAHA', '2', 'garasi20230516103249.jpg', '2023-05-16 01:32:49', '2023-05-16 01:32:49'),
(8, 2, 'HONDA', '2', 'garasi20230516103312.jpg', '2023-05-16 01:33:12', '2023-05-16 01:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `iuran`
--

CREATE TABLE `iuran` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `jenis_iuran` varchar(50) NOT NULL,
  `jumlah_tagihan` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `struk_pembayaran` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iuran`
--

INSERT INTO `iuran` (`id`, `user_id`, `jenis_iuran`, `jumlah_tagihan`, `status`, `jatuh_tempo`, `struk_pembayaran`, `created_at`, `updated_at`) VALUES
(9, '1', 'Iuran Bulanan', 300000, 'Belum Bayar', '2023-06-30', NULL, '2023-05-30 10:50:55', '2023-05-30 10:50:55'),
(10, '5', 'Iuran Bulanan', 300000, 'Belum Bayar', '2023-06-30', NULL, '2023-05-30 10:50:55', '2023-05-30 10:50:55'),
(11, '6', 'Iuran Bulanan', 300000, 'Menunggu Konfirmasi', '2023-06-30', 'pembayaran20230618111531.jpg', '2023-05-30 10:50:55', '2023-05-30 10:50:55'),
(12, '7', 'Iuran Bulanan', 300000, 'Lunas', '2023-06-30', 'pembayaran20230530075127.jpeg', '2023-05-30 10:50:55', '2023-05-30 10:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `id_kas` int(10) UNSIGNED NOT NULL,
  `keterangan_kas` varchar(255) NOT NULL,
  `debit_kas` double(8,2) NOT NULL,
  `kredit_kas` double(8,2) NOT NULL,
  `tanggal_kas` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_admin`
--

CREATE TABLE `kategori_admin` (
  `id_kategori_admin` int(10) UNSIGNED NOT NULL,
  `nama_kategori_admin` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_admin`
--

INSERT INTO `kategori_admin` (`id_kategori_admin`, `nama_kategori_admin`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '2023-05-02 05:33:46', '2023-05-02 05:33:46'),
(2, 'Bendahara', '2023-05-02 05:34:24', '2023-05-02 05:36:31'),
(3, 'Sekertariat', '2023-05-02 05:34:37', '2023-05-02 05:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_anggota`
--

CREATE TABLE `kategori_anggota` (
  `id_kategori_anggota` int(10) UNSIGNED NOT NULL,
  `nama_kategori_anggota` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_anggota`
--

INSERT INTO `kategori_anggota` (`id_kategori_anggota`, `nama_kategori_anggota`, `created_at`, `updated_at`) VALUES
(1, 'Anggota Biasa', '2023-05-03 00:59:10', '2023-05-03 00:59:10'),
(2, 'Anggota Luar Biasa', '2023-05-03 00:59:21', '2023-05-03 00:59:21'),
(3, 'Anggota Kehormatan', '2023-05-03 00:59:37', '2023-05-03 00:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori_berita` int(10) UNSIGNED NOT NULL,
  `nama_kategori_berita` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori_berita`, `nama_kategori_berita`, `created_at`, `updated_at`) VALUES
(1, 'Internal', '2023-04-20 06:08:08', '2023-04-20 06:08:08'),
(2, 'External', '2023-04-20 06:08:25', '2023-04-20 06:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_dokumen`
--

CREATE TABLE `kategori_dokumen` (
  `id_kategori_dokumen` int(10) UNSIGNED NOT NULL,
  `nama_kategori_dokumen` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_dokumen`
--

INSERT INTO `kategori_dokumen` (`id_kategori_dokumen`, `nama_kategori_dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Akta Pendirian', '2023-04-25 15:09:54', '2023-04-25 15:09:54'),
(2, 'Anggaran Dasar', '2023-04-25 15:10:09', '2023-04-25 15:10:09'),
(3, 'Anggaran Rumah Tangga', '2023-04-25 15:10:36', '2023-04-25 15:10:36'),
(4, 'Surat Keputusan', '2023-04-25 15:10:43', '2023-04-25 15:17:49'),
(5, 'Peraturan Organisasi', '2023-04-25 15:10:56', '2023-04-25 15:10:56'),
(6, 'Lainnya', '2023-04-25 15:11:06', '2023-04-25 15:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_garasi`
--

CREATE TABLE `kategori_garasi` (
  `id_garasi` int(11) NOT NULL,
  `merek_item` varchar(255) NOT NULL,
  `jenis_item` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_garasi`
--

INSERT INTO `kategori_garasi` (`id_garasi`, `merek_item`, `jenis_item`, `created_at`, `updated_at`) VALUES
(1, 'KYT', 'HELM', '2023-05-15 23:12:01', '2023-05-15 23:12:01'),
(2, 'YAMAHA KLX', 'MOTOR', '2023-05-15 23:12:40', '2023-05-15 23:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_garasis`
--

CREATE TABLE `kategori_garasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merek_item` varchar(255) NOT NULL,
  `jenis_item` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_iuran`
--

CREATE TABLE `kategori_iuran` (
  `id_kategori_iuran` int(11) NOT NULL,
  `jenis_kategori_iuran` varchar(50) NOT NULL,
  `nominal` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_iuran`
--

INSERT INTO `kategori_iuran` (`id_kategori_iuran`, `jenis_kategori_iuran`, `nominal`, `created_at`, `updated_at`) VALUES
(6, 'Iuran Bulanan', 300000, '2023-05-25 04:57:08', '2023-05-25 04:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_karyawan`
--

CREATE TABLE `kategori_karyawan` (
  `id_kategori_karyawan` int(10) UNSIGNED NOT NULL,
  `nama_kategori_karyawan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_karyawan`
--

INSERT INTO `kategori_karyawan` (`id_kategori_karyawan`, `nama_kategori_karyawan`, `created_at`, `updated_at`) VALUES
(1, 'Administrasi', '2023-05-04 02:41:44', '2023-05-04 02:41:44'),
(2, 'SF Indihome', '2023-05-04 02:41:54', '2023-05-04 02:41:54'),
(3, 'SPV SF Indihome', '2023-05-04 02:42:10', '2023-05-04 02:42:10'),
(4, 'SF Indibiz', '2023-05-04 02:42:22', '2023-05-04 02:42:22'),
(5, 'SPV SF Indibiz', '2023-05-04 02:42:35', '2023-05-04 02:42:35'),
(6, 'Teknisi Prov', '2023-05-04 02:42:46', '2023-05-04 02:42:46'),
(7, 'Teknisi RIFO', '2023-05-04 02:42:59', '2023-05-04 02:42:59'),
(8, 'SPV Provisioning', '2023-05-04 02:43:06', '2023-05-04 02:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_kegiatan`
--

CREATE TABLE `kategori_kegiatan` (
  `id_kategori_kegiatan` int(10) UNSIGNED NOT NULL,
  `nama_kategori_kegiatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_kegiatan`
--

INSERT INTO `kategori_kegiatan` (`id_kategori_kegiatan`, `nama_kategori_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'Rapat', '2023-04-17 20:22:52', '2023-04-17 20:22:52'),
(2, 'Bakti Sosial', '2023-04-17 20:23:21', '2023-05-31 01:27:43'),
(3, 'Lainnya', '2023-04-17 20:23:29', '2023-04-17 20:23:29'),
(4, 'Touring', '2023-05-19 02:27:50', '2023-05-19 02:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pengurus`
--

CREATE TABLE `kategori_pengurus` (
  `id_kategori_pengurus` int(10) UNSIGNED NOT NULL,
  `nama_kategori_pengurus` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_pengurus`
--

INSERT INTO `kategori_pengurus` (`id_kategori_pengurus`, `nama_kategori_pengurus`, `created_at`, `updated_at`) VALUES
(1, 'Pusat', '2023-05-02 07:19:22', '2023-05-02 07:19:22'),
(2, 'Region', '2023-05-02 07:19:32', '2023-05-02 07:19:32'),
(3, 'Chapter', '2023-05-02 07:19:40', '2023-05-02 07:19:40'),
(4, 'Community', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori_produk` int(10) UNSIGNED NOT NULL,
  `nama_kategori_produk` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori_produk`, `nama_kategori_produk`, `created_at`, `updated_at`) VALUES
(1, 'Topi', '2023-04-20 04:34:22', '2023-04-20 04:34:22'),
(2, 'Jaket', '2023-04-20 04:34:36', '2023-04-20 04:34:36'),
(3, 'Sepatu', '2023-04-20 04:35:01', '2023-04-20 04:35:01'),
(4, 'Rompi', '2023-04-20 04:35:14', '2023-04-20 04:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_sertifikat`
--

CREATE TABLE `kategori_sertifikat` (
  `id_kategori_sertifikat` int(10) UNSIGNED NOT NULL,
  `nama_kategori_sertifikat` varchar(255) NOT NULL,
  `poin` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_sertifikat`
--

INSERT INTO `kategori_sertifikat` (`id_kategori_sertifikat`, `nama_kategori_sertifikat`, `poin`, `created_at`, `updated_at`) VALUES
(1, 'Touring 5000 Km', '90', '2023-05-22 03:10:01', '2023-05-22 12:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_simpanan`
--

CREATE TABLE `kategori_simpanan` (
  `id_kategori_simpanan` int(10) UNSIGNED NOT NULL,
  `nama_kategori_simpanan` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_simpanan`
--

INSERT INTO `kategori_simpanan` (`id_kategori_simpanan`, `nama_kategori_simpanan`, `created_at`, `updated_at`) VALUES
(1, 'Pokok', '2023-04-25 16:48:10', '2023-04-25 16:48:10'),
(2, 'Wajib', '2023-04-25 16:48:16', '2023-04-25 16:48:16'),
(3, 'Sukarela', '2023-04-25 16:48:22', '2023-04-25 16:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_unit_bisnis`
--

CREATE TABLE `kategori_unit_bisnis` (
  `id_kategori_unit_bisnis` int(10) UNSIGNED NOT NULL,
  `nama_kategori_unit_bisnis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_unit_bisnis`
--

INSERT INTO `kategori_unit_bisnis` (`id_kategori_unit_bisnis`, `nama_kategori_unit_bisnis`, `created_at`, `updated_at`) VALUES
(1, 'Sales Indihome', '2023-05-04 02:16:06', '2023-05-04 02:19:23'),
(2, 'Sales Indibiz', '2023-05-04 02:16:22', '2023-05-04 02:16:22'),
(3, 'Provisioning', '2023-05-04 02:16:32', '2023-05-04 02:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_user`
--

CREATE TABLE `kategori_user` (
  `id_kategori_user` int(10) UNSIGNED NOT NULL,
  `nama_kategori_user` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_user`
--

INSERT INTO `kategori_user` (`id_kategori_user`, `nama_kategori_user`, `created_at`, `updated_at`) VALUES
(1, 'Pengurus', '2023-04-27 02:34:57', '2023-04-28 07:39:54'),
(2, 'Admin', '2023-04-27 02:35:07', '2023-04-27 02:35:07'),
(3, 'Anggota', '2023-04-27 02:35:17', '2023-04-28 07:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(10) UNSIGNED NOT NULL,
  `id_kategori_kegiatan` int(11) NOT NULL,
  `id_sub_kategori_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `deskripsi_kegiatan` text NOT NULL,
  `gambar_kegiatan` varchar(255) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `jam_kegiatan` time NOT NULL,
  `biaya_kegiatan` float DEFAULT NULL,
  `id_status_kegiatan` int(11) NOT NULL,
  `id_publish_kegiatan` int(11) NOT NULL,
  `slug_kegiatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_kategori_kegiatan`, `id_sub_kategori_kegiatan`, `nama_kegiatan`, `deskripsi_kegiatan`, `gambar_kegiatan`, `tanggal_kegiatan`, `jam_kegiatan`, `biaya_kegiatan`, `id_status_kegiatan`, `id_publish_kegiatan`, `slug_kegiatan`, `created_at`, `updated_at`) VALUES
(8, 1, 8, 'Pertemuan Bikers Chapter Ambon', '<p>Hadirlah dalam Pertemuan Bikers Chapter Ambon</p>', 'Kegiatan20230611110939.jpeg', '2023-06-11', '23:09:00', NULL, 1, 1, 'pertemuan-bikers-chapter-ambon', '2023-06-11 14:09:39', '2023-06-12 13:27:16'),
(9, 4, 14, 'Touring TMCC Chapter Ambon', '<p>Vespa World Days 2022 untuk pertama kalinya digelar di Indonesia. Tak sedikit para pencinta skuter yang rela touring dari tempat yang jauh menuju Bali untuk memeriahkan acara tersebut. Vespa World Days yang berlangsung pada 9-12 Juni 2022 menjadi salah satu momen bersejarah bagi dunia otomotif Indonesia, khususnya bagi para pencinta skuter di Tanah Air.</p>\r\n\r\n<p>Salah satu komunitas yang rela berkendara jarak jauh demi menghadiri Vespa World Days 2022 adalah Komunitas Vespa di Universitas Budi Luhur, yang tergabung dalam Kampus Scooter Budi Luhur.</p>\r\n\r\n<p>Komunitas ini diikuti oleh mahasiswa dan dosen yang sepakat untuk melakukan perjalanan dari Malang sejak 7 Juni 2022 dan sampai di Bali pada 9 Juni 2022. Kampus Scooter Budi Luhur juga memiliki misi khusus, yaitu membagikan kopi gratis, minuman dingin, dan kaos untuk pencinta Vespa yang hadir di acara berskala internasional tersebut. &ldquo;Persiapan touring Vespa World Days sudah kami persiapkan 3 bulan terakhir dengan membawa 6 Vespa dan satu mobil elf untuk mobil evakuasi. Kami juga melakukan kegiatan untuk komunitas Vespa dengan bagi-bagi kopi, minuman dingin, dan kaos,&quot; ujar Ketua BPH Yayasan Pendidikan Budi Luhur Cakti, Kasih Hanggoro, dalam keterangan resminya.<br />\r\n<br />\r\nArtikel ini telah tayang di&nbsp;<a href=\"https://www.kompas.com/\">Kompas.com</a>&nbsp;dengan judul &quot;Ikut Vespa World Days 2022, Komunitas Skuter Rela Touring Jarak Jauh&quot;, Klik untuk baca:&nbsp;<a href=\"https://otomotif.kompas.com/read/2022/06/13/183100615/ikut-vespa-world-days-2022-komunitas-skuter-rela-touring-jarak-jauh\">https://otomotif.kompas.com/read/2022/06/13/183100615/ikut-vespa-world-days-2022-komunitas-skuter-rela-touring-jarak-jauh</a>.<br />\r\nPenulis : Donny Dwisatryo Priyantoro<br />\r\nEditor : Azwar Ferdian</p>', 'Kegiatan20230611114500.jpeg', '2023-06-11', '23:44:00', 100000, 1, 1, 'touring-tmcc-chapter-ambon', '2023-06-11 14:45:00', '2023-06-18 13:21:17'),
(10, 2, 3, 'Memperingati Hari Kemerdekaan Republik Indone**a', '<p>Memberikan santunan pada anak yatim, piatu, dan yatim piatu di Desa Karang Tebu yang berupa perlengkapan sekolah, seperti: buku tulis, tas, pensil, penghapus, bolpoin, dan buku gambar. Dengan pemberian perlengkapan sekolah ini harapannya mereka jadi lebih semangat belajar.</p>\r\n\r\n<p>Santunan ini diberikan pada pada 2 Panti Asuhan di Desa Karang Tebu, yaitu Panti Asuhan Kasih Bunda dan Muara Kasih. Santunan yang diberikan berupa beras, minyak, telur, gula, dan lain-lain. Pemberian santunan ini nantinya diberikan pada perwakilan tiap panti asuhan.</p>', 'Kegiatan20230613072022.jpg', '2023-06-15', '10:00:00', NULL, 2, 1, 'memperingati-hari-kemerdekaan-republik-indonea', '2023-06-13 10:20:22', '2023-06-16 04:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(10) UNSIGNED NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama_kota` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `id_provinsi`, `nama_kota`, `created_at`, `updated_at`) VALUES
(2, 1, 'Ambon', '2023-05-05 05:59:16', '2023-05-05 05:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `kredit`
--

CREATE TABLE `kredit` (
  `id_kredit` int(10) UNSIGNED NOT NULL,
  `nominal_kredit` double(8,2) NOT NULL,
  `tanggal_kredit` datetime NOT NULL,
  `keterangan_kredit` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kredit`
--

INSERT INTO `kredit` (`id_kredit`, `nominal_kredit`, `tanggal_kredit`, `keterangan_kredit`, `created_at`, `updated_at`) VALUES
(1, 300000.00, '2023-05-30 20:17:43', 'Tagihan Iuran Bulanan', '2023-05-30 11:18:07', '2023-05-30 11:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_17_054005_create_sessions_table', 1),
(7, '2023_04_17_060220_create_kontens_table', 2),
(8, '2023_04_18_044938_create_kategori_kegiatans_table', 3),
(9, '2023_04_18_052800_create_sub_kategori_kegiatans_table', 4),
(10, '2023_04_20_125456_create_kategori_produks_table', 5),
(11, '2023_04_20_133937_create_kategori_beritas_table', 6),
(12, '2023_04_20_152819_create_kategori_dokumens_table', 7),
(13, '2023_04_26_003400_create_kategori_simpanans_table', 8),
(14, '2023_04_26_024743_create_dokumens_table', 9),
(15, '2023_04_26_055443_create_produks_table', 10),
(16, '2023_04_26_123052_create_galeris_table', 11),
(17, '2023_04_26_130420_create_beritas_table', 12),
(18, '2023_04_27_111518_create_kategori_users_table', 13),
(19, '2023_04_27_113941_create_provinsis_table', 14),
(20, '2023_04_27_121304_create_kotas_table', 15),
(21, '2023_04_27_153018_create_kategori_admins_table', 16),
(22, '2023_05_02_143732_create_kategori_penguruses_table', 17),
(23, '2023_05_02_164357_create_kategori_anggotas_table', 18),
(24, '2023_05_03_103438_create_videos_table', 19),
(25, '2023_05_03_110129_create_kegiatans_table', 20),
(26, '2023_05_04_105839_create_kategori_unit_bisnis_table', 21),
(27, '2023_05_04_112634_create_kategori_karyawans_table', 22),
(28, '2023_05_04_142940_create_settings_table', 23),
(29, '2023_05_16_031729_create_kategori_garasis_table', 24),
(30, '2023_05_16_042019_create_garasis_table', 24),
(31, '2023_05_16_134625_create_iurans_table', 24),
(32, '2023_05_16_155731_create_pusats_table', 24),
(33, '2023_05_16_160959_create_regions_table', 25),
(34, '2023_05_16_162713_create_chapters_table', 26),
(35, '2023_05_17_101913_create_communities_table', 27),
(36, '2023_05_16_172209_misi', 28),
(37, '2023_05_17_012525_kategori__sertifikat', 28),
(38, '2023_05_17_103621_create_kategori_iurans_table', 28),
(39, '2023_05_17_145554_motor', 28),
(40, '2023_05_17_190417_sertifikat', 28),
(41, '2023_05_19_113124_iuran', 28),
(42, '2023_05_22_122801_sertifikat', 29),
(43, '2023_05_22_125249_create_sertifikats_table', 30),
(44, '2023_05_22_142918_iuran', 31),
(45, '2023_05_22_145113_misi', 32),
(46, '2023_05_22_200214_create_visi_misis_table', 33),
(47, '2023_05_22_204936_vimi', 34),
(48, '2023_05_22_213652_iuran', 35),
(49, '2023_05_23_151551_create_kas_table', 36),
(50, '2023_05_23_154340_kategori_kas', 37),
(51, '2023_05_23_160621_kategori_kas', 38),
(52, '2023_05_25_102125_create_kredits_table', 39),
(53, '2023_05_25_103403_create_debits_table', 40),
(54, '2023_05_25_104408_create_kas_table', 41),
(55, '2023_05_25_120329_create_kas_table', 42),
(56, '2023_05_25_150901_kas', 43),
(57, '2023_05_29_110803_create_daftar_kegiatans_table', 44),
(58, '2023_05_29_113955_daftar_kegiatans', 45),
(59, '2023_05_29_150646_daftar_kegiatans', 46),
(60, '2023_05_30_105351_iurans', 47),
(61, '2023_05_30_175634_create_penjualan_produks_table', 48),
(62, '2023_05_30_184847_create_kas_table', 49),
(63, '2023_05_30_185840_iuran1', 50),
(64, '2023_05_30_193200_iuran', 51),
(65, '2023_05_30_201642_kredit', 52),
(66, '2023_05_22_212533_create_tagihans_table', 53),
(67, '2023_06_09_160648_status_kegiatan', 54),
(68, '2023_06_09_161004_publish_kegiatan', 55),
(69, '2023_06_11_194920_status_kegiatan', 56),
(70, '2023_06_11_195935_publish_kegiatan', 57);

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id_misi` int(10) UNSIGNED NOT NULL,
  `judul_misi` varchar(255) NOT NULL,
  `deskripsi_misi` text NOT NULL,
  `icon_misi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id_misi`, `judul_misi`, `deskripsi_misi`, `icon_misi`, `created_at`, `updated_at`) VALUES
(3, 'Solidaritas Tanpa Batas', 'Menumbuhkan dan meningkatkan rasa persaudaraan di antara anggota dan komunitas lainnya.', '1183495191.png', '2023-05-22 08:10:16', '2023-05-22 08:10:16'),
(5, 'Manfaat Berorganisasi', 'Meningkatkan kepedulian sosial organisasi dari setiap anggotanya untuk menebarkan nilai-nilai kebaikan yang bermanfaat bagi masyarakat luas.', '474274078.png', '2023-05-23 05:11:33', '2023-05-23 05:11:33'),
(6, 'Junjung Tinggi Nilai Organisasi', 'Mengembangkan dan meningkatkan nilai organisasi melalui pelaksanaan kegiatan-kegiatan yang bermanfaat bagi masyarakat luas', '1404823494.png', '2023-05-23 05:12:17', '2023-05-23 05:12:17'),
(7, 'Organisasi Modern', 'Mengembangkan organisasi dan menyesuaikannya dengan perkembangan zaman dengan cara menambah jumlah anggota aktif dan tingkat partisipasi anggota di setiap kegiatan.', '498913858.png', '2023-05-23 05:12:43', '2023-05-23 05:12:43'),
(8, 'Organisasi Transparansi', 'Menerapkan cara-cara yang efektif, efisien, transparan dan dapat dipertanggungjawabkan dalam pengelolaan organisasi.', '244991412.png', '2023-05-23 05:13:15', '2023-05-23 05:13:15'),
(9, 'Menciptakan Prestasi Organisasi', 'Menghasilkan anggota yang bernilai, berbudaya dan berprestasi baik di dalam maupun di luar negeri.', '1874224624.png', '2023-05-23 05:13:53', '2023-05-23 05:13:53'),
(10, 'TMCC Jaya', 'Menjadikan TMCC sebagai motor penggerak program Employee Volunteer Program (EVP) TELKOM atau kegiatan sejenis dari TELKOM Group maupun perusahaan/institusi lainnya.', '280658019.png', '2023-05-23 05:14:19', '2023-05-23 05:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id_motor` int(10) UNSIGNED NOT NULL,
  `id` int(11) NOT NULL,
  `nama_motor` varchar(255) NOT NULL,
  `gambar_motor` varchar(255) NOT NULL,
  `nomor_plat` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id_motor`, `id`, `nama_motor`, `gambar_motor`, `nomor_plat`, `created_at`, `updated_at`) VALUES
(1, 1, 'Vespa PS 1978', 'Motor20230522121057.jpeg', 'DE 1234 FG', '2023-05-22 03:10:57', '2023-05-22 07:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `id_kategori_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `harga_produk` float NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori_produk`, `nama_produk`, `foto_produk`, `harga_produk`, `stok_produk`, `deskripsi_produk`, `created_at`, `updated_at`) VALUES
(1, 1, 'Topi Baseball', 'FotoProduk20230426072444.jfif', 25000, 30, '<p>Topi baseball bagus</p>', '2023-04-25 22:24:44', '2023-04-25 22:24:44'),
(2, 3, 'Sepatu Bola', 'FotoProduk20230426073108.jpg', 1000000, 30, '<p><strong>sepatu blablabla</strong></p>', '2023-04-25 22:31:08', '2023-04-26 03:25:56'),
(3, 1, 'topi blabla', 'FotoProduk20230426073719.jfif', 2000000, 50, '<p><strong>topi blabla</strong></p>', '2023-04-25 22:37:19', '2023-05-31 02:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(10) UNSIGNED NOT NULL,
  `nama_provinsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`, `created_at`, `updated_at`) VALUES
(1, 'Maluku', '2023-04-27 03:09:34', '2023-04-27 03:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `publish_kegiatan`
--

CREATE TABLE `publish_kegiatan` (
  `id_publish_kegiatan` int(10) UNSIGNED NOT NULL,
  `nama_publish_kegiatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publish_kegiatan`
--

INSERT INTO `publish_kegiatan` (`id_publish_kegiatan`, `nama_publish_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'Published', NULL, NULL),
(2, 'Draft', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pusat`
--

CREATE TABLE `pusat` (
  `id_pusat` int(10) UNSIGNED NOT NULL,
  `nama_pusat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pusat`
--

INSERT INTO `pusat` (`id_pusat`, `nama_pusat`, `created_at`, `updated_at`) VALUES
(1, 'Indonesia', '2023-05-16 07:09:21', '2023-05-16 07:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id_region` int(10) UNSIGNED NOT NULL,
  `id_pusat` int(11) NOT NULL,
  `nama_region` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id_region`, `id_pusat`, `nama_region`, `created_at`, `updated_at`) VALUES
(1, 1, 'Maluku', '2023-05-16 07:26:38', '2023-05-16 07:26:38'),
(2, 1, 'Jawa Barat', '2023-05-17 02:45:47', '2023-05-17 02:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikats`
--

CREATE TABLE `sertifikats` (
  `id_sertifikat` int(10) UNSIGNED NOT NULL,
  `id_kategori_sertifikat` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nomor_sertifikat` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar_sertifikat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sertifikats`
--

INSERT INTO `sertifikats` (`id_sertifikat`, `id_kategori_sertifikat`, `id`, `nomor_sertifikat`, `keterangan`, `gambar_sertifikat`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '20231234567', 'Success', 'Sertifikat20230522012418.jpeg', '2023-05-22', '2023-05-22 04:24:18', '2023-05-22 05:25:08'),
(2, 1, 1, '2023123456767', 'Success', 'Sertifikat20230526031850.jpeg', '2023-05-26', '2023-05-26 06:18:50', '2023-05-29 10:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('T2QM4Qu3oAVI5zH8co2jrlvoWGdzIxNRa6CCmEK5', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.51', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoienB6MVNqQnZnSEx5SWZSNEtsT0N1d0NqVU5kWmRCUWdSNHV5RGNxTSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9saWhhdC1hZ2VuZGEvdG91cmluZy10bWNjLWNoYXB0ZXItYW1ib24iO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQuQ1FYN2E0VHg1OVZtUlphRi5tcHEuVUhkQS5ETzJzZi4zamp5YnFxODVOT01GSHdGb1F4eSI7fQ==', 1687107027);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(10) UNSIGNED NOT NULL,
  `pimpinan_setting` varchar(255) NOT NULL,
  `logo_setting` varchar(255) NOT NULL,
  `keyword_setting` varchar(255) NOT NULL,
  `deskripsi_setting` varchar(255) NOT NULL,
  `perusahaan_setting` varchar(255) NOT NULL,
  `tentang_setting` text NOT NULL,
  `alamat_setting` varchar(255) NOT NULL,
  `no_hp_setting` varchar(20) NOT NULL,
  `email_setting` varchar(255) NOT NULL,
  `maps_setting` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `pimpinan_setting`, `logo_setting`, `keyword_setting`, `deskripsi_setting`, `perusahaan_setting`, `tentang_setting`, `alamat_setting`, `no_hp_setting`, `email_setting`, `maps_setting`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'logo.png', 'TMCC Indonesia', 'TMCC Indonesia', 'TMCC Indonesia', '<p>Telkom Group Motorcycle Community adalah komunitas motor yang berada dibawah naungan telkom group indonesia. Anggota TMCC Indonesia biasanya beranggotakan karyawan telkom seluruh nusantara.</p>\r\n\r\n<p>TMCC Indonesia selalu membuat jambore setiap tahunnya, anggota tidak diwajibkan untuk memiliki motor jenis tertentu, para anggota yang ada di TMCC Indonesia bebas menggunakan motor jenis apapun.&nbsp;</p>\r\n\r\n<p>TMCC berasaskan Pancasila serta menjunjung tinggi peraturan dan perundang- undangan yang berlaku di Negara Indonesia dan negara atau wilayah tempat kedudukan TMCC.&nbsp;</p>', 'Jl. Dr. Sitanala No. 9', '08111111', 'admin@tmcc.org', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.4890930368633!2d128.1712088740831!3d-3.7028746430409685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce98997dfca81%3A0x5442714fbb0cb5c3!2sTelkom%20Amboina%20Hall!5e0!3m2!1sid!2sid!4v1684459190521!5m2!1sid!2sid', '2023-05-22 12:25:44', '2023-05-17 06:35:44');

-- --------------------------------------------------------

--
-- Table structure for table `status_kegiatan`
--

CREATE TABLE `status_kegiatan` (
  `id_status_kegiatan` int(10) UNSIGNED NOT NULL,
  `nama_status_kegiatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_kegiatan`
--

INSERT INTO `status_kegiatan` (`id_status_kegiatan`, `nama_status_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'Open', NULL, NULL),
(2, 'Close', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori_kegiatan`
--

CREATE TABLE `sub_kategori_kegiatan` (
  `id_sub_kategori_kegiatan` int(10) UNSIGNED NOT NULL,
  `id_kategori_kegiatan` int(11) NOT NULL,
  `nama_sub_kategori_kegiatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_kategori_kegiatan`
--

INSERT INTO `sub_kategori_kegiatan` (`id_sub_kategori_kegiatan`, `id_kategori_kegiatan`, `nama_sub_kategori_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rapat Anggota Tahunan (RAT)', '2023-04-17 21:04:43', '2023-04-17 21:04:43'),
(2, 1, 'Rapat', '2023-04-17 21:06:18', '2023-04-17 21:06:18'),
(3, 2, 'Bakti Sosial', '2023-04-17 21:07:21', '2023-04-17 21:07:21'),
(4, 3, 'Lainnya', '2023-04-17 21:08:15', '2023-04-17 21:08:15'),
(5, 2, 'Bakti Sosial Anak', '2023-05-03 07:42:58', '2023-05-03 07:42:58'),
(6, 1, 'Musyawarah Nasional', '2023-05-31 01:24:59', '2023-05-31 01:24:59'),
(7, 1, 'Musyawarah Region', '2023-05-31 01:25:17', '2023-05-31 01:25:17'),
(8, 1, 'Musyawarah Chapter', '2023-05-31 01:25:31', '2023-05-31 01:25:31'),
(9, 1, 'Rakor Nasional', '2023-05-31 01:26:00', '2023-05-31 01:26:00'),
(10, 1, 'Rakor Region', '2023-05-31 01:26:13', '2023-05-31 01:26:13'),
(11, 1, 'Rakor Chapter', '2023-05-31 01:26:25', '2023-05-31 01:26:25'),
(13, 4, 'Sunmori', '2023-05-31 01:27:02', '2023-05-31 01:27:02'),
(14, 4, 'Touring', '2023-05-31 01:27:16', '2023-05-31 01:27:16');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(10) UNSIGNED NOT NULL,
  `nama_tagihan` varchar(255) NOT NULL,
  `jumlah_tagihan` varchar(255) NOT NULL,
  `id_kategori_anggota` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `id_kategori_anggota` int(11) DEFAULT NULL,
  `id_kategori_pengurus` int(11) DEFAULT NULL,
  `id_kategori_admin` int(11) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `id_pusat` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `id_chapter` int(11) NOT NULL,
  `id_community` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `no_hp`, `id_provinsi`, `id_kota`, `alamat`, `status`, `jenis_kelamin`, `tanggal_lahir`, `id_kategori_anggota`, `id_kategori_pengurus`, `id_kategori_admin`, `nik`, `jabatan`, `id_pusat`, `id_region`, `id_chapter`, `id_community`, `foto`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$.CQX7a4Tx59VmRZaF.mpq.UHdA.DO2sf.3jjybqq85NOMFHwFoQxy', '8222222', 1, 2, 'Jl. Dr. Sitanala No. 9', 'Verifikasi', 'Laki-laki', '1972-01-21', 3, 1, 1, '811111', 'Ketua Umum', 1, 1, 1, 1, 'Foto20230517100021.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-17 13:00:22', '2023-05-17 13:24:36'),
(5, 'PT SPUNIX', 'spunix@gmail.com', NULL, '$2y$10$m9amDUfJErylY9elgMM7p.cmKcOFVPqTacv3gsNUf0d1E1MZf/wDi', '01234567890', 1, 2, 'TELKOM AMBON', 'Verifikasi', 'Laki-laki', '1997-09-13', 1, NULL, NULL, '1234567890232', 'Staff Administrasi', 1, 1, 1, 1, 'Foto20230522121808.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-22 03:18:08', '2023-06-12 08:18:38'),
(6, 'Anggota 1', 'nonexcx@gmail.com', NULL, '$2y$10$1RF0W1U9XJSTL6ty3dRDY.Wj8F3W2CIOtUz7mK4YfQsnMOuQiygFG', '82124944770', 1, 2, 'Skip Tengah, RT 001/02,Kelurahan Batu Meja, Kecamatan Sirimau, Ambon Maluku 97125', 'Verifikasi', 'Laki-laki', '2023-05-26', 1, NULL, 3, '1134252533616461346', NULL, 1, 2, 2, 1, 'Foto20230526121509.png', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-26 03:15:09', '2023-05-26 03:15:09'),
(7, 'gue', 'pattroberth13@gmail.com', NULL, '$2y$10$fYJJZ2E7Lbiha3ho9Q6ZBuBMcw.MGJAv6oCHU1q0Knr55oKIZIloO', '823456363727', 1, 2, 'Skip Tengah, RT 001/02,Kelurahan Batu Meja, Kecamatan Sirimau, Ambon Maluku 97125', 'Verifikasi', 'Laki-laki', '2023-05-30', 1, 2, 2, '7583846284682', NULL, 1, 1, 1, 1, 'Foto20230530021726.png', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-30 05:17:26', '2023-05-30 05:17:26');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(10) UNSIGNED NOT NULL,
  `nama_video` varchar(255) NOT NULL,
  `link_video` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `nama_video`, `link_video`, `created_at`, `updated_at`) VALUES
(1, 'Upin&Ipin', 'R0T9xwTOQF0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id_visi` int(11) NOT NULL,
  `judul_visi` varchar(255) NOT NULL,
  `deskripsi_visi` text NOT NULL,
  `icon_visi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id_visi`, `judul_visi`, `deskripsi_visi`, `icon_visi`, `created_at`, `updated_at`) VALUES
(13, 'Bermanfaat', 'Menjadi komunitas yang bermanfaat bagi anggota, keluarga, perusahaan dan masyarakat sekitar serta Negara Kesatuan Republik Indonesia.', '2119767996.png', '2023-05-23 05:36:17', '2023-05-23 05:36:17'),
(14, 'Kualitas Terbaik', 'Menjadi role model komunitas terbaik di Indonesia', '1627233027.png', '2023-05-23 05:36:44', '2023-05-23 05:36:44'),
(15, 'Supportivitas', 'Menjadi mitra kolaboratif Telkom Group dan Serikat Karyawan Telkom Group dalam mendukung pelaksanaan Visi dan Misi perusahaan serta pihak-pihak lainnya yang memiliki tujuan yang sama.', '882229361.png', '2023-05-23 05:37:12', '2023-05-23 05:37:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id_chapter`);

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`id_community`);

--
-- Indexes for table `daftar_kegiatans`
--
ALTER TABLE `daftar_kegiatans`
  ADD PRIMARY KEY (`id_daftar_kegiatan`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `garasis`
--
ALTER TABLE `garasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isi_garasi`
--
ALTER TABLE `isi_garasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iuran`
--
ALTER TABLE `iuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indexes for table `kategori_admin`
--
ALTER TABLE `kategori_admin`
  ADD PRIMARY KEY (`id_kategori_admin`);

--
-- Indexes for table `kategori_anggota`
--
ALTER TABLE `kategori_anggota`
  ADD PRIMARY KEY (`id_kategori_anggota`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori_berita`);

--
-- Indexes for table `kategori_dokumen`
--
ALTER TABLE `kategori_dokumen`
  ADD PRIMARY KEY (`id_kategori_dokumen`);

--
-- Indexes for table `kategori_garasi`
--
ALTER TABLE `kategori_garasi`
  ADD PRIMARY KEY (`id_garasi`);

--
-- Indexes for table `kategori_garasis`
--
ALTER TABLE `kategori_garasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_iuran`
--
ALTER TABLE `kategori_iuran`
  ADD PRIMARY KEY (`id_kategori_iuran`);

--
-- Indexes for table `kategori_karyawan`
--
ALTER TABLE `kategori_karyawan`
  ADD PRIMARY KEY (`id_kategori_karyawan`);

--
-- Indexes for table `kategori_kegiatan`
--
ALTER TABLE `kategori_kegiatan`
  ADD PRIMARY KEY (`id_kategori_kegiatan`);

--
-- Indexes for table `kategori_pengurus`
--
ALTER TABLE `kategori_pengurus`
  ADD PRIMARY KEY (`id_kategori_pengurus`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori_produk`);

--
-- Indexes for table `kategori_sertifikat`
--
ALTER TABLE `kategori_sertifikat`
  ADD PRIMARY KEY (`id_kategori_sertifikat`);

--
-- Indexes for table `kategori_simpanan`
--
ALTER TABLE `kategori_simpanan`
  ADD PRIMARY KEY (`id_kategori_simpanan`);

--
-- Indexes for table `kategori_unit_bisnis`
--
ALTER TABLE `kategori_unit_bisnis`
  ADD PRIMARY KEY (`id_kategori_unit_bisnis`);

--
-- Indexes for table `kategori_user`
--
ALTER TABLE `kategori_user`
  ADD PRIMARY KEY (`id_kategori_user`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`id_kredit`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id_misi`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `publish_kegiatan`
--
ALTER TABLE `publish_kegiatan`
  ADD PRIMARY KEY (`id_publish_kegiatan`);

--
-- Indexes for table `pusat`
--
ALTER TABLE `pusat`
  ADD PRIMARY KEY (`id_pusat`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- Indexes for table `sertifikats`
--
ALTER TABLE `sertifikats`
  ADD PRIMARY KEY (`id_sertifikat`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `status_kegiatan`
--
ALTER TABLE `status_kegiatan`
  ADD PRIMARY KEY (`id_status_kegiatan`);

--
-- Indexes for table `sub_kategori_kegiatan`
--
ALTER TABLE `sub_kategori_kegiatan`
  ADD PRIMARY KEY (`id_sub_kategori_kegiatan`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id_chapter` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `id_community` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daftar_kegiatans`
--
ALTER TABLE `daftar_kegiatans`
  MODIFY `id_daftar_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `garasis`
--
ALTER TABLE `garasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `isi_garasi`
--
ALTER TABLE `isi_garasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `iuran`
--
ALTER TABLE `iuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id_kas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_admin`
--
ALTER TABLE `kategori_admin`
  MODIFY `id_kategori_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_anggota`
--
ALTER TABLE `kategori_anggota`
  MODIFY `id_kategori_anggota` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori_berita` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_dokumen`
--
ALTER TABLE `kategori_dokumen`
  MODIFY `id_kategori_dokumen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_garasi`
--
ALTER TABLE `kategori_garasi`
  MODIFY `id_garasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_garasis`
--
ALTER TABLE `kategori_garasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_iuran`
--
ALTER TABLE `kategori_iuran`
  MODIFY `id_kategori_iuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_karyawan`
--
ALTER TABLE `kategori_karyawan`
  MODIFY `id_kategori_karyawan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori_kegiatan`
--
ALTER TABLE `kategori_kegiatan`
  MODIFY `id_kategori_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_pengurus`
--
ALTER TABLE `kategori_pengurus`
  MODIFY `id_kategori_pengurus` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_sertifikat`
--
ALTER TABLE `kategori_sertifikat`
  MODIFY `id_kategori_sertifikat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori_simpanan`
--
ALTER TABLE `kategori_simpanan`
  MODIFY `id_kategori_simpanan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_unit_bisnis`
--
ALTER TABLE `kategori_unit_bisnis`
  MODIFY `id_kategori_unit_bisnis` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_user`
--
ALTER TABLE `kategori_user`
  MODIFY `id_kategori_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kredit`
--
ALTER TABLE `kredit`
  MODIFY `id_kredit` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
  MODIFY `id_misi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id_motor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publish_kegiatan`
--
ALTER TABLE `publish_kegiatan`
  MODIFY `id_publish_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pusat`
--
ALTER TABLE `pusat`
  MODIFY `id_pusat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sertifikats`
--
ALTER TABLE `sertifikats`
  MODIFY `id_sertifikat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_kegiatan`
--
ALTER TABLE `status_kegiatan`
  MODIFY `id_status_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_kategori_kegiatan`
--
ALTER TABLE `sub_kategori_kegiatan`
  MODIFY `id_sub_kategori_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
