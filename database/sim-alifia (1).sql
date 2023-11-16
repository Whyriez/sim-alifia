-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 09:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim-alifia`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `gambar`, `tanggal`) VALUES
(17, 'Jambore Kader Tingkat Kec. Bulango Utara Tahun 2023', 'Kabupaten Gorontalo Utara, Dinkesprov – Di bawah teriknya matahari yang memancar, semangat kader kesehatan di Gorontalo Utara tetap menyala. Mereka berkumpul dalam acara pencanangan Jambore Kader Posyandu yang menjadi ajang unjuk kekompakan, menyalurkan semangat dan dedikasi mereka untuk meningkatkan pelayanan kesehatan.<br />\r\n<br />\r\nPencanangan Jambore Kader Posyandu di Gorontalo Utara, yang berlangsung pada Minggu (05/11/2023) di Lapangan Desa Bulango Raya, Kecamatan Tomilito, mempertemukan 320 kader kesehatan dari empat kecamatan yaitu Kecamatan Tomilito, Anggrek, Kwandang, dan Gentuma Raya. Acara ini digelar atas kerjasama Dinas Kesehatan setempat dan sejumlah UPTD Puskesmas.<br />\r\n<br />\r\nPara kader kesehatan, yang semuanya adalah perempuan, hadir dalam acara ini dengan semangat yang tinggi. Mereka tidak hanya berkumpul, tetapi juga berupaya mempererat tali solidaritas, meningkatkan pengetahuan, dan melatih keterampilan dalam pelayanan kesehatan.<br />\r\n<br />\r\nSaat acara dimulai, lomba yel-yel keceriaan bergema, menunjukkan semangat dan kerjasama dari para kader kesehatan. Masing-masing utusan kecamatan menampilkan nyanyian dan gerakan yang amat kompak.<br />\r\n<br />\r\nDari sini mereka sadar bahwa kesehatan masyarakat adalah tanggung jawab bersama, dan kerja sama yang erat sangat penting dalam mencapai tujuan.<br />\r\n<br />\r\nSelain unjuk kekompakan melalui yel-yel, acara ini juga mengadakan lomba penyuluhan yang diikuti oleh utusan dari masing-masing kecamatan. Para peserta lomba berkompetisi untuk memberikan penyuluhan kesehatan terbaik dengan topik yang beragam.<br />\r\n<br />\r\nSetelah meraih kesuksesan dalam lomba yel-yel dan penyuluhan, para kader kesehatan berkesempatan menerima hadiah sebagai penghargaan atas kerja keras dan prestasi mereka.<br />\r\n<br />\r\n”Jambore Kader Kesehatan sebagai sarana untuk membangun solidaritas dan kekompakan di antara kader. Tanpa kekompakan, pelayanan kesehatan tidak dapat berjalan dengan maksimal. Dari lomba yel-yel dan penyuluhan tadi, dapat disimpulkan bahwa para kader kesehatan ini paham akan tugasnya,” ujar Bupati Gorontalo Utara, Thariq Modanggu saat memberi sambutan pada kegiatan tersebut.<br />\r\n<br />\r\nKader kesehatan dianggap sebagai garda terdepan dalam upaya kesehatan masyarakat. Mereka sehari-harinya berinteraksi dengan masyarakat dan berhadapan dengan berbagai permasalahan kesehatan yang ada di lingkungan masyarakat.<br />\r\n<br />\r\nSementara itu, Posyandu yang awalnya merupakan sarana pelayanan kesehatan bayi dan balita, telah berkembang menjadi sarana pelayanan untuk siklus hidup.<br />\r\n<br />\r\n”Dulu kader posyandu hanya melayani balita dan ibu hamil. Tapi sekarang paradigmanya sudah berubah. Sudah harus melayani ibu hamil, balita, remaja, usia produktif, sampai lansia. Inilah yang saat ini menjadi tantangan para kader kesehatan.” ujar Thariq Modanggu<br />\r\n<br />\r\nMengemban tugas yang bertambah seiring dengan berubahnya paradigma posyandu, selalu ada harapan untuk memperoleh penghargaan dan kompensasi yang lebih baik.<br />\r\n<br />\r\n”Saya ingin insentif kader ini diupayakan untuk ditingkatkan. Sebab tugas mulia kader yakni menyiapkan SDM masa depan, maka perlu untuk memperoleh penghargaan yang sepadan,” kata Thariq.<br />\r\n<br />\r\nPerkembangan pesat dalam dunia kesehatan menjadi tantangan tersendiri bagi kader kesehatan. Mereka dihadapkan pada tuntutan untuk terus meningkatkan pengetahuan, kemampuan, dan keterampilan mereka. Dalam konteks ini, Bupati Thariq menekankan kepada kader kesehatan bahwa peningkatan pengetahuan dan keterampilan harus menjadi prioritas utama.<br />\r\n<br />\r\n”Dalam dunia kesehatan yang terus berubah, kemampuan untuk belajar dan beradaptasi menjadi kunci dalam memberikan pelayanan kesehatan yang berkualitas,” ujarnya.<br />\r\n<br />\r\nJambore Kader Posyandu di Gorontalo Utara turut dihadiri oleh Kepala Dinas Kesehatan Gorontalo Utara, para Camat, Kepala-Kepala Puskesmas, serta sejumlah Kepala Desa.<br />\r\n<br />\r\nAcara ini bukan sekadar tentang peningkatan pengetahuan dan keterampilan, tetapi juga mengenai membangun solidaritas dan kekompakan di antara kader kesehatan yang selalu siap mendedikasikan diri untuk masyarakat Gorontalo Utara.<br />\r\n<br />\r\nRilis : Andre (Gorut)<br />\r\nEditor : Nancy Pembengo/MD', '1700051251_399690726_6793289364073742_2686010108244376320_n.jpg', '2023-11-15'),
(18, 'PENYALURAN BANTUAN BERAS CADANGAN PANGAN PEMERINTAH DAERAH (CPPD) PROVINSI GORONTALO TAHUN 2022', 'Penyaluran bantuan beras Cadangan Pangan Pemerintah Daerah (CPPD) Provinsi Gorontalo Tahun 2022. Oleh Masyarakat yang terdampak Banjir pada hari senin 3 Oktober 2022 sejumlah 199 kk. Yang di hadiri langsung oleh : <br />\r\n1. Bapak Kepala Dinas Pangan Provinsi Gorontalo bersama staf<br />\r\n2. Bapak Kepala Dinas Ketahanan Pangan dan Pertanian Kabupaten Bone Bolango bersama staf<br />\r\n3. Pemerintah Desa Pemdes Tupa<br />\r\n4. Bhabinkamtibmas Tupa<br />\r\n5. Babinsa Desa Tupa <br />\r\n6. Penerima Bantuan', '1700054849_315559700_200890802417543_2393282259211162933_n.jpg', '2023-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan_surat`
--

CREATE TABLE `pelayanan_surat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor` varchar(23) NOT NULL,
  `surat` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `buku_nikah` varchar(255) DEFAULT NULL,
  `other_ktp` varchar(255) DEFAULT NULL,
  `ijasah` varchar(255) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `rapor` varchar(255) DEFAULT NULL,
  `other_surat` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `deskripsi`, `gambar`, `tanggal`) VALUES
(8, 'Posyandu Tupa', ' Di informasikan kepada Bapak/ Ibu Masyarakat Desa Tupa bahwa besok :<br />\r\nHari : Senin<br />\r\nTanggal : 13 November 2023<br />\r\nPukul: 08:00 s/d 11:45<br />\r\nTempat : Aula Kantor Desa Tupa <br />\r\nPelayanan Posyandu lansia, Prolanis & Posbindu. Yang di Awali dengan SENAM PROLANIS, dan di lanjutkan dgn Pemeriksaan Kesehatan yang meliputi Pemeriksaan<br />\r\n1. Colestrol<br />\r\n2. Asam Urat<br />\r\n3. Gula<br />\r\n4. Hb<br />\r\n5. Tekanan Darah<br />\r\n6. Pemeriksaan Malaria <br />\r\nDll.<br />\r\noleh Tim Puskesmas Bulango Utara. Oleh karena itu kami memohon kehadirannya tepat waktu, Bagi Bapak/Ibu.<br />\r\nKarena pelayanan cuma sampai pada pukul 11:45<br />\r\n', '1700052226_16876064690.jpeg', '2023-11-15'),
(9, 'Bantuan Program PKH & BPNT', 'di informasikan kepada masyarakat Desa Tupa, khususnya Bagi Penerima Bantuan Program PKH & BPNT, akan ada Petugas kantor Pos. DAFTAR PETUGAS FOTO RUMAH yang akan turun langsung ke Rumah Bapak/Ibu Penerima Bantuan PKH & BPNT, dalam hal Percepatan Geotaging. Yang akan di kawal langsung oleh Pemdes Tupa<br />\r\n', '1700052332_393341603_6689540734448606_6590590176614016929_n.jpg', '2023-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `potensi_desa`
--

CREATE TABLE `potensi_desa` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `potensi_desa`
--

INSERT INTO `potensi_desa` (`id`, `judul`, `deskripsi`, `kategori`, `gambar`, `tanggal`) VALUES
(5, 'Taman Wisata Tupa Ecopark (TEP)', '<br />\r\nTaman Wisata Tupa Ecopark (TEP) Gorontalo adalah salah satu destinasi wisata alam di Gorontalo. Taman ini terletak di Desa Tupa, Kecamatan Bulango Utara, Kabupaten Bone Bolango, Gorontalo ', 'Wisata', '1700104260_5e826bf4-97dd-47e1-aa68-bd70aaa9649d.jpg', '2023-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelayanan_surat`
--
ALTER TABLE `pelayanan_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potensi_desa`
--
ALTER TABLE `potensi_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pelayanan_surat`
--
ALTER TABLE `pelayanan_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `potensi_desa`
--
ALTER TABLE `potensi_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
