-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for hotel_booking_sys
CREATE DATABASE IF NOT EXISTS `hotel_booking_sys` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hotel_booking_sys`;

-- Dumping structure for table hotel_booking_sys.booking
CREATE TABLE IF NOT EXISTS `booking` (
  `book_id` varchar(20) NOT NULL,
  `book_date` date DEFAULT NULL,
  `date_in` date DEFAULT NULL,
  `date_out` date DEFAULT NULL,
  `price` float DEFAULT NULL,
  `no_room` int(11) DEFAULT NULL,
  `no_adult` int(11) DEFAULT NULL,
  `no_child` int(11) DEFAULT NULL,
  `pay_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hotel_booking_sys.booking: ~17 rows (approximately)
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` (`book_id`, `book_date`, `date_in`, `date_out`, `price`, `no_room`, `no_adult`, `no_child`, `pay_id`) VALUES
	('B001', '2021-12-22', '2022-01-02', '2022-01-04', 520, 3, 6, 0, 'P008'),
	('B002', '2021-12-14', '2021-12-24', '2021-12-26', 389.35, 2, 4, 3, 'P001'),
	('B003', '2021-12-30', '2022-01-02', '2022-01-05', 210, 1, 2, 2, 'P014'),
	('B004', '2021-12-30', '2022-01-10', '2022-01-14', 306.2, 1, 2, 0, 'P003'),
	('B005', '2021-12-27', '2021-12-30', '2022-01-01', 780.2, 1, 4, 0, 'P005'),
	('B006', '2021-12-28', '2021-12-30', '2022-01-02', 820.88, 2, 8, 4, 'P007'),
	('B007', '2021-12-31', '2022-01-10', '2022-01-15', 632.5, 1, 4, 4, 'P012'),
	('B008', '2022-01-01', '2022-01-10', '2022-01-14', 210.5, 1, 2, 1, 'P011'),
	('B009', '2021-12-29', '2021-12-30', '2022-01-01', 888.2, 2, 8, 2, 'P015'),
	('B010', '2022-01-01', '2022-01-01', '2022-01-03', 852, 3, 4, 0, 'P002'),
	('B011', '2022-01-05', '2021-01-10', '2022-01-18', 625.33, 2, 4, 0, 'P010'),
	('B012', '2021-12-28', '2021-12-30', '2021-12-31', 654.1, 3, 8, 0, 'P013'),
	('B013', '2022-01-09', '2022-01-15', '2022-01-20', 300.2, 2, 4, 2, 'P006'),
	('B014', '2022-01-13', '2022-01-13', '2022-01-14', 163.2, 1, 4, 1, 'P004'),
	('B015', '2021-12-27', '2021-12-30', '2022-01-02', 858.88, 2, 4, 0, 'P009'),
	('B016', '2022-01-15', '2022-01-20', '2022-01-26', 962.66, 1, 2, 1, 'P016'),
	('B017', '2022-01-30', '2022-02-01', '2022-02-02', 189, 2, 2, 1, 'P017');
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;

-- Dumping structure for table hotel_booking_sys.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` varchar(20) NOT NULL,
  `cust_name` varchar(50) DEFAULT NULL,
  `cust_ic` varchar(30) DEFAULT NULL,
  `cust_passport` varchar(20) DEFAULT NULL,
  `cust_gender` varchar(1) DEFAULT NULL,
  `cust_email` varchar(30) DEFAULT NULL,
  `cust_phone` varchar(20) DEFAULT NULL,
  `book_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cust_id`),
  UNIQUE KEY `cust_name` (`cust_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hotel_booking_sys.customer: ~17 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_ic`, `cust_passport`, `cust_gender`, `cust_email`, `cust_phone`, `book_id`) VALUES
	('C001', 'MUHAMMAD ALIB BIN AHMAD', '901223-14-5987', '-', 'M', 'alib1223@gmail.com', '017-4805024', 'B010'),
	('C002', 'NUR ANI BINTI ZIKRI', '940612-08-5962', '-', 'F', 'nurani0808@hotmail.com', '016-4226324', 'B002'),
	('C003', 'ELWIN A/L ASHWANI', '931221-07-5223', '-', 'M', 'elwin1221@gmail.com', '017-4852130', 'B001'),
	('C004', 'CHAN CHI YAN', '960512-13-5896', '-', 'F', 'chichi96@yahoo.com.my', '012-9655423', 'B009'),
	('C005', 'KHOR JIE EN', '990920-07-5446', '-', 'F', 'khorkhor@gmail.com', '016-4998521', 'B004'),
	('C006', 'MUHAMMAD ASAD BIN MOTAWH', '940606-06-5441', '-', 'F', 'mudasad@gmail.com', '017-4012030', 'B006'),
	('C007', 'ASRINA BINTI HALIF', '950612-21-6972', '-', 'F', 'asrina00@gmail.com', '016-5669854', 'B003'),
	('C008', 'NUR AISYAH BINTI AIMAN', '-', 'S0019661A', 'F', 'aisyah_@gmail.com', '017-4856000', 'B005'),
	('C009', 'FARIA A/P JOSHA', '-', 'J8369854', 'F', 'farialuvfood@yahoo.com.my', '017-4854200', 'B008'),
	('C010', 'AHMAD BIN AFIQ', '770408-14-5663', '-', 'M', 'ahmad125@gmail.com', '017-1256300', 'B007'),
	('C011', 'LIM JIA YING', '-', 'S0099960A', 'F', 'jiaying@outlook.com', '017-8008888', 'B011'),
	('C012', 'ADAM BIN ABU', '980512-03-5445', '-', 'M', 'adam0513@gmail.com', '012-5361200', 'B012'),
	('C013', 'MAISARAH BINTI RAHIM', '990102-14-5622', '-', 'F', 'maisarah@gmail.com', '012-5987412', 'B013'),
	('C014', 'JOSHUA ANAK IQFIN ', '910229-07-5213', '-', 'M', 'joshua@yahoo.com.my', '016-5569840', 'B015'),
	('C015', 'EUNICE ANAK CLINYEN', '-', 'S0031254A', 'F', 'eunice520@gmail.com', '012-5203120', 'B014'),
	('C016', 'SHALINI A/P DINESH', '960321-07-5212', '-', 'F', 'shalini@gmail.com', '012-5632105', 'B016'),
	('C017', 'AHMAD BIN IRFAN', '-', 'S005213A', 'M', 'ahmad@yahoo.com.my', '012-6523104', 'B017');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;

-- Dumping structure for table hotel_booking_sys.payment
CREATE TABLE IF NOT EXISTS `payment` (
  `pay_id` varchar(20) NOT NULL,
  `pay_method` varchar(50) DEFAULT NULL,
  `pay_date` date DEFAULT NULL,
  `pay_time` time DEFAULT NULL,
  `pay_status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hotel_booking_sys.payment: ~17 rows (approximately)
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` (`pay_id`, `pay_method`, `pay_date`, `pay_time`, `pay_status`) VALUES
	('P001', 'CREDIT CARD(MASTER CARD)', '2021-12-14', '17:05:49', 'Successful'),
	('P002', 'CREDIT CARD (MASTER CARD)', '2022-01-01', '08:50:02', 'Successful'),
	('P003', 'DEBIT CARD(VISA)', '2022-01-05', '07:05:20', 'Successful '),
	('P004', 'DEBIT CARD(MASTER CARD)', '2022-01-13', '17:30:00', 'Successful '),
	('P005', 'DEBIT CARD(VISA)', '2021-12-28', '20:00:00', 'Successful '),
	('P006', 'DEBIT CARD(VISA)', '2022-01-02', '19:10:00', 'Successful '),
	('P007', 'DEBIT CARD(MASTER CARD)', '2021-12-27', '09:08:10', 'Successful '),
	('P008', 'CREDIT CARD (MASTER CARD)', '2021-12-25', '08:00:02', 'Successful '),
	('P009', 'CREDIT CARD(VISA)', '2021-12-28', '10:02:03', 'Successful '),
	('P010', 'CREDIT CARD(VISA)', '2022-01-02', '12:55:22', 'Successful '),
	('P011', 'DEBIT CARD(MASTER CARD)', '2022-01-10', '13:10:55', 'Successful '),
	('P012', 'CREDIT CARD (MASTER CARD)', '2022-01-05', '23:10:49', 'Successful '),
	('P013', 'CREDIT CARD(VISA)', '2021-12-29', '15:20:34', 'Successful '),
	('P014', 'DEBIT CARD(MASTER CARD)', '2022-01-01', '09:52:10', 'Successful '),
	('P015', 'DEBIT CARD(VISA) ', '2022-02-05', '13:51:07', 'Successful'),
	('P016', 'CREDIT CARD (MASTER CARD)', '2022-01-17', '17:25:00', 'Successful'),
	('P017', 'CREDIT CARD (VISA)', '2022-01-30', '17:21:00', 'Successful');
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;

-- Dumping structure for table hotel_booking_sys.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table hotel_booking_sys.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
	(1, 'krystal', '$2y$10$VgMqUVWO63DLWX/ufmkXMOL41CTBhB.Btvb4v7cj9Ku4Ekj8Covee', '2022-01-17 17:36:16'),
	(2, 'abc', '$2y$10$Wm4rreyO/tQKEGcpol2gfuaeWsh8w801IDcrt3tDF8Ve6Z3LGmE8y', '2022-01-18 12:02:44'),
	(6, 'sharonooi', '$2y$10$Zuow0suXropk5.LesjN9kOpI4fPDx.GPWN/fyDiHdMv5Xr17Mo5tS', '2022-01-21 13:25:35'),
	(7, 'kiki123', '$2y$10$EPuCTpoexyicjRdhX9o8KeKD0jjxppiXrQZ6KXho58R9bsAXcdIXO', '2022-01-24 09:23:20');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for view hotel_booking_sys.v_book_pay_cust
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_book_pay_cust` (
	`cust_id` VARCHAR(20) NOT NULL COLLATE 'latin1_swedish_ci',
	`cust_name` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`cust_email` VARCHAR(30) NULL COLLATE 'latin1_swedish_ci',
	`cust_phone` VARCHAR(20) NULL COLLATE 'latin1_swedish_ci',
	`book_id` VARCHAR(20) NOT NULL COLLATE 'latin1_swedish_ci',
	`date_in` DATE NULL,
	`date_out` DATE NULL
) ENGINE=MyISAM;

-- Dumping structure for view hotel_booking_sys.v_cust_pay
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_cust_pay` (
	`cust_id` VARCHAR(20) NOT NULL COLLATE 'latin1_swedish_ci',
	`cust_name` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`cust_email` VARCHAR(30) NULL COLLATE 'latin1_swedish_ci',
	`cust_phone` VARCHAR(20) NULL COLLATE 'latin1_swedish_ci',
	`price` FLOAT NULL,
	`pay_method` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`pay_date` DATE NULL,
	`pay_time` TIME NULL,
	`pay_status` VARCHAR(20) NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view hotel_booking_sys.v_book_pay_cust
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_book_pay_cust`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_book_pay_cust` AS SELECT customer.cust_id, customer.cust_name, customer.cust_email, customer.cust_phone, booking.book_id, booking.date_in, booking.date_out
FROM customer, booking
WHERE customer.book_id = booking.book_id ;

-- Dumping structure for view hotel_booking_sys.v_cust_pay
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_cust_pay`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_cust_pay` AS SELECT customer.cust_id, customer.cust_name, customer.cust_email, customer.cust_phone, booking.price, payment.pay_method, payment.pay_date, payment.pay_time, payment.pay_status
FROM customer, booking, payment
WHERE customer.book_id = booking.book_id AND booking.pay_id = payment.pay_id ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
