-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2019 at 03:40 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniqbdro_uniquersaim`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(255) NOT NULL,
  `aboutimg` varchar(255) NOT NULL,
  `abouttitle` varchar(255) NOT NULL,
  `aboutdiscription` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `aboutimg`, `abouttitle`, `aboutdiscription`, `date`) VALUES
(1, 'marketing-services-smm-expert-engage-section-img.png', 'Uniquer Aim', 'we are provide best services.We are here to help you in the right way. Please visit the site correctly. You can take a lot of things from here. We provide virtual product services. We like Facebook, Instagram, Twitter, youtube, Visitors like, share, subscribes, follow. And\r\nYou can take many types of CPA and affiliate account sell.\r\nBelow are several types of accounts given. You order it to look right.\r\njust order.thank you', '2019-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_discription` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `seo_title`, `seo_discription`, `seo_keyword`, `date`) VALUES
(1, 'contact page | reuniquers', 'contact with us, if need!!!', 'contact, reuniquers, best seller, best social, social site, search engine, social service', '2019-02-16 15:18:29pm');

-- --------------------------------------------------------

--
-- Table structure for table `facebook`
--

CREATE TABLE `facebook` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facebook`
--

INSERT INTO `facebook` (`id`, `title`, `name`, `details`, `date`) VALUES
(1, 'pagelike', '<i class=\"fa fa-thumbs-up\"></i> Page Like', 'You Can Started With $5!', '2019-01-04 01:45:00am'),
(2, 'postlike', '<i class=\"fa fa-thumbs-up\"></i> Post Like', 'You Can Started With $5!', '2019-01-04 01:49:38am'),
(3, 'share', '<i class=\"fa fa-share\"></i> Share', 'You Can Started With $5!', '2019-01-04 01:49:58am'),
(4, 'follow', '<i class=\"fa fa-users\"></i> Follow', 'You Can Started With $5!', '2019-01-04 01:50:15am');

-- --------------------------------------------------------

--
-- Table structure for table `facebookfollow`
--

CREATE TABLE `facebookfollow` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facebookfollow`
--

INSERT INTO `facebookfollow` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 Facebook Follow', '$5 Dollar', '2018-12-23'),
(2, '1000 Facebook Follow', '$10 Dollar', '0000-00-00'),
(3, '1500 Facebook Follow', '$15 Dollar', '0000-00-00'),
(4, '2000 Facebook Follow', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `facebookpagelike`
--

CREATE TABLE `facebookpagelike` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facebookpagelike`
--

INSERT INTO `facebookpagelike` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 Facebook Page Like', '$5 Dollar', '2018-12-23'),
(2, '1000 Facebook Page Like', '$10 Dollar', '0000-00-00'),
(3, '1500 Facebook Page Like', '$15 Dollar', '0000-00-00'),
(4, '2000 Facebook Page Like', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `facebookpostlike`
--

CREATE TABLE `facebookpostlike` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facebookpostlike`
--

INSERT INTO `facebookpostlike` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 Facebook Post Like', '$5 Dollar', '2018-12-23'),
(2, '1000 Facebook Post Like', '$10 Dollar', '0000-00-00'),
(3, '1500 Facebook Post Like', '$15 Dollar', '0000-00-00'),
(4, '2000 Facebook Post Like', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `facebookshare`
--

CREATE TABLE `facebookshare` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facebookshare`
--

INSERT INTO `facebookshare` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 Facebook Share', '$5 Dollar', '2018-12-23'),
(2, '1000 Facebook Share', '$10 Dollar', '0000-00-00'),
(3, '1500 Facebook Share', '$15 Dollar', '0000-00-00'),
(4, '2000 Facebook Share', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `instagram`
--

CREATE TABLE `instagram` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instagram`
--

INSERT INTO `instagram` (`id`, `title`, `name`, `details`, `date`) VALUES
(1, 'comment', '<i class=\"fa fa-comment\"></i> Comment', 'You Can Started With $5!', '2019-01-04 01:45:00am'),
(2, 'like', '<i class=\"fa fa-thumbs-up\"></i> Like', 'You Can Started With $5!', '2019-01-04 01:49:38am'),
(3, 'share', '<i class=\"fa fa-share\"></i> Share', 'You Can Started With $5!', '2019-01-04 01:49:58am'),
(4, 'follow', '<i class=\"fa fa-users\"></i> Follow', 'You Can Started With $5!', '2019-01-04 01:50:15am');

-- --------------------------------------------------------

--
-- Table structure for table `instagramcomment`
--

CREATE TABLE `instagramcomment` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instagramcomment`
--

INSERT INTO `instagramcomment` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 Instagram Comment', '$5 Dollar', '2018-12-23'),
(2, '1000 Instagram Comment', '$10 Dollar', '0000-00-00'),
(3, '1500 Instagram Comment', '$15 Dollar', '0000-00-00'),
(4, '2000 Instagram Comment', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `instagramfollow`
--

CREATE TABLE `instagramfollow` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instagramfollow`
--

INSERT INTO `instagramfollow` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 Instagram Follow', '$5 Dollar', '2018-12-23'),
(2, '1000 Instagram Follow', '$10 Dollar', '0000-00-00'),
(3, '1500 Instagram Follow', '$15 Dollar', '0000-00-00'),
(4, '2000 Instagram Follow', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `instagramlike`
--

CREATE TABLE `instagramlike` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instagramlike`
--

INSERT INTO `instagramlike` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 Instagram Like', '$5 Dollar', '2018-12-23'),
(2, '1000 Instagram Like', '$10 Dollar', '0000-00-00'),
(3, '1500 Instagram Like', '$15 Dollar', '0000-00-00'),
(4, '2000 Instagram Like', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `instagramshare`
--

CREATE TABLE `instagramshare` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instagramshare`
--

INSERT INTO `instagramshare` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 Instagram Share', '$5 Dollar', '2018-12-23'),
(2, '1000 Instagram Share', '$10 Dollar', '0000-00-00'),
(3, '1500 Instagram Share', '$15 Dollar', '0000-00-00'),
(4, '2000 Instagram Share', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `name`, `email`, `phone`, `subject`, `message`, `date`) VALUES
(1, 'Siam Al Mahmud', 'siamalmahmud426@gmail.com', '01764881424', 'Text Service', 'This is text only!!!!!!', '2018-12-12'),
(2, 'Abir Khan', 'abirkhan2316@yahoo.com', '01764881424', 'hu8ytftyf', 'hutff6rdd657 676r f5r79t 976r67t', '2019-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_discription` text NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `page`, `title`, `discription`, `seo_title`, `seo_discription`, `seo_keyword`, `date`) VALUES
(1, 'twitterretweet', 'Buy Twitter Retweets', '<p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-7c2d809f-7fff-4600-eebb-69f582bc9b26\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Social Media Marketing is why you will look back at 10 years from today if you will not get any platform related to social media marketing where you can not share your personal information with your photos and your videos, but today\'s time will now look Due to the changing nature of technology, there has been a huge change in social media too.</span></b><!--EndFragment-->&nbsp;</p><p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-89253261-7fff-9714-6e30-9dd0496e1f3b\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Buy Best/Real </span><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Twitter Retweets</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-89253261-7fff-9714-6e30-9dd0496e1f3b\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100% Safe Practices</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-89253261-7fff-9714-6e30-9dd0496e1f3b\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The procedure we use is a &nbsp;Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many followers you buy, your twitter/blog/site and your profile will be completely safe.We will make you work right</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-89253261-7fff-9714-6e30-9dd0496e1f3b\"></b><br class=\"Apple-interchange-newline\"><!--EndFragment-->\r\n\r\n<br></p>', 'Buy Twitter Retweets|Cheap & High-Quality Twitter Retweets', 'Buy Twitter Followers, Likes, Retweet & Tweets', 'Twitter Followers, Likes, Retweet & Tweets', '2019-02-17 04:25:31am'),
(2, 'twittertweet', 'Buy Twitter Tweets', '<p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-bb859c33-7fff-1511-8aad-e512cc9e90d0\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Social Media Marketing is why you will look back at 10 years from today if you will not get any platform related to social media marketing where you can not share your personal information with your photos and your videos, but today\'s time will now look Due to the changing nature of technology, there has been a huge change in social media too</span></b><!--EndFragment-->&nbsp;</p><p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-2b70d51c-7fff-5bde-04bb-4862e324c38d\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0074D9\"><span style=\"font-size: 12pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Buy Best/Real </span><span style=\"font-size: 11pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Twitter Tweets</span></font></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-2b70d51c-7fff-5bde-04bb-4862e324c38d\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100% Safe Practices</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-2b70d51c-7fff-5bde-04bb-4862e324c38d\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The procedure we use is a &nbsp;Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many followers you buy, your twitter/blog/site and your profile will be completely safe.We will make you work right.</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-2b70d51c-7fff-5bde-04bb-4862e324c38d\"></b><br class=\"Apple-interchange-newline\"><!--EndFragment-->\r\n\r\n<br></p>', 'Buy Twitter tweets | Cheap & High-Quality Twitter Tweets', 'Buy Twitter Followers, Likes, Retweet & Tweets', 'Twitter Followers, Likes, Retweet & Tweets', '2019-02-17 04:27:32am'),
(3, 'twitterfollow', 'Buy Twitter Followers', '<p>\r\n<!--StartFragment--><b style=\"font-weight:normal;\" id=\"docs-internal-guid-bb859c33-7fff-1511-8aad-e512cc9e90d0\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Social Media Marketing is why you will look back at 10 years from today if you will not get any platform related to social media marketing where you can not share your personal information with your photos and your videos, but today\'s time will now look Due to the changing nature of technology, there has been a huge change in social media too</span></b>&nbsp;<!--EndFragment-->&nbsp;</p><p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-df802f4c-7fff-992f-e1d5-2ebdb6b8d21d\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0074D9\"><span style=\"font-size: 12pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Buy Best/Real </span><span style=\"font-size: 11pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Twitter Followers</span></font></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-df802f4c-7fff-992f-e1d5-2ebdb6b8d21d\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100% Safe Practices</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-df802f4c-7fff-992f-e1d5-2ebdb6b8d21d\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The procedure we use is a &nbsp;Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many followers you buy, your twitter/blog/site and your profile will be completely safe.We will make you work right.</span></p><br></p>', 'Buy Twitter Followers|Cheap & High-Quality Twitter Followers', '', '', '2019-02-17 04:32:14am'),
(4, 'twitterlike', 'Buy Twitter likes', '<p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-8f8f0818-7fff-3f4f-289b-b980f420c1bf\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Social Media Marketing is why you will look back at 10 years from today if you will not get any platform related to social media marketing where you can not share your personal information with your photos and your videos, but today\'s time will now look Due to the changing nature of technology, there has been a huge change in social media too.</span></b><!--EndFragment--> <br></p><p><font color=\"#0074D9\"><b>Buy Best/real twitter Likes</b></font><br></p><p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-3c5f5608-7fff-885d-6ff1-72d16c4d516f\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100% Safe Practices</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-3c5f5608-7fff-885d-6ff1-72d16c4d516f\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The procedure we use is a &nbsp;Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many followers you buy, your twitter/blog/site and your profile will be completely safe.We will make you work right. </span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-3c5f5608-7fff-885d-6ff1-72d16c4d516f\"></b><br class=\"Apple-interchange-newline\"><!--EndFragment-->\r\n\r\n<br></p>', 'Buy Twitter Likes | Cheap & High-Quality Twitter Likes', '', '', '2019-02-17 04:46:50am'),
(5, 'instagramcomment', 'Buy Instagram Comments', '<p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-8ea1db48-7fff-637b-552c-0e1ede4117b6\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Then I tell you why Social Media selling is why you may relive at ten years from nowadays if you will not get any platform associated with social media marketing wherever you\'ll be able to not share your personal info together with your photos and your videos, however today\'s time can currently look because of the dynamical nature of technology, there has been an enormous amendment in social media too.</span></p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-2d05941e-7fff-c3fa-a606-3af1bb3f573d\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#B10DC9\"><span style=\"font-size: 12pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Buy Best/Real </span><span style=\"font-size: 11pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Instagram Comments</span></font></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-2d05941e-7fff-c3fa-a606-3af1bb3f573d\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100% Safe Practices</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-2d05941e-7fff-c3fa-a606-3af1bb3f573d\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The procedure we use is a &nbsp;Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many followers you buy, your Instagram/blog/site and your profile will be completely safe.We will make you work right.</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-2d05941e-7fff-c3fa-a606-3af1bb3f573d\"></b><br class=\"Apple-interchange-newline\"><!--EndFragment-->\r\n\r\n<br></p>', 'Buy Instagram Comments', '', '', '2019-02-17 05:06:21am'),
(6, 'instagramlike', 'Buy Instagram  Likes', '<p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-ac066f7d-7fff-22a5-9c77-d023fed8ae93\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Then I tell you why Social Media selling is why you may relive at ten years from nowadays if you will not get any platform associated with social media marketing wherever you\'ll be able to not share your personal info together with your photos and your videos, however today\'s time can currently look because of the dynamical nature of technology, there has been an enormous amendment in social media too.</span></p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-eb8300b4-7fff-7338-e9b5-b2a3570d696b\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#B10DC9\"><span style=\"font-size: 12pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Buy Best/Real </span><span style=\"font-size: 11pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Instagram &nbsp;Likes</span></font></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-eb8300b4-7fff-7338-e9b5-b2a3570d696b\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100% Safe Practices</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-eb8300b4-7fff-7338-e9b5-b2a3570d696b\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The procedure we use is a &nbsp;Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many followers you buy, your Instagram/blog/site and your profile will be completely safe.We will make you work right. </span></p></p><p class=\"sceditor-nlf\"><br></p>', 'Buy Instagram Likes', '', '', '2019-02-17 05:16:00am'),
(7, 'instagramshare', 'Buy Instagram Share', '<p>\r\n<!--StartFragment--><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Then I tell you why Social Media selling is why you may relive at ten years from nowadays if you will not get any platform associated with social media marketing wherever you\'ll be able to not share your personal info together with your photos and your videos, however today\'s time can currently look because of the dynamical nature of technology, there has been an enormous amendment in social media too.</span><!--EndFragment-->&nbsp;</p><p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-4409f5e9-7fff-5294-b2e9-0c3f0803fbd5\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#B10DC9\"><span style=\"font-size: 12pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Buy Best/Real </span><span style=\"font-size: 11pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Instagram Share</span></font></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-4409f5e9-7fff-5294-b2e9-0c3f0803fbd5\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100% Safe Practices</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-4409f5e9-7fff-5294-b2e9-0c3f0803fbd5\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The procedure we use is a &nbsp;Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many followers you buy, your Instagram/blog/site and your profile will be completely safe.We will make you work right.</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-4409f5e9-7fff-5294-b2e9-0c3f0803fbd5\"></b><br class=\"Apple-interchange-newline\"><!--EndFragment-->\r\n\r\n<br></p>', 'Buy Instagram Share', '', '', '2019-02-17 05:49:30am'),
(8, 'instagramfollow', 'Buy Instagram Followers', '<p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-0a6b8f4b-7fff-d351-b3d0-a635388a2517\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Social Media Marketing is why you will look back at 10 years from today if you will not get any platform related to social media marketing where you can not share your personal information with your photos and your videos, but today\'s time will now look </span></b><!--EndFragment-->.</p><p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-f594bcd2-7fff-5751-e2d6-2f41a2335506\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#B10DC9\"><span style=\"font-size: 12pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Buy Best/Real </span><span style=\"font-size: 11pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Instagram Followers</span></font></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-f594bcd2-7fff-5751-e2d6-2f41a2335506\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100% Safe Practices</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-f594bcd2-7fff-5751-e2d6-2f41a2335506\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The procedure we use is a &nbsp;Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many followers you buy, your Instagram/blog/site and your profile will be completely safe.We will make you work right. </span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-f594bcd2-7fff-5751-e2d6-2f41a2335506\"></b><br class=\"Apple-interchange-newline\"><!--EndFragment-->\r\n\r\n<br></p>', 'Buy Instagram Followers', '', '', '2019-02-17 05:51:30am'),
(9, 'facebookpagelike', 'Buy Facebook Page Likes', '<p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-d9d98d33-7fff-d2c3-e8b4-2f67422690b0\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Facebook page is that the easy resolution to powerful business promotion. making a business page helps you around commutation your potential customers with regards to the corporationâ€™s promos and offers. artistic written content to boot supports appealing to further form of individuals. All things thought-about, do you have to opt for properly around moving into the bit with the gang. whereas within the years of fast social selling use, that\'s really an incredible drawback to get a region the commercial enterprise around this huge online world</span></b><!--EndFragment-->&nbsp;</p><p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-327e288c-7fff-fb7d-1b4f-ceefaae69c5a\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#00369B\"><span style=\"font-size: 12pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Buy Best/Real Facebook Likes</span></font></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-327e288c-7fff-fb7d-1b4f-ceefaae69c5a\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100% Safe Practices</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-327e288c-7fff-fb7d-1b4f-ceefaae69c5a\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The procedure we use is a &nbsp;Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many followers you buy, your facebook/blog/site and your profile will be completely safe.We will make you work right. </span></p></p><p class=\"sceditor-nlf\"><br></p>', 'Buy Facebook Page Likes', '', '', '2019-02-17 15:13:59pm'),
(10, 'facebookpostlike', 'Buy Facebook Post Likes', '<p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-4702f59c-7fff-0c37-1441-c1fe6d4a1ff1\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Facebook is preparing to start difficult business Pages that distribute nasty, forceful offering posts with these very words to the News Feed. Facebook can indicate them to bounty less of their . Facebook picture likes have an immediate effect on each the authenticity and execution of the different post from the numerous interpersonal interaction sites, Facebook is one site wherever incalculable people from varying .</span></b><!--EndFragment-->&nbsp;</p><p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-bd590326-7fff-3597-7928-957709618cb3\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Facebook ikon likes have an immediate effect on each the quality and execution of the few posts. The greater the amount of preferences, the extra most likely the picture is to be considered important. Not exclusively this, anyway prefers conjointly add to more extensive introduction, together with the likelihood of pictures being shared and going infective specialist</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-bd590326-7fff-3597-7928-957709618cb3\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#00369B\"><span style=\"font-size: 12pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Buy Best/Real Facebook Post Likes</span></font></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-bd590326-7fff-3597-7928-957709618cb3\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100% Safe Practices</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-bd590326-7fff-3597-7928-957709618cb3\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The procedure we use is a &nbsp;Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many followers you buy, your facebook/blog/site and your profile will be completely safe.We will make you work right.</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-bd590326-7fff-3597-7928-957709618cb3\"></b><br class=\"Apple-interchange-newline\"><!--EndFragment-->\r\n\r\n<br></p>', 'Buy Facebook Post Likes', '', '', '2019-02-17 15:15:01pm'),
(11, 'facebookfollow', 'Buy Facebook Followers', '<p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-8431f4e9-7fff-13cf-998b-442251f8876a\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Your followers would have an interest in your profile and would really like to work out your posts. Flaunt your quality in on-line market instantly. the amount of FB followers one has in their account plays a vital role to draw in additional folks towards it. obtain Facebook followers and increase your complete presence on Facebook.Then I tell you why Social Media selling is why you may relive at ten years from nowadays if you will not get any platform associated with social media marketing wherever you\'ll be able to not share your personal info together with your photos and your videos, however today\'s time can currently look because of the dynamical nature of technology, there has been an enormous amendment in social media too.</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-8431f4e9-7fff-13cf-998b-442251f8876a\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#00369B\"><span style=\"font-size: 12pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Buy Best/Real Facebook Followers</span></font></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-8431f4e9-7fff-13cf-998b-442251f8876a\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100% Safe Practices</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-8431f4e9-7fff-13cf-998b-442251f8876a\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The procedure we use is a &nbsp;Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many followers you buy, your facebook/blog/site and your profile will be completely safe.We will make you work right.</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-8431f4e9-7fff-13cf-998b-442251f8876a\"></b><br class=\"Apple-interchange-newline\"><!--EndFragment-->\r\n\r\n<br></p>', 'Buy Facebook Followers', '', '', '2019-02-17 15:16:01pm'),
(12, 'facebookshare', 'Buy Facebook Shares', '<p>\r\n\r\n<!--StartFragment--><meta charset=\"utf-8\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-9e9bff03-7fff-9bfa-9210-454a41e50062\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Buy Facebook Shares</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-9e9bff03-7fff-9bfa-9210-454a41e50062\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Then I tell you why Social Media Marketing is why you will look back at 10 years from today if you will not get any platform related to social media marketing where you can not share your personal information with your photos and your videos, but today\'s time will now look Due to the changing nature of technology, there has been a huge change in social media too. These people who use Facebook or use YouTube on YouTube or even post a blog or website post, or even after that it is understood that for a long time through the social media application or after the website, such as Instagram YouTube Facebook, all these spend on Twitter. Apart from this, social media marketing is </span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-9e9bff03-7fff-9bfa-9210-454a41e50062\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#00369B\"><span style=\"font-size: 12pt; font-family: Arial; background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Buy Best/Real Facebook Shares</span></font></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-9e9bff03-7fff-9bfa-9210-454a41e50062\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">100% Safe Practices</span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-9e9bff03-7fff-9bfa-9210-454a41e50062\"></b><p dir=\"ltr\" style=\"font-weight: normal; line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The procedure we use is a &nbsp;Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many followers you buy, your facebook/blog/site and your profile will be completely safe.We will make you work right. </span></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-9e9bff03-7fff-9bfa-9210-454a41e50062\"></b><br class=\"Apple-interchange-newline\"><!--EndFragment-->\r\n\r\n<br></p>', 'Buy Facebook Shares', '', '', '2019-02-17 15:16:50pm');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `transcode` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `page`, `name`, `phone`, `email`, `address`, `link`, `product`, `method`, `transcode`, `status`, `comment`, `file`, `date`) VALUES
(1, 'service', 'siam', '01764881424', 'siamalmahmud426@gmail.com', 'thikadarpara', 'http://localhost/phpmyadmin/', '2000 Twitter Tweet Like for just only $20 Dollar', 'Ipay: 01744755499', 'aih398kdk', 'done', 'just check your email.', '', '2019-01-04 19:02:32pm'),
(2, 'product', 'Siam Al Mahmud', '01764881424', 'siamalmahmud426@gmail.com', 'thikadarpara', '', 'Paypal for just only $20 Dollar', 'Ipay: 01744755499', 'aih398kdk', 'pending', '', '', '2019-01-04 19:02:32pm'),
(3, 'service', 'siam', '01764881424', 'siamalmahmud426@gmail.com', 'thikadarpara', 'http://localhost/phpmyadmin/', '2000 Twitter Tweet Like for just only $20 Dollar', 'Ipay: 01744755499', 'aih398kdk', 'cancel', 'where is your payment man ? if any problem. then contact with us hurry.', '', '2019-01-04 19:02:32pm'),
(4, 'product', 'Siam Al Mahmud', '01764881424', 'siamalmahmud426@gmail.com', 'thikadarpara', '', 'Paypal for just only $20 Dollar', 'Ipay: 01744755499', 'aih398kdk', 'accept', 'just download the file.', '560hb.jpg', '2019-01-04 19:02:32pm');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `seo_discription` text NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `page`, `title`, `seo_title`, `discription`, `seo_discription`, `seo_keyword`, `date`) VALUES
(1, 'about', 'About', 'about page | reuniquers', '<p>\r\n<!--StartFragment-->We\'ve been easy to serve. You can easily take, follow, tweet, subscribe. We\'ll get you 100% Satisfy with Business. <br>\r\nThis is the social media service. You can get many visitors from here.100% Safe Practices.The procedure we use is a <br>\r\n Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many <br>\r\n100% Safe Practices\r\nThe procedure we use is a  Site of safety. We comply with twitter \r\npolicies to make sure your profile will not be harmed. No matter how \r\nmany followers you buy, your Youtube/blog/site and your profile will be \r\ncompletely safe.We will make you work right. \r\n\r\nfollowers you buy, your Youtube/blog/site and your profile will be \r\ncompletely safe.We will<!--EndFragment-->\r\n\r\n<br></p>', 'We\'ve been easy to serve. You can easily take, follow, tweet, subscribe. We\'ll get you 100% Satisfy with Business. This is the social media service. You can get many visitors from here.100% Safe Practices.The procedure we use is a Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many 100% Safe Practices The procedure we use is a Site of safety. We comply with twitter policies to make sure your profile will not be harmed. No matter how many followers you buy, your Youtube/blog/site and your profile will be completely safe.We will make you work right. followers you buy, your Youtube/blog/site and your profile will be completely safe.We will make you work right.', 'We\'ve been easy to serve. You can easily take, follow, tweet, subscribe. We\'ll get you 100% Satisfy with Business. This is the social media service. You can get many visitors from here.100% Safe Practices.The procedure we use is a Site of safety. We compl', '2019-02-15 20:56:23pm');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `img`, `method`, `details`, `address`, `date`) VALUES
(1, 'paypal.png', 'Paypal', '<p><b>Just Login To Your Account And Send Money To Us.</b><br></p>', 'nur.alambd7788@gmail.com', '2019-01-04 18:31:25pm'),
(2, 'Perfect_Money.png', 'Perfect Money', '<p>\r\n<!--StartFragment--><b>Just Login To Your Account And Send Money To Us.</b><!--EndFragment-->\r\n\r\n<br></p>', 'nur.alambd7788@gmail.com', '2019-01-04 18:39:44pm'),
(3, 'payoneer.png', 'Payoneer', '<p>\r\n<!--StartFragment--><b>Just Login To Your Account And Send Money To Us.</b><!--EndFragment-->\r\n\r\n<br></p>', 'adil.bd88@gmail.com', '2019-01-04 18:41:50pm'),
(4, 'skrill-logo-gradient.svg', 'Skrill', '<p><b>Just Login To Your Account And Send Money To Us.</b></p>', 'adil.bd88@gmail.com', '2019-01-04 18:48:19pm'),
(5, 'neteller.png', 'Neteller', '<p>\r\n<!--StartFragment--><b>Just Login To Your Account And Send Money To Us.</b><!--EndFragment-->\r\n\r\n<br></p>', 'adil.bd88@gmail.com', '2019-01-04 18:49:23pm'),
(6, 'ipay.png', 'Ipay', '<p><font color=\"#E82A1F\"><b>Only Valid in Bangldesh.</b></font></p><p><font color=\"#000000\">Just Go To Your Ipay App And Send Money To 01744755499</font></p>', '01744755499', '2019-01-04 18:57:35pm');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `class`, `title`, `name`, `amount`, `details`, `date`) VALUES
(1, 'card_head_1', 'basic', 'Cj Account', '$15', '<li><i class=\"fa fa-check\"></i> Gmail</li>\r\n<li><i class=\"fa fa-check\"></i> Id+Password</li>\r\n<li class=\"text-muted\"><i class=\"fa fa-times\"></i> Free Subdomain</li>\r\n<li class=\"text-muted\"><i class=\"fa fa-times\"></i> Monthly Status Reports</li>', '2019-01-05 17:45:38pm'),
(2, 'card_head_2', 'plus', 'Cpa Grip', '$10', '<li><i class=\"fa fa-check\"></i>Id+Password</li>\r\n<li><i class=\"fa fa-check\"></i> Unique Account</li>\r\n<li><i class=\"fa fa-check\"></i> 100% guaranteed</li>\r\n<li><i class=\"fa fa-check\"></i> 24/7 Support</li>', '2019-01-08 07:12:34am'),
(3, 'card_head_3', 'pro', 'Gmail', '$20', '<li><i class=\"fa fa-check\"></i> 25+Real Account</li><li><i class=\"fa fa-check\"></i>Gmail Account</li><li><i class=\"fa fa-check\"></i> real producte</li><li><i class=\"fa fa-check\"></i> 24/7 support</li>', '2019-01-08 08:30:18am'),
(4, 'card_head_4', 'featured', 'Paypal', '$20', '<li><i class=\"fa fa-check\"></i>Paypal Account</li>\r\n<li><i class=\"fa fa-check\"></i>Vcc Card+Us Number</li>\r\n<li><i class=\"fa fa-check\"></i>Us real Address</li>\r\n<li><i class=\"fa fa-check\"></i> Name Of Product</li>', '2019-01-08 08:33:51am');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `seo_discription` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `seo_title`, `seo_keyword`, `seo_discription`, `img`, `name`, `details`, `price`, `date`) VALUES
(1, 'paypal', 'paypal, payment method, payment gateway, uniquers, unique, uniqueraim', 'Buy paypal Account,Paypal account,Best Real Account,Email+id+pass,Vcc card,Bank address,us real address,Original Account,100% satisfy,first delivery,Perfect for Account,Just Order Now', 'paypal1.png', 'Buy paypal Account', '<ol>\r\n<li>Buy paypal Account</li>\r\n<li>Paypal account</li>\r\n<li>Best Real Account</li>\r\n<li>Email+id+pass</li>\r\n<li>Vcc card</li>\r\n<li>Bank address</li>\r\n<li>us real address</li>\r\n<li>Original Account</li>\r\n<li>100% satisfy</li>\r\n<li>first delivery</li>\r\n<li>Perfect for Account</li>\r\n<li>Just Order Now</li>\r\n</ol>', '25$', '2019-03-06 20:28:31pm');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_discription` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `name`, `details`, `seo_title`, `seo_discription`, `seo_keyword`, `discription`, `date`) VALUES
(1, 'twitter', '<i class=\"fa fa-twitter\"></i> Twitter', 'Buy Twitter Followers, Likes, Retweet & Tweets.Many of the world\'s popular. People can reach their news easily through this twitter.Everyone can share raw with it. We like to share, follow, share your tweets\r\n', 'Buy Twitter Followers, Likes, Retweet & Tweets', 'Buy Twitter Followers, Likes, Retweet & Tweets', 'Buy Twitter', 'discription', '2019-01-04 01:15:57am'),
(2, 'facebook', '<i class=\"fa fa-facebook\"></i> Facebook', 'Buy Facebook Likes, Followers, Shares & Views.Facebook is very popular throughout the world. Which gives easy news easily. Can communicate yourself and social news. Everyone can share raw with it.You can take the likes, recommendations, shares from here, easily.', 'Buy Facebook Likes, Followers, Shares & Views', 'Buy Facebook Likes, Followers, Shares & Views', 'Buy facebook', '', '2019-01-04 01:48:39am'),
(3, 'instagram', '<i class=\"fa fa-instagram\"></i> Instagram', 'Buy Instagram likes, Followers, Comments, And Share.inastagram is very popular throughout the world. Which gives easy news easily.', 'Buy Instagram likes, Followers, Comments, And Share', 'Buy Instagram likes, Followers, Comments, And Share', 'Buy Instagram', '', '2019-01-04 03:08:03am'),
(4, 'youtube', '<i class=\"fa fa-youtube\"></i> Youtube', 'Buy Youtube Likes, Dislikes, Subscribers, Views, & Comments.It is very popular because of which we can see the video from all over the world. We can learn a lot. You can easily subcribe, this site, like, view, take it easy.', 'Buy Youtube Likes, Dislikes, Subscribers, Views, & Comments', 'Buy Youtube Likes, Dislikes, Subscribers, Views, & Comments', 'Buy Youtube', '', '2019-01-04 03:08:34am'),
(5, 'traffic', '<i class=\"fa fa-globe\"></i> Web Traffic', 'media marketing wherever you\'ll be able to not share your personal info together with your photos and your videos, however today\'s time can currently look because of the dynamical nature of technology, there has been an enormous amendment in social media too.', '', '', '', '', '2019-01-08 06:40:35am');

-- --------------------------------------------------------

--
-- Table structure for table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` int(255) NOT NULL,
  `sitename` varchar(255) NOT NULL,
  `sitetitle` varchar(255) NOT NULL,
  `sitelogo` varchar(255) NOT NULL,
  `siteicon` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_discription` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `sitename`, `sitetitle`, `sitelogo`, `siteicon`, `seo_title`, `seo_discription`, `seo_keyword`, `facebook`, `twitter`, `googleplus`, `instagram`, `youtube`, `date`) VALUES
(1, 'UniquerAim', 'Home|Buy Shop virtual products /Buy Cheap & High-Quality', '', '', 'Buy Online virtual products,Twitter,Instagram, Facebook,Youtube & Traffic views', 'Buy Online virtual products,Twitter,Instagram, Facebook,Youtube & Traffic views', 'Facbook buy,Twitter Buy,Cpa Account', 'https://facebook.com/hasheon/', 'https://twitter.com/SiamAlMahmud', 'https://plus.google.com/u/0/+', 'https://www.instagram.com/', 'https://www.youtube.com/c/', '2019-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(255) NOT NULL,
  `sliderimg` varchar(255) NOT NULL,
  `slidertitle` varchar(255) NOT NULL,
  `sliderdiscription` varchar(255) NOT NULL,
  `sliderlink` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `sliderimg`, `slidertitle`, `sliderdiscription`, `sliderlink`, `date`) VALUES
(1, 'slider1.png', 'UniquerAim', 'Best Multiple Online Product Service, Social & Web Service and Online virtual products', '#', '2018-12-14'),
(2, 'slider2.png', 'UniquerAim', 'Buy Online virtual products,Twitter,Instagram,\r\nFacebook,Youtube & Traffic views ', '#', '2018-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `topup`
--

CREATE TABLE `topup` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `transcode` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topup`
--

INSERT INTO `topup` (`id`, `name`, `price`, `method`, `transcode`, `status`, `date`) VALUES
(1, 'aladil', 10, 'Payoneer', 'aih398kdk', 'cancel', '2019-04-04 21:47:16pm'),
(2, 'aladil', 11, 'Paypal', '11', 'pending', '2019-08-08 13:24:09pm'),
(3, 'aladil', 11, 'Skrill', 'dsjkhad', 'added', '2019-08-08 13:24:49pm');

-- --------------------------------------------------------

--
-- Table structure for table `traffic`
--

CREATE TABLE `traffic` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traffic`
--

INSERT INTO `traffic` (`id`, `title`, `name`, `details`, `date`) VALUES
(1, 'visitor', '<i class=\"fa fa-globe\"></i>Traffic', 'You Can Started With $5!', '2019-01-04 01:45:00am');

-- --------------------------------------------------------

--
-- Table structure for table `trafficvisitor`
--

CREATE TABLE `trafficvisitor` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trafficvisitor`
--

INSERT INTO `trafficvisitor` (`id`, `name`, `amount`, `date`) VALUES
(1, '1000 Visitor', '$5 Dollar', '2018-12-23'),
(2, '5000 Visitor', '$10 Dollar', '0000-00-00'),
(3, '10000 Visitor', '$20 Dollar', '0000-00-00'),
(4, '15000 Visitor', '$25 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `trust`
--

CREATE TABLE `trust` (
  `id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trust`
--

INSERT INTO `trust` (`id`, `img`, `date`) VALUES
(1, '6698.png', '2019-02-16 17:25:16pm'),
(2, 'label-150p-01-01.png', '2019-02-16 17:25:21pm');

-- --------------------------------------------------------

--
-- Table structure for table `twitter`
--

CREATE TABLE `twitter` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twitter`
--

INSERT INTO `twitter` (`id`, `title`, `name`, `details`, `date`) VALUES
(1, 'like', '<i class=\"fa fa-heart-o\"></i> Likes', 'You Can Started With $5!', '2019-01-04 01:45:00am'),
(2, 'retweet', '<i class=\"fa fa-retweet\"></i> Retweets', 'You Can Started With $5!', '2019-01-04 01:49:38am'),
(3, 'tweet', '<i class=\"fa fa-twitter\"></i> Tweets', 'You Can Started With $5!', '2019-01-04 01:49:58am'),
(4, 'follow', '<i class=\"fa fa-users\"></i> Followers', 'You Can Started With $5!', '2019-01-04 01:50:15am');

-- --------------------------------------------------------

--
-- Table structure for table `twitterfollow`
--

CREATE TABLE `twitterfollow` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twitterfollow`
--

INSERT INTO `twitterfollow` (`id`, `name`, `amount`, `date`) VALUES
(1, '100 Twitter Followers Only (1-3 days)', ' $5.00', '2018-12-23'),
(2, '1000 Twitter Follow', '$10 Dollar', '0000-00-00'),
(3, '1500 Twitter Follow', '$15 Dollar', '0000-00-00'),
(4, '2000 Twitter Follow', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `twitterlike`
--

CREATE TABLE `twitterlike` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twitterlike`
--

INSERT INTO `twitterlike` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 Twitter Tweet Like', '$5 Dollar', '2018-12-23'),
(2, '1000 Twitter Tweet Like', '$10 Dollar', '0000-00-00'),
(3, '1500 Twitter Tweet Like', '$15 Dollar', '0000-00-00'),
(4, '2000 Twitter Tweet Like', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `twitterretweet`
--

CREATE TABLE `twitterretweet` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twitterretweet`
--

INSERT INTO `twitterretweet` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 Twitter Retweet', '$5 Dollar', '2018-12-23'),
(2, '1000 Twitter Retweet', '$10 Dollar', '0000-00-00'),
(3, '1500 Twitter Retweet', '$15 Dollar', '0000-00-00'),
(4, '2000 Twitter Retweet', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `twittertweet`
--

CREATE TABLE `twittertweet` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twittertweet`
--

INSERT INTO `twittertweet` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 Twitter Tweet', '$5 Dollar', '2018-12-23'),
(2, '1000 Twitter Tweet', '$10 Dollar', '0000-00-00'),
(3, '1500 Twitter Tweet', '$15 Dollar', '0000-00-00'),
(4, '2000 Twitter Tweet', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone`, `user_type`, `password`, `date`) VALUES
(1, 'aladil', '01744755499', 'admin', 'de4d51a2f6fdc342b2670cf9eaaf087b', '2018-12-14'),
(2, 'siam', '01764881424', 'user', 'b1abf3e93afac80ddc601ec7ca7b28b4', '2019-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `added` int(255) NOT NULL,
  `cuted` int(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `title`, `name`, `details`, `date`) VALUES
(1, 'comment', '<i class=\"fa fa-comment\"></i> Comment', 'You Can Started With $5!', '2019-01-04 01:45:00am'),
(2, 'like', '<i class=\"fa fa-thumbs-up\"></i> Like', 'You Can Started With $5!', '2019-01-04 01:49:38am'),
(3, 'share', '<i class=\"fa fa-share\"></i> Share', 'You Can Started With $5!', '2019-01-04 01:49:58am'),
(4, 'subscribe', '<i class=\"fa fa-users\"></i> subscribe', 'You Can Started With $5!', '2019-01-04 01:50:15am');

-- --------------------------------------------------------

--
-- Table structure for table `youtubecomment`
--

CREATE TABLE `youtubecomment` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtubecomment`
--

INSERT INTO `youtubecomment` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 youtube Comment', '$5 Dollar', '2018-12-23'),
(2, '1000 youtube Comment', '$10 Dollar', '0000-00-00'),
(3, '1500 youtube Comment', '$15 Dollar', '0000-00-00'),
(4, '2000 youtube Comment', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `youtubelike`
--

CREATE TABLE `youtubelike` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtubelike`
--

INSERT INTO `youtubelike` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 youtube Like', '$5 Dollar', '2018-12-23'),
(2, '1000 youtube Like', '$10 Dollar', '0000-00-00'),
(3, '1500 youtube Like', '$15 Dollar', '0000-00-00'),
(4, '2000 youtube Like', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `youtubeshare`
--

CREATE TABLE `youtubeshare` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtubeshare`
--

INSERT INTO `youtubeshare` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 youtube Share', '$5 Dollar', '2018-12-23'),
(2, '1000 youtube Share', '$10 Dollar', '0000-00-00'),
(3, '1500 youtube Share', '$15 Dollar', '0000-00-00'),
(4, '2000 youtube Share', '$20 Dollar', '2018-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `youtubesubscribe`
--

CREATE TABLE `youtubesubscribe` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtubesubscribe`
--

INSERT INTO `youtubesubscribe` (`id`, `name`, `amount`, `date`) VALUES
(1, '500 youtube subscribe', '$5 Dollar', '2018-12-23'),
(2, '1000 youtube subscribe', '$10 Dollar', '0000-00-00'),
(3, '1500 youtube subscribe', '$15 Dollar', '0000-00-00'),
(4, '2000 youtube subscribe', '$20 Dollar', '2018-12-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebook`
--
ALTER TABLE `facebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebookfollow`
--
ALTER TABLE `facebookfollow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebookpagelike`
--
ALTER TABLE `facebookpagelike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebookpostlike`
--
ALTER TABLE `facebookpostlike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebookshare`
--
ALTER TABLE `facebookshare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagram`
--
ALTER TABLE `instagram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagramcomment`
--
ALTER TABLE `instagramcomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagramfollow`
--
ALTER TABLE `instagramfollow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagramlike`
--
ALTER TABLE `instagramlike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagramshare`
--
ALTER TABLE `instagramshare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesetting`
--
ALTER TABLE `sitesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traffic`
--
ALTER TABLE `traffic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trafficvisitor`
--
ALTER TABLE `trafficvisitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trust`
--
ALTER TABLE `trust`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twitter`
--
ALTER TABLE `twitter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twitterfollow`
--
ALTER TABLE `twitterfollow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twitterlike`
--
ALTER TABLE `twitterlike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twitterretweet`
--
ALTER TABLE `twitterretweet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `twittertweet`
--
ALTER TABLE `twittertweet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtubecomment`
--
ALTER TABLE `youtubecomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtubelike`
--
ALTER TABLE `youtubelike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtubeshare`
--
ALTER TABLE `youtubeshare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtubesubscribe`
--
ALTER TABLE `youtubesubscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facebook`
--
ALTER TABLE `facebook`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `facebookfollow`
--
ALTER TABLE `facebookfollow`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `facebookpagelike`
--
ALTER TABLE `facebookpagelike`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `facebookpostlike`
--
ALTER TABLE `facebookpostlike`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `facebookshare`
--
ALTER TABLE `facebookshare`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instagram`
--
ALTER TABLE `instagram`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instagramcomment`
--
ALTER TABLE `instagramcomment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instagramfollow`
--
ALTER TABLE `instagramfollow`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instagramlike`
--
ALTER TABLE `instagramlike`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instagramshare`
--
ALTER TABLE `instagramshare`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topup`
--
ALTER TABLE `topup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `traffic`
--
ALTER TABLE `traffic`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trafficvisitor`
--
ALTER TABLE `trafficvisitor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trust`
--
ALTER TABLE `trust`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `twitter`
--
ALTER TABLE `twitter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `twitterfollow`
--
ALTER TABLE `twitterfollow`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `twitterlike`
--
ALTER TABLE `twitterlike`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `twitterretweet`
--
ALTER TABLE `twitterretweet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `twittertweet`
--
ALTER TABLE `twittertweet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `youtubecomment`
--
ALTER TABLE `youtubecomment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `youtubelike`
--
ALTER TABLE `youtubelike`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `youtubeshare`
--
ALTER TABLE `youtubeshare`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `youtubesubscribe`
--
ALTER TABLE `youtubesubscribe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
