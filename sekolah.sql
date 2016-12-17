-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2012 at 06:32 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', '21232f297a57a5a74389');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `acara` varchar(200) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `tanggal`, `acara`, `kegiatan`) VALUES
(4, '2012-03-30', 'peresmian kelas', 'makan makan'),
(5, '2012-03-30', 'perpisahan kelas 3`', 'makan makan'),
(6, '2012-03-30', 'perpisahan kelas 3`', 'makan makan'),
(7, '2012-03-30', 'perpisahan kelas 3`', 'makan makan'),
(8, '2012-03-30', 'perpisahan kelas 3`', 'makan makan'),
(9, '2012-03-30', 'perpisahan kelas 3`', 'makan makan'),
(10, '2012-03-30', 'perpisahan kelas 3`', 'makan makan');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `id_alumni` int(11) NOT NULL AUTO_INCREMENT,
  `nama_alumni` varchar(20) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id_alumni`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `nama_alumni`, `angkatan`, `email`) VALUES
(12, 'bejo', 1995, 'bejo@gmail.com'),
(13, 'bejo', 1995, 'bejo@gmail.com'),
(14, 'bejo', 1995, 'bejo@gmail.com'),
(15, 'bejo', 1995, 'bejo@gmail.com'),
(16, 'bejo', 1995, 'bejo@gmail.com'),
(17, 'bejo', 1995, 'bejo@gmail.com'),
(18, 'bejo', 1995, 'bejo@gmail.com'),
(19, 'bejo', 1995, 'bejo@gmail.com'),
(20, 'bejo', 1995, 'bejo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `title_artikel` varchar(100) NOT NULL,
  `note_artikel` varchar(200) NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `title_artikel`, `note_artikel`) VALUES
(17, 'Cara Jitu Menumbuhkan Semangat Belajar Pada Anak', 'Nah, ini adalah tema yang sering ditunggu tunggu oleh orangtua dan juga sering banyak dikeluhkan orangtua. Kenapa anak saya ngga senang belajar, maen aja seharian, keluh seorang Ibu yang hadir disem'),
(18, 'Proses Pembentukan Karakter Pada Anak', 'Karakter tidak dapat dibentuk dengan cara mudah dan murah. Dengan mengalami ujian dan penderitaan jiwa karakter dikuatkan, visi dijernihkan, dan sukses diraih ~ Helen Keller Suatu hari seorang anak la'),
(19, 'Proses Pembentukan Karakter Pada Anak', 'Karakter tidak dapat dibentuk dengan cara mudah dan murah. Dengan mengalami ujian dan penderitaan jiwa karakter dikuatkan, visi dijernihkan, dan sukses diraih ~ Helen Keller Suatu hari seorang anak la'),
(20, 'Proses Pembentukan Karakter Pada Anak', 'Karakter tidak dapat dibentuk dengan cara mudah dan murah. Dengan mengalami ujian dan penderitaan jiwa karakter dikuatkan, visi dijernihkan, dan sukses diraih ~ Helen Keller Suatu hari seorang anak la'),
(21, 'Proses Pembentukan Karakter Pada Anak', 'Karakter tidak dapat dibentuk dengan cara mudah dan murah. Dengan mengalami ujian dan penderitaan jiwa karakter dikuatkan, visi dijernihkan, dan sukses diraih ~ Helen Keller Suatu hari seorang anak la'),
(22, 'Proses Pembentukan Karakter Pada Anak', 'Karakter tidak dapat dibentuk dengan cara mudah dan murah. Dengan mengalami ujian dan penderitaan jiwa karakter dikuatkan, visi dijernihkan, dan sukses diraih ~ Helen Keller Suatu hari seorang anak la');

-- --------------------------------------------------------

--
-- Table structure for table `fullpost`
--

CREATE TABLE IF NOT EXISTS `fullpost` (
  `id_full` int(11) NOT NULL AUTO_INCREMENT,
  `title_posting` varchar(225) NOT NULL,
  `note_posting` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_full`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `fullpost`
--

INSERT INTO `fullpost` (`id_full`, `title_posting`, `note_posting`) VALUES
(2, 'Minta Maaf pada Jurnalis, Ibra Kirim 19 Mawar', '“What the f*** are you looking at?” demikian kata-kata kasar yang terlontar dari mulut striker internasional Swedia itu. Insiden ini terjadi sesaat setelah Milan mengandaskan Lecce 2-0 di Stadion Giuseppe Meazza, Minggu 11 Maret 2012.\nKubu Milan langsung bertindak cepat terkait insiden tersebut. Pihak Rossoneri mengeluarkan pernyataan bahwa masalah ini telah selesai dan telah ada klarifikasi lewat sambungan telepon. Meskipun demikian sampai saat ini belum ada permintaan maaf langsung dari mulut Ibra.\nWakil Presiden AC Milan, Adriano Galliani ikut bertindak atas insiden ini. Kabarnya dia akan mengirimkan 19 mawar pada Spadini sebagai simbol permohonan maaf atas tindakan Ibra.\n“Galliani telah memastikan akan mengirimkan jurnalis Sky dengan 19 mawar, satu untuk masing-masing gol Ibra di Serie A,” demikian pernyataan dari calcioline.com.\nIbra memang telah mencetak 19 gol di Serie A musim ini. Pemain internasional Swedia ini mencetak 19 gol dari 21 penampilan.'),
(3, 'Ronaldinho Kesulitan Dapat Pacar', '“Saya sulit dapat pacar karena segala yang saya lakukan menjadi berita. Saya tak akan pernah berhenti menjalani hidup saya karena orang-orang selalu berbicara, namun terkadang mereka mengganggu,” kata Ronaldinho pada Globo TV''s ''Mais Voce''.\n“Orang-orang ingin kehidupan yang normal. Saya mencoba untuk berhati-hati, namun tak bisa. Setelah penemuan kamera ponsel ...” lanjut pemain yang kini memperkuat klub Brasil, Flamengo ini.\nMeskipun tertarik untuk mendapatkan pacar, Ronaldinho ternyata belum ingin segera menikah.\n“Saya terlalu gila untuk menikah,” kata Ronaldinho.\n“Saya rasa saya butuh pensiun terlebih dahulu, saya masih punya waktu. Meskipun saya ingin menikah, saya juga menyukai kehidupan tunggal, tak harus menyenangkan banyak orang,” lanjut pemain 31 tahun ini.\nRonaldinho masih menjadi bagian timnas Brasil yang dilatih Mano Menezes. Dia sudah tampil 94 kali bersama tim Samba dan mencetak 33 gol.'),
(4, 'Torres Kena Ejek di Pelelangan Amal Drogba', 'Dalam pelelangan yang diprakarsai Yayasan Didier Drogba di Hotel Dorchester, London, Inggris, Sabtu 10 Maret lalu, salah satu yang dilelang paket coaching clinic bersama Drogba. Paket tersebut akhirnya laku terjual £15 ribu (setara Rp214 juta).\n\nThe Sun melansir, Senin 12 Maret 2012, pembeli paket coaching clinic itu adalah seorang pengusaha di London yang tidak disebutkan namanya. Ketika naik ke atas panggung untuk menerima tanda paket coaching clinic dari Drogba, sang pengusaha tersebut mengeluarkan ejekan untuk Fernando Torres.\n\n"Saya akan memberi paket coaching clinic ini untuk Fernando Torres," teriak sang pengusaha. Para tamu undangan pun tertawa mendengar hal tersebut. Sedangkan Drogba berusaha mempertahankan wajah serius.\n\nSang pengusaha tersebut berusaha mencibir Torres dengan menyarankan agar dia  latihan mencetak gol bersama Drogba. Maklum, ketajaman Torres menurun drastis sejak dibeli dari Liverpool dengan rekor transfer £50 juta (setara Rp741 miliar) dari Liverpool pada pe'),
(5, 'Sebulan Dibeli, Lamborghini Ronaldo Mogok', 'Lamborghini Aventador berwarna hitam tersebut dibeli Ronaldo seharga £200 ribu (Rp2,9 miliar) saat merayakan ulang tahunnya ke-27 pada 5 Februari lalu. Sayang, baru sebulan digunakan, mobil tersebut sudah rusak.\n\nKetika Ronaldo ingin menghadiri pesta ulang tahun Pepe, Rabu 7 Maret 2012 malam waktu setempat, mobil Lamborghini milik CR7 mogok di tengah jalan kota Madrid. Para pejalan kaki mengira Ronaldo kena tilang karena parkir sembarangan. \n\nRonaldo kemudian menghubungi mekanik untuk mengetahui masalahnya. Setelah mengetahui mobil Lamborghini tersebut tidak bisa jalan, Daily Mail melansir, Ronaldo dengan wajah kesal kemudian menghentikan sebuah taksi untuk menuju tempat pesta ulang tahun Pepe.\n\nStriker 27 tahun tersebut kemudian memerintahkan asistennya untuk menjaga mobil sport yang mampu dipacu 100 km per jam dalam waktu 2,9 detik tersebut hingga mobil pengangkut bengkel datang.'),
(6, 'brow', 'brow'),
(7, 'Kulit Buatan yang Tetap Bisa Rasakan Sentuhan', 'Peneliti dari Stanford University, AS, membuat sensor kulit buatan dinamakan super skin yang bisa digunakan untuk robot sehingga memiliki kemampuan untuk merasakan sentuhan.\n\n"Sensor ini bisa merasakan tekanan dari cubitan ringan oleh jempol dan telunjuk hingga dua kali tekanan yang dihasilkan oleh gajah yang berdiri dengan satu kaki," kata Darren Lipomi, peneliti postdoctoral di Lab Bao, Stanford University, seperti dikutip situs Physorg, Senin (24/10/2011).\n\nKulit super bisa ditarik hingga dua kali panjang dan dikembalikan lagi tanpa rusak. Bagian dalam kulit itu terdiri atas nanotube berbahan karbon serupa rambut yang bisa merasakan sentuhan. Nanotube pada dasarnya adalah susunan atom karbon yang membentuk tabung. Ada selapis susunan atom karbon yang terbentuk di bagian luar tabung nano itu.\n\nNanotube yang terdapat di dalam kulit buatan itu bersifat sangat konduktif. Nanotube ini bisa mengirim sinyal listrik yang bisa dikirim ke "otak" robot. Dalam proses pembuatan kulit super ini, '),
(8, 'Virus Terbesar di Dunia Ditemukan', 'Ilmuwan dikejutkan oleh penemuan virus terbesar di dunia di wilayah lepas pantai Chile. Virus ini memiliki lebih dari 1000 genome, demikian papar ilmuwan pada AFP, Senin (10/10/2011). Virus jenis baru tersebut dinamakan Megavirus chilensis, berdasarkan ukuran dan tempat penemuannya. Genome virus ini 6,5% lebih besar dari kode DNA virus terbesar sebelumnya, Mimivirus, yang diisolasi tahun 2003.\n\nSecara teori, Virus berbeda dengan bakteri karena lebih kecil dan tak bisa bereproduksi tanpa inang makhluk hidup. Tapi, ukuran virus jenis baru ini lebih besar dari bakteri dan merupakan virus DNA terkompleks.Virus ini diisolasi dari sampel air laut di wilayah lepas pantai Las Cruses, Chile. Sampai saat ini, belum diketahui makhluk hidup yang menjadi inang virus ini.\n\n"M. chilensis tampaknya tidak berbahaya bagi manusia," kata Jean Michel Claverie, peneliti dari National Centre for Scientific Research (CNRS) di Perancis yang terlibat penelitian ini.Karena ukurannya besar, maka untuk melihat vir'),
(9, '14.000 Bintang Baru Terdeteksi', 'lmuwan NASA berhasil mendeteksi citra detail wilayah pembentukan bintang baru yang berjarak sangat jauh dari Bumi. Citra menakjubkan itu diambil dengan Chandra X Ray Observatory.\n\nBerdasarkan publikasi Daily Mail, Minggu (16/10/2011), citra tersebut menunjukkan Nebula Carina, area lengan Sagitarius-Carina Bimasakti, di mana menjadi tempat kelahiran bintang-bintang baru. Sejauh ini, 14.000 bintang telah terdeteksi di area yang berjarak 7.500 juta tahun cahaya dari Bumi itu.\n\nSetelah dianalisis, ilmuwan percaya bahwa beberapa bintang raksasa yang ada telah hancur dalam ledakan supernova. Mereka mengetahuinya dari pengurangan sinar X yang terjadi di gugusan utara yang disebut Trumpler 15.\n\nDeteksi kemungkinan adanya 6 bintang neutron, yang bagian inti padatnya tersisa setelah ledakan supernova, menambah bukti bahwa aktivitas supernova meningkat di Carina. Sebelumnya, hanya ditemukan 1 bintang baru di Carina.'),
(10, 'Fosil Kumbang Berwarna dari Zaman Dinosaurus', 'Fosil biasa ditemukan dalam rupa hitam putih. Namun kali ini, ilmuwan berhasil menemukan fosil kumbang prasejarah yang berwarna metalik cerah. Penemuan ini dipublikasikan di jurnal Proceeding of the Royal Society B dan membuktikan bahwa dunia non burung pada masa dinosaurus merupakan dunia yang penuh warna warni.\n\n"Hasil studi kami menunjukkan bahwa fosil kumbang ini berubah selama proses fosilisasi. Warna berubah menuju warna merah, tak total, tapi cukup untuk membuat warna biru menjadi tampak hijau dan warna kuning tampak oranye," kata Maria McNamara, pimpinan penelitian ini.\n\nWarna fosil kumbang yang kuning, hijau, biru, merah dan metalik terkait dengan warna struktural, artinya warna dihasilkan oleh interferensi cahaya. Lapisan kutikula yang memiliki ketebalan sepersejuta meter menyebabkan beberapa spektruk warna diserap dan cahaya dibengkokkan sehingga terbentuk warna-warna tersebut.\n\nPeneliti menduga ada dua sebab berubahnya warna fosil kumbang selama fosilisasi. Pertama karena b'),
(11, 'aaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `pelajaran` text NOT NULL,
  `jabatan` text NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama`, `pelajaran`, `jabatan`) VALUES
(25, 'aa5', 'tedi', 'matematika', 'guru'),
(26, 'aa6', 'sinta', 'bahasa inggris', 'guru'),
(24, 'aa4', 'tono', 'bahasa indonesia', 'guru'),
(23, 'aa3', 'ahmad', 'olahraga', 'guru'),
(22, 'aa2', 'yeni', 'ips', 'guru'),
(21, 'aa1', 'dedi', 'matematika', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id_posting` int(11) NOT NULL AUTO_INCREMENT,
  `title_posting` varchar(200) NOT NULL,
  `note_posting` varchar(225) NOT NULL,
  PRIMARY KEY (`id_posting`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id_posting`, `title_posting`, `note_posting`) VALUES
(20, 'Kulit Buatan yang Tetap Bisa Rasakan Sentuhan', 'Peneliti dari Stanford University, AS, membuat sensor kulit buatan dinamakan super skin yang bisa digunakan untuk robot sehingga memiliki kemampuan untuk merasakan sentuhan.\n\n"Sensor ini bisa merasakan tekanan dari cubitan ri'),
(21, 'Virus Terbesar di Dunia Ditemukan', 'Ilmuwan dikejutkan oleh penemuan virus terbesar di dunia di wilayah lepas pantai Chile. Virus ini memiliki lebih dari 1000 genome, demikian papar ilmuwan pada AFP, Senin (10/10/2011). Virus jenis baru tersebut dinamakan Megav'),
(22, '14.000 Bintang Baru Terdeteksi', 'lmuwan NASA berhasil mendeteksi citra detail wilayah pembentukan bintang baru yang berjarak sangat jauh dari Bumi. Citra menakjubkan itu diambil dengan Chandra X Ray Observatory.\n\nBerdasarkan publikasi Daily Mail, Minggu (16/'),
(23, 'Fosil Kumbang Berwarna dari Zaman Dinosaurus', 'Fosil biasa ditemukan dalam rupa hitam putih. Namun kali ini, ilmuwan berhasil menemukan fosil kumbang prasejarah yang berwarna metalik cerah. Penemuan ini dipublikasikan di jurnal Proceeding of the Royal Society B dan membuk'),
(24, 'aaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `infosekolah`
--

CREATE TABLE IF NOT EXISTS `infosekolah` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `title_info` varchar(100) NOT NULL,
  `note_info` varchar(200) NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `infosekolah`
--

INSERT INTO `infosekolah` (`id_info`, `title_info`, `note_info`) VALUES
(4, 'Balotelli dan Kekasihnya Akhirnya Buka Mulut', 'Balotelli terkena denda gaji selama dua pekan (250 ribu Pound atau sekitar Rp3,6 miliar) karena memutuskan untuk keluar rumah pada Jumat dini hari, padahal harus berlaga pada hari Sabtu.\n\nMeski tetap '),
(6, 'Kiper MU Meditasi Lewat Masak', 'Lindegaard mengalami cedera engkel saat menjalani latihan pada 30 Januari lalu. Padahal kiper 27 tahun ini sedang mendapat kepercayaan dari manajer MU, Sir Alex Ferguson.\n\nAbsen sebulan jelas mengecew'),
(7, 'Ashley Cole Sewakan Rumah ke Gangster', 'Adams sempat tinggal di salah satu properti milik Cole di daerah Barnet, London Utara. Gangster 57 tahun itu tinggal selama 17 bulan di rumah tersebut usai menjalani masa tahanan tujuh tahun, karena p'),
(8, 'Ferguson: Ferdinand ''Pencipta'' Twitter', 'Ferdinand memang dikenal sebagai salah satu pesepakbola papan atas dunia yang aktif memainkan Twitter. Bek 33 tahun tersebut sering menggunakan akun resmi @RioFerdy5 miliknya untuk menyampaikan inform'),
(9, 'Ashley Cole Sewakan Rumah ke Gangster', 'Adams sempat tinggal di salah satu properti milik Cole di daerah Barnet, London Utara. Gangster 57 tahun itu tinggal selama 17 bulan di rumah tersebut usai menjalani masa tahanan tujuh tahun, karena p');

-- --------------------------------------------------------

--
-- Table structure for table `materiajar`
--

CREATE TABLE IF NOT EXISTS `materiajar` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `title_materiajar` varchar(100) NOT NULL,
  `note_materiajar` varchar(200) NOT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `materiajar`
--

INSERT INTO `materiajar` (`id_materi`, `title_materiajar`, `note_materiajar`) VALUES
(5, 'Messi Cetak Gol Cantik, Barca Bungkam Sevilla', 'Barca membuka keunggulan pada menit 19. Tendangan bebas Xavi meluncur dengan indah ke gawang Sevilla yang dikawal Andres Palop.\nLionel Messi menggandakan keunggulan Barca pada menit 25. Dengan jenius,'),
(6, 'Messi Bangga Dipuji Rooney Setinggi Langit', 'Messi tampil memukau saat Barca menghancurkan Bayer Leverkusen 7-1, awal bulan ini. Messi mencetak lima gol sekaligus di laga tersebut. Melalui akun twitter-nya, Rooney memuji Messi sebagai pemain ter');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `firstname`, `lastname`, `username`, `password`, `email`) VALUES
(1, 'firstname', 'lastname', 'username', 'password', 'email'),
(2, 'cristiano', 'on', 'ondoel', 'cda2c99fbf5e19f20d33', 'cristiano_ondoel@yah'),
(3, 'ondoel', 'ondoel', 'ondoel', '12b0bf7879467888a92a', 'cristiano_ondoel@yah'),
(4, 'cristiano', 'ondoel', 'ondoel', '202cb962ac59075b964b', 'cristiano_ondoel@yah'),
(5, 'ondoel', 'crot', 'ondoel', '202cb962ac59075b964b', 'cristiano_ondoel@yah');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE IF NOT EXISTS `prestasi` (
  `id_prestasi` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(200) NOT NULL,
  `tingkat` varchar(50) NOT NULL,
  `pelaksana` varchar(200) NOT NULL,
  PRIMARY KEY (`id_prestasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `jenis`, `tingkat`, `pelaksana`) VALUES
(4, 'lomba karya ilmiah', 'nasional', 'depdiknas'),
(5, 'lomba makan', 'kabupaten', 'depdiknas'),
(6, 'lomba cerdas cermat', 'propinsi', 'depdiknas'),
(7, 'lomba cerdas cermat', 'propinsi', 'depdiknas'),
(8, 'lomba cerdas cermat', 'propinsi', 'depdiknas'),
(9, 'lomba cerdas cermat', 'propinsi', 'depdiknas'),
(10, 'lomba cerdas cermat', 'propinsi', 'depdiknas'),
(11, 'lomba cerdas cermat', 'propinsi', 'depdiknas');

-- --------------------------------------------------------

--
-- Table structure for table `silabus`
--

CREATE TABLE IF NOT EXISTS `silabus` (
  `id_silabus` int(11) NOT NULL AUTO_INCREMENT,
  `note_silabus` varchar(300) NOT NULL,
  PRIMARY KEY (`id_silabus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `silabus`
--

INSERT INTO `silabus` (`id_silabus`, `note_silabus`) VALUES
(23, 'silabus kurikulum tingkat satuan pendidikan teknologi informasi'),
(24, 'silabus kurikulum tingkat satuan pendidikan teknologi informasi'),
(25, 'silabus kurikulum tingkat satuan pendidikan sejarah'),
(26, 'silabus kurikulum tingkat satuan pendidikan olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `kelas` varchar(20) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama`, `kelas`) VALUES
(9, 'a1', 'dodo', 'XI IA 1'),
(10, 'a1', 'dodo', 'XI IA 1'),
(11, 'a1', 'dodo', 'XI IA 1'),
(12, 'a1', 'dodo', 'XI IA 1'),
(13, 'a1', 'dodo', 'XI IA 1'),
(14, 'a1', 'dodo', 'XI IA 1'),
(15, 'a1', 'dodo', 'XI IA 1'),
(16, 'a1', 'dodo', 'XI IA 1'),
(17, 'a1', 'dodo', 'XI IA 1'),
(18, 'aaaa', 'aaaaaaaaaa', 'XI IA 1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `group` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `group`) VALUES
(1, 'Cecep Yusuf', 'cheyuz', '45a3bfc9f0bc5f26b303d6bf0c30797b', 'admin'),
(2, 'Ayu Dwi S', 'ayue', 'f7e1b1a69ac6c1f4fa7e2fbfdd17079a', 'operator');
