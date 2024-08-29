-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 05:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini-info-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user`, `activity`, `created_at`) VALUES
(2, 'fatta', 'Mengedit artikel IKeaksasdas', '2024-06-02 02:21:29'),
(3, 'fatta', 'Menghapus artikel', '2024-06-02 02:27:54'),
(4, 'fatta', 'Menambahkan artikel asdasdasdfa', '2024-06-02 02:30:01'),
(5, 'fatta', 'Mengedit artikel asdasdasdfa', '2024-06-02 02:30:18'),
(6, 'fatta', 'Menghapus artikel asdasdasdfa', '2024-06-02 02:30:27'),
(7, 'admin', 'Menghapus artikel dadassads', '2024-06-02 02:45:38'),
(8, 'tegar', 'Menghapus artikel dsasdasdadwrgrgh', '2024-06-02 02:46:09'),
(9, 'admin', 'Menghapus artikel fafadhytjr', '2024-06-02 02:56:05'),
(10, 'tegar', 'Menambahkan artikel adsdasfaf', '2024-06-02 03:30:18'),
(11, 'tegar', 'Menambahkan artikel thjriwk7tol68ol6l6', '2024-06-02 03:30:32'),
(12, 'tegar', 'Menambahkan artikel thetjhejhshdfgbfdgbdfgdgfds', '2024-06-02 03:30:47'),
(13, 'tegar', 'Menghapus artikel thetjhejhshdfgbfdgbdfgdgfds', '2024-06-02 04:15:22'),
(14, 'tegar', 'Mengedit artikel thjriwk7tol68ol6l6', '2024-06-02 04:27:27'),
(15, 'tegar', 'Mengedit artikel dasda', '2024-06-02 04:27:47'),
(16, 'tegar', 'Mengedit artikel dasda', '2024-06-02 04:30:24'),
(17, 'tegar', 'Mengedit artikel Test Carousel', '2024-06-02 04:30:41'),
(18, 'admin', 'Mengedit artikel thjriwk7tol68ol6l6', '2024-06-02 17:02:44'),
(19, 'Tegar Joko Kurniawan', 'Menambahkan artikel Test Session  Username', '2024-06-02 17:18:17'),
(20, 'Tegar Joko Kurniawan', 'Mengedit artikel Test Session  Username', '2024-06-02 17:18:34'),
(21, 'Administrator', 'Menghapus artikel thjriwk7tol68ol6l6', '2024-06-02 17:36:43'),
(22, 'Administrator', 'Menghapus artikel adsdasfaf', '2024-06-02 17:37:11'),
(23, 'Administrator', 'Menghapus artikel Test square image', '2024-06-02 17:37:18'),
(24, 'Administrator', 'Menghapus artikel Lomba 17an ke 78 Kemerdekaan RI', '2024-06-02 17:37:24'),
(25, 'Administrator', 'Menghapus artikel Lomba HUT RI 17 Agustus 2024', '2024-06-02 17:37:28'),
(26, 'Administrator', 'Menghapus artikel Test Carousel', '2024-06-02 17:37:31'),
(27, 'Administrator', 'Menghapus artikel dasda', '2024-06-02 17:37:33'),
(28, 'Administrator', 'Menambahkan user heru', '2024-06-03 01:11:13'),
(29, 'Administrator', 'Menonaktifkan user', '2024-06-03 01:39:19'),
(30, 'Administrator', 'Mengaktifkan user heru', '2024-06-03 01:42:46'),
(31, 'Administrator', 'Menonaktifkan user admin', '2024-06-03 01:45:05'),
(32, 'Administrator', 'Mengaktifkan user admin', '2024-06-03 01:45:10'),
(33, 'Fatta Rahmanaufal', 'Menambahkan artikel Test artikel fatta', '2024-06-03 01:48:44'),
(34, 'Administrator', 'Menghapus user', '2024-06-03 02:09:36'),
(35, 'Harits Fadhlillah', 'Menambahkan artikel Test Artikel Harits', '2024-06-03 02:14:12'),
(36, 'Harits Fadhlillah', 'Mengedit artikel Test Artikel Harits', '2024-06-03 02:14:35'),
(37, 'Harits Fadhlillah', 'Mengedit artikel Test Artikel Harits', '2024-06-03 02:16:23'),
(38, 'Administrator', 'Menghapus artikel Test artikel fatta', '2024-06-03 02:18:54'),
(39, 'Administrator', 'Menonaktifkan user tegar', '2024-06-03 13:39:50'),
(40, 'Administrator', 'Mengaktifkan user tegar', '2024-06-03 13:39:55'),
(41, 'Administrator', 'Menonaktifkan user tegar', '2024-06-03 13:40:01'),
(42, 'Administrator', 'Mengaktifkan user tegar', '2024-06-03 13:40:06'),
(43, 'Administrator', 'Menonaktifkan user harits', '2024-06-03 17:04:31'),
(44, 'Administrator', 'Menonaktifkan user tony', '2024-06-03 17:04:31'),
(45, 'Administrator', 'Menghapus user tony', '2024-06-03 17:04:31'),
(46, 'Administrator', 'Menghapus user fatta', '2024-06-03 17:04:31'),
(47, 'Administrator', 'Menonaktifkan user ', '2024-06-03 17:04:31'),
(48, 'Administrator', 'Menghapus user harits', '2024-06-03 17:04:31'),
(49, 'Administrator', 'Menambahkan user harits', '2024-06-03 17:08:52'),
(50, 'Administrator', 'Menambahkan user tony', '2024-06-03 17:09:09'),
(51, 'Administrator', 'Menambahkan user fatta', '2024-06-03 17:09:51'),
(52, 'Administrator', 'Menghapus user nugroho', '2024-06-03 17:26:14'),
(53, 'Administrator', 'Menghapus user fatta', '2024-06-03 17:45:08'),
(54, 'Administrator', 'Menghapus user tony', '2024-06-03 17:45:26'),
(55, 'Administrator', 'Menonaktifkan user harits', '2024-06-03 17:46:35'),
(56, 'Administrator', 'Mengaktifkan user harits', '2024-06-03 17:46:42'),
(57, 'Administrator', 'Menambahkan user tony', '2024-06-03 17:47:13'),
(58, 'Administrator', 'Mengaktifkan user tony', '2024-06-03 17:47:18'),
(59, 'Administrator', 'Mengedit artikel Test Artikel Harits', '2024-06-03 17:50:22'),
(60, 'Administrator', 'Menonaktifkan user tegar', '2024-06-03 17:53:58'),
(61, 'Administrator', 'Mengaktifkan user tegar', '2024-06-03 17:54:03'),
(62, 'Administrator', 'Menambahkan artikel Test File Delete', '2024-06-03 19:07:39'),
(63, 'Administrator', 'Menambahkan artikel Test Filename', '2024-06-03 19:13:25'),
(64, 'Administrator', 'Menghapus artikel Test File Delete', '2024-06-03 19:14:21'),
(65, 'Administrator', 'Menghapus artikel Test Artikel Harits', '2024-06-03 19:15:56'),
(66, 'Administrator', 'Menghapus artikel Test Filename', '2024-06-03 19:18:29'),
(67, 'Administrator', 'Menambahkan artikel Test delete file', '2024-06-03 19:22:30'),
(68, 'Administrator', 'Mengedit artikel Test delete file', '2024-06-03 19:22:39'),
(69, 'Administrator', 'Menambahkan artikel Pengabdian Masyarakat di TPQ Nurul Jadid', '2024-06-03 19:26:42'),
(70, 'Administrator', 'Menghapus artikel Test Session  Username', '2024-06-03 19:27:26'),
(71, 'Tegar Joko Kurniawan', 'Menambahkan artikel Test photo profile', '2024-06-03 20:15:08'),
(72, 'Administrator', 'Menghapus user tony', '2024-06-03 20:49:57'),
(73, 'Administrator', 'Menambahkan user nugie', '2024-06-03 21:09:09'),
(74, 'Administrator', 'Menonaktifkan user nugie', '2024-06-03 21:09:23'),
(75, 'Administrator', 'Mengaktifkan user nugie', '2024-06-03 21:09:27'),
(76, 'Administrator', 'Menghapus user nugie', '2024-06-03 21:09:31'),
(77, 'Administrator', 'Menambahkan user nugie', '2024-06-03 21:21:19'),
(78, 'Administrator', 'Mengaktifkan user fatta', '2024-06-03 23:01:50'),
(79, 'Administrator', 'Mengaktifkan user tony', '2024-06-03 23:04:36'),
(80, 'Tegar Joko Kurniawan', 'Menambahkan artikel asdasfag', '2024-06-03 23:19:39'),
(81, 'Tony Vetra Sugita', 'Menambahkan artikel dasgeagager', '2024-06-03 23:22:22'),
(82, 'Administrator', 'Mengaktifkan user heru', '2024-06-03 23:25:12'),
(83, 'Administrator', 'Menonaktifkan user tegar', '2024-06-03 23:27:22'),
(84, 'Administrator', 'Mengaktifkan user tegar', '2024-06-03 23:27:27'),
(85, 'Administrator', 'Mengedit artikel dasgeagager', '2024-06-04 00:03:22'),
(86, 'Administrator', 'Menghapus user heru', '2024-06-04 00:14:06'),
(87, 'Administrator', 'Menambahkan user heru', '2024-06-04 00:14:31'),
(88, 'Tegar Joko Kurniawan', 'Mengedit artikel asdasfagdadsasad', '2024-06-04 00:27:42'),
(89, 'Tegar Joko Kurniawan', 'Mengedit artikel Test photo profile', '2024-06-04 00:28:15'),
(90, 'Fatta Rahmanaufal', 'Menambahkan artikel Semot 2024 Siap Beri Motivasi Mahasiswa Baru Universitas BSI', '2024-06-04 00:41:46'),
(91, 'Fatta Rahmanaufal', 'Mengedit artikel Semot 2024 Siap Beri Motivasi Mahasiswa Baru Universitas BSI', '2024-06-04 00:45:48'),
(92, 'Fatta Rahmanaufal', 'Mengedit artikel Semot 2024 Siap Beri Motivasi Mahasiswa Baru Universitas BSI', '2024-06-04 00:46:21'),
(93, 'Fatta Rahmanaufal', 'Mengedit artikel Semot 2024 Siap Beri Motivasi Mahasiswa Baru Universitas BSI', '2024-06-04 00:46:36'),
(94, 'Administrator', 'Menghapus artikel dasgeagager', '2024-06-04 09:08:57'),
(95, 'Administrator', 'Menghapus artikel asdasfagdadsasad', '2024-06-04 09:09:00'),
(96, 'Administrator', 'Menghapus artikel Test photo profile', '2024-06-04 09:09:03'),
(97, 'Tegar Joko Kurniawan', 'Menambahkan artikel Gelaran Ormik 2024 Akan Menyambut Mahasiswa Baru Universitas BSI', '2024-06-04 09:41:24'),
(98, 'Harits Fadhlillah', 'Menambahkan artikel Ajang Bergengsi Futsal Competition BSI FLASH 2024 Kota Depok: Rangkaian Pertandingan Segera Dimulai!', '2024-06-04 10:36:35'),
(99, 'Harits Fadhlillah', 'Mengedit artikel Ajang Bergengsi Futsal Competition BSI FLASH 2024 Kota Depok: Rangkaian Pertandingan Segera Dimulai!', '2024-06-04 10:37:24'),
(100, 'Administrator', 'Menghapus user heru', '2024-06-04 10:39:16'),
(101, 'Administrator', 'Mengedit artikel Pengabdian Masyarakat di TPQ Nurul Jadid', '2024-06-04 11:14:04'),
(102, 'Administrator', 'Mengaktifkan user heru', '2024-06-04 11:22:12'),
(103, 'Nugroho Adi Wibowo', 'Menambahkan artikel Perempuan Muda Beraksi sebagai Representatif Peringatan Hari Kartini', '2024-06-04 13:18:50'),
(104, 'Administrator', 'Menghapus user heru', '2024-06-04 13:21:39'),
(105, 'Administrator', 'Mengedit artikel Semot 2024 Siap Beri Motivasi Mahasiswa Baru Universitas BSI', '2024-06-04 13:21:57'),
(106, 'Administrator', 'Mengedit artikel Pengabdian Masyarakat Mahasiswa BSI di TPQ Nurul Jadid', '2024-06-04 13:23:03'),
(107, 'Administrator', 'Mengedit artikel Pengabdian Masyarakat di TPQ Nurul Jadid', '2024-06-04 13:23:24'),
(108, 'Administrator', 'Menghapus user tony', '2024-06-04 16:54:00'),
(109, 'Administrator', 'Menambahkan user tony', '2024-06-04 17:55:25'),
(110, 'Fatta Rahmanaufal', 'Menambahkan artikel Cek Penerima PIP 2024, Kriteria, Besaran dan Jadwal Pencairan', '2024-06-04 19:20:27'),
(111, 'Fatta Rahmanaufal', 'Menambahkan artikel dasfdasda', '2024-06-04 19:21:00'),
(112, 'Fatta Rahmanaufal', 'Menghapus artikel dasfdasda', '2024-06-04 19:21:16'),
(113, 'Fatta Rahmanaufal', 'Menambahkan artikel Supporter Tim Sobi Fest’24 Bantu Suntikan Semangat Untuk Para Pemain', '2024-06-04 19:43:17'),
(114, 'Fatta Rahmanaufal', 'Mengedit artikel Supporter Tim Sobi Fest’24 Bantu Suntikan Semangat Untuk Para Pemain', '2024-06-04 19:43:48'),
(115, 'Fatta Rahmanaufal', 'Mengedit artikel Cek Penerima PIP 2024, Kriteria, Besaran dan Jadwal Pencairan', '2024-06-04 19:44:59'),
(116, 'Tegar Joko Kurniawan', 'Menambahkan artikel SMKN 3 Bekasi Jadi Juara Bertahan BSI Flash Futsal Competition 2024 Bekasi', '2024-06-04 20:48:46'),
(117, 'Tegar Joko Kurniawan', 'Mengedit artikel SMKN 3 Bekasi Jadi Juara Bertahan BSI Flash Futsal Competition 2024 Bekasi', '2024-06-04 20:49:21'),
(118, 'Nugroho Adi Wibowo', 'Menambahkan artikel Kembali Raih Juara 1, SMK Citra Negara Depok Akui Tetap Pertahankan Semangat', '2024-06-04 21:09:28'),
(119, 'Nugroho Adi Wibowo', 'Mengedit artikel Kembali Raih Juara 1, SMK Citra Negara Depok Akui Tetap Pertahankan Semangat', '2024-06-04 21:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `backenduser`
--

CREATE TABLE `backenduser` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(254) DEFAULT NULL,
  `password` varchar(254) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0' COMMENT '1 = Aktif , 0 = Terblokir',
  `profile_pic` varchar(255) NOT NULL DEFAULT 'assets/profile/default.png',
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Untuk Login Backend';

--
-- Dumping data for table `backenduser`
--

INSERT INTO `backenduser` (`uid`, `name`, `username`, `password`, `status`, `profile_pic`, `created_on`) VALUES
(1, 'Administrator', 'admin', '$2a$12$JPGBbQdWuJbwCM6mW1Khd.qCNt8rt9cQ.9VsW.5y2NJQgMeslGfpC', 1, 'assets/profile/admin.png', '2024-06-02 16:11:46'),
(6, 'Tegar Joko Kurniawan', 'tegar', '$2a$12$h6ujr7m1YRvs/oCjUtkNW.Tkev3DrxcPiq7vdg91UaxDsZ3oWgyb6', 1, 'assets/profile/tegar.jpg', '2024-06-02 16:11:46'),
(8, 'Harits Fadhlillah', 'harits', '$2y$10$kJU89GoPSZw3x.M3T8oxT.IwL9RPhAECsV3dEwmDxIsKxNzltOHS.', 1, 'assets/profile/harits.jpg', '2024-06-03 17:08:52'),
(13, 'Nugroho Adi Wibowo', 'nugie', '$2y$10$VJ43nFTcOVGw6JHs7SC2aOXwATDptcOrATRr7visLpZiW.XAdq2ce', 1, 'assets/profile/nugie.jpg', '2024-06-03 21:21:19'),
(18, 'Fatta Rahmanaufal', 'fatta', '$2y$10$fOcdPlpgSg6dCk2rjb4X/.FXFLhKUsJGP65OtGSjsUNED3YZR8Q7m', 1, 'assets/profile/fatta.jpg', '2024-06-03 22:57:33'),
(23, 'Tony Vetra Sugita', 'tony', '$2y$10$TgqRHsTRCC2LsYdyIRLbWOJRVPreF/jzUVU5tqFc0d0Nzu8qwagry', 1, 'assets/profile/tony.jpg', '2024-06-04 17:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(250) DEFAULT NULL,
  `blog_desc` text,
  `blog_img` varchar(300) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1= Published, 0 = Unpublished',
  `headline` tinyint(1) DEFAULT NULL COMMENT '1 = Headline , 0 = Common',
  `views` int(11) DEFAULT '0',
  `penulis` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Untuk Menyimpan Data Blog';

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_desc`, `blog_img`, `kategori`, `status`, `headline`, `views`, `penulis`, `uid`, `created_on`, `updated_on`) VALUES
(42, 'Pengabdian Masyarakat di TPQ Nurul Jadid', '<p>Pendidikan agama Islam memiliki peran penting dalam membentuk karakter dan nilai-nilai spiritual dalam kehidupan individu muslim. Namun, dalam menghadapi era modern yang ditandai dengan perubahan sosial, perkembangan teknologi, dan tantangan multidimensional, perlu adanya implementasi pembelajaran yang relevan dan adaptif agar pendidikan agama Islam dapat memberikan manfaat yang maksimal bagi siswa.(Shodikun et al., 2023) Penting untuk diingat bahwa karakter adalah sesuatu yang terus berkembang seiring waktu dan bisa dipengaruhi oleh pengalaman, pendidikan, dan lingkungan. Membangun karakter yang baik secara menyeluruh adalah sebuah usaha yang berkelanjutan untuk tumbuh dan menjadi individu yang lebih baik dalam berbagai aspek.(Gulo et al., 2024)</p><p>Pada proses penyelenggaraan pendidikan karakter baik dalam ruang lingkup pendidikan formal ataupun pendidikan nonformal harus dilandasi atau berpijak kepada kebenaran-kebenaran agama dan nilai-nilai karakter, hal tersebutlah yang membuat pendidikan karakter dapat terealisasi sesuai dengan tujuan pendidikan itu sendiri.(Arlina et al., 2024)</p><p>Menanamkan nilai-nilai spiritual yang bersumber dari ajaran agama termasuk dalam bidang pendidikan yang harus menjadi perhatian serius dari keluarga kepada anakanaknya, hal ini dapat menjadikan kokohnya pondasi dan filter yang bersifat naluri untuk anak, yang dapat membangkitkan kesadaran dan kekuatan spiritual bagi anak sedini mungkin, sehingga peran keluarga dalam menciptakan lingkungan keluarga yang kondusif dalam menanamkan nilai-nilai moral dan spiritual menjadi sangat penting dalam membentuk kepribadian dan karakter anak.(Nasution, 2023) Maka dari itu, tujuan tim kami di TPQ “Nurul Jadid” untuk melakukan program Pengabdian Masyarakat berupa pengajaran mengenai moral dan etika dalam beragama. Kami melakukan Pengabdian Masyarakat di TPQ “Nurul Jadid” dimana itu adalah tempat pengajian khusus untuk anak-anak dimana kami menerapkan pembelajaran secara digital berupa media video dengan sebuah laptop dan proyektor.</p>', 'assets/upload/blog_img/Pengabdian_Masyarakat_di_TPQ_Nurul_Jadid.jpg', 'Umum', 1, 1, 2, 'Administrator', 1, '2024-06-03 19:26:42', '2024-06-04 17:20:58'),
(46, 'Semot 2024 Siap Beri Motivasi Mahasiswa Baru Universitas BSI', '<p><strong>Bekasi –</strong> Kampus Digital Kreatif Universitas BSI (Bina Sarana Informatika), selalu memiliki ide kreatif dalam menyambut kehadiran mahasiswa barunya, salah satunya Seminar Motivasi (semot). Kini, gelaran akbarnya tersebut dengan tajuk ‘<i>Beyond Future</i>‘, akan memotivasi mahasiswa barunya, di BSI Convention Center (BSI Convex), pada Sabtu, 9 Maret 2024 mendatang.</p><p>Suharyanto, selaku Wakil Rektor II Bidang Non Akademik Universitas BSI mengungkapkan bahwa, Semot merupakan ajang untuk memberikan motivasi kepada mahasiswa baru. Agar motivasinya tersampaikan dengan baik, gelaran ini pun selalu disuguhkan dengan tema yang menarik serta menghadirkan motivator handal.</p><p>“Acara Semot adalah salah satu bentuk komitmen Universitas BSI dalam memotivasi dan memberikan dorongan semangat kepada mahasiswa baru dalam menghadapi tantangan akademik atau perkuliahan serta menggali potensi kreatif mereka,” ujar Suharyanto, Senin (19/2/2024).</p><p>Dalam Seminar Motivasi “Semot” ini, para mahasiswa baru Universitas BSI akan diperkenalkan dengan berbagai inspirasi dan motivasi yang dihadirkan melalui pembicara-pembicara terkemuka dari berbagai bidang. Mereka akan berbagi pengalaman, kisah sukses, serta tips dan trik dalam meraih prestasi di dunia akademik dan profesional.</p><p>Tidak hanya itu, acara ini juga akan menampilkan beragam aktivitas dan sesi interaktif yang dirancang untuk membangkitkan semangat, memperkuat kebersamaan, dan memperluas relasi antar mahasiswa baru Universitas BSI.</p><p>“Dengan Semot, Universitas BSI tidak hanya berkomitmen untuk menjadi pusat pendidikan tinggi yang unggul dalam bidang teknologi informasi dan kreativitas digital, tetapi juga sebagai perguruan tinggi yang peduli dan mendukung perkembangan pribadi serta karier mahasiswa-mahasiswinya,” tutupnya.</p>', 'assets/upload/blog_img/semot-2024.jpg', 'Umum', 1, 0, 1, 'Administrator', 18, '2024-06-04 00:41:46', '2024-06-04 17:10:36'),
(47, 'Gelaran Ormik 2024 Akan Menyambut Mahasiswa Baru Universitas BSI', '<p><strong>Bekasi –</strong> Dalam masa Pengenalan Kehidupan Kampus Bagi Mahasiswa Baru (PKKMB) 2024, Kampus Digital Kreatif Universitas BSI (Bina Sarana Informatika) akan menggelar Orientasi Akademik (Ormik) untuk menyambut kehadiran mahasiswa barunya (Maba). Bertajuk ‘<i>Beyond Future</i>‘, ormik kali ini akan digelar di BSI Convention Center (BSI Convex), Kaliabang, Bekasi pada Sabtu, 9 Maret 2024 mendatang.</p><p>Wakil Rektor II Bidang Non Akademik Universitas BSI, Suharyanto mengatakan kegiatan Ormik tersebut bertujuan untuk memberikan informasi pada mahasiswa barunya meliputi sarana prasarana kampus, administrasi akademik kemahasiswaan, sistem perkuliahan, peraturan akademik, dan peraturan kemahasiswaan.</p><p>“Kami sangat bersemangat untuk menyambut kedatangan mahasiswa baru Universitas BSI. Ormik merupakan kesempatan bagi para mahasiswa baru untuk mengenal lebih dekat lingkungan kampus, serta memperoleh pemahaman yang mendalam mengenai berbagai aspek kehidupan akademik dan kemahasiswaan,” ujar Suharyanto dalam keterangan tertulis, Selasa (5/3).</p><p>Menurutnya, Ormik juga menjadi ajang agar mahasiswa mampu beradaptasi dengan atmosfer kampus meliputi sistem perkuliahan, sertifikasi kompetensi dan peraturan yang berlaku di lingkungan kampus.</p><p>“Ormik 2024 diharapkan dapat memberikan pengalaman yang bermanfaat dan mempersiapkan mahasiswa baru untuk meniti perjalanan akademik mereka dengan sukses. Sehingga mereka memiliki sikap percaya diri dan optimis dalam meraih prestasi di Universitas BSI,” tandasnya.</p><p>Ia menambahkan, Pengenalan Ormik ini akan menginspirasi mahasiswa baru untuk mengikuti perkuliahan dengan semangat, sehingga mereka dapat menyelesaikan studi tepat pada waktunya. Dengan demikian, mereka bersama Universitas BSI akan meraih prestasi yang gemilang, baik di ranah akademik maupun di luar kegiatan akademis.</p>', 'assets/upload/blog_img/Gelaran_Ormik_2024_Akan_Menyambut_Mahasiswa_Baru_Universitas_BSI.jpg', 'Umum', 1, 1, 3, 'Tegar Joko Kurniawan', 6, '2024-06-04 09:41:24', '2024-06-04 17:21:46'),
(48, 'Ajang Bergengsi Futsal Competition BSI FLASH 2024 Kota Depok: Rangkaian Pertandingan Segera Dimulai!', '<p><strong>Depok – Universitas BSI (Bina Sarana Informatika)</strong> mempersembahkan Futsal Competition sebagai bagian dari rangkaian acara Sport Competition BSI FLASH 2024 Kota Depok. Ajang ini akan diselenggarakan di Venue GOR SGC, Depok pada Senin dan Selasa, 15-16 Januari 2023.</p><p>Pertandingan hari pertama Futsal Competition akan mempertemukan tim-tim futsal dari SMA/SMK sederajat di Kota Depok dan sekitarnya. Para peserta siap bersaing dalam atmosfer kompetitif untuk meraih prestasi dan mengukir namanya dalam dunia futsal.</p><p>Berikut adalah jadwal pertandingan hari pertama Futsal Competition BSI FLASH 2024:</p><p>Senin, 15 Januari 2023, Lapangan A<br>1. 10.00 WIB: SMK Harapan Bangsa vs SMA Sejahtera 1 Depok<br>2. 10.30 WIB: SMA Tadika Pertiwi vs SMAN 8 Depok<br>3. 11.00 WIB: SMK Negeri 3 Depok vs SMA Yapemri Depok<br>4. 11.30 WIB: SMK Polimedik vs SMA Muhammadiyah Sawangan<br>5. 12.00 WIB: SMAN 13 Depok vs SMA Perjuangan<br>6. 12.30 WIB: Win match 2 vs Win match 3<br>7. 13.00 WIB: Win match 5 vs SMK Citra Negara<br>8. 13.30 WIB: Win match 7 vs SMA Bunda Kandung<br>9. 14.00 WIB: Win match 9 vs SMK Yappa</p><p>Senin, 15 Januari 2023, Lapangan B<br>1. 10.00 WIB: SMK Bina Mandiri vs SMK Multicomp Depok<br>2. 10.30 WIB: SMK Insan Kreatif vs SMK Madani<br>3. 11.00 WIB: SMK Taruna Bhakti vs SMA Al Nur Cibinong<br>4. 11.30 WIB: SMK Polimedik vs SMA Muhammadiyah Sawangan<br>5. 12.00 WIB: SMK Nasional Depok vs SMA IAS Al Jannah<br>6. 12.30 WIB: SMKN 2 Depok vs Win match 1<br>7. 13.00 WIB: SMK Prisma Depok vs Win match 4<br>8. 13.30 WIB: SMK Plus PGRI 1 Cibinong vs Win match 6</p><p>Dian Ardiansyah selaku Ketua Pelaksana BSI FLASH 2024 menjelaskan, bahwa pertandingan berlanjut hingga pertandingan final untuk memperebutkan Trophy, uang pembinaan, dan beasiswa kuliah dari Universitas BSI.</p><p>“Semua tim diharapkan memberikan penampilan terbaik dan menunjukkan semangat sportivitas. Universitas BSI mengundang seluruh masyarakat dan pecinta futsal untuk turut meramaikan dan memberikan dukungan kepada para peserta. Mari saksikan ketangguhan tim-tim futsal terbaik di Kota Depok!,” tandasnya.</p>', 'assets/upload/blog_img/Kompetisi-Futsal-BSI-Flash-2024-Bogor.jpg', 'Pengumuman', 1, 1, 29, 'Harits Fadhlillah', 8, '2024-06-04 10:36:35', '2024-06-04 21:00:19'),
(49, 'Perempuan Muda Beraksi sebagai Representatif Peringatan Hari Kartini', '<p><strong>Bogor­­ </strong>– Badan Eksekutif Mahasiswa (BEM) adalah organisasi mahasiswa intra kampus yang merupakan lembaga eksekutif di tingkat Universitas atau Perguruan Tinggi. Untuk melaksanakan program-program kerjanya, Ketua dan Wakil Ketua dibantu oleh Departemen Pemberdayaan Perempuan yang berada dibawah naungan Kementrian Luar Negeri. Dalam rangka mempertingati Hari Kartini, BEM UBSI Bogor menghelat sebuah <i>talkshow </i>interaktif yang ditujukan khusus mahasiswi dari seluruh kampus BSI. Hal ini sebagai upaya melestarikan budaya memperingati hari-hari pahlawan yang sudah ada sejak dahulu sekali. Mahasiswi yang mengikuti kegiatan ini diharapkan dapat menyerap materi napak tilas R.A. Kartini dan ke depannya dapat lebih gencar untuk menyuarakan suara-suara kesetaraan <i>gender</i> dengan menanamkan ideologi beliau.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kegiatan Talkshow Perempuan Beraksi BEM Universitas Bina Sarana Informatika ini dilaksanakan di ruang kelas UBSI Kampus Bogor B (Merdeka) selama satu hari dari jam 09.00 sampai dengan 14.30 tanggal 27 April 2024 waktu setempat. Dimulai dengan pembukaan oleh <i>MC, </i>menyanyikan lagu-lagu, sambutan-sambutan dari presiden mahasiswa BEM dan ketua pelaksana, kemudain diisi dengan acara inti yaitu <i>talkshow</i> interaktif bersama Rini Asriasni, S.Hum selaku narasumber yang juga sedang menjabat sebagai sekretaris satgas PPKS di Universitas Indonesia dengan materi “Napak Tilas Kartini dan Relevansi dengan Masa Kini”, kemudian dibuka sesi diskusi dan tanya jawab bersama peserta yang hadir dengan <i>doorpize</i> yang sudah disiapkan sebelumnya, lalu diujung acara ditutup kembali oleh <i>MC</i>.</p><p>“Acara yang inspiratif dan bermanfaat untuk generasi muda untuk selalu berpikir kreatif dalam hal apapun” ungkap Octa Pratama Putra SS., M.Pd sebagai Kemahasiswaan UBSI Bogor – Cilebut. Untuk berikutnya dan sebagai harapan, pasti akan terdapat ide-ide fresh dari kawula muda (mahasiswa UBSI), dan kenapa tidak untuk disuarakan dan diwujudkan dalam bentuk seminar, bincang interaktif, dan semacamnya. Jadi, kegiatan ini bertujuan supaya khalayak sadar dan mengetahuinya. Hidup Mahasiswa!!! Hidup Perempuan Indonesia!!!” ujar Annisa Muharani sebagai Ketua Pelaksana seraya menutup perjumpaan ini.</p>', 'assets/upload/blog_img/Perempuan_Muda_Beraksi_sebagai_Representatif_Peringatan_Hari_Kartini.jpg', 'Umum', 1, 0, 6, 'Nugroho Adi Wibowo', 13, '2024-06-04 13:18:50', '2024-06-04 19:32:42'),
(50, 'Cek Penerima PIP 2024, Kriteria, Besaran dan Jadwal Pencairan', '<p><strong>Apa Itu Program Indonesia Pintar (PIP)?</strong></p><p>PIP adalah program yang memberikan bantuan berupa Kartu Indonesia Pintar (KIP) kepada siswa dari tingkat SD hingga SMA/sederajat. KIP berfungsi sebagai identitas untuk mendapatkan bantuan biaya pendidikan. Program ini juga mencakup siswa pendidikan non-formal seperti Paket A, B, dan C, serta peserta kursus atau pelatihan.</p><p><strong>Mengapa PIP Penting?</strong></p><p><strong>1. Mengurangi Angka Putus Sekolah</strong></p><p>Dengan PIP, pemerintah berharap dapat mengurangi angka putus sekolah di Indonesia. Anak-anak dari keluarga kurang mampu akan lebih mudah mengakses pendidikan tanpa terkendala masalah ekonomi.</p><p><strong>2. Meningkatkan Kualitas Sumber Daya Manusia</strong></p><p>PIP juga berkontribusi dalam meningkatkan kualitas sumber daya manusia di masa depan. Anak-anak yang mendapatkan pendidikan yang layak akan memiliki kesempatan lebih baik untuk mengembangkan potensi mereka.</p><p><strong>Bagaimana Cara Cek Penerima PIP 2024?</strong></p><p>Untuk mengetahui apakah Sobat Bintang atau orang di sekitar termasuk penerima PIP 2024, Sobat Bintang dapat mengikuti langkah-langkah berikut:</p><ul><li>Kunjungi situs <a href=\"https://pip.kemdikbud.go.id/\">https://pip.kemdikbud.go.id</a></li><li>Masukkan Nomor Induk Kependudukan (NIK) dan Nomor Induk Siswa Nasional (NISN) di kolom yang tersedia.</li><li>Masukkan jawaban dari penjumlahan yang diminta sebagai verifikasi.</li><li>Setelah itu isi data diri dan kode captcha, pilih opsi “Cek Penerima PIP”.</li><li>Nantinya, status penerima PIP akan muncul secara otomatis.</li></ul><p><strong>Kriteria Penerima PIP 2024</strong></p><ol><li>Pemegang Kartu Indonesia Pintar (KIP)</li><li>Keluarga Miskin/Rentan Miskin (Peserta Program Keluarga Harapan (PKH) / Pemegang Kartu Keluarga Sejahtera (KKS))</li><li>Anak Yatim Piatu/Yatim/Piatu dari sekolah/panti sosial/panti asuhan</li><li>Korban Bencana Alam</li><li>Siswa Drop Out yang diharapkan kembali bersekolah</li><li>Mengalami Gangguan Fisik</li><li>Korban Musibah</li><li>Memiliki Lebih dari 3 Saudara yang Tinggal Serumah</li><li>Peserta di Lembaga Kursus atau Satuan Pendidikan Nonformal Lainnya</li></ol><p><strong>Besaran Dana PIP 2024</strong></p><p>Besaran bantuan PIP bervariasi sesuai jenjang pendidikan:</p><ul><li>SD/SDLB/Paket A akan mendapatkan dana sebesar Rp 450.000 per tahun, sedangkan Siswa baru/kelas akhir sebesar Rp 225.000.</li><li>SMP/SMPLB/Paket B akan mendapatkan dana sebesar Rp 750.000 per tahun, sedangkan Siswa baru/kelas akhir: Rp 375.000</li><li>SMA/SMK/SMALB/Paket C akan mendapatkan dana sebesar Rp 1.000.000 per tahun, sedangkan Siswa baru/kelas akhir: Rp 500.000</li></ul><p><strong>Jadwal Pencairan Dana PIP 2024</strong></p><ul><li>Tahap 1: Februari – April 2024</li><li>Tahap 2 : Mei – September 2024</li><li>Tahap 3 : Oktober – Desember 2024</li></ul><p>Jadi, Sobat Bintang, mari dukung Program Indonesia Pintar agar anak-anak Indonesia dapat memiliki akses pendidikan yang lebih baik!</p>', 'assets/upload/blog_img/Cek_Penerima_PIP_2024,_Kriteria,_Besaran_dan_Jadwal_Pencairan.png', 'Administrasi', 1, 0, 2, 'Fatta Rahmanaufal', 18, '2024-06-04 19:20:27', '2024-06-04 21:00:24'),
(52, 'Supporter Tim Sobi Fest’24 Bantu Suntikan Semangat Untuk Para Pemain', '<p><strong>Bekasi –</strong> Sobat BSI Festival atau Sobi Fest di Kampus Digital Kreatif <strong>Universitas BSI (Bina Sarana Informatika)</strong> bagian barat sukses diselenggarakan selama 2 hari, Senin-Selasa, 5 dan 6 Februari 2024, berlokasi Sport Center Universitas BSI kampus Bekasi, Jl. Cut Mutia No.88, Sepanjang Jaya, Rawalumbu, Bekasi, Jawa Barat.</p><p>Dengan tujuan sebagai ajang kompetisi persahabatan antar mahasiswa tersebut menghadirkan berbagai kompetisi dari berbagai kategori, salah satunya kategori energy yang terdiri dari futsal dan volly. Dari tim yang hadir tak lupa juga disupport oleh para supporter dari kampus masing-masing.</p><p>Salah satunya, Afi Septian yang merupakan supporter dari Universitas BSI kampus Dewi Sartika yang hadir memberikan semangat kepada teman-teman yang sedang bertanding.</p><p>“Saya berharap teman-teman dapat bermain secara sportif dan tetap semangat, jaga kesehatan juga saat berkompetisi karena saat ini cuaca sedang tidak kondusif,” ujar Afi Septian saat wawancara langsung, Senin (5/2).</p><p>Selanjutnya, Muhammad Yoga Aqilla Joni yang juga merupakan supporter dari Universitas BSI kampus Bekasi juga mengatakan hal yang sama kepada teman-temannya.</p><p>“Saya ucapkan kepada Universitas BSI yang telah mengadakan ajang kompetisi persahabatan ini semoga tetap berjalan tiap tahunnya dan untuk teman-teman tetap jaga kekompakan tim, dan bermain secara bijak,” tandas Yoga.</p>', 'assets/upload/blog_img/Supporter.jpg', 'Umum', 1, 0, 2, 'Fatta Rahmanaufal', 18, '2024-06-04 19:43:17', '2024-06-04 21:00:34'),
(53, 'SMKN 3 Bekasi Jadi Juara Bertahan BSI Flash Futsal Competition 2024 Bekasi', '<p><strong>Bekasi,&nbsp;</strong> Kampus Digital Kreatif Universitas BSI (Bina Sarana Informatika) Kampus Bekasi, menggelar BSI Flash Futsal Competition 2024. Kompetisi futsal ini akan berlangsung pada Sabtu-Minggu, 21-22 Oktober 2024 di Sport Center Universitas BSI kampus Bekasi, Jl Cut Mutia No. 88, Kota Bekasi.</p><p>BSI Flash Futsal Competition 2024 Bekasi ini diikuti oleh sekitar 24 tim terbaik yang mewakili masing-masing SMA/sederajat di Bekasi. Kompetisi ini menjadi ajang unggulan bagi para pemain muda berbakat dalam bidang futsal di wilayah tersebut.</p><p>SMKN 3 Kota Bekasi meraih prestasi yang membanggakan dalam ajang Kompetisi Futsal BSI Flash 2024 Bekasi. Tim tersebut berhasil meraih kembali juara 1 yang mengukuhkannya menjadi juara bertahan setelah pertandingan sengit melawan SMAN 14 Kota Bekasi dengan skor 3 – 2.</p><p>Januar Eki Putra selaku Pelatih Tim Futsal SMKN 3 Kota Bekasi mengungkapkan kegembiraannya atas pencapaian timnya dalam turnamen ini. Ia merasa bangga dengan semangat dan kerja keras yang ditunjukkan oleh seluruh tim.</p><p>“Keras keras mereka akhirnya terbayarkan, teriknya matahari, inilah bonus. Hari ini lawan yang kita tanding cukup bagus, telah memberikan permainan terbaik mereka, pertandingan sengit, sehingga bilang ke anak-anak kalau kita hilang fokus kemenangan bisa lari kelawan. Jadi saya menekankan dan mengingatkan pemain dalam waktu lima belas kali dua ini pemain harus bekerja keras jadi jangan kehilangan fokus dari menit awal sampai akhir karena siapa yang siap dari awal sampai akhir itulah pemenangnya,” jelas Januar dalam wawancara langsung, pada Minggu, (22/10/23).</p><p>Ia juga menambahkan bahwa dari kemenangan tersebut akan lebih menyiapkan tim untuk bertanding di tahun depan dengan persiapan yang lebih matang lagi.</p><p>“Persiapan kita untuk tahun depan mungkin bukan hanya satu <i>event</i> saja ya, tetapi setiap latihan kita mempersiapkan itu agar bisa lebih siap dan lebih matang. Menang itu bukan berarti tidak ada evaluasi, justru kemenangan atau juara itu evaluasinya besar, jadi apa yang kurang dari tim. Ke depannya kita akan siapkan agar lebih siap lagi, akan lebih matang lagi strateginya. Terima kasih kepada Universitas BSI yang telah menyediakan atau memberikan wadah kepada anak-anak sekolah berkompetensi di <i>event</i> yang besar ini,” tambahnya.</p><p>Sementara itu, Khaisar Rasya selaku Pemain Tim Futsal SMKN 3 Kota Bekasi merasa sangat puas dengan perolehan hasil yang didapatkan dan apa yang telah diraih tidak terlepas dari kerja keras tim.</p><p>“Senang sekali dapat juara pertama, di acara yang cukup meriah ini. Menjadi juara bertahan itu butuh proses, selama ini kita persiapkan mental dan fisik yang kuat, karena kan kita bertanding di <i>outdoor</i> dengan cuaca yang cukup panas begini. Semoga Universitas BSI ke depannya dapat maju terus dan selanjutnya lebih meriah,” tegasnya.</p>', 'assets/upload/blog_img/BSI-Flash-Futsal-Competition-2024-Bekasi-Juara-1.jpeg', 'Umum', 1, 0, 2, 'Tegar Joko Kurniawan', 6, '2024-06-04 20:48:46', '2024-06-04 21:00:31'),
(54, 'Kembali Raih Juara 1, SMK Citra Negara Depok Akui Tetap Pertahankan Semangat', '<p><strong>Depok –</strong> Setelah meraih gelar juara pada Futsal Competition BSI FLASH 2023 Kota Depok tahun lalu, SMK Citra Negara Depok kembali menunjukkan dominasinya dengan berhasil mempertahankan gelar juara pada Futsal Competition BSI FLASH 2024 yang diselenggarakan oleh <strong>Universitas BSI (Bina Sarana Informatika)</strong>, turnamen berlangsung sejak 15 hingga 16 Januari 2024, di Golden Sport Center (GSC), Kelapa Dua, Depok.</p><p>SMK Citra Negara Depok berhasil meraih gelar juara setelah menaklukkan SMA Bunda Kandung Jakarta dalam pertandingan final yang berlangsung sangat ketat dan menegangkan. Dengan semangat yang sama, tim futsal SMK Citra Negara Depok berhasil mengatasi persaingan sengit dan mengukir prestasi gemilang.</p><p>Jeihan Rafi Ardana, salah satu anggota tim, menyatakan bahwa persaingan tahun ini jauh lebih sengit dibandingkan tahun sebelumnya. “Tahun lalu lawan yang hadir tidak sehebat tahun ini. Saya mengakui, semua tim yang berkompetisi tahun ini hampir rata kekuatan dan kehebatannya. Saya berpesan ke tim untuk menambah semangat, agar SMK Citra Negara Depok terus meraih kemenangan,” ujarnya.</p><p>Pelatih SMK Citra Negara Depok, Toebagus Permana, menyampaikan rasa terima kasih kepada Universitas BSI atas penyelenggaraan Sport Competition BSI FLASH Kota Depok yang sukses dilaksanakan dari tahun 2023 hingga tahun 2024. Ia mengungkapkan bahwa timnya kembali tampil dengan kekuatan yang sama, bahkan dengan kehadiran beberapa wajah baru yang membawa antusiasme tinggi.</p><p>“Saya hanya mengingatkan kepada anak didik, ditahun lalu kita sebagai juara, namun tahun ini kita harus kembali dari awal. Jangan mau menjadi yang kedua atau ketiga. Tetap pertahankan semangat juang, dan tunjukkan bahwa SMK Citra Negara Depok adalah tim yang tak terkalahkan,” ungkapnya</p><p>Keberhasilan SMK Citra Negara Depok meraih juara dalam Futsal Competition BSI FLASH 2024 menjadi bukti konsistensi dan kualitas tim dalam dunia futsal di Kota Depok. Prestasi ini juga menjadi motivasi untuk terus meningkatkan level permainan dan mempertahankan dominasi di kompetisi selanjutnya</p>', 'assets/upload/blog_img/Kembali_Raih_Juara_1,_SMK_Citra_Negara_Depok_Akui_Tetap_Pertahankan_Semangat.jpg', 'Umum', 1, 0, 0, 'Nugroho Adi Wibowo', 13, '2024-06-04 21:09:28', '2024-06-04 21:09:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backenduser`
--
ALTER TABLE `backenduser`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `penulis` (`penulis`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `backenduser`
--
ALTER TABLE `backenduser`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `backenduser` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
