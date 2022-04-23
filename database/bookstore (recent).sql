-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2021 at 10:08 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'Admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `byid` bigint(20) NOT NULL,
  `goods` varchar(2000) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `byid`, `goods`, `amount`, `status`, `date`) VALUES
(3, 1, '<div class="row" id="row1"> <div class="col-3"><img src="http://localhost/bookstore/products/8adb30b802f56a8ca97ce02332603edf3965c2da.jpg" width="50px"> </div> <div class="col-3">Fatality<input type="hidden" id="pname" value="Fatality-1-1" name="names[]"></div> <div class="col-3">320</div> <div class="col-2"><a href="http://localhost/bookstore/files/0477ea065650d92a22b1933287a5b31e5905618c.pdf" dowmload="">Downlnload</a></div></div>', '1000', 'paid', 'Friday Dec 06, 2019 08:34'),
(4, 1, '<div class="row" id="row1"> <div class="col-3"><img src="http://localhost/bookstore/products/8adb30b802f56a8ca97ce02332603edf3965c2da.jpg" width="50px"> </div> <div class="col-3">Fatality<input type="hidden" id="pname" value="Fatality-1-1" name="names[]"></div> <div class="col-3">320</div> <div class="col-2"><a href="http://localhost/bookstore/files/0477ea065650d92a22b1933287a5b31e5905618c.pdf" dowmload="">Downlnload</a></div></div>', '500', 'paid', 'Friday Dec 06, 2019 08:34'),
(5, 1, '<div class="row" id="row1"> <div class="col-3"><img src="http://localhost/bookstore/products/8adb30b802f56a8ca97ce02332603edf3965c2da.jpg" width="50px"> </div> <div class="col-3">Fatality<input type="hidden" id="pname" value="Fatality-1-1" name="names[]"></div> <div class="col-3">320</div> <div class="col-2"><a href="http://localhost/bookstore/files/0477ea065650d92a22b1933287a5b31e5905618c.pdf" dowmload="">Downlnload</a></div></div>', '820', 'paid', 'Friday Dec 06, 2019 08:35'),
(6, 1, '<div class="row" id="row1"> <div class="col-3"><img src="http://localhost/bookstore/products/8adb30b802f56a8ca97ce02332603edf3965c2da.jpg" width="50px"> </div> <div class="col-3">Fatality<input type="hidden" id="pname" value="Fatality-1-1" name="names[]"></div> <div class="col-3">320</div> <div class="col-2"><a href="http://localhost/bookstore/files/0477ea065650d92a22b1933287a5b31e5905618c.pdf" dowmload="">Downlnload</a></div></div>', '1320', 'paid', 'Friday Dec 06, 2019 20:33'),
(7, 1, '<div class="row" id="row1"> <div class="col-3"><img src="http://localhost/bookstore/products/8adb30b802f56a8ca97ce02332603edf3965c2da.jpg" width="50px"> </div> <div class="col-3">Fatality<input type="hidden" id="pname" value="Fatality-1-1" name="names[]"></div> <div class="col-3">320</div> <div class="col-2"><a href="http://localhost/bookstore/files/0477ea065650d92a22b1933287a5b31e5905618c.pdf" dowmload="">Downlnload</a></div></div>', '320', 'paid', 'Wednesday Jan 08, 2020 11:13'),
(8, 3, '<div class="row" id="row1"> <div class="col-3"><img src="http://localhost/bookstore/products/8adb30b802f56a8ca97ce02332603edf3965c2da.jpg" width="50px"> </div> <div class="col-3">Fatality<input type="hidden" id="pname" value="Fatality-1-1" name="names[]"></div> <div class="col-3">320</div> <div class="col-2"><a href="http://localhost/bookstore/files/0477ea065650d92a22b1933287a5b31e5905618c.pdf" dowmload="">Downlnload</a></div></div><div class="row" id="row2"> <div class="col-3"><img src="http://localhost/bookstore/products/0197a1f2a6d9d06cf32fcb56eac1cd3be60d492a.jpg" width="50px"> </div> <div class="col-3">Crime Thrillers<input type="hidden" id="pname" value="Crime Thrillers-2-1" name="names[]"></div> <div class="col-3">500</div> <div class="col-2"><a href="http://localhost/bookstore/files/0477ea065650d92a22b1933287a5b31e5905618c.pdf" dowmload="">Downlnload</a></div></div>', '1000', 'paid', 'Thursday Jan 09, 2020 22:34'),
(9, 2, '<div class="row" id="row1"> <div class="col-3"><img src="http://localhost/bookstore/products/8adb30b802f56a8ca97ce02332603edf3965c2da.jpg" width="50px"> </div> <div class="col-3">Fatality<input type="hidden" id="pname" value="Fatality-1-1" name="names[]"></div> <div class="col-3">320</div> <div class="col-2"><a href="http://localhost/bookstore/files/0477ea065650d92a22b1933287a5b31e5905618c.pdf" dowmload="">Downlnload</a></div></div>', '500', 'paid', 'Thursday Jan 30, 2020 07:56'),
(10, 3, '<div class="row" id="row1"> <div class="col-3"><img src="http://localhost/bookstore/products/8adb30b802f56a8ca97ce02332603edf3965c2da.jpg" width="50px"> </div> <div class="col-3">Fatality<input type="hidden" id="pname" value="Fatality-1-1" name="names[]"></div> <div class="col-3">320</div> <div class="col-2"><a href="http://localhost/bookstore/files/0477ea065650d92a22b1933287a5b31e5905618c.pdf" dowmload="">Downlnload</a></div></div><div class="row" id="row2"> <div class="col-3"><img src="http://localhost/bookstore/products/0197a1f2a6d9d06cf32fcb56eac1cd3be60d492a.jpg" width="50px"> </div> <div class="col-3">Crime Thrillers<input type="hidden" id="pname" value="Crime Thrillers-2-1" name="names[]"></div> <div class="col-3">500</div> <div class="col-2"><a href="http://localhost/bookstore/files/0477ea065650d92a22b1933287a5b31e5905618c.pdf" dowmload="">Downlnload</a></div></div>', '820', 'paid', 'Friday Jan 31, 2020 10:09'),
(11, 2, '<div class="row" id="row1"> <div class="col-3"><img src="http://localhost/bookstore/products/8adb30b802f56a8ca97ce02332603edf3965c2da.jpg" width="50px"> </div> <div class="col-3">Fatality<input type="hidden" id="pname" value="Fatality-1-1" name="names[]"></div> <div class="col-3">320</div> <div class="col-2"><a href="http://localhost/bookstore/files/0477ea065650d92a22b1933287a5b31e5905618c.pdf" dowmload="">Downlnload</a></div></div>', '320', 'paid', 'Thursday Jul 23, 2020 13:13'),
(12, 2, '<div class="row" id="row2"> <div class="col-3"><img src="http://localhost/bookstore/products/0197a1f2a6d9d06cf32fcb56eac1cd3be60d492a.jpg" width="50px"> </div> <div class="col-3">Crime Thrillers<input type="hidden" id="pname" value="Crime Thrillers-2-1" name="names[]"></div> <div class="col-3">500</div> <div class="col-2"><temp href="http://localhost/bookstore/files/0477ea065650d92a22b1933287a5b31e5905618c.pdf" dowmload="">pay first</temp></div></div>', '500', 'pending', 'Thursday Jul 23, 2020 13:14'),
(13, 2, '<div class="row" id="row3"> <div class="col-3"><img src="http://localhost/bookstore/products/6a919cd39e4ac9cf3ab398a842c953cdf49d1a2f.jpg" width="50px"> </div> <div class="col-3">Get on Google Front Page<input type="hidden" id="pname" value="Get on Google Front Page-3-1" name="names[]"></div> <div class="col-3">500</div> <div class="col-2"><temp href="http://localhost/bookstore/files/0477ea065650d92a22b1933287a5b31e5905618c.pdf" dowmload="">pay first</temp></div></div>', '500', 'pending', 'Thursday Jul 23, 2020 14:29');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `byid` bigint(20) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `ref` int(255) NOT NULL,
  `date` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `byid`, `amount`, `ref`, `date`) VALUES
(1, 1, '1000', 1327272260, 0),
(2, 1, '2320', 1099160788, 0),
(3, 1, '1320', 1040078152, 0),
(4, 1, '320', 1329509913, 0),
(5, 3, '1000', 1026480109, 0),
(6, 3, '820', 374806814, 0),
(7, 2, '820', 193556952, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `files` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `autor`, `desc`, `files`, `price`, `pic`) VALUES
(1, 'Fatality', 'Lyndee Walker', ' Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book', '0477ea065650d92a22b1933287a5b31e5905618c.pdf', '320', '8adb30b802f56a8ca97ce02332603edf3965c2da.jpg'),
(2, 'Crime Thrillers', 'Nichelle Clarke', '  Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book', '0477ea065650d92a22b1933287a5b31e5905618c.pdf', '500', '0197a1f2a6d9d06cf32fcb56eac1cd3be60d492a.jpg'),
(3, 'Get on Google Front Page', 'Jason Matthews', '  Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book Very Good Book', '0477ea065650d92a22b1933287a5b31e5905618c.pdf', '500', '6a919cd39e4ac9cf3ab398a842c953cdf49d1a2f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'olad@gmail.com', '10470c3b4b1fed12c3baac014be15fac67c6e815'),
(2, 'olad@gmail.com', '10470c3b4b1fed12c3baac014be15fac67c6e815'),
(3, 'oladejioreoluwa94@gmail.com', '10470c3b4b1fed12c3baac014be15fac67c6e815'),
(4, 'oladejioreoluwa94@gmail.com', '10470c3b4b1fed12c3baac014be15fac67c6e815');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
