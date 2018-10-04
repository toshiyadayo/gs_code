-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 10 月 04 日 16:17
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
  `syurui` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `nee_db_table`
--

INSERT INTO `nee_db_table` (`id`, `email`, `name`, `pass`, `birth`, `sex`, `syurui`, `fname`) VALUES
(1, 'test@test.jp', 'muranishi', 'abc', '20180927', 1, '1', ''),
(6, 'test1@test.jp', 'testA', 'passtest', '20180927', 0, '1', ''),
(7, 'test2@test.jp', 'testB', 'passtest2', '20180927', 2, '2', ''),
(8, 'test3@test.jp', 'testC', 'passtest3', '20180927', 1, '1', ''),
(9, 'test4@test.jp', 'testD', 'passtest4', '20180927', 1, '1', ''),
(10, 'test5@test.jp', 'testE', 'passtest5', '20180927', 2, '2', ''),
(12, 'mail', 'name', 'pass', 'birth', 0, 'syurui', 'fname'),
(13, 'aaa', 'aaa', 'aaa', 'aaa', 0, '', ''),
(14, 'aaa', 'aaa', 'aaa', 'aaa', 0, 'aaa', 'aaa'),
(15, 'aaa', 'name', 'aaa', 'aaa', 0, 'aaa', 'aaa'),
(16, 'aaa', 'name', 'aaa', 'aaa', 0, 'aaa', 'aaa'),
(17, 'aaa', 'aa', 'aaa', 'aaa', 0, 'aaa', 'aaa'),
(18, 'aa', 'aa', 'aa', '11', 1, '1', 'aaa'),
(19, 'aa', 'aa', 'aa', '11', 1, '1', 'スクリーンショット 2018-09-28 11.50.45.png'),
(20, 'a', 'aa', 'aaa', '11', 1, '1', 'スクリーンショット 2018-09-28 11.50.45.png'),
(21, 'aa', 'aa', 'aa', '11', 1, '1', 'スクリーンショット 2018-09-28 11.50.45.png'),
(22, 'aa', 'aa', 'aa', '11', 1, '1', 'スクリーンショット 2018-09-28 11.50.45.png'),
(23, 'a', 'a', 'a', '1', 1, '1', 'スクリーンショット 2018-09-28 11.50.45.png'),
(24, 'a', 'a', 'a', '1', 1, '1', 'スクリーンショット 2018-09-28 11.50.45.png'),
(25, 'a', 'a', 'a', '1', 1, '1', 'スクリーンショット 2018-09-28 11.50.45.png'),
(26, 'a', 'a', 'a', '1', 1, '1', 'スクリーンショット 2018-09-28 11.50.45.png'),
(27, 'a', 'a', 'a', '1', 1, '1', 'スクリーンショット 2018-09-28 11.50.45.png'),
(28, 'a', 'a', 'a', '1', 1, '1', 'スクリーンショット 2018-09-28 11.50.45.png');

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
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
