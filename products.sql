-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Mar 2023, 13:18
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `products`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_list`
--

CREATE TABLE `product_list` (
  `TYPE` varchar(2) DEFAULT NULL,
  `SKU` varchar(10) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `PRICE` float NOT NULL,
  `INFO` varchar(100) NOT NULL,
  `PIC` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `product_list`
--

INSERT INTO `product_list` (`TYPE`, `SKU`, `NAME`, `PRICE`, `INFO`, `PIC`) VALUES
('CD', '5', 'Beyonce - Renaissance', 24.99, 'Size: 350 MB', '/pics/vinyl.jpg'),
('FR', '6543', 'Black, leather couch', 400, 'Dimensions: 150x200x250 cm', '/pics/furnitureshop.jpg'),
('BK', '654322', 'Michelle Obama - Becoming', 17.99, 'Weight: 1100 grams', '/pics/bookstore.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`SKU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
