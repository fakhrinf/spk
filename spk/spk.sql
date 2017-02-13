-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2017 at 05:47 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin_nuryadi', 'nuryadi1234');

-- --------------------------------------------------------

--
-- Table structure for table `bobot_lama`
--

CREATE TABLE IF NOT EXISTS `bobot_lama` (
  `id_lama` int(2) NOT NULL,
  `lama_sgt_rdh` int(2) NOT NULL,
  `lama_rdh_1` int(2) NOT NULL,
  `lama_rdh_2` int(2) NOT NULL,
  `lama_sdg_1` int(2) NOT NULL,
  `lama_sdg_2` int(2) NOT NULL,
  `lama_ting_1` int(2) NOT NULL,
  `lama_ting_2` int(2) NOT NULL,
  `lama_sgt_ting` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_lama`
--

INSERT INTO `bobot_lama` (`id_lama`, `lama_sgt_rdh`, `lama_rdh_1`, `lama_rdh_2`, `lama_sdg_1`, `lama_sdg_2`, `lama_ting_1`, `lama_ting_2`, `lama_sgt_ting`) VALUES
(1, 24, 11, 24, 5, 11, 3, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `bobot_luas`
--

CREATE TABLE IF NOT EXISTS `bobot_luas` (
  `id_luas` int(2) NOT NULL,
  `luas_sgt_rdh` int(4) NOT NULL,
  `luas_rdh_1` int(4) NOT NULL,
  `luas_rdh_2` int(4) NOT NULL,
  `luas_sdg_1` int(4) NOT NULL,
  `luas_sdg_2` int(4) NOT NULL,
  `luas_ting_1` int(4) NOT NULL,
  `luas_ting_2` int(4) NOT NULL,
  `luas_sgt_ting` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_luas`
--

INSERT INTO `bobot_luas` (`id_luas`, `luas_sgt_rdh`, `luas_rdh_1`, `luas_rdh_2`, `luas_sdg_1`, `luas_sdg_2`, `luas_ting_1`, `luas_ting_2`, `luas_sgt_ting`) VALUES
(1, 250, 200, 250, 100, 200, 50, 100, 50);

-- --------------------------------------------------------

--
-- Table structure for table `bobot_minat`
--

CREATE TABLE IF NOT EXISTS `bobot_minat` (
  `id_minat` int(2) NOT NULL,
  `minat_tdk_suka` varchar(20) NOT NULL,
  `minat_krg_suka` varchar(20) NOT NULL,
  `minat_sdg` varchar(20) NOT NULL,
  `minat_suka` varchar(20) NOT NULL,
  `minat_sgt_suka` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_minat`
--

INSERT INTO `bobot_minat` (`id_minat`, `minat_tdk_suka`, `minat_krg_suka`, `minat_sdg`, `minat_suka`, `minat_sgt_suka`) VALUES
(1, 'Tidak Disukai', 'Kurang Disukai', 'Sedang', 'Disukai', 'Sangat Disukai');

-- --------------------------------------------------------

--
-- Table structure for table `bobot_oks`
--

CREATE TABLE IF NOT EXISTS `bobot_oks` (
  `id_oks` int(2) NOT NULL,
  `oks_sgt_rdh_1` int(2) NOT NULL,
  `oks_sgt_rdh_2` int(2) NOT NULL,
  `oks_rdh_1` int(2) NOT NULL,
  `oks_rdh_2` int(2) NOT NULL,
  `oks_sdg_1` int(2) NOT NULL,
  `oks_sdg_2` int(2) NOT NULL,
  `oks_ting_1` int(2) NOT NULL,
  `oks_ting_2` int(2) NOT NULL,
  `oks_sgt_ting` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_oks`
--

INSERT INTO `bobot_oks` (`id_oks`, `oks_sgt_rdh_1`, `oks_sgt_rdh_2`, `oks_rdh_1`, `oks_rdh_2`, `oks_sdg_1`, `oks_sdg_2`, `oks_ting_1`, `oks_ting_2`, `oks_sgt_ting`) VALUES
(1, 9, 10, 8, 9, 6, 8, 4, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `bobot_pakan`
--

CREATE TABLE IF NOT EXISTS `bobot_pakan` (
  `id_pakan` int(2) NOT NULL,
  `pkn_sgt_tdk_mdh` varchar(20) NOT NULL,
  `pkn_tdk_mdh` varchar(20) NOT NULL,
  `pkn_sdg` varchar(20) NOT NULL,
  `pkn_mdh` varchar(20) NOT NULL,
  `pkn_sgt_mdh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_pakan`
--

INSERT INTO `bobot_pakan` (`id_pakan`, `pkn_sgt_tdk_mdh`, `pkn_tdk_mdh`, `pkn_sdg`, `pkn_mdh`, `pkn_sgt_mdh`) VALUES
(1, 'Sangat Tidak Mudah', 'Tidak Mudah', 'Sedang', 'Mudah', 'Sangat Mudah');

-- --------------------------------------------------------

--
-- Table structure for table `bobot_ph`
--

CREATE TABLE IF NOT EXISTS `bobot_ph` (
  `id_bobot_ph` int(2) NOT NULL,
  `ph_sgt_rdh` float NOT NULL,
  `ph_rdh_1` float NOT NULL,
  `ph_rdh_2` float NOT NULL,
  `ph_sdg_1` float NOT NULL,
  `ph_sdg_2` float NOT NULL,
  `ph_ting_1` float NOT NULL,
  `ph_ting_2` float NOT NULL,
  `ph_sgt_ting` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_ph`
--

INSERT INTO `bobot_ph` (`id_bobot_ph`, `ph_sgt_rdh`, `ph_rdh_1`, `ph_rdh_2`, `ph_sdg_1`, `ph_sdg_2`, `ph_ting_1`, `ph_ting_2`, `ph_sgt_ting`) VALUES
(1, 5, 5, 6, 6, 7, 7, 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `bobot_suhu`
--

CREATE TABLE IF NOT EXISTS `bobot_suhu` (
  `id_bobot_suhu` int(2) NOT NULL,
  `suhu_sgt_rdh` int(2) NOT NULL,
  `suhu_rdh_1` int(2) NOT NULL,
  `suhu_rdh_2` int(2) NOT NULL,
  `suhu_sdg_1` int(2) NOT NULL,
  `suhu_sdg_2` int(2) NOT NULL,
  `suhu_ting_1` int(2) NOT NULL,
  `suhu_ting_2` int(2) NOT NULL,
  `suhu_sgt_ting` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_suhu`
--

INSERT INTO `bobot_suhu` (`id_bobot_suhu`, `suhu_sgt_rdh`, `suhu_rdh_1`, `suhu_rdh_2`, `suhu_sdg_1`, `suhu_sdg_2`, `suhu_ting_1`, `suhu_ting_2`, `suhu_sgt_ting`) VALUES
(1, 10, 10, 20, 20, 25, 25, 30, 30);

-- --------------------------------------------------------

--
-- Table structure for table `bobot_tinggi`
--

CREATE TABLE IF NOT EXISTS `bobot_tinggi` (
  `id_bobot_tinggi` int(2) NOT NULL,
  `ting_sgt_rdh` int(4) NOT NULL,
  `ting_rdh_1` int(4) NOT NULL,
  `ting_rdh_2` int(4) NOT NULL,
  `ting_sdg_1` int(4) NOT NULL,
  `ting_sdg_2` int(4) NOT NULL,
  `ting_ting_1` int(4) NOT NULL,
  `ting_ting_2` int(4) NOT NULL,
  `ting_sgt` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_tinggi`
--

INSERT INTO `bobot_tinggi` (`id_bobot_tinggi`, `ting_sgt_rdh`, `ting_rdh_1`, `ting_rdh_2`, `ting_sdg_1`, `ting_sdg_2`, `ting_ting_1`, `ting_ting_2`, `ting_sgt`) VALUES
(1, 700, 500, 700, 300, 500, 100, 300, 100);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ikan`
--

CREATE TABLE IF NOT EXISTS `jenis_ikan` (
  `id` int(2) NOT NULL,
  `nama_ikan` varchar(20) NOT NULL,
  `url_gambar` varchar(100) NOT NULL,
  `suhu` int(2) NOT NULL,
  `ph` float NOT NULL,
  `tinggi_darat` int(4) NOT NULL,
  `lama_ikan` int(2) NOT NULL,
  `oksigen` float NOT NULL,
  `mudah_pakan` varchar(20) NOT NULL,
  `minat_masy` varchar(20) NOT NULL,
  `luas_kolam` int(5) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_ikan`
--

INSERT INTO `jenis_ikan` (`id`, `nama_ikan`, `url_gambar`, `suhu`, `ph`, `tinggi_darat`, `lama_ikan`, `oksigen`, `mudah_pakan`, `minat_masy`, `luas_kolam`, `deskripsi`) VALUES
(1, 'Ikan Bawal', '/spk/img/foto_ikan1.jpg', 25, 7.5, 700, 6, 4, 'Mudah', 'Sedang', 50, 'Ikan bawal air tawar adalah ikan yang biasa hidup di sungai. Hidupnya bergerombol di daerah yang alirannya deras. Bawal air tawar dapat hidup pada perairan minim oksigen. Hal ini dikarenakan bawal air tawar mempunyai sistem pernapasan yang baik karena insangnya memiliki permukaan alat pernapasan yang lebih luas. Bawal air tawar digolongkan ke dalam ikan omnivora.'),
(2, 'Ikan Gurame', '/spk/img/foto_ikan2.jpg', 28, 7.5, 400, 6, 4, 'Sedang', 'Disukai', 200, 'Ikan gurame adalah salah satu ikan air tawar yang disukai konsumen karena mempunyai daging yang kesat dan gurih. Habitat gurame adalah rawa di datara rendah. Gurame sangat peka terhadap suhu. Gurame memiliki alat labirin yang berfungsi mengambil oksigen dari udara sehingga dapat hidup di perairan minim oksigen. Ikan Gurame digolongkan ke dalam omnivora, namun cenderung herbivora.'),
(3, 'Ikan Lele', '/spk/img/foto_ikan3.jpg', 26, 7, 600, 3, 3, 'Mudah', 'Sangat Disukai', 25, 'Ikan lele dapat beradaptasi di berbagai air tawar, termasuk perairan tergenang dan tercemar seperti saluran air dan air limbah organik. Lele mempunyai alat pernapasan yang dapat mengambil oksigen dari udara langsung sehingga dapat bertahan hidup di perairan minim oksigen. Lele dikenal rakus dalam hal makan sehingga lele memakan apa saja yang diperolehnya termasuk sesama lele.'),
(4, 'Ikan Mas', '/spk/img/foto_ikan4.jpg', 23, 8, 1000, 7, 6, 'Sangat Mudah', 'Sangat Disukai', 100, 'Ikan mas adalah ikan air tawar yang habitat aslinya adalah perairan dangkal. Ikan mas lebih suka mencari tempat yang aman (terutama yang ditumbuhi rumput). Ikan mas tergolong ke dalam omnivora. Ikan mas suka mengaduk dasar kolam untuk mencari makan binatang atau plankton.'),
(5, 'Ikan Nila', '/spk/img/foto_ikan5.jpg', 29, 7.5, 250, 4, 4, 'Sedang', 'Disukai', 50, 'Ikan nila adalah ikan yang dapat hidup di perairan dalam dan luas seperti waduk, maupun kolam sempit dan dangkal. Nila hidup di perairan yang airnya tidak terlalu deras. Ikan nila tergolong herbivora. Ikan nila memakan plankton dan tumbuh-tumbuhan lunak.'),
(6, 'Ikan Patin', '/spk/img/foto_ikan6.jpg', 26, 7, 650, 5, 3, 'Mudah', 'Sedang', 75, 'Ikan patin adalah hewan yang nokturnal. Ikan ini suka bersembunyi di liang-liang tepi sungai. Ikan patin dapat hidup di kondisi perairan yang buruk. Ikan patin adalah omnivora. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bobot_lama`
--
ALTER TABLE `bobot_lama`
  ADD PRIMARY KEY (`id_lama`);

--
-- Indexes for table `bobot_luas`
--
ALTER TABLE `bobot_luas`
  ADD PRIMARY KEY (`id_luas`);

--
-- Indexes for table `bobot_minat`
--
ALTER TABLE `bobot_minat`
  ADD PRIMARY KEY (`id_minat`);

--
-- Indexes for table `bobot_oks`
--
ALTER TABLE `bobot_oks`
  ADD PRIMARY KEY (`id_oks`);

--
-- Indexes for table `bobot_pakan`
--
ALTER TABLE `bobot_pakan`
  ADD PRIMARY KEY (`id_pakan`);

--
-- Indexes for table `bobot_ph`
--
ALTER TABLE `bobot_ph`
  ADD PRIMARY KEY (`id_bobot_ph`);

--
-- Indexes for table `bobot_suhu`
--
ALTER TABLE `bobot_suhu`
  ADD PRIMARY KEY (`id_bobot_suhu`);

--
-- Indexes for table `bobot_tinggi`
--
ALTER TABLE `bobot_tinggi`
  ADD PRIMARY KEY (`id_bobot_tinggi`);

--
-- Indexes for table `jenis_ikan`
--
ALTER TABLE `jenis_ikan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jenis_ikan`
--
ALTER TABLE `jenis_ikan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
