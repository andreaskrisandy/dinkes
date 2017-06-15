-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 21, 2014 at 12:41 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `man`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `session` varchar(35) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `username`, `password`, `session`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'qs0a70qjqajl59pj1kne5bl6j6'),
(2, 'System Root', 'root', '63a9f0ea7bb98050796b649e85481845', 'cif1b0dm9srtc091uvptfbc0d5'),
(4, 'Web User', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '1',
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`ip`, `tanggal`, `hits`, `online`) VALUES
('::1', '2013-07-17', 44, '1374063717'),
('::1', '2013-07-18', 7, '1374140889'),
('::1', '2013-07-21', 217, '1374402603'),
('::1', '2013-07-22', 13, '1374450988'),
('::1', '2014-04-29', 66, '1398787106'),
('::1', '2014-05-01', 73, '1398988331'),
('::1', '2014-05-04', 1, '1399212796'),
('::1', '2014-05-06', 7, '1399389583'),
('::1', '2014-05-07', 3, '1399480530'),
('::1', '2014-05-08', 28, '1399572857'),
('127.0.0.1', '2014-05-08', 31, '1399555476'),
('127.0.0.1', '2014-05-09', 28, '1399640746'),
('::1', '2014-05-16', 12, '1400255605'),
('::1', '2014-05-17', 86, '1400341794'),
('::1', '2014-05-18', 73, '1400418111'),
('36.77.75.115', '2014-05-18', 45, '1400422969'),
('202.67.43.20', '2014-05-19', 48, '1400457146'),
('202.67.42.17', '2014-05-19', 8, '1400462329'),
('36.88.118.177', '2014-05-19', 25, '1400472044'),
('111.68.26.19', '2014-05-19', 1, '1400465295'),
('180.242.3.244', '2014-05-19', 10, '1400474892'),
('202.67.43.14', '2014-05-19', 14, '1400470013'),
('69.58.178.58', '2014-05-19', 1, '1400470216'),
('202.67.42.18', '2014-05-19', 13, '1400471046'),
('110.83.61.52', '2014-05-19', 1, '1400471349'),
('202.67.42.29', '2014-05-19', 16, '1400476640'),
('36.88.124.226', '2014-05-19', 4, '1400480850'),
('202.67.42.21', '2014-05-19', 12, '1400483172'),
('66.249.65.179', '2014-05-19', 1, '1400489614'),
('202.67.42.7', '2014-05-19', 45, '1400497263'),
('202.67.42.16', '2014-05-19', 2, '1400500951'),
('66.249.73.202', '2014-05-20', 5, '1400552530'),
('36.88.118.177', '2014-05-20', 2, '1400552297'),
('::1', '2014-05-20', 63, '1400596548'),
('::1', '2014-05-21', 25, '1400701270');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text COLLATE latin1_general_ci NOT NULL,
  `deskripsi` text COLLATE latin1_general_ci NOT NULL,
  `gambar` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Kerja Bakti Sosial', 'Siwa MAN 2 Kota Bengkulu melaksanakan Bakti Sosial di Lingkungan Sekolah', '85galeri1.jpg'),
(9, 'MOU Kemenag dengan MAN dibidang Pendidikan', 'Kepala MAN 2 Kota Bengkulu melaksanakan MOU dengan perwakilan Pejabat Kementrian Agama Wilayah Bengkulu...', '18mou.jpg'),
(10, 'drum ban', 'pelatihan drum band di MAN 2 kota bengkulu', '40images.jpg'),
(14, 'latihan upacara', 'persiapan untuk upacara 17 agustus di MAN 2 kota bengkulu', '753.jpg'),
(15, 'Lomba drum ban', 'Lomba Drum Band', '694868.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `guru_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `guru_tmp_lahir` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `guru_tgl_lahir` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `guru_jk` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `pendidikan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `jurusan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `studi` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `guru_alamat` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `guru_photo` varchar(250) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `guru_name`, `guru_tmp_lahir`, `guru_tgl_lahir`, `guru_jk`, `pendidikan`, `jurusan`, `studi`, `guru_alamat`, `guru_photo`) VALUES
('1001004444444444', 'Romadhon Skom', 'Bengkulu,', '10-06-1991', 'Laki-laki', 'S-1', 'ti', 'ti', 'jl.manggis no : 50', '59DSC_0205a.jpg'),
('196606101994031003', 'Murisdin, S. Ag., M. Pd', 'Bengkulu,', '15-10-1978', 'Laki-laki', 'S-2', 'Ilmu Pendidikan', 'Aqidah Akhlak', 'Ds. Kayu Arang Kec.sukaraja', '59DSC_0174.JPG'),
('196805041996031003', 'Siti Aliyah, S. Pd', 'Bengkulu,', '10-06-1985', 'Perempuan', 'S-1', 'Matematika', 'Matematika', 'Komplek MAn2 Kota Bengkulu', '23DSC_0169.JPG'),
('196805041996031004', 'Mery Yumiati, S. Pd', 'Bengkulu,', '18-09-1986', 'Perempuan', 'S-1', 'BK', 'BK', 'jl.Perum padan Kemiling', '72DSC_0046.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_id` int(11) NOT NULL,
  `hari` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `jam` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `kmapel` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `mapel` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `nip` varchar(25) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `kelas_id`, `hari`, `jam`, `kmapel`, `mapel`, `nip`) VALUES
(1, 4, 'Senin', '08:30', 'TP001', 'Teknik Produksi', '196805041996031004'),
(2, 4, 'Selasa', '08:00', 'MP003', 'Teknik Permesinan', '196606101994031003');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kelas_id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `siswa` int(11) NOT NULL,
  `siswi` int(11) NOT NULL,
  `nip` varchar(25) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`kelas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `kelas_name`, `siswa`, `siswi`, `nip`) VALUES
(1, 'X Teknik Otomotif', 20, 5, '1001004444444444'),
(2, 'X Listrik', 20, 3, '196606101994031003'),
(3, 'X Bangunan', 25, 0, '196805041996031003'),
(4, 'X Mesin Produksi', 25, 5, '196805041996031004');

-- --------------------------------------------------------

--
-- Table structure for table `kepsek`
--

CREATE TABLE IF NOT EXISTS `kepsek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE latin1_general_ci NOT NULL,
  `kepsek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `profil` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kepsek`
--

INSERT INTO `kepsek` (`id`, `title`, `kepsek`, `profil`) VALUES
(1, 'Profil Kepala Seolah Madrasah Aliah Negeri (MAN) 2 Kota Bengkulu', '3kapala man2.jpg', '<h2>\r\nNama &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Dra. Hj. Miswati Natalia, MM</h2>\r\n<h2>\r\nN I P&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : 195712251981032001</h2>\r\n<h2>\r\nPangkat/Gol.&nbsp;&nbsp;&nbsp;&nbsp; : Pembina (IV/a)</h2>\r\n<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\nPendidikan&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; : S-2</h2>\r\n<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\r\nBidang&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Magister Manajemen</h2>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE IF NOT EXISTS `kurikulum` (
  `id_kurikulum` int(11) NOT NULL AUTO_INCREMENT,
  `ks` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `mapel` text COLLATE latin1_general_ci NOT NULL,
  `standar` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kompetensi` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_kurikulum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id_kurikulum`, `ks`, `mapel`, `standar`, `kompetensi`) VALUES
(1, 'X/I', 'Teknologi Informasi dan Komunikasi', 'Melakukan operasi dasar kompute', 'Mengaktifkan dan mematikan komputer sesuai dengan prosedur\r\nMenggunakan perangkat lunak beberapa program aplikasi\r\n'),
(2, 'X/I', 'KIMIA', 'Memahami struktur atom, sifat-sifat periodik unsur', 'Memahami struktur atom berdasarkan teori atom Bohr, sifat-sifat unsur, massa atom relatif, dan sifat-sifat periodik unsur dalam tabel periodik serta menyadari keteraturannya, melalui pemahaman konfigurasi elektron	Membandingkan proses pembentukan ikatan ion, ikatan kovalen, ikatan koordinasi, dan ikatan logam serta hubungannya dengan sifat fisika senyawa yang terbentuk\r\n'),
(3, 'X/I', 'BIOLOGI', 'Memahami hakikat Biologi sebagai ilmu ', 'Mengidentifikasi ruang lingkup Biologi Mendeskripsikan objek dan permasalahan  biologi pada berbagai tingkat organisasi kehidupan (molekul, sel, jaringan, organ, individu, populasi, ekosistem, dan bioma)\r\n'),
(4, 'X/I', 'Bahasa Inggris', 'Memahami  makna  dalam percakapan transaksional ', 'Merespon makna yang terdapat dalam percakapan transaksional (to get things done) dan interpersonal (bersosialisasi) resmi dan tak resmi yang menggunakan ragam bahasa lisan sederhana secara akurat, lancar dan berterima dalam konteks kehidupan sehari-hari dan melibatkan tindak tutur: berkenalan, bertemu/berpisah, menyetujui ajakan/tawaran/ undangan, menerima janji, dan membatalkan janji'),
(5, 'X/I', 'Bahasa Indonesia', 'Memahami siaran atau cerita yang disampaikan <br>', 'Menanggapi siaran atau informasi dari  media  elektronik (berita dan nonberita)  \r\nMengidentifikasi unsur sastra (intrinsik dan ekstrinsik)  suatu cerita yang disampaikan secara  langsung/melalui rekaman   \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `non_akademik`
--

CREATE TABLE IF NOT EXISTS `non_akademik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text COLLATE latin1_general_ci NOT NULL,
  `isi` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `non_akademik`
--

INSERT INTO `non_akademik` (`id`, `judul`, `isi`) VALUES
(1, 'Daftar Pengurus OSIS Madrasah Aliah Negeri (MAN) 2 Kota Bengkulu', '<p>\r\nPENGURUS OSIS MAN 2 KOTA BENGKULU\r\n</p>\r\n<p>\r\n&nbsp;Penanggung Jawab : Dra. Miswati Natalia, MM \r\n</p>\r\n<p>\r\nPembina&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Andang Hamza S.Pd\r\n</p>\r\n<p>\r\nKetua&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Siti Aliyah\r\n</p>\r\n<p>\r\nWakil Ketua &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Meri Yumiati S.Pd\r\n</p>\r\n<p>\r\nSekretaris &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :Sri Wilujeng S.Pd \r\n</p>\r\n<p>\r\nBANDAHARA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :Yusminiart S.Pdi\r\n</p>\r\n<p>\r\n&nbsp;\r\n</p>\r\n<p>\r\nKoordinator&nbsp; Seksi 1 : Bet Sari Anita\r\n</p>\r\n<p>\r\nAnggota&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 1. andi Sanjaya\r\n</p>\r\n<p>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Andika Pratama\r\n</p>\r\n<p>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. Heri Irawan\r\n</p>\r\n<p>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. Muslim</p>'),
(2, 'Program Kerja OSIS Madrasah Aliah Negeri (MAN) 2 Kota Bengkulu', '<p>\r\nPENUNGURUS OSIS MAN 2 KOTA BENGKULU\r\n</p>\r\n<p>\r\nKETUA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : BUDI SANJAYA\r\n</p>\r\n<p>\r\nWAKIL KETUA : SONIA WIDIWATI\r\n</p>\r\n<p>\r\nSEKRETARIS&nbsp;&nbsp; : ANGGUN TRI\r\n</p>\r\n<p>\r\nBANDAHARA&nbsp;&nbsp; : ANIS ASTUTI \r\n</p>\r\n'),
(3, 'Daftar Ekstrakurikuler Madrasah Aliah Negeri (MAN) 2 Kota Bengkulu', 'Bidang Keorganisasian meliputi OSIS;<br />\r\nDrumband;<br />\r\nBidang Keagamaan (Intensif Al Qur&rsquo;an, Tilawah Al Qur&rsquo;an dan Rohis);<br />\r\nBidang Bela Negara (Pasukan Pengibar Bendera/PASKIBRA) dan Pramuka;<br />\r\nBidang Ilmu Pengetahuan dan Teknologi (Komputer &amp; dan Science Club);<br />\r\nBidang Kesehatan (UKS &amp; PMR);<br />\r\nBidang Seni (Nasyid);<br />\r\nBidang Bahasa (Arabic Club &amp; English Club);<br />\r\nBidang Olahraga (Basket, Volly Ball, Bulu Tangkis, Atletik, Tenis Meja, Karate, &amp; Pencak Silat);<br />\r\nMadu Pala (MAN 2 Pencinta Alam)<br />\r\nProgram bimbingan dan konseling yang dilakukan oleh konselor sekolah dan\r\ndibantu ooleh guru, dengan menerapkan guru asuh yang masing-masing \r\nmembimbing 5 orang anak sebagai pengganti orang tua siswa selama di \r\nsekolah.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `page_content` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_title`, `page_content`) VALUES
(1, 'Sambutan Kepala Madrasah Aliah Negeri (MAN) 2 Kota Bengkulu', '<font color="#CC0000">Sambutan Kepala Sekolah</font><div><font class="Apple-style-span" color="#CC0000"><br></font><div style="text-align: justify;">Puji Syukur kita panjatkan Kehdirat ALlah SWT, berkat rahmat dan hidayah-Nya, website MAN 2 Kota Bengkulu telah selesai dibuat. Dengan selesainya website ini, diharapkan kemajuan dan perkembangan MAN 2 Kota Bengkulu lebih optimal dan maksima.&nbsp;</div><div style="text-align: justify;"><br></div><div style="text-align: justify;">Website Madrasah Negeri 2 (MAN) 2 Kota Bengkulu dirancang dalam upaya untuk penyebaran akses informasi dan komunikasi kepada peserta didik, guru, masyarakat dan stokholder lainnya dalam upaya menuju sekolah unggulan di Provinsi Bengkulu.</div></div><div style="text-align: justify;"><br></div><div style="text-align: justify;">Bengkulu, Mei 2014</div><div style="text-align: justify;">Kepala MAN 2 Kota Bengkulu..</div><div style="text-align: justify;"><br></div><div style="text-align: justify;"><br></div><div style="text-align: justify;"><br></div><div style="text-align: justify;"><br></div><div style="text-align: justify;">Dra. Hj. Miswati Natalia, MM</div>'),
(2, 'Visi-Misi Madrasah Aliah Negeri (MAN) 2 Kota Bengkulu', 'Ini contoh adalah tejshjfdshaskf<br>afagfsaf.as<br>gjdkgjkjgdjg dgjhfgs skdhgsgkjsg sghskhgksgsk khsjgskjgksk sgjshgjsg<br>gsjgkjsgjsgsk gksjgsgskgs kjgskgskgsk kjgsgkjs<br>'),
(3, 'Sejarah Madrasah Aliah Negeri (MAN) 2 Kota Bengkulu', 'iman dan taqwa<br>\r\nMeningkatkan keprofesionalisme guru<br>\r\nMeningkatkan kualitas dan kuantitas sumber belajar<br>\r\nMeningkatkan kualitas pelayanan administrasi<br>\r\nMeningkatkan kualitas kesehatan jasmani, dan rohani serta penampilan (performance)<br>\r\nMeningkatkan kualitas dan kuantitas kegiatan pembiasaan diri <br>\r\nMenciptakan lingkungan yang nyaman dan menyenangkan<br>\r\nMenetapkan Mengembangkan pembelajaran berbasis lingkungan hidup, standar pelayanan minimal dan hasil minimal<br>\r\nMengembangkan metode pembelajaran yang berbasis kebutuhan.<br>\r\nMeningkatkan motivasi dalam prestasi kerja<br>\r\nMenjalin kerjasama dengan lembaga dan masyarakat'),
(4, 'Kontak Kami - Hubungi Kami Di Alamat Berikut', '<p>\r\n<em>XSed mollis leo nec est tempor interdum et vulputate orci. Integer in erat nibh, nec volutpat nunc. Aliquam in congue ligula.</em>\r\n</p>\r\n<p>\r\n Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan.Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan.\r\n</p>\r\n<p>\r\n Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan.Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan.\r\n</p>\r\n<p>\r\n Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan.Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan.\r\n</p>\r\n<p>\r\n Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan.Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan.\r\n</p>\r\n<p>\r\n Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan.Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan.X\r\n</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `siswa_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `siswa_tmp_lahir` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `siswa_tgl_lahir` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `siswa_jk` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `siswa_alamat` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `siswa_photo` varchar(250) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `siswa_name`, `siswa_tmp_lahir`, `siswa_tgl_lahir`, `siswa_jk`, `siswa_alamat`, `siswa_photo`) VALUES
('5377777', 'putri', 'Bengkulu,', '10-06-1966', 'Laki-laki', 'jl.Perum padan Kemiling', '56Got It ^^009.jpg'),
('9962425909', 'abstrax amanutullah', 'Bengkulu', '10-06-1966', 'Laki-laki', 'jl.Perum padan Kemiling', '84Abstrax Amanatullah.JPG'),
('9962425910', 'achamad yodho pratama', 'Bengkulu', '23-10-1996', 'Laki-laki', 'Ds. Kayu Arang Kec.sukaraja', '52Achmad Yudho Pratama.JPG'),
('9962425911', 'anggi dewi', 'Bengkulu,', '10-06-1966', 'Perempuan', 'jl.Perum Kemiling Permai', '6Anggi Dwi Saputri.JPG'),
('9962425912', 'Ayu nadia Lestari', 'Bengkulu', '23-10-1996', 'Perempuan', 'Koplek MAn2 Kota Bengkulu', '25Ayu Nidea Lestari.JPG'),
('9962425913', 'Bet Sri Anita Sari', 'Bengkulu,', '02-061-1996', 'Perempuan', 'jl.salak 03', '77Bet Sri Anita Sari.JPG'),
('9962425918', 'hasunudin..', 'Bengkulu', '02-061-1996', 'Laki-laki', 'jl.Perum padan Kemiling', '56');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE IF NOT EXISTS `struktur` (
  `struktur_title` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `struktur` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`struktur_title`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`struktur_title`, `struktur`) VALUES
('Struktur Organisasi Madrasah Aliah Negeri (MAN) 2 Kota Bengkulu', 'struktur.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE IF NOT EXISTS `tamu` (
  `id_tamu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tamu` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email_tamu` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `alamat_tamu` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `judul_pesan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_tamu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama_tamu`, `email_tamu`, `alamat_tamu`, `judul_pesan`, `pesan`) VALUES
(1, 'Tester', 'tester@web.com', 'Worldwide', 'Testing', 'Testing message !'),
(3, 'Budi', 'budi@web.or.id', 'Bengkulu', 'Judul Pesan', 'Ini isi pesan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
