-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 12:55 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL,
  `date` mediumtext NOT NULL DEFAULT current_timestamp(),
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id`, `date`, `name`, `email`, `address`, `message`, `username`) VALUES
(1, '2021-01-19 23:29:40', 'Minato Uzumaki', 'uzumaki@gmail.com', 'Jalan Konohagakure nomer 99, Jepang', 'The most important thing for a shinobi is teamwork!', 'donny'),
(2, '2021-01-19 23:31:31', 'Naruto Uzumaki', 'naruto@gmail.com', 'Jalan sabang sampai merauke berjajar pulau pulau ', 'The True Measure Of A Shinobi Is Not How He Lives, But How He Dies. then I Shut My Eyes A Long Time Ago I Am Ungraceful', 'donny'),
(3, '2021-01-19 23:39:10', 'donny rizal adhi pratama', 'donnyrizaladhip@gmail.com', 'Jl. Parikesit no. 3 Rembang', '// cek apakah tombol daftar sudah diklik atau blum?\r\n    if (isset($_POST[\'ganti\'])) {\r\n\r\n        // ambil data dari formulir\r\n        $editid = $_GET[\'id\'];\r\n        $username = $_SESSION[\'admin\'][\'username\'];\r\n        $name = mysqli_escape_string($koneksi, $_POST[\'name\']);\r\n        $email = mysqli_escape_string($koneksi, $_POST[\'Email\']);\r\n        $address = mysqli_escape_string($koneksi, $_POST[\'address\']);\r\n        $message = mysqli_escape_string($koneksi, $_POST[\'message\']);\r\n\r\n        // cek apakah user telah melakukan pemesanan atau belum\r\n        $query = mysqli_query($koneksi, \"SELECT id FROM guestbook WHERE id=\'$editid\'\");\r\n        $row = mysqli_num_rows($query);\r\n        if ($row == 0) {\r\n            echo \"<script>window.location=\'./daftar.php?pesan=beli#pemesanan\';</script>\";\r\n        } else {\r\n            // buat query PEMESANAN\r\n            $sql = \"UPDATE guestbook SET name=\'$name\', email=\'$email\', address=\'$address\', message=\'$message\', username=\'$username\' WHERE id=\'$editid\'\";\r\n            $query = mysqli_query($koneksi, $sql);\r\n            if ($query) {\r\n                // kalau berhasil alihkan ke halaman pemesanan\r\n                echo \"<script>window.location=\'./daftar.php?pesan=editsukses#pemesanan\';</script>\";\r\n            } else {\r\n                echo \"<script>window.location=\'./daftar.php?pesan=editgagal#pemesanan\';</script>\";\r\n            }\r\n        }\r\n    } else {\r\n        echo mysqli_error($koneksi);\r\n        // echo \"<script>window.location=\'./\';</script>\";\r\n    }', 'haiiiii'),
(4, '2021-01-19 23:56:37', 'Dutch van Der Linde', 'dutch@gmail.com', 'Blackwater rob become accident lmao', 'We need a F--- Money to get out of here. just remember money ma boi. do you have a faith to me? ', 'donny'),
(5, '2021-01-19 23:57:17', 'Arthur Morgan ', 'arthur@gmail.com', 'Heaven', 'Nothin\' means more to me than this gang. I would kill for it. I would happily die for it. I wish things were different... But it weren\'t us who changed', 'donny'),
(6, '2021-01-20 00:43:43', 'Victor Oladipo', 'victorious@gmail.com', 'United State is a joke 🤣', 'Fairy tales are more than true: not because they tell us that dragons exist, but because they tell us that dragons can be beaten', 'haiiiii');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `username`, `password`) VALUES
(1, 'donny', 'donny'),
(2, 'guest', 'guest'),
(3, 'haiiiii', 'hai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD CONSTRAINT `guestbook_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
