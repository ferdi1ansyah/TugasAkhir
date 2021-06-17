-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 09:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2104_reqta-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id_guru` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `nama_lengkap` varchar(75) NOT NULL,
  `asal_sekolah` varchar(75) NOT NULL,
  `pendidikan` varchar(75) DEFAULT NULL,
  `email` varchar(75) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `foto` varchar(60) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `id_profile`, `nama_lengkap`, `asal_sekolah`, `pendidikan`, `email`, `telp`, `foto`, `create_at`) VALUES
(1, 2, 'Pak Saringat', 'SD', 'S1 Pendidika', 'email@gmasd.com', '2', '', '2021-04-27 21:39:28'),
(2, 4, 'Anisa Istiqomah', 'Universitas ', 'Agama Islam', 'anisa@gmail.com', '081', '', '2021-04-29 11:58:03'),
(3, 5, 'Afrizal', 'Universitas Muhamadiyah Malang', 'S1 Informatika', 'afriz@gmail.com', '081', '', '2021-05-06 11:27:40'),
(4, 10, 'Dwi Nur Cahyo', 'ITN', 'S1 Informatika', 'dwinuchy@gmail.com', '081', '', '2021-05-08 10:40:44'),
(5, 11, 'Dwi Nur Cahyo', 'ad', 'sasd', 'asd@asd.asd', 'asd', '', '2021-05-20 12:12:28'),
(6, 12, 'Nama Guru #1', '', NULL, 'dwinuray.dev@gmail.com', '', NULL, '2021-06-16 05:18:19'),
(7, 13, 'Dwi Nur Cahyo', '', NULL, 'dwinuray.dev@gmail.com', '', NULL, '2021-06-16 05:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `data_kuis_jawaban`
--

CREATE TABLE `data_kuis_jawaban` (
  `id_kuis_jawaban` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `id_kuis_soal` int(11) NOT NULL,
  `pilihan_jawaban` enum('a','b','c','d') NOT NULL,
  `dijawab_pada` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_kuis_soal`
--

CREATE TABLE `data_kuis_soal` (
  `id_kuis_soal` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `isi_soal` text NOT NULL,
  `soal_a` varchar(250) NOT NULL,
  `soal_b` varchar(250) NOT NULL,
  `soal_c` varchar(250) NOT NULL,
  `soal_d` varchar(250) NOT NULL,
  `soal_jawaban` enum('a','b','c','d') NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kuis_soal`
--

INSERT INTO `data_kuis_soal` (`id_kuis_soal`, `id_materi`, `id_profile`, `isi_soal`, `soal_a`, `soal_b`, `soal_c`, `soal_d`, `soal_jawaban`, `created_at`) VALUES
(4, 1, 2, '<p>&nbsp;Diketahui f(x) = 2&radic;(x2+4) dan g(x) = &radic;(x2+4) + 3x, maka (f-g) (x) adalah ....</p>\r\n\r\n<p>&nbsp;</p>\r\n', '√(x2+4) - 3x√(x2+4) - 3x', ' -√(x2+4) + 3x', 'jawaban C', 'jawaban D', 'b', '2021-06-15 23:50:54'),
(6, 2, 13, '<p><strong>Jawablah soal dibawah ini dengan jujur ya.&nbsp;</strong>Diketahui bilangan x memiliki nilai 1, dan variabel dengan bilangan xy memiliki nilai 2. Berapakah nilai dari x + xy ?&nbsp;</p>\r\n', '3', 'tidak bisa dijawab ', 'x^2y', 'tidak ada jawaban', 'a', '2021-06-16 06:11:31'),
(7, 1, 2, '<p>Soal 2</p>\r\n', 'a', 'b', 'c', 'd', 'c', '2021-06-16 11:30:29'),
(8, 1, 2, '<p>soal 33 final</p>\r\n', 'a', 'b', 'c', 'd', 'a', '2021-06-16 11:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `data_materi`
--

CREATE TABLE `data_materi` (
  `id_materi` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `media` varchar(75) DEFAULT NULL,
  `materi_status` enum('draft','publish') NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_materi`
--

INSERT INTO `data_materi` (`id_materi`, `id_profile`, `judul`, `deskripsi`, `media`, `materi_status`, `tanggal`) VALUES
(1, 2, 'Artificial Intelligence', 'CodeIgniter 4 is the current version of the framework, intended for use with PHP 7.3+ (including 8.0). Development is ongoing, and the current version is v4.', '1623708986_d20bb84d9b51502f3c5d.png', 'publish', '2021-06-15 05:16:26'),
(2, 13, 'Calculus and Algebra', 'Lorepisum dolar sit amlet', '1623798391_733d704fc97d99f47087.jpeg', 'publish', '2021-06-16 06:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `data_materi_detail`
--

CREATE TABLE `data_materi_detail` (
  `id_materi_detail` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `materi` text NOT NULL,
  `tipe_materi` enum('text_content','visual_content') NOT NULL,
  `link_video` text NOT NULL,
  `status_materi` enum('aktif','nonaktif') NOT NULL,
  `sumber_author` varchar(100) DEFAULT NULL,
  `sumber_link` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_materi_detail`
--

INSERT INTO `data_materi_detail` (`id_materi_detail`, `id_materi`, `id_profile`, `judul`, `materi`, `tipe_materi`, `link_video`, `status_materi`, `sumber_author`, `sumber_link`, `created_at`) VALUES
(3, 1, 2, 'Tools Aksesbilitas Digital  edit', '<p><strong>Web accessibility</strong>&nbsp;is the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Inclusion_(disability_rights)\">inclusive practice</a>&nbsp;of ensuring there are no barriers that prevent interaction with, or access to,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Website\">websites</a>&nbsp;on the&nbsp;<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web\">World Wide Web</a>&nbsp;by people with physical&nbsp;<a href=\"https://en.wikipedia.org/wiki/Disabilities\">disabilities</a>, situational disabilities, and socio-economic restrictions on bandwidth and speed. When sites are correctly designed, developed and edited, generally all users have equal&nbsp;<a href=\"https://en.wikipedia.org/wiki/Access_to_information\">access to information</a>&nbsp;and functionality.</p>\r\n\r\n<p>For example, when a site is coded with semantically meaningful&nbsp;<a href=\"https://en.wikipedia.org/wiki/HTML\">HTML</a>, with textual equivalents provided for images and with links named meaningfully, this helps blind users using text-to-speech software and/or text-to-Braille hardware. When text and images are large and/or enlargeable, it is easier for users with poor sight to read and understand the content. When links are underlined (or otherwise differentiated) as well as colored, this ensures that&nbsp;<a href=\"https://en.wikipedia.org/wiki/Color_blind\">color blind</a>&nbsp;users will be able to notice them. When&nbsp;<a href=\"https://en.wikipedia.org/wiki/Clickable\">clickable</a>&nbsp;links and areas are large, this helps users who cannot control a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_mouse\">mouse</a>&nbsp;with precision. When pages are not coded in a way that hinders navigation by means of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_keyboard\">keyboard</a>&nbsp;alone, or a single&nbsp;<a href=\"https://en.wikipedia.org/wiki/Switch_access\">switch access</a>&nbsp;device alone, this helps users who cannot use a mouse or even a standard keyboard. When videos are&nbsp;<a href=\"https://en.wikipedia.org/wiki/Closed_caption\">closed captioned</a>&nbsp;or a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Sign_language\">sign language</a>&nbsp;version is available, deaf and hard-of-hearing users can understand the video. When flashing effects are avoided or made optional, users prone to&nbsp;<a href=\"https://en.wikipedia.org/wiki/Seizure\">seizures</a>&nbsp;caused by these effects are not put at risk. And when content is written in plain language and illustrated with instructional diagrams and animations, users with&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dyslexia\">dyslexia</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Learning_disabilities\">learning difficulties</a>&nbsp;are better able to understand the content. When sites are correctly built and maintained, all of these users can be accommodated without decreasing the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Usability\">usability</a>&nbsp;of the site for non-disabled users.</p>\r\n\r\n<p>The needs that Web accessibility aims to address include:</p>\r\n\r\n<ul>\r\n	<li><strong>Visual:</strong>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Visual_impairment\">Visual impairments</a>&nbsp;including&nbsp;<a href=\"https://en.wikipedia.org/wiki/Blindness\">blindness</a>, various common types of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Low_vision\">low vision</a>&nbsp;and poor eyesight, various types of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Color_blindness\">color blindness</a>;</li>\r\n	<li><strong>Motor/mobility:</strong>&nbsp;e.g. difficulty or inability to use the hands, including tremors, muscle slowness, loss of fine muscle control, etc., due to conditions such as&nbsp;<a href=\"https://en.wikipedia.org/wiki/Parkinson%27s_disease\">Parkinson&#39;s disease</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Muscular_dystrophy\">muscular dystrophy</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Cerebral_palsy\">cerebral palsy</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Stroke\">stroke</a>;</li>\r\n	<li><strong>Auditory:</strong>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Deafness\">Deafness</a>&nbsp;or&nbsp;<a href=\"https://en.wikipedia.org/wiki/Hearing_impairment\">hearing impairments</a>, including individuals who are hard of hearing;</li>\r\n	<li><strong>Seizures:</strong>&nbsp;Photo epileptic&nbsp;<a href=\"https://en.wikipedia.org/wiki/Seizure\">seizures</a>&nbsp;caused by visual strobe or flashing effects.</li>\r\n	<li><strong>Cognitive and intellectual:</strong>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Developmental_disabilities\">Developmental disabilities</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Learning_disability\">learning difficulties</a>&nbsp;(<a href=\"https://en.wikipedia.org/wiki/Dyslexia\">dyslexia</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dyscalculia\">dyscalculia</a>, etc.), and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Cognitive_disabilities\">cognitive disabilities</a>&nbsp;(PTSD, Alzheimer&#39;s) of various origins, affecting memory, attention, developmental &quot;maturity&quot;, problem-solving and logic skills, etc.</li>\r\n</ul>\r\n', 'visual_content', 'https://drive.google.com/file/d/1pcWwJwypmVe1G0mM_n8R27KvqzoSPNru/view?usp=sharing', 'aktif', 'Rahma Ut', '', '2021-06-15 12:12:48'),
(5, 2, 13, 'Artificial Intelligence', '<p><strong>Artificial intelligence</strong>&nbsp;(<strong>AI</strong>) is&nbsp;<a href=\"https://en.wikipedia.org/wiki/Intelligence\">intelligence</a>&nbsp;demonstrated by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Machine\">machines</a>, unlike the&nbsp;<strong>natural intelligence</strong>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Human_intelligence\">displayed by humans</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Animal_cognition\">animals</a>, which involves consciousness and emotionality. The distinction between the former and the latter categories is often revealed by the acronym chosen. &#39;Strong&#39; AI is usually labelled as&nbsp;<a href=\"https://en.wikipedia.org/wiki/Artificial_general_intelligence\">artificial general intelligence</a>&nbsp;(AGI) while attempts to emulate &#39;natural&#39; intelligence have been called artificial biological intelligence (ABI). Leading AI textbooks define the field as the study of &quot;<a href=\"https://en.wikipedia.org/wiki/Intelligent_agent\">intelligent agents</a>&quot;: any device that perceives its environment and takes actions that maximize its chance of achieving its goals.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Definition_of_AI-3\">[3]</a>&nbsp;Colloquially, the term &quot;artificial intelligence&quot; is often used to describe machines that mimic &quot;cognitive&quot; functions that humans associate with the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Human_mind\">human mind</a>, such as &quot;learning&quot; and &quot;problem solving&quot;.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-FOOTNOTERussellNorvig20092-4\">[4]</a></p>\r\n\r\n<p>As machines become increasingly capable, tasks considered to require &quot;intelligence&quot; are often removed from the definition of AI, a phenomenon known as the&nbsp;<a href=\"https://en.wikipedia.org/wiki/AI_effect\">AI effect</a>.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-5\">[5]</a>&nbsp;A quip in Tesler&#39;s Theorem says &quot;AI is whatever hasn&#39;t been done yet.&quot;<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-6\">[6]</a>&nbsp;For instance,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Optical_character_recognition\">optical character recognition</a>&nbsp;is frequently excluded from things considered to be AI,<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-7\">[7]</a>&nbsp;having become a routine technology.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-8\">[8]</a>&nbsp;Modern machine capabilities generally classified as AI include successfully&nbsp;<a href=\"https://en.wikipedia.org/wiki/Natural_language_understanding\">understanding human speech</a>,<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-FOOTNOTERussellNorvig2009-9\">[9]</a>&nbsp;competing at the highest level in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Strategic_game\">strategic game</a>&nbsp;systems (such as&nbsp;<a href=\"https://en.wikipedia.org/wiki/Chess\">chess</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Go_(game)\">Go</a>),<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-bbc-alphago-10\">[10]</a>&nbsp;and also&nbsp;<a href=\"https://en.wikipedia.org/wiki/Imperfect_information\">imperfect-information</a>&nbsp;games like&nbsp;<a href=\"https://en.wikipedia.org/wiki/Poker\">poker</a>,<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Cepheus_poker_bot-11\">[11]</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Self-driving_car\">self-driving cars</a>, intelligent routing in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Content_delivery_network\">content delivery networks</a>, and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Military_simulations\">military simulations</a>.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-12\">[12]</a></p>\r\n\r\n<p>Artificial intelligence was founded as an academic discipline in 1955, and in the years since has experienced several waves of optimism,<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Optimism_of_early_AI-13\">[13]</a><a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-AI_in_the_80s-14\">[14]</a>&nbsp;followed by disappointment and the loss of funding (known as an &quot;<a href=\"https://en.wikipedia.org/wiki/AI_winter\">AI winter</a>&quot;),<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-First_AI_winter-15\">[15]</a><a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Second_AI_winter-16\">[16]</a>&nbsp;followed by new approaches, success and renewed funding.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-AI_in_the_80s-14\">[14]</a><a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-AI_in_2000s-17\">[17]</a>&nbsp;After&nbsp;<a href=\"https://en.wikipedia.org/wiki/AlphaGo\">AlphaGo</a>&nbsp;defeated a professional Go player in 2015, artificial intelligence once again attracted widespread global attention.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-18\">[18]</a>&nbsp;For most of its history, AI research has been divided into sub-fields that often fail to communicate with each other.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Fragmentation_of_AI-19\">[19]</a>&nbsp;These sub-fields are based on technical considerations, such as particular goals (e.g. &quot;<a href=\"https://en.wikipedia.org/wiki/Robotics\">robotics</a>&quot; or &quot;<a href=\"https://en.wikipedia.org/wiki/Machine_learning\">machine learning</a>&quot;),<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Problems_of_AI-20\">[20]</a>&nbsp;the use of particular tools (&quot;<a href=\"https://en.wikipedia.org/wiki/Logic\">logic</a>&quot; or&nbsp;<a href=\"https://en.wikipedia.org/wiki/Artificial_neural_network\">artificial neural networks</a>), or deep philosophical differences.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Biological_intelligence_vs._intelligence_in_general-23\">[23]</a><a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Neats_vs._scruffies-24\">[24]</a><a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Symbolic_vs._sub-symbolic-25\">[25]</a>&nbsp;Sub-fields have also been based on social factors (particular institutions or the work of particular researchers).<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Fragmentation_of_AI-19\">[19]</a></p>\r\n\r\n<p>The traditional problems (or goals) of AI research include&nbsp;<a href=\"https://en.wikipedia.org/wiki/Automated_reasoning\">reasoning</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Knowledge_representation\">knowledge representation</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Automated_planning_and_scheduling\">planning</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Machine_learning\">learning</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Natural_language_processing\">natural language processing</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Machine_perception\">perception</a>&nbsp;and the ability to move and manipulate objects.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Problems_of_AI-20\">[20]</a>&nbsp;AGI is among the field&#39;s long-term goals.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-General_intelligence-26\">[26]</a>&nbsp;Approaches include&nbsp;<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#Statistical\">statistical methods</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#Sub-symbolic\">computational intelligence</a>, and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#Symbolic\">traditional symbolic AI</a>. Many tools are used in AI, including versions of search and mathematical optimization, artificial neural networks, and methods based on statistics, probability and economics. The AI field draws upon&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_science\">computer science</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Information_engineering_(field)\">information engineering</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Mathematics\">mathematics</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Psychology\">psychology</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Linguistics\">linguistics</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Philosophy\">philosophy</a>, and many other fields.</p>\r\n\r\n<p>The field was founded on the assumption that human intelligence &quot;can be so precisely described that a machine can be made to simulate it&quot;.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-27\">[27]</a>&nbsp;This raises philosophical arguments about the mind and the ethics of creating artificial beings endowed with human-like intelligence. These issues have been explored by&nbsp;<a href=\"https://en.wikipedia.org/wiki/History_of_AI#AI_in_myth,_fiction_and_speculation\">myth</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence_in_fiction\">fiction</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Philosophy_of_AI\">philosophy</a>&nbsp;since&nbsp;<a href=\"https://en.wikipedia.org/wiki/Ancient_history\">antiquity</a>.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-McCorduck\'s_thesis-32\">[32]</a>&nbsp;Some people also consider AI to be&nbsp;<a href=\"https://en.wikipedia.org/wiki/Existential_risk\">a danger to humanity</a>&nbsp;if it progresses unabated.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-33\">[33]</a><a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-34\">[34]</a>&nbsp;Others believe that AI, unlike previous technological revolutions, will create a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Technological_unemployment#21st_century\">risk of mass unemployment</a>.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-guardian_jobs_debate-35\">[35]</a></p>\r\n\r\n<p>In the twenty-first century, AI techniques have experienced a resurgence following concurrent advances in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_performance\">computer power</a>, large amounts of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Big_data\">data</a>, and theoretical understanding; and AI techniques have become an essential part of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Technology_industry\">technology industry</a>, helping to solve many challenging problems in computer science,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Software_engineering\">software engineering</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Operations_research\">operations research</a>.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-AI_widely_used-36\">[36]</a><a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-AI_in_2000s-17\">[17]</a></p>\r\n', 'visual_content', 'https://drive.google.com/file/d/1pcWwJwypmVe1G0mM_n8R27KvqzoSPNru/view?usp=sharing', 'aktif', 'Rosidatul Amala', 'https://dev.to/jonathanlamim/codeigniter-4-has-been-released-what-s-new-58p3', '2021-06-15 23:07:48'),
(6, 2, 13, 'Hukum Newton 1 2 dan 3', '<p><strong>Artificial intelligence</strong>&nbsp;(<strong>AI</strong>) is&nbsp;<a href=\"https://en.wikipedia.org/wiki/Intelligence\">intelligence</a>&nbsp;demonstrated by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Machine\">machines</a>, unlike the&nbsp;<strong>natural intelligence</strong>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Human_intelligence\">displayed by humans</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Animal_cognition\">animals</a>, which involves consciousness and emotionality. The distinction between the former and the latter categories is often revealed by the acronym chosen. &#39;Strong&#39; AI is usually labelled as&nbsp;<a href=\"https://en.wikipedia.org/wiki/Artificial_general_intelligence\">artificial general intelligence</a>&nbsp;(AGI) while attempts to emulate &#39;natural&#39; intelligence have been called artificial biological intelligence (ABI). Leading AI textbooks define the field as the study of &quot;<a href=\"https://en.wikipedia.org/wiki/Intelligent_agent\">intelligent agents</a>&quot;: any device that perceives its environment and takes actions that maximize its chance of achieving its goals.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Definition_of_AI-3\">[3]</a>&nbsp;Colloquially, the term &quot;artificial intelligence&quot; is often used to describe machines that mimic &quot;cognitive&quot; functions that humans associate with the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Human_mind\">human mind</a>, such as &quot;learning&quot; and &quot;problem solving&quot;.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-FOOTNOTERussellNorvig20092-4\">[4]</a></p>\r\n\r\n<p>As machines become increasingly capable, tasks considered to require &quot;intelligence&quot; are often removed from the definition of AI, a phenomenon known as the&nbsp;<a href=\"https://en.wikipedia.org/wiki/AI_effect\">AI effect</a>.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-5\">[5]</a>&nbsp;A quip in Tesler&#39;s Theorem says &quot;AI is whatever hasn&#39;t been done yet.&quot;<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-6\">[6]</a>&nbsp;For instance,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Optical_character_recognition\">optical character recognition</a>&nbsp;is frequently excluded from things considered to be AI,<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-7\">[7]</a>&nbsp;having become a routine technology.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-8\">[8]</a>&nbsp;Modern machine capabilities generally classified as AI include successfully&nbsp;<a href=\"https://en.wikipedia.org/wiki/Natural_language_understanding\">understanding human speech</a>,<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-FOOTNOTERussellNorvig2009-9\">[9]</a>&nbsp;competing at the highest level in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Strategic_game\">strategic game</a>&nbsp;systems (such as&nbsp;<a href=\"https://en.wikipedia.org/wiki/Chess\">chess</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Go_(game)\">Go</a>),<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-bbc-alphago-10\">[10]</a>&nbsp;and also&nbsp;<a href=\"https://en.wikipedia.org/wiki/Imperfect_information\">imperfect-information</a>&nbsp;games like&nbsp;<a href=\"https://en.wikipedia.org/wiki/Poker\">poker</a>,<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Cepheus_poker_bot-11\">[11]</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Self-driving_car\">self-driving cars</a>, intelligent routing in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Content_delivery_network\">content delivery networks</a>, and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Military_simulations\">military simulations</a>.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-12\">[12]</a></p>\r\n\r\n<p>Artificial intelligence was founded as an academic discipline in 1955, and in the years since has experienced several waves of optimism,<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Optimism_of_early_AI-13\">[13]</a><a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-AI_in_the_80s-14\">[14]</a>&nbsp;followed by disappointment and the loss of funding (known as an &quot;<a href=\"https://en.wikipedia.org/wiki/AI_winter\">AI winter</a>&quot;),<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-First_AI_winter-15\">[15]</a><a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Second_AI_winter-16\">[16]</a>&nbsp;followed by new approaches, success and renewed funding.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-AI_in_the_80s-14\">[14]</a><a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-AI_in_2000s-17\">[17]</a>&nbsp;After&nbsp;<a href=\"https://en.wikipedia.org/wiki/AlphaGo\">AlphaGo</a>&nbsp;defeated a professional Go player in 2015, artificial intelligence once again attracted widespread global attention.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-18\">[18]</a>&nbsp;For most of its history, AI research has been divided into sub-fields that often fail to communicate with each other.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Fragmentation_of_AI-19\">[19]</a>&nbsp;These sub-fields are based on technical considerations, such as particular goals (e.g. &quot;<a href=\"https://en.wikipedia.org/wiki/Robotics\">robotics</a>&quot; or &quot;<a href=\"https://en.wikipedia.org/wiki/Machine_learning\">machine learning</a>&quot;),<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Problems_of_AI-20\">[20]</a>&nbsp;the use of particular tools (&quot;<a href=\"https://en.wikipedia.org/wiki/Logic\">logic</a>&quot; or&nbsp;<a href=\"https://en.wikipedia.org/wiki/Artificial_neural_network\">artificial neural networks</a>), or deep philosophical differences.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Biological_intelligence_vs._intelligence_in_general-23\">[23]</a><a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Neats_vs._scruffies-24\">[24]</a><a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Symbolic_vs._sub-symbolic-25\">[25]</a>&nbsp;Sub-fields have also been based on social factors (particular institutions or the work of particular researchers).<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Fragmentation_of_AI-19\">[19]</a></p>\r\n\r\n<p>The traditional problems (or goals) of AI research include&nbsp;<a href=\"https://en.wikipedia.org/wiki/Automated_reasoning\">reasoning</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Knowledge_representation\">knowledge representation</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Automated_planning_and_scheduling\">planning</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Machine_learning\">learning</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Natural_language_processing\">natural language processing</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Machine_perception\">perception</a>&nbsp;and the ability to move and manipulate objects.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-Problems_of_AI-20\">[20]</a>&nbsp;AGI is among the field&#39;s long-term goals.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-General_intelligence-26\">[26]</a>&nbsp;Approaches include&nbsp;<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#Statistical\">statistical methods</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#Sub-symbolic\">computational intelligence</a>, and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#Symbolic\">traditional symbolic AI</a>. Many tools are used in AI, including versions of search and mathematical optimization, artificial neural networks, and methods based on statistics, probability and economics. The AI field draws upon&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_science\">computer science</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Information_engineering_(field)\">information engineering</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Mathematics\">mathematics</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Psychology\">psychology</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Linguistics\">linguistics</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Philosophy\">philosophy</a>, and many other fields.</p>\r\n\r\n<p>The field was founded on the assumption that human intelligence &quot;can be so precisely described that a machine can be made to simulate it&quot;.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-27\">[27]</a>&nbsp;This raises philosophical arguments about the mind and the ethics of creating artificial beings endowed with human-like intelligence. These issues have been explored by&nbsp;<a href=\"https://en.wikipedia.org/wiki/History_of_AI#AI_in_myth,_fiction_and_speculation\">myth</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence_in_fiction\">fiction</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Philosophy_of_AI\">philosophy</a>&nbsp;since&nbsp;<a href=\"https://en.wikipedia.org/wiki/Ancient_history\">antiquity</a>.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-McCorduck\'s_thesis-32\">[32]</a>&nbsp;Some people also consider AI to be&nbsp;<a href=\"https://en.wikipedia.org/wiki/Existential_risk\">a danger to humanity</a>&nbsp;if it progresses unabated.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-33\">[33]</a><a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-34\">[34]</a>&nbsp;Others believe that AI, unlike previous technological revolutions, will create a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Technological_unemployment#21st_century\">risk of mass unemployment</a>.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-guardian_jobs_debate-35\">[35]</a></p>\r\n\r\n<p>In the twenty-first century, AI techniques have experienced a resurgence following concurrent advances in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Computer_performance\">computer power</a>, large amounts of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Big_data\">data</a>, and theoretical understanding; and AI techniques have become an essential part of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Technology_industry\">technology industry</a>, helping to solve many challenging problems in computer science,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Software_engineering\">software engineering</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Operations_research\">operations research</a>.<a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-AI_widely_used-36\">[36]</a><a href=\"https://en.wikipedia.org/wiki/Artificial_intelligence#cite_note-AI_in_2000s-17\">[17]</a></p>\r\n', 'text_content', '', 'aktif', 'Dwi ', 'https://dev.to/jonathanlamim/codeigniter-4-has-been-released-what-s-new-58p3', '2021-06-15 23:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `data_rekap_jawaban`
--

CREATE TABLE `data_rekap_jawaban` (
  `id_rekapjawaban` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kuis_soal` int(11) NOT NULL,
  `id_kuis_jawaban` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `media` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_materi`
--

CREATE TABLE `pendaftaran_materi` (
  `id_pendaftaranmateri` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `index_materi` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran_materi`
--

INSERT INTO `pendaftaran_materi` (`id_pendaftaranmateri`, `id_materi`, `id_profile`, `index_materi`, `created_at`) VALUES
(5, 2, 16, 5, '2021-06-16 00:38:13'),
(7, 1, 16, 3, '2021-06-16 04:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_detail_kuis`
--

CREATE TABLE `rekap_detail_kuis` (
  `id_detailkuis` int(11) NOT NULL,
  `id_infokuis` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `id_kuis_soal` int(11) NOT NULL,
  `jawaban` enum('a','b','c','d') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekap_detail_kuis`
--

INSERT INTO `rekap_detail_kuis` (`id_detailkuis`, `id_infokuis`, `id_profile`, `id_kuis_soal`, `jawaban`, `created_at`) VALUES
(1, 2, 16, 8, 'a', '2021-06-16 05:09:01'),
(2, 2, 16, 4, 'a', '2021-06-16 05:09:01'),
(3, 2, 16, 7, 'c', '2021-06-16 05:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_info_kuis`
--

CREATE TABLE `rekap_info_kuis` (
  `id_infokuis` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `started_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `ended_at` datetime DEFAULT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekap_info_kuis`
--

INSERT INTO `rekap_info_kuis` (`id_infokuis`, `id_materi`, `id_profile`, `started_at`, `ended_at`, `skor`) VALUES
(2, 1, 16, '2021-06-15 17:08:58', '2021-06-16 00:09:01', 66);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_profile` (`id_profile`);

--
-- Indexes for table `data_kuis_jawaban`
--
ALTER TABLE `data_kuis_jawaban`
  ADD PRIMARY KEY (`id_kuis_jawaban`),
  ADD KEY `id_kuis_soal` (`id_kuis_soal`);

--
-- Indexes for table `data_kuis_soal`
--
ALTER TABLE `data_kuis_soal`
  ADD PRIMARY KEY (`id_kuis_soal`),
  ADD KEY `id_profile` (`id_profile`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indexes for table `data_materi`
--
ALTER TABLE `data_materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_guru_mapel` (`id_profile`);

--
-- Indexes for table `data_materi_detail`
--
ALTER TABLE `data_materi_detail`
  ADD PRIMARY KEY (`id_materi_detail`),
  ADD KEY `id_materi` (`id_materi`),
  ADD KEY `id_profile` (`id_profile`);

--
-- Indexes for table `data_rekap_jawaban`
--
ALTER TABLE `data_rekap_jawaban`
  ADD PRIMARY KEY (`id_rekapjawaban`),
  ADD KEY `id_kuis_soal` (`id_kuis_soal`),
  ADD KEY `id_kuis_jawaban` (`id_kuis_jawaban`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `pendaftaran_materi`
--
ALTER TABLE `pendaftaran_materi`
  ADD PRIMARY KEY (`id_pendaftaranmateri`);

--
-- Indexes for table `rekap_detail_kuis`
--
ALTER TABLE `rekap_detail_kuis`
  ADD PRIMARY KEY (`id_detailkuis`);

--
-- Indexes for table `rekap_info_kuis`
--
ALTER TABLE `rekap_info_kuis`
  ADD PRIMARY KEY (`id_infokuis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_kuis_jawaban`
--
ALTER TABLE `data_kuis_jawaban`
  MODIFY `id_kuis_jawaban` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_kuis_soal`
--
ALTER TABLE `data_kuis_soal`
  MODIFY `id_kuis_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_materi`
--
ALTER TABLE `data_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_materi_detail`
--
ALTER TABLE `data_materi_detail`
  MODIFY `id_materi_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_rekap_jawaban`
--
ALTER TABLE `data_rekap_jawaban`
  MODIFY `id_rekapjawaban` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran_materi`
--
ALTER TABLE `pendaftaran_materi`
  MODIFY `id_pendaftaranmateri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rekap_detail_kuis`
--
ALTER TABLE `rekap_detail_kuis`
  MODIFY `id_detailkuis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rekap_info_kuis`
--
ALTER TABLE `rekap_info_kuis`
  MODIFY `id_infokuis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
