-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2019 pada 14.04
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(8) NOT NULL,
  `judul` varchar(53) NOT NULL,
  `pengarang` varchar(35) NOT NULL,
  `tgl` date NOT NULL,
  `jml` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `tgl`, `jml`) VALUES
('19A40001', 'Theory Newton', 'J.G', '2019-03-08', 1),
('19A40002', 'Matematika diskret', 'o.n', '2019-03-08', 1),
('19A40003', 'Kalkulus', 'lop', '2019-03-08', 1),
('19A40004', 'Kalkulus lanjut', 'junk', '2019-03-08', 1),
('19A40005', 'Probabilitas', 'rand', '2019-03-08', 1),
('19A40006', 'Statistika', 'Lisa', '2019-03-08', 1),
('19A40007', 'Fisika dasar', 'kope', '2019-03-08', 1),
('19A40008', 'Gelombang', 'Rone', '2019-03-08', 1),
('19A40009', 'Elekra', 'Iwe', '2019-03-08', 1),
('19A40010', 'Termadinamika', 'J.Ga', '2019-03-08', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `denda`
--

CREATE TABLE `denda` (
  `id_denda` int(8) NOT NULL,
  `telat` varchar(25) NOT NULL,
  `biaya` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `denda`
--

INSERT INTO `denda` (`id_denda`, `telat`, `biaya`) VALUES
(1, '1 minggu', 5000),
(2, '2 minggu', 7000),
(3, '1 bulan', 10000),
(4, 'lebih 1 bulan', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(8) NOT NULL,
  `genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`id_genre`, `genre`) VALUES
(1, 'Misteri'),
(2, 'Karya ilmiah'),
(3, 'Novel Fiksi'),
(4, 'Kesehatan'),
(5, 'MIPA'),
(6, 'Sejarah'),
(7, 'Geografi'),
(8, 'Tata negara'),
(9, 'Seni'),
(10, 'Budaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `email`, `username`, `password`, `nama`, `tgl_lahir`) VALUES
(1, '', 'jhonson', 'admin', 'jhonson', '2019-03-11'),
(2, '', 'grock', 'admin', 'grock', '2019-03-11'),
(3, '', 'mino', 'admin', 'mino', '2019-03-11'),
(4, '', 'hilda', 'admin', 'hilda', '2019-03-11'),
(5, '', 'kaja', 'admin', 'kaja', '2019-03-11'),
(6, '', 'lollita', 'admin', 'lollita', '2019-03-11'),
(7, '', 'moscov', 'admin', 'moscov', '2019-03-11'),
(8, '', 'kagura', 'admin', 'kagura', '2019-03-11'),
(9, '', 'leo', 'admin', 'leo', '2019-03-11'),
(10, '', 'martis', 'admin', 'martis', '2019-03-11'),
(31, 'iwan.wansyur20@gmail.com', 'rty', 'd41d8cd98f00b204e9800998ecf8427e', 'iwan wansyur', '2019-05-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak`
--

CREATE TABLE `rak` (
  `id_rak` int(8) NOT NULL,
  `kode_rak` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rak`
--

INSERT INTO `rak` (`id_rak`, `kode_rak`) VALUES
(1, 'A00B1001'),
(2, 'A00B1002'),
(3, 'A00B1003'),
(4, 'A00B1004'),
(5, 'A00B1005'),
(7, 'A00B1006'),
(8, 'A00B1007'),
(9, 'A00B1008'),
(10, 'A00B1009'),
(11, 'A00B1010');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(8) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama`, `alamat`, `tgl_lahir`, `kelas`) VALUES
(1, '1234567801', 'joko', 'desa tonjong', '2002-09-04', '10'),
(2, '1234567802', 'Doni', 'Karayunan', '2002-09-04', '10'),
(3, '1234567810', 'Lola', 'Desa Cigasong', '2002-09-04', '10'),
(4, '1234567803', 'Klodia', 'Desa Cigasong', '2002-09-04', '10'),
(5, '1234567804', 'Hook', 'Desa Sindangkasih', '2002-09-04', '10'),
(6, '1234567805', 'koko', 'Desa Sukaraja', '2002-09-04', '10'),
(7, '1234567806', 'Juju', 'Desa Ranji Kulon', '2002-09-04', '10'),
(8, '1234567807', 'Adimas', 'Desa Tonjong', '2002-09-04', '10'),
(9, '1234567808', 'Sinta', 'Desa Sindangkasih', '2002-09-04', '10'),
(10, '1234567809', 'Hunter', 'Desa Tonjong', '0000-00-00', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_petugas` int(8) NOT NULL,
  `id_pinjam` int(25) NOT NULL,
  `id_siswa` int(8) NOT NULL,
  `id_buku` varchar(8) NOT NULL,
  `judul` varchar(53) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_petugas`, `id_pinjam`, `id_siswa`, `id_buku`, `judul`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, 1, 1, 1, '', '', '0000-00-00', '0000-00-00'),
(2, 1, 2, 2, '', '', '0000-00-00', '0000-00-00'),
(3, 1, 3, 3, '', '', '0000-00-00', '0000-00-00'),
(4, 1, 4, 3, '', '', '0000-00-00', '0000-00-00'),
(5, 1, 5, 5, '', '', '0000-00-00', '0000-00-00'),
(6, 1, 6, 6, '', '', '0000-00-00', '0000-00-00'),
(7, 1, 7, 7, '', '', '0000-00-00', '0000-00-00'),
(8, 1, 8, 8, '', '', '0000-00-00', '0000-00-00'),
(9, 1, 9, 9, '', '', '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fktransaksi_id_anggota` (`id_siswa`),
  ADD KEY `fktransaksi_id_petugas` (`id_petugas`),
  ADD KEY `fktransaksi_id_pinjam` (`id_pinjam`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `denda`
--
ALTER TABLE `denda`
  MODIFY `id_denda` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
