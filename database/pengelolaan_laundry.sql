-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2023 pada 06.31
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengelolaan_laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `qty` double NOT NULL,
  `keterangan` text NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_detail_transaksi`
--

INSERT INTO `tb_detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_paket`, `qty`, `keterangan`, `total_harga`) VALUES
(2, 2, 5, 1, '', 8000),
(3, 3, 1, 1, '', 6000),
(4, 4, 3, 4, 'ket', 12000),
(5, 5, 1, 1, '', 6000),
(6, 5, 2, 1, '', 3500),
(7, 6, 3, 4, 'ket', 12000),
(8, 7, 3, 3, 'ket', 9000),
(9, 8, 1, 1, 'ket', 6000),
(10, 9, 5, 3, 'ket', 24000),
(11, 10, 1, 4, 'ket', 24000),
(12, 11, 1, 2, 'ket', 12000),
(13, 12, 5, 3, 'ket', 24000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `nama`, `alamat`, `jenis_kelamin`, `tlp`) VALUES
(1, 'Salsa', 'Semboro', 'P', '08776554433'),
(2, 'Arista', 'Ponorogo', 'L', '0868097545234'),
(3, 'Reni', 'Curabamban', 'P', '087765436773'),
(4, 'Elfano', 'Umbulsari', 'L', '0895326789954'),
(5, 'Sakha', 'Jatilawang', 'P', '0876567543243'),
(6, 'Riamah', 'Babatan', 'P', '0877657896654');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_outlet`
--

INSERT INTO `tb_outlet` (`id_outlet`, `nama`, `alamat`, `tlp`) VALUES
(1, 'Laundry Serli', 'Jember', '085708482320'),
(2, 'Laundry Serli 2', 'semboro', '0895987654357'),
(3, 'Laundry SerliM 3', 'Bandung', '0895567644432');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `jenis` enum('kiloan','selimut','bed_cover','kaos','lain','celana') NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `id_outlet`, `jenis`, `nama_paket`, `harga`) VALUES
(1, 1, 'kiloan', 'Paket Lengkap', 6000),
(2, 1, 'kiloan', 'Paket cuci kering', 3500),
(3, 1, 'kiloan', 'Paket cuci basah', 3000),
(5, 1, 'kiloan', 'Paket Express', 8000),
(6, 1, 'kiloan', 'Paket setrika', 4000),
(7, 1, 'kiloan', 'Paket cuci+setrika', 8000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `kd_invoice` varchar(100) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `batas_waktu` datetime NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `biaya_tambahan` int(11) NOT NULL,
  `diskon` double NOT NULL,
  `pajak` int(11) NOT NULL,
  `status` enum('baru','proses','selesai','diambil') NOT NULL,
  `dibayar` enum('dibayar','belum_dibayar') NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `cash` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_outlet`, `kd_invoice`, `id_member`, `tgl`, `batas_waktu`, `tgl_bayar`, `biaya_tambahan`, `diskon`, `pajak`, `status`, `dibayar`, `id_user`, `total_bayar`, `cash`) VALUES
(2, 1, 'TR-270223002', 1, '2023-02-10 12:53:00', '2023-02-27 12:53:00', '2023-02-27 12:50:00', 20000, 20, 200, 'proses', 'dibayar', 1, 22560, 1000000),
(3, 1, 'TR-270223003', 1, '2023-02-27 13:51:00', '2023-02-28 13:51:00', '2023-02-25 13:52:00', 0, 0, 0, 'diambil', 'dibayar', 1, 6000, 10000),
(4, 1, 'TR-270223004', 4, '2023-02-04 14:02:00', '2023-02-18 14:02:00', '2023-02-10 14:03:00', 1000, 10, 1000, 'selesai', 'dibayar', 2, 12600, 15000),
(5, 1, 'TR-270223005', 1, '2023-02-22 14:36:00', '2023-02-27 14:37:00', '2023-02-27 14:37:00', 0, 0, 0, 'diambil', 'dibayar', 2, 9500, 10000),
(6, 1, 'TR-280223006', 2, '2023-02-04 12:05:00', '2023-02-11 12:06:00', '2023-02-07 17:11:00', 1000, 10, 1000, 'diambil', 'dibayar', 2, 12600, 15000),
(7, 1, 'TR-280223007', 3, '2023-02-02 14:07:00', '2023-02-08 14:07:00', '0000-00-00 00:00:00', 1000, 10, 1000, 'proses', 'belum_dibayar', 1, 9900, 10000),
(8, 1, 'TR-010323008', 5, '2023-03-01 14:05:00', '2023-03-01 14:05:00', '2023-02-28 20:15:00', 0, 0, 0, 'proses', 'dibayar', 1, 6000, 10000),
(9, 1, 'TR-020323009', 4, '2023-03-03 12:07:00', '2023-03-10 12:07:00', '2023-03-03 12:07:00', 1000, 10, 1000, 'baru', 'dibayar', 1, 24000, 25000),
(10, 1, 'TR-020323010', 5, '2023-03-02 14:55:00', '2023-03-09 14:55:00', '0000-00-00 00:00:00', 1000, 10, 1000, 'proses', 'belum_dibayar', 2, 23400, 25000),
(11, 1, 'TR-050323011', 1, '2023-03-05 20:02:00', '2023-03-18 20:02:00', '2023-03-10 20:05:00', 1000, 10, 1000, 'selesai', 'dibayar', 2, 12600, 20000),
(12, 1, 'TR-050323012', 2, '2023-03-05 20:27:00', '2023-03-17 20:27:00', '2023-03-15 20:30:00', 1000, 10, 1000, 'diambil', 'dibayar', 1, 23400, 25000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `role` enum('admin','kasir','owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `id_outlet`, `role`) VALUES
(1, 'Admin', 'admin', '$2y$10$oys7w7aFOrJnONznBT2Yueb6gGfREV/k2CuithlPxEJGgDQwXJt0i', 1, 'admin'),
(2, 'Reny', 'kasir', '$2y$10$j8NldH.TGA4Z3GfBfGJ6dOJ2e0rkp4mYz1bFo42OJGCL.nf4ZYy4.', 1, 'kasir'),
(3, 'Serli', 'owner', '$2y$10$E9k7qzUBjHhd/jhYgPg3H.hrBMwcuyR42RTTkNVlantgHJhlCNZCu', 1, 'owner');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `id_paket_2` (`id_paket`);

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_outlet` (`id_outlet`),
  ADD KEY `id_outlet_2` (`id_outlet`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_outlet` (`id_outlet`),
  ADD KEY `tb_transaksi_ibfk_3` (`id_user`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`),
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`);

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `tb_member` (`id_member`),
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id_outlet`),
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id_outlet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
