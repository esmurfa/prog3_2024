CREATE TABLE `asistencia` (
  `idalumno` int(10) NOT NULL,
  `turno` varchar(2) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `asistencia` varchar(2) NOT NULL,
  `curso` int(4) NOT NULL,
  `division` int(2) NOT NULL,
  `anio_lectivo` int(4) NOT NULL,
  `responsable` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asistencia_contraturno`
--

CREATE TABLE `asistencia_contraturno` (
  `idalumno` int(10) NOT NULL,
  `turno` varchar(2) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `asistencia` varchar(2) NOT NULL,
  `materia` int(10) NOT NULL,
  `curso` int(4) NOT NULL,
  `division` int(2) NOT NULL,
  `anio_lectivo` int(4) NOT NULL,
  `responsable` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
