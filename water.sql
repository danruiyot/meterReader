--
-- MySQL 5.5.5
-- Sat, 04 May 2019 15:10:06 +0000
--

CREATE TABLE `client` (
   `Id` int(11) not null,
   `fname` varchar(11) not null,
   `sname` varchar(11) not null,
   `meterno` varchar(11) not null,
   `previous_reading` int(11) default '0',
   `current_eading` int(11) default '0',
   `amount_due` int(11) default '0',
   `location` varchar(11) not null,
   `phoneno` varchar(11) not null,
   `email` varchar(11) not null,
   `gender` varchar(11) not null
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `client` (`Id`, `fname`, `sname`, `meterno`, `previous_reading`, `current_eading`, `amount_due`, `location`, `phoneno`, `email`, `gender`) VALUES
('1', 'Simon', 'Kemei', '1', '55', '54', '200', '', '', '', ''),

CREATE TABLE `user` (
   `id` int(11) not null auto_increment,
   `workid` varchar(11) not null,
   `fname` varchar(11) not null,
   `sname` varchar(11) not null,
   `department` varchar(11) not null,
   `password` varchar(11) not null,
   `email` varchar(11) not null,
   `phone_no` varchar(11) not null,
   `gender` varchar(6) not null,
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- [Table `user` is empty]