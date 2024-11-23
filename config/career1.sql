-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 07:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `career1`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_counsellor`
--

CREATE TABLE `add_counsellor` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_modifield` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_counsellor`
--

INSERT INTO `add_counsellor` (`id`, `cat_id`, `name`, `email`, `password`, `date_modifield`) VALUES
(1, 4, 'teja', 'teja@gmail.com', 'teja', '2022-05-26 15:20:08'),
(2, 9, 'prathul', 'prathul@gmail.com', 'prathul', '2022-05-26 15:20:08'),
(3, 10, 'chanti', 'chanti@gmail.com', 'chanti', '2022-05-26 15:20:08'),
(4, 3, 'umesh', 'umesh@gmail.com', 'umesh', '2022-05-26 15:20:08'),
(8, 1, 'ratan', 'ratan@gmail.com', '123456', '2022-05-26 11:47:02'),
(9, 2, 'jeevana', 'jeevana@gmail.com', '123456', '2022-05-26 11:28:36'),
(10, 7, 'srinu', 'srinu@gmail.com', 'srinu', '2022-05-25 19:38:05'),
(11, 6, 'manoj', 'manoj@gmail.com', 'manoj', '2022-05-25 19:38:54'),
(12, 5, 'varma', 'varma@gmail.com', 'varma', '2022-05-25 19:40:35'),
(13, 8, 'hemanth', 'hemanth@gmail.com', 'hemanth', '2022-05-26 11:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'ratan', 'teja', 'ratan@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(20) NOT NULL,
  `name` text DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `date_added` text DEFAULT NULL,
  `article_from` varchar(250) DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `name`, `image`, `description`, `date_added`, `article_from`, `date_modified`) VALUES
(8, 'Achieving Your Dreams and Goals', 'Achieving_Your_Dreams_and_Goals.jpg', '<p>Do you have dreams and goals? Sure you have, but what are doing to make them come true? Often, dreams and goals stay as daydreams, unless you do something turn them into reality.</p><p><strong>Achieving your dreams and goals depends on several factors:<br></strong></p><ol><li>You need to have a specific and clear goal.</li><li>You have to be sure that you really want to achieve your goal.</li><li>You need to create a clear mental image of your goal.</li><li>You need a strong desire.</li><li>You need to disregard doubts and thoughts about failure.</li><li>You have to show confidence and faith, and persevere, until you achieve your goal.</li></ol><p>How many people fulfill all the above-mentioned requirements? Just a \r\nfew! Most people do not know that there are laws governing success, \r\nwhich should be followed. It is so easy and simple to daydream, and then say, \"Well it is just a \r\ndaydream. It will never come true\". It is so easy to give up and lose \r\nfaith and motivation, when you facing obstacles.<strong>You can achieve your dreams and goals using your mental tools. </strong>Achieving your goals shouldn\'t be a tough ordeal. In fact, it can be fun\r\n and pleasure, if you go in the right way. It is not hard physical work \r\nthat brings success. <strong>Success does not require hard physical labor. In fact, you need to do mental work.</strong> <a href=\"http://www.successconsciousness.com/index_000008.htm\">Visualization</a> and repeating <a href=\"http://www.successconsciousness.com/index_00000a.htm\">affirmations</a>\r\n make up this mental work, and are important stepping stones to \r\nachieving success. When you visualize and affirm, you focus and channel \r\nyour energies toward your goal. Your mind is geared toward finding \r\nsolutions to bring your goal into manifestation. By thinking in a <a href=\"http://www.successconsciousness.com/index_000009.htm\">positive</a>\r\n manner on your goal, and not letting any doubts enter your mind, your \r\nintuition starts working, you recognize opportunities, and you have \r\nenergy at your disposal to follow your goals and dreams. </p>', 'November-25-2016', 'Admin', '2016-11-25 10:56:07'),
(9, 'Who Controls Your Mind?', 'Who_Controls_Your_Mind.jpg', '<p>Few people are aware of the thoughts that pass through their minds, since most thinking is done in an automatic manner. The mind is sometimes, like small child, who accepts, and takes for \r\ngranted, whatever it sees or hears, without judgment and without \r\nconsidering the consequences. If you let your mind behave in this \r\nmanner, giving it complete freedom to jump from one thought to another, \r\nyou lose your freedom. We are constantly flooded with thoughts, ideas and information coming \r\nthrough the five senses, other people, the newspapers and TV. These \r\nthoughts, ideas and information penetrate the mind, whether we are aware\r\n of this process or not. This flow of thoughts affects our behavior and reactions. It influences \r\nthe way we think, our preferences, likes and dislikes. Usually, we \r\nautomatically accept these thoughts, letting them shape our life. This \r\nactually means that we lose our mental freedom. Most people think and believe that their thoughts originate from them, \r\nbut have you ever stopped and considered whether your thoughts, desires,\r\n likes and dislikes are really yours? Did it occur to you that maybe \r\nthey came from the outside, from other people, and you have \r\nunconsciously accepted them as your own? <strong>If you do not filter the thoughts that enter your mind you stop to be a free person</strong>, and allow every thought to control your life. You may object, and say that the thoughts that pass through your mind \r\nare yours, but are they? Have you deliberately and attentively created \r\nevery thought that entered your mind? <br></p><ol><li>Why let outside influences control your mind and life? </li><li>Why let other people\'s thoughts control your life and mind? </li><li>Do you want to make your mind free or do you prefer to enslave it to other people\'s opinions and thoughts?</li></ol><p>If you leave your mind open to every thought that passes by, you put our\r\n life in other people\'s hands, and without realizing it, you accept \r\ntheir thoughts and act in accordance with them. Every person is differently affected by external thoughts. Certain \r\nthoughts and ideas we ignore, and others spur us to immediate action. \r\nUsually, thoughts concerning subjects we love have more power on us than\r\n other thoughts, but even thoughts and ideas that we don\'t care about, \r\nif we are frequently exposed to them, eventually sink into the \r\nsubconscious mind and affect us. Everyone has desires, ambitions and dreams that he or she may foster \r\nfrom childhood. However, it is possible that they are the thoughts of \r\nparents, teachers and friends, which have lodged into their mind, and \r\nwere carried throughout their lives. <strong>Are these thoughts necessary? Do we need all this excessive baggage?</strong> In order to reduce the power of outside influences and thoughts on your \r\nlife, you need to be aware of the thoughts and desires that enter your \r\nmind, and ask yourself, whether you really like them, and if you are \r\nwilling to accept them into your life.&nbsp; You do not have to accept each and every thought that enters your mind.&nbsp; Find out whether it is your own thought, or someone else\'s thought. \r\nAlso, decide whether the thought is useful for you, and if it is for \r\nyour own good to follow. This will lead to more control over your \r\nthinking process. It might not be so easy do at first, because your mind will probably \r\nrevolt against this control. However, if you want to be the master of \r\nyour mind and life, you should not let other people\'s thoughts rule your\r\n life, unless you consciously choose so.</p>', 'November-25-2016', 'Admin', '2016-11-25 11:14:31'),
(10, 'What Are You Waiting For?', 'What_Are_You_Waiting_For.jpg', '<p>What are you waiting for? Do you want to make changes in your life? Do you constantly tell yourself that if things were different, you could do this and that? Nothing is going change, unless you initiate the change. Blaming others and blaming circumstances would not make your situation better. Daydreaming about a different life style, about a vacation, about a new \r\ncar, or about a new house is not enough. Wishing you were wealthy, \r\nhealthy or in love, and at the same time, at the back of your mind, not \r\nbelieving you will ever achieve any of these things, would only make the\r\n situation worse.&nbsp; What you feel and believe deep inside you is more powerful than all your\r\n resolutions, wishes and daydreaming. You should work on convincing \r\nyourself that these things are possible. When you are convinced you act \r\ndifferently. <br></p><p><strong>Start Today Not in The Future</strong><br>If you want to make changes in your life, they have to start right now, \r\nnot in some undefined future. You are cheating and frustrating yourself \r\nwhen you procrastinate, when you make empty resolutions, and when you \r\nbelieve that if circumstances were different you would have been able to\r\n do this and that. Now, this very moment is the time to start any change, the smallest one \r\nor the biggest one. If you say, \"I\'ll start tomorrow\", you are cheating \r\nyourself, because tomorrow you will again say the same thing. There will\r\n always be another tomorrow, but no change in your life. Change must start right now, and only you, are responsible for this \r\nchange. You must devote time and effort, and make plans, and things will\r\n start changing.&nbsp; There is always a subconscious inner resistance to making changes, even \r\nif one does not like his or her life. People feel more comfortable with a\r\n familiar situation, even if they don\'t like it. Strange, isn\'t it?&nbsp; So, what are you waiting for? Are you going to do something about your \r\nlife, or just read the article and go on with your life? If you do this,\r\n tomorrow will be more or less like today, and the day after too, and so\r\n on and on. <br></p>', 'November-25-2016', 'Admin', '2016-11-25 12:05:19'),
(11, 'Dare, Don\'t Be Afraid to Make Mistakes', 'Dare,_Dont_Be_Afraid_to_Make_Mistakes.jpg', '<p>Don\'t worry if you make mistakes. Only people who dare, try, and persevere, complete tasks and achieve success. It is so comfortable to be passive, make no effort, and stick to the \r\nfamiliar. However, by doing so, we allow external influences shape your \r\nlife. Daring, trying new things, and making changes, seem intimidating. It is \r\nmore comfortable to suffer, complain, and stay in the same place. <br></p><p><strong>Why Daring is intimidating?</strong></p><ol><li>You afraid you might make mistakes.</li><li>You are afraid to look ridiculous.</li><li>You want to avoid criticism.</li><li>There is a lack of self-esteem.</li><li>There is a lack of self-confidence.</li></ol><p>If you wish to let the above list intimidate you, and therefore, be \r\nunhappy, complain, and stay where you are, this is your choice. However,\r\n if you want to live a greater life, you should consider taking a step \r\nbeyond your fears and start daring.&nbsp; <strong>It is not so difficult to do.</strong> It is a matter of attitude. It is a matter of changing your mindset. As the saying goes, \'it is all in the mind\'. After the first step, it would seem less intimating to dare, even if you make mistakes and bad choices.&nbsp; All people who achieved success, any kind of success, dared to try. They\r\n did mistakes, and they failed over and again, but they did not give up.&nbsp; If you make mistakes, it\'s all right. Everyone make mistakes. Learn from\r\n them and go on. As said earlier, all successful people made mistakes, \r\nbut they didn\'t let their mistakes discourage them or deter them. It\'s quite simple, though not so easy to dare, and be afraid to make \r\nmistakes. This has nothing to do with finance, physical strength or \r\neducation. It is all a state of mind. It is something inside you. You need to find the strength and courage within you. You should learn \r\nto be courageous and daring, and do things, without the need to be \r\npushed and motivated from the outside. You have this strength within you, you only need to be conscious of it, and strengthen it. <a href=\"http://www.successconsciousness.com/index_00000a.htm\">Affirmations</a>, <a href=\"http://www.successconsciousness.com/index_000008.htm\">visualization</a>, and <a href=\"http://www.successconsciousness.com/books/willpower-and-self-discipline.html\">inner strength</a> development are the tools to do this. Learn to be a doer, by taking the initiative and acting now, without \r\nprocrastinating or hesitation.  Start with simple little things to gain \r\nexperience and confidence. <br></p>', 'November-25-2016', 'Admin', '2016-11-25 12:11:37'),
(12, 'Lack of Motivation and Enthusiasm', 'Lack_of_Motivation_and_Enthusiasm.jpg', '<p>Motivation and enthusiasm manifest as desire and interest, and as a \r\ndriving force that pushes you to take action and pursue goals. However, it often happens that you have the desire and interest, but you\r\n lack the motivation. This is a frustrating situation, since you want to\r\n do a certain thing, but cannot get enough inner strength and motivation\r\n to act.&nbsp; There are many reasons for the lack of motivation. It could be due to a \r\nweak desire, laziness or shyness, and it could be due lack of self \r\nesteem and self confidence. In some cases, the reason is a physical or \r\nmental problem, which requires professional help.&nbsp; You cannot blame other people if you lack the enthusiasm to act follow goals. You need to find a way to <a href=\"http://www.successconsciousness.com/strengthen_motivation.htm\">motivate</a> yourself. Lack of motivation and enthusiasm can show up everywhere, at home, at \r\nwork, in relationships, in pursuing goals and in everything else. This \r\noften, creates indifference, unhappiness and dissatisfaction. <strong><br></strong></p><p><strong>Reasons for Lack of Motivation and Enthusiasm:</strong> <br></p><ol><li>Lack of faith in one\'s abilities.</li><li>Fear of failure, due to failure in the past.</li><li>Fear of what others might say.</li><li>The habit of procrastination.</li><li>Laziness.</li><li>The feeling or belief that there are other more important things to do.</li><li>Being too stressed or nervous.</li><li>Absence of enough stimuli or incentives.</li></ol><p>The above mentioned reasons stifle motivation and enthusiasm, and are \r\nonly excuses for not acting. However, you learn to overcome and \r\ndisregard them, by becoming aware of them, acknowledging them, and \r\nunderstanding that you can change the programming of your mind. Sometimes, there are short bursts of motivation or enthusiasm. You start\r\n acting enthusiastically, but lose interest and motivation after a \r\nwhile, because you find it hard to sustain motivation or enthusiasm.&nbsp; <strong>If you wish to improve your life, you need to awaken motivation and \r\nenthusiasm. Tell yourself, over and again, how much you lose by their \r\nabsence, and how much you gain by having them.</strong> You need incentive and drive for following your big dreams, and also for\r\n the performance of minor daily tasks and chores. Otherwise, laziness, \r\nabsence of energy and procrastination will set in.</p>', 'November-25-2016', 'Admin', '2016-11-25 12:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `career_category`
--

CREATE TABLE `career_category` (
  `id` int(12) NOT NULL,
  `category_name` longtext NOT NULL,
  `date_modifield` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career_category`
--

INSERT INTO `career_category` (`id`, `category_name`, `date_modifield`) VALUES
(1, 'General', '2022-05-26 06:28:23'),
(2, 'Python Programming', '2022-05-26 06:29:09'),
(3, 'Java', '2022-05-26 06:30:03'),
(4, 'Web development', '2022-05-26 06:30:35'),
(5, 'Networking', '2022-05-26 06:30:47'),
(6, 'Cyber Security', '2022-05-26 06:31:37'),
(7, 'C/C++ Programming', '2022-05-26 06:31:56'),
(9, 'Machine Learning', '2022-05-26 06:46:47'),
(10, 'DBMS', '2022-05-24 15:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_email` varchar(150) DEFAULT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `google` varchar(150) NOT NULL,
  `skype` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_email`, `facebook`, `twitter`, `linkedin`, `phone`, `address`, `google`, `skype`, `id`) VALUES
('rt@gmail.com', 'www.facebook.com', 'www.twitter.com', 'www.linkedin.com', '6323', 'vizag', 'www.google.com', 'www.skype.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `counsellor_inbox`
--

CREATE TABLE `counsellor_inbox` (
  `id` int(15) NOT NULL,
  `subject` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `date_modifield` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counsellor_inbox`
--

INSERT INTO `counsellor_inbox` (`id`, `subject`, `category`, `message`, `sender_email`, `full_name`, `date_modifield`) VALUES
(1, 'kemi', 'Science', 'daddd', 'info@careerguidance.com', 'Ayodeji', '2016-10-27 07:47:18'),
(2, 'xcvf', 'Entertainment', 'dsd', 'info@careerguidance.com', 'Ayodeji', '2016-10-27 07:53:26'),
(3, 'ddfdf', 'Skills Acquisition', 'dfdfdfd', 'info@careerguidance.com', 'Ayodeji Adesoji', '2016-10-27 07:54:15'),
(4, 'just the best', 'Entertainment', 'just the best in what you do.', 'kemibest@gmail.com', 'Kemi Best', '2016-10-27 08:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fullname` varchar(150) DEFAULT NULL,
  `passwd` varchar(150) DEFAULT NULL,
  `business_name` varchar(50) DEFAULT NULL,
  `header_image` varchar(50) DEFAULT NULL,
  `template` varchar(50) DEFAULT 'template1',
  `install` int(11) DEFAULT 0,
  `logo` varchar(150) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `email`, `fullname`, `passwd`, `business_name`, `header_image`, `template`, `install`, `logo`, `color`) VALUES
(1, 'ratan@gmail.com', 'ratan', 'admin', 'Online Career Guidance', 'bg.jpg', 'xyzee', 1, 'logo.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(20) NOT NULL,
  `cat_id` int(20) NOT NULL,
  `subject` text NOT NULL,
  `category` varchar(250) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `student_email` varchar(250) NOT NULL,
  `identity` varchar(250) NOT NULL,
  `messages` longtext NOT NULL,
  `time` longtext NOT NULL,
  `time2` longtext NOT NULL,
  `date_modifield` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `cat_id`, `subject`, `category`, `student_name`, `student_email`, `identity`, `messages`, `time`, `time2`, `date_modifield`) VALUES
(49, 1, 'genral', 'General', 'ratan punati', 'rt@gmail.com', 'Me~!~Counsellor~!~Me~!~Counsellor~!~Counsellor~!~Me~!~Counsellor~!~Me~!~Counsellor~!~Me~!~Counsellor', 'hi my name is teja~!~hi how may i help you~!~sdf~!~sd~!~df~!~hi my name ratan~!~hi how may i help you\n~!~hiuhuib  ~!~hkjgkj~!~ddd~!~h', 'Thu-05-2022 at 01:45 PM~!~Thu-05-2022 at 01:46 PM~!~Thu-05-2022 at 01:47 PM~!~Thu-05-2022 at 01:48 PM~!~Thu-05-2022 at 01:48 PM~!~Fri-05-2022 at 07:22 AM~!~Fri-05-2022 at 07:22 AM~!~Sun-05-2022 at 06:21 PM~!~Sun-05-2022 at 06:22 PM~!~Mon-05-2022 at 08:16 PM~!~Mon-05-2022 at 08:16 PM', 'Mon-05-2022 at 08:16 PM', '2022-05-30 18:16:48'),
(50, 2, 'sdf', 'Python Programming', 'ratan punati', 'rt@gmail.com', 'Me~!~Counsellor', 'fvfdlkl~!~hi\n', 'Fri-05-2022 at 07:29 AM~!~Fri-05-2022 at 07:30 AM', 'Fri-05-2022 at 07:30 AM', '2022-05-27 05:30:09'),
(51, 3, 'fll', 'Java', 'ratan punati', 'rt@gmail.com', 'Me~!~Counsellor~!~Me', 'hi my name is ratan~!~hin how may i help you~!~hi\n', 'Fri-05-2022 at 07:52 AM~!~Fri-05-2022 at 07:53 AM~!~Sun-05-2022 at 06:21 PM', 'Sun-05-2022 at 06:21 PM', '2022-05-29 16:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` longtext NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `read` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_email`, `sender_name`, `phone`, `subject`, `message`, `send_date`, `read`) VALUES
(1, 'codedgift@gmail.com', 'Codedgift', '', 'What a Day', 'You are the reason for this day O Lord', '2016-05-23 10:34:23', '0'),
(2, 'codedgift@gmail.com', 'Codedgift', '', 'What a Day', 'You are the reason for this day O Lord', '2016-05-23 10:35:49', '0'),
(3, 'codedgift@gmail.com', 'weweed', '', 'fddd', 'ddds', '2016-05-25 10:41:05', '0'),
(4, 'codedgift@gmail.com', 'lanre', '', 'yanmife', 'God please bring daddy igwe back home safely', '2016-05-30 04:27:51', '0'),
(5, 'codedgift@gmail.com', 'lanre', '', 'yanmife', 'God please bring daddy igwe back home safely', '2016-05-30 04:30:53', '0'),
(6, 'kemi@gmail.com', 'kemi', '', 'bluetooth tinzs', 'to day bluetooth tinzs is fast', '2016-07-15 06:38:02', '0'),
(7, 'kemi@gmail.com', 'kemi', '', 'bluetooth tinzs', 'to day bluetooth tinzs is fast', '2016-07-15 06:39:40', '0'),
(8, 'comfort@gmail.com', 'ddd', '08096460341', '', '', '2016-09-28 09:14:44', '0'),
(9, 'comfort@gmail.com', 'dddsdds', '4545454545', 'Mapoly HND Past Question From Codedgift', '', '2016-09-28 09:17:34', '0'),
(10, 'comfort@gmail.com', 'sddddd', 'dddsad', 'ddsd', 'dsd', '2016-09-28 09:19:16', '0'),
(11, 'comfort@gmail.com', 'dsfdfsf', '', 'czzczxz', 'czcx', '2016-09-28 09:25:02', '0'),
(12, 'comfort@gmail.com', 'sddddd', '332423432432', 'dds', 'dsd', '2016-09-28 09:42:05', '0'),
(13, 'comfort@gmail.com', 'sddddd', '4545454545', 'dsds', 'ddss', '2016-09-28 09:42:46', '0'),
(14, 'fdsfdsf@ddf.fgdfd', 'ddsfd', '43243434', 'cdxcxc', '', '2016-11-25 13:12:46', '0'),
(15, 'dadsdas@dfdf.gfhng', 'gvfdfd', '54343243', 'cdcds', 'dsscscxcxcx', '2016-11-25 13:13:51', '0'),
(16, 'sddcds@dfdfd.tgdfg', 'vdsfdsf', '43434', 'fdfdf', 'dfdsfdsfdsf', '2016-11-25 13:17:36', '0'),
(17, 'fggd@dffd.com', 'tgrgfgdf', '34343454545', 'ghggfvbcv', 'vccvvcv', '2016-11-26 15:08:14', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `page_title` varchar(50) NOT NULL,
  `page_brief` mediumtext NOT NULL,
  `page_content` longtext NOT NULL,
  `page_image_loc` varchar(50) NOT NULL,
  `web_slogan` varchar(300) NOT NULL,
  `welcome_note` longtext NOT NULL,
  `welcome_img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_title`, `page_brief`, `page_content`, `page_image_loc`, `web_slogan`, `welcome_note`, `welcome_img`) VALUES
(1, 'home', 'Home', 'Welcome to Homepage', 'Our promise as a contractor is to build community value into every project while delivering professional expertise, exceptional customers service and quality construction.Our 24/7 Emergency service,If you have any construction and renovation work need, simply contact us. Our promise as a contractor is to build community value into every project while delivering professional expertise, exceptional customers service and quality construction.Our 24/7 Emergency service,If you have any construction and renovation work need, simply contact us. Our promise as a contractor is to build community value into every project while delivering professional expertise, exceptional customers service and quality construction.Our 24/7 Emergency service,If you have any construction and renovation work need, simply contact us. Our promise as a contractor is to build community value into every project while delivering professional expertise, exceptional customers service and quality construction.Our 24/7 Emergency service,If you have any construction and renovation work need, simply contact us. Our promise as a contractor is to build community value into every project while delivering professional expertise, exceptional customers service and quality construction.Our 24/7 Emergency service,If you have any construction and renovation work need, simply contact us. Our promise as a contractor is to build community value into every project while delivering professional expertise, exceptional customers service and quality construction.Our 24/7 Emergency service,If you have any construction and renovation work need, simply contact us. ', '', 'Towards Great Creativity', 'Leo Internation School purpose is to provide a Christian perspective in the context of education, whilst encouraging students towards a genuine, personal relationship with Jesus Christ. The school seeks to train individuals to become active, vital parts of their communities, and to encourage an appreciation of their place in and obligation to the world around them. We at Hillcrest are committed to developing complete and mature persons, accountable to God and responsible for their own actions, in keeping with our tradition of high academic and spiritual standards. ', 'welcome.jpg'),
(2, 'about', 'About Beauty Spot', 'little information about the our company', 'Our Laboratories with our highly trained professional staff and modern equipment have the capability and authority to analyze quite a good number of consumer and health-related products such as: Water, Food, Drugs, Cosmetics, Medical devices, Chemicals, Chemically and biologically-based consumer products etc and issue Certificate regarding their composition, quality, safety and efficacy. Our Technical Staff list for Analytical .', '', '', '', ''),
(3, 'service', 'My Services', 'This are what we do', 'our services content', '', '', '', ''),
(4, 'contact', 'Contact Us', 'contact us because we care', 'contact brief', '', '', '', ''),
(5, 'gallery', 'My Works', 'Here is what am proud of, My Works', 'portfolio content', '', '', '', ''),
(6, 'project', 'Project', 'Project  brief', 'project  content', '', '', '', ''),
(7, 'appointment', 'Book An Appointment', 'Book an appointment', '', '', '', '', ''),
(8, 'career', 'Career Articles / Advice', 'Build Your Career', '', '', '', '', ''),
(9, 'job', 'Jobs', 'Your Dream Job', '', '', '', '', ''),
(11, 'profile', 'Dashboard', '', '', '', '', '', ''),
(12, 'edit', 'Edit Profile', '', '', '', '', '', ''),
(13, 'inbox', 'Inbox', '', '', '', '', '', ''),
(14, 'article', 'Career Articles', '', '', '', '', '', ''),
(15, 'my_career', 'My Career', '', '', '', '', '', ''),
(16, 'dashboard', 'My Dashboard', '', '', '', '', '', ''),
(17, 'password', 'Change Password', '', '', '', '', '', ''),
(18, 'logout', 'Logout', '', '', '', '', '', ''),
(19, 'register', 'Registration Page', '', '', '', '', '', ''),
(20, 'con_dashboard', 'Counsellor', '', '', '', '', '', ''),
(21, 'conversation', 'Conversation', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `img` varchar(300) NOT NULL,
  `staff_name` varchar(300) NOT NULL,
  `position` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `img`, `staff_name`, `position`, `date`) VALUES
(1, 'team1.jpg', 'ratan', 'CEO', '2022-05-30 18:05:23'),
(2, 'team2.jpg', 'jeevana', 'Director', '2022-05-30 18:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` longtext DEFAULT NULL,
  `identity` varchar(50) DEFAULT NULL,
  `last_name` longtext DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `about_me` longtext DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `identity`, `last_name`, `username`, `password`, `email`, `phone`, `gender`, `state`, `address`, `about_me`, `date_modified`) VALUES
(1, 'Ayodeji', 'S', 'Adesoji', 'codedgift', '123456', 'info@careerguidance.com', '0818838069', 'Male', 'Lagos', '234 Uptown new City Tower, Victoria Island, Lagos.', 'A confident, enthusiastic and hard working physics teacher who is able to teach students across the secondary age range, whilst at the same time encourage them to develop their skills, knowledge and confidence. Possessing extensive knowledge of contemporary teaching methods and having immense subject knowledge, enthusiasm and charisma, as well as a genuine interest in educating others. ', '2022-05-26 08:47:47'),
(2, 'Kemi', 'S', 'Best', 'kemi', 'best', 'kemibest@gmail.com', '0908765432', 'Female', 'Lagos', '234 Uptown new City Tower, Lagos Mainland.', 'A confident, enthusiastic and hard working physics teacher who is able to teach students across the secondary age range, whilst at the same time encourage them to develop their skills, knowledge and confidence. Possessing extensive knowledge of contemporary teaching methods and having immense subject knowledge, enthusiasm and charisma, as well as a genuine interest in educating others. ', '2016-11-17 14:54:10'),
(3, 'ratan', 'S', 'punati', 'ratan', '123456', 'rt@gmail.com', '6303866254', 'Male', 'ap', 'ongole', 'i just like been me', '2022-05-26 09:54:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_counsellor`
--
ALTER TABLE `add_counsellor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_category`
--
ALTER TABLE `career_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counsellor_inbox`
--
ALTER TABLE `counsellor_inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_counsellor`
--
ALTER TABLE `add_counsellor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `career_category`
--
ALTER TABLE `career_category`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counsellor_inbox`
--
ALTER TABLE `counsellor_inbox`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
