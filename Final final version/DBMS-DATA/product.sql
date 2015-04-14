CREATE TABLE `Product` (
  `pid` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `pname` varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  `inventory` int(11) NOT NULL,
  `price` double NOT NULL,
  `brand` varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  `Category` varchar(20) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`pid`, `pname`, `inventory`, `price`, `brand`, `Category`) VALUES
('L011', 'Loreal Magic Nude Liquid Found', 100, 9, 'Loreal', 'Foundation'),
('L012', 'Loreal True Match Foundation', 769, 14, 'Loreal', 'Foundation'),
('L021', 'Loreal Colour Riche Lipstick', 333, 12, 'Loreal', 'Lipstick'),
('L022', 'Loreal Colour Caresse Lipstick', 870, 15, 'Loreal', 'Lipstick'),
('L023', 'Loreal Extraordinaire Lipstick', 567, 10, 'Loreal', 'Lipstick'),
('L031', 'Loreal Age Perfect Moisturizer', 167, 9, 'Loreal', 'Moisturizer'),
('L032', 'Loreal RevitaLift Moisturizer', 449, 8, 'Loreal', 'Moisturizer'),
('R011', 'REVLON AGE DEFYING Foundation', 500, 12, 'Revlon', 'Foundation'),
('R012', 'REVLON COLORSTAY Foundation', 800, 15, 'Revlon', 'Foundation'),
('R013', 'REVLON PHOTOREADY Foundation', 500, 10, 'Revlon', 'Foundation'),
('R021', 'REVLON COLORSTAY Lipstick', 325, 10, 'Revlon', 'Lipstick'),
('R022', 'REVLON SUPER LUSTROUS Lipstick', 456, 9, 'Revlon', 'Lipstick'),
('R023', 'REVLON MOON DROPS Lipstick', 239, 14, 'Revlon', 'Lipstick'),
('R031', 'REVLON PHOTOREADY Moisturizer', 455, 10, 'Revlon', 'Moisturizer'),
('R032', 'REVLON AGE DEFYING Moisturizer', 320, 12, 'Revlon', 'Moisturizer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
 ADD PRIMARY KEY (`pid`), ADD KEY `kindid` (`Category`);