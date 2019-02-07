-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2018 at 09:03 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigscreen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

DROP TABLE IF EXISTS `tbl_bank`;
CREATE TABLE IF NOT EXISTS `tbl_bank` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(50) NOT NULL,
  `banktype` varchar(10) NOT NULL,
  `account_no` varchar(16) NOT NULL,
  `card_no` varchar(16) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `amount` float NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`bid`, `bank_name`, `banktype`, `account_no`, `card_no`, `month`, `year`, `cvv`, `name`, `amount`, `status`) VALUES
(1, 'FEDERAL BANK', 'FDC', '7410852096301234', '7410852096301234', 'Nov', 2022, 123, 'AJIL SUNNY', 4500000, 1),
(2, 'SBI', 'ODC', '9630852074107894', '9630852074107894', 'May', 2023, 789, 'AMAL SUNNY', 3500000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_details`
--

DROP TABLE IF EXISTS `tbl_details`;
CREATE TABLE IF NOT EXISTS `tbl_details` (
  `regid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `place` varchar(50) NOT NULL,
  `pin` bigint(20) NOT NULL,
  `profile_pic` text NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `regid` (`regid`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_details`
--

INSERT INTO `tbl_details` (`regid`, `name`, `email`, `phone`, `place`, `pin`, `profile_pic`) VALUES
(33, 'AAA', 'aaa@aa.c', '7410852963', 'aaaa', 963852, 'profilepic.png'),
(1, 'Ajil', 'admin', '8593967684', 'kannur', 670706, 'profilepic.png'),
(29, 'ajith', 'ajith@gmail.com', '7894561230', 'kottayam', 598746, 'profilepic.png'),
(4, 'Alan', 'alan@gmail.com', '9638520741', 'Kannur', 670706, '154244448210121.jpg'),
(6, 'Amal Sunny', 'amal@gmail.com', '8520147963', 'kannur', 670706, '1542606915Appu B 20150503_175757.jpg'),
(10, 'annamma', 'annamma@gmail.com', '2222222222', 'kannur', 670706, 'profilepic.png'),
(7, 'ashil', 'ashil@gmail.com', '7410258963', 'kannur', 670706, 'profilepic.png'),
(14, 'bibin', 'bibin@gmail.com', '7410258963', 'idukki', 526847, 'profilepic.png'),
(2, 'Ajil Sunny', 'dangers770@gmail.com', '098765436543', 'kannur', 670706, 'profilepic.png'),
(26, 'henel', 'henel@gmail.com', '9638520147', 'thrissur', 745896, 'profilepic.png'),
(27, 'jikku', 'jikku@gmail.com', '8520369741', 'pathanamthitta', 589647, 'profilepic.png'),
(3, 'Jithu Benny', 'jithu@gmail.com', '7410852964', 'kannur', 670706, '15425508871542074176Jithu MCA 20181021_112436.jpg'),
(25, 'Jk', 'jk@gmail.com', '7410852963', 'kollam', 987456, 'profilepic.png'),
(11, 'jobin', 'jobin@gmail.com', '9632587410', 'tvm', 654987, 'profilepic.png'),
(30, 'jonath', 'jonath@gmail.com', '8520147963', 'kannur', 670706, 'profilepic.png'),
(28, 'Jubin', 'jubin@gmail.com', '8741025963', 'kannur', 670704, 'profilepic.png'),
(32, 'LIFNA', 'lifna@gmail.com', '8502147963', 'kozhikode', 852963, 'profilepic.png'),
(8, 'mini', 'mini@gmail.com', '7410258963', 'kannur', 670706, 'profilepic.png'),
(31, 'muneeb', 'muneeb@gmail.com', '7410258963', 'kottayam', 654987, 'profilepic.png'),
(13, 'Sachin Jose', 'sachin@gmail.com', '8520147963', 'idukki', 856974, 'profilepic.png'),
(12, 'sanjay', 'sanjay@gmail.com', '7410258963', 'kannur', 670705, '154238453910121.jpg'),
(9, 'sunny', 'sunny@gmail.com', '9495461810', 'kiliyanthara', 670706, 'profilepic.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_filmselection`
--

DROP TABLE IF EXISTS `tbl_filmselection`;
CREATE TABLE IF NOT EXISTS `tbl_filmselection` (
  `fs_id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`fs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_filmselection`
--

INSERT INTO `tbl_filmselection` (`fs_id`, `mid`, `lid`, `status`, `date`) VALUES
(65, 1, 11, 1, '2018-11-16'),
(66, 2, 11, 0, '2018-11-15'),
(67, 3, 11, 1, '2018-11-10'),
(68, 2, 4, 1, '2018-11-02'),
(74, 4, 4, 0, '2018-11-19'),
(70, 1, 4, 2, '2018-11-17'),
(76, 3, 4, 2, '2018-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `type` int(11) NOT NULL,
  `lstatus` int(11) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`lid`, `username`, `password`, `type`, `lstatus`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 1),
(4, 'jithu@gmail.com', '97e75fd1f9125270c4ec644141947574', 2, 1),
(5, 'alan@gmail.com', '02558a70324e7c4f269c69825450cec8', 3, 1),
(7, 'amal@gmail.com', '16b5480e7b6e68607fe48815d16b5d6d', 1, 1),
(8, 'ashil@gmail.com', '3744a3aa86176a4e69178ccfa8198b6e', 2, 1),
(9, 'mini@gmail.com', '44c6c370fd1859325f7119e96a81584e', 1, 2),
(10, 'sunny@gmail.com', '533c5ba8368075db8f6ef201546bd71a', 2, 1),
(11, 'annamma@gmail.com', '15173f32dd031986e7767e63efd84d28', 2, 1),
(12, 'jobin@gmail.com', 'e6758b2a3b13423bdd3fe1b8e273909c', 3, 2),
(13, 'sanjay@gmail.com', '5f1c5342818bf8c161d8ff4e18ff1720', 3, 1),
(14, 'sachin@gmail.com', '15285722f9def45c091725aee9c387cb', 3, 1),
(15, 'bibin@gmail.com', '2da0e0aae058a32f35c573a85fb5b799', 2, 1),
(26, 'jk@gmail.com', '051a9911de7b5bbc610b76f4eda834a0', 2, 2),
(27, 'henel@gmail.com', '28cba70324927e5aae6338cde098665e', 3, 0),
(28, 'jikku@gmail.com', '76d3187d12610cedba761763a52fed2b', 2, 1),
(29, 'jubin@gmail.com', '9239afa636a520a0ff8c7b1f68ff5b0c', 2, 1),
(30, 'ajith@gmail.com', '9e423cca0e2efab9aa09a13c778a8ced', 3, 1),
(31, 'jonath@gmail.com', '891039eaf9b51335e368e56896ab18fc', 3, 0),
(32, 'muneeb@gmail.com', 'ca3728cab138a9fc5b10cc9db249a3b1', 2, 1),
(33, 'lifna@gmail.com', '4a39def561302c01e17cb46203273c44', 1, 1),
(34, 'aaa@aa.c', '21232f297a57a5a743894a0e4a801fc3', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_moviedetails`
--

DROP TABLE IF EXISTS `tbl_moviedetails`;
CREATE TABLE IF NOT EXISTS `tbl_moviedetails` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `distributer_id` int(11) NOT NULL,
  `film_name` varchar(100) NOT NULL,
  `poster_pic` varchar(500) NOT NULL,
  `cover_pic` varchar(500) NOT NULL,
  `directer` varchar(50) NOT NULL,
  `directer_pic` varchar(500) NOT NULL,
  `producer` varchar(50) NOT NULL,
  `producer_pic` varchar(500) NOT NULL,
  `mdirector` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `actor` varchar(50) NOT NULL,
  `actor_pic` varchar(500) NOT NULL,
  `actress` varchar(50) NOT NULL,
  `actress_pic` varchar(500) NOT NULL,
  `description` longtext NOT NULL,
  `date` varchar(4) NOT NULL,
  `price` text NOT NULL,
  PRIMARY KEY (`mid`),
  UNIQUE KEY `film_name` (`film_name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_moviedetails`
--

INSERT INTO `tbl_moviedetails` (`mid`, `distributer_id`, `film_name`, `poster_pic`, `cover_pic`, `directer`, `directer_pic`, `producer`, `producer_pic`, `mdirector`, `language`, `actor`, `actor_pic`, `actress`, `actress_pic`, `description`, `date`, `price`) VALUES
(1, 5, 'Theevandi', '1540657901images.jpg', '1540657901theevandicover.jpg', 'Fellini T. P', '1540657901maxresdefault.jpg', 'Shaji Nadesan', '1540657901producer.jpeg', 'Kailas Menon', 'Malayalam', 'Tovino Thomas', '1540657901Tovino_Thomas.jpg', 'Samyuktha Menon', '1540657901Samyuktha.jpg', 'The story takes place in the fictional village of Pullinad. Damodaran, a resident of Pullinad, is unable to take his pregnant wife to the hospital due to heavy rain and the rebellion following the murder of Rajiv Gandhi. His wife\'s brother(referred to as Ammavan by the protagonist and his friends) arranges for a midwife. Although he was initially against it, Damodaran later agrees. However the child dies causing great disappointment to Damodaran. He places the child on a table and goes to see his wife whose condition has worsened. Ammavan, a chain smoker, blows the smoke at the dead child which leads to its survival. The child is named Bineesh. As a child Bineesh buys cigarettes for his uncle as he gets to buy something using the balance amount. When he becomes a teenager he is prompted by his friend Safar to smoke a cigarette which eventually leads to him getting addicted to it. He is caught in the school for smoking due to a foolish statement made by Safar and is asked to bring his parents. He decides to bring his uncle. That night while going to meet his uncle he sees a packet of cigarette and decides to smoke one. He moves out and smokes peacefully. However he gets mistaken for a thief by 2 police constables and is taken to police station where everyone gets to know about his secret. As time passes he is addicted and gets the title of Theevandi (chainsmoker, colloquially). As time passes, his elder sister gets married to Vijith, a BSCL (Bharatiya Socialist Congress League) party member and he falls in love with his childhood friend Devi. Devi is the daughter of Madhu, an active BSCL member. He is against the affair of his daughter with Bineesh but later relents on the condition that Bineesh reduces his smoking. ', '2018', '2000000'),
(2, 5, 'Kayamkulam Kochunni', '1540661206images1.jpg', '1540661206kopchunni.jpg', 'Rosshan Andrrews', '1540661206rosshan-andrrews_0.jpg', 'Gokulam Gopalan', '1540661206md1.jpg', 'Gopi Sundar', 'Malayalam', 'Mohanlal', '1540661206Mohanlal_DN_0.jpg', 'Priya Anand ', '15406612061.jpg', 'Kayamkulam Kochunni was born in 1818, near Kottukulangara, Karthikapally Taluk in Travancore (present-day Kerala), British India. He spent his childhood and younger ages in Evoor. After his father\'s death, the family fell to poverty and Kochunni was employed in a grocery store. Later he began stealing and became an outlaw. He was known for stealing from the rich and giving to the poor. Kochunni was once caught by the officials after his girlfriend betrayed him, he escaped and killed her along with her assistant. He was in hideout after that, during which he stole the Shaligram belonging to the Padmanabhaswamy Temple. Ayilyam Thirunal Rama Varma was the ruler of Travancore and T. Madhava Rao was the Diwan of Travancore at the time. Kochunni was accused of several thefts and two homicides. Both the Palace and police officials failed to find Kochunni, afterwhich a warrior, Arattupuzha Velayudha Panicker, was enlisted with the task, who eventually captured him and submitted to the Diwan. Panicker was honoured by the King. Kochunni was remanded for one year, during which he died in the Travancore jail in 1859. His remains was buried at the Pettah Juma Masjid.[4] According to historians, the Central Archives building in present-day Thiruvananthapuram was formerly a prison in the 19th century and is believed to be the first Travancore prison, which is likely where Kochunni was incarcerated.[5]', '2018', '2500000'),
(3, 13, 'Spadikam', '1541920022Spadikam.jpg', '1541920022cover.jpg', 'Bhadran', '1541920022220px-Director_Bhadran.jpg', 'R. Mohan', '1541920022producer.jpg', 'S. P. Venkatesh', 'Malayalam', 'Mohanlal', '1541920022Mohanlal.jpg', 'Urvashi', '1541920022urvashi.jpg', 'homas Chacko, or \"Aadu Thoma\" as he is widely known, is a local gangster and a quarry owner, who is notorious for being the undefeated champion in his confronts and the unrivaled contender in the trade. He is feared in the locality for his atypical practices, like drinking the blood of black male goats before fights (an act that is believed to be the source of his strength) and using his Mundu as a weapon during fights. In spite of his frightening nature, he is known to have a good heart, gambling with his life for just cause. He is the son of the retired school headmaster Chacko (Chacko master), the President\'s medal winner in mathematics. Thoma is the never-ending headache of his \'respectable\' father, both never getting along on any occasion. His mother and sister are caught in the row, left to choose between sides; while Chacko master\'s brother – Manimala Vakkachan, supports Thoma whatsoever. Pookoya, a local baron, is the newly-made enemy of Thoma, along with his sub-inspector (S.I.) friend Kuttikkadan; for supporting Pookoya\'s daughter\'s relationship with a penniless teacher. Due to Thoma\'s relationship with a prostitute, revealed when the police shame him publicly, the arranged marriage of his sister almost fail, further angering his father. This force him to rat his son out to the police on a later occasion, thrashing him with a cane like he used to do in the early days; surprising even the S.I. with the act.', '2018', '4500000'),
(4, 13, 'The King', '1541937927poster.jpg', '1541937927cover.jpg', 'Shaji Kailas', '1541937927Shaji_kailas.jpg', 'Manjalamkuzhi Ali', '1541937927manjalamkuzhi-ali.jpeg', 'Rajamani', 'Malayalam', 'Mammootty', '1541937927Mammootty.jpg', 'Vani Viswanath', '1541937927vani.jpg', 'he city of Kozhikode is victimized by a massive communal riot against the slums, costing the lives of 12 people. Madhu Kumar (Appa Haja), a wildlife photographer, witnesses a group of criminals transporting explosives through the local forest check post, so he calls up the local police commissioner Shankar (Devan) and passes the information. Shankar asks him to wait for his officers to pick him up. But instead of the police, it is the same goons who come for Madhu, resulting in his death. While having the police to fight against the rioters, the aggressive and belligerent, yet honorable and incorruptible district collector Joseph Alex IAS (Mammootty) is suspicious of Shankar\'s activities and decides to investigate the case. He is assisted by ASP Prasad (K. B. Ganesh Kumar), one of the sincere officers who admires Joseph for his arrogant way of dealing politicians and officials. Also tagging along with Joseph is the young assistant district collector Anura Mukerji IAS (Vani Viswanath), whose freecare style conflicts against Joseph\'s strict behavior because of her tragic childhood. It later turns out that Anura\'s behavior was rooted from a horrible experience of when her father continuously cheated on her mother a lot, and that her mother prayed to her to no avail, which is why Anura pretended to be a freak to ease her pain. Upon learning this, Alex decides to warm up to her.', '2018', '3500000'),
(5, 13, 'Sarkar', '1541939099Sarkar_2018_poster.jpg', '1541939099cover.jpg', 'AR Murugadoss', '1541939099Murugadoss.jpg', 'Kalanithi Maran', '1541939099producer.jpg', 'A. R. Rahman', 'Tamil', 'Vijay', '1541939099Vijay.jpg', 'Keerthy Suresh', '1541939099Keerthy Suresh jpg.jpg', 'Sundar Ramasamy (Vijay) is an USA-based highly successful NRI businessman known for his ruthless nature. He arrives in Chennai to cast his vote in the Tamil Nadu Assembly election. However, he finds out to his shock that someone else had already voted in his name and therefore is unable to cast his vote. Sundar approaches the Tamil Nadu Election Commission, seeking a stay on the election result for his constituency, annulling the vote of the fraud elector and allowing him to legitimately cast his vote, to which they agree. Sundar further raises awareness among the public regarding fraud voting and many of the people admit that they too could not vote in the election due to the fraud voting. Meanwhile, Sundar rekindles his romance with his estranged sister-in-law\'s (Papri Ghosh) sister Nila (Keerthy Suresh), whom he had last met five years ago.\r\n\r\nHowever, Sundar\'s actions bring him into confrontation with two influential and corrupt politicians, M. Masilamani (Pala. Karuppiah), who is the Chief Minister of Tamil Nadu, and his brother Malarvannan alias Rendu (Radha Ravi). Though Masilamani\'s party wins in the elections, due to many people admitting that they were not able to vote due to fraud, the election result is annulled and fresh elections are scheduled to take place within the next fifteen days. After attempts are made on his life by Malarvannan\'s henchmen, Sundar decides to contest the election against Masilamani as an Independent and resigns from his company to avoid any conflict-of-interest.', '2018', '6000000'),
(6, 14, 'Jacobinte Swargarajyam', '1542728071Jacobinte_Swargarajyam_poster.jpg', '1542728071Jacobinte-Swargarajyam.jpg', 'Vineeth Sreenivasan', '1542728071producer.jpg', 'Noble Babu Thomas', '1542728071Noble-Babu-Thomas_1.jpg', 'Shaan Rahman', 'Malayalam', 'Nivin Pauly', '154272807158378985.jpg', 'Lakshmy Ramakrishnan', '1542728071images.jpg', 'Jacob (Renji Panicker) is a successful businessman settled in Dubai with wife Sherly (Lakshmy Ramakrishnan) and their four kids – Jerry (Nivin Pauly), Abin (Sreenath Bhasi), Ammu (Aima Sebastian), and Chris (Stacen). Jacob is always respected for his ideas by his colleagues and he had done many businesses before starting a steel business. Then comes global recession and Jacob moves for a lucrative trade through his Pakistani colleague, Ajmal, by taking a total of 8 million dirhams from his investors. Ajmal cheats Jacob and Jacob is left in a debt of 8 million dirhams which he happens to know on his 25th wedding anniversary. Soon Jacob\'s credibility and trustful way of doing business is lost and is forced to travel to Liberia to get a deal, but doesn\'t go well and is forced to stay there to avoid arrest. With no other way and continued complaints from the investors especially from Murali Menon (Ashwin Kumar), Jerry decides to give his best to solve the problems by stepping into his dad\'s shoes.\r\n\r\nJerry, without a trade license or an office, faces many difficulties at first. He decides to go out completely with what his father has taught him about business. He meets a self-made businessman Yusuf Shah (Vineeth Sreenivasan) and strikes a deal with him, eventually he earns his trust and the business grows. Jerry motivates Abin to start a tours and travel company and they succeed in it. Jerry settles most of the debts and gains trust with them. But investor Murali Menon pressurizes him for full payment, Jerry with his mother tries to close deals and collect money, but they were only able to collect a half of what they owed. Finally Murali moves the case against Jerry in Dubai High court but the case is rejected because the case was against the company and it is registered under Jacob\'s name. Murali who also is affected by recession is in deep debt, he is forced to agree with Jerry\'s conditions. ', '2018', '2000000'),
(7, 14, '96', '1542729501p15911775_v_v8_aa.jpg', '15427295017fe357a5c52e82db686d4ec7c5e2aa21.jpg', 'C. Prem Kumar', '1542729501download.jpg', 'S. Nanthagopal', '1542729501download (1).jpg', 'Govind Vasantha', 'Tamil', 'Vijay Sethupathi', '1542729501download (2).jpg', 'Trisha Krishnan', '1542729501trisha.jpg', 'Ram (Vijay Sethupathi) is a happy-go-lucky freelance travel photographer whose passion makes him travel all over India. An introduction to Ram\'s life (the very start of the movie) is aptly summarized in the beautiful song \'The Life of Ram\'. This song showcases the travel exploits of Ram such as an underwater scuba diving and photo shoot in Andaman and Nicobar Islands, Rajasthan Desert expedition at Jaisalmer, wonderful views of Rohtang Pass and capturing day to day life in and around Calcutta and Howrah Bridge to name a few. At the end of the song, the actual story begins with Ram instructing his students about photography and the nuances of taking great pictures in a temple in Kumbakonam. At the end of the day, Ram is tired and asks if any one of them knows driving. Prabha volunteers first, mentioning that she can drive. Ram asks her to get ready early next morning for the drive back to Chennai. Prabha starts driving early next morning with Ram fast asleep in the passenger seat. Sometime, near the strike of dawn, Ram gets up and sees around the place and surroundings. Prabha informs him that they are currently in Thanjavur and they had to route through Thanjavur and Trichy to reach Chennai due to traffic issues in the original route. She also mentions to Ram that Google maps is switched on. Ram asks Prabha to ignore Google and drive as per his instructions. They drive through Thanjavur main city when Ram gets excited seeing the same. He reveals to Prabha that he is from the same city. He gets excited and points out the corporation bus stand mentioning that his parents landed up here, first after their marriage. His excitement continues and he explains to Prabha about other things that come in the way of their drive (such as the Government Hospital where he was born, the first shopping complex that came up in their city and a bakery that was very famous that made you hungry anytime). As they are further driving through the city, he shows Prabha a place mentioning that\'s where his old home would have been long before. When Prabha asks Ram if she needs to stop the car, he asks her to continue driving since he feels he may have to talk to people if they were to stop. As they continue the drive, the car passes by a small crossing over a river stream and Ram gets super excited seeing the same. He starts to say something to Prabha but then immediately keeps quiet.', '2018', '2000000'),
(8, 14, 'Odiyan', '1542731690download.jpg', '1542731690odiyan.jpg', 'V. A. Shrikumar Menon', '154273169051905_v.jpg', 'Antony Perumbavoor', '1542731690image.png', 'M. Jayachandran', 'Malayalam', 'Mohanlal', '1542731690mohanla.jpg', 'Manju Warrier', '1542731690Manju_Warrier_0.jpeg', 'Odiyan is an upcoming Indian Malayalam-language fantasy thriller film directed by V. A. Shrikumar Menon in his feature film debut. It was written by Harikrishnan and is based on the legend of the Odiyan clan, who in Kerala folklore are men possessing shapeshifting abilities, who could assume animal form. Odiyans are said to have inhabited the Malabar region of Kerala during pre-electricity era. The film stars Mohanlal in the title role, alongside Prakash Raj and Manju Warrier. The film was produced by Aashirvad Cinemas.\r\n\r\nPrincipal photography began in Varanasi, Uttar Pradesh in August 2017. Major part of the film was shot in Palakkad district, where the Thenkurissi village in the film was recreated. Some scenes were also filmed in Vagamon, Athirappilly, and Kochi. The film was completed after 145 days shooting. Sam C. S. composed the film\'s score and it also features songs composed by M. Jayachandran. Odiyan is set to release on 14 December 2018 in over 4000 screens worldwide.[1]', '2018', '2000000'),
(9, 5, 'Spider-Man: Homecoming', '1542765411Spider-Man_Homecoming_poster.jpg', '1542765411max1506545262-frontback-cover.jpg', 'Jon Watts', '1542765411Jon_Watts_by_Gage_Skidmore_2.jpg', 'Kevin Feige', '1542765411(cropped).jpg', 'Michael Giacchino', 'English', 'Tom Holland', '1542765411Tom_Holland_by_Gage_Skidmore.jpg', 'Zendaya', '1542765411Zendaya.png', 'Spider-Man: Homecoming is a 2017 American superhero film based on the Marvel Comics character Spider-Man, co-produced by Columbia Pictures and Marvel Studios, and distributed by Sony Pictures Releasing. It is the second Spider-Man film reboot and the sixteenth film in the Marvel Cinematic Universe (MCU). The film is directed by Jon Watts, from a screenplay by the writing teams of Jonathan Goldstein and John Francis Daley, Watts and Christopher Ford, and Chris McKenna and Erik Sommers. Tom Holland stars as Peter Parker / Spider-Man, alongside Michael Keaton, Jon Favreau, Zendaya, Donald Glover, Tyne Daly, Marisa Tomei, and Robert Downey Jr. In Spider-Man: Homecoming, Peter Parker tries to balance high school life with being Spider-Man, while facing the Vulture.\r\n\r\nIn February 2015, Marvel Studios and Sony reached a deal to share the character rights of Spider-Man, integrating the character into the established MCU. The following June, Holland was cast as the title character and Watts was hired to direct. This was followed shortly by the hiring of Daley and Goldstein. In April 2016, the film\'s title was revealed, along with additional cast, including Downey in his MCU role of Tony Stark / Iron Man. Principal photography began in June 2016 at Pinewood Atlanta Studios in Fayette County, Georgia, and continued in Atlanta, Los Angeles, and New York City. The other screenwriters were revealed during filming, which concluded in Berlin in October 2016. The production team made efforts to differentiate the film from previous Spider-Man films.', '2018', '2500000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

DROP TABLE IF EXISTS `tbl_news`;
CREATE TABLE IF NOT EXISTS `tbl_news` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `ndate` varchar(100) NOT NULL,
  `nstatus` int(11) NOT NULL,
  PRIMARY KEY (`nid`),
  UNIQUE KEY `heading` (`heading`),
  UNIQUE KEY `heading_2` (`heading`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`nid`, `heading`, `photo`, `description`, `ndate`, `nstatus`) VALUES
(25, 'Theevandi 100 Days', '154028534715402710921539223403Theevandi.jpg', 'Meanwhile Ammavan and Safar are shown to frequently visit Edison Thuruthu (Edison\'s Island) which is hinted at being a haven for drunkards and hippies. Bineesh is frustrated and decides to smoke 16 packets of cigarette at a time creating a new world record. The MLA\'s Nepali driver, Sanju, gives the money for the cigarettes confusing everyone. Meanwhile while driving the car with the MLA, it is revealed that the driver is a victim of the Blue Whale Challenge and is about to commit suicide as his 50th and final task. The car crashes into the building where Bineesh is smoking the cigarettes destroying the video clipping of Bineesh smoking the cigarettes. The MLA falls into a coma while the driver manages to escape. Later that night a tiff happens over the nomination of a BCSL candidate for the by election (since the MLA is in coma they feel that there is no chance of recovery).The majority chooses Madhu while Bineesh demands to nominate his brother in law Vijith. Bineesh who hates Madhu does not want him to be the candidate. Madhu who is an equally shrewd person challenges Bineesh to abstain from smoking till a particular day when the party is organizing a widespread protest in the village by forming a human chain and promises that if Bineesh succeeds in this, he will renounce his claim to the nomination and let Vijith be the sole nominee. Bineesh accepts the challenge. ', '2018/10/23  11:02:27am', 0),
(26, 'Abrahaminte-Santhathikal', '15402853951539281327Abrahaminte-Santhathikal.jpg', 'The story takes place in the fictional village of Pullinad. Damodaran, a resident of Pullinad, is unable to take his pregnant wife to the hospital due to heavy rain and the rebellion following the murder of Rajiv Gandhi. His wife\'s brother(referred to as Ammavan by the protagonist and his friends) arranges for a midwife. Although he was initially against it, Damodaran later agrees. However the child dies causing great disappointment to Damodaran. He places the child on a table and goes to see his wife whose condition has worsened. Ammavan, a chain smoker, blows the smoke at the dead child which leads to its survival. The child is named Bineesh. As a child Bineesh buys cigarettes for his uncle as he gets to buy something using the balance amount. When he becomes a teenager he is prompted by his friend Safar to smoke a cigarette which eventually leads to him getting addicted to it. He is caught in the school for smoking due to a foolish statement made by Safar and is asked to bring his parents. He decides to bring his uncle. That night while going to meet his uncle he sees a packet of cigarette and decides to smoke one. He moves out and smokes peacefully. However he gets mistaken for a thief by 2 police constables and is taken to police station where everyone gets to know about his secret. As time passes he is addicted and gets the title of Theevandi (chainsmoker, colloquially). As time passes, his elder sister gets married to Vijith, a BSCL (Bharatiya Socialist Congress League) party member and he falls in love with his childhood friend Devi. Devi is the daughter of Madhu, an active BSCL member. He is against the affair of his daughter with Bineesh but later relents on the condition that Bineesh reduces his smoking. ', '2018/11/21  09:01:35am', 0),
(27, 'Nun20 days', '1542790929154028576015401095691539525388story-2.jpg', 'The story takes place in the fictional village of Pullinad. Damodaran, a resident of Pullinad, is unable to take his pregnant wife to the hospital due to heavy rain and the rebellion following the murder of Rajiv Gandhi. His wife\'s brother(referred to as Ammavan by the protagonist and his friends) arranges for a midwife. Although he was initially against it, Damodaran later agrees. However the child dies causing great disappointment to Damodaran. He places the child on a table and goes to see his wife whose condition has worsened. Ammavan, a chain smoker, blows the smoke at the dead child which leads to its survival. The child is named Bineesh. As a child Bineesh buys cigarettes for his uncle as he gets to buy something using the balance amount. When he becomes a teenager he is prompted by his friend Safar to smoke a cigarette which eventually leads to him getting addicted to it. He is caught in the school for smoking due to a foolish statement made by Safar and is asked to bring his parents. He decides to bring his uncle. That night while going to meet his uncle he sees a packet of cigarette and decides to smoke one. He moves out and smokes peacefully. However he gets mistaken for a thief by 2 police constables and is taken to police station where everyone gets to know about his secret. As time passes he is addicted and gets the title of Theevandi (chainsmoker, colloquially). As time passes, his elder sister gets married to Vijith, a BSCL (Bharatiya Socialist Congress League) party member and he falls in love with his childhood friend Devi. Devi is the daughter of Madhu, an active BSCL member. He is against the affair of his daughter with Bineesh but later relents on the condition that Bineesh reduces his smoking. ', '2018/11/21  09:02:09am', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_runningmovietime`
--

DROP TABLE IF EXISTS `tbl_runningmovietime`;
CREATE TABLE IF NOT EXISTS `tbl_runningmovietime` (
  `runid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `no_of_shows` int(11) NOT NULL,
  `time1` varchar(20) NOT NULL,
  `time2` varchar(20) NOT NULL,
  `time3` varchar(20) NOT NULL,
  `time4` varchar(20) NOT NULL,
  `time5` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`runid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_runningmovietime`
--

INSERT INTO `tbl_runningmovietime` (`runid`, `mid`, `lid`, `no_of_shows`, `time1`, `time2`, `time3`, `time4`, `time5`, `status`) VALUES
(3, 3, 4, 2, '10:00', '16:00', '00:00', '00:00', '00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_theatreseating`
--

DROP TABLE IF EXISTS `tbl_theatreseating`;
CREATE TABLE IF NOT EXISTS `tbl_theatreseating` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `lid` int(11) NOT NULL,
  `c_row` int(11) NOT NULL,
  `c_column` int(11) NOT NULL,
  `c_price` int(11) NOT NULL,
  `l_rows` int(11) NOT NULL,
  `l_column` int(11) NOT NULL,
  `l_price` int(11) NOT NULL,
  `b_rows` int(11) NOT NULL,
  `b_column` int(11) NOT NULL,
  `b_price` int(11) NOT NULL,
  `no_of_shows` int(11) NOT NULL,
  `time1` varchar(20) NOT NULL,
  `time2` varchar(20) NOT NULL,
  `time3` varchar(20) NOT NULL,
  `time4` varchar(20) NOT NULL,
  `time5` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`tid`),
  UNIQUE KEY `lid` (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_theatreseating`
--

INSERT INTO `tbl_theatreseating` (`tid`, `lid`, `c_row`, `c_column`, `c_price`, `l_rows`, `l_column`, `l_price`, `b_rows`, `b_column`, `b_price`, `no_of_shows`, `time1`, `time2`, `time3`, `time4`, `time5`, `status`) VALUES
(13, 4, 20, 2, 2, 2, 2, 2, 2, 2, 2, 4, '10:00', '13:00', '16:00', '19:00', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
