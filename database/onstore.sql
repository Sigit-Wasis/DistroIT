-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jun 2017 pada 18.17
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `foto`) VALUES
('ADM001', 'Farhan', 'admin', 'admin', '30052017082739');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_brg` varchar(15) NOT NULL,
  `nama_brg` varchar(25) NOT NULL,
  `harga_brg` int(10) NOT NULL,
  `stok_brg` int(50) NOT NULL,
  `satuan_brg` varchar(25) NOT NULL,
  `gambar_brg` varchar(250) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `harga_brg`, `stok_brg`, `satuan_brg`, `gambar_brg`, `kategori`, `keterangan`, `status`) VALUES
('BRG003', 'Jacket Naruto', 270000, 70, 'pcs', '30052017091548Jaket-Uchiha-Harajuku.jpg', 'jacket', 'Jacket naruto kualitas ori dan terjamin kualitas dan kuantitasnya', '1'),
('BRG004', 'Kemeja Vans Modern', 180000, 300, 'pcs', '30052017091936kemeja 6.jpg', 'kemeja', 'Kemeja vans berbahan katun kualitas OK!', '1'),
('BRG005', 'Forza Milan', 75, 20, 'pcs', '30052017033828download.jpg', 'kaos', 'Sablon Plastisol, kaos combate, size s sampai triple xl', '1'),
('BRG006', 'Funny or Die', 90, 150, 'pcs', '30052017034030Kaos-Distro-001.jpg', 'kaos', 'Bahan dan Sablon Anti Luntur', '1'),
('BRG008', 'Jaket Shingeki no Kyoujin', 200, 15, 'pcs', '30052017045102toko-jual-jaket-anime-murah.jpg', 'jacket', 'Baru', '1'),
('BRG009', 'We Are Proud', 85, 150, 'pcs', '30052017045434JUVENTUS 04.jpg', 'kaos', 'Sablon plastisol, bahan combate, ukuran m sampai double xl', '1'),
('BRG010', 'Bayern Munchen', 90, 20, 'pack', '300520170500023651032_baba38d4-bd62-11e3-a471-fcb84908a8c2.jpg', 'kaos', 'Anti Bakar', '1'),
('BRG011', 'Manchester United', 75, 50, 'pcs', '30052017050114download (1).jpg', 'kaos', 'Bahan dan Sablon kualitas Rusia', '1'),
('BRG012', 'Kemeja Couple', 250, 50, 'pcs', '30052017050910kemeja-dress singlet karet biru.jpg', 'kemeja', 'Agar Hubungan makin erat maka belilah kemeja ini.', '1'),
('BRG013', 'Kemeja Couple', 350, 30, 'pcs', '30052017051026kemeja-couple-dress-kode-17482_l-37777-68339.jpg', 'kemeja', 'Kualitas bahannya asli dari Prancis', '1'),
('BRG014', 'Kemeja Pria', 150, 25, 'pcs', '30052017051205Kemeja-Pria-Lengan-Pendek-Polos.jpg', 'kemeja', 'Bahan dari Brazil, Dan para pria akan terlihat lebih maskulin', '1'),
('BRG015', 'Kemeja Wanita', 200, 25, 'pcs', '30052017051351images.jpg', 'kemeja', 'Barang buatan indonesia, Dan wanita akan terlihat seperti tuan putri', '1'),
('BRG016', 'One piece', 300, 20, 'pcs', '3005201705170546af01d2d8e03bc15707915db8257a83.jpg', 'jacket', 'Jaket import dari Jepang', '1'),
('BRG017', 'Koro sensei', 300, 25, 'pcs', '30052017051811jaket-koro-sensei.jpg', 'jacket', 'Jaket import dari Jepang', '1'),
('BRG018', 'Deathnote', 300, 25, 'pcs', '30052017051848jaket deathnote L vs Kira (2).jpg', 'jacket', 'Jaket import dari Jepang', '1'),
('BRG019', 'Yondaime', 300, 25, 'pcs', '30052017052005Jaket yondaime white 160rb.jpg', 'jacket', 'Jaket import dari Jepang', '1'),
('BRG020', 'Akatsuki', 300, 25, 'pcs', '30052017052041Musim-dingin-Kentalkan-Hoodie-Jaket-Anime-Akatsuki-Naruto-Mantel-Kasual-pria-Pakaian-Kehangatan-Kardigan-Sweatershirt.jpg_640x640.jpg', 'jacket', 'Jaket import dari Jepang', '1'),
('BRG021', 'Rikudo Senin', 300, 25, 'pcs', '30052017052219Jaket-Anime.jpg', 'jacket', 'Jaket import dari Jepang', '1'),
('BRG022', 'Akatsuki', 300, 25, 'pcs', '30052017052309JK-AK-1-KI.png', 'jacket', 'Jaket import dari Jepang', '1'),
('BRG023', 'Uchiha', 300, 25, 'pcs', '30052017052355Jaket_Anime_Harajuku_Uchiha___Naruto_Shippuden.jpg', 'jacket', 'Jaket import dari Jepang', '1'),
('BRG024', 'Barcelona', 90, 25, 'pcs', '300520170524464124498_c971f7ff-6684-406c-91ff-5a35d263eaf2.jpg', 'kaos', 'Bahan dan Kualitas sudah terjamin ori thailand', '1'),
('BRG025', 'Juventus', 90, 25, 'pcs', '30052017052542kaos distro bola juventus 12.jpg', 'kaos', 'Baju Terbaru dari para pendukung juventus', '1'),
('BRG026', 'Skaters', 75, 25, 'pcs', '30052017052703300520170734329.jpg', 'kaos', 'Baju Distro terbaru langsung dari pabrik', '1'),
('BRG027', 'Dhilla', 100, 30, 'pcs', '30052017053007share_scaled.jpg', 'kaos', 'Baju yang nyaman untuk dipakai wanita dan bisa memakai warna kerudung apapun', '1'),
('BRG028', 'U & Sharks', 200, 25, 'pcs', '300520170535452016-Sonbahar-Yeni-Ä°talyan-TarzÄ±-Uzun-Kollu-Mavi-Ekose-Flanel-g&ouml.jpg', 'kemeja', 'Kemeja kualitas indonesia, dan terbaru trendy untuk anak muda', '1'),
('BRG029', 'Orkids', 150, 25, 'pcs', '30052017053707download (2).jpg', 'kemeja', 'Kemeja Anak yang sangat lucu dilihat', '1'),
('BRG030', 'Long dress', 200, 25, 'pcs', '30052017053805Lady-s-long-loose-shirt-long-sleeve-flannel-Plaid-Shirt-dress-women-s-plus-size-winter.jpg', 'kemeja', 'Trendy dan keren dipakai untuk wanita', '1'),
('BRG031', 'Levis Cewek', 250, 41, 'pcs', '30052017054301kemeja-jeans-cewek-2.jpg', 'kemeja', 'Terbaru dari Levis', '1'),
('BRG032', 'Levis Cowok', 250, 25, 'pcs', '30052017054356images (1).jpg', 'kemeja', 'Terbaru dari Levis', '1'),
('BRG033', 'Kaos ManCity', 90000, 20, 'pcs', '30052017202729Screenshot (3).png', 'kaos', 'Kaos murah ori amerika', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
