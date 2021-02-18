-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 07:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `tahun_rilis` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `jumlah_episode` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(200) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `judul`, `tahun_rilis`, `genre`, `jumlah_episode`, `deskripsi`, `link`, `gambar`) VALUES
(29, 'Oregairu S3 (Episode 01 — 12) Sub Indo', 'Summer 2020 112', 'Slice of Life, Comedy, Drama, Romance, School', '12', 'Selama menjalankan Klub Relawan, Hachiman, Yukinoshita, dan Yuigahama telah mengalami banyak hal. Klub Relawan telah berhasil menyelesaikan berbagai masalah sosial di sekolah mereka, tetapi tak jarang justru berimbas buruk pada hubungan ketiganya. Meskipun begitu, perlahan mereka mulai saling terbuka dan mencoba memahami satu sama lain. Berbagai masalah yang mereka hadapi membuat kepribadian mereka tumbuh menjadi lebih baik. Akankah mereka dapat menemukan \"hubungan nyata\" yang selama ini mereka cari?', 'https://drive.google.com/uc?export=download&id=1Pvq_Ewc_e_--wqoCvjG9Mp1b7eZHuAnk', 'oregairu.jpg'),
(30, 'Uzaki-chan wa Asobitai! (Episode 01 — 12) Sub Indo', 'Summer 2020', 'Slice of Life, Comedy, Ecchi', '12', 'Shinichi Sakurai sebenarnya hanya ingin hari-harinya damai dan tenang. Namun, ia tak bisa menghindari Hana Uzaki, gadis manis yang berisik dan jahil.Shinichi Sakurai sebenarnya hanya ingin hari-harinya damai dan tenang. Namun, ia tak bisa menghindari Hana Uzaki, gadis manis yang berisik dan jahil.Shinichi Sakurai sebenarnya hanya ingin hari-harinya damai dan tenang. Namun, ia tak bisa menghindari Hana Uzaki, gadis manis yang berisik dan jahil.Shinichi Sakurai sebenarnya hanya ingin hari-harinya damai dan tenang. Namun, ia tak bisa menghindari Hana Uzaki, gadis manis yang berisik dan jahil.Shinichi Sakurai sebenarnya hanya ingin hari-harinya damai dan tenang. Namun, ia tak bisa menghindari Hana Uzaki, gadis manis yang berisik dan jahil.Shinichi Sakurai sebenarnya hanya ingin hari-harinya damai dan tenang. Namun, ia tak bisa menghindari Hana Uzaki, gadis manis yang berisik dan jahil.Shinichi Sakurai sebenarnya hanya ingin hari-harinya damai dan tenang. Namun, ia tak bisa menghindari Hana Uzaki, gadis manis yang berisik dan jahil.', 'https://drive.google.com/uc?export=download&id=1m3-5sR884z5c_t0XLE9Lpn4RazU3K3m3', 'Uzaki-chan-wa-Asobitai-750x410.jpg'),
(31, 'Kakushigoto BD (Episode 01 — 12) Sub Indo', 'Spring 2020', 'Slice of Life, Comedy, Shounen', '12', 'Kakushi Gotou, seorang komikus yang menyembunyikan pekerjaannya dari putrinya, Hime. Kata \"Kakushi Goto\" dalam bahasa jepang bisa berarti \"Sesuatu yang disembunyikan\" dan bisa juga berarti \"Pekerjaan Menggambar\".', 'https://drive.google.com/uc?export=download&id=1O0f_2e8UaaQ7aQB1z_CwN_ikk14VZglD', 'Kakushigoto-750x410.jpg'),
(36, 'Sword Art Online Season 3', 'Summer 2017', 'Action, Adventure, Fantasy, Game, Romance', '21', 'Pada tahun 2022, sebuah game virtual reality yang dapat dimainkan secara masal dirilis ke pengguna.\r\n\r\nGame tersebut bernama Sword Art Online (SAO). Dengan menggunakan NerveGear, berupa helm yang digunakan pemain untuk mengontrol karakter game mengikuti pikiran pemain.\r\n\r\nPada tanggal 6 November, sebanyak 10.000 pemain login ke SAO untuk pertama kalinya dan menyadari bahwa mereka tidak bisa logout.\r\n\r\nMereka dipaksa harus mencapai ke kastil lantai 100 untuk mengalahkan bos terakhir agar dapat bebas.\r\n\r\nMereka yang mengalami kekalahan dalam game, atau pun melepas NerveGear sebelum selesai permainan akan mengakibatkan kematian di kehidupan nyata mereka.', 'https://drive.google.com/file/d/1u5kSEBodeRDjgKYALBjNMLxL3HVoc-d7/view', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
