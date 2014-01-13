-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2014 at 11:07 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newbie`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `nama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subjek` varchar(30) NOT NULL,
  `komentar` varchar(1000) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`nama`, `email`, `subjek`, `komentar`, `Date`) VALUES
('irfan', 'arfiandi@yahoo.co.id', 'kurang bagus', 'websitenya tampilannya kurang bagus gan', '2014-01-11 11:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `datamember`
--

CREATE TABLE IF NOT EXISTS `datamember` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `suka` int(4) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datamember`
--

INSERT INTO `datamember` (`username`, `password`, `suka`) VALUES
('maroon 5', '04a3da97880fcedeb087378f29c3a102', 13),
('paramore', '4e25e510bb73f379d9059e5c69d958be', 20),
('seventen', 'd66d7a1f0c554cba20e0f71f2864a8f9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `pukul` varchar(20) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `namafoto` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `kesimpulan` text NOT NULL,
  `txt` varchar(20) NOT NULL,
  `namatxt` varchar(20) NOT NULL,
  `lokasitxt` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`no`, `nama`, `tempat`, `pukul`, `tanggal`, `foto`, `namafoto`, `lokasi`, `kesimpulan`, `txt`, `namatxt`, `lokasitxt`, `date`) VALUES
(7, 'Black Mild Urbanculture', 'Ancol, Jakarta', '13.00 WIB', '26 Januari 2014', '', 'event1.jpg', 'upload/event1.jpg', 'Pamerin Band loe !', '', 'black.txt', 'upload/black.txt', '2014-01-11 10:43:30'),
(8, 'D. Super Mild Djakarta Warehou', 'Jakarta', '18:00 WIB', '24 Februari 2014', '', 'images.jpg', 'upload/images.jpg', 'Super Mild', '', 'd.txt', 'upload/d.txt', '2014-01-11 10:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `lagu`
--

CREATE TABLE IF NOT EXISTS `lagu` (
  `id` varchar(30) NOT NULL,
  `lagu` varchar(100) NOT NULL,
  `namalagu` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lagu`
--

INSERT INTO `lagu` (`id`, `lagu`, `namalagu`, `lokasi`) VALUES
('paramore', '', 'Where The Lines Overlap.mp3', 'lagu/Where The Lines Overlap.mp3'),
('paramore', '', 'Crushcrushcrush.mp3', 'lagu/Crushcrushcrush.mp3'),
('paramore', '', 'Pressure.mp3', 'lagu/Pressure.mp3'),
('paramore', '', 'Ignorance.mp3', 'lagu/Ignorance.mp3'),
('paramore', '', 'Crushcrushcrush.mp3', 'lagu/Crushcrushcrush.mp3'),
('paramore', '', 'Where The Lines Overlap.mp3', 'lagu/Where The Lines Overlap.mp3'),
('maroon 5', '', 'Maroon 5 - Misery.mp3', 'lagu/Maroon 5 - Misery.mp3'),
('maroon 5', '', 'Maroon 5 - One More Night (www.SongsLover.pk).mp3', 'lagu/Maroon 5 - One More Night (www.SongsLover.pk).mp3'),
('maroon 5', '', 'Maroon 5 - This Love.mp3', 'lagu/Maroon 5 - This Love.mp3'),
('maroon 5', '', 'Maroon_5_Daylight.mp3', 'lagu/Maroon_5_Daylight.mp3'),
('maroon 5', '', 'maroon5 - payphone.mp3', 'lagu/maroon5 - payphone.mp3'),
('seventen', '', 'SEVENTEEN - Seisi Hati.mp3', 'lagu/SEVENTEEN - Seisi Hati.mp3'),
('seventen', '', 'Seventeen - Hal Terindah.mp3', 'lagu/Seventeen - Hal Terindah.mp3'),
('seventen', '', 'Seventeen - Jalan terbaik.mp3', 'lagu/Seventeen - Jalan terbaik.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` varchar(30) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `namafoto` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `foto`, `namafoto`, `lokasi`) VALUES
('paramore', ' ', '1.jpg', 'photo/1.jpg'),
('paramore', ' ', '2.jpg', 'photo/2.jpg'),
('paramore', ' ', '4.jpg', 'photo/4.jpg'),
('paramore', ' ', '5.jpg', 'photo/5.jpg'),
('maroon 5', ' ', '6.jpg', 'photo/6.jpg'),
('maroon 5', ' ', '7.jpg', 'photo/7.jpg'),
('maroon 5', ' ', '8.jpg', 'photo/8.jpg'),
('maroon 5', ' ', '9.jpg', 'photo/9.jpg'),
('seventen', ' ', '14.jpg', 'photo/14.jpg'),
('seventen', ' ', '13.jpg', 'photo/13.jpg'),
('seventen', ' ', '12.jpg', 'photo/12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `id` varchar(40) NOT NULL,
  `lagu` varchar(50) NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `lagu`, `harga`) VALUES
('paramore', 'Where The Lines Overlap.mp3', 1),
('paramore', 'Crushcrushcrush.mp3', 1),
('paramore', 'Pressure.mp3', 2),
('paramore', 'Ignorance.mp3', 1),
('paramore', 'Crushcrushcrush.mp3', 1),
('paramore', 'Where The Lines Overlap.mp3', 1),
('maroon 5', 'Maroon 5 - Misery.mp3', 3),
('maroon 5', 'Maroon 5 - One More Night (www.SongsLover.pk).mp3', 1),
('maroon 5', 'Maroon 5 - This Love.mp3', 1),
('maroon 5', 'Maroon_5_Daylight.mp3', 1),
('maroon 5', 'maroon5 - payphone.mp3', 1),
('seventen', 'SEVENTEEN - Seisi Hati.mp3', 1),
('seventen', 'Seventeen - Hal Terindah.mp3', 1),
('seventen', 'Seventeen - Jalan terbaik.mp3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` varchar(30) NOT NULL,
  `usermane` varchar(30) NOT NULL,
  `basecamp` varchar(50) NOT NULL,
  `aliran` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `ket` varchar(1000) NOT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `usermane`, `basecamp`, `aliran`, `gambar`, `filename`, `lokasi`, `ket`, `no`) VALUES
('paramore', 'Paramore', 'Tennessee, USA', 'Rock', ' ', 'Biografi Paramore.jpg', 'photo/Biografi Paramore.jpg', 'Follow Us !', 15),
('maroon 5', 'Maroon 5', 'USA', 'pop', ' ', '1.jpg', 'photo/1.jpg', 'payphone', 16),
('seventen', 'Seventen', 'Jakarta, Indonesia', 'pop', ' ', '3.jpg', 'photo/3.jpg', 'Seventen ', 17);

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `namasponsor` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `namafoto` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `kesimpulan` text NOT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`namasponsor`, `link`, `foto`, `namafoto`, `lokasi`, `kesimpulan`, `no`) VALUES
('Ibanez Guitars, Hollow Bodies, Basses, Acoustics, Etc', 'www.ibanez.com', '', 'ibanez.jpg', 'sponsor/ibanez.jpg', 'Here Ibanez guitar wiring diagram for JEM vintage guitar series. This uses a standard 5 way switch with 2 Humbuckers and one single in the middle. The guitar is wired so that that as follows.1 Position is the Bridge Humbucker. 2 Position is the Inside Bridge coil and Middle single. 3 Position is just the Single. 4 Position is the Inside Neck coil and the Middle single. 5 Position is the Neck Humbucker. They also added a 331PF capacitor across the volume pot. This is so that the highs donâ€™t roll off when the volume is turned down. Here full Ibanez JEM Series Wiring Diagram.', 2),
('Toko Bagus', 'http://www.tokobagus.com', '', '24301422_4508797_524312beacbcf.jpg', 'sponsor/24301422_4508797_524312beacbcf.jpg', 'Tokobagus.com adalah pusat jual beli online terbesar di Indonesia. Tempat untuk mencari barang baru dan bekas berkualitas seperti produk handphone murah, komputer, fashion, mobil bekas, motor, rumah dan properti, peralatan rumah tangga, aneka jasa dan juga lowongan kerja. Untuk para penjual, pasang iklan gratis adalah salah satu layanan yang disediakan oleh Tokobagus. Iklan anda akan dilihat oleh ratusan ribu orang setiap harinya. Bertransaksi di Tokobagus, baik jual maupun beli tidak dikenakan biaya, semua disediakan gratis. Bergabunglah sekarang juga bersama jutaan member lain yang sudah terdaftar. ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` varchar(30) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `tanggal` datetime NOT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `tanggal`, `no`) VALUES
('paramore', 'Wellcome to Paramore Band, Paramore will rock you !', '2014-01-11 10:21:38', 7),
('maroon 5', 'One More Night !', '2014-01-11 10:22:32', 8),
('seventen', 'akhirnya ku menemukanmu', '2014-01-11 10:29:15', 9);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` varchar(30) NOT NULL,
  `lagu` varchar(30) NOT NULL,
  `harga` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `rekening` int(15) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `catat` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `lagu`, `harga`, `nama`, `email`, `bank`, `rekening`, `telp`, `catat`, `date`) VALUES
('paramore', 'Where The Lines Overlap.mp3', 1, 'irwan arfiandi', 'walkeradam715@gmail.com', 'BCA', 9876, '087765655656', 'Paramore mania', '2014-01-11 11:03:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
