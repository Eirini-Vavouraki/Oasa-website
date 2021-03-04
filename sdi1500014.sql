-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 01:55 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdi1500014`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(10) NOT NULL,
  `bus_line` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `dromologia_start` varchar(100) NOT NULL,
  `dromologia_end` varchar(100) NOT NULL,
  `stops` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `bus_line`, `name`, `dromologia_start`, `dromologia_end`, `stops`) VALUES
(1, '550', '550: Π. ΦΑΛΗΡΟ - ΚΗΦΙΣΙΑ', '05:15/ 05:35/ 05:55/ 06:10/ 06:25/ 06:35/ 06:45/ 06:55', '05:20/ 05:40/ 06:00/ 06:15/ 06:25/ 06:35/ 06:50', 'Π. ΦΑΛΗΡΟ/ ΦΟΡΟΣ/ ΓΕΦΥΡΑ/ ΕΥΓΕΝΙΔΕΙΟ/ ΩΝΑΣΕΙΟ/ ΧΡΥΣΑΚΗ/ ΣΚΡΑ/ ΙΠΠΟΚΡΑΤΕΙΟ/ ΑΘΗΝΑΙΟΝ/ ΑΜΠΕΛΟΚΗΠΟΙ/ ΣΙΔΕΡΑ/ ΠΛΑΤΕΙΑ ΠΛΑΤΑΝΟΥ  '),
(2, '608', '608: ΓΑΛΑΤΣΙ - ΑΚΑΔΗΜΙΑ - ΝΕΚΡ. ΖΩΓΡΑΦΟΥ', ' 05:00/ 05:15/ 05:30/ 05:43/ 05:55/ 06:05/ 06:15/ 06:25/ 06:34/ 06:42/ 06:49/ 06:56   ', '05:00/ 05:15/ 05:30/ 05:43/ 05:56/ 06:08/ 06:18/ 06:27/ 06:36/ 06:44/ 06:52', 'ΓΑΛΑΤΣΙ/ ΑΓ.ΕΙΡΗΝΗ/ ΧΡΙΣΤΙΑΝΟΥΠΟΛΕΩΣ/ ΠΥΘΙΑΣ/ ΕΣΠΕΡΙΔΩΝ/ ΜΑΥΡΟΓΕΝΟΥΣ/ ΠΑΛ.ΤΕΡΜΑ/ ΣΥΚΙΑ/ ΛΙΝΑΡΑ/ ΒΟΡΕΙΟΣ ΠΟΛΟΣ/ ΠΟΛΥΤΕΧΝΕΙΟ/ ΠΛ.ΚΑΝΙΓΓΟΣ/ ΖΩΟΔ.ΠΗΓΗΣ/ ΑΚΑΔΗΜΙΑΣ/ ΚΗΠΟΣ/ ΒΥΖΑΝΤΙΝΟ ΜΟΥΣΕΙΟ-ΡΗΓΙΛΛΗΣ/ ΝΟΣΟΚΟΜΕΙΟ ΕΥΑΓΓΕΛΙΣΜΟΣ/ ΧΙΛΤΟΝ/ ΑΓ.ΧΑΡΑΛΑΜΠΟΣ/ ΕΥΔΑΠ/ ΙΚΑ/ ΑΝΟΙΞΗ/ ΚΟΤΟΠΟΥΛΗ/ ΤΣΙΤΟΥΡΑ/ 6η ΖΩΓΡΑΦΟΥ/ 7η ΖΩΓΡΑΦΟΥ/ 8η ΖΩΓΡΑΦΟΥ/ 9η ΖΩΓΡΑΦΟΥ/ 10η ΖΩΓΡΑΦΟΥ/ ΝΕΚΡΟΤΑΦΕΙΟ ΖΩΓΡΑΦΟΥ'),
(3, '308', '308 ΣΤ. ΝΟΜΙΣΜΑΤΟΚΟΠΕΙΟ - ΠΑΙΑΝΙΑ - ΚΟΡΩΠΙ', '05:35/ 05:55/ 06:15/ 06:35/ 06:55/ 07:10/ 07:25/ 07:40/ 07:55/ 08:15/ 08:30/ 08:45', '05:00/ 05:25/ 05:45/ 06:05/ 06:25/ 06:45/ 07:00/ 07:15/ 07:30/ 07:45/ 08:05/ 08:20/ 08:35/ 08:55', 'ΣΤ. ΝΟΜΙΣΜΑΤΟΚΟΠΕΙΟΥ/ ΣΤ.ΝΟΜΙΣΜΑΤΟΚΟΠΕΙΟ/ 9η ΜΕΣΟΓΕΙΩΝ/ ΤΟΜΠΡΑ/ 11η ΑΓ.ΠΑΡΑΣΚΕΥΗΣ/ 12η ΑΓ.ΠΑΡΑΣΚΕΥΗΣ/ ΠΛ.ΑΓ.ΠΑΡΑΣΚΕΥΗΣ/ ΕΡΤ/ ΙΚΑ/ ΔΗΜΗΤΡΑΣ/ ΛΕΚΚΑ-ΚΕΝΤΡΟ ΥΓΕΙΑΣ/ ΠΑΡΑΚΡΑΤΗΜΑ/ ΧΡ.ΠΑΥΛΟΥ/ ΔΕΗ/ 1η ΑΤΤΙΚΗΣ/ 2η ΑΤΤΙΚΗΣ/ ΑΓ.ΡΑΦΑΗΛ/ ΠΡΟΑΣΤΙΑΚΟΣ 1/ ΠΡΟΑΣΤΙΑΚΟΣ 2');

-- --------------------------------------------------------

--
-- Table structure for table `eisitiria_kanoniko`
--

CREATE TABLE `eisitiria_kanoniko` (
  `id` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eisitiria_kanoniko`
--

INSERT INTO `eisitiria_kanoniko` (`id`, `name`, `code`, `price`) VALUES
(1, 'Κανονικό 90 λεπτών', 'kanoniko90', 1.40),
(2, 'Ημερήσιο', 'imerisio', 4.50),
(3, 'Πέντε Ημερών', 'five_days', 9.00),
(4, 'Τουριστικό 3 ημερών', 'touristiko', 22.00),
(5, 'Κανονικό λεωφορείων EXPRESS', 'kanoniko_express', 6.00),
(6, 'Κανονικό ΜΕΤΡΟ', 'kanoniko_metro', 10.00),
(7, 'Αεροδρομίου με επιστροφή ΜΕΤΡΟ', 'airport_return_metro', 18.00),
(8, 'Αεροδρομίου Παλλήνη-Κάντζα-Κορωπί', 'airport_pallini', 6.00);

-- --------------------------------------------------------

--
-- Table structure for table `eisitiria_meiomeno`
--

CREATE TABLE `eisitiria_meiomeno` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eisitiria_meiomeno`
--

INSERT INTO `eisitiria_meiomeno` (`id`, `name`, `code`, `price`) VALUES
(1, 'Μειωμένο 90 λεπτών', 'meiomeno_90', 0.60),
(2, 'Ημερήσιο', 'imerisio', 4.50),
(3, 'Πέντε Ημερών', 'five_days', 9.00),
(4, 'Τουριστικό 3 ημερών', 'touristiko', 22.00),
(5, 'Μειωμένο λεωφορείων EXPRESS', 'meiomeno_express', 3.00),
(6, 'Μειωμένο ΜΕΤΡΟ', 'meiomeno_metro', 5.00),
(7, 'Αεροδρομίου με επιστροφή ΜΕΤΡΟ', 'airport_return_metro', 18.00),
(8, 'Μειωμένο Αεροδρομίου Παλλήνη-Κάντζα_Κορωπί', 'airport_pallini_meiomeno', 3.00);

-- --------------------------------------------------------

--
-- Table structure for table `kartes_kanoniko`
--

CREATE TABLE `kartes_kanoniko` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kartes_kanoniko`
--

INSERT INTO `kartes_kanoniko` (`id`, `name`, `code`, `price`) VALUES
(1, 'Κανονικό 30 ημερών', 'kanoniko_30', 30.00),
(2, 'Κανονικό 90 ημερών', 'kanoniko_90', 85.00),
(3, 'Κανονικό 180 ημερών', 'kanoniko_180', 170.00),
(4, 'Κανονικό 365 ημερών', 'kanoniko_365', 330.00),
(5, 'Κανονικό Αεροδρομίου 30 ημερών', 'airport_kanoniko_30', 49.00),
(6, 'Κανονικό Αεροδρομίου 90 ημερών', 'airport_kanoniko_90', 142.00),
(7, 'Κανονικό Αεροδρομίου 180 ημερών', 'airport_kanoniko_180', 250.00),
(8, 'Κανονικό Αεροδρομίου 365 ημερών', 'airport_kanoniko_365', 490.00);

-- --------------------------------------------------------

--
-- Table structure for table `kartes_meiomeno`
--

CREATE TABLE `kartes_meiomeno` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kartes_meiomeno`
--

INSERT INTO `kartes_meiomeno` (`id`, `name`, `code`, `price`) VALUES
(1, 'Μειωμένο 30 ημερών', 'meiomeno_30', 15.00),
(2, 'Μειωμένο 90 ημερών', 'meiomeno_90', 43.00),
(3, 'Μειωμένο 180 ημερών', 'meiomeno_180', 85.00),
(4, 'Μειωμένο 365 ημερών', 'meiomeno_365', 165.00),
(5, 'Μειωμένο Αεροδρομίου 30 ημερών', 'meiomeno_airport_30', 25.00),
(6, 'Μειωμένο Αεροδρομίου 90 ημερών', 'meiomeno_airport_90', 71.00),
(7, 'Μειωμένο Αεροδρομίου 180 ημερών', 'meiomeno_airport_180', 125.00),
(8, 'Μειωμένο Αεροδρομίου 365 ημερών', 'meiomeno_airport_365', 245.00);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `startpoint` varchar(250) NOT NULL,
  `endpoint` varchar(250) NOT NULL,
  `instructions` varchar(10000) NOT NULL,
  `time_of_transport` varchar(20) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`startpoint`, `endpoint`, `instructions`, `time_of_transport`, `id`) VALUES
('Στ. Καλλιθέας', 'Πλατεία Αγ. Παρασκευής', 'ΗΣΑΠ προς Κηφισιά/ Στάσεις:/ Καλλιθέα, Ταύρος, Κάτω Πετράλωνα, Θησείο, Μοναστηράκι/ Αποβίβαση/ ΜΕΤΡΟ προς Αεροδρόμιο/ Στάσεις:/ Μοναστηράκι, Σύνταγμα, Ευαγγελισμός, Μέγαρο Μουσικής, Αμπελόκηποι, Πανόρμου, Κατεχάκη, Εθνική Άμυνα, Χολαργός, Νομισματοκοπείο/ Αποβίβαση/ Περπάτημα 1 λεπτό/ Λεωφορείο από στάση ΣΤ. ΝΟΜΙΣΜΑΤΟΚΟΠΕΙΟ/ Διερχόμενες Γραμμές: Χ95, Α5, 308, 305, 316/ Στάσεις:/ Στ. Νομισματοκοπείο, 9η Μεσογείων, Τόμπρα, 11η Αγ. Παρασκευής, 12η Αγ. Παρασκευής, Πλ. Αγ. Παρασκευής/ Αποβίβαση/ Περπάτημα 1 λεπτό/', '47 λεπτά', 1),
('Στ. Αεροδρόμιο', 'Στ. Ακρόπολη', 'ΜΕΤΡΟ προς Αγία Μαρίνα/ Στάσεις:/ Αεροδρόμιο, Κορωπί, Κάντζα, Παλλήνη, Δουκ. Πλάκεντίας, Χαλάνδρι, Αγ. Παρασκευή, Νομισματοκοπείο, Χολαργός, Εθνικής Άμυνας, Κατεχάκη, Πανόρμου, Αμπελόκηποι, Μέγαρο Μουσικής, Ευαγγελισμός, Σύνταγμα/ Αποβίβαση/ ΜΕΤΡΟ προς Ελληνικό/ Στάσεις:/ Σύνταγμα, Ακρόπολη/ Αποβίβαση/', '55 λεπτά', 2),
('Στ. Δάφνης', '2η Πανεπιστημιούπολης', 'ΜΕΤΡΟ προς Ανθούπολη/ Στάσεις:/ Δάφνη, Αγ. Ιωάννης, Συγγρού-Φιξ, Ακρόπολη, Σύνταγμα/ Αποβίβαση/ ΜΕΤΡΟ προς Αεροδρόμιο/ Στάσεις:/ Σύνταγμα, Ευαγγελισμός/ Αποβίβαση/ Περπάτημα 1 λεπτό/ Λεωφορείο από στάση ΝΟΣΟΚΟΜΕΙΟ ΕΥΑΓΓΕΛΙΣΜΟΣ/ Στάσεις:/ Νοσοκομείο Ευαγγελισμός, Κάραβελ, Ευφρονίου, 2η Σχολείο, Πύλη, 2η Πανεπιστημιούπολης/ ', '26 λεπτά', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `belongs_to` varchar(100) NOT NULL,
  `paso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `card_number`, `email`, `password`, `belongs_to`, `paso`) VALUES
(8, 'Λεωνίδας', 'Νασόπουλος', '432875043986', 'leonidas@gmail.com', 'leo', 'full_price', ''),
(9, 'Ειρήνη', 'Βαβουράκη', '438794620439', 'eirini@gmail.com', 'eir', 'student', '23408604685');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eisitiria_kanoniko`
--
ALTER TABLE `eisitiria_kanoniko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eisitiria_meiomeno`
--
ALTER TABLE `eisitiria_meiomeno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `kartes_kanoniko`
--
ALTER TABLE `kartes_kanoniko`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `kartes_meiomeno`
--
ALTER TABLE `kartes_meiomeno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eisitiria_meiomeno`
--
ALTER TABLE `eisitiria_meiomeno`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kartes_kanoniko`
--
ALTER TABLE `kartes_kanoniko`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kartes_meiomeno`
--
ALTER TABLE `kartes_meiomeno`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
