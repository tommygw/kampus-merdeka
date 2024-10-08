-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2024 at 10:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampusmerdekabaru`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `foto`) VALUES
(1, 'admin1', 'admin@admin.com', '2919906.png');

-- --------------------------------------------------------

--
-- Table structure for table `batch_kampusmerdeka`
--

CREATE TABLE `batch_kampusmerdeka` (
  `id_batch` int(11) NOT NULL,
  `nama_batch` varchar(20) NOT NULL,
  `angkatan` varchar(4) NOT NULL,
  `end_date` date NOT NULL,
  `status` enum('berjalan','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch_kampusmerdeka`
--

INSERT INTO `batch_kampusmerdeka` (`id_batch`, `nama_batch`, `angkatan`, `end_date`, `status`) VALUES
(1, 'batch 6', '2023', '2024-05-31', 'selesai'),
(2, 'batch 7', '2024', '2024-12-31', 'berjalan');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nidn`, `nama`, `email`, `foto`, `gender`) VALUES
(3, 2110293712, 'Dosen1', 'tesdosen@gmail.com', 'blank2.png', 'L'),
(4, 1123215675, 'Gunawan', 'gunawan@mail.com', 'blank1.png', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `kampusmengajar`
--

CREATE TABLE `kampusmengajar` (
  `id_km` int(11) NOT NULL,
  `id_mitra` int(11) DEFAULT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `syarat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kampusmengajar`
--

INSERT INTO `kampusmengajar` (`id_km`, `id_mitra`, `nama_sekolah`, `start_date`, `end_date`, `lokasi`, `description`, `syarat`) VALUES
(1, 12, 'SDN Cikopo 1 Jatinangor', '2024-02-10', '2024-08-10', 'Jatinangor', 'Kampus Mengajar merupakan program kolaboratif antara mahasiswa dan guru yang bertujuan untuk meningkatkan kualitas pembelajaran di sekolah dasar. Program ini melibatkan mahasiswa dalam membantu guru dalam proses mengajar, mengembangkan kurikulum dan media pembelajaran, serta membimbing murid dalam proses belajar.', 'Mahasiswa aktif S1/S2/S3 dari Perguruan Tinggi Negeri (PTN) atau Perguruan Tinggi Swasta (PTS) yang terakreditasi. Memiliki Indeks Prestasi Kumulatif (IPK) minimal 3.00. Sehat jasmani dan rohani, serta bebas dari penyakit menular. Bersedia mengikuti seluruh kegiatan program selama 1 semester. Memiliki minat dan kepedulian terhadap dunia pendidikan. Aktif dan kreatif dalam mengikuti berbagai kegiatan kemahasiswaan. Memiliki kemampuan komunikasi dan interpersonal yang baik.'),
(2, 12, 'SMK YADIKA 2 Cijagra Paseh', '2024-06-19', '2024-08-30', 'Paseh', 'Kampus Mengajar merupakan program kolaboratif antara mahasiswa dan guru yang bertujuan untuk meningkatkan kualitas pembelajaran di sekolah dasar. Program ini melibatkan mahasiswa dalam membantu guru dalam proses mengajar, mengembangkan kurikulum dan media pembelajaran, serta membimbing murid dalam proses belajar.', 'Mahasiswa aktif S1/S2/S3 dari Perguruan Tinggi Negeri (PTN) atau Perguruan Tinggi Swasta (PTS) yang terakreditasi. Memiliki Indeks Prestasi Kumulatif (IPK) minimal 3.00. Sehat jasmani dan rohani, serta bebas dari penyakit menular. Bersedia mengikuti seluruh kegiatan program selama 1 semester. Memiliki minat dan kepedulian terhadap dunia pendidikan. Aktif dan kreatif dalam mengikuti berbagai kegiatan kemahasiswaan. Memiliki kemampuan komunikasi dan interpersonal yang baik.'),
(3, 12, 'SD IT Nurul Barokah', '2024-03-08', '2024-08-10', 'Majalengka', 'Kampus Mengajar merupakan program kolaboratif antara mahasiswa dan guru yang bertujuan untuk meningkatkan kualitas pembelajaran di sekolah dasar. Program ini melibatkan mahasiswa dalam membantu guru dalam proses mengajar, mengembangkan kurikulum dan media pembelajaran, serta membimbing murid dalam proses belajar.', 'Mahasiswa aktif S1/S2/S3 dari Perguruan Tinggi Negeri (PTN) atau Perguruan Tinggi Swasta (PTS) yang terakreditasi. Memiliki Indeks Prestasi Kumulatif (IPK) minimal 3.00. Sehat jasmani dan rohani, serta bebas dari penyakit menular. Bersedia mengikuti seluruh kegiatan program selama 1 semester. Memiliki minat dan kepedulian terhadap dunia pendidikan. Aktif dan kreatif dalam mengikuti berbagai kegiatan kemahasiswaan. Memiliki kemampuan komunikasi dan interpersonal yang baik.');

-- --------------------------------------------------------

--
-- Table structure for table `kkntematik`
--

CREATE TABLE `kkntematik` (
  `id_kkn` int(11) NOT NULL,
  `id_mitra` int(11) DEFAULT NULL,
  `nama_kegiatan` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `syarat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kkntematik`
--

INSERT INTO `kkntematik` (`id_kkn`, `id_mitra`, `nama_kegiatan`, `start_date`, `end_date`, `lokasi`, `description`, `syarat`) VALUES
(1, 10, 'KKN-Tematik-Sumedang', '2024-01-08', '2024-06-08', 'Sumedang', 'KKN Tematik Gotong Royong Membangun Desa merupakan program Kuliah Kerja Nyata (KKN) yang dilaksanakan di Kabupaten Sumedang, Jawa Barat. Program ini merupakan salah satu bentuk implementasi dari Merdeka Belajar Kampus Merdeka (MBKM) yang diluncurkan oleh Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek). Tujuan KKN Tematik Sumedang: Meningkatkan partisipasi aktif mahasiswa dalam pembangunan desa, Mengembangkan potensi desa dan memberdayakan masyarakat desa, Membangun semangat gotong royong dan kolaborasi antar masyarakat, Menerapkan ilmu pengetahuan dan teknologi dalam pembangunan desa.', 'Mahasiswa aktif S1 dari perguruan tinggi terakreditasi minimal B, Memiliki IPK minimal 3.00, Sehat jasmani dan rohani, Berkelakuan baik, Mendapatkan persetujuan dari perguruan tinggi asal, Bersedia mengikuti semua peraturan dan ketentuan yang berlaku di lokasi KKN');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `npm` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `semester` tinyint(2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `transkrip` varchar(50) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `additional` varchar(50) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `laporan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `npm`, `nama`, `email`, `gender`, `prodi`, `semester`, `foto`, `cv`, `transkrip`, `ktp`, `additional`, `batch`, `laporan`) VALUES
(1, 2113217475, 'Andika Yuha Pranata', 'andika@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(2, 2113217476, 'Dadi Rohman', 'dadi@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(3, 2113217477, 'Irfa Yasin Pramono', 'irfa@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(4, 2113217478, 'Baiq Ega Aulia', 'baiq@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', 'laporan_1721672785.pdf'),
(5, 2113217479, 'Mohammad Haidar Arifbillah', 'mohammad@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(6, 2113217480, 'Doni Gunawan', 'doni@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(7, 2113217481, 'Fauzan Andriana Rachman', 'fauzan@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(8, 2113217482, 'Nabil Habib Mochamad', 'nabil@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(9, 2113217483, 'Andhika Fathur Rahman', 'andhika@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(10, 2113217484, 'Sendhy Maula Ammarulloh', 'sendhy@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(11, 2113217485, 'Iman Wiguna', 'iman@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(12, 2113217486, 'Juliana Oktaviani Enok', 'juliana@mail.com', 'P', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(13, 2113217487, 'Tedi Setiawan', 'tedi@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(14, 2113217488, 'Setiawati', 'setiawati@mail.com', 'P', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(15, 2113217489, 'Euis Nuraeni', 'euis@mail.com', 'P', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(16, 2113217490, 'Intan Suci Pratami', 'intan@mail.com', 'P', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(17, 2113217491, 'Helsan Allya Putri', 'helsan@mail.com', 'P', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(18, 2113217492, 'Juhud Alfianur Samosir', 'juhud@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(19, 2113217493, 'Husni Tamrin', 'husni@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(20, 2113217494, 'Mesius Adefianus Siregar', 'mesius@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(21, 2113217495, 'Reihan Aprila Firmansyah', 'reihan@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(22, 2113217496, 'Eryanto', 'eryanto@mail.com', 'L', 'Teknik Informatika', 6, 'zoro.jpg', 'cv_1720544640.pdf', 'transkrip_1720544640.pdf', 'ktp_1720544640.pdf', '', 'batch 6', ''),
(38, 2147483647, 'tommy', 'br8e0k734e@vafyxh.com', '', '', 0, '', '', '', '', '', 'batch 7', '');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id_mitra` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `nama_display` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `program` enum('stupen','pmm','magang','kkn','kampus_mengajar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `nama_perusahaan`, `nama_display`, `email`, `alamat`, `kota`, `foto`, `program`) VALUES
(2, 'PT Revolusi Cita Edukasi', 'RevoU', 'revou@mitra.com', 'Jl. DR. Ide Anak Agung Gde Agung, RT.5/RW.2, Kuningan', 'Jakarta', 'si-revou.png', 'stupen'),
(3, 'PT Hacktivate Teknologi Indonesia', 'Hacktiv8', 'hacktiv8@mitra.com', 'Jl. Sultan Iskandar Muda No. 7,  RT. 005 RW. 009, Kebayoran Lama', 'Jakarta', 'si-hacktive.png', 'stupen'),
(4, 'Yayasan Dicoding Indonesia', 'Bangkit Academy', 'bangkit@mitra.com', ' Jalan Batik Kumeli No 50, Kecamatan : Cibeunying Kaler', 'Bandung', 'si-bangkit.png', 'stupen'),
(5, 'Yayasan Adipurna Inovasi Asia', 'Vocasia', 'vocasia@mitra.com', 'Gedung Pusat Perfilman H. Umar Ismail   (PPHUI) Lantai 2 Suite 210 Jl. HR Rasuna Said Kav C - 22 Kar', 'Jakarta', 'si-vocasia.png', 'stupen'),
(6, 'PT Mitra Talenta Grup', 'Celerates', 'celerates@mitra.com', 'The Manhattan Square Mid Tower 12th Floor. Jl. TB Simatupang Kav 1-S', 'Jakarta', 'si-celerates.png', 'stupen'),
(7, 'PT Bisa Artifisial Indonesia', 'Bisa AI Academy', 'bisa_ai@mitra.com', 'Jalan Banda no. 30 Kel. Citarum', 'Bandung', 'si-bisaai.png', 'stupen'),
(8, 'Direktorat Jenderal Aplikasi Informatika Kementerian Komunikasi dan Informatika', 'Gerakan Nasional 1000 Startup Digital', 'dirjenkominfo@mitra.com', 'Jl. H. Fachrudin No.26 9, RT.9/RW.5, Kp. Bali,\r\nKec. Tanah Abang', 'Jakarta', 'si-100startup.png', 'stupen'),
(9, 'PT Coursenet Bangun Indonesia', 'Course-Net Indonesia', 'coursenet@mitra.com', 'Ruko Bolsena Blok A/7 Gading Serpong', 'Tangerang', 'si-coursenet.png', 'stupen'),
(10, 'LLDIKTI 4 Kemdikbud', 'KKN-Tematik', 'lldikti@mitra.com', 'Jalan Penghulu H. Hasan Mustofa No. 38', 'Bandung', 'kkn-tematik.png', 'kkn'),
(11, 'Universitas Sriwijaya', 'Universitas Sriwijaya', 'unsri@mitra.com', ' Jalan Palembang-Prabumulih,\r\n   KM 32 Inderalaya,Kabupaten Ogan Ilir', 'Palembang', 'pmm-unsri.png', 'pmm'),
(12, 'KEMDIKBUDRISTEK', 'KEMDIKBUDRISTEK', 'kampusmengajar@mitra.com', 'Jl. DR. Ide Anak Agung Gde Agung, RT.5/RW.2, Kuningan', 'Jakarta', 'kampus-mengajar.png', 'kampus_mengajar'),
(13, '', NULL, 'mitra1@gmail.com', '', 'Bandung', 'USB_YPKP_Logo.png', 'stupen'),
(14, 'Mitra Perusahaan', 'Mitra1', 'tes@mail.com', 'Cileunyi, Bandung', 'Bandung', 'celerates.jpg', 'stupen');

-- --------------------------------------------------------

--
-- Table structure for table `modulstupen`
--

CREATE TABLE `modulstupen` (
  `id_modul` int(11) NOT NULL,
  `id_stupen` int(11) NOT NULL,
  `judul_modul` text DEFAULT NULL,
  `isi_modul` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modulstupen`
--

INSERT INTO `modulstupen` (`id_modul`, `id_stupen`, `judul_modul`, `isi_modul`) VALUES
(1, 1, 'Machine Learning - Memberikan pemahaman dasar mengenai bagaimana mengintegrasikan Machine Learning (ML) serta Artificial Intelligence (Al) dalam suatu perangkat lunak atau aplikasi.', 'Modul ini akan diajarkan melalui kombinasi dari metode-metode berikut: belajar mandiri, permainan interaktif AWS Cloud Quest, praktik Lab, kelas online secara live, workshops, peer to peer discussion, dan tugas individual dengan supervisi mentor. Pada akhir minggu pembelajaran, akan dilakukan evaluasi pembelajaran dan pembahasan kesalahan yang umum dilakukan peserta selama proses pengerjaan tugas. Lebih jelasnya, metodologi pembelajaran yang akan digunakan di minggu ini dijelaskan di bawah ini:\r\n- Pembelajaran mandiri dilakukan dengan memberikan penugasan penyelesaian modul digital dengan topik terkait secara otomatis melalui platform AWS Skill Builder. Peserta akan dimonitor penyelesaiannya secara real-time melalui dashboard monitoring yang tersedia dalam AWS Skill Builder.\r\n- Permainan interaktif Cloudquest akan diberikan kepada peserta melalui platform AWS Skill Builder dengan misi yang telah disediakan dan harus diselesaikan oleh peserta guna memvalidasi pemahaman dan keahlian yang telah diperoleh selama masa pembelajaran. Setelah misi selesai, peserta akan mendapatkan digital badges.\r\n- Praktik Lab dilakukan melalui platform AWS Skill Builder dengan memberikan penugasan secara otomatis yang mana peserta akan diberikan detil panduan dan navigasi dalam mengkonfigurasi layanan AWS terkait dan membangun suatu solusi yang diharapkan.\r\n- Kelas online secara live dimana profesional  akan mengajarkan topik terkait dengan bantuan dari mentor (serupa dengan asisten dosen). karena kelas akan diajarkan langsung oleh praktisi aktif, peserta diharapkan dapat belajar aspek teknis dan non teknis serta mendapatkan masukan dari hasil tugas yang dikerjakan.\r\n- Workshops dimana peserta akan belajar bersama teman kelompok mereka dalam kelompok kecil (15-20 peserta) dan dibantu oleh mentor mereka. Workshop akan berfokus pada simulasi secara langsung/hands on dari modul yang diajarkan.\r\n- Peer to peer discussion dimana peserta akan mengerjakan studi kasus, dan akan dipandu oleh mentor mereka, agar dapat mengaplikasikan ilmu yang telah dipelajari\r\n- Evaluasi pembelajaran dimana instruktur dan mentor akan membahas kesalahan-kesalahan yang umum dilakukan oleh peserta dan yang umum terjadi di industri. \r\n\r\nMateri yang akan dipelajari selama 4 minggu pembelajaran terdiri dari:\r\n1. Machine Learning 1\r\n2. Machine Learning 2\r\n3. Machine Learning 3\r\n4. Machine Learning 4'),
(2, 1, 'Cloud Essentials - Memberikan pemahaman mendasar kepada peserta mengenai konsep Cloud di AWS, manfaat dan dukungan cloud, konfigurasi sederhana hingga konsep keamanan di Cloud', 'Peserta akan memulai pembelajaran dengan pengetahuan dasar mengenai AWS Cloud Computing serta layanan yang tersedia dalam AWS. Modul ini akan berlangsung selama 4 minggu. Di akhir modul ini peserta diharapkan memiliki pemahaman fundamental cloud AWS yang memadai serta konsep Cloud Computing dengan metode gabungan belajar mandiri, bermain game interaktif, dan lab.\r\n\r\nModul ini akan diajarkan melalui kombinasi dari metode-metode berikut: belajar mandiri, permainan interaktif AWS Cloud Quest, praktik Lab, kelas online secara live, workshops, peer to peer discussion, dan tugas individual dengan supervisi dari mentor. Pada akhir minggu pembelajaran, akan dilakukan evaluasi pembelajaran dan pembahasan kesalahan yang umum dilakukan peserta selama proses pengerjaan tugas. Lebih jelasnya, metodologi pembelajaran yang akan digunakan di minggu ini dijelaskan di bawah ini:\r\n- Pembelajaran mandiri dilakukan dengan memberikan penugasan penyelesaian modul digital dengan topik terkait secara otomatis melalui platform AWS Skill Builder. Peserta akan dimonitor penyelesaiannya secara real-time melalui dashboard monitoring yang tersedia dalam AWS Skill Builder.\r\n- Permainan interaktif Cloud Quest akan diberikan kepada peserta melalui platform AWS Skill Builder dengan misi yang telah disediakan dan harus diselesaikan oleh peserta guna memvalidasi pemahaman dan keahlian yang telah diperoleh selama masa pembelajaran. Setelah misi selesai, peserta akan mendapatkan digital badges.\r\n- Praktik Lab dilakukan melalui platform AWS Skill Builder dengan memberikan penugasan secara otomatis yang mana peserta akan diberikan detil panduan dan navigasi dalam mengkonfigurasi layanan AWS terkait dan membangun suatu solusi yang diharapkan.\r\n- Kelas online secara live di mana profesional akan mengajarkan topik terkait dengan bantuan dari mentor (serupa dengan asisten dosen). Karena kelas akan diajarkan langsung oleh praktisi aktif, peserta diharapkan dapat belajar aspek teknis dan non teknis serta mendapatkan masukan dari hasil tugas yang dikerjakan.\r\n- Workshops di mana peserta akan belajar bersama teman kelompok mereka dalam kelompok kecil (15-20 peserta) dan dibantu oleh mentor mereka. Workshop akan berfokus pada simulasi secara langsung/hands on dari modul yang diajarkan.\r\n- Peer to peer discussion di mana peserta akan mengerjakan studi kasus, dan akan dipandu oleh mentor mereka, agar dapat mengaplikasikan ilmu yang telah dipelajari\r\n- Evaluasi pembelajaran di mana instruktur dan mentor akan membahas kesalahan-kesalahan yang umum dilakukan oleh peserta dan yang umum terjadi di industri.\r\n\r\nMateri yang akan dipelajari selama 4 minggu pembelajaran terdiri dari:\r\n1. Cloud Essentials 1\r\n2. Cloud Essentials 2\r\n3. Cloud Essentials 3\r\n4. Cloud Essentials 4\r\n\r\nMetode Asesmen\r\n\r\nPeserta akan diberikan tugas individu yang akan mengevaluasi pemahaman peserta mengenai dasar teorinya. Selain itu, peserta juga akan memperoleh masukan dan feedback dari mentor untuk setiap tugas yang dikerjakan, dengan proses yang menyerupai feedback cycle di perusahaan.'),
(3, 2, 'Introduction Python', 'Peserta akan mampu memahami dasar-dasar Python melalui materi ini. Mereka akan belajar tentang pengantar dan gambaran umum tentang bahasa pemrograman Python, serta fundamental pemrograman dan pengolahan data menggunakan Python. Selain itu, peserta akan mendapatkan pemahaman tentang bagaimana bekerja dengan array Numpy dan menggunakan API sederhana dalam Python. Output pembelajaran ini mencakup kemampuan untuk mengimplementasikan konsep-konsep dasar Python dalam pemrosesan data dan pengembangan aplikasi sederhana.'),
(4, 2, 'Soft Skills', 'Peserta akan mampu memahami pentingnya mengembangkan keterampilan seperti Design Thinking, keterampilan profesional, interpersonal, dan kritis dalam konteks industri kecerdasan buatan. Mereka akan dapat mengidentifikasi bagaimana agilitas dalam bekerja dan kesiapan untuk menghadapi perubahan menjadi kunci sukses dalam karier AI. Output pembelajaran mencakup kemampuan peserta untuk merespons tantangan dan peluang dalam lingkungan kerja yang dinamis, serta menjadi profesional yang kompeten dan adaptif dalam berkontribusi dalam proyek-proyek AI yang kompleks dan berkembang pesat.'),
(5, 3, 'Capstone Project', 'Siswa akan dikelompokkan dalam kelompok grup untuk mengerjakan proyek tematik pada dunia nyata yang dapat membantu masyarakat.'),
(6, 3, 'Pengenalan ke Logika Pemrograman', '1. Mengerti apa itu logika pemrograman.\r\n2. Mengetahui apa itu gerbang logika beserta jenis-jenisnya.\r\n3. Memahami cara pemecahan masalah dengan computational thinking.'),
(7, 4, 'AI Foundation', 'Peserta akan mempelajari tentang konsep, definisi, dan sejarah perkembangan Artificial Intelligence (AI) dan Machine Learning (ML).\r\n\r\nPeserta akan mempelajari tentang roadmap AI Engineer dan istilah-istilah yang digunakan dalam dunia kerja. Peserta juga memahami peran, job scope, dan skillset yang dibutuhkan sebagai AI Engineer. \r\n\r\nPeserta akan mempelajari tentang perbedaan antara AI dan ML serta berbagai jenis ML seperti supervised, unsupervised, dan reinforcement learning.'),
(8, 4, 'Final Project', 'Peserta akan diberikan proyek akhir berupa group project untuk mengembangkan prototipe aplikasi AI sederhana berbasis web atau seluler, yang memberikan manfaat dalam konteks kesehatan tanpa memerlukan keahlian medis yang mendalam. '),
(9, 5, 'Logika Teknologi AI', 'Pada pembelajaran individu, peserta akan mengikuti pembelajaran tentang perkembangan teknologi, sejarah Artificial Intelligence (AI) dan  prinsip-prinsip dasar AI serta pengenalan metode-metode yang ada pada Domain AI. '),
(10, 5, 'Metode Penelitian AI', 'Pada pembelajaran individu, peserta akan mengikuti pembelajaran tentang konsep-konsep analisis dan statistik dalam Domain AI, yaitu Data Science, Computer Vision dan Natural Language Proccessing.'),
(11, 6, 'Logging and Monitoring', 'Pembelajaran dilakukan dalam bentuk materi rekaman video dan penyampaian materi atau diskusi secara daring.\r\n\r\nTugas yang akan diberikan dapat berupa project mini challenge, diskusi kelompok, tugas personal dan capstone untuk mengimplementasikan pemahaman terkait materi.'),
(12, 6, 'Final Project', 'Kemampuan untuk menganalisis masalah dan menemukan solusi secara efektif. Kemampuan untuk berkomunikasi dengan anggota tim dan stakeholder dengan baik. Keterampilan bekerja sama dalam tim pengembangan dan operasional. Kemampuan manajemen proyek dan pemahaman tentang prinsip manajemen waktu. Memahami konsep, prinsip dasar, manfaat, dan tujuan devops Mampu mengimplementasikan integrasi lintas-fungsional antara tim pengembangan dan operasional.\r\n\r\nKulminasi dari semua pembelajaran yang telah didapat dalam sebuah proyek besar secara kelompok.\r\n\r\nProses dilakukan melaluidiskusi kelompok, tugas personal sesuai role dalam kelompok dan implementasikan pemahaman terkait materi.'),
(13, 7, 'Substance Painter', 'Mahasiswa mampu: 1. Memahami UI, navigasi, dan tools yang ada di Substance Painter. 2. Membuat texture untuk objek modeling dari Blender. 3. Menerapkan texture ke dalam design di Blender.\r\n\r\nDetil Pembelajaran\r\n\r\n1. 70% pembelajaran asynchronous melalui platform LMS, Materi, PPT/PDF, dan Video serta Live Design.\r\n2. 30% pembelajaran synchronous melalui kajian hasil tugas peserta & Focus Group Discussion.'),
(14, 7, 'Basic 3D', 'Peserta mampu : 1. menjelaskan dasar-dasar UI dan navigasi pada software 3D yang digunakan. 2. membuat layout pada shot 3D. 3. menjelaskan tools dasar dalam modeling 3D; menjelaskan tools dasar dalam menganimasikan objek 3D, serta menggunakannya.\r\n\r\nDetil Pembelajaran\r\n\r\n1. 70% pembelajaran asynchronous melalui platform LMS, Materi, PPT/PDF, dan Video serta Live Design.\r\n2. 30% pembelajaran synchronous melalui kajian hasil tugas peserta & Focus Group Discussion.'),
(15, 8, 'Pembekalan Softskill Agile', '- Peserta mampu menerapkan metode komunikasi yang lebih baik, termasuk komunikasi internal maupun komunikasi dengan pihak internal untuk memperlancar pekerjaan  - Peserta mampu membuat presentasi yang baik atas pekerjaan yang dilakukan kepada pemilik pekerjaan dan memastikan informasi terdeliver dengan baik dan sistematis  - Peserta mampu menerapkan metode Agile untuk menyelesaiakan setiap tahapan sprint pembelajaran dan implementasi proyek lintas disiplin  - Peserta mampu mengikuti metode pendampingan proyek yang dilakukan sehingga capaian penguasaan skill bisa lebih optimal'),
(16, 8, 'BIM Engineer by Discipline', '\"ARCHITECT - Peserta mampu melakukan pemodelan BIM pada disiplin arsitektur dan melakukan kolaborasi proyek lintas disiplin yang dikerjakan  - Peserta mampu menggunakan semua tool dan parameter dalam BIM Architecture dan menerapkan pada proyek BIM  - Peserta mampu membuat pemodelan architecture menggunakan BIM dengan LOD yang baik  CIVIL ENGINEER  - Peserta mampu membuat pemodelan struktur bangunan yang dibutuhkan dalam proyek menggunakan BIM sesuai dengan hasil analisa perancangan struktur yang dilakukan sebelumnya  - Peserta mampu membuat pemodelan detail penulangan pada struktur beton bertulang  - Peserta mampu menerapkan konsep Analytical Model dalam BIM untuk dilanjutkan pada tahapan analisa  - Peserta mampu membuat pemodelan struktur Precast Concrete pada proyek yang dikerjakan  - Peserta mampu membuat pemodelan Struktur Baja dan membuat detail sambungan baja  MEP ENGINEER  - Peserta mampu melakukan perencanaan sistem dan elemen MEP pada proyek BIM yang dilakukan sesuai dengan ketentuan yang ada  - Peserta mampu merencanakan dan memodelkan HVAC dan Plumbing menggunakan BIM sesuai dengan standar yang ada  - Peserta mampu merancang dan memodelkan Electrical Wiring dan Lighting untuk diterapkan pada proyek BIM yang dikerjakan\"'),
(17, 9, 'Basic IT Live Coding', 'Peserta akan mempelajari pelajaran dasar dari pengetahuan Teknologi Informatika yaitu :\r\n- Algoritma : Input I/O Variables, Arithmetics, Selection, Iterations, Array & Pointer, Built-In Function, Function, Recursive & Struct, Searching, File Operation, Sorting\r\n- Object Oriented Programming : Introduction to Java, Wrapper Class and Method, Array, ArrayList, Vector, OOP Concept, Inheritance, Polymorphism, Abstract Class and Interface, Generic, Multi-Threading Programming\r\n- Database : Data Definition Language – Create, Alter, Drop, Data Manipulation Language - Insert, Update, Delete, Select, Grouping, Aggregate, Order by, String and Date function, Join, union, Subquery, alias subquery, in, exists, Normalization\r\n- Basic computer network : Computer Network Introduction (Introduction to Packet Tracer, Network Device, Crimping cable, network topology, OSI 7 layer), Demo PKT + Installation, Basic & advanced subnetting (IP Addressing, Classful Subnetting (FLSM), Creating LAN FLSM, Classless Subnetting (VLSM), Creating LAN VLSM), Routing (Routing concept, static routing basic, static routing advance), Access List (Standard Access List, Extended Access List), VLAN (Creating VLAN, VLAN Trunk Technique, Intro to Telnet or SSH), Wireless LAN (Creating WLAN, Configuring Wireless Router, Wireless Security), Dynamic routing (OSPF, EIGRP, RIP)\r\n\r\nPeserta akan belajar melalui metode Syncronous learning dengan mengikuti webinar bersama coach dalam 21 kali sesi pertemuan, dan per sesinya adalah 2 jam, setiap pukul 19:00 sd 21:00 WIB'),
(18, 9, 'Fundamental Logic', 'Peserta akan mempelajari pelajaran dasar dari pengetahuan Teknologi Informatika yaitu :\r\n- Algoritma : Input I/O Variables, Arithmetics, Selection, Iterations, Array & Pointer, Built-In Function, Function, Recursive & Struct, Searching, File Operation, Sorting\r\n- Object Oriented Programming : Introduction to Java, Wrapper Class and Method, Array, ArrayList, Vector, OOP Concept, Inheritance, Polymorphism, Abstract Class and Interface, Generic, Multi-Threading Programming\r\n- Database : Data Definition Language – Create, Alter, Drop, Data Manipulation Language - Insert, Update, Delete, Select, Grouping, Aggregate, Order by, String and Date function, Join, union, Subquery, alias subquery, in, exists, Normalization\r\n- Basic computer network : Computer Network Introduction (Introduction to Packet Tracer, Network Device, Crimping cable, network topology, OSI 7 layer), Demo PKT + Installation, Basic & advanced subnetting (IP Addressing, Classful Subnetting (FLSM), Creating LAN FLSM, Classless Subnetting (VLSM), Creating LAN VLSM), Routing (Routing concept, static routing basic, static routing advance), Access List (Standard Access List, Extended Access List), VLAN (Creating VLAN, VLAN Trunk Technique, Intro to Telnet or SSH), Wireless LAN (Creating WLAN, Configuring Wireless Router, Wireless Security), Dynamic routing (OSPF, EIGRP, RIP)');

-- --------------------------------------------------------

--
-- Table structure for table `pmm`
--

CREATE TABLE `pmm` (
  `id_pmm` int(11) NOT NULL,
  `id_mitra` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `syarat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pmm`
--

INSERT INTO `pmm` (`id_pmm`, `id_mitra`, `start_date`, `end_date`, `description`, `syarat`) VALUES
(1, 11, '2023-11-10', '2024-03-10', 'Universitas Sriwijaya (Unsri) melalui program Merdeka Belajar Kampus Merdeka (MBKM) menawarkan Program Pertukaran Mahasiswa Merdeka (PMM) bagi mahasiswa S1 aktif dari seluruh Indonesia. Melalui PMM, kamu bisa merasakan kuliah dan beraktivitas selama satu semester di Unsri. Tujuan PMM Unsri adalah untuk memperluas wawasan dan pengetahuanmu, mengasah kemampuan lintas budaya, memperkuat rasa persatuan nasional, dan mempersiapkan kamu menjadi pemimpin masa depan.', 'Mahasiswa aktif S1 dari perguruan tinggi terakreditasi minimal B, Memiliki IPK minimal 3.00, Sehat jasmani dan rohani, Berkelakuan baik, Mendapatkan persetujuan dari perguruan tinggi asal, Bersedia mengikuti semua peraturan dan ketentuan yang berlaku di Unsri');

-- --------------------------------------------------------

--
-- Table structure for table `stupen`
--

CREATE TABLE `stupen` (
  `id_stupen` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `judul_stupen` varchar(100) DEFAULT NULL,
  `metode` enum('online','offline','hybrid') DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `syarat` text DEFAULT NULL,
  `sertifikat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stupen`
--

INSERT INTO `stupen` (`id_stupen`, `id_mitra`, `judul_stupen`, `metode`, `start_date`, `end_date`, `description`, `syarat`, `sertifikat`) VALUES
(1, 2, 'AWS Cendekiawan - Cloud And Gen AI Machine Learning By RevoU', 'online', '2024-08-06', '2024-12-25', 'AWS Cendekiawan - Cloud And Gen AI Machine Learning By RevoU merupakan sebuah program yang bertujuan memberikan pemahaman yang komprehensif dalam ilmu Cloud, Gen AI, dan Machine Learning dengan menggunakan tools AWS. Program ini merupakan hasil kolaborasi antara RevoU dan Amazon Web Services (AWS), yang menghasilkan fondasi yang kuat bagi peserta dalam 5 kompetensi / modul utama:\r\n\r\n1. Cloud Essentials\r\n2. Introduction to Python\r\n3. Machine Learning\r\n4. Generative AI\r\n5. Career Development\r\n\r\nDengan memadukan pendekatan pembelajaran yang efektif seperti flipped learning, project-based learning, dan cooperative learning, program ini memberikan kesempatan bagi peserta untuk berkolaborasi dalam mengaplikasikan pengetahuan mereka dalam situasi nyata, sambil mempelajari tentang pembelajaran yang telah mereka dapatkan.\r\n\r\nPeserta akan terlibat dalam berbagai jenis aktivitas pembelajaran, termasuk guided independent study, mentoring session, dan lecturers dengan mentor expert. Program ini juga mengintegrasikan berbagai metode pembelajaran seperti gamification, labs, studi kasus, dan simulasi untuk memberikan pengalaman belajar yang nyata di setiap bidang yang diajarkan langsung pada platform AWS Skillbuilder.\r\n\r\nSeluruh modul program ini akan diselesaikan dalam 17 minggu, dengan struktur yang terdiri dari 1 minggu orientasi, 4 minggu Cloud Essentials, 2 minggu Introduction to Python, 4 minggu Machine Learning, 4 minggu Generative AI, 2 minggu proyek akhir, dan 1 minggu pengembangan karir. Setiap minggu akan terdapat self-study session, lab, mentoring session, dan sprint review assignment.\r\n\r\n', 'Mahasiswa semester 5 keatas dari semua jurusan/program studi\r\nLulus seleksi dari RevoU\r\nMemiliki ketertarikan pada bidang data, gen AI, cloud, dan machine learning\r\nMemiliki perangkat belajar yang memadai', 'RevoU dan AWS akan memberikan beberapa jenis sertifikat yaitu:\r\n- Certificate of completion from RevoU - diberikan bagi murid yang menyelesaikan seluruh program dan lulus dari semua modul yang ada\r\n- 27 Certificate of completion from AWS - sertifikat akan diberikan secara otomatis dari AWS jika menyelesaikan masing-masing modul yang ada, beserta mengikuti webinar yang diberikan.\r\n- 2 digital learning badges - diberikan secara otomatis dari AWS jika murid menyelesaikan 1 rangkaian learning plan Cloud Essentials dan melakukan assessment dengan nilai minimal 80%; serta menyelesaikan 1 modul gamifikasi Cloud Practitioner. Badges dapat disambungkan dengan akun LinkedIn masing-masing terverifikasi melalui platform Credly.'),
(2, 3, 'Generative AI & Machine Learning - IBM SkillsBuild Certification', 'online', '2024-07-10', '2024-09-12', 'Program \"Generative AI & Machine Learning\" dimulai dengan fokus pada pengembangan keterampilan soft skill yang esensial dalam konteks industri kecerdasan buatan. Peserta akan diajarkan tentang pentingnya mengembangkan keterampilan seperti Design Thinking, keterampilan profesional, interpersonal, dan kritis. Mereka akan dilatih untuk menjadi profesional yang kompeten dan adaptif dalam lingkungan kerja yang dinamis. Selanjutnya, peserta akan memperoleh pengetahuan dasar tentang Python dan fundamental pemrograman, termasuk pengolahan data menggunakan bahasa pemrograman Python dan penggunaan array Numpy serta API sederhana. Materi kemudian akan memperkenalkan fundamental Machine Learning, Enterprise Data Science, dan berbagai algoritma Machine Learning seperti Regresi Linear, Regresi Logistik, dan Pohon Keputusan. Peserta akan mengambil langkah selanjutnya dalam memahami Generative AI Learning, mencakup pembangunan asisten suara dengan GPT-3 dan IBM Watson, serta penerapan teknik rekayasa prompt untuk memahami konsep AI generatif. Capstone Project akan menjadi kesempatan bagi peserta untuk mengintegrasikan semua aspek pembelajaran dalam sebuah solusi AI yang komprehensif dan inovatif. Dengan demikian, mereka akan siap untuk menghadapi tantangan dalam mengembangkan solusi AI yang relevan dan efektif dalam berbagai konteks industri.\r\n\r\n Melalui program ini, peserta tidak hanya akan belajar dari materi yang disajikan, tetapi juga mendapatkan akses ke pembelajaran interaktif dan dukungan komunitas pembelajar dari IBM yang menjadikan mereka siap untuk berkarier di bidang ini.\r\nMereka akan mampu memahami:\r\n- Soft Skill & Professional Skills\r\n- Introduction to Python\r\n- Fundamental Machine Learning\r\n- Generative AI Learning\r\n- Generative Models using Watsonx.ai\r\n- AI Governance \r\n\r\nSelain itu, dalam Capstone Project, peserta akan menggunakan layanan IBM Cloud untuk mengimplementasikan solusi yang mereka kembangkan. Penggunaan IBM Cloud akan memungkinkan peserta untuk memanfaatkan infrastruktur cloud yang kuat dan fleksibel untuk menyimpan, menganalisis, dan mengelola data mereka. Dengan menggunakan teknologi cloud, peserta akan mendapatkan pengalaman praktis dalam mengimplementasikan solusi generative AI yang di sesuai dengan praktik industri. Ini juga memungkinkan mereka untuk memperluas pemahaman mereka tentang teknologi cloud, yang merupakan aspek penting dari karier dalam ilmu data modern.\r\n\r\nLearning Tools: Skillbuild.org platform, Online absensi (baik untuk Peserta dan Instruktur), reading, video material (jika ada), presentasi, assignment dan proyek akhir                                                         \r\nDevice Requirement: Untuk persyaratan device minimal adalah Processor Core i3 gen 6 / Ryzen gen 1 (recommended: Core i5 gen 6 / Ryzen gen 2), RAM minimum 4GB (recommended: 8GB) dan setidaknya ada 100GB storage available. Disarankan menggunakan Unix atau Linux sebagai Operating System, atau Windows 10 dengan WSL2 Ubuntu 18.04 Kernel.                                                        \r\nFollow up dan Feedback: Follow up email for ppt material and project dan Whatsapp as a channel for technical issue and feedback material                                                                                                             \r\nJenis Penilaian: Penilaian atas kehadiran, assignment/tugas and project akhir                                                         \r\nInstrumen Penilaian: Minimum kehadiran 75% per program, Grading akan berdasarkan Rubric per program, penilaian atas assignment/tugas dan projek akhir                                                         \r\nBenefit: Certification of completion dan Transcript nilai di akhir pembelajaran setelah peserta menyelesaikan dan mengumpulkan final project dengan min. attendance 75% and grading berdasarkan Rubric. Pembelajaran dilakukan setelah jam kerja, 19.00 - 22.00', 'Untuk mengambil program ini, peserta diharapkan telah memahami kemampuan dasar komputer (web browsing, app installation, file navigating). Tidak diperlukan pengalaman pemrograman atau pengembangan aplikasi web apa pun sebelumnya.\r\n\r\nJurusan: STEM Background\r\nJenjang: S1\r\nSemester: Minimal semester 5', 'Sertifikat penyelesaian dilengkapi dengan transkrip nilai selama program dan final project dengan minimum kehadiran 75% dan grading berdasarkan rubrik'),
(3, 4, 'Bangkit Academy 2023 by Google, GoTo, Traveloka - Android Learning Path', 'online', '2024-07-10', '2024-12-04', 'Aktivitas Studi Independen Pengembang Aplikasi Android meliputi pembelajaran individu dan project akhir dalam bentuk tim. Pada pembelajaran individu, setiap peserta akan mengikuti kelas dalam bentuk asynchronous (online melalui modul belajar di Dicoding Academy) dimana peserta dapat berkonsultasi dengan expert terkait materi yang dipelajarinya melalui forum diskusi.\r\n\r\nSelain itu, setiap peserta akan memiliki pembimbing sebagai tempat konsultasi jika ditemui\r\nkesulitan non-akademik dalam mengikuti pembelajaran. Pada program studi independen ini, terdapat satu buah learning path yang disediakan yaitu Android Learning Path. Peserta akan memperoleh sertifikat kompetensi di setiap kelas di dalam Learning Path Android jika peserta berhasil lulus dari setiap ujian/penilaian yang diadakan untuk setiap kompetensi. Setelah mengikuti program ini, peserta juga dipersiapkan untuk mengikuti ujian sertifikasi global Associate Android Developer dari Google yang dapat diambil setelah mengikuti kegiatan Studi Independen ini.\r\n\r\nPada project akhir, peserta akan dibagi menjadi kelompok, dimana satu kelompok terdiri atas 5-6 orang dengan tema yang ditentukan oleh masing-masing kelompok dan harus mendapatkan persetujuan dari mentor.\r\n\r\nPrasyarat Administratif\r\n- Warga Negara Indonesia (WNI).\r\n- Memenuhi ketentuan umum program Studi Independen Kampus Merdeka pada saat pelaksanaan program.\r\n- Mahasiswa aktif, berasal dari jenjang: \r\n        a. D4/S1 semester 6/8/10/12/14 pada saat program dilaksanakan (Februari-Juli 2023), atau\r\n        b. D3 semester 3 atau keatas pada saat program dilaksanakan (Februari-Juli 2023).\r\n- Tidak mengambil program Kampus Merdeka lainnya pada saat pelaksanaan program.\r\n- Tidak mengambil internship/magang/pekerjaan apapun (part-time ataupun full-time) pada saat pelaksanaan program.\r\n- Tidak memiliki komitmen paruh/penuh waktu terkait organisasi, volunteership, leadership, atau aktivitas program lainnya pada saat pelaksanaan program\r\n- Tidak sedang menerima beasiswa dari universitas atau instansi lain.\r\n(untuk KIP/Bidikmisi/Afirmasi tetap boleh mengikuti program ini selama diijinkan)\r\n- Telah mendapatkan persetujuan dosen pembimbing untuk mengkonversi SKS melalui program ini.\r\n- Mengambil 6 SKS atau kurang pada universitas asal (kuliah reguler) pada saat pelaksanaan program.\r\n- Belum akan lulus dari universitas pada tanggal 31 Juli 2023.\r\n\r\nPrasyarat Pengetahuan/Pengalaman:\r\n- Memiliki pengalaman dengan object-oriented programming (OOP) pada bahasa pemrograman apapun, dibuktikan melalui mata kuliah yang diambil atau sertifikat.\r\n\r\nPrasyarat Teknis:\r\n- Perangkat komputer atau laptop dengan spesifikasi minimal:\r\n    a. Prosesor setara Core i3 dan RAM / Memory 8GB dengan dukungan 64Bit (disarankan prosesor setara Core i5 dan RAM / Memory 16GB atau lebih).\r\n    b. OS Linux, Windows 8/10, atau Mac OS X dengan dukungan 64 bit.\r\n    c. Dapat menjalankan Android Studio 2020.3.1 Arctic Fox dan IntelliJ Idea IDE.\r\n- Ponsel Android dengan OS Android 8 Oreo atau lebih baru, atau laptop/komputer harus dapat menjalankan emulator Android.\r\n- Koneksi internet kabel/wifi yang memadai atau selular minimal 4G.\r\n\r\n\r\n* Program ini tidak memberikan uang saku', 'Prasyarat Administratif\r\n- Warga Negara Indonesia (WNI).\r\n- Memenuhi ketentuan umum program Studi Independen Kampus Merdeka pada saat pelaksanaan program.\r\n- Mahasiswa aktif, berasal dari jenjang: \r\n        a. D4/S1 semester 6/8/10/12/14 pada saat program dilaksanakan (Februari-Juli 2023), atau\r\n        b. D3 semester 3 atau keatas pada saat program dilaksanakan (Februari-Juli 2023).\r\n- Tidak mengambil program Kampus Merdeka lainnya pada saat pelaksanaan program.\r\n- Tidak mengambil internship/magang/pekerjaan apapun (part-time ataupun full-time) pada saat pelaksanaan program.\r\n- Tidak memiliki komitmen paruh/penuh waktu terkait organisasi, volunteership, leadership, atau aktivitas program lainnya pada saat pelaksanaan program\r\n- Tidak sedang menerima beasiswa dari universitas atau instansi lain.\r\n(untuk KIP/Bidikmisi/Afirmasi tetap boleh mengikuti program ini selama diijinkan)\r\n- Telah mendapatkan persetujuan dosen pembimbing untuk mengkonversi SKS melalui program ini.\r\n- Mengambil 6 SKS atau kurang pada universitas asal (kuliah reguler) pada saat pelaksanaan program.\r\n- Belum akan lulus dari universitas pada tanggal 31 Juli 2023.\r\n\r\nPrasyarat Pengetahuan/Pengalaman:\r\n- Memiliki pengalaman dengan object-oriented programming (OOP) pada bahasa pemrograman apapun, dibuktikan melalui mata kuliah yang diambil atau sertifikat.\r\n\r\nPrasyarat Teknis:\r\n- Perangkat komputer atau laptop dengan spesifikasi minimal:\r\n    a. Prosesor setara Core i3 dan RAM / Memory 8GB dengan dukungan 64Bit (disarankan prosesor setara Core i5 dan RAM / Memory 16GB atau lebih).\r\n    b. OS Linux, Windows 8/10, atau Mac OS X dengan dukungan 64 bit.\r\n    c. Dapat menjalankan Android Studio 2020.3.1 Arctic Fox dan IntelliJ Idea IDE.\r\n- Ponsel Android dengan OS Android 8 Oreo atau lebih baru, atau laptop/komputer harus dapat menjalankan emulator Android.\r\n- Koneksi internet kabel/wifi yang memadai atau selular minimal 4G.', 'Peserta akan memperoleh sertifikat kompetensi di setiap kelas di dalam Learning Path Android jika peserta berhasil lulus dari setiap ujian/penilaian yang diadakan untuk setiap kompetensi. Setelah mengikuti program ini, peserta juga dipersiapkan untuk mengikuti ujian sertifikasi global Associate Android Developer dari Google yang dapat diambil setelah mengikuti kegiatan Studi Independen ini.'),
(4, 5, 'AI & Machine Learning', 'online', '2024-07-10', '2024-12-25', 'Bootcamp AI & Machine Learning adalah pelatihan intensif yang memperdalam pemahaman dan keterampilan dalam menerapkan kecerdasan buatan dan machine learning. Peserta akan terlibat dalam modul interaktif, diskusi, dan proyek praktis serta akan Dibimbing oleh para mentor ahli, peserta akan siap menghadapi tantangan dan peluang di industri yang memanfaatkan teknologi AI.', '- Peserta yang dapat mengikuti bootcamp ini adalah peserta yang ingin mengenal, belajar hingga berkarir di bidang Artificial Intelligence & Machine Learning dengan latar belakang semua bidang pendidikan.\r\n- Device yang dibutuhkan untuk bootcamp ini adalah laptop atau PC, minimal RAM 8gb.\r\n- Memenuhi persyaratan MSIB https://pusatinformasi.mitrakm.kemdikbud.go.id/hc/en-us/articles/5859132641177', 'Kami menyediakan 2 jenis sertifikat:\r\n1. Sertifikat Peserta dengan ketentuan 90% partisipasi (kehadiran & keaktifan)\r\n2. Sertifikat AI & Machine Learning disertai predikat (Good, Excellent, Outstanding) dan Nilai pada setiap modul pembelajaran'),
(5, 6, 'Artificial Intelligence For Jobs', 'online', '2024-07-31', '2024-12-31', 'AI 4 Jobs adalah program pelatihan Artificial Intelligence (AI) secara daring untuk pelajar yang bertujuan bukan hanya untuk memperkenalkan teknologi AI ke pelajar, tetapi juga untuk memungkinkan mereka bisa merancang dan mengimplementasikan AI, sehingga bisa membuat sesuatu yang menciptakan dampak sosial. Berfokus pada teknologi utama AI seperti dasar-dasar Data Science, Natural Language Processing, dan Computer Vision. Selain itu, program ini menyediakan topik mengenai teknologi AI paling mutakhir yaitu ChatGPT. Selain itu OFA juga menyediakan program keterampilan hidup yang meliputi 2 stream diantaranya Job Readiness Skill dan Financial Literacy Skills.\r\n\r\nKeunggulan program ini, selain pembelajaran tentang keterampilan teknis dan keterampilan hidup, program AI 4 Jobs  bekerja sama dengan orbitjobs.id dimana pada portal tersebut terdapat 300+ mitra industri 4.0 \r\nyang telah bergabung. Seluruh peserta akan mendapatkan kesempatan untuk mendapatkan “Orbit Jobs Ready Badge”.', ' • memiliki pola pikir yang inovatif dan kemauan untuk belajar,\r\n • memiliki minat dan ketertarikan terhadap teknologi mutakhir seperti Artificial Intelligence,\r\n • memiliki akses ke perangkat digital seperti desktop atau laptop di kampus atau rumah dengan minimum spesifikasi chip Intel i3/ Ryzen 3, RAM 4GB dan free space (kosong) di internal / external hard drive sebesar 500GB\r\n • memiliki konektivitas internet di rumah untuk video streaming bebas hambatan dengan video kamera, mic dan headset', 'Setelah Program Selesai , para mahasiswa akan mendapatkan :\r\n• Sertifikat Kursus AI 4 Jobs apabila pelajar mengikuti minimal 90% dari materi yang diberikan. \r\n• Transkrip nilai yang bisadipakai untuk mendapatkan SKPI maksimal 20 SKS'),
(6, 7, 'AWS Certification | Full Stack Cloud Engineering', 'online', '2024-07-31', '2024-11-28', 'SIB SEAL - Full Stack Cloud Engineer dan Sertifikasi AWS. Dengan Project-Based Learning yang bisa menjadi Tugas Akhir, Publikasi Ilmiah, dan Portfolio.\r\n\r\nTujuan Pelatihan :\r\n1. Memberikan pelatihan cloud engineering yang semua orang dapat menyelesaikan\r\n2. Memenuhi kebutuhan talenta industri di bidang teknologi informasi\r\n3. Mempersiapkan generasi emas Indonesia 2045\r\n\r\nMetodologi Pelatihan :\r\n1. Live Guru\r\n2. Kurikulum Berbasis Industri\r\n3. Real World Study Case\r\n4. Problem-Based Learning\r\n5. Project-Based Learning\r\n6. Portfolio-Based Learning\r\n\r\nManfaat Pelatihan :\r\n1. Free 100% biaya sertifikasi*\r\n2. Akses ke partner industri SEAL\r\n3. Tergabung dalam ekosistem komunitas SEAL\r\n\r\nOutput Pelatihan :\r\n1. Sertifikat Kompetensi Full Stack Cloud Engineer\r\n2. Sertifikat AWS Academic Cloud Foundation (ACF)*\r\n3. Sertifikat AWS Academic Cloud Associate (ACA)*\r\n\r\n*apabila memenuhi persyaratan kompetensi di bidang tersebut', '1. Jenjang: S1/D4/D3\r\n2. Jurusan: Semua jurusan\r\n3. Semester: Minimal masuk ke semester 5\r\n4. Berkomitmen untuk menyelesaikan pembelajaran hingga akhir', 'Terdapat sertifikat keikutsertaan dan kesempatan mendapat sertifikasi AWS Academy Cloud Associate setelah melewati ujian sertifikasi. Peserta akan memperoleh sertifikat keikutsertaan jika minimal prosentase kehadiran baik pada kegiatan pembelajaran individu dan project akhir adalah 90%. Peserta juga akan mendapatkan digital competion badge AWS ACA dan atau ACF jika menyelesaikan semua tugas pada LMS AWS. Peserta yang memenuhi syarat dapat mengikuti ujian resmi untuk mendapatkan sertifikat AWS Academy Cloud Associate.'),
(7, 5, '3D Designing Specialist In Industry 4.0 For Creative Industries', 'online', '2024-07-04', '2024-11-26', 'Dalam program Studi Independen ini, PT STECHOQ ROBOTIKA INDONESIA memberikan jaminan mutu bagi para peserta dalam 5 (lima) aspek, yakni: \r\n1.	Education: pembelajaran berbasis industri digital dengan kurikulum prototype\r\n2.	Professional Service: pelayanan profesional dari tenaga ahli, PIC dan mentor\r\n3.	Innovation: spirit berinovasi dalam mengembangkan riset teknologi digital\r\n4.	Collaboration: spirit berkolaborasi untuk menciptakan sebuah karya berbasis teknologi digital\r\n5.	Competitiveness: pembentukan SDM berdaya saing internasional dengan peningkatan pengetahuan dan kapabilitas untuk dunia kerja industri digital\r\n\r\nDalam course ini, Mahasiswa akan mempelajari konsep-konsep tentang pembelajaran 3D design. Beberapa materi yang akan anda pelajari antara lain mulai dari tahapan pre produksi, basic 3D, intermediate 3D, advanced, manajemen file dan scene, produksi tahap akhir dan post production.\r\nSetelah menyelesaikan kursus 3D Designer, Mahasiswa akan mendapatkan manfaat, antara lain: \r\n1.	Menguasai Keterampilan Desain 3D: Memiliki kemampuan untuk membuat atau memodifikasi model 3D. \r\n2.	Menguasai Perangkat Lunak 3D: Kompeten dalam menggunakan perangkat lunak seperti Blender, Maya dalam desain 3D. \r\n3.	Kemampuan Texturisasi: Mampu menambahkan tekstur, warna, dan material pada objek 3D. \r\n4.	Keahlian dalam Animasi 3D: Dapat membuat animasi 3D, termasuk karakter animasi atau objek bergerak. \r\n5.	5.Teknik Rendering: Memahami teknik rendering dan pencahayaan untuk menciptakan tampilan realistis dalam model 3D. \r\n6.	Pembuatan Portofolio: Mampu membuat portofolio berisi proyek-proyek desain 3D yang dapat digunakan dalam mencari pekerjaan atau berkarir sebagai freelance.\r\nProgram 3D Designing Specialist in Industry 4.0 for Creative Industries ini akan dilaksanakan dengan sistem 100% daring selama 5 (lima) bulan, melalui platform https://academy.stechoq.com/, dengan jumlah peserta sebanyak 75 mahasiswa. Selama program berlangsung, peserta akan diberikan pembelajaran teori yang sekaligus diintegrasikan dengan pengerjaan proyek berupa pembuatan video animasi. \r\n\r\nPelatihan akan dilakukan melalui pembelajaran individu secara mandiri dengan modul yang sudah rancang oleh para mentor dalam sebuah Learning Management System. Pada setiap minggunya mentor memberikan mentoring sebanyak dua kali pertemuan, mentor akan mengevaluasi hasil pembelajaran mahasiswa untuk memastikan bahwa materi-materi dan tugas-tugas yang telah diberikan dapat dipahami dan dikerjakan dengan baik oleh mahasiswa. Sistem penilaian utamanya akan ditekankan pada hasil pengerjaan quiz, tugas-tugas, laporan, dan penyelesaian proyek. Dengan teknis pembelajaran seperti ini, mahasiswa dituntut untuk melakukan eksplorasi tentang berbagai macam materi yang diberikan dan kedepannya diharapkan mampu mengembangkan pengetahuan dan skill 3D desain untuk mendukung sektor-sektor industri kreatif dalam Making Indonesia 4.0.', '1.	Mahasiswa perguruan tinggi aktif yang terdaftar pada PDDikti; \r\n2.	Akan menempuh minimal semester 5 untuk jenjang pendidikan S1 dan D4, atau semester 3 untuk jenjang pendidikan D3;\r\n3.	Berasal dari program studi Teknik Industri atau jurusan lain dengan alasan maupun latar belakang yang dapat diterima;\r\n4.	Sehat jasmani dan rohani;\r\n5.	Mampu berkomunikasi dengan baik;  \r\n6.	Mempunyai ketertarikan di dunia digital;\r\n7.	Memiliki jiwa leadership dan kemapuan manajemen waktu;\r\n8.	Memiliki inisiatif dan semangat belajar dan mengembangkan diri yang tinggi;\r\n9.	Memiliki kemampuan berbahasa Inggris adalah nilai lebih;\r\n10.	Memiliki dasar pengetahuan software autodesk Maya, Blender, After effect, keyshot, mudbox, substance, photoshop dan Solidworks akan menjadi modal yang baik.', 'Kami menyediakan 2 (dua) jenis sertifikat, yakni Certificate of Completion dan Certificate of Achievement. Certificate of Completion akan diberikan kepada peserta yang telah menyelesaikan seluruh rangkaian kursus dalam program Studi Independen yang kami kelola, dengan minimum 90% kepesertaan. Sedangkan Certificate of Achievement akan diberikan kepada peserta yang telah berhasil menyelesaikan proyek akhirnya dengan predikat minimal B.'),
(8, 8, 'BIM Engineer From Beginner To Advanced', 'online', '2024-07-02', '2024-11-18', 'Program BIM Engineer From Beginner to Advanced meliputi pembelajaran individu dan kelompok untuk mengerjakan project lintas disiplin. Pada pembelajaran individu, setiap peserta akan mengikuti pembelajaran dalam bentuk asynchronous dengan LMS (Learning Management System) dan bentuk synchronous dengan mengikuti pembelajaran online via zoom meeting dimana peserta dapat berkonsultasi dengan mentor terkait materi yang dipelajarinya. Pada setiap tahap pembelajaran, setiap peserta akan mengikuti evaluasi dan melakukan implementasi proyek lintas disiplin sebagai syarat untuk memperoleh sertifikat. Pada implementasi proyek lintas disiplin, peserta akan dibagi menjadi kelompok kecil yang mana satu kelompok terdiri dari peserta lintas disiplin, dan setiap kelompok akan mendapat case study proyek nyata yang spesifik.\r\n\r\nPada program ini, peserta akan mendapatkan lebih dari 5 sertifikat bergengsi, diantaranya adalah sertifikat Internasional dari Autodesk dan Sertifikasi BNSP bagi peserta yang memenuhi kriteria.', 'Kriteria umum : \r\n\r\n1. Jurusan	: Teknik Arsitektur/ Teknik Sipil/ Teknik Mesin/ Teknik Elektro \r\n2. Jenjang	: D3 / D4 / S1 \r\n3. Semester	: Minimal telah menyelesaikan semester 4 (untuk S1) \r\n4. IPK		: min 3.00 \r\n5. Memiliki portofolio karya arsitektur atau perancangan struktur gedung atau perancangan sistem MEP yang dibuat dalam ekosistem BIM akan menjadi nilai lebih \r\n6. Bersedia menyediakan device dengan spesifikasi yang cukup dan koneksi internet yang stabil untuk mendukung proses pembelajaran \r\n\r\nKriteria hardskills : \r\n1. Memiliki kemampuan dalam bidang perencanaan desain Arsitektur, perancangan struktur dan perencanaan sistem MEP \r\n2. Memiliki pengalaman dalam penggunaan software perancangan 2D, 3D, rendering visual, perhitungan struktur dan software sejenis lain \r\n\r\nKriteria softskills : \r\n1. Memiliki minat dalam bidang Arsitektur, struktur dan MEP khususnya untuk pengembangan desain gedung bertingkat untuk hunian \r\n2. Memiliki kemampuan Problem Solving, Kreatif, inovatif, dan inisiatif \r\n3. Kreatif, inovatif, dan inisiatif \r\n4. Berorientasi pada proses dan capaian hasil akhir \r\n5. Mampu bekerja dalam tekanan dan deadline \r\n6. Mampu bekerja secara individu maupun dalam tim ', 'Peserta berhak memperoleh sertifikat keikutsertaan program studi independen jika minimal prosentase kehadiran pada kegiatan pembelajaran individu dan kelompok adalah 90% serta menyelesaiakan proyek sesuai format laporan yang disediakan. Peserta dapat mengikuti ujian sertifikasi internasional untuk mendapatkan Autodesk Sertified Profesional dengan proses sertifikasi dan pendanaan mandiri dari Peserta.  Mitra menyediakan pembiayaan sertifikasi internasional untuk peserta2 yang berprestasi.\r\nSelain itu, akan ada beberapa sertifikat lain yang bisa didadpatkan peserta dalam program ini'),
(9, 9, 'IT Network & Cyber Security Specialist', 'online', '2024-07-10', '2025-01-10', 'CCNA Enterprise Collaboration (200-301) merupakan sertifikasi internasional Cisco tingkat pertama yang mengajarkan konsep jaringan computer secara detail serta penerapannya dalam dunia enterprise yang complex. Sertifikasi CCNA menjadi standard minimal bagi setiap perusahaan mencari seorang Network Engineer. Melalui Coach kelas dunia yang ada di Course-Net, Anda akan di bimbing secara step by step mulai dari dasar pemahaman jaringan computer, pengenalan perangkat, cara IP subnetting yang cepat, melakukan Optimasi Network dengan Teknik Routing, Switching dan Wireless Configuration yang tepat, serta membangun network dengan skala besar hingga ribuan user. Course-Net menggabungkan materi Standard Internasional dari Cisco dengan kasus-kasus yang terjadi secara real di lapangan. Selain itu anda juga akan belajar strategi praktis membangun sebuah Network Infrastructure yang Secure, Reliable dan Scalable dengan kapasitas hingga ribuan user. \r\n\r\nCEH (Certified Ethical Hacker) merupakan training peretasan yang paling komprehensif di dunia Internasional. Kursus hacker ini diselenggarakan untuk membantu para profesional keamanan informasi memahami dasar-dasar etika peretasan.\r\n\r\nCHFI (Computer Hacking Forensic Investigator) ialah pelatihan yang mempelajari proses mendeteksi serangan peretasan dan mengekstraksi bukti dengan benar untuk melaporkan kejahatan dan melakukan audit untuk mencegah serangan di masa depan', 'Peserta bisa dari Jurusan :\r\n\r\nTeknik Informatika\r\nSistem Information\r\nMatematika & Statistika\r\nMechanical Engineering\r\nTeknik Elektro\r\nBusiness Management & Marketing\r\nKomputerisasi Akuntansi\r\nTeknik Komputer\r\nData Science\r\nCyber Security\r\n\r\nNoted : Disarankan untuk menggunakan laptop dengan spek minimum i3/i5 dengan RAM 8GB ', 'Sertifikat yang didapatkan terdiri dari Sertifikat Skill & Attendance by course-Net yang sudah terdaftar di dinas pendidikan'),
(13, 3, 'test', 'online', '2024-07-27', '2024-07-31', 'sadsdasd', 'asdasd', 'adsasd');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_mitra`
--

CREATE TABLE `transaksi_mitra` (
  `id_trx` int(11) NOT NULL,
  `id_mhs` int(11) DEFAULT NULL,
  `id_mitra` int(11) DEFAULT NULL,
  `program` enum('stupen','pmm','magang','kkn','kampus_mengajar') NOT NULL,
  `id_program` int(11) NOT NULL,
  `status` enum('diterima','pending') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_mitra`
--

INSERT INTO `transaksi_mitra` (`id_trx`, `id_mhs`, `id_mitra`, `program`, `id_program`, `status`) VALUES
(1, 4, 2, 'stupen', 1, 'diterima'),
(2, 5, 2, 'stupen', 1, 'diterima'),
(3, 6, 2, 'stupen', 1, 'diterima'),
(4, 7, 2, 'stupen', 1, 'diterima'),
(5, 10, 2, 'stupen', 1, 'diterima'),
(6, 12, 2, 'stupen', 1, 'diterima'),
(7, 16, 2, 'stupen', 1, 'diterima'),
(8, 9, 3, 'stupen', 2, 'diterima'),
(9, 2, 4, 'stupen', 3, 'diterima'),
(10, 3, 5, 'stupen', 4, 'diterima'),
(11, 8, 6, 'stupen', 5, 'diterima'),
(12, 19, 10, 'kkn', 1, 'diterima'),
(13, 20, 10, 'kkn', 1, 'diterima'),
(14, 21, 10, 'kkn', 1, 'diterima'),
(15, 22, 10, 'kkn', 1, 'diterima'),
(16, 1, 11, 'pmm', 1, 'diterima'),
(17, 13, 12, 'kampus_mengajar', 1, 'diterima'),
(18, 14, 12, 'kampus_mengajar', 2, 'diterima'),
(19, 16, 12, 'kampus_mengajar', 3, 'diterima'),
(20, 11, 7, 'stupen', 6, 'diterima'),
(21, 17, 8, 'stupen', 8, 'diterima'),
(22, 18, 9, 'stupen', 9, 'diterima'),
(29, 24, 2, 'stupen', 1, 'pending'),
(30, 25, 2, 'stupen', 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('Mahasiswa','Dosen','Mitra','Admin') NOT NULL,
  `verifikasi` varchar(50) NOT NULL,
  `is_verif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `level`, `verifikasi`, `is_verif`) VALUES
(1, 'revou@mitra.com', '92706ba4fd3022cede6d1610b17a0d2d', 'Mitra', '', 1),
(2, 'hacktiv8@mitra.com', '92706ba4fd3022cede6d1610b17a0d2d', 'Mitra', '', 1),
(3, 'bangkit@mitra.com', '92706ba4fd3022cede6d1610b17a0d2d', 'Mitra', '', 1),
(4, 'vocasia@mitra.com', '92706ba4fd3022cede6d1610b17a0d2d', 'Mitra', '', 1),
(5, 'celerates@mitra.com', '92706ba4fd3022cede6d1610b17a0d2d', 'Mitra', '', 1),
(6, 'bisa_ai@mitra.com', '92706ba4fd3022cede6d1610b17a0d2d', 'Mitra', '', 1),
(7, 'dirjenkominfo@mitra.com', '92706ba4fd3022cede6d1610b17a0d2d', 'Mitra', '', 1),
(8, 'coursenet@mitra.com', '92706ba4fd3022cede6d1610b17a0d2d', 'Mitra', '', 1),
(9, 'lldikti@mitra.com', '92706ba4fd3022cede6d1610b17a0d2d', 'Mitra', '', 1),
(10, 'unsri@mitra.com', '92706ba4fd3022cede6d1610b17a0d2d', 'Mitra', '', 1),
(11, 'kampusmengajar@mitra.com', '92706ba4fd3022cede6d1610b17a0d2d', 'Mitra', '', 1),
(12, 'tommy@mail.com', '65f185ec6bd47af8f082f8196d0b4d24', 'Mahasiswa', '', 1),
(13, 'andika@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(14, 'dadi@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(15, 'irfa@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(16, 'baiq@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(17, 'mohammad@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(18, 'doni@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(19, 'fauzan@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(20, 'nabil@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(21, 'andhika@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(22, 'sendhy@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(23, 'iman@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(24, 'juliana@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(25, 'tedi@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(26, 'setiawati@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(27, 'euis@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(28, 'intan@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(29, 'helsan@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(30, 'juhud@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(31, 'husni@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(32, 'mesius@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(33, 'reihan@mail.com', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', '', 1),
(53, 'tesdosen@gmail.com', '202cb962ac59075b964b07152d234b70', 'Dosen', '', 1),
(54, 'mitra1@gmail.com', '202cb962ac59075b964b07152d234b70', 'Mitra', '', 1),
(55, 'tes@mail.com', '65f185ec6bd47af8f082f8196d0b4d24', 'Mitra', '', 1),
(56, 'fauzan123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Mahasiswa', '', 1),
(57, 'Gilangganteng123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Mahasiswa', '', 1),
(58, 'gunawan@mail.com', 'ce28eed1511f631af6b2a7bb0a85d636', 'Dosen', '', 1),
(59, 'albert123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Mahasiswa', '', 1),
(60, 'tommy123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Mahasiswa', '', 1),
(62, 'fadhilalif2112@gmail.com', '202cb962ac59075b964b07152d234b70', 'Mahasiswa', 'f8e3f13691849b880d3c93e57e341b73', 1),
(64, 'dhilajh123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Mahasiswa', 'fc4c4d09d2c337735eb59bf54feb8cc1', 1),
(66, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '', 1),
(72, '7g495rk3gm@zlorkun.com', '65f185ec6bd47af8f082f8196d0b4d24', 'Mahasiswa', 'ee7666168d534d1d74d892ae75db5c72', 1),
(73, 'br8e0k734e@vafyxh.com', '65f185ec6bd47af8f082f8196d0b4d24', 'Mahasiswa', '5fa9d0c7ac4d7893ce8a6e352dfeb0af', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_user_email` (`email`);

--
-- Indexes for table `batch_kampusmerdeka`
--
ALTER TABLE `batch_kampusmerdeka`
  ADD PRIMARY KEY (`id_batch`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD UNIQUE KEY `NIDN` (`nidn`),
  ADD KEY `dosen_ibfk_1` (`email`);

--
-- Indexes for table `kampusmengajar`
--
ALTER TABLE `kampusmengajar`
  ADD PRIMARY KEY (`id_km`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indexes for table `kkntematik`
--
ALTER TABLE `kkntematik`
  ADD PRIMARY KEY (`id_kkn`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD UNIQUE KEY `npm` (`npm`),
  ADD KEY `fk_mahasiswa_user_email` (`email`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id_mitra`),
  ADD KEY `fk_mitra_user_email` (`email`);

--
-- Indexes for table `modulstupen`
--
ALTER TABLE `modulstupen`
  ADD PRIMARY KEY (`id_modul`),
  ADD KEY `modulstupen_ibfk_1` (`id_stupen`);

--
-- Indexes for table `pmm`
--
ALTER TABLE `pmm`
  ADD PRIMARY KEY (`id_pmm`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indexes for table `stupen`
--
ALTER TABLE `stupen`
  ADD PRIMARY KEY (`id_stupen`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indexes for table `transaksi_mitra`
--
ALTER TABLE `transaksi_mitra`
  ADD PRIMARY KEY (`id_trx`),
  ADD KEY `id_mhs` (`id_mhs`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batch_kampusmerdeka`
--
ALTER TABLE `batch_kampusmerdeka`
  MODIFY `id_batch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kampusmengajar`
--
ALTER TABLE `kampusmengajar`
  MODIFY `id_km` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kkntematik`
--
ALTER TABLE `kkntematik`
  MODIFY `id_kkn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `modulstupen`
--
ALTER TABLE `modulstupen`
  MODIFY `id_modul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pmm`
--
ALTER TABLE `pmm`
  MODIFY `id_pmm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stupen`
--
ALTER TABLE `stupen`
  MODIFY `id_stupen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaksi_mitra`
--
ALTER TABLE `transaksi_mitra`
  MODIFY `id_trx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_user_email` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_dosen_user_email` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `kampusmengajar`
--
ALTER TABLE `kampusmengajar`
  ADD CONSTRAINT `kampusmengajar_ibfk_1` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`);

--
-- Constraints for table `kkntematik`
--
ALTER TABLE `kkntematik`
  ADD CONSTRAINT `kkntematik_ibfk_1` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`);

--
-- Constraints for table `mitra`
--
ALTER TABLE `mitra`
  ADD CONSTRAINT `fk_mitra_user_email` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mitra_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
