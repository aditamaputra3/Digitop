-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Apr 2023 pada 09.06
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitop_uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laptop`
--

CREATE TABLE `laptop` (
  `id_laptop` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `layar` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `prosecor` varchar(50) NOT NULL,
  `memory` varchar(50) NOT NULL,
  `tanggal_rilis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `tipe`, `merek`, `harga`, `layar`, `ram`, `prosecor`, `memory`, `tanggal_rilis`) VALUES
(1, 'X555M', 'Asus', '6500000', '16', '12', 'AMD A9 ', 'SSD 1TB', '2023-04-13'),
(2, 'X555Z', 'Asus', '10000000', '17', '8', 'Intel i7 ', 'SSD 1TB', '2023-04-13'),
(4, 'MCB2020', 'Macbook Pro', '20000000', '13', '16', 'Apple M1', 'SSD 512GB', '2023-12-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplier`
--

CREATE TABLE `suplier` (
  `id_suplier` int(11) NOT NULL,
  `nama_suplier` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `nama_suplier`, `no_telp`, `alamat`) VALUES
(1, 'PT. ASUS', '08929323', 'Jl. Sudirman Tower O ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `alamat`, `jenis_kelamin`) VALUES
(1, 'adi', '$2y$10$wb7WGPej9TkWzsPfQkvY/uIFiL0ufLEEPfOnVa9/O4Pa6R1H4ucYC', 'jl kk', 'S1'),
(2, 'adi22', '$2y$10$9JkbSsx1VSwF/FngXsCDV.3q1dgJWaM9WTcgnX./IGDAAq7NeipAq', 'Jl. Hhh', '1'),
(3, 'aa', '$2y$10$fbs8qALz.Ir2IATPlAmsJusZwNqkfYy0rd6NAo3VXEmXazOMjR1G.', 'aa', 'Non-Binary'),
(5, 's', '$2y$10$5IImEWTAtCMIe1sVM1ERLOg44uQB2WhwfOR.35Get9KX7.fPeQtY2', 's', 'Pria'),
(6, 'x', '$2y$10$9wCc83qN62BTTIkwnNLQWOqUCyAkK5WTZ8VgOwURvNPPC2k5aXE12', 's', 'Lorem-Ipsum'),
(7, 'a', '$2y$10$hqViDi0jB5whiwYHQ9hlg.e5B.SpRgLdS5Uj8MZC3.UzT6C/tzvym', 'd', 'Pria'),
(8, 'sdd', '$2y$10$V2ibooqIQUoL849E/Mowr.FOLT3hzS8.YGjbpTAJ1VnCkktxJRzqi', 'asas', 'Lorem-Ipsum'),
(9, 'cc', '$2y$10$kxDwLfRbFTW000W.O4HR0.qChk.Sb.oOg4yznJpZShyBgrohBotVW', 'asas', 'Lorem-Ipsum'),
(10, 'bb', '$2y$10$mwNeIeLeVLraYWIvesS5Xu1EE4/QLEN7qSXlAMWac33X/LEitY.Ky', 'bb', 'Lorem-Ipsum'),
(11, 'ee', '$2y$10$f6d6YV4O9gyC.TQ.I9VGJ.lWOwM7NLly0zjFB1Jz396kshjtRr.3C', 'ee', 'Non-Binary'),
(12, 'v', '$2y$10$ixuXms15u9OSjzX7rAOdCeEZHOGvkCBzgCvmoTAZumK7cprT.O4.G', 'v', 'Wanita'),
(13, 'b', '$2y$10$QuwoKNjNK/z2RTiHCAbj1.WoYUXzMHSvmzYhLRbjGuKjSVoVVXYMe', 'b', 'Pria'),
(14, 'sakura', '$2y$10$zrTcqsHUFkP7Ud6eCEYTB.eNXfHSFqSqpLwpKCN6CJWORq9Ha8IEy', 'Jl. Sakurazaka 46', 'Lorem-Ipsum');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
