CREATE TABLE `exam_previous` (
  `id_student` int(8) NOT NULL,
  `id_subject` int(3) NOT NULL,
  `permit_number` int(10) NOT NULL,
  `date_exam` varchar(10) NOT NULL,
  `grade` int(11) NOT NULL,
  `president_table` varchar(100) NOT NULL,
  `vowel1` varchar(100) NOT NULL,
  `vowel2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `exam` (
  `id_exam_previous` int(10) NOT NULL,
  `id_subjet` int(3) NOT NULL,
  `id_student` int(8) NOT NULL,
  `year` int(4) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
