-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 9 月 27 日 15:37
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nee_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `nee_db_table`
--

CREATE TABLE IF NOT EXISTS `nee_db_table` (
`id` int(12) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `birth` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sex` int(1) NOT NULL,
  `syurui` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `nee_db_table`
--

INSERT INTO `nee_db_table` (`id`, `email`, `name`, `pass`, `birth`, `sex`, `syurui`) VALUES
(1, 'test@test.jp', 'むらにし', 'abc', '20180927', 1, '3'),
(6, 'test1@test.jp', 'testA', 'passtest', '20180927', 0, '1'),
(7, 'test2@test.jp', 'testB', 'passtest2', '20180927', 2, '2'),
(8, 'test3@test.jp', 'testC', 'passtest3', '20180927', 1, '1'),
(9, 'test4@test.jp', 'testD', 'passtest4', '20180927', 1, '1'),
(10, 'test5@test.jp', 'testE', 'passtest5', '20180927', 2, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nee_db_table`
--
ALTER TABLE `nee_db_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nee_db_table`
--
ALTER TABLE `nee_db_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
