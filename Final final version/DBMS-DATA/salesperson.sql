CREATE TABLE `Salesperson` (
  `sid` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `sname` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `address` varchar(80) COLLATE utf16_unicode_ci DEFAULT NULL,
  `phone` char(11) COLLATE utf16_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf16_unicode_ci DEFAULT NULL,
  `storeid` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `since` date NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `Salesperson`
--

INSERT INTO `Salesperson` (`sid`, `sname`, `address`, `phone`, `email`, `storeid`, `since`, `salary`) VALUES
('S0001', 'Smith', '1219 Mount Olive Road', '678-907-119', 'WalterLSmith@cuvox.d', 'PA001', '0000-00-00', 2500),
('S0002', 'Estrada', '1223 Marie Street', '410-941-219', 'JeanetteBEstrada@cuv', 'PA001', '0000-00-00', 2500),
('S0003', 'Goodrum', '2462 Despard Street', '404-685-312', 'DeweyPGoodrum@dayrep', 'PA001', '0000-00-00', 2000),
('S0004', 'Howard', '4909 Locust View Drive', '415-883-877', 'JeffYHoward@gustr.co', 'PA002', '0000-00-00', 1500),
('S0005', 'Moore', '2848 Star Trek Drive', '850-317-388', 'NormanJMoore@dayrep.', 'PA002', '0000-00-00', 1800),
('S0006', 'Stone', '3383 Cemetery Street', '831-908-228', 'WilliamTStone@telewo', 'PA002', '0000-00-00', 1800),
('S0007', 'Patterson', '2945 Owagner Lane', '206-274-786', 'DonnaRPatterson@rhyt', 'MN001', '0000-00-00', 1500),
('S0008', 'Spann', '1453 Randolph Street', '508-647-212', 'LindaVSpann@armyspy.', 'MN001', '0000-00-00', 1500),
('S0009', 'Peek', '3318 Rosebud Avenue', '870-467-939', 'BethJPeek@cuvox.de', 'MN001', '0000-00-00', 1500),
('S0010', 'Highsmith', '2637 Steve Hunt Road', '305-788-272', 'JohnAHighsmith@gustr', 'CO001', '0000-00-00', 1500),
('S0011', 'Danna', '2338 Tenmile Road', '781-748-305', 'MichealLDanna@armysp', 'CO001', '0000-00-00', 1500),
('S0012', 'Wright', '3997 Arrowood Drive', '904-460-532', 'JeffreyEWright@rhyta', 'CO001', '0000-00-00', 1500),
('S0013', 'Jones', '823 Lynn Avenue', '715-488-010', 'PaulPJones@teleworm.', 'CO002', '0000-00-00', 1500),
('S0014', 'Apodaca', '1317 Conaway Street', '812-423-259', 'DavidBApodaca@armysp', 'CO002', '0000-00-00', 1500),
('S0015', 'Lemond', '138 Taylor Street', '914-672-043', 'RhondaCLemond@cuvox.', 'CO002', '0000-00-00', 1500),
('S0016', 'Mann', '2514 Church Street', '718-413-003', 'TamarEMann@superrito', 'MN002', '0000-00-00', 1500),
('S0017', 'Parker', '3503 Briarhill Lane', '330-241-055', 'KermitMParker@cuvox.', 'MN002', '0000-00-00', 1500),
('S0018', 'Soto', '1959 Fairway Drive', '707-451-491', 'CynthiaSSoto@rhyta.c', 'MN002', '0000-00-00', 1500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Salesperson`
--
ALTER TABLE `Salesperson`
 ADD PRIMARY KEY (`sid`), ADD KEY `storeid` (`storeid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Salesperson`
--
ALTER TABLE `Salesperson`
ADD CONSTRAINT `salesperson_ibfk_1` FOREIGN KEY (`storeid`) REFERENCES `Store` (`storeid`);
