-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2020 at 11:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `primera_clinica`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahaya_lingkungan_kerja`
--

CREATE TABLE `bahaya_lingkungan_kerja` (
  `id_blk` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `jam_bising` varchar(100) NOT NULL,
  `tahun_bising` varchar(100) NOT NULL,
  `jam_getaran` varchar(100) NOT NULL,
  `tahun_getaran` varchar(100) NOT NULL,
  `jam_zat_kimia` varchar(100) NOT NULL,
  `tahun_zat_kimia` varchar(100) NOT NULL,
  `jam_panas` varchar(100) NOT NULL,
  `tahun_panas` varchar(100) NOT NULL,
  `jam_asap` varchar(100) NOT NULL,
  `tahun_asap` varchar(100) NOT NULL,
  `jam_gerakan_berulang` varchar(100) NOT NULL,
  `tahun_gerakan_berulang` varchar(100) NOT NULL,
  `jam_monitor_komputer` varchar(100) NOT NULL,
  `tahun_monitor_komputer` varchar(100) NOT NULL,
  `jam_mendorong_menarik` varchar(100) NOT NULL,
  `tahun_mendorong_menarik` varchar(100) NOT NULL,
  `jam_angkat_beban_berat` varchar(100) NOT NULL,
  `tahun_angkat_beban_berat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bahaya_lingkungan_kerja`
--

INSERT INTO `bahaya_lingkungan_kerja` (`id_blk`, `nrp`, `jam_bising`, `tahun_bising`, `jam_getaran`, `tahun_getaran`, `jam_zat_kimia`, `tahun_zat_kimia`, `jam_panas`, `tahun_panas`, `jam_asap`, `tahun_asap`, `jam_gerakan_berulang`, `tahun_gerakan_berulang`, `jam_monitor_komputer`, `tahun_monitor_komputer`, `jam_mendorong_menarik`, `tahun_mendorong_menarik`, `jam_angkat_beban_berat`, `tahun_angkat_beban_berat`) VALUES
(1, '123456789', '6', '7', '8', '6', '6', '7', '9', '3', '5', '2', '4', '5', '8', '7', '6', '5', '5', '8'),
(2, '987654321', '7', '7', '3', '5', '4', '5', '4', '5', '9', '8', '5', '4', '2', '1', '3', '4', '4', '7'),
(3, '918273645', '7', '8', '4', '5', '2', '3', '7', '5', '6', '3', '4', '5', '8', '6', '4', '6', '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `jenis_mcu` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `departemen` varchar(200) NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `puasa` varchar(100) NOT NULL,
  `tgl_mcu` date NOT NULL,
  `keluhan_sekarang` text NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_karyawan`, `jenis_mcu`, `nama`, `nrp`, `jenis_kelamin`, `tgl_lahir`, `bagian`, `jabatan`, `departemen`, `nama_perusahaan`, `puasa`, `tgl_mcu`, `keluhan_sekarang`, `no_hp`, `username`, `password`) VALUES
(1, 'Purmakarya', 'Deni', '123456789', 'Laki-laki', '1999-02-18', 'Administrasi', 'Administrasi', 'Administrasi', 'pizza hut', 'Iya', '2020-09-15', 'suka galau nih pusing', '08896348762', 'deni', 'deni'),
(2, 'Anuual/Periodik', 'Ratna', '987654321', 'Perempuan', '2001-02-16', 'Administrasi', 'Administrasi', 'Administrasi', 'pizza hut', 'Tidak', '2020-09-11', 'suka mikirin deni nih', '08823964327357', 'ratna', 'ratna'),
(3, 'Purmakarya', 'Adinda', '918273645', 'Perempuan', '1999-02-02', 'Administrasi', 'Administrasi', 'Administrasi', 'hotdog', 'Tidak', '2020-09-18', 'suka sombong tau', '085264738374', 'adinda', 'adinda');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pemeriksaan`
--

CREATE TABLE `jenis_pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `darah` varchar(50) NOT NULL,
  `urine` varchar(50) NOT NULL,
  `visus` varchar(50) NOT NULL,
  `bb_tb` varchar(50) NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `gigi` varchar(50) NOT NULL,
  `ekg` varchar(50) NOT NULL,
  `audio` varchar(50) NOT NULL,
  `tekanan_darah` varchar(50) NOT NULL,
  `spirometri` varchar(50) NOT NULL,
  `treadmill` varchar(50) NOT NULL,
  `rontgen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_pemeriksaan`
--

INSERT INTO `jenis_pemeriksaan` (`id_pemeriksaan`, `nrp`, `darah`, `urine`, `visus`, `bb_tb`, `dokter`, `gigi`, `ekg`, `audio`, `tekanan_darah`, `spirometri`, `treadmill`, `rontgen`) VALUES
(1, '123456789', 'Darah', '', '', 'BB-TB', 'Dokter', '', '', '', '', '', '', 'Rontgen'),
(2, '987654321', 'Darah', 'Urine', '', 'BB-TB', '', '', 'EKG', '', '', 'Spirometri', '', ''),
(3, '918273645', '', '', 'Visus', '', 'Dokter', 'Gigi', '', '', 'Tekanan Darah', '', 'Treadmill', 'Rontgen');

-- --------------------------------------------------------

--
-- Table structure for table `kebiasaan`
--

CREATE TABLE `kebiasaan` (
  `id_kebiasaan` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `minum_alkohol` varchar(100) NOT NULL,
  `jumlah_minum_alkohol` varchar(100) NOT NULL,
  `merokok` varchar(100) NOT NULL,
  `jumlah_merokok` varchar(100) NOT NULL,
  `olahraga` varchar(100) NOT NULL,
  `jumlah_olahraga` varchar(100) NOT NULL,
  `minum_kopi` varchar(100) NOT NULL,
  `jumlah_minum_kopi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kebiasaan`
--

INSERT INTO `kebiasaan` (`id_kebiasaan`, `nrp`, `minum_alkohol`, `jumlah_minum_alkohol`, `merokok`, `jumlah_merokok`, `olahraga`, `jumlah_olahraga`, `minum_kopi`, `jumlah_minum_kopi`) VALUES
(1, '123456789', 'Ya', '5', 'Tidak', '', 'Ya', '7', 'Tidak', ''),
(2, '987654321', 'Tidak', '', 'Ya', '67', 'Tidak', '', 'Ya', '6'),
(3, '918273645', 'Tidak', '', 'Tidak', '', 'Ya', '78', 'Ya', '2');

-- --------------------------------------------------------

--
-- Table structure for table `kecelakaan_kerja`
--

CREATE TABLE `kecelakaan_kerja` (
  `id_kecelakaan_kerja` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `tahun_jatuh_dari_ketinggian` varchar(100) NOT NULL,
  `tahun_tersayat_benda_tajam` varchar(100) NOT NULL,
  `tahun_tersengat_listrik` varchar(100) NOT NULL,
  `tahun_terbakar` varchar(100) NOT NULL,
  `tahun_terbentur` varchar(100) NOT NULL,
  `tahun_tergores` varchar(100) NOT NULL,
  `tahun_terkilir` varchar(100) NOT NULL,
  `tahun_tertiban` varchar(100) NOT NULL,
  `tahun_tertusuk` varchar(100) NOT NULL,
  `tahun_terpotong` varchar(100) NOT NULL,
  `tahun_kemasukan_benda_asing` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecelakaan_kerja`
--

INSERT INTO `kecelakaan_kerja` (`id_kecelakaan_kerja`, `nrp`, `tahun_jatuh_dari_ketinggian`, `tahun_tersayat_benda_tajam`, `tahun_tersengat_listrik`, `tahun_terbakar`, `tahun_terbentur`, `tahun_tergores`, `tahun_terkilir`, `tahun_tertiban`, `tahun_tertusuk`, `tahun_terpotong`, `tahun_kemasukan_benda_asing`) VALUES
(1, '123456789', '2009', '2009', '2009', '2010', '2010', '2010', '2010', '2010', '2010', '2010', '2010'),
(2, '987654321', '2003', '2009', '2003', '', '2006', '2004', '', '', '', '', '2009'),
(3, '918273645', '2008', '2005', '2006', '2005', '2006', '2004', '2005', '2004', '2008', '2004', '2002');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_penyakit_keluarga`
--

CREATE TABLE `riwayat_penyakit_keluarga` (
  `id_pk` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `penyakit_jantung` varchar(100) NOT NULL,
  `penyakit_darah_tinggi` varchar(100) NOT NULL,
  `penyakit_kencing_manis` varchar(100) NOT NULL,
  `penyakit_stroke` varchar(100) NOT NULL,
  `penyakit_paru` varchar(100) NOT NULL,
  `penyakit_kanker_tumor` varchar(100) NOT NULL,
  `penyakit_gangguan_jiwa` varchar(100) NOT NULL,
  `penyakit_ginjal` varchar(100) NOT NULL,
  `penyakit_saluran_cerna` varchar(100) NOT NULL,
  `penyakit_lain` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_penyakit_keluarga`
--

INSERT INTO `riwayat_penyakit_keluarga` (`id_pk`, `nrp`, `penyakit_jantung`, `penyakit_darah_tinggi`, `penyakit_kencing_manis`, `penyakit_stroke`, `penyakit_paru`, `penyakit_kanker_tumor`, `penyakit_gangguan_jiwa`, `penyakit_ginjal`, `penyakit_saluran_cerna`, `penyakit_lain`) VALUES
(1, '123456789', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya'),
(2, '987654321', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya'),
(3, '918273645', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_penyakit_pasien`
--

CREATE TABLE `riwayat_penyakit_pasien` (
  `id_pp` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `riwayat_hepatitis` varchar(100) NOT NULL,
  `riwayat_pengobatan_tbc` varchar(100) NOT NULL,
  `hipertensi` varchar(100) NOT NULL,
  `diabetes_melitus` varchar(100) NOT NULL,
  `riwayat_operasi` varchar(100) NOT NULL,
  `riwayat_rawat_inap` varchar(100) NOT NULL,
  `pengobatan_saat_ini` varchar(100) NOT NULL,
  `alergi_obat_makanan` varchar(100) NOT NULL,
  `konsumsi_obat` varchar(100) NOT NULL,
  `lain_lain` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_penyakit_pasien`
--

INSERT INTO `riwayat_penyakit_pasien` (`id_pp`, `nrp`, `riwayat_hepatitis`, `riwayat_pengobatan_tbc`, `hipertensi`, `diabetes_melitus`, `riwayat_operasi`, `riwayat_rawat_inap`, `pengobatan_saat_ini`, `alergi_obat_makanan`, `konsumsi_obat`, `lain_lain`) VALUES
(1, '123456789', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Iya'),
(2, '987654321', 'Iya', 'Iya', 'Iya', 'Iya', 'Iya', 'Iya', 'Iya', 'Iya', 'Tidak', 'Tidak'),
(3, '918273645', 'Iya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `hak_akses` enum('Administrator / pemilik perusahaan klinik','Admin','Perusahaan','Karyawan(pasien)') NOT NULL,
  `kode_perusahaan` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `nama_lengkap`, `hak_akses`, `kode_perusahaan`, `nama_perusahaan`, `nrp`) VALUES
(1, 'bos', '123', 'bos ganteng', 'Administrator / pemilik perusahaan klinik', '', '', ''),
(2, 'admin', '1111', 'Admin Imoet', 'Admin', '', '', ''),
(3, 'admin dua', '2222', 'Admin Cadangan Dua', 'Admin', '', '', ''),
(4, 'admin tiga', '3333', 'Admin Cadangan Tiga', 'Admin', '', '', ''),
(5, 'pizza hut', '123', '', 'Perusahaan', 'P0001', 'pizza hut', ''),
(6, 'hotdog', '2222', '', 'Perusahaan', 'P0002', 'hotdog', ''),
(7, 'deni', 'deni', 'Deni', 'Karyawan(pasien)', 'P0001', 'pizza hut', '123456789'),
(8, 'ratna', 'ratna', 'Ratna', 'Karyawan(pasien)', 'P0001', 'pizza hut', '987654321'),
(9, 'adinda', 'adinda', 'Adinda', 'Karyawan(pasien)', 'P0002', 'hotdog', '918273645');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahaya_lingkungan_kerja`
--
ALTER TABLE `bahaya_lingkungan_kerja`
  ADD PRIMARY KEY (`id_blk`);

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `jenis_pemeriksaan`
--
ALTER TABLE `jenis_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `kebiasaan`
--
ALTER TABLE `kebiasaan`
  ADD PRIMARY KEY (`id_kebiasaan`);

--
-- Indexes for table `kecelakaan_kerja`
--
ALTER TABLE `kecelakaan_kerja`
  ADD PRIMARY KEY (`id_kecelakaan_kerja`);

--
-- Indexes for table `riwayat_penyakit_keluarga`
--
ALTER TABLE `riwayat_penyakit_keluarga`
  ADD PRIMARY KEY (`id_pk`);

--
-- Indexes for table `riwayat_penyakit_pasien`
--
ALTER TABLE `riwayat_penyakit_pasien`
  ADD PRIMARY KEY (`id_pp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahaya_lingkungan_kerja`
--
ALTER TABLE `bahaya_lingkungan_kerja`
  MODIFY `id_blk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_pemeriksaan`
--
ALTER TABLE `jenis_pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kebiasaan`
--
ALTER TABLE `kebiasaan`
  MODIFY `id_kebiasaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kecelakaan_kerja`
--
ALTER TABLE `kecelakaan_kerja`
  MODIFY `id_kecelakaan_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riwayat_penyakit_keluarga`
--
ALTER TABLE `riwayat_penyakit_keluarga`
  MODIFY `id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riwayat_penyakit_pasien`
--
ALTER TABLE `riwayat_penyakit_pasien`
  MODIFY `id_pp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
