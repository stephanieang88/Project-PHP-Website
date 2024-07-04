-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 04:51 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mplus_montessori`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `hashed_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `username`, `hashed_password`) VALUES
(1, 'Admin', 'User', 'admin123@gmail.com', 'Admin123', '$2y$10$aDGwhFcDblMgJ/stGtFIWOpMogRSrKQD4G7f2KJJNJACYNR8a5Eea'),
(2, 'Johnny ', 'Walker', 'johnnywalker@gmail.com', 'johnnywalker', '$2y$10$UzOiXu74EzPU47cRm4Bt3OMJX.YpbWNmFwMlIJriuisHTq3GbMzp.'),
(3, 'Allen', 'Price', 'allenprice@gmail.com', 'AllenPrice123', '$2y$10$fRJNVKZTzmj5Xhna73Z1texQFVH7q35F.ZX5CNAXByRfJFFHHPZ5W'),
(5, 'Warren ', 'Buffett', 'warrenbuffett@gmail.com', 'warrenbuffett', '$2y$10$8Dwg4ft7pFVB.t8LtuI1JOMs..N50KTUjcYnkZK1ZSEFwG/DqmTnW');

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE `catalogue` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `item_no` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `image_path` text NOT NULL,
  `submission_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`id`, `category`, `grade`, `position`, `visible`, `item_no`, `product_name`, `price`, `description`, `image_path`, `submission_date`) VALUES
(1, 'Sensorial', 'Early Childhood 3-6', 1, 1, '001600', 'Sound Boxes', '110.10', 'The Sound Boxes develop auditory discrimination through exercises in pairing and grading a series of sounds. This item consists of two sets of 6 sealed wooden cylinders graded from very soft to loud that contain materials that make a distinctive sound when shaken.', 'catalogue_images/sound_boxes.jpg', '2018-01-06'),
(6, 'Sensorial', 'Early Childhood 3-6', 2, 1, '001550', 'Tasting Exercise', '52.50', 'The Tasting Exercise is used to refine the gustatory sense. The bottles are prepared, by the teacher, with the basic tastes of sweet, sour, salty and bitter then are sampled and matched by the child. 8 tasting bottles and a working tray are included.', 'catalogue_images/tasting_exercise.jpg', '2018-01-06'),
(7, 'Sensorial', 'Early Childhood 3-6', 3, 1, '013100', 'Binomial Cube', '106.50', 'The Binomial Cube is a concrete representation of the algebraic formula (a + b)Â³. The factors of the equation are represented by cubes and prisms. The elementary Montessori child uses the Binomial Cube as an activity of algebraic exploration. Contained in a hinged wooden box with lid.', 'catalogue_images/binomial_cube.jpg', '2018-01-06'),
(8, 'Sensorial', 'Early Childhood 3-6', 4, 1, '013200', 'Trinomial Cube', '198.50', 'The Trinomial Cube is a concrete representation of the algebraic formula (a + b + c)Â³. The factors of the equation are represented by cubes and prisms. The elementary Montessori child uses the Trinomial Cube as an activity of algebraic exploration. Contained in a hinged wooden box with lid.', 'catalogue_images/trinomial_cube.jpg', '2018-01-06'),
(9, 'Sensorial', 'Early Childhood 3-6', 5, 1, '004500', 'Circles, Squares & Triangles', '90.50', 'The sets of Circles, Squares And Triangles provide the possibility for the child to explore and experiment with the three basic geometric shapes. The three shapes are represented in 3 colors - red, yellow, blue, and are graded from 1 to 10 cm in size. Each color is stored in an individual box with a lid.', 'catalogue_images/circles_squares_and_triangles.jpg', '2018-01-06'),
(10, 'Sensorial', 'Early Childhood 3-6', 6, 1, '001700', 'Baric Tablets', '69.90', 'The Baric Tablets introduce and refine the concept of the baric sense. While blindfolded, the child endeavors to discern the weight of the tablets. Error is controlled by the color of the wooden tablets, the lightest color being the lightest weight to the darkest color being the heaviest weight. The set consists of 3 boxes containing 10 each of light, medium and heavy weight tablets.', 'catalogue_images/baric_tablets.jpg', '2018-01-06'),
(11, 'Sensorial', 'Early Childhood 3-6', 7, 1, '001800', 'Thermic Bottles', '210.00', 'Thermic sense is refined through exercises of pairing and grading. The bottles are chrome-plated copper for conductivity, and are identical in appearance to prevent visual matching. The set includes a wooden tray that holds 8 metal bottles with screw-on tops.', 'catalogue_images/thermic_bottles.jpg', '2018-01-06'),
(12, 'Sensorial', 'Early Childhood 3-6', 8, 1, '001740', 'Mystery Bags: Geometric Shapes', '37.70', 'A set of 2 cloth bags that each contain a set of small geometric solids for matching.', 'catalogue_images/mystery_bags_geometric_shapes.jpg', '2018-01-06'),
(15, 'Practical Life', 'Toddler 0-3', 9, 1, '510100', 'Finger Puppets - Woods', '30.50', '6 different sets: Farm, Woods, Jungle, Sea, Arctic and Garden. Each set contains 8 different hand-knit finger puppets contained in a lined knit pouch with zipper top. A Fair Trade Product hand made in Anyi Bolivia.', 'catalogue_images/finger_puppets _woods.jpg', '2018-01-06'),
(16, 'Practical Life', 'Toddler 0-3', 10, 1, '040600', 'Sorting Tray', '46.50', 'A tray used for the children to sort all kinds of things from within their environment. Good for practice of the fine motor skills, color discrimination and sorting (Objects not included).', 'catalogue_images/sorting_tray.jpg', '2018-01-06'),
(17, 'Practical Life', 'Toddler 0-3', 11, 1, '040000', 'Cutting And Scissor Tray', '49.90', 'An all-inclusive set for cutting exercises in the classroom. Includes: a wooden tray and small box, a pair of scissors and several scissors exercise sheets. See 5.677.00 Scissors Exercises to order additional sheets.', 'catalogue_images/cutting_and_scissor_tray.jpg', '2018-01-06'),
(18, 'Sensorial', 'Toddler 0-3', 12, 1, '043300', 'Imbucare Box With 3 Colored Knit Balls', '65.50', 'A box with a red, a yellow and a blue circle printed on the lid. The box houses 3 colored knit balls on strings, 2 stakes and 1 wooden slat with dowels. A rack is built on the box and the 3 knit balls are hung from the dowels.', 'catalogue_images/imbucare_box_with_3_colored_knit_balls.jpg', '2018-01-06'),
(19, 'Practical Life', 'Early Childhood 3-6', 13, 1, '040100', 'Glue And Paste Box', '39.40', 'An all-inclusive set for gluing and pasting exercises in the classroom. Includes: a wooden box with six compartments, a glue/paste brush and a glass jar with lid. The lid of the box has a cutout hole that holds the jar upright to avoid spilling the contents.', 'catalogue_images/glue_and_paste_box.jpg', '2018-01-06'),
(20, 'Practical Life', 'Early Childhood 3-6', 14, 1, '182600', 'Hand Washing Table', '283.50', 'The table has two removable metal bowls: a small one for holding a bar of soap and a larger one for the water. \r\nMeasures: 68 x 45 x 52 cm. ', 'catalogue_images/hand_washing_table.jpg', '2018-01-06'),
(22, 'Mathematics', 'Early Childhood 3-6', 15, 1, '007300', 'Bank Game', '81.80', 'The Bank Game reinforces the concept of long multiplication. The children assume different roles as they perform the game exercises. Includes plastic number cards and role designator cards and a specially designed box with lid.', 'catalogue_images/bank_game.jpg', '2018-01-07'),
(23, 'Mathematics', 'Early Childhood 3-6', 16, 1, '0083MC', 'Golden Bead Material: Individual Beads Nylon', '678.80', 'The Golden Bead Material introduces the child to the decimal system with concrete representations of the hierarchy of numbers. Quantity and place value is explored by the child through activities in the operations of addition, subtraction, multiplication and division.\r\n\r\nThe Set Contains:\r\n100 - Golden Bead Units in a plastic box\r\n45 - Golden Bars of 10 in box\r\n10 - Golden Bead Squares of 100\r\n45 - Wooden Squares of 100\r\n1 - Golden Bead Cube of 1000\r\n9 - Wooden Cubes of 1000\r\n3 - Boxes containing the Small Number Cards 1-3000\r\n1 - Box containing the Small Number Cards 1-9000\r\n1 - Box containing the Large Number Cards 1-1000\r\n1 - Box containing the Large Number Cards 1-9000\r\n3 - Wooden trays each with 2 Unit Bead Cups', 'catalogue_images/golden_bead_material_individual_beads_nylon.jpg', '2018-01-07'),
(24, 'Mathematics', 'Early Childhood 3-6', 17, 1, '003203', 'Spindle Box: US Version', '122.20', 'The Spindle Box provides practice in associating quantity and symbol for the numbers 0-9. 45 loose wooden spindlesare included.', 'catalogue_images/spindle_box_us_version.jpg', '2018-01-07'),
(25, 'Mathematics', 'Early Childhood 3-6', 18, 1, '009200', 'Addition Strip Board', '67.70', 'Using the Addition Strip Board, the child practices the sequence of addition combinations 1-9, and begins the process of memorization of the addition tables. The material is composed of a hardboard chart 12 squares by 18 squares with the numbers 1-18 printed across the top. Stored in a hardwood box are the strips used for the exercise, 9 red strips divided into squares and 9 solid blue strips, both printed with the numerals 1-9.', 'catalogue_images/addition_strip_board.jpg', '2018-01-07'),
(26, 'Mathematics', 'Early Childhood 3-6', 19, 1, '0142A0', 'Addition Working Charts', '92.20', 'The Addition Working Charts aid the child in the practice and memorization of the unit addition combinations. Includes 2 control charts, 4 working charts and 1 box of wooden answer chips.', 'catalogue_images/addition_working_charts.jpg', '2018-01-07'),
(27, 'Biology', 'Early Childhood 3-6', 20, 1, '004100', 'Botany Cabinet', '336.00', 'Using the Botany Cabinet, the child learns the shapes and names of leaves by tracing their borders and matching them to those in the natural environment. The Botany Cabinet consists of: a beech plywood cabinet with 3 drawers and 18 leaf-shape insets and frames. 49 x 34 x 16 cm.', 'catalogue_images/botany_cabinet.jpg', '2018-01-07'),
(28, 'Biology', 'Early Childhood 3-6', 21, 1, '0041C1', 'Botany Cabinet Control Chart', '17.50', 'A chart for use with the Botany Cabinet and the Botany Cabinet Nomenclature Cards. Printed in green on thick white plastic.', 'catalogue_images/botany_cabinet_control_chart.jpg', '2018-01-07'),
(29, 'Biology', 'Early Childhood 3-6', 22, 1, '020201', 'Botany Puzzle Activity Set', '57.70', 'Plastic control and name cards for each of the Botany Puzzle components. Includes: a wooden box with compartments and lid.', 'catalogue_images/bontany_puzzle_activity_set.jpg', '2018-01-07'),
(30, 'Biology', 'Early Childhood 3-6', 23, 1, '020301', 'Animal Puzzle Activity Set', '72.20', 'Plastic control and name cards for each of the Animal Puzzle components. Includes: a wooden box with compartments and lid.', 'catalogue_images/animal_puzzle_activity_set.jpg', '2018-01-07'),
(31, 'Biology', 'Early Childhood 3-6', 24, 1, '562700', 'Botany Cabinet: Nomenclature Cards', '16.50', 'Two sets of 18 leaf shapes on cards. One set with separate labels and one control set labeled at the bottom.', 'catalogue_images/botany_cabinet_nomenclature_cards.jpg', '2018-01-07'),
(33, 'Geography', 'Early Childhood 3-6', 25, 1, '017901', 'Four Maps Of Europe', '171.60', 'The child explores country names, capital names and national flags with this set of 4 maps. Consists of 3 control maps and 1 working map - a control map for country names, a control map for capital names and a control map for national flags. The working map has holes for pin flags. Included are a set of green pin flags for the country names, a set of red pin flags for the capital names, and a set of national flag pins. Self-adhesive name labels for the country and capital pin flags are also included.', 'catalogue_images/four_maps_of_europe.jpg', '2018-01-07'),
(34, 'Geography', 'Early Childhood 3-6', 26, 1, '078000', 'Large Chart Of The World', '248.50', 'A large chart made of a coated fabric measuring 130 x 280 cm. The chart is designed for children to have an interactive experience with the world while they learn. They can sit on the chart while laying out word cards, animals or pictures belonging to the different world parts.', 'catalogue_images/large_chart_of_the_world.jpg', '2018-01-07'),
(35, 'Geography', 'Early Childhood 3-6', 27, 1, '022900', 'Land Form Cards', '27.70', '10 plastic cards illustrating the different land and water form shapes. These cards (20 x 20 cm) match the land and water form trays, and can be used for the abstraction and naming of the land and water forms.', 'catalogue_images/land_form_cards.jpg', '2018-01-07'),
(36, 'Geography', 'Early Childhood 3-6', 28, 1, '023600', 'Puzzle Map: The United States', '161.20', 'Through sensorial activities with the Puzzle Maps, the children begin to build their knowledge of world geography. The silkscreened maps are laser cut. Laser cutting insures accuracy and the availability of replacement pieces. Specially designed knobs on each puzzle piece are positioned on the location of the capitals of the countries and states.', 'catalogue_images/puzzle_map_the_united_states.jpg', '2018-01-07'),
(39, 'Geography', 'Early Childhood 3-6', 29, 1, '0233A0', 'Flag Stand Of North & South America', '210.20', 'A wooden flag stand with the national flags of each of the countries.', 'catalogue_images/flag_stand_of_north_south_america.jpg', '2018-01-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
