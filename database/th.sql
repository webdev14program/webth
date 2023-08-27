-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 11:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `th`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `angkatan` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `nama`, `jurusan`, `angkatan`) VALUES
(176474, 'Adelia Nur Aftianti', 'Akutansi', '2019/202'),
(176475, 'Adetia Mutmandari', 'Akutansi', '2019/202'),
(176476, 'Aisyah', 'Akutansi', '2019/202'),
(176477, 'Alfania Buchari', 'Akutansi', '2019/202'),
(176478, 'Ana Althafun Nisa', 'Akutansi', '2019/202'),
(176480, 'Anggrih Priyatna', 'Akutansi', '2019/202'),
(176481, 'Anisa Nabila', 'Akutansi', '2019/202'),
(176482, 'Aqmal Fahroni', 'Akutansi', '2019/202'),
(176483, 'Aulia Nanda Cholizah', 'Akutansi', '2019/202'),
(176484, 'Aulia Nur Hidayati', 'Akutansi', '2019/202'),
(176485, 'Ayu Aliyah Salsyabilah', 'Akutansi', '2019/202'),
(176486, 'Ayu Enggar Purnama Sari', 'Akutansi', '2019/202'),
(176487, 'Ayu Safitri', 'Akutansi', '2019/202'),
(176488, 'Bayu Prasetyo', 'Akutansi', '2019/202'),
(176489, 'Bela Vebiana', 'Akutansi', '2019/202'),
(176490, 'Candra Haryanto', 'Akutansi', '2019/202'),
(176492, 'Danu Ismanto', 'Akutansi', '2019/202'),
(176493, 'Desti Sulistia', 'Akutansi', '2019/202'),
(176494, 'Desy Fitri Yani', 'Akutansi', '2019/202'),
(176495, 'Devi Nur Elita', 'Akutansi', '2019/202'),
(176496, 'Devi Oktaviana', 'Akutansi', '2019/202'),
(176497, 'Dewi Rafika Isnayah', 'Akutansi', '2019/202'),
(176498, 'Dika Dwi Saputra', 'Akutansi', '2019/202'),
(176499, 'Dilla Novia Rahma', 'Akutansi', '2019/202'),
(176500, 'Fauzia Jamia Mia', 'Akutansi', '2019/202'),
(176501, 'Febiyanti Putri Andini', 'Akutansi', '2019/202'),
(176502, 'Hajah Hadijah Sofiah', 'Akutansi', '2019/202'),
(176503, 'Herlina Suciyanti', 'Akutansi', '2019/202'),
(176504, 'Hervina Julia Mega', 'Akutansi', '2019/202'),
(176505, 'Hilda Kurniati', 'Akutansi', '2019/202'),
(176506, 'Hurqur\'anun Wahyuni', 'Akutansi', '2019/202'),
(176507, 'Jefry Ariyanto', 'Akutansi', '2019/202'),
(176508, 'Jenny Ika Susanti', 'Akutansi', '2019/202'),
(176509, 'Meisya Silviana', 'Akutansi', '2019/202'),
(176510, 'Mokh Rifaldi Andrian Saputra', 'Akutansi', '2019/202'),
(176512, 'Nabilah Khalim', 'Akutansi', '2019/202'),
(176513, 'Nani', 'Akutansi', '2019/202'),
(176514, 'Ni Putu Erica Anggreani', 'Akutansi', '2019/202'),
(176515, 'Nikita Inryani Taneo', 'Akutansi', '2019/202'),
(176516, 'Novia Dyah Ayu Pertiwi', 'Akutansi', '2019/202'),
(176517, 'Nur Atifah', 'Akutansi', '2019/202'),
(176518, 'Nur Haliyah', 'Akutansi', '2019/202'),
(176520, 'Nuryanti', 'Akutansi', '2019/202'),
(176521, 'Oktavia', 'Akutansi', '2019/202'),
(176522, 'Oktavia Margareta', 'Akutansi', '2019/202'),
(176523, 'Pajar', 'Akutansi', '2019/202'),
(176524, 'Putri Adawiyah', 'Akutansi', '2019/202'),
(176525, 'Putri Maharani', 'Akutansi', '2019/202'),
(176526, 'Rafli Hendardi', 'Akutansi', '2019/202'),
(176527, 'Rani Kusuma', 'Akutansi', '2019/202'),
(176528, 'Ratu Amelia Putri', 'Akutansi', '2019/202'),
(176529, 'Restiyani', 'Akutansi', '2019/202'),
(176530, 'Ricki Prataman', 'Akutansi', '2019/202'),
(176531, 'Riska Andriani', 'Akutansi', '2019/202'),
(176532, 'Rizki Ramdani', 'Akutansi', '2019/202'),
(176533, 'Risti Ruslitina', 'Akutansi', '2019/202'),
(176534, 'Safitri Wulandari', 'Akutansi', '2019/202'),
(176535, 'Salmah Sadeli', 'Akutansi', '2019/202'),
(176536, 'Selia Rospika Suhaibah', 'Akutansi', '2019/202'),
(176537, 'Septi Nadila Putri', 'Akutansi', '2019/202'),
(176538, 'Setya Fani Usma Diana', 'Akutansi', '2019/202'),
(176539, 'Sherly Ekayani', 'Akutansi', '2019/202'),
(176540, 'Silfani', 'Akutansi', '2019/202'),
(176541, 'Sinta Dewi', 'Akutansi', '2019/202'),
(176542, 'Siska Maharani', 'Akutansi', '2019/202'),
(176543, 'Siti Anisah', 'Akutansi', '2019/202'),
(176544, 'Siti Holisoh', 'Akutansi', '2019/202'),
(176545, 'Siti Maria Ulfah', 'Akutansi', '2019/202'),
(176546, 'Siti Nurhamidah', 'Akutansi', '2019/202'),
(176547, 'Siti Nuraulia', 'Akutansi', '2019/202'),
(176548, 'Sri Herlina Yuliyanti', 'Akutansi', '2019/202'),
(176549, 'Sri Wahyuni', 'Akutansi', '2019/202'),
(176550, 'Sri Yunitawati', 'Akutansi', '2019/202'),
(176551, 'Suciati Nurhasanah', 'Akutansi', '2019/202'),
(176553, 'Tiasih Amri Amalia', 'Akutansi', '2019/202'),
(176554, 'Tri Kukuh Febriana', 'Akutansi', '2019/202'),
(176555, 'Vera Oktavia', 'Akutansi', '2019/202'),
(176556, 'Victor Pora Hera', 'Akutansi', '2019/202'),
(176557, 'Vika Septia Ningrum', 'Akutansi', '2019/202'),
(176558, 'Wilis Prabowo', 'Akutansi', '2019/202'),
(176560, 'Yeni Zanuba', 'Akutansi', '2019/202'),
(176561, 'Alika Aina Wardah', 'Administrasi Perkantoran', '2019/202'),
(176562, 'Amanda Citra', 'Administrasi Perkantoran', '2019/202'),
(176564, 'Ami Rahmawati', 'Administrasi Perkantoran', '2019/202'),
(176565, 'Anah', 'Administrasi Perkantoran', '2019/202'),
(176566, 'Ananda Irawati', 'Administrasi Perkantoran', '2019/202'),
(176567, 'Andika Fitri Satkasari', 'Administrasi Perkantoran', '2019/202'),
(176568, 'Anglina Dania Febriyanti', 'Administrasi Perkantoran', '2019/202'),
(176569, 'Annisa Nurkholifah', 'Administrasi Perkantoran', '2019/202'),
(176570, 'Anugrah Eni', 'Administrasi Perkantoran', '2019/202'),
(176571, 'Aprilia Dwi Putri', 'Administrasi Perkantoran', '2019/202'),
(176572, 'Arlita Eka Yanti', 'Administrasi Perkantoran', '2019/202'),
(176573, 'Ayu Ardiyanti', 'Administrasi Perkantoran', '2019/202'),
(176574, 'Chatherine Yan Jessica', 'Administrasi Perkantoran', '2019/202'),
(176575, 'Debi Sandiawati', 'Administrasi Perkantoran', '2019/202'),
(176576, 'Desi Sugiarti', 'Administrasi Perkantoran', '2019/202'),
(176577, 'Desria Fitria', 'Administrasi Perkantoran', '2019/202'),
(176578, 'Devi Amelia Pratiwi', 'Administrasi Perkantoran', '2019/202'),
(176579, 'Devi Yuliana', 'Administrasi Perkantoran', '2019/202'),
(176580, 'Dewi Partiwi', 'Administrasi Perkantoran', '2019/202'),
(176581, 'Dhea Apriliani', 'Administrasi Perkantoran', '2019/202'),
(176582, 'Dian Tarisa', 'Administrasi Perkantoran', '2019/202'),
(176584, 'Een Nuraeni', 'Administrasi Perkantoran', '2019/202'),
(176585, 'Elegi Regita Kintamani', 'Administrasi Perkantoran', '2019/202'),
(176586, 'Elsa Delia Veronika', 'Administrasi Perkantoran', '2019/202'),
(176587, 'Elsha Febrianti', 'Administrasi Perkantoran', '2019/202'),
(176588, 'Eva Rahmawati', 'Administrasi Perkantoran', '2019/202'),
(176589, 'Evy Rahimawati', 'Administrasi Perkantoran', '2019/202'),
(176590, 'Fitria Supriatna', 'Administrasi Perkantoran', '2019/202'),
(176591, 'Friska Octaviani', 'Administrasi Perkantoran', '2019/202'),
(176592, 'GITA EVA SAPUTRI', 'Administrasi Perkantoran', '2019/202'),
(176593, 'Griselda Louise Andelle Valencia Liem Valentine', 'Administrasi Perkantoran', '2019/202'),
(176594, 'Hana Sephiana Hamzah', 'Administrasi Perkantoran', '2019/202'),
(176595, 'Harum Ananda', 'Administrasi Perkantoran', '2019/202'),
(176596, 'Heni Ari Yanti', 'Administrasi Perkantoran', '2019/202'),
(176597, 'Imanuela Abigail Manao', 'Administrasi Perkantoran', '2019/202'),
(176598, 'Indri Afrilia', 'Administrasi Perkantoran', '2019/202'),
(176599, 'Ine Heryanti', 'Administrasi Perkantoran', '2019/202'),
(176600, 'Is Lestari', 'Administrasi Perkantoran', '2019/202'),
(176601, 'Jamila Tunisa', 'Administrasi Perkantoran', '2019/202'),
(176602, 'Jeni Nazwa Aulia Hamami', 'Administrasi Perkantoran', '2019/202'),
(176603, 'Jenny Vebriana', 'Administrasi Perkantoran', '2019/202'),
(176604, 'Jessica Aurelly', 'Administrasi Perkantoran', '2019/202'),
(176605, 'Julista Rismayanti', 'Administrasi Perkantoran', '2019/202'),
(176606, 'Kinanti', 'Administrasi Perkantoran', '2019/202'),
(176607, 'Lita Febiyanti', 'Administrasi Perkantoran', '2019/202'),
(176609, 'Miska Nurjanah', 'Administrasi Perkantoran', '2019/202'),
(176611, 'Nanda Khairunnisa', 'Administrasi Perkantoran', '2019/202'),
(176612, 'Nur Amalia', 'Administrasi Perkantoran', '2019/202'),
(176613, 'Parwanti Wahyu Saputri', 'Administrasi Perkantoran', '2019/202'),
(176614, 'Putri Anggraeni', 'Administrasi Perkantoran', '2019/202'),
(176615, 'Putri Shokhiqoh Apriliani', 'Administrasi Perkantoran', '2019/202'),
(176616, 'Rachma Noer Hidayah', 'Administrasi Perkantoran', '2019/202'),
(176617, 'Rahma', 'Administrasi Perkantoran', '2019/202'),
(176618, 'Rani Septiani', 'Administrasi Perkantoran', '2019/202'),
(176619, 'Ratih Wulandari', 'Administrasi Perkantoran', '2019/202'),
(176620, 'Reka Triyana Lestari', 'Administrasi Perkantoran', '2019/202'),
(176621, 'Reza Della Marlinda', 'Administrasi Perkantoran', '2019/202'),
(176622, 'Rietha Berliana Putri', 'Administrasi Perkantoran', '2019/202'),
(176623, 'Riska', 'Administrasi Perkantoran', '2019/202'),
(176624, 'Risma Prihatini', 'Administrasi Perkantoran', '2019/202'),
(176625, 'Santi Komala Sari', 'Administrasi Perkantoran', '2019/202'),
(176626, 'Selvira Amanda', 'Administrasi Perkantoran', '2019/202'),
(176628, 'Serly Dwi Jarwati', 'Administrasi Perkantoran', '2019/202'),
(176629, 'Sintiyah Apriyani', 'Administrasi Perkantoran', '2019/202'),
(176630, 'Siti Fahira Handayani', 'Administrasi Perkantoran', '2019/202'),
(176631, 'Siti Hana Mulyana', 'Administrasi Perkantoran', '2019/202'),
(176632, 'Siti Maesaroh', 'Administrasi Perkantoran', '2019/202'),
(176633, 'Siti Padilah', 'Administrasi Perkantoran', '2019/202'),
(176634, 'Sri Isnaeni', 'Administrasi Perkantoran', '2019/202'),
(176635, 'Suryani', 'Administrasi Perkantoran', '2019/202'),
(176636, 'Syifa Puspita Wardani', 'Administrasi Perkantoran', '2019/202'),
(176638, 'Tsalsa Yogi Istiqomah', 'Administrasi Perkantoran', '2019/202'),
(176639, 'Virda Yani', 'Administrasi Perkantoran', '2019/202'),
(176640, 'Wahdaniah Aprilliani', 'Administrasi Perkantoran', '2019/202'),
(176641, 'Windi Handayani', 'Administrasi Perkantoran', '2019/202'),
(176642, 'Wulan Aprilliyani', 'Administrasi Perkantoran', '2019/202'),
(176643, 'Yustika Mardila', 'Administrasi Perkantoran', '2019/202'),
(176644, 'Zahna Putri', 'Administrasi Perkantoran', '2019/202'),
(176645, 'Ade Lia', 'Pemasaran', '2019/202'),
(176646, 'Adhimas Sahid Purbokayun', 'Pemasaran', '2019/202'),
(176647, 'Adi Gunawan', 'Pemasaran', '2019/202'),
(176648, 'Adi Irvan Ramdani', 'Pemasaran', '2019/202'),
(176649, 'Aditya Hermawan', 'Pemasaran', '2019/202'),
(176650, 'Aftur Rizky Faddilah', 'Pemasaran', '2019/202'),
(176651, 'Agung Adhitya Rohman', 'Pemasaran', '2019/202'),
(176652, 'Agus Tamtomo', 'Pemasaran', '2019/202'),
(176653, 'Ahmad Fadhilah Rahman', 'Pemasaran', '2019/202'),
(176654, 'Ahmad Ramdani', 'Pemasaran', '2019/202'),
(176655, 'Alan Sanjaya', 'Pemasaran', '2019/202'),
(176656, 'Aldi Maulana', 'Pemasaran', '2019/202'),
(176657, 'Andika Iswayudhi', 'Pemasaran', '2019/202'),
(176658, 'Asep Maulana Hamzah', 'Pemasaran', '2019/202'),
(176659, 'Azizur Rochim', 'Pemasaran', '2019/202'),
(176660, 'Calista Sophie Yanti', 'Pemasaran', '2019/202'),
(176661, 'Candra Deni Saputra', 'Pemasaran', '2019/202'),
(176662, 'Carminah', 'Pemasaran', '2019/202'),
(176663, 'Cindy Aditya Wardana', 'Pemasaran', '2019/202'),
(176664, 'Dennis Junnorha', 'Pemasaran', '2019/202'),
(176666, 'Dina Hardiana', 'Pemasaran', '2019/202'),
(176667, 'Diva Virgiantoro', 'Pemasaran', '2019/202'),
(176668, 'Ela Pratiwi', 'Pemasaran', '2019/202'),
(176669, 'Fabyan Vigo Firmansyah', 'Pemasaran', '2019/202'),
(176670, 'Fadlun Khoirunisa', 'Pemasaran', '2019/202'),
(176671, 'Ferry Hermawan', 'Pemasaran', '2019/202'),
(176672, 'Gessa Maulana', 'Pemasaran', '2019/202'),
(176673, 'Hafid Abdullah', 'Pemasaran', '2019/202'),
(176675, 'Hidayat Nur Abi', 'Pemasaran', '2019/202'),
(176676, 'Horas Ekyn Suranta Purba', 'Pemasaran', '2019/202'),
(176677, 'Ika Riyanti', 'Pemasaran', '2019/202'),
(176678, 'Ilham Hanafi', 'Pemasaran', '2019/202'),
(176679, 'Ilham Maulana', 'Pemasaran', '2019/202'),
(176680, 'Irfan Efendi', 'Pemasaran', '2019/202'),
(176681, 'Johan', 'Pemasaran', '2019/202'),
(176682, 'Jonathan Frezialendra', 'Pemasaran', '2019/202'),
(176683, 'Karen Cendana Wangi Suton', 'Pemasaran', '2019/202'),
(176684, 'Laelatul Maghfiroh', 'Pemasaran', '2019/202'),
(176685, 'Lalita Febriyanti', 'Pemasaran', '2019/202'),
(176686, 'Larizki Setiawan', 'Pemasaran', '2019/202'),
(176687, 'Lilla Amelia Fitriyana', 'Pemasaran', '2019/202'),
(176688, 'Lutfi Kholis Fajar', 'Pemasaran', '2019/202'),
(176689, 'Marleza Anggraini Putri', 'Pemasaran', '2019/202'),
(176690, 'Maulydia Astuti', 'Pemasaran', '2019/202'),
(176692, 'Miftahul Ulum', 'Pemasaran', '2019/202'),
(176693, 'Moehamad Rizky Wijaya', 'Pemasaran', '2019/202'),
(176694, 'Mohamad Afan Fahrodzi', 'Pemasaran', '2019/202'),
(176695, 'Mohamad Faris Irwansyah', 'Pemasaran', '2019/202'),
(176696, 'Mohammad Risky Kusbianto', 'Pemasaran', '2019/202'),
(176697, 'Mohkhamad Pirmansyah', 'Pemasaran', '2019/202'),
(176698, 'Mugni Halim', 'Pemasaran', '2019/202'),
(176699, 'Muhamad Iqbal Fadhlullah', 'Pemasaran', '2019/202'),
(176700, 'Muhamad Nurdiansyah', 'Pemasaran', '2019/202'),
(176701, 'Muhammad Adam Ryad', 'Pemasaran', '2019/202'),
(176702, 'Muhammad Alfian', 'Pemasaran', '2019/202'),
(176703, 'Muhammad Rafly', 'Pemasaran', '2019/202'),
(176704, 'Nani Nuraini', 'Pemasaran', '2019/202'),
(176705, 'Nur Faizi', 'Pemasaran', '2019/202'),
(176706, 'Putri Irmanita', 'Pemasaran', '2019/202'),
(176707, 'Putri Novita Sari', 'Pemasaran', '2019/202'),
(176708, 'Rezha Fikri Syifghoh', 'Pemasaran', '2019/202'),
(176709, 'Riski Putra Pratama', 'Pemasaran', '2019/202'),
(176710, 'Roni', 'Pemasaran', '2019/202'),
(176712, 'Satya Astuti', 'Pemasaran', '2019/202'),
(176713, 'Septiana Tantri', 'Pemasaran', '2019/202'),
(176714, 'Suhendri S', 'Pemasaran', '2019/202'),
(176715, 'Surya Supriatna', 'Pemasaran', '2019/202'),
(176717, 'Tegar Fadliya Saputra', 'Pemasaran', '2019/202'),
(176718, 'Tegar Wijaya', 'Pemasaran', '2019/202'),
(176719, 'Teuku Renaldi', 'Pemasaran', '2019/202'),
(176720, 'Tri Faiq Yanuar', 'Pemasaran', '2019/202'),
(176721, 'Trio Marudin', 'Pemasaran', '2019/202'),
(176722, 'Vega Febrian', 'Pemasaran', '2019/202'),
(176723, 'Viki Septianto', 'Pemasaran', '2019/202'),
(176724, 'Vinda Gustiani', 'Pemasaran', '2019/202'),
(176725, 'Wahyu Nuryana', 'Pemasaran', '2019/202'),
(176726, 'Yogi Pratama', 'Pemasaran', '2019/202'),
(176727, 'Zikri Fathurohman', 'Pemasaran', '2019/202'),
(176728, 'Aditiya Hendriyana Periyansah', 'Teknik Komputer dan Jaringan', '2019/202'),
(176729, 'Agi Setiawan', 'Teknik Komputer dan Jaringan', '2019/202'),
(176730, 'Agus Prasetyo', 'Teknik Komputer dan Jaringan', '2019/202'),
(176731, 'Ahmad Andi Pratama', 'Teknik Komputer dan Jaringan', '2019/202'),
(176732, 'Ahmad Sidik Aryanto', 'Teknik Komputer dan Jaringan', '2019/202'),
(176734, 'Aji Apriyanto', 'Teknik Komputer dan Jaringan', '2019/202'),
(176735, 'Aji Santoso', 'Teknik Komputer dan Jaringan', '2019/202'),
(176736, 'Aldian Albi', 'Teknik Komputer dan Jaringan', '2019/202'),
(176738, 'Ananda Rivaldi Esa Putra', 'Teknik Komputer dan Jaringan', '2019/202'),
(176739, 'Andika', 'Teknik Komputer dan Jaringan', '2019/202'),
(176740, 'Andy Fadly', 'Teknik Komputer dan Jaringan', '2019/202'),
(176741, 'Ara Dwi Permatasari', 'Teknik Komputer dan Jaringan', '2019/202'),
(176743, 'Bayu Andika', 'Teknik Komputer dan Jaringan', '2019/202'),
(176744, 'Cici Apriyanti', 'Teknik Komputer dan Jaringan', '2019/202'),
(176745, 'Dafito Mamase', 'Teknik Komputer dan Jaringan', '2019/202'),
(176746, 'Dean Ramadhani Wahyudi', 'Teknik Komputer dan Jaringan', '2019/202'),
(176747, 'Dede Hidayat', 'Teknik Komputer dan Jaringan', '2019/202'),
(176748, 'Denaldy', 'Teknik Komputer dan Jaringan', '2019/202'),
(176749, 'Dwi Prasetyo', 'Teknik Komputer dan Jaringan', '2019/202'),
(176751, 'Elang Aditya Muttaqien', 'Teknik Komputer dan Jaringan', '2019/202'),
(176752, 'Eris Prasetya', 'Teknik Komputer dan Jaringan', '2019/202'),
(176753, 'Ghozali Mahmud', 'Teknik Komputer dan Jaringan', '2019/202'),
(176754, 'Hafidz Firmansyah', 'Teknik Komputer dan Jaringan', '2019/202'),
(176756, 'Hilda Kusuma Ningrum', 'Teknik Komputer dan Jaringan', '2019/202'),
(176758, 'Ilham Dwi Riono', 'Teknik Komputer dan Jaringan', '2019/202'),
(176759, 'Indra Gunawan', 'Teknik Komputer dan Jaringan', '2019/202'),
(176760, 'Irfan Anggoro', 'Teknik Komputer dan Jaringan', '2019/202'),
(176761, 'Irpan Prastyo', 'Teknik Komputer dan Jaringan', '2019/202'),
(176762, 'Ifan Prianto', 'Teknik Komputer dan Jaringan', '2019/202'),
(176764, 'Leo Chandradinata', 'Teknik Komputer dan Jaringan', '2019/202'),
(176766, 'M Jamaludin', 'Teknik Komputer dan Jaringan', '2019/202'),
(176767, 'Maulana Faisal Atmi', 'Teknik Komputer dan Jaringan', '2019/202'),
(176768, 'Maulana Yusuf', 'Teknik Komputer dan Jaringan', '2019/202'),
(176770, 'Mohamad Kent Khafid Pangestu', 'Teknik Komputer dan Jaringan', '2019/202'),
(176771, 'Mohammad Ridwan', 'Teknik Komputer dan Jaringan', '2019/202'),
(176772, 'Muhammad Khatan Almujahid Liga', 'Teknik Komputer dan Jaringan', '2019/202'),
(176773, 'Muhammad Adjy Eko Saputro', 'Teknik Komputer dan Jaringan', '2019/202'),
(176774, 'Muhammad Akbar Sofian', 'Teknik Komputer dan Jaringan', '2019/202'),
(176775, 'Muhammad Alfin Bayu Saputra', 'Teknik Komputer dan Jaringan', '2019/202'),
(176776, 'Muhammad Deatul Kodri', 'Teknik Komputer dan Jaringan', '2019/202'),
(176777, 'Muhammad Fahreza Septiansyah Wakkary', 'Teknik Komputer dan Jaringan', '2019/202'),
(176779, 'Muhammad Haikal Rozaan', 'Teknik Komputer dan Jaringan', '2019/202'),
(176780, 'Muhammad Jamil Fabian', 'Teknik Komputer dan Jaringan', '2019/202'),
(176781, 'Muhammad Rafly Aditya Mulyana', 'Teknik Komputer dan Jaringan', '2019/202'),
(176782, 'Muhammad Rizky', 'Teknik Komputer dan Jaringan', '2019/202'),
(176783, 'Naufal Ilhabi', 'Teknik Komputer dan Jaringan', '2019/202'),
(176784, 'Nia Nurhaliza', 'Teknik Komputer dan Jaringan', '2019/202'),
(176785, 'Nisfu Adi Fadillah', 'Teknik Komputer dan Jaringan', '2019/202'),
(176786, 'Nur Fitriyani Putri Satriadjie', 'Teknik Komputer dan Jaringan', '2019/202'),
(176787, 'Pebri Ermansyah', 'Teknik Komputer dan Jaringan', '2019/202'),
(176789, 'Rendi Dwi Irawan', 'Teknik Komputer dan Jaringan', '2019/202'),
(176790, 'Reza Maulana', 'Teknik Komputer dan Jaringan', '2019/202'),
(176791, 'Reza Sebastian', 'Teknik Komputer dan Jaringan', '2019/202'),
(176792, 'Rian Saputra', 'Teknik Komputer dan Jaringan', '2019/202'),
(176793, 'Ridho Akbar Setiadi', 'Teknik Komputer dan Jaringan', '2019/202'),
(176794, 'Rinjani Putri Kencana', 'Teknik Komputer dan Jaringan', '2019/202'),
(176795, 'Rival Febrian', 'Teknik Komputer dan Jaringan', '2019/202'),
(176796, 'Rizka Nur Aini', 'Teknik Komputer dan Jaringan', '2019/202'),
(176797, 'Rizki Aldi Pratama', 'Teknik Komputer dan Jaringan', '2019/202'),
(176798, 'Sahrina Zaellani', 'Teknik Komputer dan Jaringan', '2019/202'),
(176799, 'Septo Bayu Untoro', 'Teknik Komputer dan Jaringan', '2019/202'),
(176800, 'Siti Alifah', 'Teknik Komputer dan Jaringan', '2019/202'),
(176801, 'Siti Kholizah', 'Teknik Komputer dan Jaringan', '2019/202'),
(176802, 'Sony Heryanah Firmansyah', 'Teknik Komputer dan Jaringan', '2019/202'),
(176803, 'Syadam Adrian', 'Teknik Komputer dan Jaringan', '2019/202'),
(176804, 'Tofan Taruna', 'Teknik Komputer dan Jaringan', '2019/202'),
(176805, 'Trengginas Satrio Pamungkas', 'Teknik Komputer dan Jaringan', '2019/202'),
(176807, 'Valentino Martinez', 'Teknik Komputer dan Jaringan', '2019/202'),
(176808, 'Wahyu Cahya Bagus Pamungkas', 'Teknik Komputer dan Jaringan', '2019/202'),
(176809, 'Wahyu Dwi Saputro', 'Teknik Komputer dan Jaringan', '2019/202'),
(176810, 'Wahyu Tegar Pebriyanto', 'Teknik Komputer dan Jaringan', '2019/202'),
(176811, 'Wahyudin', 'Teknik Komputer dan Jaringan', '2019/202'),
(176812, 'Zaid Abdul Azis', 'Teknik Komputer dan Jaringan', '2019/202'),
(176813, 'Ria Amalia', 'Akutansi', '2019/202'),
(176814, 'Muhammad Alfa Nizar', 'Pemasaran', '2019/202'),
(176815, 'David', 'Teknik Komputer dan Jaringan', '2019/202'),
(176816, 'Yunita Nanda Safira', 'Administrasi Perkantoran', '2019/202'),
(176817, 'Muhammad Arisna Saputra', 'Pemasaran', '2019/202'),
(176818, 'Putri Amara Widyasari', 'Pemasaran', '2019/202'),
(176819, 'Dian Nur Meida', 'Administrasi Perkantoran', '2019/202');

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `level` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`, `nama`, `level`) VALUES
(101, 'adminTH', '85f1c9f477e7d4a1b6244848693e4c4a', 'ADMINISTRATOR SMK TUNAS HARAPAN', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(18) NOT NULL,
  `nama_guru` varchar(512) NOT NULL,
  `jenis_guru` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `kode` varchar(8) NOT NULL,
  `jurusan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `kode`, `jurusan`) VALUES
(101, 'AKL', 'AKUTANSI DAN KEUANGAN LEMBAGA'),
(202, 'PM', 'PEMASARAN'),
(303, 'MPLB', 'MANAJEMEN PERKANTORAN DAN LAYANAN BISNIS'),
(404, 'TJKT', 'TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI'),
(505, 'DKV', 'DESAIN KOMUNIKASI VISUAL'),
(606, 'UMUM', 'UMUM');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kode` varchar(8) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `id_tahun_ajaran` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_kegiatan` int(16) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `ringkasan_kegiatan` varchar(255) NOT NULL,
  `detail_kegiatan` text NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `jumlah_gambar` int(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_kegiatan`, `nama_kegiatan`, `ringkasan_kegiatan`, `detail_kegiatan`, `gambar`, `jumlah_gambar`, `date`) VALUES
(560914, 'Pembekalan Prakerin 2023', '<p>Sekolah akan mengupayakan terlaksananya program Prakerin SMK ini demi meningkatkan keterampilan siswa di bidangnya.</p>\r\n', '<p>Prakerin atau Praktek Kerja Industri merupakan kegiatan pendidikan, pelatihan, dan pembelajaran bagi siswa SMK (Sekolah Menengah Kejuruan) yang dilakukan di dunia usaha atau dunia industri yang berkaitan dengan kompetensi siswa sesuai bidang yang digelutinya. Pada umumnya, sekolah akan mengupayakan terlaksananya program Prakerin SMK ini demi meningkatkan keterampilan siswa di bidangnya.</p>\r\n\r\n<p>Dalam program ini, para siswa diberikan bekal ilmu pengetahuan dasar supaya meminimalisir kendala saat penerapan bekerja. Program ini dilaksanakan agar siswa lebih siap untuk bekerja di lapangan dan juga dapat mempraktikkan teori yang sudah dipelajari di sekolah. Dengan begitu, ketika lulus nanti, siswa dapat beradaptasi lebih cepat dengan dunia kerja.&nbsp;</p>\r\n\r\n<p>Prakerin SMK ini merupakan upaya sekolah untuk meningkatkan mutu siswa SMK sehingga dapat menghasilkan lulusan yang mampu menjalani pekerjaan sesuai dengan bidangnya dan memasuki dunia kerja yang persaingannya cukup ketat. Beberapa sekolah sudah mewajibkan program prakerin bagi para siswa dalam jangka waktu tertentu.&nbsp;</p>\r\n\r\n<p>Pelaksanaan program prakerin ini didasari oleh Peraturan Menteri Perindustrian Nomor 3 Tahun 2017 tentang Pedoman Pembinaan dan Pengembangan Sekolah Menengah Kejuruan Berbasis Kompetensi yang&nbsp;<em>Link and Match&nbsp;</em>dengan Industri yang memuat klausul tentang Praktek Kerja Industri berbunyi, &ldquo;Perusahaan Industri dan/atau Perusahaan Kawasan Industri memfasilitasi Praktek Kerja Industri untuk siswa dan Pemagangan Industri untuk guru Bidang Studi Produktif.&rdquo;</p>\r\n\r\n<p>Hal ini juga didukung oleh Keputusan Menteri Pendidikan dan Kebudayaan No.323/u/1997 UU Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional yang menyebutkan, &ldquo;Pendidikan adalah usaha sadar dan terencana untuk mewujudkan suasana belajar dan proses pembelajaran agar peserta didik secara aktif mengembangkan potensi dirinya untuk memiliki kekuatan spiritual, agama, pengendalian diri, kepribadian, kecerdasan, akhlak mulia, serta keterampilan yang diperlukan dirinya, masyarakat, bangsa, dan negara.&rdquo;</p>\r\n\r\n<p>Setelah memahami pengertian di atas, ada baiknya Anda juga mengetahui manfaat prakerin bagi siswa, khususnya bagi Anda yang akan menjalani prakerin dalam waktu dekat. Dengan mengetahui manfaat prakerin, diharapkan Anda dapat melaksanakan prakerin dengan maksimal. Berikut ini merupakan manfaat dari prakerin bagi siswa SMK.</p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 233px; top: 141.984px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', 'http://drive.google.com/uc?export=view&id=1qJVQCEkQeX1PAqJDDLTIpRFwrwLULVJE', 0, '2023-08-27 08:40:58'),
(933927, 'JUARA UMUM 3 DI KEJUARAAN SKI-CUP II', '<p>SELAMAT ATAS JUARA YANG TELAH MEMENANGKAN KEJUARAAN SKI-CUP II, SEMOGA DAPAT MEMBANGGAKAN SMK TUNAS HARAPAN DI KESEMPATAN SELANJUTNYA!!!</p>\r\n', '<p>BERIKUT INI NAMA ATLET DAN JUARA YANG DI DAPAT OLEH&nbsp; MURID SMK TUNAS HARAPAN DALAM KEJUARAAN SILAT SKI-CUP II ;</p>\r\n\r\n<p>1. AULIA FITRIANI JUARA 1</p>\r\n\r\n<p>2. HARMELIA NAISA PUTRI JUARA 1</p>\r\n\r\n<p>3. MUHAMMAD RIZKY JUARA 1</p>\r\n\r\n<p>4. ERVAN HIDAYAT JUARA 1</p>\r\n\r\n<p>5. FAREL AFITATUTSADID A JUARA 1</p>\r\n\r\n<p>6. LAELI SYIFA AYU NURINSANI JUARA 2</p>\r\n\r\n<p>7. JEYAN SABILI JUARA 2</p>\r\n\r\n<p>8. MUHAMMAD ILHAM JUARA 2</p>\r\n', 'http://drive.google.com/uc?export=view&id=1ypGTuVdoYDkHeI2igITRLP5AH2Qpeifv', 0, '2023-08-26 04:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `post_gambar`
--

CREATE TABLE `post_gambar` (
  `id_gambar_post` int(16) NOT NULL,
  `id_kegiatan` int(16) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_gambar`
--

INSERT INTO `post_gambar` (`id_gambar_post`, `id_kegiatan`, `gambar`) VALUES
(1012913, 560914, 'http://drive.google.com/uc?export=view&id=128oitiGdsxx7CEkVdbWi1zEdmiZ8mMC7'),
(1023475, 560914, 'http://drive.google.com/uc?export=view&id=156Je9_e9AvXFij6f0f0dzpK1gcIMtWXR'),
(1033004, 560914, 'http://drive.google.com/uc?export=view&id=17iLb0c_kwuW-SEOhxX-TiHtWaaei7Q4K'),
(1048771, 560914, 'http://drive.google.com/uc?export=view&id=1N52a6MsYNQ45MwO3zjSnuBgQ6FLhz_qD'),
(1052783, 560914, 'http://drive.google.com/uc?export=view&id=1NlaLzuxjiPKXaKqWa1UVTrYHociq7R8f'),
(1067190, 560914, 'http://drive.google.com/uc?export=view&id=1PxbywEPLD1yisdSt7hA_FJp6McJaVLkN'),
(1073614, 560914, 'http://drive.google.com/uc?export=view&id=1TuYdvQGMsNVV-jpB64YZFuX1-iBh3IRA'),
(1082573, 560914, 'http://drive.google.com/uc?export=view&id=1Tw9prk2TjjiCwgRVaY1pRcVqgqSj69OU'),
(1096846, 560914, 'http://drive.google.com/uc?export=view&id=1U7Gvy82B4NZv3CJAVxheeOAUx7M7qSMO'),
(1106688, 560914, 'http://drive.google.com/uc?export=view&id=1W_AGHco7MYHcOhnfQOVNbeZ-EocQMJpJ'),
(1118979, 560914, 'http://drive.google.com/uc?export=view&id=1c6XrJrayDooQJBBivvZj9AkYCq6v3HSr'),
(1129111, 560914, 'http://drive.google.com/uc?export=view&id=1ptbGD-fdugrPiEYdnBZYQsYezz3kVh3o'),
(5907056, 933927, 'http://drive.google.com/uc?export=view&id=12C6bUK6SOp7m3BKeE4gHIpuMmxo5cTOI'),
(6610246, 933927, 'http://drive.google.com/uc?export=view&id=17MNIQ3Mg8M3sh7HJt2bbNaepl4hCZrYS'),
(7057797, 933927, 'http://drive.google.com/uc?export=view&id=1yKcJL05gvC_WNhMDZuWteXENr4-bxIe_'),
(7159222, 933927, 'http://drive.google.com/uc?export=view&id=1IthN-C2t9k0MhvNqGNf09FF14cb0UVMm'),
(7706368, 933927, 'http://drive.google.com/uc?export=view&id=1Eb8FF_4S6q2DfQJBRyL4NkeQRXPgJ6NA'),
(8062120, 933927, 'http://drive.google.com/uc?export=view&id=1bzoLcEtdr_9duQgtxAEQSQZZxTN0QkfG');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(18) NOT NULL,
  `nama_siswa` varchar(256) NOT NULL,
  `jurusan` varchar(16) NOT NULL,
  `kelas` varchar(18) NOT NULL,
  `tahun_ajaran` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(16) NOT NULL,
  `tahun_ajaran` varchar(32) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajaran`, `status`) VALUES
(101, '2020/2021', 'TIDAK AKTIF'),
(202, '2021/2022', 'TIDAK AKTIF'),
(303, '2022/2023', 'AKTIF'),
(404, '2023/2024', 'TIDAK AKTIF'),
(505, '2024/2025', 'TIDAK AKTIF'),
(606, '2025/2026', 'TIDAK AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE `walikelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `post_gambar`
--
ALTER TABLE `post_gambar`
  ADD PRIMARY KEY (`id_gambar_post`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`) USING BTREE;

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176820;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1043367;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=607;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4041027;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_kegiatan` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=933928;

--
-- AUTO_INCREMENT for table `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
