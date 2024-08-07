CREATE TABLE `notas_previas` (
  `id_student` int(8) NOT NULL,
  `id_subject` int(3) NOT NULL,
  `nro_permiso` int(10) NOT NULL,
  `fecha_examen` varchar(10) NOT NULL,
  `nota` int(11) NOT NULL,
  `presidente_mesa` varchar(100) NOT NULL,
  `vocal1` varchar(100) NOT NULL,
  `vocal2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `previas` (
  `id_previa` int(10) NOT NULL,
  `id_espacio` int(3) NOT NULL,
  `ID_alumno` int(8) NOT NULL,
  `anio` int(4) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
