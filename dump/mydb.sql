CREATE DATABASE IF NOT EXISTS crud;

USE crud;

SET 
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
    time_zone = "+03:00";

CREATE TABLE `pessoas` (
  `id` int(11)  NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=innoDB DEFAULT CHARSET=latin1;

INSERT INTO `pessoas` (`id`, `nome`) VALUES
(1, 'Walter'),
(2, 'Pamela'),
(3, 'Luiz'),
(4, 'Napoleão');