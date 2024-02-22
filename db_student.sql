
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `db_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE `student_record` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `address` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_record`
--

INSERT INTO `student_record` (`id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'abc', '123@gmail.com', '1111', 'xyz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_record`
--
ALTER TABLE `student_record`
  ADD PRIMARY KEY (`id`);
COMMIT;
