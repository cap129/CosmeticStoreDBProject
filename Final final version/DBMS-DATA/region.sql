CREATE TABLE `Region` (
  `regionid` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `rname` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `rmanager` varchar(20) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `Region`
--

INSERT INTO `Region` (`regionid`, `rname`, `rmanager`) VALUES
('CO', 'Colorado', 'Saul Peters'),
('MN', 'Minnesota', 'Adam Case'),
('PA', 'Pennsylvania', 'Julieta Perez');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Region`
--
ALTER TABLE `Region`
 ADD PRIMARY KEY (`regionid`);