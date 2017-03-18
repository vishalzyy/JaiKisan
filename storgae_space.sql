-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2017 at 07:59 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaikisan`
--

-- --------------------------------------------------------

--
-- Table structure for table `storgae_space`
--

CREATE TABLE `storgae_space` (
  `id` int(11) NOT NULL,
  `district` varchar(255) NOT NULL,
  `address` varchar(512) NOT NULL,
  `capacity` int(11) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `product_stored` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storgae_space`
--

INSERT INTO `storgae_space` (`id`, `district`, `address`, `capacity`, `sector`, `product_stored`, `Contact`) VALUES
(1, 'AHMEDNAGAR', 'GOVERNMENT MILK SCHEME,Display memory No. 10-B/2,PO MIDC,Dist. Ahmednagar.', 32, 'Public', 'Dairy Products', '9922362975'),
(2, 'AHMEDNAGAR', 'PUSPHA MOTI COLD STORAGE,2988, Ganj Bazar,Ahmednagar - 414 001.', 678, 'Private ', 'Multipurpose', '8001647332'),
(3, 'AHMEDNAGAR', 'SAIBABA GRAPES GROWERS CO-OP SOCIETY LTD.,Sakari, Ta. Kopargaon,Ahmednagar.', 203, 'Cooperative', 'Fruits & Vegetable', '9225551236'),
(4, 'AHMEDNAGAR', 'AGRI TECH. HATCHENIESAhmednagar.', 1241, 'Private ', 'Meat', '9406900255'),
(5, 'AHMEDNAGAR', 'PRAVA SAHAKARI OODHSANGH LTD,Tal. SrinampurAhmednagar - 413737.', 18, 'Cooperative', 'Dairy Products', '8975746443'),
(6, 'AKOLA', 'AKOLA COLD STORAGE & ICE FACTORY,Jatharpal, Akola', 592, 'Private', 'Potatoes', '8975746443'),
(7, 'AKOLA', 'DAIRY MANAGER,Government Milk SchemeMurtijapu Road,N.H. 6,  Akola - 440 001.', 69, 'Public', 'Dairy Products', '902157474'),
(8, 'AKOLA', 'CITRUS KING MANDARIAN ORANGES PVT. LTDTal. Wared, Akola.', 197, 'Private ', 'Fruits & Vegetables\r\n', '9926019003'),
(9, 'AMRAVATI', 'LADDA KRISHI PVT. LTD,College Road,Amravati.', 391, 'Private', 'Potatoes', '9021574734'),
(10, 'AMRAVATI', 'SHIV COLD STORAGE & ICE FACTORY,Industrial Estate,Amarvati. (MS)', 298, 'Private', 'Multipurpose', '9920614714'),
(11, 'AMRAVATI', 'NARENDRA COLD STORAGEDhabha, Amravati.', 5100, 'Private', 'Multipurpose', '9763810636'),
(12, 'AURANGABAD', 'FRIGERIFICO ALLANA LTD.,Allana Marg, Allana House,Colaba, Bombay (CS at 12 K.MPaithan Road, Aurangabad.', 3503, 'Private ', 'Meat', '9920614721'),
(13, 'AURANGABAD', 'GAYATRI COLD STORAGE & FROZEN FOODS,Plot No. 4/25, M.I.D.C. Walung.Aurangabad.', 40, 'Private ', 'Dairy Products\r\n', '985007654'),
(14, 'AURANGABAD', '	NARANG MOTELS P. LTD.,Prop. Ajanta Ambassador Hotel,R-4,  R - 4A, MIDC Area,Chikalthana, Aurangabad.', 15, 'Private ', 'Others (Hotel)', '9916019003'),
(15, 'AURANGABAD', 'THE MANAGER,Government  Milk Supply Scheme,Aurangabad.', 79, 'Public', 'Dairy Products\r\n', '9998059118'),
(16, 'AURANGABAD', 'HORIZON COLD STORAGE,B - 20, MIDC, Chikalthana,Aurangabad - 431210.', 468, 'Private ', 'Multipurpose', '8097622139'),
(17, 'BEED', 'GOVERNMENT MILK SCHEME ,Beed.	', 30, 'Public', 'Dairy Products', '9225619109'),
(18, 'BHANDARA', 'SHRI SANT RAM COLD STORAGE,Gondia, Bhandara.', 1005, 'Private', 'Potatoes', '7600008401'),
(19, 'BHANDARA', 'TUMSAR COLD STORAGE CORPON,Tumsar.', 453, 'Private', 'Potatoes', '9713921609'),
(20, 'BHANDARA', 'RATAN COLD STORAGE,17-18 Bhandara Ind. Co-op EstateN. H. Bhandara - 441904.', 877, 'Private', 'Multipurpose', '9770673274'),
(21, 'DHULIA', 'DAIRY MANAGER,Govt. Milk Supply Scheme,Dhulia.', 396, 'Public', 'Dairy Products\r\n', '9011611800'),
(22, 'DHULIA', 'PRIYADARSHNI COLD STORAGE,Dt. Dhulia.', 3232, 'Private', 'Multipurpose', '9822436605'),
(23, 'DHULIA', 'ARMVEER GRAPE GOWESCo-op. KSociety Ltd,Sakari, Dhulia.', 203, 'Cooperative', 'Grapes', '9822436666'),
(24, 'GONDIA', 'R.R. COLD STORAGE,Gram Ambore, Saori,Gondia Dist.', 4000, 'Private', 'Multipurpose ', '8286849980'),
(25, 'JALGAON', 'EVEREST COLD STORAGE P. LTD.,Bhavani Path, M.G. Road,Jalgaon', 555, 'Private', 'Multipurpose ', '9981230900'),
(26, 'JALGAON', 'SUDARSAN DAIRYChalisgon Jalgaon.', 28, 'Private', 'Dairy Products\r\n', '9822369064'),
(27, 'JALGAON', 'SHREE BALAJI DAIRY FARMHirapur Road,Chalisgaon, Dist. Jalgaon.', 13, 'Private', 'Dairy Products', '9963105655'),
(28, 'JALNA', 'JALNA SEED PROCESSING & REFG.CO.,C-11, Industrial Area, Jalna,', 2565, 'Private', 'Multipurpose', '7600008401'),
(29, 'KOLHAPUR	', '	KOLHAPUR ZILLA SAHKARI DUDHUdpadok Sandh Ltd., 2104 - E,Poona Bangtlore Road,Kohlapur, - 416 03', 1323, 'Private', 'Dairy Products\r\n', '9770673274'),
(30, 'KOLHAPUR', '	MEHTA DAIRIES,G-69, MIDC, Gokulshirgaon,Kolhapur.', 152, 'Private', 'Dairy Products\r\n', '9922362975'),
(31, 'KOLHAPUR', 'SHREE WARANA SAHAKARI DUGDH UTPADAK  PRAKRAYA SANGH LTD.,Amrutnagar, Waananagar, Kolapur.', 417, 'Cooperative', 'Dairy Products', '8097622139'),
(32, 'LATUR', 'LATUR ZILLA DRAKSHAUlpadak Sahakari,Sangh UrlLatur.', 203, 'Cooperative ', 'Grapes', '8097622139'),
(33, 'MUMBAI', 'ADARSH ICE & COLD STORAGE,Off. Marve Road, Malad (W),Bombay - 400 064.', 311, 'Private', 'Multipurpose', '9770673274'),
(34, 'MUMBAI', 'AHMED A. FAZALBHOY P. LTD.,(Cold Storage) \"Sun Vila\"No. 9 Dr. Annibesant Road,Worli, Bombay.', 1000, 'Private', 'Multipurpose', '9922362975'),
(35, 'MUMBAI', 'AHMED A. FAZALBHOY P. LTD.,Liberty Bldg., 41 - Marine Line,Bombay.', 20, 'Private', 'Meat', '7600008401'),
(36, 'MUMBAI', 'RUSTOM ICE & COLD STORAGE,Sugder Baug,Chembur, Bombay.', 472, 'Private', 'Multipurpose', '8097622139'),
(37, 'MUMBAI', 'AIR INDIA CIVIL WORKS & PROPERTIES,Medicon Bhawan,Opp. Indian Oil, Sahar Airport,Andheri Bombay - 99.', 57, 'Public', 'Multipurpose', '9922362975'),
(38, 'NAGPUR', 'BHAGWAGAR ICE FACTORY & COLD STORAGE,Factory Road, Nagpur.', 789, 'Private', 'Multipurpose', '8097622139'),
(39, 'NAGPUR', 'DINSHAW FROZEN FOODS (P) LTD.Gitti Khaidon, Burgaon,Nagpur.', 163, 'Private', 'Dairy Products\r\n', '7600008401'),
(40, 'NAGPUR', 'NAGPUR FROZEN FOODS PVT. LTDHouse No. 50, Sunshila Balral Marg,Dhantoli, Nagpur.', 66, 'Private', 'Dairy Products', '9922362975'),
(41, 'NANDED', 'GENERAL MANAGER, GOVT. MILK SCHEME,Plot No. 25 / 26,MIDC Area, Nanded.', 77, 'Public', 'Dairy Products', '9770673274'),
(42, 'NANDED', 'MAFCO LIMITEDItrara, P.B. No. 55,Nanded.', 1087, 'Public', 'Multipurpose', '7600008401'),
(43, 'NASIK', 'GOVERNMENT MILK SUPPLY SCHEME CENTRAL DAIRY,Trimbak Road, Nasik.', 92, 'Public', 'Dairy ', '8097622139'),
(44, 'NASIK', 'INDRAYANI AGRO INDUSTRIES (P) LTD.,D-56 MIDC Ambad, Nasik.', 16, 'Private', 'Multipurpose', '9922362975'),
(45, 'NASIK', 'FRESH AGRO PRODUCTS CO.,B-244, PimpalgaonTal Niphad Dist. Nasik.', 158, 'Cooperative ', 'Grapes', '9922362975'),
(46, 'OSMANABAD', 'GOVERNMENT MILK SCHEME,Udgir Dist.,Osmanabad.', 305, 'Private ', 'Milk & Milk Products ', '9770673274'),
(47, 'PUNE', 'AHURA ICE AND COLD STORAGE112, Bhasani MIDC Pune.	', 542, 'Private ', 'Multipurpose ', '7600008401'),
(48, 'PUNE', 'DAIRY TOPS (DIV. OF KWALITY FROZEN FOODS PVT. LTD.,)J-177, MIDC Industrial Area,Bhosari Pune-26', 214, 'Private ', 'Dairy Product ', '9770673274'),
(49, 'PUNE', 'GOVERNMENT MILK SUPPLY SCHEMEPoona.', 305, 'Public ', 'Dairy Product ', '9922362975'),
(50, 'RAIGAD', '	GOVERNMENT MILK SCHEME Bby Poona Road Survey No.Hal-Br. 20 & 21, Khopoli,Raigad.', 72, 'Public ', 'Dairy Products ', '9922362975'),
(51, 'RAIGAD', 'SHRI BALLALESHWAR COLD STORAGE PVT. LTD.,Rudravali, Tal. Mangaon,Raigadh.', 600, 'Private', 'Fruit & Vegetable ', '7600008401'),
(52, 'RAIGAD', 'SNOWMAN FROZEN FOODS LTD.,M-55, M.I.D.C., Taloja,Raigad Dit.', 1815, 'Private', 'Frozen Veg., Meat & Seafoods', '8097622139'),
(53, 'RATNAGIRI', 'GOVERNMENT MILK SCHEME,M.I.D.C. Plot No. C-2, Khardi,Chiplun.', 13, 'Private ', 'Dairy Products', '9922362975'),
(54, 'RATNAGIRI', 'GOVERNMENT MILK SCHEMEEPlot No. 21, MIDC Area,Ratnagiri', 33, 'Public ', 'Dairy Products ', '8097622139'),
(55, 'SANGLI', 'B.G. CHITALE, BHILWADI STN.416 - 303 Distt. SangliMaharashtra.', 1042, 'Private ', 'Dairy Products ', '8097622139'),
(56, 'SANGLI', 'KAMDHENU GRAPE GROWERS CO-OP. Society Mandirayun,Tasgaon - Dist -  Sangh.', 203, 'Co-operative', 'Grapes', '9922362975'),
(57, 'SANGLI', 'SHREE DIAMOND COLD STORAGE (SANGLI) PVT. LTD.L 59, MIDI, Kupwad, Sangli', 1003, 'Private ', 'Multipurpose', '7600008401'),
(58, 'SATARA', 'MAFCO FACTORY,Koregaon, Satara Dist.', 1418, 'Public ', 'Multipurpose ', '9770673274'),
(59, 'SATARA', 'ASIA PLATEAU,Moral Rearmament Training Centre,Panchgani, Satara Dist.', 38, 'Private ', 'Multipurpose ', '8097622139'),
(60, 'SATARA', 'OTARI COLD STORAGE,M.I.D.C., Satara.', 1400, 'Private', 'Multipurpose ', '9922362975'),
(61, 'SOLAPUR', 'SOMANI COLD STORAGE,1153/23, Somani Estate,Near Ind. Estate, No. 1,Barish - 413401.', 1430, 'Private ', 'Multipurpose \r\n', '8097622139'),
(62, 'SOLAPUR', 'SOLAPUR GRAPE GROWERS ASSON NANAJSolapur Dist.', 127, 'Cooperative ', 'Grapes', '9770673274'),
(63, 'SOLAPUR', 'PADMINI COLD STORAGE, Kasegaon, Solapur.', 1000, 'Private', 'Multipurpose ', '9922362975'),
(64, 'THANA', 'JAINEX FOODS PVT. LTD.Plot No. 14-15,MAFCO Amp. Yard Vashi,Turbe.', 423, 'Private ', 'Marine Products ', '7600008401'),
(65, 'THANA', 'ARNALA MACHIMAR VIVIDHAKaryakari Sahakari Maldali Ltd.Arnala.', 202, 'Cooperative ', 'Marine Products ', '8097622139'),
(66, 'THANA', 'INCHARGE Govt. Milk Distribution DepotGove Bhivandi MIDC SaravaliDistt. Thane.', 85, 'Public ', 'Dairy Products ', '7600008401'),
(67, 'THANA', 'KALWA COLD STORAGEAllana Blg. 4-Borrow Road,Colaba Loc. Near Alla Oil MiloOld Thane-Belapur Rd. Kalwa.', 4257, 'Private ', 'Multipurpose', '9770673274'),
(68, 'THANA', 'ZAMZAM ENTERPRISEAPMC Yard, New Mumbai.', 980, 'Private ', 'Fruits & Vegetables', '9922362975'),
(69, 'WARDHA', 'PARAS ICE FACTORY AND COLD STORAGEBachelor Road,Wardhe.', 460, 'Private', 'Multipurpose', '9770673274'),
(70, 'YAVATMAL', 'HIMALAYA ICE FACTORY & COLD STORAGEVaidya Nagar,Arni Road.', 468, 'Private', 'Multipurpose', '7600008401');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `storgae_space`
--
ALTER TABLE `storgae_space`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `storgae_space`
--
ALTER TABLE `storgae_space`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
