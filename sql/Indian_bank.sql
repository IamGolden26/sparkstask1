
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `age`int(2) NOT NULL,
  `email` varchar(30) NOT NULL,
 `account`int(10) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`,`email`,`account`, `balance`) VALUES
(1, 'Ravi','24','ravi@gmail.com','1032180400',50000),
(2, 'Pooja','25','pooh@gmail.com','1032180401',30000),
(3, 'Vaishnavi','20','vaish@gmail.com','1032180402',40000),
(4, 'Gauri','20','gauri@gmail.com','1032180475',50000),
(5, 'Anchal','23','anchal@gmail.com','1032180403',40000),
(6, 'Dhara','20','dhd@gmail.com','1032180404', 30000),
(7, 'Siddhi','20','siddhi@gmail.com','1032180405',50000),
(8, 'Dhruvi','20','dhru@gmail.com','1032180406',40000),
(9, 'Ryan','25','ryan@gmail.com','1032180407',50000);
(10,'Sonal','21','jeppusonal@gmail.com','1032180408',50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;


