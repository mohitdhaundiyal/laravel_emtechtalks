-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 09:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_username`, `admin_password`) VALUES
(1, 'mohit_dhaundiyal@emtechtalks.com', '35ea0a9e3be9daaf25d46c6598826df4');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `contact_name`, `contact_email`, `contact_message`) VALUES
(1, 'Mohit Dhaundiyal', 'mohit.dhaundiyal22@gmail.com', 'hey mann!!'),
(2, 'Mohit Dhaundiyal', 'mohit.dhaundiyal22@gmail.com', 'hehehheeh'),
(3, 'Mohit Dhaundiyal', 'mohit.dhaundiyal22@gmail.com', 'lalalalla'),
(4, 'kabbi', 'hhh@gmail.com', 'hehehehncknicn'),
(5, 'jim', 'rim@gmail.comm', 'lol'),
(6, '60', '60@gmail.com', 'heheheheh');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(2) NOT NULL,
  `post_title` varchar(500) NOT NULL,
  `post_body` varchar(3000) NOT NULL,
  `cover_image` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_body`, `cover_image`, `created_at`, `updated_at`) VALUES
(1, 'The First Post', '<p>This is my first post!</p>', 'cover_image_1589647371.jpg', '2020-05-16 11:12:51', '2020-05-16 11:12:51'),
(2, 'The second Post!!', '<p>heyy mn!!!</p>', 'cover_image_1589654225.jpg', '2020-05-16 13:07:05', '2020-05-16 13:07:05'),
(3, 'the third one!!', '<p>hehehhehe</p>', 'cover_image_1589654836.jpg', '2020-05-16 13:17:16', '2020-05-16 13:17:16'),
(4, 'The Forth Post', '<h2><strong>this is the forth post!!</strong></h2>', 'cover_image_1589707204.jpg', '2020-05-17 03:50:04', '2020-05-17 03:50:04'),
(5, 'THE 5TH POST', '<p>THIS IS IT!!</p>', 'cover_image_1589707473.png', '2020-05-17 03:54:33', '2020-05-17 03:54:33'),
(6, '6!!', '<p>hehhehh</p>', 'cover_image_1589710007.png', '2020-05-17 04:36:47', '2020-05-17 04:36:47'),
(7, '𝗔𝗽𝗽𝗹𝗲 𝗳𝗶𝗻𝗲𝗱 𝗿𝗲𝗰𝗼𝗿𝗱 $𝟭.𝟮𝟯 𝗯𝗶𝗹𝗹𝗶𝗼𝗻 𝗶𝗻 𝗙𝗿𝗮𝗻𝗰𝗲 𝗳𝗼𝗿 𝗽𝗿𝗶𝗰𝗲-𝗳𝗶𝘅𝗶𝗻𝗴 𝘀𝗰𝗵𝗲𝗺𝗲', '<p>𝗔𝗽𝗽𝗹𝗲 𝗳𝗶𝗻𝗲𝗱 𝗿𝗲𝗰𝗼𝗿𝗱 $𝟭.𝟮𝟯 𝗯𝗶𝗹𝗹𝗶𝗼𝗻 𝗶𝗻 𝗙𝗿𝗮𝗻𝗰𝗲 𝗳𝗼𝗿 𝗽𝗿𝗶𝗰𝗲-𝗳𝗶𝘅𝗶𝗻𝗴 𝘀𝗰𝗵𝗲𝗺𝗲</p><p>France’s antitrust regulator has fined Apple €1.1 billion (around $1.2 billion, Rs. 9,000 crore) for anti-competitive trade practices in its distribution network.<br><br><a href=\"https://www.instagram.com/explore/tags/emtechtalks/\">#emtechtalks</a> <a href=\"https://www.instagram.com/explore/tags/tech/\">#tech</a> <a href=\"https://www.instagram.com/explore/tags/technology/\">#technology</a> <a href=\"https://www.instagram.com/explore/tags/technews/\">#technews</a> <a href=\"https://www.instagram.com/explore/tags/apple/\">#apple</a> <a href=\"https://www.instagram.com/explore/tags/france/\">#france</a> <a href=\"https://www.instagram.com/explore/tags/pricefixing/\">#pricefixing</a> <a href=\"https://www.instagram.com/explore/tags/techdata/\">#techdata</a> <a href=\"https://www.instagram.com/explore/tags/ingrammicro/\">#ingrammicro</a> <a href=\"https://www.instagram.com/explore/tags/fraud/\">#fraud</a></p>', 'cover_image_1589734956.jpg', '2020-05-17 11:32:37', '2020-05-17 11:32:37'),
(9, 'Cards include a few options for working with images. Choose from appending “image caps” at either end of a card, overlaying images with card content, or simply embedding the image in a card.', '<h2>Cards include a few options for working with images. Choose from appending “image caps” at either end of a card, overlaying images with card content, or simply embedding the image in a card.hehehhehehehe</h2>', 'cover_image_1589782759.png', '2020-05-18 00:49:19', '2020-05-18 00:49:19'),
(10, 'Turn an image into a card background and overlay your card’s text. Depending on the image, you may or may not need additional styles or utilities.', '<h2>How to Use CSS Transitions?</h2><p>To create a transition effect, you must specify two things:</p><ul><li>the CSS property you want to add an effect to</li><li>the duration of the effect</li></ul><p><strong>Note:</strong> If the duration part is not specified, the transition will have no effect, because the default value is 0.</p><p>The following example shows a 100px * 100px red &lt;div&gt; element. The &lt;div&gt; element has also specified a transition effect for the width property, with a duration of 2 seconds:</p>', 'cover_image_1589786855.png', '2020-05-18 01:57:36', '2020-05-18 01:57:36'),
(11, 'Get in Touch', '<h2>Get in Touch</h2><h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem expedita aperiam aliquid at. Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis mollitia inventore?</h3><ul><li><i><strong>329 WASHINGTON ST BOSTON, MA 02108</strong></i></li><li><i><strong>(617) 557-0089</strong></i></li><li><i><strong>contact@example.com</strong></i></li></ul>', 'cover_image_1589888500.png', '2020-05-19 06:11:40', '2020-05-19 06:11:40'),
(12, 'Build fast, responsive sites with Bootstrap', '<blockquote><h2>Build fast, responsive sites with Bootstrap</h2></blockquote><h3>Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</h3><p>&nbsp;</p><h2>Installation</h2><p>Install Bootstrap’s source Sass and JavaScript files via npm, Composer, or Meteor.</p><p>Package managed installs don’t include documentation or our full build scripts. You can also <a href=\"https://github.com/twbs/bootstrap-npm-starter\">use our npm template repo</a> to quickly generate a Bootstrap project via npm.</p><p>&nbsp;</p><h2>BootstrapCDN</h2><p>When you only need to include Bootstrap’s compiled CSS or JS, you can use <a href=\"https://www.bootstrapcdn.com/\">BootstrapCDN</a>.</p><p>See it in action with our simple <a href=\"https://getbootstrap.com/docs/4.5/getting-started/introduction/#starter-template\">starter template</a>, or <a href=\"https://getbootstrap.com/docs/4.5/examples/\">browse the examples</a> to jumpstart your next project.</p><p>&nbsp;</p><h2>Bootstrap Icons</h2><blockquote><p>For the first time ever, Bootstrap has its own open source SVG icon library, designed to work best with our components and documentation.</p><p>Bootstrap Icons are designed to work best with Bootstrap components, but they’ll work in any project. They’re SVGs, so they scale quickly and easily, can be implemented in several ways, and can be styled with CSS.</p><p><a href=\"https://icons.getbootstrap.com/\">Get Bootstrap Icons</a></p></blockquote><p>&nbsp;</p>', 'cover_image_1589911999.png', '2020-05-19 12:43:19', '2020-05-19 12:43:19'),
(14, 'Sony Patents Xperia Phone with Pop-up Camera and Speakers', '<h2><strong>Sony Patents Xperia Phone with Pop-up Camera and Speakers</strong></h2><p>While we have seen several smartphones with pop-up selfie cameras, Sony has reportedly filed a patent for a smartphone with <strong>pop-up camera</strong> and <strong>speakers</strong>.</p><p>According to the patent spotted by <i>LetsGoDigital</i>, the handset will have three modes namely Standard mode, Pop-up mode, and Pop-down mode. As the name suggests, the camera pops up from the phone when needed and the same goes for speakers at the bottom. The <strong>top portion accommodating the camera sensor also has a speaker unit</strong>.</p><p>The device shown in the patent appears to feature minimal bezels with flat sharp edges. The <strong>patent was apparently filed at the end of 2018</strong>, got approved &amp; published in the WIPO (World Intellectual Property Office) database a few days back.</p><p><i>LetsGoDigital</i> points out that the pop-up and pop-down sliders change their position based on the audio source. For instance, if you’re playing a video and the source moves towards the right of the screen, the speaker corresponding to it will expand further. It remains unclear if this feature would have a benefit in real-world scenarios.</p><p>That said, do keep in mind that we can’t really be sure if Sony is actually working on a device with such a pop-up and pop-down mechanism. For what it’s worth, this appears to be a refreshed take in an industry of identical smartphones.</p><p>Even if Sony manages to make a phone with such unusual hardware, the durability and practical usage remain questionable for now. So, will you consider buying a phone with a pop-up camera and pop-down speaker? Let us know in the comments section below.</p>', 'cover_image_1590001354.webp', '2020-05-20 13:32:34', '2020-05-20 13:32:34'),
(15, 'You asked, Font Awesome delivers with 41 shiny new icons in version 4.7. Want to request new icons? Here\'s how. Need vectors or want to use on the desktop? Check the cheatsheet.', '<ul><li>All brand icons are trademarks of their respective owners.</li><li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li><li>Brand icons should only be used to represent the company or product to which they refer.</li><li><strong>Please do not use brand logos for any purpose except to represent that particular brand or service.</strong></li></ul>', 'cover_image_1590133695.webp', '2020-05-22 02:18:16', '2020-05-22 02:18:16'),
(16, 'lets see what happes!!', '<h2><br><a href=\"google.com\"><i>Discover more of the web</i></a></h2><h2>Find websites to like based on sites that you\'ve visited. Suggested Sites is a feature of Internet Explorer</h2><h2>Download Internet Explorer 9 to start getting personalized suggestions</h2>', 'cover_image_1590138486.jpg', '2020-05-22 03:38:06', '2020-05-22 03:38:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
