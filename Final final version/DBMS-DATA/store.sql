CREATE TABLE `Store` (
  `storeid` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `address` varchar(80) COLLATE utf16_unicode_ci NOT NULL,
  `smanager` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `num_salesperson` int(11) NOT NULL,
  `regionid` varchar(20) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `Store`
--

INSERT INTO `Store` (`storeid`, `address`, `smanager`, `num_salesperson`, `regionid`) VALUES
('CO001', '9889 Stevenson King Drive', 'Winston Hobbs', 20, 'CO'),
('CO002', '5230 Shore Drive', 'Mathias Mendez', 20, 'CO'),
('MN001', '5809 West End Court', 'Macie Rocha', 20, 'MN'),
('MN002', '4796 Claremont Place', 'Aliza Knapp', 20, 'MN'),
('PA001', '3742 Fuller Avenue', 'Grady Harrison', 20, 'PA'),
('PA002', '5871 Arcade Place', 'Ezra Burt', 20, 'PA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Store`
--
ALTER TABLE `Store`
 ADD PRIMARY KEY (`storeid`), ADD KEY `regionid` (`regionid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Store`
--
ALTER TABLE `Store`
ADD CONSTRAINT `store_ibfk_1` FOREIGN KEY (`regionid`) REFERENCES `Region` (`regionid`);
