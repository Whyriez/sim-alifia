-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2023 at 02:36 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
  `id` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `gambar`, `tanggal`) VALUES
(9, 'asasas', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At optio quod dolorem veritatis, fugiat quam. Suscipit sed fugiat rem eaque eligendi, adipisci earum non omnis aspernatur quibusdam expedita numquam enim!', '1699061277_makanan2.jpg', '2023-11-04'),
(10, 'asasas', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. At optio quod dolorem veritatis, fugiat quam. Suscipit sed fugiat rem eaque eligendi, adipisci earum non omnis ', '1699061290_makanan3.jpg', '2023-11-04'),
(11, 'asasasasas', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. At optio quod dolorem veritatis, fugiat quam. Suscipit sed fugiat rem eaque eligendi, adipisci earum non omnis ', '1699061299_makanan5.jpg', '2023-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `potensi_desa`
--

CREATE TABLE `potensi_desa` (
  `id` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `potensi_desa`
--

INSERT INTO `potensi_desa` (`id`, `judul`, `deskripsi`, `kategori`, `gambar`, `tanggal`) VALUES
(1, 'Buat Khuldi', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum inventore sequi labore iusto minus dolore quisquam sit nam quos rem, impedit velit quasi recusandae commodi repellendus obcaecati cupiditate laborum. Maxime, ut. Veritatis obcaecati quaerat labore laudantium pariatur incidunt. Explicabo, cumque veniam possimus fuga accusamus praesentium quae sint atque omnis enim, beatae eius. Ratione eaque minima eligendi recusandae ducimus sequi, obcaecati maxime repellendus, doloribus distinctio quis! Id veniam fuga deserunt quam sint, expedita alias exercitationem in! Labore incidunt tempore officia placeat dolor. Nobis autem nulla nisi voluptate, soluta laboriosam, vitae maxime animi maiores laborum rem ab harum culpa sit, dolore odit. Amet quibusdam quod, autem libero ad perspiciatis culpa velit temporibus sunt ipsa, animi reprehenderit eveniet! Sint nulla laborum hic non ipsa voluptates quasi. Voluptates soluta esse ducimus, delectus inventore at magnam ipsam unde provident perspiciatis. Saepe nam quis neque tempora. Obcaecati rerum at laboriosam similique a dolor corrupti, numquam iusto vel iste excepturi nisi consectetur nemo aliquid saepe commodi sequi delectus! Quidem dicta aliquam consequuntur tempore dolore quasi placeat tenetur dignissimos cum quis! Dolorum nam accusantium soluta voluptatum illum perspiciatis nobis qui necessitatibus atque inventore nisi deleniti aliquid natus voluptatibus dolorem, aspernatur dolor vero fugiat quia veritatis explicabo temporibus vel!', 'Buah Buahan', '1699063388_jus.jpg', '2023-11-04'),
(2, 'Mie Sotong Khas Desa Tupa', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum inventore sequi labore iusto minus dolore quisquam sit nam quos rem, impedit velit quasi recusandae commodi repellendus obcaecati cupiditate laborum. Maxime, ut. Veritatis obcaecati quaerat labore laudantium pariatur incidunt. Explicabo, cumque veniam possimus fuga accusamus praesentium quae sint atque omnis enim, beatae eius. Ratione eaque minima eligendi recusandae ducimus sequi, obcaecati maxime repellendus, doloribus distinctio quis! Id veniam fuga deserunt quam sint, expedita alias exercitationem in! Labore incidunt tempore officia placeat dolor. Nobis autem nulla nisi voluptate, soluta laboriosam, vitae maxime animi maiores laborum rem ab harum culpa sit, dolore odit. Amet quibusdam quod, autem libero ad perspiciatis culpa velit temporibus sunt ipsa, animi reprehenderit eveniet! Sint nulla laborum hic non ipsa voluptates quasi. Voluptates soluta esse ducimus, delectus inventore at magnam ipsam unde provident perspiciatis. Saepe nam quis neque tempora. Obcaecati rerum at laboriosam similique a dolor corrupti, numquam iusto vel iste excepturi nisi consectetur nemo aliquid saepe commodi sequi delectus! Quidem dicta aliquam consequuntur tempore dolore quasi placeat tenetur dignissimos cum quis! Dolorum nam accusantium soluta voluptatum illum perspiciatis nobis qui necessitatibus atque inventore nisi deleniti aliquid natus voluptatibus dolorem, aspernatur dolor vero fugiat quia veritatis explicabo temporibus vel!', 'Makanan', '1699063430_makanan3.jpg', '2023-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `potensi_desa`
--
ALTER TABLE `potensi_desa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
