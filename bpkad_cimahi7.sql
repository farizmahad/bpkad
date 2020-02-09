-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 10:07 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpkad_cimahi7`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `tanggal_event` datetime NOT NULL,
  `agenda` text NOT NULL,
  `keterangan` text NOT NULL,
  `sampai_tanggal` datetime NOT NULL,
  `id_agenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `tanggal_event`, `agenda`, `keterangan`, `sampai_tanggal`, `id_agenda`) VALUES
(1, '2018-11-14 05:24:17', 'Tahapan dan Jadwal Proses Penyusunan APBD\r\nPenyusunan RKPD', 'Akhir Bulan Mei', '0000-00-00 00:00:00', 1),
(3, '2018-12-23 00:00:00', 'Penyampaian Rancangan KUA dan Rancangan PPAS oleh Ketua TAPD kepada Kepala Daerah', 'Minggu 1 Bulan Juni | Durasi : 1 Minggu', '0000-00-00 00:00:00', 1),
(4, '0000-00-00 00:00:00', 'Penyampaian Rancangan KUA dan Rancangan PPAS oleh Kepala Daerah kepada DPRD', 'Pertengahan Bulan Juni | Durasi : 6 Minggu', '2018-12-24 00:00:00', 1),
(5, '2018-12-11 00:00:00', 'Kesepakatan antara kepala daerah dan DPRD atas Rancangan KUA dan Rancangan PPAS', 'Akhir Bulan Juli         ', '2018-12-29 00:00:00', 1),
(6, '2018-12-24 09:00:00', 'Penerbitan Surat Edaran kepala daerah perihal Pedoman penyusunan RKA-PPKD serta penyusunan Rancangan Perda tentang APBD', 'Awal Bulan Agustus | Durasi : 8 Minggu', '0000-00-00 00:00:00', 1),
(7, '2018-12-25 10:00:00', 'Penyusunan dan pembahasan RKA-SKPD dan RKS-PPKD serta penyusunan Rancangan Perda tentang APBD', 'Awal Bulan Agustus sampai dengan akhir bulan September', '2018-12-25 10:00:00', 1),
(8, '2018-12-26 02:00:00', 'Penyampaian Rancangan Perda tentang APBD kepada DPRD', 'Minggu 1 Bulan Oktober | Durasi: 2 bulan', '2018-12-26 10:00:00', 1),
(9, '0000-00-00 00:00:00', 'Pengambilan persetujuan bersama DPRD dan kepala daerah', 'Paling lambar 1 (satu) bulan sebelum tahun anggaran yang bersangkutan', '0000-00-00 00:00:00', 1),
(10, '0000-00-00 00:00:00', 'Menyampaikan Rancangan Perda tentang APBD dan Rancangan Perkada tentang Penjabaran APBD kepada MDN/Gub untuk dievaluasi', '3 hari kerja setelah persetujuan bersama', '0000-00-00 00:00:00', 1),
(11, '0000-00-00 00:00:00', 'Hasil evaluasi Rancangan Perda tentang APBD dan Rancangan Perkada tentang Penjabaran APBD', 'Paling lama 15 hari kerja setelah Rancangan Perda tentang APBD dan Rancangan Perkada tentang Penjabaran APBD diterima oleh MDN/Gubernur', '0000-00-00 00:00:00', 1),
(12, '0000-00-00 00:00:00', 'Penyempurnaan Rancangan Perda tentang APBD sesuai hasil evaluasi yang ditetapkan dengan keputusan pimpinan DPRD tentang penyempurnaan Rancangan Perda tentang APBD', 'Paling lambat 7 hari kerja (sejak diterima keputusan hasil evaluasi)', '0000-00-00 00:00:00', 1),
(13, '0000-00-00 00:00:00', 'Penyampaian keputusan DPRD tentang penyempurnaan Rancangan Perda tentang APBD kepada MDN/Gub', '3 hari kerja setelah keputusan pimpinan DPRD ditetapkan', '0000-00-00 00:00:00', 1),
(14, '0000-00-00 00:00:00', 'Penetapan Perda tentang APBD dan Perkada tentang Penjabaran APBD sesuai dengan hasil evaluasi', 'Paling lambat akhir Desember (31 Desember)', '0000-00-00 00:00:00', 1),
(15, '0000-00-00 00:00:00', 'Penyampaian Perda tentang APBD dan Perkada tentang Penjabaran APBD kepada MDN/Gub', 'Paling lambat 7 hari kerja setelah Perda dan Perkada ditetapkan', '0000-00-00 00:00:00', 1),
(16, '0000-00-00 00:00:00', 'Penyampaian Rancangan KUPA dan Rancangan PPAS Perubahan oleh Ketua TAPD kepada kepala daerah.', 'Paling lambat minggu 1 bulan Agustus.', '0000-00-00 00:00:00', 2),
(17, '0000-00-00 00:00:00', 'Kesepakatan antara kepala daerah dan DPRD atas Rancangan KUPA dan Rancangan PPAS Perubahan.', 'Paling lambat minggu 2 bulan Agustus. \r\nDurasi: 1 Minggu', '0000-00-00 00:00:00', 2),
(18, '0000-00-00 00:00:00', 'Penerbitan Surat Edaran kepala daerah perihal Pedoman penyusunan RKA-SKPD, RKA-PPKD dan DPPA-SKPD/PPKD serta Penyusunan Rancangan Perda tentang Perubahan APBD dan Rancangan Perkada tentang Penjabaran Perubahan APBD.', 'Paling lambat minggu 1 bulan September. \r\nDurasi : 3 Minggu', '0000-00-00 00:00:00', 2),
(19, '0000-00-00 00:00:00', 'Penyampaian Rancangan Perda tentang Perubahan APBD kepada DPRD.', 'Paling lambat minggu 2 bulan September. \r\nDurasi : 3 Minggu', '0000-00-00 00:00:00', 2),
(20, '0000-00-00 00:00:00', 'Pengambilan persetujuan bersama DPRD dan kepala daerah.', 'Paling lambat 3 bulan sebelum tahun anggaran berakhir.', '0000-00-00 00:00:00', 2),
(21, '0000-00-00 00:00:00', 'Menyampaikan Rancangan Perda tentang Perubahan APBD dan Rancangan Perkada tentang Penjabaran Perubahan APBD kepada MDN/Gubernur untuk dievaluasi.', '3 hari setelah persetujuan bersama.', '0000-00-00 00:00:00', 2),
(22, '0000-00-00 00:00:00', 'Hasil evaluasi Rancangan Perda tentang Perubahan APBD dan Rancangan Perkada tentang Penjabaran Perubahan APBD.', 'Paling lama 15 hari kerja setelah Rancangan Perda tentang Perubahan APBD dan Rancangan Perkada tentang Penjabaran Perubahan APBD diterima oleh MDN/Gub.', '0000-00-00 00:00:00', 2),
(23, '0000-00-00 00:00:00', 'Penyempurnaan Rancangan Perda tentang Perubahan APBD sesuai hasil evaluasi yang diterapkan dengan keputusan pimpinan DPRD tentang penyempurnaan Rancangan Perda tentang perubahan APBD.', 'Paling lambat 7 (tujuh) hari kerja (sejak diterima keputusan hasil evaluasi). | Durasi : 7 hari kerja.', '0000-00-00 00:00:00', 2),
(24, '0000-00-00 00:00:00', 'Penyampaian keputusan DPRD tentang penyempurnaan Rancangan Perda tentang Perubahan APBD kepada MDN/Gub.', '3 hari kerja setelah keputusan pimpinan DPRD ditetapkan.', '0000-00-00 00:00:00', 2),
(25, '0000-00-00 00:00:00', 'Penyampaian Perda tentang Perubahan APBD dan Perkada tentang Penjabaran APBD kepada MDN/Gub.', 'Paling lambat 7 hari kerja setelah Perda dan Perkada ditetapkan', '0000-00-00 00:00:00', 2),
(27, '2019-02-21 03:00:00', 'df', '                \r\n\r\n            ', '2019-03-01 04:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `alokasi_estimasi_pendapatan_daerah`
--

CREATE TABLE `alokasi_estimasi_pendapatan_daerah` (
  `id` int(11) NOT NULL,
  `alokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alokasi_estimasi_pendapatan_daerah`
--

INSERT INTO `alokasi_estimasi_pendapatan_daerah` (`id`, `alokasi`) VALUES
(1, 'PAD'),
(2, 'DANA PERIMBANGAN'),
(3, 'LAIN-LAIN PAD YANG SAH');

-- --------------------------------------------------------

--
-- Table structure for table `apbd`
--

CREATE TABLE `apbd` (
  `id_apbd` int(11) NOT NULL,
  `id_jenis_apbd` int(11) NOT NULL,
  `tahun` varchar(30) DEFAULT NULL,
  `jumlah` varchar(100) DEFAULT NULL,
  `persen` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`) VALUES
(1, 'aaaaaaaaaaaaaaaaaa'),
(2, 'bbbbbbbbbbbbbbbbbbbb'),
(3, 'cccccccccccccccc'),
(4, 'dddddddddddd'),
(5, 'eeeeeeeeee'),
(6, 'aaaaaaaaaaaaaaaaaa'),
(7, 'bbbbbbbbbbbbbbbbbbbb'),
(8, 'cccccccccccccccc'),
(9, 'dddddddddddd'),
(10, 'eeeeeeeeee'),
(11, 'aaaaaaaaaaaaaaaaaa'),
(12, 'bbbbbbbbbbbbbbbbbbbb'),
(13, 'cccccccccccccccc'),
(14, 'dddddddddddd'),
(15, 'eeeeeeeeee');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `status_publish` tinyint(2) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `featured_image` varchar(100) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `title`, `isi`, `status_publish`, `tanggal_post`, `featured_image`, `id_users`) VALUES
(12, 'Sosialisasi Kebijakan Pengelolaan Keuangan Dan Barang Milik Daerah.', '<p>Badan Pengelola Keuangan dan Aset Daerah pada tanggal 7 November 2018 telah melaksanakan kegiatan Sosialisasi Kebijakan Pengelolaan Keuangan Dan Barang Milik Daerah. Kegiatan ini dilaksanakan di GH Universal Hotel Jalan Setiabudi No. 376 Bandung Jawa Barat dan dihadiri seluruh SKPD yang ada di lingkungan pemerintah Kota Cimahi ini membahas topik-topik mengenai penerapan cash management system dalam transaksi non tunai bendahara pengeluaran di lingkungan pemerintah daerah kota cimahi, rencana kebijakan penerapan transaksi non tunai secara penuh di tahun 2019, penyelenggaraan pelayanan dan pembinaan pengelola keuangan dan barang milik daerah melalui klinik BPKAD, serta sosialisasi kebijakan penatausahaan dan pertanggungjawaban APBD Kota Cimahi akhir tahun 2018.Adapun materi sosialisasi dapat diunduh melalui website ini pada konten publikasi.</p>\r\n', 1, '2019-02-26 11:44:11', 'asas.jpg', 26);

-- --------------------------------------------------------

--
-- Table structure for table `berita_komentar`
--

CREATE TABLE `berita_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `id_balasan` int(11) DEFAULT NULL,
  `status_dibalas` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_komentar`
--

INSERT INTO `berita_komentar` (`id_komentar`, `id_berita`, `nama`, `email`, `komentar`, `tanggal`, `id_balasan`, `status_dibalas`) VALUES
(1, 12, 'Rani Pebrianti', 'ranipebrianti84@gmail.com', '[]', '2019-02-26', NULL, 1),
(2, 12, 'sumiati', 'sumiati.aartijaya@gmail.com', 'fgfgfgfgfgfgfgfgfgfgfgfgfgfgfg', '2019-02-26', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cabang_footer`
--

CREATE TABLE `cabang_footer` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `content` varchar(300) NOT NULL,
  `url` varchar(300) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `urutan` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang_footer`
--

INSERT INTO `cabang_footer` (`id`, `title`, `content`, `url`, `status`, `urutan`) VALUES
(1, 'Bursa Sajadah Bandung 1 Inhoftank', 'Bursa Sajadah Bandung 1 Inhoftank', 'http://bursasajadah.com/toko-inhoftank', 0, 2),
(2, 'Bursa Sajadah Bandung 2 Citarum', 'Bursa Sajadah Bandung 2 Citarum', 'http://bursasajadah.com/toko-citarum', 0, 3),
(3, 'Bursa Sajadah Bekasi', 'Bursa Sajadah Bekasi', 'http://bursasajadah.com/toko-bekasi', 0, 4),
(4, 'Bursa Sajadah Bogor', 'Bursa Sajadah Bogor', 'http://bursasajadah.com/toko-bogor', 0, 5),
(5, 'Bursa Sajadah Jakarta', 'Bursa Sajadah Jakarta', 'http://bursasajadah.com/toko-jakarta', 0, 6),
(6, 'Bursa Sajadah Malang', 'Bursa Sajadah Malang', 'http://bursasajadah.com/toko-malang', 0, 7),
(8, 'Bursa Sajadah Surabaya', 'Bursa Sajadah Surabaya', 'http://bursasajadah.com/toko-surabaya', 0, 9),
(9, 'Bursa Sajadah Tangerang', 'Bursa Sajadah Tangerang', 'http://bursasajadah.com/toko-tangerang', 0, 10),
(11, 'Bursa Sajadah Cibubur', 'Bursa Sajadah Cibubur', 'http://bursasajadah.com/toko-cibubur', 0, 1),
(12, 'Bursa Sajadah Serang', 'Bursa Sajadah Serang', 'http://bursasajadah.com/toko-serang', 0, 0),
(13, 'Bursa Sajadah Pondok Pinang ', 'Bursa Sajadah Pondok Pinang', 'http://bursasajadah.com/toko-pondok-pinang', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_berita_category`
--

CREATE TABLE `detail_berita_category` (
  `id` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_kategori_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_berita_category`
--

INSERT INTO `detail_berita_category` (`id`, `id_berita`, `id_kategori_berita`) VALUES
(2, 4, 1),
(3, 4, 2),
(4, 4, 3),
(7, 0, 1),
(8, 0, 2),
(9, 0, 1),
(10, 0, 2),
(14, 0, 1),
(15, 0, 2),
(16, 0, 3),
(41, 6, 1),
(42, 6, 2),
(46, 7, 1),
(47, 7, 2),
(48, 7, 3),
(49, 0, 2),
(50, 0, 3),
(57, 10, 1),
(58, 10, 2),
(59, 10, 3),
(60, 10, 4),
(61, 3, 1),
(62, 11, 1),
(63, 12, 1),
(64, 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `detail_kontak`
--

CREATE TABLE `detail_kontak` (
  `id` int(11) NOT NULL,
  `id_kontak` int(11) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kontak`
--

INSERT INTO `detail_kontak` (`id`, `id_kontak`, `pesan`) VALUES
(1, 1, '<p>bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</p>'),
(2, 1, '<p>hgggggghhhhhhhhhhhhhhhhhhhhhhhhhhh</p>'),
(3, 1, '<p>;l/</p>'),
(4, 3, '<p>joppp</p>'),
(5, 1, '<p>\';</p><p>dsf</p>'),
(6, 1, '<p>kjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj</p>'),
(7, 1, '<p>l</p>'),
(8, 1, '<p>llllllllllllllllllllmj</p>'),
(9, 1, '<p>;l</p>'),
(10, 1, '<p>;l</p>'),
(11, 1, '<p>[p]</p>'),
(12, 1, '<p>op</p>'),
(13, 1, '<p>p[o</p>'),
(14, 1, '<p>opiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>'),
(15, 1, '<p>op</p>'),
(16, 1, '<p>lk</p>'),
(17, 1, '<p>op</p>'),
(18, 1, '<p>hjkkkkkkkkkkkkkkkk</p>'),
(19, 1, '<p>l;</p>'),
(20, 1, '<p>l;</p>'),
(21, 1, '<p>kllj</p>'),
(22, 7, '<p>jkkkkkkkkkkkkkkkkkkk</p>'),
(23, 2, '<p>ya gitu dehhh</p>'),
(24, 2, '<p>ya gitu dehhh</p>');

-- --------------------------------------------------------

--
-- Table structure for table `detail_produk_hukum`
--

CREATE TABLE `detail_produk_hukum` (
  `id_detail` int(11) NOT NULL,
  `id_produk_hukum` int(11) NOT NULL,
  `nama_produk_hukum` varchar(300) NOT NULL,
  `nama_file` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_produk_hukum`
--

INSERT INTO `detail_produk_hukum` (`id_detail`, `id_produk_hukum`, `nama_produk_hukum`, `nama_file`) VALUES
(1, 1, 'PERATURAN PEMERINTAH NOMOR 58 TAHUN 2005 TENTANG PENGELOLAAN KEUANGAN DAERAH', 'PP-58-2005_2.pdf'),
(2, 1, 'PERATURAN MENTERI DALAM NEGERI NOMOR 13 TAHUN 2006 TENTANG PEDOMAN PENGELOLAAN KEUANGAN DAERAH', 'permendagri_13_2006-tentang-pedoman-pengelolaan-keuangan-daerah_2.pdf'),
(3, 1, 'PERATURAN MENTERI DALAM NEGERI NOMOR 59 TAHUN 2007 TENTANG PERUBAHAN ATAS PERATURAN MENTERI DALAM NEGERI NOMOR 13 TAHUN 2006 TENTANG PEDOMAN PENGELOLAAN KEUANGAN DAERAH', 'PERATURAN-MENTERI-DALAM-NEGERI-NOMOR-59-TAHUN-2007-TENTANG-PERUBAHAN-ATAS-PERATURAN-MENTERI-DALAM-NEGERI-NOMOR-13-TAHUN-2006-TENTANG-PEDOMAN-PENGELOLAAN-KEUANGAN-DAERAH_2.pdf'),
(4, 1, 'PERATURAN MENTERI DALAM NEGERI NOMOR 21 TAHUN 2011 TENTANG PERUBAHAN KEDUA ATAS PERATURAN MENTERI DALAM NEGERI NO 13 TAHUN 2006 TENTANG PEDOMAN PENGELOLAAN KEUANGAN DAERAH', NULL),
(5, 2, 'PERATURAN PEMERINTAH NOMOR 58 TAHUN 2005 TENTANG PENGELOLAAN KEUANGAN DAERAH', NULL),
(6, 2, 'PERATURAN MENTERI DALAM NEGERI NOMOR 13 TAHUN 2006 TENTANG PEDOMAN PENGELOLAAN KEUANGAN DAERAH', 'permendagri_13_2006-tentang-pedoman-pengelolaan-keuangan-daerah_2.pdf'),
(7, 2, 'PERATURAN MENTERI DALAM NEGERI NOMOR 59 TAHUN 2007 TENTANG PERUBAHAN ATAS PERATURAN MENTERI DALAM NEGERI NOMOR 13 TAHUN 2006 TENTANG PEDOMAN PENGELOLAAN KEUANGAN DAERAH', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `estimasi_pendapatan`
--

CREATE TABLE `estimasi_pendapatan` (
  `id` int(11) NOT NULL,
  `tahun` varchar(70) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `jenis` varchar(40) DEFAULT NULL,
  `id_alokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estimasi_pendapatan`
--

INSERT INTO `estimasi_pendapatan` (`id`, `tahun`, `jumlah`, `jenis`, `id_alokasi`) VALUES
(2, '2014', '1824000000000', NULL, 1),
(3, '2014', '6286000000000', NULL, 2),
(4, '2014', '2259000000000', NULL, 3),
(5, '2015', '2063000000000', NULL, 1),
(6, '2015', '6482000000000', NULL, 2),
(7, '2015', '2415000000000', NULL, 3),
(8, '2016', '2269000000000', NULL, 1),
(9, '2016', '8849000000000', NULL, 2),
(10, '2016', '1076000000000', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `file_laporan`
--

CREATE TABLE `file_laporan` (
  `id_file` int(11) NOT NULL,
  `id_laporan` int(11) NOT NULL,
  `nama_file` varchar(256) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL,
  `judul_file` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_laporan`
--

INSERT INTO `file_laporan` (`id_file`, `id_laporan`, `nama_file`, `url`, `judul_file`) VALUES
(1, 1, 'APBD_2017.pdf', NULL, 'APBD_2017.pdf'),
(2, 1, 'APBD_2018.pdf', NULL, 'APBD_2018.pdf'),
(3, 2, 'BPKAD_isi_acara.pptx', NULL, 'BPKAD_isi_acara.pptx'),
(4, 2, 'BPKAD_isi_acara_edit.pptx', NULL, 'BPKAD_isi_acara_edit.pptx'),
(5, 2, 'EKSPOSE_PENGELOLAAN_BMD_KOTA_CIMAHI_TA_2018.pptx', NULL, 'EKSPOSE_PENGELOLAAN_BMD_KOTA_CIMAHI_TA_2018.pptx'),
(6, 2, 'EKSPOSE_PENGELOLAAN_BMD_KOTA_CIMAHI_TA_2018.pptx', NULL, 'EKSPOSE_PENGELOLAAN_BMD_KOTA_CIMAHI_TA_2018.pptx'),
(7, 2, 'SOSIALISASI_KEBIJAKAN_KEUANGAN_DAN_BARANG_MILIK_DAERAH-COVER.pptx', NULL, 'SOSIALISASI_KEBIJAKAN_KEUANGAN_DAN_BARANG_MILIK_DAERAH-COVER.pptx'),
(8, 2, 'SOSIALISASI_KEBIJAKAN_KEUANGAN_DAN_BARANG_MILIK_DAERAH-COVER_[Autosaved].pptx', NULL, 'SOSIALISASI_KEBIJAKAN_KEUANGAN_DAN_BARANG_MILIK_DAERAH-COVER_[Autosaved].pptx'),
(9, 3, 'Perjanjian_kinerja_2018.xlsx', NULL, 'Perjanjian_kinerja_2018.xlsx'),
(10, 3, 'rencana_aksi_2018.xlsx', NULL, 'rencana_aksi_2018.xlsx'),
(11, 3, 'RENJA-BPKAD_2017_KOTA_CIMAHI.docx', NULL, 'RENJA-BPKAD_2017_KOTA_CIMAHI.docx'),
(12, 3, 'RENSTRA-BPKAD_cimahi_2017-2022.docx', NULL, 'RENSTRA-BPKAD_cimahi_2017-2022.docx'),
(13, 3, 'RKT_2018.xls', NULL, 'RKT_2018.xls'),
(14, 4, 'lra_2016.pdf', NULL, 'lra_2016.pdf'),
(15, 4, 'lra_2017.pdf', NULL, 'lra_2017.pdf'),
(16, 1, '2014.pdf', NULL, '2014.pdf'),
(17, 1, '2015.pdf', NULL, '2015.pdf'),
(18, 1, '2016.pdf', NULL, '2016.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `fungsi`
--

CREATE TABLE `fungsi` (
  `id_fungsi` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `tugas` text NOT NULL,
  `fungsi` text NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fungsi`
--

INSERT INTO `fungsi` (`id_fungsi`, `id_jabatan`, `tugas`, `fungsi`, `uraian`) VALUES
(1, 1, 'Memimpin, mengatur, merumuskan, menyelenggarakan, membina, mengendalikan dan mengevaluasi penyusunan dan pelaksanaan kebijakan fungsi penunjang urusan pemerintahan bidang keuangan dan aset daerah.\r\n', '<ol>\r\n	<li>Perumusan kebijakan teknis dan fungsi penunjang urusan pemerintahan bidang keuangan dan aset daerah;</li>\r\n	<li>Perumusan perencanaan fungsi penunjang urusan pemerintahan bidang keuangan dan aset daerah;</li>\r\n	<li>Pembinaan, pengendalian dan evaluasi penyelenggaraan fungsi penunjang urusan pemerintahan bidang keuangan dan aset daerah;</li>\r\n	<li>Pelaksanaan administrasi badan;</li>\r\n	<li>Pelaksanaan tugas lain yang diberikan oleh Wali Kota sesuai dengan tugas dan fungsinya.</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Menetapkan Rencana Strategis (RESNTRA) dan Rencana Kinerja (RENJA) badan;</li>\r\n	<li>Mengendalikan, merumuskan dan menetapkan LPPD, LKPJ, LKIP dan segala bentuk pelaporan lainnya pada badan.</li>\r\n	<li>Merumuskan bahan kebijakan teknis Perencanaan Pembangunan Jangka Panjang (RPJP), Perencanaan Pembangunan Jangka Menengah (RPJMD) dan Rencana Pembangunan Kinerja Daerah (RKPD) lingkup tugasnya;</li>\r\n	<li>Menetapkan pedoman dan petunjuk teknis penyelenggaraan urusan lingkup bidang pengelolaan keruangan dan aset milik daerah;</li>\r\n	<li>Membina dan mengendalikan pelaksanaan tugas sekretariat;</li>\r\n	<li>Membina administrasi perkantoran;</li>\r\n	<li>Memberikan pelayanan dan pembinaan kepada unsur terkait di bidang pengelolaan keuangan dan aset milik daerah serta pelaksanaan hubungan kerja sama dengan Perangkat Daerah, lembaga/instansi terkait dalam rangka penyelenggaraan kegiatan Badan;</li>\r\n	<li>Membina dan mengembangkan karir pegawai badan;</li>\r\n	<li>Melaksanakan tugas selaki Pengguna Anggaran/Pengguna Barang;</li>\r\n	<li>Menyusun dan menyampaikan laporan keuangan badan sesuai ketentuan yang belaku;</li>\r\n	<li>Mengevaluasi pelaksanaan tugas dan menginventarisasi permasalaha di lingkup tugasnya serta mencari alternatif pemecahannya;</li>\r\n	<li>Mempelajari, memahami dan melaksanakan ketentuan yang belaki berkaitan dengan lingkup tugasnya sebagai pedoman dalam pelaksanaan tugas;</li>\r\n	<li>Memberikan saran dan pertimbangan teknis kepada Wali Kota;</li>\r\n	<li>Melaksanakan koordinasi dengan Sekretaris Daerah dan instansi terkait lainnya sesuai dengan lingkup tugasnya;</li>\r\n	<li>Membagi tugas, memberi petunjuk, menilai dan mengevaluasi hasil kerja bawahan agar pelaksanaan tugas dapat berjalan lancar sesuai dengan ketentuan yang berlaku;</li>\r\n	<li>Menyampaikan lapaoran hasil pelaksanaan tugas kepada Wali Kota melalui Sekretaris Daerah;</li>\r\n	<li>Melaksanakan tugas kedinasan lainnya yang diberikan oleh Wali Kota.</li>\r\n</ol>\r\n'),
(2, 3, 'Merencanakan kegiatan, melaksanakan, membagi tugas,  mengontrol, mengevaluasi dan melaporkan urusan kepegawaian, kehumasan dan dokumentasi, perlengkapan, perbekalan dan keperluan tulis, ruang perkantoran pada badan.', '<p>a. Perencanaan kegiatan&nbsp; urusan kepegawaian, kehumasan dan dokumentasi, perlengkapan, perbekalan dan keperluan tulis, ruang perkantoran</p>\r\n\r\n<p>b. Pelaksanaan urusan kepegawaian, kehumasan dan dokumentasi, perlengkapan, perbekalan dan keperluan tulis, ruang perkantoran</p>\r\n\r\n<p>c. Pelaksanaan pembagian tugas, mengontrol, evaluasi dan pelaporan urusan kepegawaian, kehumasan dan dokumentasi, perlengkapan, perbekalan dan keperluan tulis,&nbsp; ruang perkantoran</p>\r\n\r\n<p>d. Pelaksanaan tugas lain yang diberikan oleh atasan sesuai dengan tugas dan fungsinya;;</p>\r\n', '<ol>\r\n	<li>Menyusun Rencana Strategis (RENSTRA) dan Rencana Kinerja (RENJA) badan;</li>\r\n	<li>Menyusun LPPD, LKPJ, LKIP dan segala bentuk pelaporan lainnya sesuai bidang tugasnya;</li>\r\n	<li>Menyusun bahan kebijakan teknis Perencanaan Pembangunan Jangka Panjang (RPJP), Perencanaan Pembangunan Jangka Menengah (RPJMD) dan Rencana Pembangunan Kinerja Daerah (RKPD) lingkup tugasnya;</li>\r\n	<li>Menyusun rencana kerja Subbagian Umum dan Kepegawaian;</li>\r\n	<li>Melaksanakan urusan rumah tangga, ketertiban, keamanan dan kebersihan di lingkungan kerja;</li>\r\n	<li>Melaksanakan penyiapan rencana kebutuhan pengadaan sarana dan prasarana;</li>\r\n	<li>Melaksanakan pengurusan pengadaan, penyimpanan, pendistribusian, dan inventarisasi sarana prasarana badan serta aset lainnya;</li>\r\n	<li>Melaksanakan pemeliharaan dan perawatan sarana prasarana dinas dan aset lainnya;</li>\r\n	<li>Melaksanakan urusan keprotokolan, hubungan masyarakat, dan pendokumentasian;</li>\r\n	<li>Melaksanakan urusan administrasi kepegawaian di lingkup Badan yang meliputi layanan administrasi kenaikan pangkat, Kenaikan Gaji Berkala (KGB), Daftar Urut Kepangkatan (DUK), data pegawai, Kartu Pegawai (Karpeg), Karis/Karsu, tunjangan anak/keluarga, asuransi kesehatan, taspen,<br />\r\n	taperum, pensiun, membuat usulan formasi pegawai, membuat usulan izin belajar, membuat usulan diklat, kesejahteraan pegawai, penyesuaian ijazah, usulan memberi penghargaan dan tanda kehormatan, memberikan layanan Penilaian Angka Kredit (PAK) Jabatan Fungsional, pembinaan/teguran disiplin pegawai, membuat konsep dan proses usulan cuti pegawai sesuai aturan yang berlaku, membuat konsep dan proses usulan perizinan nikah dan cerai, membuat usulan pemberhentian dan pengangkatan dari dan dalam jabatan, membuat dan atau mengusulkan perpindahan / mutasi pegawai, pengelolaan&nbsp; Sasaran Kinerja Pegawai (SKP) sesuai dengan peraturan yang berlaku;</li>\r\n	<li>Melaksanakan pengelolaan administrasi perkantoran, kearsipan dan perpustakaan;</li>\r\n	<li>Melaksanakan penyiapan bahan pembinaan kepegawaian dan disiplin pegawai;</li>\r\n	<li>Melaksanakan penyiapan bahan standar kompetensi pegawai, tenaga teknis dan fungsional;</li>\r\n	<li>Mengevaluasi pelaksanaan tugas dan menginventarisasi permasalahan di lingkup tugasnya serta mencari alternatif pemecahannya;</li>\r\n	<li>Mempelajari, memahami dan melaksanakan peraturan perundang-undangan yang berkaitan dengan lingkup tugasnya sebagai pedoman dalam pelaksanaan tugas;</li>\r\n	<li>Memberikan saran dan pertimbangan teknis kepada atasan;</li>\r\n	<li>Membagi tugas, memberi petunjuk, menilai dan mengevaluasi hasil kerja bawahan agar pelaksanaan tugas dapat berjalan lancar sesuai dengan ketentuan yang berlaku;</li>\r\n	<li>Menyampaikan laporan pelaksanaan tugas dan/atau kegiatan kepada atasan;</li>\r\n	<li>Melaksanakan tugas kedinasan lainnya yang diberikan oleh atasan.</li>\r\n</ol>\r\n'),
(3, 4, 'Merencanakan kegiatan, melaksanakan, membagi tugas,  konsultasi, mengontrol, mengevaluasi, dan melaporkan  urusan  program dan urusan administrasi keuangan  lingkup pada badan.', '<ol>\r\n	<li>Perencanaan kegiatan&nbsp;&nbsp; perencanaan, evaluasi dan pelaporan dan administrasi keuangan pada badan;</li>\r\n	<li>Pelaksanaan perencanaan, evaluasi dan pelaporan yang meliputi&nbsp; penghimpunan rencana program/kegiatan dan administrasi keuangan dari masing-masing bidang pada badan;</li>\r\n	<li>Pelaksanaan pembagian&nbsp; tugas dan konsultasi urusan perencanaan, evaluasi dan pelaporan yang meliputi&nbsp; penghimpunan rencana program/kegiatan, administrasi keuangan, evaluasi dan laporan<br />\r\n	dari masing-masing bidang pada badan;</li>\r\n	<li>Pelaksanaan tugas lain yang diberikan oleh atasan sesuai dengan tugas dan fungsinya.</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Menyusun Rencana Strategis (RENSTRA) dan Rencana Kinerja (RENJA) badan;</li>\r\n	<li>Menyusun LPPD, LKPJ, LKIP dan segala bentuk pelaporan lainnya sesuai bidang tugasnya;</li>\r\n	<li>Menyusun bahan kebijakan teknis Perencanaan Pembangunan Jangka Panjang (RPJP), Perencanaan Pembangunan Jangka Menengah (RPJMD) dan Rencana Pembangunan Kinerja Daerah (RKPD) lingkup tugasnya;</li>\r\n	<li>Menghimpun dan menyusun bahan renstra dan renja di lingkup tugasnya;</li>\r\n	<li>Meneliti kelengkapan SPP-LS pengadaan barang dan jasa yang disampaikan oleh bendahara pengeluaran dan diketahui/disetujui oleh PPTK;</li>\r\n	<li>Meneliti kelengkapan SPP-UP, SPP-GU,SPP-TU, SPP-LS Belanja Tidak Langsung Gaji dan tunjangan serta Belanja PPKD sesuai dengan ketentuan perundang-undangan yang diajukan oleh bendahara pengeluaran;</li>\r\n	<li>Melaksanakan verifikasi Surat Pertanggungjawaban (SPJ) keuangan lingkup badan;</li>\r\n	<li>Menyusun administrasi dan pelaksanaan pembayaran gaji pegawai;</li>\r\n	<li>Menerima, mengadministrasikan dan menyetor penerimaan bukan pajak daerah;</li>\r\n	<li>Melaksanakan penyusunan dan penyampaian laporan keuangan semesteran dan akhir tahun;</li>\r\n	<li>Melaksanakan pencatatan akuntansi keuangan di lingkup badan sesuai dengan peraturan dan perundang-undangan berlaku;</li>\r\n	<li>Menghimpun, memaduserasikan dan menyusun bahan program kegiatan serta anggaran dari masing-masing bidang;</li>\r\n	<li>Menghimpun dan menganalisa data pelaporan kinerja dan kegiatan dari setiap bidang sebagai bahan evaluasi;</li>\r\n	<li>Menyusun Penetapan Kinerja (PK);</li>\r\n	<li>Menyusun informasi keuangan daerah;</li>\r\n	<li>Menyusun pelaksanaan Standar Pelayanan Publik (SPP) dan Standar Operasional dan Prosedur (SOP);</li>\r\n	<li>Menyampaikan data hasil pembangunan dan informasi lainnya terkait layanan publik secara berkala melalui website Pemerintah Daerah;</li>\r\n	<li>Mengevaluasi pelaksanaan tugas dan menginventarisasi permasalahan di lingkup tugasnya serta mencari alternatif pemecahannya;</li>\r\n	<li>Mempelajari, memahami dan melaksanakan peraturan perundang-undangan yang berkaitan dengan lingkup tugasnya sebagai pedoman dalam pelaksanaan tugas;</li>\r\n	<li>Memberikan saran dan pertimbangan teknis kepada atasan;</li>\r\n	<li>Membagi tugas, memberi petunjuk, menilai dan mengevaluasi hasil kerja bawahan agar pelaksanaapn tugas dapat berjalan lancar sesuai dengan ketentuan yang berlaku;</li>\r\n	<li>Menyampaikan laporan pelaksanaan tugas dan/atau kegiatan kepada atasan;</li>\r\n	<li>Melaksanakan tugas kedinasan lainnya yang diberikan oleh atasan.</li>\r\n</ol>\r\n'),
(4, 5, 'Memimpin, merumuskan, membina, memfasilitasi, mengoordinasikan dan mengendalikan penyelenggaraan  fungsi penunjang urusan pemerintahan bidang perencanaan aset dan anggaran', '<ol>\r\n	<li>Penyusunan perencanaan fungsi penunjang urusan pemerintahan bidang perencanaan aset dan anggaran;</li>\r\n	<li>Perumusan kebijakan teknis fungsi penunjang urusan pemerintahan bidang perencanaan aset dan anggaran;</li>\r\n	<li>Penyelenggaraan dan fasilitasi fungsi penunjang urusan pemerintahan bidang perencanaan aset dan anggaran;</li>\r\n	<li>Pembinaan, pengoordinasian, pengendalian, evaluasi dan pelaporan &nbsp;penyelenggaraan fungsi penunjang urusan pemerintahan bidang perencanaan aset dan anggaran;</li>\r\n	<li>Pelaksanaan tugas lain yang diberikan oleh atasan sesuai dengan tugas dan fungsinya.</li>\r\n</ol>\r\n', '<ol>\r\n	<li>Merumuskan Rencana Strategis (RENSTRA) dan Rencana Kinerja (RENJA) badan;</li>\r\n	<li>Merumuskan LPPD, LKPJ, LKIP dan segala bentuk pelaporan lainnya sesuai bidang tugasnya;</li>\r\n	<li>Merumuskan bahan kebijakan teknis Perencanaan Pembangunan Jangka Panjang (RPJP), Perencanaan Pembangunan Jangka Menengah (RPJMD) dan Rencana Pembangunan Kinerja Daerah (RKPD) lingkup tugasnya;</li>\r\n	<li>Menyusun dan melaksanakan kebijakan pengelolaan Keuangan Daerah.</li>\r\n	<li>Menyusun dan melaksanakan kebijakan dan pedoman pelaksanaan APBD.</li>\r\n	<li>Mengumpulkan bahan dan mengolah data pengesahan Kebijakan Umum APBD dan perubahan Kebijakan APBD;</li>\r\n	<li>Mengumpulkan bahan dan mengolah data penyusunan Prioritas dan Plafond Anggaran Sementara beserta perubahannya;</li>\r\n	<li>Mengumpulan bahan dan mengolah data penyusunan APBD dan perubahan APBD;</li>\r\n	<li>Menyiapkan bahan-bahan dalam rangka pengesahan Dokumen Pelaksanaan Anggaran (DPA);</li>\r\n	<li>Menyiapkan data perhitungan Uang Persediaan (UP) SKPD;</li>\r\n	<li>Mengevaluasi penyerapan/realisasi anggaran;</li>\r\n	<li>Menyiapkan bahan-bahan dalam rangka penetapan Surat Penyiapan Dana (SPD);</li>\r\n	<li>Mengumpulan bahan dan mengolah data Penyusunan Anggaran Kas;</li>\r\n	<li>Menyiapkan bahan-bahan dalam rangka Pergeseran Anggaran;</li>\r\n	<li>Memberikan saran-saran dan pertimbangan kepada kepala badan dalam bidang tugasnya;</li>\r\n	<li>Menyiapkan rencana dan rancangan peraturan daerah pembentukan dana cadangan, pinjaman<br />\r\n	daerah/hutang, penyertaan modal/ investasi dan pemberian pinjaman daerah;</li>\r\n	<li>Mengevaluasi pelaksanaan tugas dan menginventarisasi permasalahan di lingkup tugasnya serta mencari alternatif pemecahannya;</li>\r\n	<li>Mempelajari, memahami dan melaksanakan peraturan perundang-undangan yang berkaitan dengan lingkup tugasnya sebagai pedoman dalam pelaksanaan tugas;</li>\r\n	<li>Memberikan saran dan pertimbangan teknis kepada atasan;</li>\r\n	<li>Membagi tugas, memberi petunjuk, menilai dan mengevaluasi hasil kerja bawahan agar pelaksanaapn tugas dapat berjalan lancar sesuai dengan ketentuan yang berlaku;</li>\r\n	<li>Menyampaikan laporan pelaksanaan tugas dan/atau kegiatan kepada atasan;</li>\r\n	<li>Melaksanakan tugas kedinasan lainnya yang diberikan oleh atasan.</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_home`
--

CREATE TABLE `galeri_home` (
  `id_galeri` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tgl_upload` date NOT NULL,
  `deskripsi_gambar` text,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `judul_gambar` varchar(100) DEFAULT NULL,
  `url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri_home`
--

INSERT INTO `galeri_home` (`id_galeri`, `gambar`, `tgl_upload`, `deskripsi_gambar`, `status`, `judul_gambar`, `url`) VALUES
(6, 'file_1543309289.jpg', '2018-11-26', 'ghhhhhhhhhhhhhhhhhhhhhh\'opopopopopopopopopopopopopopopopop', 0, 'hggggggggggggggggggggggggggggggggggggggassssss', 'ggggggggggggggggggggggggggggggggg'),
(7, 'tugu-mobile.jpg', '2018-11-25', NULL, 0, NULL, ''),
(8, 'curug-cimahi.jpg', '2018-11-25', NULL, 0, NULL, ''),
(9, 'desk.jpg', '2018-11-25', NULL, 0, NULL, ''),
(10, '1537149139_1.jpg', '2018-11-25', NULL, 0, NULL, ''),
(12, 'tugu-mobile.jpg', '2018-11-26', NULL, 0, NULL, ''),
(13, 'top.jpg', '2018-11-26', NULL, 0, NULL, ''),
(14, 'talenta.jpg', '2019-02-19', NULL, 1, NULL, ''),
(15, 'ams.jpg', '2019-02-19', NULL, 1, NULL, 'http://localhost/assets/img_gallery/ams.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'user', 'Group Buat User'),
(4, 'supervisor', 'Supervisor'),
(5, 'hrd', 'HRD'),
(6, 'dropship', 'Dropship'),
(7, 'finance', 'Finance'),
(9, 'superadmin', 'Superadmin'),
(10, 'toko', 'toko'),
(11, 'manajemen', 'manajemen'),
(12, 'tani', 'tani');

-- --------------------------------------------------------

--
-- Table structure for table `image_berita`
--

CREATE TABLE `image_berita` (
  `id_image_berita` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `image` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_keuangan`
--

CREATE TABLE `informasi_keuangan` (
  `id_info` int(11) NOT NULL,
  `tahun` varchar(100) DEFAULT NULL,
  `nama_file` varchar(100) DEFAULT NULL,
  `judul_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi_keuangan`
--

INSERT INTO `informasi_keuangan` (`id_info`, `tahun`, `nama_file`, `judul_file`) VALUES
(3, '2008', '2.Neraca_Pemerintah_Kota_Cimahi_Per_31_Desember_2008_dan_2007.pdf', '2.Neraca_Pemerintah_Kota_Cimahi_Per_31_Desember_2008_dan_2007.pdf'),
(4, '2008', '1.Laporan_Realisasi_Anggaran_Pemerintah_Kota_Cimahi_Untuk_Tahun_Yang_Berakhir_Sampai_Dengan_31_Desem', '1.Laporan_Realisasi_Anggaran_Pemerintah_Kota_Cimahi_Untuk_Tahun_Yang_Berakhir_Sampai_Dengan_31_Desem'),
(5, '2009', '4.Neraca_2009.pdf', '4.Neraca_2009.pdf'),
(6, '2009', '3.Laporan_Realisasi_Anggaran_2009.pdf', '3.Laporan_Realisasi_Anggaran_2009.pdf'),
(7, '2009', '2.Laporan_Arus_Kas_2009.pdf', '2.Laporan_Arus_Kas_2009.pdf'),
(8, '2009', '1.Catatan_Atas_Laporan_Keuangan_Arus_Kas_dan_Neraca_2009.pdf', '1.Catatan_Atas_Laporan_Keuangan_Arus_Kas_dan_Neraca_2009.pdf'),
(9, '2010', '1._Catatan_Atas_Laporan_Keuangan_Arus_Kas_dan_Neraca_2010.pdf', '1._Catatan_Atas_Laporan_Keuangan_Arus_Kas_dan_Neraca_2010.pdf'),
(10, '2010', '2._Laporan_Arus_Kas_2010.pdf', '2._Laporan_Arus_Kas_2010.pdf'),
(11, '2010', '3._Laporan_Realisasi_Anggaran_2010.pdf', '3._Laporan_Realisasi_Anggaran_2010.pdf'),
(12, '2010', '4._Neraca_2010.pdf', '4._Neraca_2010.pdf'),
(13, '2011', '4.Neraca_2011.pdf', '4.Neraca_2011.pdf'),
(14, '2011', '3.Laporan_Realisasi_Anggaran_2011.pdf', '3.Laporan_Realisasi_Anggaran_2011.pdf'),
(15, '2011', '2.Laporan_Arus_Kas._2011.pdf', '2.Laporan_Arus_Kas._2011.pdf'),
(16, '2011', '1.Catatan_Atas_Laporan_Keuangan_Arus_Kas_dan_Neraca_2011.pdf', '1.Catatan_Atas_Laporan_Keuangan_Arus_Kas_dan_Neraca_2011.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Kepalas'),
(3, 'Kepala Sub Bagian Umum dan Kepegawaian'),
(4, 'Kepala Sub Bagian Program dan Keuangan'),
(5, 'Kepala Bidang Perencanaan Aset dan Anggaran'),
(6, 'Kepala Sub Bidang Perencanaan Anggaran'),
(7, 'Kepala Sub Bidang Perencanaan Aset'),
(8, 'Kepala Bidang Akuntansi dan Perbendaharaan'),
(9, 'Kepala Sub Bidang Perbendaharaan dan Kas Daerah'),
(10, 'Kepala Sub Bidang Akuntansi'),
(11, 'Kepala Bidang Pengelolaan Barang Milik Daerah'),
(12, 'Kepala Sub Bidang Inventarisasi dan Pengamanan Bar'),
(14, 'Kepala Sub Bidang Pemanfaatan dan Penghapusan Bara'),
(16, 'Sekretaris');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_apbd`
--

CREATE TABLE `jenis_apbd` (
  `id_jenis_apbd` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_apbd`
--

INSERT INTO `jenis_apbd` (`id_jenis_apbd`, `jenis`) VALUES
(1, 'PENDAPATAN'),
(2, 'BELANJA');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_rbd`
--

CREATE TABLE `jenis_rbd` (
  `id_jenis_rbd` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_rbd`
--

INSERT INTO `jenis_rbd` (`id_jenis_rbd`, `jenis`) VALUES
(1, 'Belanja Langsung'),
(3, 'Belanja Tidak Langsung');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori_berita` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `url` varchar(50) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori_berita`, `kategori`, `url`, `parent`) VALUES
(1, 'Arikel', NULL, NULL),
(2, 'Informasi Penting', NULL, NULL),
(3, 'Sepak Bola', NULL, NULL),
(4, 'laporan-percintaan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `komentar_berita`
--

CREATE TABLE `komentar_berita` (
  `id` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `judul` text,
  `pesan` text,
  `tanggal` datetime NOT NULL,
  `status_dibalas` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `judul`, `pesan`, `tanggal`, `status_dibalas`) VALUES
(2, 'Renisa Adidaya', 'bursa.sajadah@gmail.com', 'KOmplen Soal Tata Ruang Taman', 'Badan Pengelola Keuangan dan Aset Daerah Kota Cimahi berkomitmen untuk memberikan pelayanan terbaik kepada masyarakat. \r\nKemudahan akses layanan informasi, BPKAD Kota Cimahi menyediakan layanan informasi yang dapat dihubungi melalui:', '2018-12-20 08:21:38', 0),
(3, 'Resti aditya', 'ranipebrianti84@gmail.com', 'Komplen Soal Sekolah', 'Badan Pengelola Keuangan dan Aset Daerah Kota Cimahi berkomitmen untuk memberikan pelayanan terbaik kepada masyarakat. \r\nKemudahan akses layanan informasi, BPKAD Kota Cimahi menyediakan layanan informasi yang dapat dihubungi melalui:', '2018-12-20 08:23:56', 0),
(4, 'Febri Anti', 'bursa.sajadah@gmail.com', 'Aku mau kamu', 'Badan Pengelola Keuangan dan Aset Daerah \r\nJalan Rd. Demang Hardjakusumah \r\nBlok Jati, CIhanjuang, Cimahi', '2018-12-20 08:51:54', 0),
(5, 'Cindi Asina', 'ranipebrianti51@yahoo.com', 'Komplen Soal Bangku Sekolah', 'Badan Pengelola Keuangan dan Aset Daerah \r\nJalan Rd. Demang Hardjakusumah \r\nBlok Jati, CIhanjuang, Cimahi', '2018-12-20 08:53:16', 1),
(7, 'denisa abdullah', 'bursa.sajadah@gmail.com', 'ASSSSSSSadadsfsfffffffffffffffffff', 'Badan Pengelola Keuangan dan Aset Daerah \r\nKota Cimahi\r\nBadan Pengelola Keuangan dan Aset Daerah Kota Cimahi berkomitmen untuk memberikan pelayanan terbaik kepada masyarakat. \r\nKemudahan akses layanan informasi, BPKAD Kota Cimahi menyediakan layanan informasi yang dapat dihubungi melalui:', '2018-12-20 09:33:45', 0),
(8, 'herdina', 'ranipebrianti84@gmail.com', 'Herdina Wijaya', 'Badan Pengelola Keuangan dan Aset Daerah \r\nKota Cimahi\r\nBadan Pengelola Keuangan dan Aset Daerah Kota Cimahi berkomitmen untuk memberikan pelayanan terbaik kepada masyarakat. \r\nKemudahan akses layanan informasi, BPKAD Kota Cimahi menyediakan layanan informasi yang dapat dihubungi melalui:\r\n\r\nBadan Pengelola Keuangan dan Aset Daerah \r\nJalan Rd. Demang Hardjakusumah \r\nBlok Jati, CIhanjuang, Cimahi', '2018-12-20 09:34:25', 0),
(9, 'risa saras', 'ranipebrianti84@gmail.com', 'Niat Hati Ngucapin Makasih dengan Ramah, Cewek ini Malah Disleding Istri Kurir Pengirim Barang. Duh~', 'Berkat kecanggihan internet dan teknologi saat ini, berbagai usaha baru muncul dan langsung menjadi primadona di mata masyarakat. Sebut saja online shop yang kian hari menjamur. Kemudahan dalam berbelanja tanpa harus pergi ke tokonya membuat online shop laris manis. Pun dengan kurir pengirim barangnya. Sehubungan dengan barang yang dibeli memiliki jarak yang lumayan, otomatis jasa pengirim barang menjadi andalan untuk menjembatani penjual dan pembeli.', '2018-12-20 09:41:43', 0),
(10, 'tes4', 'ranipebrianti84@gmail.com', 'Niat Hati Ngucapin Makasih dengan Ramah, Cewek ini Malah Disleding Istri Kurir Pengirim Barang. Duh~', '\r\nSang kurir tampaknya kaget, ketika pemilik barang tahu namanya. Lalu dia pun bertanya kepada si pemilik barang. Setelah dijelaskan bahwa namanya tertera di WhatsApp, tiba-tiba saja istri dari sang kurir langsung memarahi cewek tersebut. Bahkan dia dibilang gatel sama suami orang. Berhubung sang cewek menanggapi dengan santai, dia pun malah membalas tuduhan istri sang kurir dengan guyonan. Tapi hal tersebut justru membuat sang istri semakin meradang sampai-sampai menyebut si pemilik barang dengan pelakor (perebut laki orang). Mungkin ikutan gemes sama tuduhan tak berdasar istri sang kurir, si cewek pun membalas dengan menyebut nama kurir tersebut puluhan kali ????', '2018-12-20 09:45:19', 0),
(11, 'Rani Pebrianti', 'ranipebrianti84@gmail.com', '12 Hal Ngeselin dari Teman Kosan yang Jadi Pemicu Kita buat Nggak Malas-Malasan Lagi. Ampuh Banget!', 'Namanya juga tiap orang beda-beda, maka kamu perlu adaptasi sama dia. Ada hal-hal darinya yang sebenarnya baik, tapi cara penyampaiannya saja yang nggak “klik” dengan dirimu. Beragam hal yang kamu keselin ini pun sebetulnya jadi pemicu supaya kamu nggak malas-malasan lagi. Nah, sadar nggak? Coba cek dalam ulasan ini deh. Ampuh banget buat bikin kamu nggak mageran lagi lo~', '2018-12-20 09:55:45', 0),
(12, 'Sandy Aulia', 'ranipebrianti84@gmail.com', 'Korea', 'Pada tahun 2018, BTS kembali mengeluarkan karya yang mengguncang jagat musik tidak hanya di Korea, tetapi juga di seluruh dunia. Berduet dengan rapper ternama, Nicky Minaj, BTS mengeluarkan karya yang berjudul ‘Idol’. Tidak hanya tangga musik di Korea, lagu ini juga menempati posisi yang cukup tinggi di tangga lagu Billboard.', '2018-12-20 10:19:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `nama_laporan` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `nama_laporan`, `status`, `url`) VALUES
(1, 'APBD Kota Cimahi', 1, 'apbd-kota-cimahi'),
(2, 'Laporan Kegiatan BPKAD', 1, 'laporan-kegiatan-bpkad'),
(3, 'Transparansi Kinerja BPKAD', 1, 'transparansi-kinerja-bpkad'),
(4, 'Laporan Keuangan Kota Cimahi', 1, 'laporan-keuangan-kota-cimahi');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id_pelayanan` int(11) NOT NULL,
  `pelayanan` text NOT NULL,
  `desc_pelayanan` text NOT NULL,
  `tgl` date NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `jenis` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `pelayanan`, `desc_pelayanan`, `tgl`, `status`, `jenis`) VALUES
(8, 'Pelayanan Verifikasi Surat Perintah Membayar (SPM', '<p>Pencairan anggaran adalah proses tersedianya dana pembiayaan kegiayan yang dilakukan sesuai rencana operasional atau program kerja. Surat Perintah Membayar (SPM) adalah dokumen yang diterbitkan oleh Pengguna Anggaran / Kuasa Pengguna Anggaran atau pejabat lain yang ditunjuk untuk mencairkan dana yang bersumber dari DPA.</p>\r\n', '2018-11-29', 1, 1),
(9, 'Pelayanan Penerbitan Daftar Gaji ASN', '<p>Gaji adalah pengeluaran untuk kompensasi yang harus dibayarkan kepada pegawai pemerintah berupa gaji poko ditambah dengan tunjangan-tunjangan yang sah yang berhak diterima oleh penerima gaji berdasarkan peraturan dan perundang-undangan yang berlaku. Dalam menentukan bersarnya gaji perlu memperhatikan kemampuan keuangan negara, selain itu diperlukan untuk memperhatikan keadaan dimana pegawai negeri tersebut dipekerjakan. Pembarayan gaji diberikan setiap awal bulan dan rincian pembayaran gaji dimuat dalam sebuah daftar yang disebut dengan daftar gaji induk/bulanan yang dikeluarkan oleh satuan kerja di mana pegawai tersebut gajinya dibayarkan.</p>\r\n', '2018-11-29', 1, 1),
(10, 'Pelayanan Penerbitan Surat Keterangan Pemberhentian Pembayaran', '<p>SKPP merupakan surat keterangan tentang penghentian pembayaran gaji terhitung mulai bulan dihentikan pembayarannya yang dibuat/dikeluarkan oleh Kuasa Pengguna Anggaran atau pegawai yang pindah atau pensiun berdasarkan surat keputusan yang diterbitkan Pemerintah Daerah. SKPP diterbitkan dengan tujuan agar pegawai yang pindah dapat dilanjutkan pembayaran gajinya oleh instansinya di tempat baru atau dibayarkan pensiunnya.</p>\r\n', '2018-11-29', 1, 1),
(11, 'Pelayanan Konsultasi Pengelolaan Keuangan Daerah', '<p>Pengelolaan Keuangan Daerah adalah keseluruhan kegiatan yang meliputi perencanaan, pelaksanaan, penatausahaan, pelaporan, pertanggunjawaban, dan pengawasan keuangan daerah. Dalam hal ini pelayanan konsultasi hanya melayani dari segi perncanaan, pelaksanaan, penatausahaan, pelaporan dan pertanggungjawaban. Sisi pengawasan tidak diikutsertakan, dikarenakan sisi pengawasan merupakan bukan tugas dan fungsi dari Badan Pengelolaan Keuangan dan Aset Daerah.</p>\r\n', '2018-11-29', 1, 1),
(12, 'aaa', '<p>sss</p>\r\n', '2020-01-22', 1, 1),
(13, 'jjjj', '<p>nnn</p>\r\n', '2020-01-22', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `perubahan_apbd`
--

CREATE TABLE `perubahan_apbd` (
  `id_perubahan` int(11) NOT NULL,
  `nomor_urut` varchar(500) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `jumlah` varchar(300) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `status` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perubahan_apbd`
--

INSERT INTO `perubahan_apbd` (`id_perubahan`, `nomor_urut`, `uraian`, `jumlah`, `tahun`, `status`) VALUES
(1, '5.2.3.', 'BELANJA MODAL', '403050193990.65', '2019', 'Murni'),
(2, '5.2.1.', 'BELANJA PEGAWAI', '84621851000', '2019', 'Murni'),
(3, '5.1.7.', 'Belanja Bantuan Keuangan Kepada Provinsi Kabupaten Kota Dan Pemerintah Desa', '926912304', '2019', 'Murni'),
(4, '5.1.5.', 'Belanja Bantuan Sosial', '0', '2019', 'Murni'),
(5, '5.1.2.', 'Belanja Bunga', '2000000000', '2019', 'Murni'),
(6, '5.1.4.', 'Belanja Hibah', '12685800000', '2019', 'Murni'),
(7, '5.1.1.', 'BELANJA PEGAWAI', '642842996313.59', '2019', 'Murni'),
(8, '5.1.8.', 'Belanja Tidak Terduga', '12611113018.36', '2019', 'Murni'),
(9, '6.2.3.', 'PEMBAYARAN POKOK UTANG', '2429808337', '2019', 'Murni'),
(10, '6.2.2.', 'PENYERTAAN MODAL (INVESTASI) PEMERINTAH DAERAH', '3500000000', '2019', 'Murni'),
(11, '6.1.1.', 'SISA LEBIH PERHITUNGAN ANGGARAN DAERAH TAHUN SEBELUMNYA', '295137835130.74', '2019', 'Murni'),
(12, '4.2.1.', 'Bagi Hasil Pajak Bagi Hasil Bukan Pajak ', '69150256000', '2019', 'Murni'),
(13, '4.2.3.', 'Dana Alokasi Khusus', '162229380000', '2019', 'Murni'),
(14, '4.2.2.', 'Dana Alokasi Umum', '596026304000', '2019', 'Murni'),
(15, '4.3.3.', 'Dana Bagi Hasil Pajak dari Provinsi ', '141554363948', '2019', 'Murni'),
(16, '4.3.7.', 'Dana Insentif Daerah', '42092139000', '2019', 'Murni'),
(17, '4.1.1.', 'Hasil Pajak Daerah', '245821741388', '2019', 'Murni'),
(18, '4.1.3.', 'Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan', '9880734391', '2019', 'Murni'),
(19, '4.1.2.', 'Hasil Retribusi Daerah', '12859294744.86', '2019', 'Murni'),
(20, '4.1.4.', 'Lain-lain Pendapatan Asli Daerah yang Sah', '175682502521', '2019', 'Murni'),
(21, '5.2.2.', 'BELANJA BARANG DAN JASA', '511753781692', '2018', 'Murni'),
(22, '5.2.3.', 'BELANJA MODAL', '330871586361.6', '2018', 'Murni'),
(23, '5.2.1.', 'BELANJA PEGAWAI', '83394572300', '2018', 'Murni'),
(24, '5.1.7.', 'Belanja Bantuan Keuangan Kepada Provinsi/Kabupaten/Kota Dan Pemerintah  Desa', '926912304', '2018', 'Murni'),
(25, '5.1.2.', 'Belanja Bunga', '2000000000', '2018', 'Murni'),
(26, '5.1.4.', 'Belanja Hibah', '17290350000', '2018', 'Murni'),
(27, '5.1.1.', 'BELANJA PEGAWAI', '611745216958.87', '2018', 'Murni'),
(28, '5.1.8.', 'Belanja Tidak Terduga', '15941636943', '2018', 'Murni'),
(29, '6.2.3.', 'Pembayaran Pokok Utang', '2429808337', '2018', 'Murni'),
(30, '6.1.1.', 'Sisa Lebih Perhitungan Anggaran Daerah Tahun Sebelumnya', '298274472073.74', '2018', 'Murni'),
(31, '4.2.1.', 'Bagi Hasil Pajak/Bagi Hasil Bukan Pajak ', '93433796000', '2018', 'Murni'),
(32, '4.2.3.', 'Dana Alokasi Khusus', '157470017000', '2018', 'Murni'),
(33, '4.2.2.', 'Dana Alokasi Umum', '576278051000', '2018', 'Murni'),
(34, '4.3.3.', 'Dana Bagi Hasil Pajak dari Provinsi ', '117287213713.25', '2018', 'Murni'),
(35, '4.3.7.', 'Dana Insentif Daerah', '9000000000', '2018', 'Murni'),
(36, '4.1.1.', 'Hasil Pajak Daerah', '132108046123.69', '2018', 'Murni'),
(37, '4.1.3.', 'Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan', '9256000000', '2018', 'Murni'),
(38, '4.1.2.', 'Hasil Retribusi Daerah', '12578133468.45', '2018', 'Murni'),
(39, '4.1.4.', 'Lain-lain Pendapatan Asli Daerah yang Sah', '170668135517.34', '2018', 'Murni'),
(40, '5.2.2.', 'BELANJA BARANG DAN JASA', '584037435237.5', '2018', 'Perubahan'),
(41, '5.2.3.', 'BELANJA MODAL', '363487982456.96', '2018', 'Perubahan'),
(42, '5.2.1.', 'BELANJA PEGAWAI', '97027373600', '2018', 'Perubahan'),
(43, '5.1.7.', 'Belanja Bantuan Keuangan Kepada Provinsi/Kabupaten/Kota Dan Pemerintah  Desa', '926912304', '2018', 'Perubahan'),
(44, '5.1.5.', 'Belanja Bantuan Sosial', '626250000', '2018', 'Perubahan'),
(45, '5.1.2.', 'Belanja Bunga', '750000000', '2018', 'Perubahan'),
(46, '5.1.4.', 'Belanja Hibah', '17290350000', '2018', 'Perubahan'),
(47, '5.1.1.', 'BELANJA PEGAWAI', '611745216959', '2018', 'Perubahan'),
(48, '5.1.8.', 'Belanja Tidak Terduga', '15881968180', '2018', 'Perubahan'),
(49, '6.2.3.', 'Pembayaran Pokok Utang', '2429808337', '2018', 'Perubahan'),
(50, '6.2.2.', 'Penyertaan Modal (Investasi) Pemerintah Daerah', '3500000000', '2018', 'Perubahan'),
(51, '6.1.1.', 'Sisa Lebih Perhitungan Anggaran Daerah Tahun Sebelumnya', '339315908039.53', '2018', 'Perubahan'),
(52, '4.2.1.', 'Bagi Hasil Pajak/Bagi Hasil Bukan Pajak ', '97689285000', '2018', 'Perubahan'),
(53, '4.3.5.', 'Bantuan keuangan  dari  Provinsi atau pemerintah daerah lainnya', '12196916200', '2018', 'Perubahan'),
(54, '4.2.3.', 'Dana Alokasi Khusus', '157470504000', '2018', 'Perubahan'),
(55, '4.2.2.', 'Dana Alokasi Umum', '576278051000', '2018', 'Perubahan'),
(56, '4.3.3.', 'Dana Bagi Hasil Pajak dari Provinsi ', '130325338651', '2018', 'Perubahan'),
(57, '4.3.7.', 'Dana Insentif Daerah', '9000000000', '2018', 'Perubahan'),
(58, '4.1.1.', 'Hasil Pajak Daerah', '132108046123.69', '2018', 'Perubahan'),
(59, '4.1.3.', 'Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan', '9391200000', '2018', 'Perubahan'),
(60, '4.1.2.', 'Hasil Retribusi Daerah', '13042067600', '2018', 'Perubahan'),
(61, '4.1.4.', 'Lain-lain Pendapatan Asli Daerah yang Sah', '172301380460.24', '2018', 'Perubahan'),
(62, '4.3.1.', 'Pendapatan Hibah', '48584600000', '2018', 'Perubahan'),
(63, '5.2.2.', 'BELANJA BARANG DAN JASA', '484196155121', '2017', 'Murni'),
(64, '5.2.3.', 'BELANJA MODAL', '365403137493', '2017', 'Murni'),
(65, '5.2.1.', 'BELANJA PEGAWAI', '108176194250', '2017', 'Murni'),
(66, '5.1.7.', 'Belanja Bantuan Keuangan Kepada Provinsi/Kabupaten/Kota Dan Pemerintah  Desa', '926912304', '2017', 'Murni'),
(67, '5.1.2.', 'Belanja Bunga', '14531600375', '2017', 'Murni'),
(68, '5.1.4.', 'Belanja Hibah', '8767324700', '2017', 'Murni'),
(69, '5.1.1.', 'BELANJA PEGAWAI', '620026863671.75', '2017', 'Murni'),
(70, '5.1.8.', 'Belanja Tidak Terduga', '2229011000.5', '2017', 'Murni'),
(71, '6.2.3.', 'Pembayaran Pokok Utang', '2429808337', '2017', 'Murni'),
(72, '6.1.4.', 'Penerimaan Pinjaman Daerah', '92000000000', '2017', 'Murni'),
(73, '6.2.2.', 'Penyertaan Modal (Investasi) Pemerintah Daerah', '3500000000', '2017', 'Murni'),
(74, '6.1.1.', 'Sisa Lebih Perhitungan Anggaran Daerah Tahun Sebelumnya', '186151094799.06', '2017', 'Murni'),
(75, '4.2.1.', 'Bagi Hasil Pajak/Bagi Hasil Bukan Pajak ', '64435380000', '2017', 'Murni'),
(76, '4.2.3.', 'Dana Alokasi Khusus', '177148454000', '2017', 'Murni'),
(77, '4.2.2.', 'Dana Alokasi Umum', '586582418000', '2017', 'Murni'),
(78, '4.3.3.', 'Dana Bagi Hasil Pajak dari Provinsi ', '104044649270', '2017', 'Murni'),
(79, '4.3.7.', 'Dana Insentif Daerah', '55382603000', '2017', 'Murni'),
(80, '4.1.1.', 'Hasil Pajak Daerah', '111367796978', '2017', 'Murni'),
(81, '4.1.3.', 'Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan', '8819200000', '2017', 'Murni'),
(82, '4.1.2.', 'Hasil Retribusi Daerah', '8418886362', '2017', 'Murni'),
(83, '4.1.4.', 'Lain-lain Pendapatan Asli Daerah yang Sah', '141731306439', '2017', 'Murni'),
(84, '5.2.2.', 'BELANJA BARANG DAN JASA', '530644832590', '2017', 'Perubahan'),
(85, '5.2.3.', 'BELANJA MODAL', '355148717013', '2017', 'Perubahan'),
(86, '5.2.1.', 'BELANJA PEGAWAI', '126036625086', '2017', 'Perubahan'),
(87, '5.1.7.', 'Belanja Bantuan Keuangan Kepada Provinsi/Kabupaten/Kota Dan Pemerintah  Desa', '1112117364', '2017', 'Perubahan'),
(88, '5.1.2.', 'Belanja Bunga', '6212161375', '2017', 'Perubahan'),
(89, '5.1.4.', 'Belanja Hibah', '14431924700', '2017', 'Perubahan'),
(90, '5.1.1.', 'BELANJA PEGAWAI', '636645208492.97', '2017', 'Perubahan'),
(91, '5.1.8.', 'Belanja Tidak Terduga', '24489121223.12', '2017', 'Perubahan'),
(92, '6.2.3.', 'Pembayaran Pokok Utang', '10749247337', '2017', 'Perubahan'),
(93, '6.1.4.', 'Penerimaan Pinjaman Daerah', '0', '2017', 'Perubahan'),
(94, '6.2.2.', 'Penyertaan Modal (Investasi) Pemerintah Daerah', '3500000000', '2017', 'Perubahan'),
(95, '6.1.1.', 'Sisa Lebih Perhitungan Anggaran Daerah Tahun Sebelumnya', '206225060012.65', '2017', 'Perubahan'),
(96, '4.2.1.', 'Bagi Hasil Pajak/Bagi Hasil Bukan Pajak ', '68912299938', '2017', 'Perubahan'),
(97, '4.3.5.', 'Bantuan keuangan  dari  Provinsi atau pemerintah daerah lainnya', '69663500000', '2017', 'Perubahan'),
(98, '4.2.3.', 'Dana Alokasi Khusus', '195239254000', '2017', 'Perubahan'),
(99, '4.2.2.', 'Dana Alokasi Umum', '576278051000', '2017', 'Perubahan'),
(100, '4.3.3.', 'Dana Bagi Hasil Pajak dari Provinsi ', '117461754521', '2017', 'Perubahan'),
(101, '4.3.6.', 'Dana BOS', '51162883230', '2017', 'Perubahan'),
(102, '4.3.7.', 'Dana Insentif Daerah', '55382603000', '2017', 'Perubahan'),
(103, '4.1.1.', 'Hasil Pajak Daerah', '116923551744', '2017', 'Perubahan'),
(104, '4.1.3.', 'Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan', '9256000000', '2017', 'Perubahan'),
(105, '4.1.2.', 'Hasil Retribusi Daerah', '9354664440', '2017', 'Perubahan'),
(106, '4.1.4.', 'Lain-lain Pendapatan Asli Daerah yang Sah', '175440496864.44', '2017', 'Perubahan'),
(107, '4.3.1.', 'Pendapatan Hibah', '0', '2017', 'Perubahan'),
(108, '5.2.2.', 'BELANJA BARANG DAN JASA', '364076724391', '2016', 'Murni'),
(109, '5.2.3.', 'BELANJA MODAL', '421698222835', '2016', 'Murni'),
(110, '5.2.1.', 'BELANJA PEGAWAI', '80201490600', '2016', 'Murni'),
(111, '5.1.7.', 'Belanja Bantuan Keuangan Kepada Provinsi/Kabupaten/Kota Dan Pemerintah  Desa', '926912304', '2016', 'Murni'),
(112, '5.1.5.', 'Belanja Bantuan Sosial', '300000000', '2016', 'Murni'),
(113, '5.1.2.', 'Belanja Bunga', '1024100375', '2016', 'Murni'),
(114, '5.1.4.', 'Belanja Hibah', '38500000000', '2016', 'Murni'),
(115, '5.1.1.', 'BELANJA PEGAWAI', '643950346727.63', '2016', 'Murni'),
(116, '5.1.8.', 'Belanja Tidak Terduga', '1500000000', '2016', 'Murni'),
(117, '6.2.3.', 'Pembayaran Pokok Utang', '3180194826.75', '2016', 'Murni'),
(118, '6.1.4.', 'Penerimaan Pinjaman Daerah', '150000000000', '2016', 'Murni'),
(119, '6.2.2.', 'Penyertaan Modal (Investasi) Pemerintah Daerah', '3000000000', '2016', 'Murni'),
(120, '6.1.1.', 'Sisa Lebih Perhitungan Anggaran Daerah Tahun Sebelumnya', '188826673149.38', '2016', 'Murni'),
(121, '4.2.1.', 'Bagi Hasil Pajak/Bagi Hasil Bukan Pajak ', '65308728000', '2016', 'Murni'),
(122, '4.3.5.', 'Bantuan keuangan  dari  Provinsi atau pemerintah daerah lainnya', '0', '2016', 'Murni'),
(123, '4.2.3.', 'Dana Alokasi Khusus', '233031417460', '2016', 'Murni'),
(124, '4.2.2.', 'Dana Alokasi Umum', '586582418000', '2016', 'Murni'),
(125, '4.3.3.', 'Dana Bagi Hasil Pajak dari Provinsi ', '102625209334', '2016', 'Murni'),
(126, '4.3.7.', 'Dana Insentif Daerah', '5000000000', '2016', 'Murni'),
(127, '4.3.4.', 'Dana Penyesuaian dan Otonomi Khusus', '0', '2016', 'Murni'),
(128, '4.1.1.', 'Hasil Pajak Daerah', '100613754640', '2016', 'Murni'),
(129, '4.1.3.', 'Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan', '7446400000', '2016', 'Murni'),
(130, '4.1.2.', 'Hasil Retribusi Daerah', '7268279761', '2016', 'Murni'),
(131, '4.1.4.', 'Lain-lain Pendapatan Asli Daerah yang Sah', '111655111715', '2016', 'Murni'),
(132, '5.2.2.', 'BELANJA BARANG DAN JASA', '431866792893.61', '2016', 'Perubahan'),
(133, '5.2.3.', 'BELANJA MODAL', '467770856811', '2016', 'Perubahan'),
(134, '5.2.1.', 'BELANJA PEGAWAI', '96819481131', '2016', 'Perubahan'),
(141, '6.2.3.', 'Pembayaran Pokok Utang', '1574300117', '2016', 'Perubahan'),
(142, '6.1.4.', 'Penerimaan Pinjaman Daerah', '135000000000', '2016', 'Perubahan'),
(143, '6.2.5.', 'Pengembalian Dana', '0', '2016', 'Perubahan'),
(144, '6.2.2.', 'Penyertaan Modal (Investasi) Pemerintah Daerah', '0', '2016', 'Perubahan'),
(145, '6.1.1.', 'Sisa Lebih Perhitungan Anggaran Daerah Tahun Sebelumnya', '338548135887.7', '2016', 'Perubahan'),
(146, '4.2.1.', 'Bagi Hasil Pajak/Bagi Hasil Bukan Pajak ', '68110816854', '2016', 'Perubahan'),
(147, '4.3.5.', 'Bantuan keuangan  dari  Provinsi atau pemerintah daerah lainnya', '17250857500', '2016', 'Perubahan'),
(148, '4.2.3.', 'Dana Alokasi Khusus', '157703909100', '2016', 'Perubahan'),
(149, '4.2.2.', 'Dana Alokasi Umum', '586582418000', '2016', 'Perubahan'),
(150, '4.3.3.', 'Dana Bagi Hasil Pajak dari Provinsi ', '108366132538', '2016', 'Perubahan'),
(151, '4.3.7.', 'Dana Insentif Daerah', '5000000000', '2016', 'Perubahan'),
(152, '4.3.4.', 'Dana Penyesuaian dan Otonomi Khusus', '0', '2016', 'Perubahan'),
(153, '4.1.1.', 'Hasil Pajak Daerah', '105808628248', '2016', 'Perubahan'),
(154, '4.1.3.', 'Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan', '8819200000', '2016', 'Perubahan'),
(155, '4.1.2.', 'Hasil Retribusi Daerah', '8730233142', '2016', 'Perubahan'),
(156, '4.1.4.', 'Lain-lain Pendapatan Asli Daerah yang Sah', '129393850549', '2016', 'Perubahan'),
(157, '4.3.1.', 'Pendapatan Hibah', '2444000000', '2016', 'Perubahan'),
(158, '5.2.2.', 'BELANJA BARANG DAN JASA', '300852977521.86', '2015', 'Murni'),
(159, '5.2.3.', 'BELANJA MODAL', '286270807275', '2015', 'Murni'),
(160, '5.2.1.', 'BELANJA PEGAWAI', '62583661200', '2015', 'Murni'),
(161, '5.1.7.', 'Belanja Bantuan Keuangan Kepada Provinsi/Kabupaten/Kota Dan Pemerintah  Desa', '881999236.39', '2015', 'Murni'),
(162, '5.1.5.', 'Belanja Bantuan Sosial', '0', '2015', 'Murni'),
(163, '5.1.2.', 'Belanja Bunga', '1024100375', '2015', 'Murni'),
(164, '5.1.4.', 'Belanja Hibah', '0', '2015', 'Murni'),
(165, '5.1.1.', 'BELANJA PEGAWAI', '602225982424', '2015', 'Murni'),
(166, '5.1.8.', 'Belanja Tidak Terduga', '1500000000', '2015', 'Murni'),
(167, '6.2.3.', 'Pembayaran Pokok Utang', '2880984000', '2015', 'Murni'),
(168, '6.2.2.', 'Penyertaan Modal (Investasi) Pemerintah Daerah', '0', '2015', 'Murni'),
(169, '6.1.1.', 'Sisa Lebih Perhitungan Anggaran Daerah Tahun Sebelumnya', '162096113000', '2015', 'Murni'),
(170, '4.2.1.', 'Bagi Hasil Pajak/Bagi Hasil Bukan Pajak ', '65909101000', '2015', 'Murni'),
(171, '4.3.5.', 'Bantuan keuangan  dari  Provinsi atau pemerintah daerah lainnya', '0', '2015', 'Murni'),
(172, '4.3.6.', 'Dana Alokasi Cukai', '3165901261.5', '2015', 'Murni'),
(173, '4.2.3.', 'Dana Alokasi Khusus', '33620360000', '2015', 'Murni'),
(174, '4.2.2.', 'Dana Alokasi Umum', '548703908000', '2015', 'Murni'),
(175, '4.3.3.', 'Dana Bagi Hasil Pajak dari Provinsi ', '91952370768.75', '2015', 'Murni'),
(176, '4.3.4.', 'Dana Penyesuaian dan Otonomi Khusus', '146432580000', '2015', 'Murni'),
(177, '4.1.1.', 'Hasil Pajak Daerah', '92828888000', '2015', 'Murni'),
(178, '4.1.3.', 'Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan', '8122400000', '2015', 'Murni'),
(179, '4.1.2.', 'Hasil Retribusi Daerah', '9561963975', '2015', 'Murni'),
(180, '4.1.4.', 'Lain-lain Pendapatan Asli Daerah yang Sah', '95826926027', '2015', 'Murni'),
(181, '5.2.2.', 'BELANJA BARANG DAN JASA', '345052303395.86', '2015', 'Perubahan'),
(182, '5.2.3.', 'BELANJA MODAL', '345845265643', '2015', 'Perubahan'),
(183, '5.2.1.', 'BELANJA PEGAWAI', '74797674030', '2015', 'Perubahan'),
(190, '6.2.3.', 'Pembayaran Pokok Utang', '2685478587', '2015', 'Perubahan'),
(191, '6.1.6.', 'Penerimaan piutang  daerah', '768908592', '2015', 'Perubahan'),
(192, '6.2.2.', 'Penyertaan Modal (Investasi) Pemerintah Daerah', '0', '2015', 'Perubahan'),
(193, '6.1.1.', 'Sisa Lebih Perhitungan Anggaran Daerah Tahun Sebelumnya', '226986301756.87', '2015', 'Perubahan'),
(194, '4.2.1.', 'Bagi Hasil Pajak/Bagi Hasil Bukan Pajak ', '63740932316', '2015', 'Perubahan'),
(195, '4.3.5.', 'Bantuan keuangan  dari  Provinsi atau pemerintah daerah lainnya', '55614776400', '2015', 'Perubahan'),
(196, '4.3.6.', 'Dana Alokasi Cukai', '3704494000', '2015', 'Perubahan'),
(197, '4.2.3.', 'Dana Alokasi Khusus', '33621040000', '2015', 'Perubahan'),
(198, '4.2.2.', 'Dana Alokasi Umum', '548703908000', '2015', 'Perubahan'),
(199, '4.3.3.', 'Dana Bagi Hasil Pajak dari Provinsi ', '107834276107', '2015', 'Perubahan'),
(200, '4.3.4.', 'Dana Penyesuaian dan Otonomi Khusus', '146009580000', '2015', 'Perubahan'),
(201, '4.1.1.', 'Hasil Pajak Daerah', '102252243864.66', '2015', 'Perubahan'),
(202, '4.1.3.', 'Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan', '7446400000', '2015', 'Perubahan'),
(203, '4.1.2.', 'Hasil Retribusi Daerah', '8444980237', '2015', 'Perubahan'),
(204, '4.1.4.', 'Lain-lain Pendapatan Asli Daerah yang Sah', '108866114844.33', '2015', 'Perubahan'),
(205, '5.2.1.', 'BELANJA PEGAWAI', '61596202800', '2014', 'Murni'),
(206, '5.2.3.', 'BELANJA MODAL', '194057062440', '2014', 'Murni'),
(207, '5.2.2.', 'BELANJA BARANG DAN JASA', '314026339398.86', '2014', 'Murni'),
(208, '5.1.7.', 'Belanja Bantuan Keuangan Kepada Provinsi/Kabupaten/Kota Dan Pemerintah  Desa', '781833700', '2014', 'Murni'),
(209, '5.1.5.', 'Belanja Bantuan Sosial', '505840000', '2014', 'Murni'),
(210, '5.1.2.', 'Belanja Bunga', '1024100375', '2014', 'Murni'),
(211, '5.1.4.', 'Belanja Hibah', '20669710500', '2014', 'Murni'),
(212, '5.1.1.', 'BELANJA PEGAWAI', '580127324817', '2014', 'Murni'),
(213, '5.1.8.', 'Belanja Tidak Terduga', '1500000000', '2014', 'Murni'),
(214, '6.2.3.', 'Pembayaran Pokok Utang', '2880984000', '2014', 'Murni'),
(215, '6.2.2.', 'Penyertaan Modal (Investasi) Pemerintah Daerah', '1000000000', '2014', 'Murni'),
(216, '6.1.1.', 'Sisa Lebih Perhitungan Anggaran Daerah Tahun Sebelumnya', '141255356056', '2014', 'Murni'),
(217, '4.2.1.', 'Bagi Hasil Pajak/Bagi Hasil Bukan Pajak ', '55368719835', '2014', 'Murni'),
(218, '4.2.3.', 'Dana Alokasi Khusus', '35913670000', '2014', 'Murni'),
(219, '4.2.2.', 'Dana Alokasi Umum', '537371615000', '2014', 'Murni'),
(220, '4.3.3.', 'Dana Bagi Hasil Pajak dari Provinsi ', '81254199592.75', '2014', 'Murni'),
(221, '4.3.4.', 'Dana Penyesuaian dan Otonomi Khusus', '144611741087', '2014', 'Murni'),
(222, '4.1.1.', 'Hasil Pajak Daerah', '86300601041.11', '2014', 'Murni'),
(223, '4.1.3.', 'Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan', '7120225840', '2014', 'Murni'),
(224, '4.1.2.', 'Hasil Retribusi Daerah', '17643527879', '2014', 'Murni'),
(225, '4.1.4.', 'Lain-lain Pendapatan Asli Daerah yang Sah', '71329741700', '2014', 'Murni');

-- --------------------------------------------------------

--
-- Table structure for table `produk_hukum`
--

CREATE TABLE `produk_hukum` (
  `id_produk_hukum` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_hukum`
--

INSERT INTO `produk_hukum` (`id_produk_hukum`, `nama`) VALUES
(1, 'Peraturan Pemerintah Pusat'),
(2, 'Peraturan Pemerintah Daerah');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(120) DEFAULT NULL,
  `profile` text,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `nama_perusahaan`, `profile`, `visi`, `misi`) VALUES
(1, NULL, '<p>Nunci luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. Aliqua sed justo liguladd</p>\r\n', '<p>Visi Kota Cimahi 2017-2022<br />\r\n<br />\r\nMewujudkan Cimahi Baru, Maju, Agamis dan Berbudaya</p>\r\n', '<ol>\r\n	<li>Meningkatkan kualitas sumber daya manusia yang berkepribadian, berahlak mulia, cerdas, sehat dan unggul.</li>\r\n	<li>Meningkatkan penyelenggaraan pemerintahan yang amanah, profesional, efektif, efisien dan ekonomis yang berbasis pada sistem penganggaran yang&nbsp;<em>pro-public</em>.</li>\r\n	<li>Memberdayakan perekonomian daerah berbasis ekonomi kerakyatan yang berorientasi pada pengembangan sektor jasa berbasis teknologi informasi dan industri kecil menengah dalam upaya pengentasan kemiskinan.</li>\r\n	<li>Mewujudkan pembangunan berkelanjutan, berwawasan lingkungan, meningkatkan kualitas derajat kehidupan masyarakat yang berkeadilan.</li>\r\n	<li>Peningkatan kapasitas pemerintahan dan pemberdayaan masyarakat secara berkesinambungan dan berkelanjutan</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `rbd`
--

CREATE TABLE `rbd` (
  `id_rbd` int(11) NOT NULL,
  `id_jenis_rbd` int(11) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider_home`
--

CREATE TABLE `slider_home` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `url` varchar(40) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `judul` varchar(60) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_home`
--

INSERT INTO `slider_home` (`id`, `gambar`, `status`, `url`, `urutan`, `judul`, `deskripsi`) VALUES
(5, 'Untitled2.png', 1, '', NULL, 'Selamat Datang di Website BPKAD Kota Cimahi', ' Dapatkan informasi terbaru BPKAD Kota Cimahi Di Sini         '),
(7, 'Untitled.png', 1, '', NULL, 'Berita Terbaru BPKAD Kota Cimahi', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor consequat diam, sed varius ante rhoncus vel. Donec ac nisl augue. Fusce urna nulla, dignissim aliquam sollicitudin ut, dictum pretium libero         '),
(8, 'alun.jpg', 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sop`
--

CREATE TABLE `sop` (
  `id_sop` int(11) NOT NULL,
  `nama_file` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `judul_file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sop`
--

INSERT INTO `sop` (`id_sop`, `nama_file`, `url`, `judul_file`) VALUES
(1, '1.SOP_Bid_Perencanaan_Anggaran (1).pdf', NULL, '1.SOP_Bid_Perencanaan_Anggaran (1).pdf'),
(2, '2.SOP_Bid_Sekretariat (1).pdf', NULL, '2.SOP_Bid_Sekretariat (1).pdf'),
(3, '3.SOP_Bid_Akuntansi (1).pdf', NULL, '3.SOP_Bid_Akuntansi (1).pdf'),
(4, '4.SOP_Bid_BMD (1).pdf', NULL, '4.SOP_Bid_BMD (1).pdf'),
(7, '5.SOP_Bid_Perbendaharaan.pdf', NULL, '5.SOP_Bid_Perbendaharaan.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `suara`
--

CREATE TABLE `suara` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jumlah_suara` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suara`
--

INSERT INTO `suara` (`id`, `nama`, `jumlah_suara`) VALUES
(1, 'Rani ', 450000000),
(2, 'Romi', 788888888),
(3, 'Leri', 982878788),
(4, 'Rina', 435678888);

-- --------------------------------------------------------

--
-- Table structure for table `sub_pelayanan`
--

CREATE TABLE `sub_pelayanan` (
  `id_sub` int(11) NOT NULL,
  `id_pelayanan` int(11) NOT NULL,
  `judul_sub_pelayanan` text NOT NULL,
  `desc_sub_pelayanan` text NOT NULL,
  `tgl` date NOT NULL,
  `status` tinyint(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_pelayanan`
--

INSERT INTO `sub_pelayanan` (`id_sub`, `id_pelayanan`, `judul_sub_pelayanan`, `desc_sub_pelayanan`, `tgl`, `status`) VALUES
(1, 1, 'asd', '<p>dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>\r\n', '2018-11-28', 1),
(2, 1, 'kl', '<p>lllllllllllllllllllllllllll</p>\r\n', '2018-11-28', 0),
(3, 1, 'asdtyyyyyy', '<p>dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>\r\n', '2018-11-28', 1),
(5, 2, 'jkhhhhhhhh', '<p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>\r\n', '2018-11-28', 1),
(6, 2, 'hj', '<p>jjjjjjjjjjjjjjjjjjjjjjjj</p>\r\n', '2018-11-28', 1),
(7, 9, 'zxxxxxxxxxxxxxxxxx', '<p>xxxxxxxxxxxxxxxxxxxxxxxxx</p>\r\n', '2019-02-27', 1),
(8, 8, 'Dasar Hukum', '<ol>\r\n	<li>Peraturan Menteri Dalam Negeri Nomor 13 Tahun 2006 sebagaimana telah diubah dengan Peraturan Menteri Dalam Negeri Nomor 21 Tahun 2011 tentang Pedoman Pengelolaan Keuangan Daerah.</li>\r\n	<li>Peraturan Daerah Kota Cimahi Nomor 5 Tahun 2016 tentang Revisi Rencana Pembangunan Jangka Menengah Daerah.</li>\r\n	<li>Peraturan Walikota Cimahi Nomor 49 Tahun 2011 tentang perubahan atas Peraturan Walikota Nomor 3 Tahun 2008 tentang Sistem dan Prosedur Pengelolaan Keuangan Daerah.</li>\r\n	<li>Peraturan Walikota Cimahi Nomor 49 Tahun 2011 tentang perubahan atas Peraturan Walikota Nomor 3 Tahun 2008 tentang Sistem dan Prosedur Pengelolaan Keuangan Daerah.</li>\r\n	<li>Peraturan Walikota Cimahi Nomor 28 Tahun 2015 tentang Uraian Tugas Pokok Fungsi dan Tata Kerja Badan Pengelola Keuangan dan Aset Daerah Kota Cimahi.</li>\r\n	<li>Standar Operasional Prosedur (SOP) Badan Pengelola Keuangan dan Aset Daerah Kota Cimahi Tahun 2016.</li>\r\n</ol>\r\n', '2019-02-27', 1),
(9, 8, 'Persyaratan Pelayanan', '<ol>\r\n	<li>Surat Perintah Membayar (SPM) UP/GU/TU/LS dan LS Belanja Tidak Langsung yang diterbitkan oleh SKPD melalui aplikasi SIPKD.</li>\r\n	<li>Surat Perintah Membayar (SPM) LS untuk Belanja Tidak Langsung (BTL) yang diterbitkan oleh PPKD melalui aplikasi SIPKD.</li>\r\n	<li>Permohonan pencairan dari SKPD.</li>\r\n	<li>Surat Pertanggungjawaban Pengguna Anggaran.</li>\r\n	<li>Dokumen-dokumen berkas pencairan sesuai dengan format jenis metode pembayaran UP/GU/TU/LS.</li>\r\n</ol>\r\n', '2019-02-27', 1),
(10, 8, 'Sistem Mekanisme dan Prosedur', '<ol>\r\n	<li>Bendahara atau Staf yang ditunjuk dari SKPD pemohon membawa dokumen pengajuan SPM kepada petugas verifikasi pada desk pelayanan.</li>\r\n	<li>Petugas verifikasi meneliti dan memeriksa SPM&nbsp;SKPD.</li>\r\n	<li>Bendahara atau Staf &nbsp;dari SKPD pemohon mendapatkan tanda terima berkas SPM apabila SPM dinyatakan lengkap dan benar atau berkas SPM dikembalikan untuk diperbaiki apabila masih terdapat kesalahan.</li>\r\n</ol>\r\n', '2019-02-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(11) NOT NULL,
  `tanggal_event` datetime NOT NULL,
  `agenda` text,
  `keterangan` text,
  `sampai_tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `tanggal_event`, `agenda`, `keterangan`, `sampai_tanggal`) VALUES
(1, '2019-02-27 00:00:00', 'Meeting dengan phak kejaksaan', '                \r\nsdddddddddddddd\r\n            ', '2019-02-27 02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tren`
--

CREATE TABLE `tren` (
  `id_tren` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah` varchar(200) NOT NULL,
  `nomor_urut` varchar(51) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `parent` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tren`
--

INSERT INTO `tren` (`id_tren`, `tahun`, `jumlah`, `nomor_urut`, `uraian`, `parent`) VALUES
(1, 2017, '1257930694049', '4', 'PENDAPATAN', 0),
(2, 2018, '1278079392822', '4', 'PENDAPATAN', 0),
(3, 2019, '1542541147120', '4', 'PENDAPATAN', 0),
(4, 2017, '1530151980511', '5', 'BELANJA', 0),
(5, 2018, '1573924056559', '5', 'BELANJA', 0),
(6, 2019, '1831749173914', '5', 'BELANJA', 0),
(7, 2017, '272221286462', '6', 'PEMBIAYAAN', 0),
(8, 2018, '295844663736', '6', 'PEMBIAYAAN', 0),
(9, 2019, '289208026794', '6', 'PEMBIAYAAN', 0),
(11, 2017, '310974713048', '4.1', 'PENDAPATAN ASLI DAERAH', 1),
(12, 2018, '326842694184', '4.1', 'PENDAPATAN ASLI DAERAH', 2),
(13, 2019, '444244273045', '4.1', 'PENDAPATAN ASLI DAERAH', 3),
(14, 2017, '840429604938', '4.2', 'DANA PERIMBANGAN', 1),
(15, 2018, '831437840000', '4.2', 'DANA PERIMBANGAN', 2),
(16, 2019, '827405940000', '4.2', 'DANA PERIMBANGAN', 3),
(17, 2017, '159427252270', '4.3', 'LAIN-LAIN PENDAPATAN DAERAH YANG SAH', 1),
(18, 2018, '200106854851', '4.3', 'LAIN-LAIN PENDAPATAN DAERAH YANG SAH', 2),
(19, 2019, '270890934075', '4.3', 'LAIN-LAIN PENDAPATAN DAERAH YANG SAH', 3),
(20, 2017, '910961634916', '5.2', 'BELANJA LANGSUNG', 4),
(21, 2018, '1044552791294', '5.2', 'BELANJA LANGSUNG', 5),
(22, 2019, '1160682352278', '5.2', 'BELANJA LANGSUNG', 6),
(23, 2017, '619190345595', '5.1', 'BELANJA TIDAK LANGSUNG', 4),
(24, 2018, '647220697443', '5.1', 'BELANJA TIDAK LANGSUNG', 5),
(25, 2019, '671066821636', '5.1', 'BELANJA TIDAK LANGSUNG', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tren2`
--

CREATE TABLE `tren2` (
  `id_trend` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `pendapatan` varchar(70) NOT NULL,
  `belanja` varchar(70) NOT NULL,
  `pembiayaan` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tren2`
--

INSERT INTO `tren2` (`id_trend`, `tahun`, `pendapatan`, `belanja`, `pembiayaan`) VALUES
(1, 2017, '1257930694049', '1530151980511', '272221286462');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `gelar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `foto`, `gelar`) VALUES
(26, '192.168.2.1', 'Rani', '$2y$08$hFYHUujxhERHna1NqtZSP.PumDr2MsB2YXJqiJPxFt9.B9IT9Zw5C', NULL, 'rani.aartijaya@gmail.com', NULL, 'QM6kSuLdppmxNEZnCpiYq.a2c651fa98840e6b2b', 1545792141, NULL, 1507273365, 1579912468, 1, 'Rani', 'Pebrianti', 'Bursa Sajadah', '0895350164351', NULL, ''),
(27, '::1', NULL, '$2y$08$6kXF9GLB2j4a6kExSzH.Bu8IMVqznW77APjnFQW60pktBstsj8tK6', NULL, 'bpkad_cimahi@gmail.com', NULL, NULL, NULL, NULL, 1552853138, 1552853339, 1, 'bpkadd', 'Cimahi2', 'PEMKOT Cimahi2', '1011277609', NULL, 's.kome');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(241, 1, 2),
(183, 2, 1),
(184, 2, 2),
(185, 2, 4),
(186, 2, 9),
(173, 3, 2),
(174, 3, 4),
(175, 3, 7),
(168, 4, 2),
(169, 4, 4),
(170, 4, 7),
(129, 5, 1),
(130, 5, 2),
(131, 5, 4),
(171, 6, 2),
(172, 6, 7),
(12, 7, 2),
(13, 8, 2),
(14, 9, 2),
(15, 10, 2),
(216, 11, 2),
(17, 12, 2),
(30, 13, 2),
(19, 14, 2),
(20, 15, 2),
(21, 16, 2),
(25, 17, 2),
(34, 18, 1),
(35, 18, 2),
(36, 18, 4),
(55, 19, 2),
(236, 20, 2),
(237, 20, 4),
(233, 21, 2),
(234, 21, 4),
(235, 21, 5),
(62, 22, 2),
(63, 23, 2),
(72, 24, 2),
(66, 25, 2),
(242, 26, 1),
(243, 26, 2),
(244, 26, 4),
(245, 26, 7),
(255, 27, 1),
(256, 27, 2),
(133, 28, 2),
(182, 29, 7),
(195, 30, 7),
(197, 31, 10),
(199, 32, 10),
(201, 33, 10),
(203, 34, 10),
(210, 35, 10),
(211, 36, 10),
(212, 37, 10),
(213, 38, 10),
(214, 39, 10),
(215, 40, 10),
(238, 41, 10),
(228, 42, 2),
(232, 43, 11),
(231, 44, 11),
(1, 91, 2),
(239, 93, 2),
(240, 94, 2);

-- --------------------------------------------------------

--
-- Table structure for table `video_home`
--

CREATE TABLE `video_home` (
  `id_video` int(11) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `url` varchar(70) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_home`
--

INSERT INTO `video_home` (`id_video`, `status`, `url`, `judul`, `deskripsi`, `tanggal`) VALUES
(3, 1, 'https://www.youtube.com/watch?v=MAvsxZPS6dc', 'Tutorial Penginputan RKA Belanja Langsung SIPKD ver 6.3', ' ', '2018-11-03'),
(4, 0, 'https://www.youtube.com/watch?v=MAvsxZPS6dc', 'Tutorial Penginputan RKA Belanja Langsung SIPKD ver 6.3', ' ', '0000-00-00'),
(5, 0, 'https://www.youtube.com/watch?v=fY6wA1nTEO8', 'Profile Cimahi 2018', ' Selayang Pandang Kota Cimahi', '2018-09-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agenda` (`id_agenda`);

--
-- Indexes for table `alokasi_estimasi_pendapatan_daerah`
--
ALTER TABLE `alokasi_estimasi_pendapatan_daerah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apbd`
--
ALTER TABLE `apbd`
  ADD PRIMARY KEY (`id_apbd`),
  ADD KEY `id_jenis_apbd` (`id_jenis_apbd`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `berita_komentar`
--
ALTER TABLE `berita_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `cabang_footer`
--
ALTER TABLE `cabang_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_berita_category`
--
ALTER TABLE `detail_berita_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_berita` (`id_berita`),
  ADD KEY `id_kategori_berita` (`id_kategori_berita`);

--
-- Indexes for table `detail_kontak`
--
ALTER TABLE `detail_kontak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kontak` (`id_kontak`);

--
-- Indexes for table `detail_produk_hukum`
--
ALTER TABLE `detail_produk_hukum`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_produk_hukum` (`id_produk_hukum`);

--
-- Indexes for table `estimasi_pendapatan`
--
ALTER TABLE `estimasi_pendapatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jumlah` (`jumlah`),
  ADD KEY `id_alokasi` (`id_alokasi`);

--
-- Indexes for table `file_laporan`
--
ALTER TABLE `file_laporan`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `id_laporan` (`id_laporan`);

--
-- Indexes for table `fungsi`
--
ALTER TABLE `fungsi`
  ADD PRIMARY KEY (`id_fungsi`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `galeri_home`
--
ALTER TABLE `galeri_home`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_berita`
--
ALTER TABLE `image_berita`
  ADD PRIMARY KEY (`id_image_berita`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `informasi_keuangan`
--
ALTER TABLE `informasi_keuangan`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jenis_apbd`
--
ALTER TABLE `jenis_apbd`
  ADD PRIMARY KEY (`id_jenis_apbd`);

--
-- Indexes for table `jenis_rbd`
--
ALTER TABLE `jenis_rbd`
  ADD PRIMARY KEY (`id_jenis_rbd`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori_berita`);

--
-- Indexes for table `komentar_berita`
--
ALTER TABLE `komentar_berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`);

--
-- Indexes for table `perubahan_apbd`
--
ALTER TABLE `perubahan_apbd`
  ADD PRIMARY KEY (`id_perubahan`);

--
-- Indexes for table `produk_hukum`
--
ALTER TABLE `produk_hukum`
  ADD PRIMARY KEY (`id_produk_hukum`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rbd`
--
ALTER TABLE `rbd`
  ADD PRIMARY KEY (`id_rbd`),
  ADD KEY `id_jenis_rbd` (`id_jenis_rbd`);

--
-- Indexes for table `slider_home`
--
ALTER TABLE `slider_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sop`
--
ALTER TABLE `sop`
  ADD PRIMARY KEY (`id_sop`);

--
-- Indexes for table `suara`
--
ALTER TABLE `suara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_pelayanan`
--
ALTER TABLE `sub_pelayanan`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `id_pelayanan` (`id_pelayanan`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tren`
--
ALTER TABLE `tren`
  ADD PRIMARY KEY (`id_tren`);

--
-- Indexes for table `tren2`
--
ALTER TABLE `tren2`
  ADD PRIMARY KEY (`id_trend`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `video_home`
--
ALTER TABLE `video_home`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `alokasi_estimasi_pendapatan_daerah`
--
ALTER TABLE `alokasi_estimasi_pendapatan_daerah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apbd`
--
ALTER TABLE `apbd`
  MODIFY `id_apbd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `berita_komentar`
--
ALTER TABLE `berita_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cabang_footer`
--
ALTER TABLE `cabang_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `detail_berita_category`
--
ALTER TABLE `detail_berita_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `detail_kontak`
--
ALTER TABLE `detail_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `detail_produk_hukum`
--
ALTER TABLE `detail_produk_hukum`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `estimasi_pendapatan`
--
ALTER TABLE `estimasi_pendapatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `file_laporan`
--
ALTER TABLE `file_laporan`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `fungsi`
--
ALTER TABLE `fungsi`
  MODIFY `id_fungsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri_home`
--
ALTER TABLE `galeri_home`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `image_berita`
--
ALTER TABLE `image_berita`
  MODIFY `id_image_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_keuangan`
--
ALTER TABLE `informasi_keuangan`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jenis_apbd`
--
ALTER TABLE `jenis_apbd`
  MODIFY `id_jenis_apbd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_rbd`
--
ALTER TABLE `jenis_rbd`
  MODIFY `id_jenis_rbd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komentar_berita`
--
ALTER TABLE `komentar_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `perubahan_apbd`
--
ALTER TABLE `perubahan_apbd`
  MODIFY `id_perubahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `produk_hukum`
--
ALTER TABLE `produk_hukum`
  MODIFY `id_produk_hukum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rbd`
--
ALTER TABLE `rbd`
  MODIFY `id_rbd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider_home`
--
ALTER TABLE `slider_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sop`
--
ALTER TABLE `sop`
  MODIFY `id_sop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `suara`
--
ALTER TABLE `suara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_pelayanan`
--
ALTER TABLE `sub_pelayanan`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tren`
--
ALTER TABLE `tren`
  MODIFY `id_tren` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tren2`
--
ALTER TABLE `tren2`
  MODIFY `id_trend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT for table `video_home`
--
ALTER TABLE `video_home`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
