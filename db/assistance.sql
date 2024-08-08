-- Database name `db_school`

CREATE TABLE `assistance` (
  `id_student` int(10) NOT NULL,
  `turn` varchar(2) NOT NULL,
  `date` varchar(10) NOT NULL,
  `assistance` varchar(2) NOT NULL,
  `course` int(4) NOT NULL,
  `division` int(2) NOT NULL,
  `school_year` int(4) NOT NULL,
  `responsible` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `counter_shift_assistance`
--

CREATE TABLE `counter_shift_assistance` (
  `id_student` int(10) NOT NULL,
  `turn` varchar(2) NOT NULL,
  `date` varchar(10) NOT NULL,
  `assistance` varchar(2) NOT NULL,
  `materia` int(10) NOT NULL,
  `course` int(4) NOT NULL,
  `division` int(2) NOT NULL,
  `school_year` int(4) NOT NULL,
  `responsible` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
