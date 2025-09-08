--
-- Table structure for table `blackpink`
--

CREATE TABLE `blackpink` (
 `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- data for table `blackpink`--

INSERT INTO blackpink(`id`, `name`, `code`, `image`, `price`) VALUES 
(1, 'BLACKPINK 1st FULL ALBUM [THE ALBUM] (Ver.1)','BP032', 'pics/album1.jpg', 16.67),
(2, 'BLACKPINK - 1st FULL ALBUM [THE ALBUM] (Ver.2)','BP033', 'pics/album11.jpg', 16.67),
(3, 'BLACKPINK 1st FULL ALBUM [THE ALBUM] (Ver.3)', 'BP034','pics/album13.jpg', 16.67),
(4, 'BLACKPINK 1st FULL ALBUM [THE ALBUM] (Ver.4)', 'BP035','pics/album14.jpg', 16.67),
(5, 'BLACKPINK - OFFICIAL LIGHT STICK KEYRING','BP036', 'pics/merch5.jpg', 13.44),
(6, '[H.Y.L.T] BLACKPINK - CHARACTER KEYRING', 'BP037','pics/merch2.jpg', 11.65),
(7, '[H.Y.L.T] BLACKPINK - CHARACTER KEYRING', 'BP038','pics/star1.jpg', 10.76),
(8, '[H.Y.L.T] BLACKPINK - CHARACTER KEYRING', 'BP039','pics/star2.jpg', 10.76),
(9, 'BLACKPINK : JENNIE - JENNIE [SOLO] PHOTOBOOK (SPECIAL EDITION)', 'BP040','pics/book2.jpg', 22.41),
(10, 'BLACKPINK : LISA - LISA PHOTOBOOK [0327] -LIMITED EDITION-', 'BP041','pics/book9.jpg', 21.51);



--
-- Indexes for table `blackpink`
--
ALTER TABLE `blackpink`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blackpink`
--
ALTER TABLE `blackpink`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


--
-- Table structure for table `bts`
--

CREATE TABLE `bts` (
 `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- data for table `bts`--

INSERT INTO bts(`id`, `name`, `code`, `image`, `price`) VALUES 
(1, 'BTS - DYNAMITE - <br>LIMITED EDITION CASSETTE (February Shipping)','BTS01', 'pics/bts1.jpg', 8.16),
(2, 'Readers Digest Asia 2020.12 (BTS)','BTS02', 'pics/bts2.jpg', 5.50),
(3, 'BTS - Mini Album Vol. 2 <br>[SKOOL LUV AFFAIR] (Special Addition)', 'BTS03','pics/bts3.jpg', 34.74),
(4, '[BLU-RAY] BTS - WORLD TOUR <br>[LOVE YOURSELF : SPEAK YOURSELF] LONDON BLU-RAY', 'BTS04','pics/bts4.jpg', 50.41),
(5, 'BTS - Learn! KOREAN with BTS Book Package', 'BTS05', 'pics/bts5.jpg', 80.66),
(6, 'BTS - House Of Cards : GRAPHIC LYRICS Vol.3', 'BTS06','pics/bts6.jpg', 18.24),
(7, 'BTS - Jigsaw Puzzle ', 'BTS07','pics/bts7.jpg', 45.37);



--
-- Indexes for table `bts`
--
ALTER TABLE `bts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blackpink`
--
ALTER TABLE `bts`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Table structure for table `mamamoo`
--

CREATE TABLE `mamamoo` (
 `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- data for table `mamamoo`--

INSERT INTO mamamoo(`id`, `name`, `code`, `image`, `price`) VALUES 
(1, 'MAMAMOO - Mini Album Vol.6 [Yellow Flower]','MMM01', 'pics/mmm1.png', 13.38),
(2, 'MAMAMOO - Mini Album Vol.7 [RED MOON]','MMM02', 'pics/mmm2.png', 13.38),
(3, 'MAMAMOO - Mini Album Vol.8 [BLUE;S]', 'MMM03','pics/mmm3.png', 13.38),
(4, 'MAMAMOO - Mini Album Vol.9 [White Wind]', 'MMM04','pics/mmm4.png', 13.38),
(5, 'Moon Byul - Repackage Mini Album Vol.2 [門OON : Repackage] (Kit Album)', 'MMM05', 'pics/mmm5.jpg', 17.39),
(6, 'Solar - Single Album Vol.1 [SPIT IT OUT]', 'MMM06','pics/mmm6.jpg', 13.38),
(7, 'Whee In - Single Album', 'MMM07','pics/mmm7.jpg', 13.38),
(8, 'Hwa Sa - Mini Album Vol.1 [María] (Random Ver.)', 'MMM08','../pics/mmm8.jpg', 16.11),
(9, '<br>MAMAMOO<br>[Virtual Play Album] ', 'MMM09','../pics/mmm9.jpg', 50.06),
(10, 'MAMAMOO - 4SEASON F/W CONCERT KiT VIDEO<br>', 'MMM10','../pics/mmm10.jpg', 57.43),
(11, '<br>MAMAMOO - OFFICIAL LIGHT STICK [Ver 2.5]<br>', 'MMM11','../pics/mmm11.png', 27.31);

--
-- Indexes for table `mamamoo`
--
ALTER TABLE `mamamoo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mamamoo`
--
ALTER TABLE `mamamoo`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Table structure for table `nct`
--

CREATE TABLE `nct` (
 `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- data for table `nct`--

INSERT INTO nct(`id`, `name`, `code`, `image`, `price`) VALUES 
(1, 'NCT DREAM - 2021 SEASONS GREETINGS (Only Special Gift : All Member Photocard set)','NCT01', 'pics/nct1.jpg', 34.83),
(2, 'NCT 127 - 2021 SEASONS GREETINGS (Only Special Gift : All Member Photocard set)','NCT02', 'pics/nct2.jpg', 34.83),
(3, 'NCT - Kit Album [The 2nd Album RESONANCE Pt.1] (Random Ver.)', 'NCT03','pics/nct3.jpg', 17.51),
(4, 'NCT - Album [The 2nd Album RESONANCE Pt.1] (Random Ver.)', 'NCT04','../pics/nct4.jpg', 17.51),
(5, 'NCT DREAM - [JISUNG] NCT LIFE : DREAM in Wonderland Commentary Book + Luggage Tag SET', 'NCT05', 'pics/nct5.jpg', 22.92),
(6, 'NCT DREAM - [CHENLE] NCT LIFE : DREAM in Wonderland Commentary Book + Luggage Tag SET', 'NCT06','pics/nct6.jpg', 22.92),
(7, 'NCT DREAM - [JAEMIN] NCT LIFE : DREAM in Wonderland Commentary Book + Luggage Tag SET', 'NCT07','pics/nct7.jpg', 22.92),
(8, 'NCT DREAM - MINI BAG NCT LIFE: DREAM in Wonderland', 'NCT08','pics/nct8.jpg', 22.92);


--
-- Indexes for table `nct`
--
ALTER TABLE `nct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nct`
--
ALTER TABLE `nct`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Table structure for table `exo`
--

CREATE TABLE `exo` (
 `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- data for table `exo`--

INSERT INTO exo(`id`, `name`, `code`, `image`, `price`) VALUES 
(1, 'EXO - 2021 SEASONS GREETINGS (Only Ktown4us Special Gift : All Member Photocard set)','EXO01', 'pics/exo1.jpg', 34.83),
(2, 'EXO-SC - Album Vol.1 [1 Billion Views] (OCEAN VIEW Ver.)','EXO02', 'pics/exo2.jpg', 14.94),
(3, 'EXO-SC - Album Vol.1 [1 Billion Views] (Random Ver.)', 'EXO03','pics/exo3.jpg', 14.94),
(4, '[DVD] EXO - EXO PLANET #5 - EXplOration DVD', 'EXO04','pics/exo4.jpg', 36.30),
(5, 'EXO - FANLIGHT STICK POUCH', 'EXO05', 'pics/exo5.jpg', 18.34),
(6, 'EXO - OFFICIAL LIGHT STICK [Ver. 3.0]', 'EXO06','pics/exo6.jpg', 33.00),
(7, '[PHOTOBOOK] EXO - [PRESENT ; the moment] Photobook', 'EXO07','pics/exo7.jpg', 30.25),
(8, 'ESQUIRE 2020.10 C Type (Cover : KAI / Content : Ha Sung Woon 8p)', 'EXO08','pics/exo8.jpg', 6.60);


--
-- Indexes for table `exo`
--
ALTER TABLE `exo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exo`
--
ALTER TABLE `exo`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


--
-- Table structure for table `album`
--

CREATE TABLE `album` (
 `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- data for table ` album`--

INSERT INTO  album(`id`, `name`, `code`, `image`, `price`) VALUES 
(1, 'TWICE - Album Vol.2 [Eyes wide open] (Random Ver.)',' AL01', 'pics/album7.jpg', 16.67),
(2, 'Seventeen - Album [24H] (Japanese Version)','AL02', 'pics/album6.jpg', 16.67),
(3, 'Mamamoo - Album Vol.2 [reality in BLACK]', 'AL03','pics/album3.jpg', 16.67),
(4, 'TXT - Album [minisode1 : Blue Hour] (Random Ver.)', 'AL04','pics/album4.jpg', 16.67),
(5, 'BLACKPINK 1st FULL ALBUM [THE ALBUM] (Ver.1)','AL05', 'pics/album1.jpg', 13.44),
(6, 'BLACKPINK - 1st FULL ALBUM [THE ALBUM] (Ver.2)', 'AL06','pics/album11.jpg', 11.65),
(7, 'Weki Meki - Mini Album Vol.4 [NEW RULES] (Break ver.)', 'AL07','pics/album5.jpg', 10.76),
(8, 'KARD - Single Album Vol.1 [Way With Words]', 'AL08','pics/album8.jpg', 10.76),
(9, 'VERIVERY - Mini Album Vol.5 [FACE US] (OFFICIAL Ver.)', 'AL09','pics/album9.jpg', 22.41),
(10, '>Ailee - EP Mini Album Vol.5 [Im]', 'AL10','pics/album10.jpg', 21.51),
(11, 'BTS - Album [MAP OF THE SOUL : 7] (Random Ver.)', 'AL11','pics/album2.jpg', 21.51),
(12, '>AWEEK - Single Album Vol.2 [BETTER TODAY]', 'AL12','pics/album12.jpg', 21.51);

--
-- Indexes for table `album `
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `blackpink`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Table structure for table `star1`
--

CREATE TABLE `star1` (
 `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- data for table ` star1`--

INSERT INTO  star1(`id`, `name`, `code`, `image`, `price`) VALUES 
(1, 'BLACKPINK - POP-UP CARD TYPE 1',' ST01', 'pics/star1.jpg', 16.67),
(2, 'BLACKPINK - POP-UP CARD TYPE 2','ST02', 'pics/star2.jpg', 16.67),
(3, 'Red Velvet - IRENE & SEULGI - Wall Scroll Poster (Top Note IRENE ver)', 'ST03','pics/star3.jpg', 18.67),
(4, 'Red Velvet - IRENE & SEULGI - Wall Scroll Poster (Top Note SEULGI ver)', 'ST04','pics/star4.jpg', 13.67),
(5, '(G)I-DLE - (G)I-DLE X LIPSS [I TRUST JACKET BEHIND CUT] (Group Black Color)','ST05', 'pics/star5.jpg', 10.44),
(6, '(G)I-DLE - (G)I-DLE X LIPSS [I TRUST JACKET BEHIND CUT] (Group White Color)', 'ST06','pics/star6.jpg', 11.65),
(7, '(G)I-DLE - (G)I-DLE X LIPSS [I TRUST JACKET BEHIND CUT] INSTAX Film Member 6p 1set', 'ST07','pics/star7.jpg', 10.76),
(8, 'TAEYEON - Wall Scroll Poster', 'ST08','pics/star8.jpg', 10.76);

--
-- Indexes for table `star1 `
--
ALTER TABLE `star1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `star1`
--
ALTER TABLE `star1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Table structure for table `star2`
--

CREATE TABLE `star2` (
 `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- data for table ` star2`--

INSERT INTO  star2(`id`, `name`, `code`, `image`, `price`) VALUES 
(1, 'GFRIEND - THE 2ND PHOTOBOOK [CHOICE]',' PH01', 'pics/book1.jpg', 16.67),
(2, 'BLACKPINK : JENNIE [SOLO] PHOTOBOOK (SPECIAL EDITION)','PH02', 'pics/book2.jpg', 16.67),
(3, 'WayV - PHOTOBOOK [假日] (TEN Ver.)', 'PH03','pics/book3.jpg', 18.67),
(4, 'Seventeen - Ode to You, Off the Record', 'PH04','pics/book4.jpg', 13.67),
(5, 'Tzuyu - 1ST PHOTOBOOK [Yes, I am Tzuyu] (Blue Ver.)','PH05', 'pics/book5.jpg', 10.44),
(6, 'Tzuyu - 1ST PHOTOBOOK [Yes, I am Tzuyu] (Peach Ver.)', 'PH06','pics/book6.jpg', 11.65),
(7, 'MOON BYUL - ONTACT PHOTOBOOK -IN', 'PH07','pics/book7.jpg', 10.76),
(8, 'LACKPINK : LISA PHOTOBOOK [0327] -LIMITED EDITION-', 'PH08','pics/book8.jpg', 10.76);

--
-- Indexes for table `star2`
--
ALTER TABLE `star2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `star2`
--
ALTER TABLE `star2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;