-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2018 at 05:23 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock_laptops`
--

-- --------------------------------------------------------

--
-- Table structure for table `discoduro`
--

CREATE TABLE `discoduro` (
  `id_dd` varchar(5) NOT NULL,
  `capacidad_dd` varchar(50) DEFAULT NULL,
  `detalle_dd` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discoduro`
--

INSERT INTO `discoduro` (`id_dd`, `capacidad_dd`, `detalle_dd`) VALUES
('DD001', '80GB', 'Rigido'),
('DD002', '160GB', 'Rigido'),
('DD003', '250GB', 'Rigido'),
('DD004', '320GB', 'Rigido'),
('DD005', '500GB', 'Rigido'),
('DD006', '640GB', 'Rigido'),
('DD007', '720GB', 'Rigido'),
('DD008', '1TB', 'Rigido'),
('DD009', 'No definido', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` varchar(5) NOT NULL,
  `nombre_empresa` varchar(50) DEFAULT NULL,
  `detalle_empresa` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nombre_empresa`, `detalle_empresa`) VALUES
('EM001', 'PANORAMA', NULL),
('EM002', 'ADAMS', NULL),
('EM003', 'TIENDAS EL', NULL),
('EM004', 'SAMITEX', NULL),
('EM005', 'BARRIO', NULL),
('EM006', 'TEXCORP', NULL),
('EM007', 'GLOBAL', NULL),
('EM008', 'LUMINIKA', NULL),
('EM009', 'LLAVE EN MANO', NULL),
('EM010', 'LEATHERCORP', NULL),
('EM011', 'ANELJO', NULL),
('EM012', 'ALIAT', NULL),
('EM013', 'PRIMATEX', NULL),
('EM014', 'SINERCORP', NULL),
('EM015', 'No definido', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

CREATE TABLE `estado` (
  `id_estado` varchar(5) NOT NULL,
  `nombre_estado` varchar(50) DEFAULT NULL,
  `detalle_estado` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estado`
--

INSERT INTO `estado` (`id_estado`, `nombre_estado`, `detalle_estado`) VALUES
('ES001', 'Operativo', 'null'),
('ES002', 'Baja', 'null'),
('ES003', 'Prestamo', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id_laptop` varchar(5) NOT NULL,
  `id_marca` varchar(5) NOT NULL,
  `modelo_laptop` varchar(100) DEFAULT NULL,
  `id_so` varchar(5) NOT NULL,
  `id_memoriaram` varchar(5) NOT NULL,
  `id_tecnologiaram` varchar(5) NOT NULL,
  `id_dd` varchar(5) NOT NULL,
  `id_procesador` varchar(5) NOT NULL,
  `id_empresa` varchar(5) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `id_estado` varchar(5) NOT NULL,
  `obs_laptop` varchar(300) DEFAULT NULL,
  `numserie_laptop` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `id_marca`, `modelo_laptop`, `id_so`, `id_memoriaram`, `id_tecnologiaram`, `id_dd`, `id_procesador`, `id_empresa`, `usuario`, `id_estado`, `obs_laptop`, `numserie_laptop`) VALUES
('LA001', 'MA001', 'Probook 450', 'SO005', 'MR005', 'TR005', 'DD008', 'PR020', 'EM015', '', 'ES002', 'Bateria mal', ''),
('LA002', 'MA002', 'Inapiron 3421', 'SO005', 'MR012', 'TR005', 'DD005', 'PR004', 'EM001', '', 'ES002', 'Pantalla, falla / No ram', ''),
('LA003', 'MA001', '240', 'SO005', 'MR004', 'TR005', 'DD008', 'PR006', 'EM001', '', 'ES003', 'Prestamo auditoria', ''),
('LA004', 'MA003', 'L440', 'SO003', 'MR004', 'TR005', 'DD005', 'PR011', 'EM001', '', 'ES002', 'Pixeles muertos', ''),
('LA005', 'MA001', 'Probook 4410s', 'SO005', 'MR003', 'TR005', 'DD003', 'PR003', 'EM001', '', 'ES001', '', ''),
('LA006', 'MA001', '', 'SO003', 'MR004', 'TR005', 'DD006', 'PR004', 'EM001', '', 'ES001', '', ''),
('LA007', 'MA001', 'Probook 440', 'SO007', 'MR012', 'TR005', 'DD009', 'PR027', 'EM001', '', 'ES002', 'Pantalla dividida', ''),
('LA008', 'MA001', 'Elitebook 8560w', 'SO003', 'MR005', 'TR005', 'DD009', 'PR016', 'EM002', '', 'ES002', 'No DD', ''),
('LA009', 'MA001', '1000', 'SO005', 'MR004', 'TR005', 'DD007', 'PR005', 'EM005', '', 'ES002', 'Tecla E rota', ''),
('LA010', 'MA007', 'Satellite L735', 'SO003', 'MR004', 'TR005', 'DD004', 'PR004', 'EM003', '', 'ES001', '', ''),
('LA011', 'MA006', 'Presario CQ45', 'SO003', 'MR003', 'TR005', 'DD004', 'PR026', 'EM014', '', 'ES001', '', ''),
('LA012', 'MA005', 'MT40II', 'SO005', 'MR004', 'TR005', 'DD005', 'PR005', 'EM014', '', 'ES001', '', ''),
('LA013', 'MA007', 'TECRA A50-A', 'SO003', 'MR005', 'TR005', 'DD005', 'PR011', 'EM001', '', 'ES001', '', ''),
('LA014', 'MA001', '450', 'SO003', 'MR003', 'TR005', 'DD005', 'PR004', 'EM001', '', 'ES002', 'Click izquierdo sin tecla', ''),
('LA015', 'MA003', 'V310', 'SO006', 'MR004', 'TR005', 'DD005', 'PR012', 'EM005', '', 'ES002', 'baja', ''),
('LA016', 'MA003', 'L570', 'SO006', 'MR004', 'TR005', 'DD005', 'PR013', 'EM015', 'Joel Condori', 'ES003', 'Prestamo Fernando', ''),
('LA017', 'MA003', 'L470', 'SO006', 'MR004', 'TR005', 'DD008', 'PR013', 'EM001', 'Alberto Torres', 'ES003', 'Robert se la llevo', ''),
('LA018', 'MA001', 'Pavillion dv6', 'SO007', 'MR012', 'TR005', 'DD009', 'PR027', 'EM001', '', 'ES002', 'No levanta video / No DD', ''),
('LA019', 'MA001', '', 'SO007', 'MR012', 'TR005', 'DD009', 'PR027', 'EM001', '', 'ES002', 'Pantalla malograda', ''),
('LA020', 'MA002', '', 'SO007', 'MR012', 'TR005', 'DD009', 'PR027', 'EM015', '', 'ES002', 'No levanta video', ''),
('LA021', 'MA007', 'Satellite C845', 'SO003', 'MR003', 'TR005', 'DD005', 'PR001', 'EM015', '', 'ES002', 'Bateria mal', ''),
('LA022', 'MA003', 'L460', 'SO003', 'MR005', 'TR005', 'DD008', 'PR012', 'EM015', 'Jose Calle', 'ES003', 'Teclado para cambiar', ''),
('LA023', 'MA003', 'L470', 'SO006', 'MR004', 'TR005', 'DD008', 'PR013', 'EM003', '', 'ES001', '', ''),
('LA024', 'MA003', 'B40', 'SO006', 'MR004', 'TR005', 'DD005', 'PR011', 'EM008', 'Maria Eulogio', 'ES001', '', ''),
('LA025', 'MA007', 'Satellite C55-C', 'SO005', 'MR004', 'TR005', 'DD005', 'PR006', 'EM003', 'Javier Iwasaki', 'ES002', 'Pantalla de la muerte, case roto, falta tornollos, excesiva lentitud', ''),
('LA026', 'MA007', 'Satellite C55-C', 'SO005', 'MR004', 'TR005', 'DD005', 'PR011', 'EM003', 'Jean Piere Combe', 'ES003', 'Prestamo para Vivanco', ''),
('LA027', 'MA003', 'L440', 'SO003', 'MR005', 'TR005', 'DD005', 'PR011', 'EM003', 'Sergio Inga', 'ES003', 'Prestamos auditor', ''),
('LA028', 'MA001', '14 Notebook', 'SO005', 'MR004', 'TR005', 'DD005', 'PR006', 'EM001', 'Rodrigo Medina', 'ES003', 'Prestamo Wayo', ''),
('LA029', 'MA003', 'L440', 'SO003', 'MR004', 'TR005', 'DD005', 'PR011', 'EM014', 'Fiorella Leaño', 'ES003', 'Cambio a Jarula Peña', ''),
('LA030', 'MA001', 'Probook 440', 'SO003', 'MR004', 'TR005', 'DD008', 'PR011', 'EM001', 'Gisela Acuña', 'ES002', 'Recalienta / Carlos Verastegui', ''),
('LA031', 'MA001', '1000', 'SO003', 'MR004', 'TR005', 'DD007', 'PR005', 'EM001', 'Giorgio Sanchez', 'ES003', 'Ofisis', ''),
('LA032', 'MA007', 'Satellite', 'SO003', 'MR003', 'TR005', 'DD004', 'PR004', 'EM001', 'M Vera', 'ES002', 'Problemas con teclado / Sin licencia windows', ''),
('LA033', 'MA003', 'W541', 'SO005', 'MR011', 'TR005', 'DD005', 'PR018', 'EM003', 'Jose Navarro', 'ES003', 'Fernando dono a desarrollo', ''),
('LA034', 'MA003', 'L440', 'SO003', 'MR004', 'TR005', 'DD005', 'PR011', 'EM005', 'Gabriela Pain', 'ES003', 'Reasignada a Peter Butler', ''),
('LA035', 'MA001', '14 Notebook', 'SO005', 'MR004', 'TR005', 'DD005', 'PR011', 'EM003', 'Maribel Martinez', 'ES002', 'Problemas red', ''),
('LA036', 'MA003', 'l440', 'SO003', 'MR004', 'TR005', 'DD005', 'PR006', 'EM001', 'Omar Galvez', 'ES002', 'Problemas de video', ''),
('LA037', 'MA003', 'E570', 'SO006', 'MR005', 'TR005', 'DD005', 'PR013', 'EM001', 'Atento', 'ES003', 'Prestamo Fernando', ''),
('LA038', 'MA003', 'L470', 'SO006', 'MR005', 'TR005', 'DD008', 'PR013', 'EM001', 'Gerardo Rimache', 'ES001', '', ''),
('LA039', 'MA004', '5733', 'SO006', 'MR004', 'TR005', 'DD005', 'PR005', 'EM005', 'Peter Butler', 'ES002', 'No funciona la ñ y lenta', ''),
('LA040', 'MA007', 'Satellite ', 'SO003', 'MR006', 'TR005', 'DD008', 'PR011', 'EM014', 'Jarula Peña', 'ES003', 'Alex Osorio / Bisagra de pantalla dañada', ''),
('LA041', 'MA003', 'L470', 'SO006', 'MR004', 'TR005', 'DD008', 'PR013', 'EM001', 'Carla Liendo', 'ES003', 'Para Omar', ''),
('LA042', 'MA003', 'L470', 'SO006', 'MR004', 'TR005', 'DD008', 'PR013', 'EM014', 'Deivy Fagundes', 'ES001', '', ''),
('LA043', 'MA003', 'L470', 'SO006', 'MR005', 'TR005', 'DD005', 'PR013', 'EM001', 'Andrea Castro Vidal', 'ES003', 'Para Fanny', ''),
('LA044', 'MA001', '1000', 'SO003', 'MR004', 'TR005', 'DD007', 'PR005', 'EM014', 'Jose Anton', 'ES001', '', ''),
('LA045', 'MA003', 'L470', 'SO006', 'MR005', 'TR005', 'DD008', 'PR021', 'EM008', 'Jettro Palma', 'ES003', 'Reasignado a  Josué Salas', ''),
('LA046', 'MA003', 'L440', 'SO003', 'MR004', 'TR005', 'DD005', 'PR011', 'EM014', 'Misell Mamani', 'ES003', 'Prestamo Pamela Osorio', ''),
('LA047', 'MA007', 'Satellite L45-B', 'SO006', 'MR004', 'TR005', 'DD005', 'PR011', 'EM003', 'Arturo Vivanco', 'ES001', 'Golpe en una esquna', ''),
('LA048', 'MA003', 'B50', 'SO005', 'MR004', 'TR005', 'DD005', 'PR027', 'EM001', 'Ana Bernuy', 'ES002', 'Pantalla y teclado dañado', ''),
('LA049', 'MA003', 'L460', 'SO006', 'MR007', 'TR005', 'DD005', 'PR020', 'EM001', 'Rolando Carnero', 'ES001', '', ''),
('LA050', 'MA003', 'L460', 'SO003', 'MR005', 'TR005', 'DD008', 'PR012', 'EM001', 'Carlos Huarhua', 'ES001', '', ''),
('LA051', 'MA003', 'T440P', 'SO005', 'MR004', 'TR005', 'DD005', 'PR011', 'EM001', 'Marianella Yparraguirre', 'ES001', '', ''),
('LA052', 'MA003', 'L470', 'SO006', 'MR004', 'TR005', 'DD008', 'PR013', 'EM001', 'Manuel Valencia Perez', 'ES001', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `marca`
--

CREATE TABLE `marca` (
  `id_marca` varchar(5) NOT NULL,
  `nombre_marca` varchar(50) DEFAULT NULL,
  `detalle_marca` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre_marca`, `detalle_marca`) VALUES
('MA001', 'HP', NULL),
('MA002', 'DELL', NULL),
('MA003', 'LENOVO', NULL),
('MA004', 'ACER', NULL),
('MA005', 'ADVANCE', NULL),
('MA006', 'COMPAQ', NULL),
('MA007', 'TOSHIBA', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `memoria_ram`
--

CREATE TABLE `memoria_ram` (
  `id_memoriaram` varchar(5) NOT NULL,
  `cantidad_ram` varchar(50) DEFAULT NULL,
  `detalle_ram` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memoria_ram`
--

INSERT INTO `memoria_ram` (`id_memoriaram`, `cantidad_ram`, `detalle_ram`) VALUES
('MR001', '512MB', ''),
('MR002', '1GB', ''),
('MR003', '2GB', ''),
('MR004', '4GB', ''),
('MR005', '8GB', ''),
('MR006', '12GB', ''),
('MR007', '16GB', ''),
('MR008', '20GB', ''),
('MR009', '24GB', ''),
('MR010', '28GB', ''),
('MR011', '32GB', ''),
('MR012', 'No definido', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `modelo`
--

CREATE TABLE `modelo` (
  `id_modelo` varchar(5) NOT NULL,
  `nombre_modelo` varchar(50) DEFAULT NULL,
  `detalle_modelo` varchar(200) DEFAULT NULL,
  `id_marca` varchar(5) NOT NULL,
  `id_serie` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modelo`
--

INSERT INTO `modelo` (`id_modelo`, `nombre_modelo`, `detalle_modelo`, `id_marca`, `id_serie`) VALUES
('MO001', '450', NULL, 'MA001', 'SE001');

-- --------------------------------------------------------

--
-- Table structure for table `movimientos`
--

CREATE TABLE `movimientos` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `accion` varchar(50) NOT NULL,
  `id_laptop` varchar(5) NOT NULL,
  `fechahora` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `procesador`
--

CREATE TABLE `procesador` (
  `id_procesador` varchar(5) NOT NULL,
  `nombre_procesador` varchar(50) DEFAULT NULL,
  `detalle_procesador` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procesador`
--

INSERT INTO `procesador` (`id_procesador`, `nombre_procesador`, `detalle_procesador`) VALUES
('PR001', 'Celeron', 'null'),
('PR002', 'Core 2', 'null'),
('PR003', 'Core 2 Duo', 'null'),
('PR004', 'i3-2da', 'null'),
('PR005', 'i3-3ra', 'null'),
('PR006', 'i3-4ta', 'null'),
('PR007', 'i3-5ta', 'null'),
('PR008', 'i3-6ta', 'null'),
('PR009', 'i5-2da', 'null'),
('PR010', 'i5-3ra', 'null'),
('PR011', 'i5-4ta', 'null'),
('PR012', 'i5-6ta', 'null'),
('PR013', 'i5-7ma', 'null'),
('PR014', 'i5-8va', 'null'),
('PR015', 'i5-9na', 'null'),
('PR016', 'i7-2da', 'null'),
('PR017', 'i7-3ra', 'null'),
('PR018', 'i7-4ta', 'null'),
('PR019', 'i7-5ta', 'null'),
('PR020', 'i7-6ta', 'null'),
('PR021', 'i7-7ma', 'null'),
('PR022', 'i7-8va', 'null'),
('PR023', 'i7-9na', 'null'),
('PR024', 'i9-8va', 'null'),
('PR025', 'i9-9na', 'null'),
('PR026', 'AMD-E300', 'null'),
('PR027', 'No definido', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `serie`
--

CREATE TABLE `serie` (
  `id_serie` varchar(5) NOT NULL,
  `nombre_serie` varchar(50) DEFAULT NULL,
  `descripcion_serie` varchar(200) DEFAULT NULL,
  `id_marca` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serie`
--

INSERT INTO `serie` (`id_serie`, `nombre_serie`, `descripcion_serie`, `id_marca`) VALUES
('SE001', 'Probook', NULL, 'MA001');

-- --------------------------------------------------------

--
-- Table structure for table `sistema_operativo`
--

CREATE TABLE `sistema_operativo` (
  `id_so` varchar(5) NOT NULL,
  `nombre_so` varchar(50) DEFAULT NULL,
  `detalle_so` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sistema_operativo`
--

INSERT INTO `sistema_operativo` (`id_so`, `nombre_so`, `detalle_so`) VALUES
('SO001', 'Windows XP', NULL),
('SO002', 'Windows Vista', NULL),
('SO003', 'Windows 7', NULL),
('SO004', 'Windows 8', NULL),
('SO005', 'Windows 8.1', NULL),
('SO006', 'Windows 10', NULL),
('SO007', 'No definido', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tecnologia_ram`
--

CREATE TABLE `tecnologia_ram` (
  `id_tecnologiaram` varchar(5) NOT NULL,
  `nombre_tecnologiaram` varchar(50) DEFAULT NULL,
  `detalle_tecnologiaram` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tecnologia_ram`
--

INSERT INTO `tecnologia_ram` (`id_tecnologiaram`, `nombre_tecnologiaram`, `detalle_tecnologiaram`) VALUES
('TR001', 'DDR', ''),
('TR002', 'DDR2', ''),
('TR003', 'DDR3', ''),
('TR004', 'DDR4', ''),
('TR005', 'No definido', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id_user` int(11) NOT NULL,
  `usuario_user` varchar(50) DEFAULT NULL,
  `pass_user` varchar(200) DEFAULT NULL,
  `nombre_user` varchar(100) DEFAULT NULL,
  `apellidos_user` varchar(200) DEFAULT NULL,
  `id_empresa` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id_user`, `usuario_user`, `pass_user`, `nombre_user`, `apellidos_user`, `id_empresa`) VALUES
(1, 'admin', 'admin', 'Administrador', 'Sistema', 'EM001'),
(5, 'superadmin', '123', 'Super Admin', 'System', 'EM001');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` varchar(6) NOT NULL,
  `nombre_usuario` varchar(100) DEFAULT NULL,
  `puesto_usuario` varchar(100) DEFAULT NULL,
  `obs_usuario` varchar(200) DEFAULT NULL,
  `id_empresa` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `puesto_usuario`, `obs_usuario`, `id_empresa`) VALUES
('US001', 'No definido', 'No definido', NULL, 'EM001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discoduro`
--
ALTER TABLE `discoduro`
  ADD PRIMARY KEY (`id_dd`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indexes for table `memoria_ram`
--
ALTER TABLE `memoria_ram`
  ADD PRIMARY KEY (`id_memoriaram`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id_modelo`),
  ADD UNIQUE KEY `unq_modelo_id_marca` (`id_marca`),
  ADD UNIQUE KEY `unq_modelo_id_serie` (`id_serie`);

--
-- Indexes for table `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `procesador`
--
ALTER TABLE `procesador`
  ADD PRIMARY KEY (`id_procesador`);

--
-- Indexes for table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`id_serie`),
  ADD UNIQUE KEY `unq_serie_id_marca` (`id_marca`);

--
-- Indexes for table `sistema_operativo`
--
ALTER TABLE `sistema_operativo`
  ADD PRIMARY KEY (`id_so`);

--
-- Indexes for table `tecnologia_ram`
--
ALTER TABLE `tecnologia_ram`
  ADD PRIMARY KEY (`id_tecnologiaram`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `unq_usuario_id_empresa` (`id_empresa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
