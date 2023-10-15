-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 11:33 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(30) NOT NULL,
  `images` varchar(100) DEFAULT NULL,
  `summary` text,
  `content` text,
  `status` tinyint(1) DEFAULT '1',
  `cat_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `price`, `images`, `summary`, `content`, `status`, `cat_id`) VALUES
(2, 'PHP Nang Cao', 'Kenny', 1500000, 'sach-hoc-lap-trinh-php.jpg', NULL, NULL, 1, 8),
(3, 'PHP Framework', 'Kenny', 2000000, 'php-framework.jpg', NULL, NULL, 1, 8),
(4, 'Joomla Can Ban', 'Kenny', 1000000, 'joomla.png', '', '', 1, 8),
(22, 'SQL Beginer - QTM', 'TruongTM', 1000000, 'MySQL-Beginer.jpg', '<p><strong>The book&rsquo;s target audience is MySQL professionals</strong>. The authors assume significant depth of background in the subject area, and strive to put the finishing touches on your education&mdash;to take you from apprentice to journeyman, so to speak. I think they do a great job.</p>\r\n', '<h3>Organization</h3>\r\n\r\n<p>The book is organized in two parts. The first, &ldquo;Design and Development,&rdquo; comprises the first 13 chapters, which I would roughly group into advanced technical topics and new features in MySQL 5.0. The second part, &ldquo;Administration,&rdquo; covers the usual topics like installation, security and backup, but also has sections on replication and clusters.</p>\r\n\r\n<p>I wanted to see how long and how many of each kind of chapter there are, so of course I threw it into a SQL table.</p>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th>num</th>\r\n			<th>title</th>\r\n			<th>p</th>\r\n			<th>part</th>\r\n			<th>section</th>\r\n			<th>len</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>Analyzing Business Requirements</td>\r\n			<td>3</td>\r\n			<td>1</td>\r\n			<td>Background</td>\r\n			<td>36</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>Index Concepts</td>\r\n			<td>39</td>\r\n			<td>1</td>\r\n			<td>Background</td>\r\n			<td>30</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>Transaction Processing</td>\r\n			<td>69</td>\r\n			<td>1</td>\r\n			<td>Background</td>\r\n			<td>36</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4</td>\r\n			<td>MySQL System Architecture</td>\r\n			<td>105</td>\r\n			<td>1</td>\r\n			<td>Background</td>\r\n			<td>48</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5</td>\r\n			<td>Storage Engines and Data Types</td>\r\n			<td>153</td>\r\n			<td>1</td>\r\n			<td>Background</td>\r\n			<td>36</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6</td>\r\n			<td>Benchmarking and Profiling</td>\r\n			<td>189</td>\r\n			<td>1</td>\r\n			<td>Background</td>\r\n			<td>46</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7</td>\r\n			<td>Essential SQL</td>\r\n			<td>235</td>\r\n			<td>1</td>\r\n			<td>Background</td>\r\n			<td>64</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8</td>\r\n			<td>SQL Scenarios</td>\r\n			<td>299</td>\r\n			<td>1</td>\r\n			<td>Background</td>\r\n			<td>50</td>\r\n		</tr>\r\n		<tr>\r\n			<td>9</td>\r\n			<td>Stored Procedures</td>\r\n			<td>349</td>\r\n			<td>1</td>\r\n			<td>MySQL 5</td>\r\n			<td>26</td>\r\n		</tr>\r\n		<tr>\r\n			<td>10</td>\r\n			<td>Functions</td>\r\n			<td>375</td>\r\n			<td>1</td>\r\n			<td>MySQL 5</td>\r\n			<td>30</td>\r\n		</tr>\r\n		<tr>\r\n			<td>11</td>\r\n			<td>Cursors</td>\r\n			<td>405</td>\r\n			<td>1</td>\r\n			<td>MySQL 5</td>\r\n			<td>14</td>\r\n		</tr>\r\n		<tr>\r\n			<td>12</td>\r\n			<td>Views</td>\r\n			<td>419</td>\r\n			<td>1</td>\r\n			<td>MySQL 5</td>\r\n			<td>24</td>\r\n		</tr>\r\n		<tr>\r\n			<td>13</td>\r\n			<td>Triggers</td>\r\n			<td>443</td>\r\n			<td>1</td>\r\n			<td>MySQL 5</td>\r\n			<td>26</td>\r\n		</tr>\r\n		<tr>\r\n			<td>14</td>\r\n			<td>MySQL Installation and Configuration</td>\r\n			<td>469</td>\r\n			<td>2</td>\r\n			<td>Administration</td>\r\n			<td>28</td>\r\n		</tr>\r\n		<tr>\r\n			<td>15</td>\r\n			<td>User Administration</td>\r\n			<td>497</td>\r\n			<td>2</td>\r\n			<td>Administration</td>\r\n			<td>36</td>\r\n		</tr>\r\n		<tr>\r\n			<td>16</td>\r\n			<td>Security</td>\r\n			<td>533</td>\r\n			<td>2</td>\r\n			<td>Administration</td>\r\n			<td>22</td>\r\n		</tr>\r\n		<tr>\r\n			<td>17</td>\r\n			<td>Backup and Restoration</td>\r\n			<td>555</td>\r\n			<td>2</td>\r\n			<td>Administration</td>\r\n			<td>30</td>\r\n		</tr>\r\n		<tr>\r\n			<td>18</td>\r\n			<td>Replication</td>\r\n			<td>585</td>\r\n			<td>2</td>\r\n			<td>Administration</td>\r\n			<td>32</td>\r\n		</tr>\r\n		<tr>\r\n			<td>19</td>\r\n			<td>Cluster</td>\r\n			<td>617</td>\r\n			<td>2</td>\r\n			<td>Administration</td>\r\n			<td>28</td>\r\n		</tr>\r\n		<tr>\r\n			<td>20</td>\r\n			<td>Troubleshooting</td>\r\n			<td>645</td>\r\n			<td>2</td>\r\n			<td>Administration</td>\r\n			<td>24</td>\r\n		</tr>\r\n		<tr>\r\n			<td>21</td>\r\n			<td>MySQL Data Dictionary</td>\r\n			<td>669</td>\r\n			<td>2</td>\r\n			<td>Administration</td>\r\n			<td>30</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Note: the &ldquo;section&rdquo; is my own way of grouping the chapters, as I explained above. Here&rsquo;s a graphical view of the book&rsquo;s organization, using one of the techniques I learned from&nbsp;<a href=\"https://www.xaprb.com/blog/2007/01/02/a-review-of-oreillys-sql-hacks/\">SQL Hacks</a>:</p>\r\n\r\n<pre>\r\n<code>select section,\r\n   count(*) as num_chaps,\r\n   avg(len) as avg_chap_len,\r\n   repeat(&#39;#&#39;, sum(len)/15) as total_pages\r\nfrom chapters\r\ngroup by section\r\norder by field(section, &#39;Background&#39;, &#39;MySQL 5&#39;, &#39;Administration&#39;);\r\n</code></pre>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th>section</th>\r\n			<th>num_chaps</th>\r\n			<th>avg_chap_len</th>\r\n			<th>total_pages</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Background</td>\r\n			<td>8</td>\r\n			<td>43.2500</td>\r\n			<td>#######################</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MySQL 5</td>\r\n			<td>5</td>\r\n			<td>24.0000</td>\r\n			<td>########</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Administration</td>\r\n			<td>8</td>\r\n			<td>28.7500</td>\r\n			<td>###############</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>You can see they devote significant space to explaining the background and theory of using MySQL (and indeed relational databases in general), but not so much to the new features in MySQL 5. This is to be expected, as MySQL 5 was brand-new at the time.</p>\r\n\r\n<p>The following sections will explore these chapters in more detail.</p>\r\n', 1, 7),
(23, 'MySQL Beginer2 - QTM', 'TruongTM2', 2000000, 'MySQL-Beginer2.jpg', '<p><span style=\"color:#FF0000\"><strong>T&oacute;m tắt s&aacute;ch</strong></span><br />\r\nT&oacute;m tắt s&aacute;ch<br />\r\nT&oacute;m tắt s&aacute;ch</p>\r\n', '<p><strong><span style=\"color:#0000FF\">Chi tiết s&aacute;ch</span></strong><br />\r\nChi tiết s&aacute;ch<br />\r\nChi tiết s&aacute;ch</p>\r\n', 1, 7),
(24, 'Hệ QTCSDL MySQL', 'Trần Mạnh Trường', 3000000, 'csdl_myslq_01.jpg', '<p><span style=\"color:#FF0000\"><strong>How can you bring out MySQL&rsquo;s full power? With&nbsp;<em>High Performance MySQL</em></strong></span>, you&rsquo;ll learn advanced techniques for everything from designing schemas, indexes, and queries to tuning your MySQL server, operating system, and hardware to their fullest potential. This guide also teaches you safe and practical ways to scale applications through replication, load balancing, high availability, and failover.</p>\r\n', '<h4>There is a newer edition of this item:</h4>\r\n\r\n<p><a href=\"https://www.amazon.com/High-Performance-MySQL-Strategies-Running-dp-1492080519/dp/1492080519/ref=dp_ob_image_bk\"><img alt=\"High Performance MySQL: Proven Strategies for Running MySQL at Scale\" src=\"https://m.media-amazon.com/images/I/914ESe-dGLL._SR75,75_.jpg\" /></a></p>\r\n\r\n<p><a href=\"https://www.amazon.com/High-Performance-MySQL-Strategies-Running-dp-1492080519/dp/1492080519/ref=dp_ob_title_bk\">High Performance MySQL: Proven Strategies for Running MySQL at Scale</a><br />\r\n$59.99<br />\r\nThis title has not yet been released.</p>\r\n\r\n<p>How can you bring out MySQL&rsquo;s full power? With&nbsp;<em>High Performance MySQL</em>, you&rsquo;ll learn advanced techniques for everything from designing schemas, indexes, and queries to tuning your MySQL server, operating system, and hardware to their fullest potential. This guide also teaches you safe and practical ways to scale applications through replication, load balancing, high availability, and failover.</p>\r\n\r\n<p>Updated to reflect recent advances in MySQL and InnoDB performance, features, and tools, this third edition not only offers specific examples of how MySQL works, it also teaches you&nbsp;<em>why</em>&nbsp;this system works as it does, with illustrative stories and case studies that demonstrate MySQL&rsquo;s principles in action. With this book, you&rsquo;ll learn&nbsp;<em>how to think</em>&nbsp;in MySQL.</p>\r\n\r\n<ul>\r\n	<li>Learn the effects of new features in MySQL 5.5, including stored procedures, partitioned databases, triggers, and views</li>\r\n	<li>Implement improvements in replication, high availability, and clustering</li>\r\n	<li>Achieve high performance when running MySQL in the cloud</li>\r\n	<li>Optimize advanced querying features, such as full-text searches</li>\r\n	<li>Take advantage of modern multi-core CPUs and solid-state disks</li>\r\n	<li>Explore backup and recovery strategies&mdash;including new tools for hot online backups</li>\r\n</ul>\r\n', 1, 9),
(25, 'AI Căn bản', 'Trần Mạnh Trường', 200000, 'AI01.jpg', '<p>In 2021, Artificial Intelligence is the hottest and demanding field; most engineers want to make their career in AI, Data Science &amp; Data Analytics. Going through the best and reliable resources is the best way to learn, So here is the list of the best AI Books.</p>\r\n\r\n<h2><span style=\"color:#FF0000\"><strong>What is AI (Artificial Intelligence)?</strong></span></h2>\r\n\r\n<p>Artificial Intelligence is the field of study that simulates the processes of human intelligence on computer systems. These processes include the acquisition of information, using them, and approximating conclusions. The research topics in AI include problem-solving, reasoning, planning, natural language, programming, and machine learning. Automation, Robotics and sophisticated computer software and programs characterize a career in Artificial Intelligence. Basic foundations in maths, technology, logic, and engineering can go a long way in kick-starting a career in Artificial Intelligence.</p>\r\n', '<h3><strong>2.&nbsp;<a href=\"https://geni.us/wiozEr\" rel=\"noopener\" target=\"_blank\">Artificial Intelligence Engines: A Tutorial Introduction to the Mathematics of Deep Learning</a></strong></h3>\r\n\r\n<p><a href=\"https://geni.us/wiozEr\" rel=\"noopener\" target=\"_blank\"><img alt=\"\" src=\"https://hackr.io/blog/uploads/images/artificial-intelligence-engines-a-tutorial-introduction-to-the-mathematics-of-deep-learning.jpg\" style=\"height:214px; width:142px\" /></a>By &ndash; James V Stone</p>\r\n\r\n<p>In this book, key neural network learning algorithms are explained, followed by detailed mathematical analyses. Online computer programs collated from open source repositories give hands-on experience of neural networks. It is an ideal introduction to the algorithmic engines of modern-day artificial intelligence.</p>\r\n\r\n<p>You can but it&nbsp;<a href=\"https://geni.us/wiozEr\" rel=\"noopener\" target=\"_blank\">here</a>.</p>\r\n\r\n<h3><strong>3.&nbsp;<a href=\"https://geni.us/GIRm\" rel=\"noopener\" target=\"_blank\">Artificial Intelligence By Example</a></strong></h3>\r\n\r\n<p><a href=\"https://geni.us/GIRm\" rel=\"noopener\" target=\"_blank\"><img alt=\"\" src=\"https://hackr.io/blog/uploads/images/artificial-intelligence-by-example.jpg\" style=\"height:173px; width:140px\" /></a>By &ndash; Denis Rothman</p>\r\n\r\n<p>This book serves as a starting point for understanding how Artificial Intelligence works with the help of real-life scenarios. You will be able to understand the most advanced machine learning models, understand how to apply AI to blockchain and IoT, and develop emotional quotient in chatbots using neural networks. By the end of this book, you will have understood the fundamentals of AI and worked through a number of case studies that will help you develop the business vision. This book will help you develop your adaptive thinking to solve real-life AI case. Prior experience with Python and statistical knowledge is essential to make the most out of this book.</p>\r\n\r\n<p>You can buy it&nbsp;<a href=\"https://geni.us/GIRm\" rel=\"noopener\" target=\"_blank\">here</a>.</p>\r\n\r\n<h3><strong>4.&nbsp;<a href=\"https://geni.us/CIZwSvg\" rel=\"noopener\" target=\"_blank\">Artificial Intelligence and Machine Learning</a></strong></h3>\r\n\r\n<p><a href=\"https://geni.us/CIZwSvg\" rel=\"noopener\" target=\"_blank\"><img alt=\"\" src=\"https://hackr.io/blog/uploads/images/artificial-intelligence-and-machine-learning.jpg\" style=\"height:185px; width:141px\" /></a>By &ndash; Chandra S.S.V</p>\r\n\r\n<p>This book is primarily intended for undergraduate and postgraduate students of computer science and engineering. This textbook covers the gap between the difficult contexts of Artificial Intelligence and Machine Learning. It provides the most number of case studies and worked-out examples. In addition to Artificial Intelligence and Machine Learning, it also covers various types of learning like reinforced, supervised, unsupervised and statistical learning. It features well-explained algorithms and pseudo-codes for each topic which makes this book very useful for students.</p>\r\n\r\n<p>You can buy it&nbsp;<a href=\"https://geni.us/CIZwSvg\" rel=\"noopener\" target=\"_blank\">here.</a></p>\r\n\r\n<h3><strong>5.&nbsp;<a href=\"https://geni.us/jOBRPcu\" rel=\"noopener\" target=\"_blank\">Artificial Intelligence Basics: A Non-Technical Introduction</a></strong></h3>\r\n\r\n<p><a href=\"https://geni.us/jOBRPcu\" rel=\"noopener\" target=\"_blank\"><img alt=\"\" src=\"https://hackr.io/blog/uploads/images/artificial-intelligence-engines-a-tutorial-introduction-to-the-mathematics-of-deep-learning1.jpg\" style=\"height:209px; width:139px\" /></a>By &ndash; Tom Taulli</p>\r\n\r\n<p>This book equips you with a fundamental grasp of Artificial Intelligence and its impact. It provides a non-technical introduction to important concepts such as Machine Learning, Deep Learning, Natural Language Processing, Robotics and more. Further the author expands on the questions surrounding the future impact of AI on aspects that include societal trends, ethics, governments, company structures and daily life.</p>\r\n\r\n<p>You can buy it&nbsp;<a href=\"https://geni.us/jOBRPcu\" rel=\"noopener\" target=\"_blank\">here.</a></p>\r\n\r\n<h3><strong>6.&nbsp;<a href=\"https://geni.us/oY6CC\" rel=\"noopener\" target=\"_blank\">Artificial Intelligence: An Essential Beginner&rsquo;s Guide to AI, Machine Learning, Robotics, The</a></strong><a href=\"https://geni.us/oY6CC\" rel=\"noopener\" target=\"_blank\">&nbsp;<strong>Internet of Things, Neural</strong>&nbsp;<strong>Networks, Deep Learning, Reinforcement Learning and Our</strong>&nbsp;<strong>Future</strong></a></h3>\r\n\r\n<p><a href=\"https://geni.us/oY6CC\" rel=\"noopener\" target=\"_blank\"><img alt=\"\" src=\"https://hackr.io/blog/uploads/images/artificial-intelligence-an-essential-beginner-s-guide-to-ai-machine-learning-robotics-the-internet-of-things-neural-networks-deep-learning-reinforcement-learning-and-our-future.jpg\" style=\"height:194px; width:147px\" /></a>By &ndash; Neil Wilkins</p>\r\n\r\n<p>This book gives you a glimpse into Artificial Intelligence and a hypothetical simulation of a living brain inside a computer. This book features the following topics:</p>\r\n\r\n<ul>\r\n	<li>Confluence of Interests</li>\r\n	<li>AI Myths</li>\r\n	<li>Manipulating the Limbic System</li>\r\n	<li>Motivation for Creating AI</li>\r\n	<li>Basic Concepts</li>\r\n</ul>\r\n', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `quyen` tinyint(4) DEFAULT '1',
  `trangthai` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`id`, `username`, `password`, `quyen`, `trangthai`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(2, 'nhanvien', '900150983cd24fb0d6963f7d28e17f72', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbcategory`
--

CREATE TABLE `tbcategory` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cat_ord` int(11) DEFAULT NULL,
  `cat_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcategory`
--

INSERT INTO `tbcategory` (`cat_id`, `cat_name`, `cat_ord`, `cat_status`) VALUES
(7, 'Quản trị mạng máy tính', 2, 1),
(8, 'Công nghệ thông tin', 1, 1),
(9, 'Cơ sở dữ liệu', 3, 1),
(10, 'Trí tuệ nhân tạo', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbchitiethoadon`
--

CREATE TABLE `tbchitiethoadon` (
  `id` int(11) NOT NULL,
  `mahd` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `giamua` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbchitiethoadon`
--

INSERT INTO `tbchitiethoadon` (`id`, `mahd`, `masp`, `soluong`, `giamua`) VALUES
(5, 9, 4, 3, 1800000),
(7, 9, 3, 5, 1900000),
(8, 10, 25, 2, 200000),
(9, 10, 24, 3, 3000000),
(10, 16, 24, 2, 3000000),
(11, 16, 2, 1, 1500000),
(12, 17, 3, 1, 2000000),
(13, 18, 24, 1, 3000000),
(14, 21, 24, 1, 3000000),
(16, 23, 22, 3, 1000000),
(17, 23, 3, 2, 2000000),
(18, 24, 2, 1, 1500000),
(19, 24, 3, 1, 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbhoadon`
--

CREATE TABLE `tbhoadon` (
  `mahd` int(11) NOT NULL,
  `tennguoimua` varchar(30) CHARACTER SET utf8 NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dienthoai` varchar(15) NOT NULL,
  `ngaydat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngaynhan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `trangthai` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbhoadon`
--

INSERT INTO `tbhoadon` (`mahd`, `tennguoimua`, `diachi`, `dienthoai`, `ngaydat`, `ngaynhan`, `trangthai`) VALUES
(9, 'nguyễn văn nam', 'Hà nội', '0123456789', '2021-08-13 17:28:14', '2021-08-13 17:28:14', 1),
(10, 'Nguyễn Trọng Tâm', 'Định Công - Hà nội', '0912356004', '2021-09-15 21:00:22', '2021-09-26 00:00:00', 3),
(16, 'Lê Văn Quý', 'Nam Định', '0912356004', '2021-09-18 15:24:18', '2020-09-19 00:00:00', 0),
(17, 'Nguyễn Văn Nam', 'Hà nội', '1234567', '2021-09-18 15:30:44', '2020-09-19 00:00:00', 0),
(18, 'Nguyễn Văn Dũng', 'Hà nội', '0912356004', '2021-09-18 15:47:17', '2021-09-19 00:00:00', 0),
(21, 'Nguyễn Văn Dũng3', 'Hà nội', '0912356004', '2021-09-18 15:51:26', '2021-09-26 00:00:00', 0),
(23, 'Vũ văn Hiệu', 'Hà nội', '012345674', '2021-09-19 14:21:19', '2021-09-19 00:00:00', 2),
(24, 'Nguyễn Ngọc Long', 'Nam Định', '0912356004', '2021-09-19 17:25:48', '2021-09-26 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbtintuc`
--

CREATE TABLE `tbtintuc` (
  `id` int(11) NOT NULL,
  `tieude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tomtat` text CHARACTER SET utf8,
  `noidung` text CHARACTER SET utf8,
  `hinhanh` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ngaytao` datetime DEFAULT CURRENT_TIMESTAMP,
  `trangthai` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbtintuc`
--

INSERT INTO `tbtintuc` (`id`, `tieude`, `tomtat`, `noidung`, `hinhanh`, `ngaytao`, `trangthai`) VALUES
(1, 'tin tức 1', 'tóm tắt 1', 'nội dung 1', 'hinhanh1.jpg', '2021-08-13 15:58:33', 1),
(2, 'tiêu đề 1', 'tóm tắt 2', 'nội dung 2', 'hinhanh2.jpg', '2021-08-13 15:59:54', 1),
(3, 'tiêu đề 3', 'tóm tắt 3', 'Nội dung 3', 'hinhanh3.jpg', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_username` (`username`);

--
-- Indexes for table `tbcategory`
--
ALTER TABLE `tbcategory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbchitiethoadon`
--
ALTER TABLE `tbchitiethoadon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_mahd_masp` (`mahd`,`masp`),
  ADD KEY `idx_mahd` (`mahd`),
  ADD KEY `idx_masp` (`masp`);

--
-- Indexes for table `tbhoadon`
--
ALTER TABLE `tbhoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- Indexes for table `tbtintuc`
--
ALTER TABLE `tbtintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbcategory`
--
ALTER TABLE `tbcategory`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbchitiethoadon`
--
ALTER TABLE `tbchitiethoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbhoadon`
--
ALTER TABLE `tbhoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbtintuc`
--
ALTER TABLE `tbtintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbchitiethoadon`
--
ALTER TABLE `tbchitiethoadon`
  ADD CONSTRAINT `tbchitiethoadon_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `tbhoadon` (`mahd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
