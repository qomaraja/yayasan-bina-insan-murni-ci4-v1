-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2024 at 08:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `binsani`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'baksomazen04@gmail.com', 4, '2024-06-08 06:03:08', 1),
(2, '::1', 'baksomazen04@gmail.com', 4, '2024-06-08 08:39:35', 1),
(3, '::1', 'baksomazen04@gmail.com', 4, '2024-06-08 08:45:53', 1),
(4, '::1', 'baksomazen04@gmail.com', 4, '2024-06-08 09:49:19', 1),
(5, '::1', 'baksomazen04@gmail.com', 4, '2024-06-08 10:10:45', 1),
(6, '::1', 'baksomazen04@gmail.com', 4, '2024-06-08 10:12:59', 1),
(7, '::1', 'baksomazen04@gmail.com', 4, '2024-06-08 10:24:28', 1),
(8, '::1', 'baksomazen04@gmail.com', 4, '2024-06-08 10:25:21', 1),
(9, '::1', 'baksomazen04@gmail.com', 4, '2024-06-08 10:28:21', 1),
(10, '::1', 'baksomazen', NULL, '2024-06-08 10:29:33', 0),
(11, '::1', 'baksomazen04@gmail.com', 4, '2024-06-08 10:45:39', 1),
(12, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-08 10:52:43', 1),
(13, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-08 11:19:01', 1),
(14, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-08 23:44:32', 1),
(15, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-09 01:11:50', 1),
(16, '::1', 'baksomazen04@gmail.com', 4, '2024-06-09 08:59:27', 1),
(17, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-09 22:52:28', 1),
(18, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-10 17:10:31', 1),
(19, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-10 23:19:37', 1),
(20, '::1', 'binsani', NULL, '2024-06-11 14:14:28', 0),
(21, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-11 14:14:39', 1),
(22, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-12 05:16:52', 1),
(23, '::1', 'baksomazen04@gmail.com', 4, '2024-06-12 05:52:32', 1),
(24, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-12 06:03:07', 1),
(25, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-12 07:01:31', 1),
(26, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-12 13:19:07', 1),
(27, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-12 22:37:23', 1),
(28, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-13 08:09:59', 1),
(29, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-13 14:32:32', 1),
(30, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-13 22:16:16', 1),
(31, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-14 06:54:11', 1),
(32, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-15 11:33:00', 1),
(33, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-15 15:10:42', 1),
(34, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-15 23:41:47', 1),
(35, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-16 11:20:54', 1),
(36, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-16 13:25:53', 1),
(37, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-16 22:28:10', 1),
(38, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-17 05:38:48', 1),
(39, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-18 01:56:01', 1),
(40, '::1', 'yayasanbinsani@gmail.com', 5, '2024-06-30 22:35:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_artikel`
--

CREATE TABLE `data_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` text NOT NULL,
  `isi_artikel` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_artikel`
--

INSERT INTO `data_artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `created_at`, `updated_at`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(4, 'Yayasan Bina Insan Murni (BINSANI): Menggapai Ridho Allah SWT Melalui Kegiatan Sosial, Kemanusiaan, dan Keagamaan', '<p><strong>Alhamdulillah</strong>, kami bersyukur kepada Allah SWT atas segala nikmat dan karunia-Nya yang tercurah kepada kita semua. Yayasan Bina Insan Murni (BINSANI) berdiri sebagai wujud nyata dari upaya untuk menggapai ridho Allah SWT melalui berbagai kegiatan sosial, kemanusiaan, dan keagamaan. Yayasan ini menjadi sarana ibadah dan pengabdian yang bertujuan untuk membantu sesama dan mengatasi masalah sosial yang ada di masyarakat.</p><h4>Komitmen BINSANI dalam Kegiatan Sosial dan Kemanusiaan</h4><p>Masalah sosial saat ini merupakan isu yang paling mendasar di masyarakat. Ketimpangan sosial, kemiskinan, dan penderitaan yang dialami oleh sebagian besar masyarakat menuntut perhatian dan tindakan nyata dari kita semua. Islam mengajarkan umatnya untuk selalu membantu saudaranya yang sedang dalam kesulitan. Nabi Muhammad SAW bersabda, \"Barang siapa yang melepaskan satu kesulitan seorang mukmin di dunia, maka Allah akan melepaskan darinya satu kesulitan pada hari kiamat.\"</p><p>Menyadari pentingnya ajaran ini, Yayasan Bina Insan Murni berkomitmen untuk menjadi pelopor dalam berbagai kegiatan sosial dan kemanusiaan, di antaranya:</p><ol><li><p><strong>Bantuan Kesehatan</strong>: BINSANI menyediakan layanan kesehatan gratis bagi masyarakat kurang mampu. Mulai dari pengobatan umum, pemeriksaan kesehatan rutin, hingga program kesehatan ibu dan anak.</p></li><li><p><strong>Pendidikan</strong>: Pendidikan merupakan kunci untuk mengentaskan kemiskinan. Yayasan ini mendirikan dan mengelola sekolah serta memberikan beasiswa kepada anak-anak yang kurang mampu agar mereka mendapatkan kesempatan yang sama dalam meraih masa depan yang lebih baik.</p></li><li><p><strong>Bantuan Bencana</strong>: Dalam setiap bencana yang melanda, BINSANI selalu hadir memberikan bantuan darurat berupa makanan, pakaian, dan obat-obatan kepada korban bencana.</p></li><li><p><strong>Pemberdayaan Ekonomi</strong>: Program pemberdayaan ekonomi seperti pelatihan keterampilan dan modal usaha kecil membantu masyarakat untuk mandiri secara ekonomi.</p></li></ol><h4>Kegiatan Keagamaan untuk Membangun Keimanan dan Ketaqwaan</h4><p>Selain kegiatan sosial dan kemanusiaan, BINSANI juga aktif dalam kegiatan keagamaan yang bertujuan untuk memperkuat keimanan dan ketaqwaan umat. Beberapa program keagamaan yang dijalankan antara lain:</p><ol><li><p><strong>Pengajian Rutin</strong>: Mengadakan pengajian rutin untuk semua kalangan, baik anak-anak, remaja, maupun dewasa, guna meningkatkan pemahaman agama dan memperdalam ilmu keislaman.</p></li><li><p><strong>Kegiatan Ramadhan</strong>: Selama bulan Ramadhan, BINSANI menyelenggarakan berbagai kegiatan seperti buka puasa bersama, tarawih, dan pembagian zakat fitrah kepada yang berhak menerimanya.</p></li><li><p><strong>Peringatan Hari Besar Islam</strong>: Yayasan ini turut memperingati hari-hari besar Islam dengan mengadakan berbagai kegiatan seperti Maulid Nabi, Isra Mi\'raj, dan lain-lain.</p></li></ol><h4>Mengharap Rahmat dan Berkah Allah SWT</h4><p>Kami, segenap pengurus dan anggota Yayasan Bina Insan Murni, senantiasa berdoa dan berharap agar segala kegiatan yang kami lakukan mendapatkan rahmat dan berkah dari Allah SWT. Dengan penuh harapan, kami berupaya untuk terus berbuat kebaikan dan memberikan manfaat sebesar-besarnya bagi masyarakat.</p><p>Adalah dosa jika kita berdiam diri melihat penderitaan saudara-saudara kita. Maka dari itu, kami mengajak seluruh lapisan masyarakat untuk bersama-sama mendukung dan berpartisipasi dalam setiap kegiatan yang diadakan oleh BINSANI. Semoga dengan kebersamaan ini, kita dapat meringankan beban sesama dan mendekatkan diri kepada ridho Allah SWT.</p><p><strong>BINSANI: Berbakti untuk Sesama, Beribadah untuk Allah SWT.</strong></p>', '2024-06-13 15:32:02', '2024-06-13 22:32:02', '1718317922_c3f97bc9a51e4bfa6925.jpeg', '1718317922_a84dcfaf4e35ee13032b.jpeg', '1718317922_b5f291307131ad579ff2.jpeg', '1718317922_5ae730634da5f49e3424.jpeg', '1718317922_329df9a6b38245748b69.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `data_donasi`
--

CREATE TABLE `data_donasi` (
  `id_donasi` int(11) NOT NULL,
  `nama_donasi` text NOT NULL,
  `target_donasi` float NOT NULL,
  `perolehan_donasi` float NOT NULL,
  `deskripsi_donasi` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_donasi`
--

INSERT INTO `data_donasi` (`id_donasi`, `nama_donasi`, `target_donasi`, `perolehan_donasi`, `deskripsi_donasi`, `img1`, `img2`, `img3`, `img4`, `img5`, `created_at`, `updated_at`) VALUES
(43, 'Sedekah Rutin', 100000000, 210000, '<h2><blockquote style=\"text-align: justify; \" class=\"blockquote\"><p style=\"text-indent: 36pt;\">Sedekah rutin adalah salah\r\nsatu bentuk ibadah yang sangat dianjurkan dalam banyak agama dan tradisi\r\nbudaya. Dengan memberikan sebagian dari rezeki kita secara berkala kepada\r\nmereka yang membutuhkan, kita tidak hanya membantu meringankan beban hidup\r\norang lain, tetapi juga menumbuhkan rasa empati dan kepedulian dalam diri kita.\r\nSedekah rutin menciptakan siklus kebaikan yang berkelanjutan, di mana kebaikan\r\nyang kita berikan akan kembali kepada kita dalam bentuk yang mungkin tidak\r\nselalu kita duga. Selain itu, sedekah rutin membantu membersihkan hati dari\r\nsifat kikir dan serakah, menjadikan kita lebih peka terhadap penderitaan sesama\r\ndan lebih bersyukur atas apa yang kita miliki.<o:p></o:p></p>\r\n\r\n<p style=\"text-indent: 36pt;\">Lebih jauh lagi, sedekah rutin\r\nmemiliki dampak yang signifikan dalam memperkuat ikatan sosial dan kebersamaan\r\ndalam masyarakat. Ketika kita secara konsisten memberikan bantuan kepada mereka\r\nyang kurang beruntung, kita membantu menciptakan rasa solidaritas dan\r\npersaudaraan yang lebih kuat. Hal ini dapat menciptakan lingkungan yang lebih harmonis\r\ndan penuh kasih sayang, di mana setiap individu merasa dihargai dan\r\ndiperhatikan. Selain itu, sedekah rutin juga diyakini membuka pintu rezeki yang\r\nlebih luas dan membawa berkah dalam kehidupan kita. Dengan terus berkomitmen\r\nuntuk berbagi, kita tidak hanya meningkatkan kualitas hidup orang lain tetapi\r\njuga memperkaya diri kita sendiri secara spiritual dan emosional.<o:p></o:p></p></blockquote></h2>', '1718678819_5a3272d7ad78efd24eee.jpeg', '1718678819_355c8f16a49b8a5405d0.jpeg', '1718678819_4e1a6b82522e75209b13.jpeg', '1718678819_73a8dcda25bf0b82adb3.jpeg', '1718678819_ed3768953fe5c887cb17.jpeg', '2024-06-17 06:22:12', '2024-06-18 02:46:59'),
(46, 'Santunan Pendidikan Yatim Piatu dan Dhuafa', 100000000, 0, '<blockquote style=\"text-align:justify;text-indent:36.0pt\" class=\"blockquote\"><p style=\"text-indent: 36pt;\">Program santunan pendidikan\r\nuntuk yatim piatu dan dhuafa adalah inisiatif yang sangat penting dalam upaya\r\nmemberikan kesempatan yang adil dan merata dalam pendidikan. Melalui program\r\nini, anak-anak yang kehilangan salah satu atau kedua orang tua mereka\r\nmendapatkan akses tidak hanya ke pendidikan formal yang layak, tetapi juga\r\ndukungan moral dan emosional yang mereka butuhkan untuk tumbuh dan berkembang\r\nsecara optimal. Santunan pendidikan tidak hanya mencakup biaya sekolah dan\r\nperlengkapan pendidikan, tetapi juga mencakup bimbingan dan perhatian khusus\r\nagar mereka dapat mengatasi tantangan yang mereka hadapi.<o:p></o:p></p>\r\n\r\n<p style=\"text-indent: 36pt;\">Program ini tidak hanya membantu\r\nmengurangi kesenjangan pendidikan di kalangan anak-anak yang rentan, tetapi\r\njuga memberikan harapan baru bagi masa depan mereka. Dengan mendukung mereka\r\nsecara holistik, termasuk melalui bantuan finansial dan dukungan sosial,\r\nprogram santunan pendidikan mendorong mereka untuk tetap fokus pada pendidikan\r\nmereka, mengembangkan potensi mereka, dan mempersiapkan diri untuk menjadi\r\nindividu yang mandiri dan berkontribusi positif dalam masyarakat. Melalui\r\nkolaborasi antara lembaga sosial, pemerintah, dan masyarakat luas, program ini\r\nmenjadi simbol solidaritas dan kepedulian terhadap sesama, menciptakan\r\nlingkungan yang lebih inklusif dan berdaya.<o:p></o:p></p></blockquote><p>\r\n\r\n</p>', '1718679256_981a291ba990a692183d.jpeg', '1718679256_c0c90cc4e5ff8dbb6b70.jpeg', '1718679256_8d8d373322ffee96f8ba.jpeg', '1718679256_9592cacbd44d3f32243c.jpeg', '1718679256_78dcef05da6d60167799.jpeg', '2024-06-18 02:54:16', '2024-06-18 02:54:16'),
(47, 'Taman Pendidikan Al-Qur\'an', 50000000, 0, '<blockquote class=\"blockquote\"><p style=\"text-align:justify;text-indent:36.0pt\">Taman Pendidikan Al-Qur\'an\r\n(TPA) merupakan lembaga pendidikan informal yang memiliki peran penting dalam\r\nmendidik anak-anak mengenai ajaran dan nilai-nilai Islam, khususnya mempelajari\r\nAl-Qur\'an. Di TPA, anak-anak diajarkan untuk membaca, menghafal, dan memahami\r\nisi Al-Qur\'an secara sistematis dan terstruktur. Selain itu, mereka juga\r\nbelajar tentang ajaran moral, etika, serta praktik-praktik ibadah dalam Islam.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-indent:36.0pt\">TPA biasanya beroperasi di\r\nlingkungan masjid atau lembaga keagamaan lainnya, dan sering kali dilaksanakan\r\ndi sore hari atau pada hari libur. Para pengajar atau ustadz/ustadzah di TPA\r\nberperan sebagai fasilitator utama dalam proses pembelajaran ini, mereka tidak\r\nhanya mengajar materi Al-Qur\'an tetapi juga berfungsi sebagai teladan moral\r\nbagi para murid.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-indent:36.0pt\">Selain aspek pendidikan agama,\r\nTPA juga merupakan tempat untuk memperkokoh identitas keislaman anak-anak,\r\nmemupuk rasa kecintaan terhadap Al-Qur\'an, dan mengembangkan keterampilan\r\nsosial mereka melalui kegiatan-kegiatan seperti pengajian, penghafalan surah,\r\nserta kegiatan sosial dan keagamaan lainnya. Melalui TPA, generasi muda Muslim\r\ndapat dibekali dengan pondasi iman yang kokoh dan pengetahuan yang mendalam\r\ntentang ajaran agama Islam, sehingga mereka dapat menjadi generasi penerus yang\r\nbertanggung jawab dan berkontribusi positif bagi masyarakat dan umat Islam\r\nsecara keseluruhan.<o:p></o:p></p></blockquote>', '1718680394_c26b197ec1f78a87d1e0.jpeg', '1718680394_4286dd5850830390a854.jpeg', '1718680394_6b68b36cd47bec674a4a.jpeg', 'default.png', 'default.png', '2024-06-18 03:13:14', '2024-06-18 03:13:14'),
(48, 'Bimbingan Belajar Gratis', 50000000, 0, '<blockquote class=\"blockquote\"><p style=\"text-align:justify;text-indent:36.0pt\">Bimbingan belajar gratis\r\nadalah inisiatif yang sangat berarti dalam mendukung pendidikan dan kesetaraan\r\nakses terhadap pengetahuan. Program ini memberikan kesempatan bagi mereka yang\r\nmembutuhkan bantuan tambahan dalam akademik untuk mendapatkan panduan dan\r\npembimbingan tanpa biaya tambahan. Dengan adanya bimbingan belajar gratis,\r\ntidak hanya membantu meningkatkan prestasi akademis siswa, tetapi juga\r\nmenghilangkan hambatan finansial yang mungkin menghalangi mereka dari akses\r\nterhadap pendidikan yang berkualitas.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-indent:36.0pt\">Bimbingan belajar gratis\r\nsering kali dilaksanakan oleh sukarelawan, organisasi nirlaba, atau lembaga\r\npendidikan yang peduli terhadap kesejahteraan masyarakat. Program ini tidak\r\nhanya fokus pada pembelajaran akademis, tetapi juga dapat mencakup pengembangan\r\nketerampilan sosial dan kepemimpinan, serta memberikan motivasi bagi para\r\npeserta untuk meraih potensi terbaik mereka. Dengan cara ini, bimbingan belajar\r\ngratis tidak hanya memberikan dukungan pendidikan, tetapi juga membangun\r\nkomunitas yang peduli dan berempati terhadap masa depan generasi mendatang.<o:p></o:p></p></blockquote>', '1718680660_452d41eb8e555a4c6874.jpeg', '1718680660_4567822f86f27875d99d.jpeg', '1718680660_1dc004931586c1a9ed29.jpeg', '1718680660_f6bd0c5bd30388c05948.jpeg', '1718680660_87bdc8c06631951b4d36.jpeg', '2024-06-18 03:17:40', '2024-06-18 03:17:40'),
(49, 'Pengajian Rutin Setiap Hari Jum\'at', 10000000, 0, '<blockquote class=\"blockquote\"><p style=\"text-align:justify;text-indent:36.0pt\">Pengajian rutin setiap hari\r\nJumat adalah kegiatan yang memiliki makna mendalam dalam kehidupan keagamaan\r\ndan sosial masyarakat. Setiap Jumat, umat muslim berkumpul di masjid atau\r\ntempat-tempat ibadah lainnya untuk mendengarkan ceramah agama yang disampaikan\r\noleh seorang ustadz atau kyai. Kegiatan ini tidak hanya sebagai sarana untuk\r\nmemperdalam pemahaman terhadap ajaran agama, tetapi juga sebagai waktu untuk\r\nmeningkatkan keimanan dan ketakwaan. Melalui pengajian rutin ini, umat muslim\r\ndapat saling mengingatkan dan memperkuat hubungan mereka dengan Allah SWT,\r\nserta memperkokoh tali silaturahmi di antara sesama umat.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-indent:36.0pt\">Lebih dari sekadar kegiatan\r\nkeagamaan, pengajian rutin setiap hari Jumat juga menjadi momen penting dalam\r\nmembangun komunitas yang inklusif dan harmonis. Di dalam lingkungan pengajian,\r\nberbagai kalangan umat muslim dari berbagai latar belakang sosial dan ekonomi\r\ndapat berkumpul dengan rasa persaudaraan yang kuat. Hal ini membantu\r\nmenciptakan atmosfer saling pengertian dan dukungan antarindividu, sehingga\r\ntidak hanya terbatas pada aspek keagamaan semata, tetapi juga membentuk fondasi\r\nsolid untuk kehidupan bermasyarakat yang lebih baik. Dengan pengajian rutin\r\nsetiap hari Jumat, masyarakat dapat terus menggali nilai-nilai kehidupan yang\r\nbermakna dan mengaplikasikannya dalam kehidupan sehari-hari, menciptakan dampak\r\npositif yang luas dalam lingkungan sekitar mereka.<o:p></o:p></p></blockquote>', '1718681047_dfaa2a344c858be756e5.jpeg', '1718681047_1065e6c90c847b27b8f7.jpeg', 'default.png', 'default.png', 'default.png', '2024-06-18 03:24:07', '2024-06-18 03:24:07'),
(52, 'Pengadaan Taman Bacaan Masyarakat', 150000000, 0, '<blockquote class=\"blockquote\"><p style=\"text-align: justify; text-indent: 36pt;\">Pengadaan Taman Bacaan Masyarakat merupakan inisiatif yang sangat berarti dalam memajukan literasi dan pendidikan di berbagai komunitas. Melalui pendirian taman bacaan ini, masyarakat diberikan akses mudah dan gratis untuk mengakses berbagai jenis literatur, mulai dari buku cerita anak-anak hingga referensi ilmiah. Taman bacaan sering kali dilengkapi dengan koleksi buku yang beragam dan terawat, serta fasilitas yang nyaman untuk membaca, belajar, dan berdiskusi.<o:p></o:p></p><p style=\"text-align: justify; text-indent: 36pt;\">Selain sebagai tempat untuk membaca, Taman Bacaan Masyarakat juga berfungsi sebagai pusat kegiatan sosial dan budaya di lingkungan sekitarnya. Ini menjadi tempat berkumpulnya anak-anak, remaja, dan orang dewasa untuk belajar bersama, mengembangkan minat literasi, dan memperluas pengetahuan mereka. Pengadaan taman bacaan ini tidak hanya mendukung pembelajaran formal, tetapi juga menggalakkan kegiatan membaca sebagai kegiatan positif yang dapat meningkatkan kualitas hidup individu dan menguatkan ikatan sosial antarwarga.<o:p></o:p></p><p style=\"text-align: justify; text-indent: 36pt;\">Dengan adanya Taman Bacaan Masyarakat, diharapkan dapat tercipta lingkungan yang lebih terdidik dan terinformasi, di mana setiap anggota masyarakat memiliki kesempatan yang sama untuk mengembangkan potensi diri mereka melalui akses mudah terhadap literatur dan pengetahuan. Hal ini juga dapat menginspirasi lebih banyak inisiatif serupa di komunitas-komunitas&nbsp;<span lang=\"EN-US\">lain</span>, sehingga literasi dan pendidikan menjadi pilar utama dalam pembangunan sosial dan ekonomi yang berkelanjutan.</p></blockquote>', '1718681863_6ed7bdf6f281976169d5.jpeg', '1718681863_91bc49e6fea1578f9a56.jpeg', 'default.png', 'default.png', 'default.png', '2024-06-18 03:37:43', '2024-06-18 03:37:43'),
(53, 'Pembebasan Kantor Yayasan', 5000000000, 0, '<blockquote class=\"blockquote\"><p style=\"text-align:justify;text-indent:36.0pt\">\"Pembebasan Kantor\r\nYayasan\" mengacu pada proses pembebasan atau penghapusan beban finansial\r\nterkait tempat atau ruang kantor yang digunakan oleh sebuah yayasan atau\r\norganisasi non-profit. Langkah ini sering kali dilakukan untuk memberikan\r\nkeleluasaan finansial kepada yayasan tersebut agar dapat fokus pada misi dan\r\nprogram-program yang lebih mendasar dalam pelayanan masyarakat. Pembebasan ini\r\nbisa berarti membebaskan yayasan dari beban pembayaran sewa rutin atau bahkan\r\nutang terkait kepemilikan kantor.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-indent:36.0pt\">Pembebasan kantor yayasan\r\ndapat dicapai melalui berbagai cara, seperti penggalangan dana khusus untuk\r\npembayaran utang atau perjanjian dengan pemilik properti untuk penghapusan\r\nsewa. Dalam banyak kasus, ini merupakan tonggak penting dalam keberlanjutan dan\r\npertumbuhan organisasi, karena memungkinkan sumber daya yang tadinya\r\ndialokasikan untuk biaya operasional kantor digunakan untuk memperluas program,\r\nmerekrut lebih banyak tenaga kerja, atau memperluas dampak sosial positif yang\r\nmereka ciptakan.<o:p></o:p></p></blockquote>', '1718682157_06b6a1da87838a09d655.jpeg', '1718682157_788aa142e0ea324b6ae2.jpeg', 'default.png', 'default.png', 'default.png', '2024-06-18 03:42:37', '2024-06-18 03:42:37'),
(54, 'Pembangunan Panti Asuhan', 10000000000, 0, '<blockquote class=\"blockquote\"><p style=\"text-align:justify;text-indent:36.0pt\">Pembangunan panti asuhan\r\nmerupakan langkah penting dalam memenuhi kebutuhan tempat tinggal dan perawatan\r\nbagi anak-anak yang kurang beruntung atau tidak memiliki orang tua. Proyek ini\r\ntidak hanya mencakup pembangunan fisik bangunan, tetapi juga memperhatikan\r\naspek-aspek seperti penyediaan fasilitas pendidikan, kesehatan, dan kegiatan\r\nsosial yang mendukung perkembangan holistik anak-anak. Dengan adanya panti\r\nasuhan yang terkelola dengan baik, anak-anak mendapatkan kesempatan untuk hidup\r\nlebih layak, mendapatkan pendidikan, dan dilindungi dari potensi risiko yang\r\ndapat mengganggu perkembangan mereka.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-indent:36.0pt\">Proses pembangunan panti\r\nasuhan sering kali melibatkan kerja sama antara pemerintah, organisasi\r\nnon-profit, dan masyarakat umum. Selain dari aspek fisik bangunan, aspek\r\nkeberlanjutan juga menjadi fokus utama, termasuk dalam hal pengelolaan keuangan\r\nyang transparan, perekrutan tenaga pengajar yang berkualitas, dan pengembangan\r\nprogram-program yang mendukung pengembangan bakat dan keterampilan anak-anak.\r\nPembangunan panti asuhan bukan hanya tentang membangun struktur fisik, tetapi\r\njuga tentang membentuk lingkungan yang aman dan mendukung bagi anak-anak untuk\r\ntumbuh dan berkembang menjadi individu yang mandiri dan berkontribusi positif\r\ndalam masyarakat.<o:p></o:p></p></blockquote>', '1718682888_705e356717005d07fd6f.jpg', 'default.png', 'default.png', 'default.png', 'default.png', '2024-06-18 03:45:04', '2024-06-18 03:54:48'),
(55, 'Pembangunan Masjid', 5000000000, 0, '<blockquote class=\"blockquote\"><p style=\"text-align:justify;text-indent:36.0pt\">Pembangunan masjid merupakan\r\nsalah satu proyek yang sangat penting dalam kehidupan umat Muslim. Masjid tidak\r\nhanya berfungsi sebagai tempat ibadah, tetapi juga sebagai pusat aktivitas\r\nkeagamaan, sosial, dan pendidikan dalam komunitas Muslim. Proses pembangunan\r\nsebuah masjid melibatkan berbagai tahapan yang kompleks, mulai dari perencanaan\r\nhingga pelaksanaan fisiknya.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-indent:36.0pt\">Pertama-tama, perencanaan\r\npembangunan masjid meliputi penentuan lokasi yang strategis, pemilihan desain\r\narsitektur yang sesuai dengan kebutuhan dan budaya lokal, serta pengumpulan\r\ndana yang mencukupi dari sumbangan umat. Proses ini biasanya melibatkan\r\nkonsultasi dengan ahli arsitektur dan konstruksi untuk memastikan bahwa masjid\r\ndibangun dengan standar keamanan dan keindahan yang tinggi, sekaligus\r\nmemperhatikan kebutuhan fungsionalitas ruang dalam masjid.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-indent:36.0pt\">Kemudian, selama tahap\r\nkonstruksi, tim teknis dan pekerja konstruksi bekerja keras untuk mewujudkan\r\ndesain masjid menjadi sebuah struktur fisik yang kokoh dan estetis. Proses ini\r\nmencakup pembangunan pondasi yang kuat, penyelesaian struktur bangunan,\r\npemasangan atap dan jendela, hingga penyelesaian interior dan eksterior yang\r\nmencerminkan nilai-nilai keagamaan dan keindahan seni Islam. Setelah selesai\r\ndibangun, masjid menjadi pusat kegiatan keagamaan seperti shalat lima waktu,\r\nceramah agama, pengajian, serta berbagai kegiatan sosial dan pendidikan yang\r\nmemperkuat ikatan antarumat Muslim dan mengembangkan potensi masyarakat\r\nsekitar.<o:p></o:p></p></blockquote>', 'default.png', 'default.png', 'default.png', 'default.png', 'default.png', '2024-06-18 03:47:32', '2024-06-18 03:47:32'),
(56, 'Pembangunan Pesantren dan Madrasah', 20000000000, 0, '<blockquote class=\"blockquote\"><p style=\"text-align:justify;text-indent:36.0pt\">Pembangunan pesantren dan\r\nmadrasah merupakan investasi yang penting dalam memperkuat infrastruktur\r\npendidikan keagamaan di masyarakat. Pesantren sebagai lembaga pendidikan Islam\r\ntradisional dan madrasah sebagai lembaga pendidikan formal Islam memiliki peran\r\nkrusial dalam membentuk karakter dan keilmuan generasi muda. Dengan membangun\r\npesantren dan madrasah yang memadai, kita tidak hanya menyediakan tempat bagi\r\npembelajaran agama yang berkualitas tetapi juga menciptakan lingkungan yang\r\nmendukung pengembangan moral dan spiritual anak-anak serta remaja.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-indent:36.0pt\">Pembangunan pesantren dan\r\nmadrasah juga dapat berkontribusi dalam meningkatkan aksesibilitas pendidikan\r\nkeagamaan di berbagai daerah, termasuk di pedesaan yang sering kali memiliki\r\nakses terbatas terhadap pendidikan formal. Dengan mendirikan\r\nfasilitas-fasilitas ini, kita memberikan kesempatan yang lebih besar bagi\r\ngenerasi muda untuk mendapatkan pendidikan yang holistik, yang mencakup aspek\r\nagama, akademik, dan sosial. Selain itu, pesantren dan madrasah juga berperan\r\nsebagai pusat pengembangan keilmuan dan kultural yang melestarikan nilai-nilai\r\ntradisional serta mengajarkan kepatuhan pada nilai-nilai keagamaan dalam\r\nkehidupan sehari-hari.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-indent:36.0pt\">Melalui pembangunan pesantren\r\ndan madrasah yang terencana dan berkesinambungan, kita dapat membangun fondasi\r\nyang kuat untuk kemajuan intelektual dan moral generasi mendatang, serta\r\nmemperkuat kesatuan dan toleransi antar umat beragama dalam masyarakat yang\r\nplural. Dengan dukungan yang tepat dari pemerintah, komunitas, dan\r\nlembaga-lembaga terkait, pembangunan pesantren dan madrasah dapat menjadi\r\nlangkah strategis dalam menciptakan masa depan yang lebih cerah dan berkeadilan\r\nbagi semua anak bangsa.<o:p></o:p></p></blockquote>', 'default.png', 'default.png', 'default.png', 'default.png', 'default.png', '2024-06-18 03:52:05', '2024-06-18 03:52:05'),
(57, 'Wakaf Al-Qur\'an untuk Anak Yatim Piatu dan Dhuafa', 50000000, 0, '<blockquote class=\"blockquote\"><p style=\"text-align:justify;text-indent:36.0pt\">Wakaf Al-Qur\'an untuk anak\r\nyatim piatu dan dhuafa adalah sebuah inisiatif yang penuh makna dan berdampak\r\nluas dalam masyarakat. Melalui wakaf ini, Al-Qur\'an tidak hanya menjadi sumber\r\nilmu dan pedoman spiritual bagi mereka yang kurang beruntung, tetapi juga\r\nsimbol kepedulian dan kasih sayang yang abadi. Setiap Al-Qur\'an yang diwakafkan\r\ntidak hanya menyediakan akses bagi anak yatim piatu dan dhuafa untuk\r\nmempelajari dan menghafal ayat-ayat suci, tetapi juga membangun fondasi\r\nkeagamaan yang kokoh dalam kehidupan mereka.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-indent:36.0pt\">Dalam konteks ini, wakaf\r\nAl-Qur\'an tidak hanya memberikan manfaat langsung dalam hal pendidikan agama,\r\ntetapi juga membangun kebersamaan dalam masyarakat. Ia menggalang solidaritas\r\ndan mendukung pembangunan sosial yang inklusif, di mana setiap individu merasa\r\ndihargai dan didukung dalam pencarian ilmu agama. Lebih dari itu, wakaf\r\nAl-Qur\'an untuk anak yatim piatu dan dhuafa adalah investasi jangka panjang\r\ndalam meningkatkan kualitas kehidupan mereka, menjadikan mereka lebih berdaya\r\ndan optimis menghadapi tantangan kehidupan. Dengan demikian, setiap wakaf\r\nAl-Qur\'an adalah sebuah perbuatan mulia yang tidak hanya memberi manfaat\r\nmateriil tetapi juga spiritual bagi penerima manfaat dan masyarakat secara\r\nkeseluruhan.<o:p></o:p></p></blockquote>', '1718683301_ccc5e1ea978eccbd3e9d.jpeg', '1718683301_59229cc751a4ea56322b.jpeg', '1718683301_ed6c54c314601d6df2d6.jpeg', '1718683301_861519014d06fa3aa7e7.jpeg', '1718683302_7fbd346e854c76de95c0.jpeg', '2024-06-18 04:01:42', '2024-06-18 04:01:42');

-- --------------------------------------------------------

--
-- Table structure for table `data_feedback`
--

CREATE TABLE `data_feedback` (
  `id_feedback` int(11) NOT NULL,
  `nama_feedback` text NOT NULL,
  `no_telp_feedback` text NOT NULL,
  `pesan_feedback` text NOT NULL,
  `tgl_feedback` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_feedback`
--

INSERT INTO `data_feedback` (`id_feedback`, `nama_feedback`, `no_telp_feedback`, `pesan_feedback`, `tgl_feedback`) VALUES
(1, 'Steven Hernanda', '087777565', 'ditingkatkan lagi pelayanannya', '2019-03-05'),
(2, 'KanzuL aUfa', '0877667667667', 'semoga lebih baik lagi', '2019-04-09'),
(3, 'asdadasda', '132435466789', 'amiin', '2024-05-18'),
(4, 'Khamarudin Abdullah', '082133894874', 'Mantap Bang', '2024-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengeluaran`
--

CREATE TABLE `data_pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `id_donasi` int(11) NOT NULL,
  `nama_pengeluaran` text NOT NULL,
  `perolehan_pengeluaran` float NOT NULL,
  `deskripsi_pengeluaran` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pengeluaran`
--

INSERT INTO `data_pengeluaran` (`id_pengeluaran`, `id_donasi`, `nama_pengeluaran`, `perolehan_pengeluaran`, `deskripsi_pengeluaran`, `created_at`, `updated_at`) VALUES
(18, 43, 'Bensin', 35000, 'Antar Barang', '2024-06-17 08:11:12', '2024-06-17 08:11:12'),
(19, 43, 'Alat Tulis', 90000, 'Buku, Pensil, dan lain-lain', '2024-06-17 08:27:23', '2024-06-17 08:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `data_program`
--

CREATE TABLE `data_program` (
  `id_program` int(11) NOT NULL,
  `nama_program` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_program`
--

INSERT INTO `data_program` (`id_program`, `nama_program`, `img`) VALUES
(1, 'Santunan Pendidikan Anak Yatim Piatu dan Dhuafa', 'default.png'),
(2, 'Pembinaan Anak Putus Sekolah', 'default.png'),
(3, 'Bazar Sembako Murah Bagi Kaum Dhuafa', 'default.png'),
(4, 'Peringatan Hari Besar Islam', 'default.png'),
(5, 'Khitanan Massal', 'default.png'),
(6, 'Pembinaan Olahraga : Jalan Sehat dan Sepeda Santai', 'default.png'),
(7, 'Taman Pendidikan Al-Qur\'an', 'default.png'),
(8, 'Bimbingan Belajar Gratis', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_spanduk`
--

CREATE TABLE `data_spanduk` (
  `id_spanduk` int(11) NOT NULL,
  `id_donasi` int(11) NOT NULL,
  `judul_spanduk` text NOT NULL,
  `deskripsi_spanduk` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_spanduk`
--

INSERT INTO `data_spanduk` (`id_spanduk`, `id_donasi`, `judul_spanduk`, `deskripsi_spanduk`, `img`) VALUES
(36, 0, 'Santunan Pendidikan Rutin untuk Anak Yatim Piatu dan Dhuafa', 'Memberikan dukungan berkelanjutan dalam bentuk bantuan pendidikan, guna memastikan bahwa anak-anak yang kurang beruntung ini mendapatkan kesempatan yang sama untuk meraih masa depan yang cerah melalui pendidikan yang layak.', '1718276771_6dfd64a91274620f2b74.jpeg'),
(37, 0, 'Berkah Ilmu dan Cinta: Wakaf Al-Qur\'an untuk Anak Yatim Piatu dan Dhuafa', 'Inisiatif wakaf Al-Qur\'an mengalirkan cahaya ilmu dan harapan kepada anak yatim piatu serta dhuafa, memperkaya rohani mereka dengan hikmah dan kecintaan pada Al-Qur\'an.', '1718277671_f8daf5f92bdf109b171b.jpeg'),
(38, 0, 'Kunjungan Siswa SMAN 1 Purwodadi ke Yayasan Bina Insan Murni dalam Rangka Memperingati Hari Pramuka', 'Kunjungan siswa SMAN 1 Purwodadi ke Yayasan Bina Insan Murni menjadi momentum spesial dalam peringatan Hari Pramuka, mempererat hubungan antar generasi dan nilai-nilai kepanduan.', '1718278477_c0cf902b0621c6e42ec6.jpeg'),
(39, 0, 'Berkunjung dengan Hatiku: Siswa SMK Memberikan Bantuan Baju Layak Pakai', 'Siswa SMK mengunjungi Yayasan Bina Insan Murni untuk memberikan bantuan berupa baju layak pakai, menunjukkan kepedulian mereka terhadap sesama.', '1718278799_63ed68da71c50e786f3c.jpeg'),
(40, 0, 'Berkasih Ikhlas: Mahasiswa Universitas An Nuur Berikan Hiburan kepada Anak Yatim Piatu dan Dhuafa', 'Yayasan Bina Insan Murni kedatangan mahasiswa dari Universitas An Nuur yang memberikan keceriaan dan hiburan kepada anak-anak yatim piatu dan dhuafa.', '1718279343_f56a6d9e4a291272b952.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_donasi` int(11) NOT NULL,
  `nama_donatur` text NOT NULL,
  `no_telp_donatur` text NOT NULL,
  `pesan_donatur` text NOT NULL,
  `jumlah_donasi` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_transaksi`
--

INSERT INTO `data_transaksi` (`id_transaksi`, `id_donasi`, `nama_donatur`, `no_telp_donatur`, `pesan_donatur`, `jumlah_donasi`, `created_at`, `updated_at`) VALUES
(142, 43, 'Dzaky', '08122691512', 'halal', 70000, '2024-06-17 08:05:38', '2024-06-17 08:46:06'),
(151, 43, 'Dzaky', '08122691512', '', 90000, '2024-06-17 10:32:26', '2024-06-17 10:32:26'),
(157, 43, 'komar', '234', '', 50000, '2024-06-17 11:12:02', '2024-06-17 11:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1717822727, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'baksomazen04@gmail.com', 'baksomazen', '$2y$10$YQ0nV4zvg4yDIgdPVJRsS.Cow9GkPqkrXE8X3u7s.851Dlkm7DUkq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-06-08 06:01:54', '2024-06-08 06:01:54', NULL),
(5, 'yayasanbinsani@gmail.com', 'binsani', '$2y$10$A0TIHFv6NqzhXRiD.fCXMeK3GrRllXUXhwIEpuk.8E2sYgRX72Ykm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-06-08 10:52:07', '2024-06-08 10:52:07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `data_artikel`
--
ALTER TABLE `data_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `data_donasi`
--
ALTER TABLE `data_donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `data_feedback`
--
ALTER TABLE `data_feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `data_pengeluaran`
--
ALTER TABLE `data_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `data_program`
--
ALTER TABLE `data_program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `data_spanduk`
--
ALTER TABLE `data_spanduk`
  ADD PRIMARY KEY (`id_spanduk`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_artikel`
--
ALTER TABLE `data_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_donasi`
--
ALTER TABLE `data_donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `data_feedback`
--
ALTER TABLE `data_feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_pengeluaran`
--
ALTER TABLE `data_pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `data_program`
--
ALTER TABLE `data_program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_spanduk`
--
ALTER TABLE `data_spanduk`
  MODIFY `id_spanduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
