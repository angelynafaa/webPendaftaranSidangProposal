
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `uid` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`uid`, `pwd`) VALUES
('admin', 'root'),
('aryan_007', 'aryan_007'),
('a_anand', 'a_anand');
COMMIT;

