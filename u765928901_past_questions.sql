-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 29, 2024 at 01:03 PM
-- Server version: 10.6.15-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u765928901_past_questions`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_exams`
--

CREATE TABLE `access_exams` (
  `id` int(11) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `qualification` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `question` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `access_exams`
--

INSERT INTO `access_exams` (`id`, `course_name`, `qualification`, `year`, `question`) VALUES
(1, 'cpp', 'HND', '2010', 'hci21l200.pdf'),
(2, 'java', 'Btech', '2023', 'hci21l200.pdf'),
(3, 'hci', 'Btech', '2023', 'hci21l200.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `access_practice_questions`
--

CREATE TABLE `access_practice_questions` (
  `id` int(11) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `question` varchar(255) NOT NULL,
  `optionA` varchar(250) NOT NULL,
  `optionB` varchar(250) NOT NULL,
  `optionC` varchar(250) NOT NULL,
  `optionD` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `explaination` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `access_practice_questions`
--

INSERT INTO `access_practice_questions` (`id`, `course_name`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `answer`, `explaination`) VALUES
(3, 'maths.obj', ' What is the sum of 130+125+191?', '335', '448', '446', '426', 'C', ''),
(4, 'maths.obj', ' If we minus 712 from 1500, how much do we get?', '788', '778', '768', '758', 'A', ''),
(5, 'maths.obj', ' If we minus 712 from 1500, how much do we get?', '788', '778', '768', '758', 'A', ''),
(6, 'maths.obj', ' 50 times of 8 is equal to:', '80', '400', '800', '4000', 'B', ''),
(7, 'maths.obj', '110 divided by 10 is:', '11', '10', '5', 'none of the above', 'A', ''),
(8, 'maths.obj', ' 20+(90÷2) is equal to:', '50', '55', '65', '60', 'C', ''),
(9, 'maths.obj', 'The product of 82 and 5 is:', '400', '410', '420', 'none of the above', '', ''),
(10, 'maths.obj', 'Find the missing terms in multiple of 3: 3, 6, 9, __, 15', '10', '11', '12', '13', 'C', ''),
(11, 'maths.obj', ' Solve 24÷8+2.', '5', '6', '8', '12', '', ''),
(12, 'maths.obj', ' Solve: 300 – (150×2)', '150', '100', '50', '0', 'D', ''),
(13, 'maths.obj', 'The product of 121 x 0 x 200 x 25 is', '1500', '0', '4000', 'none of the above', 'B', ''),
(14, 'maths.obj', ' What is the next prime number after 5?', '6', '7', '9', '11', 'B', ''),
(15, 'maths.b', 'The circumference of the circle is also sometimes called:', '.', '.', '.', '.', 'Perimeter of a circle', '.'),
(16, 'maths.b', '13: 90 – 35 is equal to:', '.', '.', '.', '.', '55', '.'),
(17, 'maths.b', ' 72 divided by 8 is equal to:', '.', '.', '.', '.', '9', '.'),
(18, 'maths.b', ' How many sides does a decagon have?', '.', '.', '.', '.', 'Ten', '.'),
(19, 'maths.b', ' Is -5 an integer? Yes or No.', '.', '.', '.', '.', 'Yes', '.'),
(20, 'maths.b', ' The value of pi is equal to:', '.', '.', '.', '.', ': 22/7 or 3.14', '.'),
(21, 'maths.b', ' 9 x 7 is equal to:', '.', '.', '.', '.', '63', '.'),
(22, 'maths.b', 'Is triangle a two-dimensional or three-dimensional shape?', '.', '.', '.', '.', 'A two-dimensional shape\r\n\r\n', '.'),
(23, 'maths.b', ' An equilateral triangle has two of its sides equal. True or false?', '.', '.', '.', '.', 'False', '.'),
(24, 'maths.b', ' 10 is a natural number. True or false?', '.', '.', '.', '.', 'True', '.'),
(25, 'maths.b', '22: -10 is a whole number. True or false?', '.', '.', '.', '.', '22: -10 is a whole number. True or false?', '.'),
(26, 'maths.b', '8 raised to the power 0 is equal to:', '.', '.', '.', '.', '1\r\n\r\n80 = 1', '.'),
(27, 'maths.b', 'The largest 4 digit number is:', '.', '.', '.', '.', '9999', '.'),
(28, 'maths.b', 'e smallest 4-digit number is:', '.', '.', '.', '.', '1000', '.'),
(29, 'maths.b', ' The square of 8 is equal to:', '.', '.', '.', '.', '64', '.'),
(30, 'maths.b', ' The square root of 5 is:', '.', '.', '.', '.', '2.23', '.'),
(31, 'maths.b', ' 3 is a perfect square. True or False?', '.', '.', '.', '.', 'False', '.'),
(32, 'maths.b', ' Cube of 5 is equal to:', '.', '.', '.', '.', '125', '.'),
(33, 'maths.b', ' Cube root of 1331 is:', '.', '.', '.', '.', '11\r\n1331 = 11 x 11 x 11 = 113\r\n\r\n', '.'),
(34, 'maths.b', ' 27 is a perfect cube. True or False?', '.', '.', '.', '.', 'True\r\n\r\n27 = 3 x 3 x 3= 33', '.'),
(35, 'maths.b', ' A square has all its angles equal to:', '.', '.', '.', '.', ' 90 degrees', '.'),
(36, 'maths.b', ' The area of rectangle is equal to:', '.', '.', '.', '.', 'Length x Breadth', '.'),
(37, 'maths.b', ' If a is the side of cube, then the volume of the cube is:', '.', '.', '.', '.', 'a3', '.'),
(38, 'maths.b', 'A regular polygon has all its sides:', '.', '.', '.', '.', 'Equal', '.'),
(39, 'maths.obj', ' What is three fifth of 100?', '3', '5', '20', '60', 'D', ''),
(40, 'maths.obj', ' 121 Divided by 11 is ', '11', '10', '19', '18', 'A', ''),
(41, 'maths.obj', '60 Times of 8 Equals to', '480', '300', '250', '400', 'A', ''),
(42, 'maths.obj', ' Find the Missing Term in Multiples of 6 : 6, 12, 18, 24, _, 36, 42, _ 54, 60.', '32, 45', '30, 48', '24, 40', '25, 49', 'B', ''),
(43, 'maths.obj', 'What is the Next Prime Number after 7 ?', '13', '12', '14', '11', 'D', ''),
(44, 'maths.obj', 'The Product of 131 × 0 × 300 × 4', '11', '0', '46', '45', 'B', ''),
(45, 'maths.obj', 'Solve 3 + 6 × ( 5 + 4) ÷ 3 - 7', '11', '16', '14', '15', 'C', ''),
(46, 'maths.obj', ' Solve 23 + 3 ÷ 3', '24', '25', '26', '27', 'A', ''),
(47, 'maths.obj', 'What is 6% Equals to', '0.06', '0.6', '0.006', '0.0006', 'A', ''),
(48, 'maths.obj', 'How Many Years are there in a Decade?', '5 years ', '10 years', '15 years', '20 years', 'B', ''),
(49, 'maths.obj', ' How Many Months Make a Century?', '12', '120', '1200', '12000', 'C', ''),
(50, 'maths.obj', 'Priya had 16 Red Balls, 2 Green Balls, 9  Blue Balls, and 1 Multicolor Ball. If He Lost 9 Red Balls, 1 Green Ball, and 3 Blue Balls. How Many Balls would be Left?', '15', '11', '28', '39', 'A', ''),
(51, 'maths.obj', ' Add the Decimals 5.23 + 8.79', '14.02', '14.19', '14.11', '14.29', 'A', ''),
(52, 'maths.obj', 'How Many Months Have 120 Days?', '2 months', '4 months', '11 months', '12 months ', 'B', ''),
(53, 'maths.obj', 'How Many Sides are there in a Decagon?', '7', '8', '9', '10', 'D', ''),
(54, 'maths.obj', 'What Number Comes Before 9019?', '9098', '9091', '9097', 'none of the above', 'D', ''),
(55, 'maths.obj', 'What is the product of 121 x 0 x 20 x 2.5 - ', '6050', '0', '2,420', 'none of the above', 'B', ''),
(56, 'maths.obj', ' Look at this series: 36, 34, 30, 28, …, 22 What number should come to fill in the blank space', '25', '24', '26', 'none of the above', '', ''),
(57, 'maths.obj', ' 27 is a perfect cube. If true then what is the perfect cube of 27? ', '9', '6', '3', '27 is not a perfect cube', 'C', ''),
(58, 'maths.obj', 'If x + 6 = 9, then 3x + 1 =', '3', '9', '10', '46', 'C', ''),
(59, 'maths.obj', ' Bill is ten years older than his sister. If Bill was twenty-five years of age in 1983, in what year could he have been born?', '1948', '1953', '1958', '1963', 'C', ''),
(60, 'maths.obj', 'What is the approximate value of the square root of 1596?', '10', '20', '30', '40', 'D', ''),
(61, 'maths.obj', ' If x is a positive integer in the equation 12x = q, then q must be', 'a positive even integer.', 'a negative even integer.', 'zero', 'a positive odd integer.', 'A', ''),
(62, 'maths.obj', ' What is 2 x 5?', '5', '3', '29', '10', 'D', ''),
(63, 'maths.obj', 'What is - 15 + 15?', '30', '18', '0', '-30', 'C', ''),
(64, 'maths.obj', 'What is 253 x 34?', '8602', '1255', '5455', '55566', 'A', ''),
(65, 'maths.obj', 'What is 250 x 4?', '750', '1000', '10000', '500', 'B', ''),
(66, 'maths.obj', 'What is 76 x 6 - 24?', '432', '98', '565', '222', 'A', ''),
(67, 'maths.obj', ' What is 7291 + 8830?', '16121', '10', '3333', '95554', 'A', ''),
(68, 'maths.obj', '', '56', '34', '21', ' 26', 'D', ''),
(69, 'maths.obj', 'What is 372910/5?', '745122', '74589', '74582', '3232', 'C', ''),
(70, 'maths.obj', 'What is 761 x 28?', '23244', '21308', '213865', '2321', 'B', ''),
(71, 'maths.obj', 'What is -45 + 55?', '10', '19', '14', '426', 'A', ''),
(72, 'maths.obj', ' If x is a set and the set contains an integer which is neither positive nor negative then the set x is ____________.', 'Set is Empty', 'Set is Non-empty', 'Set is Finite.', 'Set is both Non- empty and Finite.', 'D', ''),
(73, 'maths.obj', 'If x ∈ N and x is prime, then x is ________ set.', 'Infinite set', 'Finite set', 'Empty set', 'Not a set', 'A', ''),
(74, 'maths.obj', 'If x is a set and the set contains the real number between 1 and 2, then the set is ________.', 'Empty set', 'Finite set', 'Infinite set', 'None of the mentioned', 'C', ''),
(75, '', '', '{1, 2}', '{1, 2, 3}', '{1}', 'All of the mentioned', 'D', ''),
(76, 'maths.obj', 'Convert the set x in roster form if set x contains the positive prime number, which divides 72.', '{∅}', '{2, 3}', '{2, 3, 7}', '{3, 5, 7}', 'B', ''),
(77, 'maths.obj', 'Power set of empty or Null set has exactly _________ subset.', 'One', 'Two', 'Zero', 'Three', 'A', ''),
(78, 'maths.obj', 'What is the Cartesian product of set A and set B, if the set A = {1, 2} and set B = {a, b}?', '{ (1, a), (1, b), (2, a), (b, b) }', '{ (1, 1), (2, 2), (a, a), (b, b) }', '{ (1, a), (2, a), (1, b), (2, b) }', '{ (1, 1), (a, a), (2, a), (1, b) }', 'C', ''),
(79, 'maths.obj', 'The members of the set S = {x | x is the square of an integer and x < 100} is ________________', '{0, 2, 4, 5, 9, 55, 46, 49, 99, 81}', '{1, 4, 9, 16}', '{0, 1, 4, 9, 16, 25, 36, 49, 64, 81}', '{0, 1, 4, 9, 25, 36, 49, 123}', 'C', ''),
(80, 'maths.obj', 'The intersection of the sets {1, 2, 8, 9, 10, 5} and {1, 2, 6, 10, 12, 15} is the set _____________', '{1, 2, 10}', '{5, 6, 12, 15}', '{2, 5, 10, 9}', 'sd) {1, 6, 12, 9, 8}', 'A', ''),
(81, 'maths.obj', 'The difference of {1, 2, 3, 6, 8} and {1, 2, 5, 6} is the set ____________', '{1, 3}', '{5, 6, 8}', '{3, 8}', '{2, 6, 5}', 'C', ''),
(82, 'maths.obj', ' If n(A) = 20 and n(B) = 30 and n(A U B) = 40 then n(A ∩ B) is?', '20', '30', '40', '10', 'D', ''),
(83, 'maths.obj', ' Let the players who play cricket be 12, the ones who play football 10, those who play only cricket are 6, then the number of players who play only football are ___________, assuming there is a total of 16 players.', '16', '8', '4', '10', 'C', ''),
(84, 'maths.obj', 'Which among the following can be taken as the discrete object?', 'People', 'Rational numbers', 'Integers', 'All of the mentioned', 'D', ''),
(85, 'maths.obj', '', 'X = {5, 6} and Y = {6}', 'X = {5, 6, 8, 9} and Y = {6, 8, 5, 9}', 'X = {5, 6, 9} and Y = {5, 6}', 'X = {5, 6} and Y = {5, 6, 3}', 'B', ''),
(86, 'maths.obj', ' The cardinality of the Power set of the set {1, 5, 6} is______________.', '5', '6', '8', '10', 'C', ''),
(87, 'maths.obj', ' The Cartesian product of the (Set Y) x (Set X) is equal to the Cartesian product of (Set X) x (Set Y) or Not?', 'Yes', 'No', 'None of the above', 'I Don\"t know', 'B', ''),
(88, 'maths.obj', 'How many elements in the Power set of set A= {{Φ}, {Φ, {Φ}}}?', '4 elements', '2 elements', '2 elements', '5 elements', 'A', ''),
(89, 'maths.obj', ' Mathematics can be broadly categorized into how many types?', '3 types', '2 types', '5 types', '4 types', 'B', ''),
(90, 'maths.obj', 'Which of the following function is not a mathematics function?', 'many to one', 'many to one', 'one to one', 'All of the mentioned', 'B', ''),
(91, 'maths.obj', 'Which of the following function is also referred to as an injective function?', 'Many-to-one', 'Onto', 'One-to-One', 'None of the mentioned', 'C', ''),
(92, 'maths.obj', ' How many injections are defined from set A to set B if set A has 4 elements and set B has 5 elements?', '24', '10', '144', '120', 'D', ''),
(93, 'maths.obj', ' The function (gof) is _________ , if the function f and g are onto function?', 'Into function', 'one to one function', 'onto function', 'one-to-many function', 'C', ''),
(94, 'maths.obj', 'How many bytes are needed for encoding 2000 bits of data?', '5 Byte', '2 bytes', '4 bytes', '8 bytes', 'B', ''),
(95, 'maths.obj', ' The cardinality of the set of even positive integers less than 20 is__________?', '8', '10', '9', '12', 'C', ''),
(96, 'maths.obj', ' If X = {2, 8, 12, 15, 16} and Y= {8, 16, 15, 18, 9} then union of X and Y is___________.', '{2, 8, 12, 15, 16}', '{ 8, 16, 15}', '{8, 16, 15, 18, 9}', '{2, 8, 9, 12, 15, 16, 18}', 'D', ''),
(97, 'maths.obj', ' What is Floor function?', 'It maps the real number to the greatest previous integer', 'It maps the real number to the smallest previous integer', 'It maps the real number to the smallest following integer', 'None of the mentioned', 'B', ''),
(98, 'maths.obj', 'What is Ceil function?', 'It maps the real number to the greatest previous integer', 'It maps the real number to the smallest previous integer', 'It maps the real number to the smallest following integer', 'None of the mentioned', 'C', ''),
(99, 'maths.obj', 'What is the value of Floor(8.4) + Ceil(9.9)?', '18', '18', '20', '17', 'A', ''),
(100, 'maths.obj', ' If a and b are two positive numbers that are less than one, then the maximum value of Floor(a+b) and Ceil(a+b) is?', 'Floor(a+b) is 0 and Ceil(a+b) is 1.', 'Floor(a+b) is 1 and Ceil(a+b) is 0.', 'Floor(a+b) is 1 and Ceil(a+b) is 2.', 'Floor(a+b) is 2 and Ceil(a+b) is 1', 'C', ''),
(101, 'maths.obj', 'The number of reflexive closure of the relation {(0,1), (1,1), (1,3), (2,1), (2,2), (3,0)} on the set {0, 1, 2, 3} is________.', '256', '36', '6', '60', 'C', ''),
(102, 'maths.obj', 'The number of transitive closure exists in the relation R = {(0,1), (1,2), (2,2), (3,4), (5,3), (5,4)} where {1, 2, 3, 4, 5} ∈ A is__________.', '{(0,1), (0,2), (1,2), (2,2), (3,4), (5,3), (5,4)}', '{(0,0), (4,4), (5,5), (1,1), (2,2), (3,3)}', '{(0,1), (1,2), (2,2), (3,4)}', '{(0,1), (5,3), (5,4), (1,1), (2,2)}', 'A', ''),
(103, 'maths.obj', ' Which statement is incorrect if X and Y are the two non-empty relations on the set S.', 'If X and Y are transitive, then the intersection of X and Y is also transitive.', 'If X and Y are reflexive, then the intersection of X and Y is also reflexive.', 'If X and Y are symmetric, then the union of X and Y is not symmetric.', 'If X and Y are transitive, then the union of X and Y is not transitive.', 'D', ''),
(104, 'maths.obj', 'Which option is the negation of the bits \"1001011\"?', '11011011', '10110100', '0110100', '1100100', 'C', ''),
(105, 'maths.obj', ' Boolean algebra deals with how many values.', 'It deals with only four discrete values.', 'It deals with only five discrete values.', 'It deals with only three discrete values.', 'It deals with only two discrete values.', 'D', ''),
(106, 'maths.obj', ' Which search compares each element with the searching element till not found?', 'Merge search', 'Sequential Search', 'Binary search', 'none of the mentioned', 'B', ''),
(107, 'maths.obj', ' If a user wants to sort the unsorted list of n elements, then the insertion sort starts with which element of the list.', 'First element of the list', 'the second element of the list', 'the Third element of the list', 'the Fourth element of the list', 'B', ''),
(108, 'maths.obj', ' What is the complexity of the bubble sort algorithm?', 'O(n2)', 'O(n)', 'O(log n)', 'O(n log n)', 'A', ''),
(109, 'maths.obj', 'What is the worst case of a linear search algorithm?', 'When the searching item is present in the middle of the list.', 'When the searching item is the last element in the list.', 'When the searching is not available in the list.', 'When the searching item is the last element in the list or is not present in the list.', 'D', ''),
(110, 'maths.obj', ' Which algorithm uses the previous outputs for finding the new outputs?', 'Dynamic Programming algorithms', 'Divide and Conquer algorithm', 'Brute Force algorithm', 'None of them', 'A', ''),
(111, 'maths.obj', 'Which option is correct for representing an algorithm?', 'Pseudo codes', 'Flow charts', 'Statements in the common language', 'All of them', 'D', ''),
(112, 'maths.obj', ' Which case does not exist in complexity theory?', 'Average case', 'Null case', 'Best case', 'Worst Case', 'B', ''),
(113, 'eng.obj', 'They ______________ her and trusted her for years', 'know', 'had known', 'knew', 'known', 'C', ''),
(114, 'eng.obj', 'Every morning she ______________ up early and gets ready for work.\r\n\r\n', 'is waking', 'has woken', 'had woken', 'wakes', 'D', ''),
(115, 'eng.obj', 'People ______________ walk on grass.', 'couldn', 'needn\"t', 'mustn\"t', 'may not', 'C', ''),
(116, 'eng.obj', 'World war I and World war II took place ______________ the 20th century.', 'on', 'in', 'at', 'into', 'B', ''),
(117, 'eng.obj', 'They built this temple 3,000 years ago. This must ______________ a great civilization.', 'not have been', 'was', 'has been', 'has been have been', 'D', ''),
(118, 'eng.obj', 'I wanted to go to the park, ______________ my mother refused.', 'but', 'or', 'so', 'and', 'A', ''),
(119, 'eng.obj', 'Change the active voice in to passive voice:I will clean the house every Saturday. The house ______________ by me every Saturday.', 'cleaned', 'will cleaned', 'will be cleaned', 'None of the above', 'C', ''),
(120, 'eng.obj', 'This must not happen again, ______________ you will be dismissed.', 'or', 'but', 'and', 'so', 'A', ''),
(121, 'eng.obj', 'If A is equal to B and B is equal to C, ______________ A is equal to C.', 'than', 'then', 'so', 'none of the above', 'B', ''),
(122, 'eng.obj', 'French people love cooking, ______________ the English dont seem very interested.', 'When', 'Whenever', 'where', 'Whereas', 'D', ''),
(123, 'eng.obj', '______________ is the one who starts the communication.', 'sender', 'receiver', 'feedback', 'noise', 'A', ''),
(124, 'eng.obj', '_____________ is the manner in which the encoded message is transmitted.', 'Message', 'Voice', 'Media', 'Channel', 'C', ''),
(125, 'eng.obj', 'The receiver confirms to the sender that he has received the message and understood it through ______________.', 'feedback', 'decoding', 'encoding', 'receiving', 'A', ''),
(126, 'eng.obj', 'There are ______________ C\"s in Communication principles.', 'eight', 'seven', 'nine', 'five', 'B', ''),
(127, 'eng.obj', 'Most conflict is the result of ______________ communication.', 'effective', 'misunderstood', 'ineffective', 'spontaneous', 'B', ''),
(128, 'eng.obj', 'A ______________ is a unit of sound.', 'syllable', 'letter', 'spelling', 'stress', 'A', ''),
(129, 'eng.obj', 'Stressed words are considered as ______________.', 'content words', 'function words', 'non-stressed words', 'unaccented', 'A', ''),
(130, 'eng.obj', 'The second rising tune is ______________.', 'the glide-up', 'the glide-down', 'the dive', 'the take-off', 'D', ''),
(131, 'eng.obj', '______________ are powerful, they can be weapons of conflicts and confusion.', 'feedback', 'noise', 'words', 'media', 'C', ''),
(132, 'eng.obj', 'With the change of ______________ different meanings can be expressed.', 'pitch', 'voice', 'accent', 'sounds', 'A', ''),
(133, 'eng.obj', 'Attitudinal functions allow us to express ______________.', 'accent', 'emotions', 'grammar', 'new information', 'B', ''),
(134, 'eng.obj', 'The listener is able to recognise the grammar in ______________ function.', 'attitudinal', 'accentual', 'grammatical', 'discourse', 'C', ''),
(135, 'eng.obj', 'Which of these should be kept in mind while receiving a call?', 'Be rude, if the caller is rude.', 'If the information is not readily available, take his phone number and call back.', 'A message can be noted in hints.', 'You can be rude to a person if it\"s a wrong connection.', 'B', ''),
(136, 'eng.obj', 'Euphemism helps writers to convey those ideas which have become a social ______________ and are too embarrassing to mention directly.', 'Norm', 'Taboo', 'Custom', 'Idealogy', 'B', ''),
(137, 'eng.obj', 'Which of these is used after a nominative absolute?', 'Colon', 'Comma', 'Full Stop', 'Question mark', 'B', ''),
(138, 'eng.obj', '______________ gave the service of dabbawalahs its highest quality rating of Sigma.', 'The Times of India', 'Times Magazine', 'Forbes Magazine', 'India Today', 'C', ''),
(139, 'eng.obj', '\"Travel by train\" is delightful piece of ______________.', 'Drama', 'Poetry', 'Novel', 'Prose', 'D', ''),
(140, 'eng.obj', 'Dabbawalas work with ______________', 'clarity and speed', 'precision and speed', 'carefulness and swiftness', 'precision and sharp', 'B', ''),
(141, 'eng.obj', 'Whom does the \"playmate\" refer to in the poem \"Paper Boats\"?', 'A sister', 'A close friend', 'A distant relative', 'An imaginary friend', 'D', ''),
(142, 'eng.obj', '______________ I ask a question? Yes, of course.', 'may', 'must', 'should', 'will', 'A', ''),
(143, 'eng.obj', 'Last year, there were a large number of mangoes ______________ the tree.', 'in', 'at', 'with', 'on', 'D', ''),
(144, 'eng.obj', 'The tress here are really beautiful ______________ the spring.', 'in', 'at', 'during', 'during', 'C', ''),
(145, 'eng.obj', 'I live ______________ the river.', 'across', 'with', 'from', 'no', 'A', ''),
(146, 'eng.obj', 'The Prime Minister will appear ______________ television tonight.', 'on', 'in', 'at', 'none of the above', 'A', ''),
(147, 'eng.obj', 'The Prime Minister will appear ______________ television tonight.', 'on', 'in', 'at', 'none of the above', 'A', ''),
(148, 'eng.obj', 'I like to eat cookies ______________ I like to drink milk.', 'that', 'for', 'and', 'after', 'C', ''),
(149, 'eng.obj', '______________ all her friends were on holiday, she was alone.', 'Because of', 'Since', 'For', 'because', 'B', ''),
(150, 'eng.obj', 'We went out ______________ the cold weather.', 'besides', 'although', 'However', 'despite', 'D', ''),
(151, 'eng.obj', '______________ is the idea, information, view etc, that is generated by the sender.', 'Encoding', 'Message', 'Channel', 'Noise', 'B', ''),
(152, 'eng.obj', '_____________ is one who initiates the communication.', 'receiver', 'spectator', 'audience', 'sender', 'D', ''),
(153, 'eng.obj', 'Communication is a ______________ process.', 'three-way', 'four-way', 'two-way', 'five-way', 'C', ''),
(154, 'eng.obj', '______________ forms of speech in the classroom is an integral part of pupils\" success.', 'Correct', 'generalIncorrect', 'Improper', 'Invalid', 'C', ''),
(155, 'eng.obj', '______________ refers to the music of the English language.', 'Syllables and stress', 'Intonation and stress', 'Sounds and symbols', 'Accent and sounds', 'B', ''),
(156, 'eng.obj', '____________ builds a strong business and personal relationships.', 'Effective Communication', 'Vague Communication', 'Oral Communication', '', 'A', ''),
(157, 'eng.obj', '\"Eat\" is a ______________ syllable stressed word.', 'two', 'one', 'three', 'four', 'B', ''),
(158, 'eng.obj', 'One should be quick learner and tend to acquire ______________ pronunciation.', 'good', 'good', 'ineffective', 'improper', 'A', ''),
(159, 'eng.obj', 'The Diction exercises will help one learn how to ______________ clearly.', 'write', 'speak', 'read', 'listen', 'B', ''),
(160, 'eng.obj', 'The secondary source of information comprised of ______________', 'Text books and research monographs.', 'Subject periodicals and encyclopedias.', 'indexing and abstracting periodicals.', 'Bibliography and patents.', 'C', ''),
(161, 'eng.obj', 'Choose the correct statement:', 'My aunt who lives in Mumbai is a doctor.', 'My aunt, who lives in Mumbai, is a doctor.', 'My aunt, who lives in Mumbai is a doctor.', 'My aunt who lives in Mumbai, is a doctor.', 'B', ''),
(162, 'eng.obj', 'Ragunath Medge is the ______________ of Nutan Mumbai Tiffin Box suppliers charity trust.', 'Secretary', 'Member', 'Treasurer', 'President', 'D', ''),
(163, 'eng.obj', 'The ______________ are described as those who insist on keeping the windows open during the cold and desolate day.', 'noisy children', 'cranks', 'mighty sleepers', 'heavy carriers', 'B', ''),
(164, 'eng.obj', 'Why does the poet call the last stage to be \"second childishness\" of a person?', 'He behaves like a child', 'He has to be taken care again like a child', 'He keeps forgetting everything', 'He is immature in behavior', 'B', ''),
(165, 'eng.obj', 'Tagore\"s poetry had inspiration from traditional vaishnava folk and was often ______________.', 'metaphysical', 'contemporary', 'idealistic', 'deeply mystical', 'D', ''),
(166, 'eng.obj', 'Madam Loisel was ______________ at the party organized by the Ministry of Education', 'a complete success', 'a complete failure', 'lovely person', 'lovable character', 'B', ''),
(167, '', '', '', '', '', '', '', ''),
(168, '', '', '', '', '', '', '', ''),
(169, 'eng.obj', 'Who announced the entry of the cobra into the compound?', 'Dasa', 'The neighbor', 'The lady servant', '', 'D', ''),
(170, 'eng.obj', 'Wait a minute, I ______________ this box for you.', 'carry', 'will carry', 'carried', 'was carrying', 'B', ''),
(171, 'eng.obj', 'The whole day the boys ______________ to the cricket commentary.', 'Listen', 'will listen', 'has listened', 'are listening', 'D', ''),
(172, 'eng.obj', 'It\"s wet and rainy outside today. You ______________ go out without an umbrella.', 'shouldn\"t', 'won\"t', 'dont  have to', 'should', 'A', ''),
(173, 'eng.obj', '______________ you know where Ram lives?', 'does', 'do', 'should', 'have', 'A', ''),
(174, 'eng.obj', 'I have been waiting ______________ the bus.', 'near', 'from', 'since', 'for', 'D', ''),
(175, 'eng.obj', 'You won\"t pass the test ______________ you study.', 'when', 'if', 'but', 'unless', 'D', ''),
(176, 'eng.obj', 'Change into passive:The salt-water corroded the metal beams. The metal beams ______________ by the salt-water.', 'was corroded', 'corroded', 'has corroded', 'were corroded', 'D', ''),
(177, 'eng.obj', 'I like houses ______________ the river.', 'at', 'with', 'by', 'from', 'C', ''),
(178, 'eng.obj', 'F1 races are ______________ fast that the wheels of their cars have to be special.', 'so', 'such', 'very much', 'much', 'A', ''),
(179, 'eng.obj', '______________ is the act of conveying information.', 'Listening', 'Observing', 'Communication', 'Questioning', 'C', ''),
(180, 'eng.obj', 'Communication often hold highly influential positions as', 'spectators', 'receiver', 'journalists', 'sender', 'C', ''),
(181, 'eng.obj', 'Successful communication takes place when the receiver ______________ interprets the sender\"s message.', 'wrongly', 'ironically', 'correctly', 'actively', 'C', ''),
(182, 'sci.obj', 'Managers need to deliver ______________ achievable goals to both teams and individuals.', 'unclear', 'clear', 'hazy', 'improper', 'B', ''),
(183, 'eng.obj', 'By eliminating ______________ words, you can help to make ideas stand out.', 'necessary', 'repetitive', 'unnecessary', 'correct', 'C', ''),
(184, 'eng.obj', '______________ refers to the emphasis laid on specific syllables of a word or a specific word in a sentence.', 'Syllables', 'Phonemes', 'Stress', 'Letters', 'C', ''),
(185, 'eng.obj', '______________ words are the key to excellent pronunciation and understanding of English.', 'Stressed', 'Function', 'unaccented', 'non-stressed', 'A', ''),
(186, 'eng.obj', 'The Glide-down are used for ______________ statements.', 'complete', 'incomplete', 'indefinite', 'imperfect', 'A', ''),
(187, 'eng.obj', 'Message is ______________ when it contains all facts the listener needs.', 'confusing', 'complete', 'fluent', 'incomplete', 'B', ''),
(188, 'eng.obj', '______________ are considered as Function Words.', 'Stressed', 'Accented', 'Non-stressed', 'Content', 'C', ''),
(189, 'eng.obj', 'The vowel sounds are ______________ in number.', 'twenty', 'six', 'fifteen', 'eighteen', 'A', ''),
(190, 'eng.obj', 'Which of these is not considered in a telephonic conversation?', 'The tone of the speaker', 'The volume of the speaker', 'Body language', 'The emotional content of the communication', 'C', ''),
(191, 'eng.obj', '\"Kick the bucket\" is an Euphemism that describes', 'death of a person', 'illness of a person', 'that the person is not available at the moment', 'kicking the bucket', 'A', ''),
(192, 'eng.obj', 'Year book are also known as ______________', 'Hand book', 'Annual', 'Directory', 'Dictionary', 'B', ''),
(193, 'eng.obj', 'Intonation is the first step to be perceived by ear rather than the ______________ of an utteranc', 'oral content', 'verbal content', 'speech', 'monologue', 'B', ''),
(194, 'eng.obj', 'Where was J.B.Priestley born?', 'Bradford', 'Manchester', 'Liverpool', 'Edinburgh', 'A', ''),
(195, 'eng.obj', 'Rabindranath Tagore composed the Nation Anthem for ______________ & ______________.', 'India and Bangladesh', 'India and Pakistan', 'India and Sri Lanka', 'India and China', 'A', ''),
(196, 'eng.obj', 'What is the unique feature of the success of the Mumbai dabbawalas business?', 'Mumbai\"s history', 'Mumbai\"s economy', 'Mumbai\"s geography', 'Mumbai\"s society', 'C', ''),
(197, 'eng.obj', 'Tagore won the Nobel Prize in Literature in ______________.', '1913', '1914', '1915', '1923', 'A', ''),
(198, 'eng.obj', 'The head master ______________ to talk to you.', 'want', 'wants', 'has wanted', 'None of the above', 'B', ''),
(199, 'eng.obj', 'A bomb scare ______________ a delay of the flight.', 'causing', 'cause', 'was caused', 'had caused', 'D', ''),
(200, 'eng.obj', 'If you want to learn to speak English fluently. You ______________ to work hard.', 'could', 'needn\"t', 'mustn\"t', 'need', 'D', ''),
(201, 'eng.obj', 'I borrowed a pen ______________ my classmate', 'to', 'from', 'with', 'through', 'B', ''),
(202, 'eng.obj', 'Change into passive: Everyone understands English. English ______________ by everyone.', 'is understood', 'has been understood', 'was understood', 'had understood', 'A', ''),
(203, 'eng.obj', 'This house has been empty ______________ several years.', 'towards', 'for', 'from', 'none of the above', 'B', ''),
(204, 'eng.obj', 'The diamond ring that her husband bought for her turned ______________ to be fake one.', 'in', 'of', 'out', 'none of the above', 'C', ''),
(205, 'eng.obj', 'Recipients of a message must be able to identfy the ______________.', 'receiver\"s intent', 'receiver\"s perception', 'sender\"s intent', 'Speaker', 'C', ''),
(206, 'eng.obj', '______________ refers to any obstruction that is caused by the sender.', 'Voice', 'Message', 'Speech', 'Noise', 'D', ''),
(207, 'eng.obj', 'In ______________ five W\"s should be checked.', 'conciseness', 'clarity', 'completeness', 'consideration', 'C', ''),
(208, 'eng.obj', 'The IPA or International Phonetic Alphabet is an alphabet of ______________.', 'letters', 'sounds', 'dialect', 'syllables', 'B', ''),
(209, 'eng.obj', 'The first rising tune is ______________.', 'the glide-up', 'the glide-down', 'the dive', 'the take -off', 'B', ''),
(210, 'eng.obj', 'A ______________ message saves time for both sender and receiver.', 'common', 'concise', 'intricate', 'confusing', 'B', ''),
(211, 'eng.obj', 'During conversation we should ______________ patiently and ______________ tactfully.', 'speak; listen', 'listen; speak', 'write; speak', 'listen; write', 'B', ''),
(212, 'eng.obj', 'The consonant sounds are ______________ in number.', 'twenty-two', 'twenty', 'twenty-three', 'twenty-four', 'D', ''),
(213, '', '', '\"B\"', '\"L\"', '\"K\"', '\"R\"', 'B', ''),
(214, 'eng.obj', '______________ means trying something new and different from your fashion comfort zone.', 'Mobile Community', 'Furlough Employees', 'Donning the idea', 'Donning the fedora', 'D', ''),
(215, 'eng.obj', 'Which of these is used between sentences which are grammatically independent?', 'Colon', 'Semicolon', 'Comma', 'Hyphen', 'A', ''),
(216, 'eng.obj', 'Explain a woeful ballad.', 'a love song', 'a happy song', 'a song of god', 'a sad song', 'D', ''),
(217, 'eng.b', 'Write a letter to your friend in another school telling him or her about your future career and how it will be beneficial to your country.', '.', '.', '.', '.', 'WRITE THE ESSAY', '.'),
(218, 'eng.b', 'The National Scholarship Secretariat is organizing an essay competition on the topic: The menace of fake drugs in the society. Write your entry.', '.', '.', '.', '.', 'WRITE THE ESSAY', '.'),
(219, 'eng.b', 'As a former senior prefect, write a letter to the principal of your school on the occasion of its 60th anniversary celebration, congratulating him and offering three suggestions for the improvement of the school.', '.', '.', '.', '.', 'WRITE THE ESSAY', '.'),
(220, 'eng.b', 'A new principal has just been posted to your school. As the senior prefect, write a welcome address on behalf of the students, pointing out three areas of need in the school.', '.', '.', '.', '.', 'WRITE THE ESSAY', '.'),
(221, 'eng.b', 'Write a story which illustrates the saying: Uneasy lies the head that wears a crown.', '.', '.', '.', '.', 'WRITE THE ESSAY', '.'),
(222, 'eng.obj', 'Which of the following is NOT a singular indefinite pronoun?', 'these', 'someone', 'everyone', 'each', 'A', ''),
(223, 'eng.obj', 'Which of the following options is the antecedent in the sentence below?\r\n\r\nMy uncle opened his first business ten years ago, and he now owns three stores.', 'my', 'uncle', 'his', 'he', 'B', ''),
(224, 'eng.obj', 'Which singular noun requires that you add an es to the end to make it plural?', 'proof', 'fox', 'keyboard', 'sister-in-law', 'B', ''),
(225, 'eng.obj', 'To make the word key plural, you must', 'ass SS to the end', 'ass an S to the end', 'ass es to the end', 'do nathing', 'B', ''),
(226, 'eng.obj', 'Which pronoun or pronouns should be used to correctly fill in the blank in the following sentence?\r\nEvery child in the class finished all of _____ homework.\r\n', 'their', 'his or her', 'one\"s', 'All of the above', 'B', ''),
(227, 'eng.obj', 'Identify the error in the following sentence:\r\nThe lawyers held private meetings with all of their clients.', 'There is no error in this sentence', '', '', '', '', ''),
(228, 'eng.obj', 'Which pronoun would correctly fill in the blank in the following sentence?\r\nI have talked to your teachers and your bosses, and _____ think that you\"ve been doing a great job.', 'them', 'he', 'their', 'they', 'D', ''),
(229, 'eng.obj', 'Which pronoun would correctly fill in the blank in the following sentence?\r\nI think that either your husband or my cousins will bring _____ sound system to the party.', 'its', 'her', 'his', 'their', 'B', ''),
(230, 'eng.obj', 'Identify the simple subject in the following sentence:\r\nThe quiz had ten questions.', 'The quiz', 'quiz', 'questions', 'ten questions', 'B', ''),
(231, 'eng.obj', 'Identify the complete subject in the following sentence:\r\nThe red truck had a flat tire.', 'truck', 'tire', 'The red truck', 'red truck', 'C', ''),
(232, 'eng.obj', 'Which of the following nouns is a proper noun?', 'cat', 'fireman', 'mountain', 'Central Park', 'D', ''),
(233, 'eng.obj', 'Consider this sentence:\r\nAlvin studied for his test after going swimming.\r\nWhich of the following words from this sentence is a noun?', 'after', 'Alvin', 'for', 'studied', 'B', ''),
(234, 'eng.obj', 'Which pronoun could correctly fill in the blank in the following sentence?\r\nJim and _____ went to school.', 'me', 'us', 'them', 'i', 'D', ''),
(235, 'eng.obj', 'Which of the following pronouns is an objective case pronoun?', 'I', 'we', 'me', 'they', 'C', ''),
(236, 'eng.obj', 'Which of the following choices is the correct possessive pronoun to fill in the blank in the following sentence?\r\nThe teacher told me that the choice was _____.', 'her\"s', 'my', 'her', 'mine', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL,
  `student_id` varchar(250) NOT NULL,
  `lecturer_id` int(250) NOT NULL,
  `question_id` varchar(250) NOT NULL,
  `ans` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `fullname`, `code`, `student_id`, `lecturer_id`, `question_id`, `ans`) VALUES
(2, '', '', '1', 0, '2', 'A'),
(3, '', '', '1', 0, '3', 'D'),
(4, '', '', '1', 0, '5', 'A'),
(5, '', '', '1', 0, '6', 'B'),
(6, '', '', '1', 0, '7', 'D'),
(7, '', '', '1', 0, '1', 'A'),
(8, '', '', '1', 0, '2', 'A'),
(9, '', '', '1', 0, '3', 'D'),
(10, '', '', '1', 0, '5', 'A'),
(11, '', '', '1', 0, '6', 'A'),
(12, '', '', '1', 0, '7', 'A'),
(16, '', '', '1', 0, '5', 'A'),
(17, '', '', '1', 0, '6', 'A'),
(18, '', '', '1', 0, '7', 'D'),
(38, 'Ata Ahenkorah', '22', '16', 0, '1', 'A'),
(39, 'Ata Ahenkorah', '22', '16', 1, '5', 'B'),
(40, 'Ata Ahenkorah', '22', '16', 1, '8', 'C'),
(41, 'Ata Ahenkorah', '22', '15', 1, '2', 'A'),
(42, 'Ata Ahenkorah', '22', '15', 1, '6', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(11) NOT NULL,
  `lecturer_id` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL,
  `question` varchar(250) NOT NULL,
  `optionA` varchar(250) NOT NULL,
  `optionB` varchar(250) NOT NULL,
  `optionC` varchar(250) NOT NULL,
  `optionD` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `lecturer_id`, `course`, `code`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `answer`) VALUES
(1, '1', 'java', '001', 'What is java', 'processes', 'Louis Pasteur', 'crucible', 'GOD', 'A'),
(2, '1', 'java', '001', 'Give the syntax for java', 'pipette', 'chemistry', 'crucible', 'GOD', 'A'),
(3, '1', 'java', '001', 'Add two numbers in java', 'processes', 'chemistry', 'both a and b', 'GOD', 'D'),
(4, '1', 'java', '001', 'What is the new java', 'biology', 'chemistry', 'physics', 'geology', 'D'),
(5, '1', 'java', '001', 'What is java error?', 'processes', 'Louis Pasteur', 'crucible', 'geology', 'D'),
(6, '1', 'java', '001', 'What is debugging in Java', 'processes', 'chemistry', 'crucible', 'GOD', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_setup`
--

CREATE TABLE `assignment_setup` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignment_setup`
--

INSERT INTO `assignment_setup` (`id`, `title`, `code`) VALUES
(1, 'mid sem', '001'),
(2, 'End of Semester', '002');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `name`, `course`, `email`, `password`) VALUES
(1, 'Oppong', 'java', 'lecturer1', 'lecturer1'),
(2, 'Emmanuel', 'cpp', 'lecturer2', 'lecturer2');

-- --------------------------------------------------------

--
-- Table structure for table `practice_questions`
--

CREATE TABLE `practice_questions` (
  `id` int(11) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `question` varchar(2550) NOT NULL,
  `optionA` varchar(250) NOT NULL,
  `optionB` varchar(250) NOT NULL,
  `optionC` varchar(250) NOT NULL,
  `optionD` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `explaination` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `practice_questions`
--

INSERT INTO `practice_questions` (`id`, `course_name`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `answer`, `explaination`) VALUES
(1, 'java', '1. Who invented Java Programming?', 'Guido van Rossum', 'James Gosling', 'Dennis Ritchie', 'Bjarne Stroustrup', 'B', 'Java programming was developed by James Gosling at Sun Microsystems in 1995. James Gosling is well known as the father of Java.'),
(2, 'java', 'Which statement is true about Java?', ' Java is a sequence-dependent programming language', ' Java is a code dependent programming language', ' Java is a platform-dependent programming language', 'Java is a platform-independent programming language', 'D', 'Java is called ‘Platform Independent Language’ as it primarily works on the principle of ‘compile once, run everywhere’.'),
(3, 'java', 'Which component is used to compile, debug and execute the java programs?', 'JRE', 'JIT', 'JDK', 'JVM', 'C', 'JDK is a core component of Java Environment and provides all the tools, executables and binaries required to compile, debug and execute a Java Program.'),
(4, 'java', 'Which one of the following is not a Java feature?', ' Object-oriented', ' Use of pointers', 'Portable', 'Dynamic and Extensible', 'B', 'Explanation: Pointers is not a Java feature. Java provides an efficient abstraction layer for developing without using a pointer in Java. Features of Java Programming are Portable, Architectural Neutral, Object-Oriented, Robust, Secure, Dynamic and E'),
(5, 'java', 'Which of these cannot be used for a variable name in Java?', ' identifier & keyword', 'identifier', 'keyword', 'none of the mentioned', 'C', ' Keywords are specially reserved words that can not be used for naming a user-defined variable, for example: class, int, for, etc.\r\n'),
(6, 'java', 'Which of the following option leads to the portability and security of Java?', 'Bytecode is executed by JVM', 'The applet makes the Java code secure and portable', 'Use of exception handling', 'Dynamic binding between objects', 'A', 'he output of the Java compiler is bytecode, which leads to the security and portability of the Java code. It is a highly developed set of instructions that are designed to be executed by the Java runtime system known as Java Virtual Machine (JVM). Th'),
(7, 'java', 'Which of the following is not a Java features?', 'Which of the following is not a Java features?', 'Architecture Neutral', 'Use of pointers', 'Object-oriented', 'C', 'The Java language does not support pointers; some of the major reasons are listed below:\r\n\r\nOne of the major factors of not using pointers in Java is security concerns. Due to pointers, most of the users consider C-language very confusing and complex'),
(8, 'java', 'What should be the execution order, if a class has a method, static block, instance block, and constructor, as shown below?\r\n\r\npublic class First_C {  <br>\r\n      public void myMethod()   <br>\r\n    {  <br>\r\n    System.out.println(\"Method\");  <br>\r\n    }  <br>\r\n      \r\n    {  <br>\r\n    System.out.println(\" Instance Block\");  <br>\r\n    }  <br>\r\n          \r\n    public void First_C()  <br>\r\n    {  <br>\r\n    System.out.println(\"Constructor \");  <br>\r\n    }  <br>\r\n    static {  <br>\r\n        System.out.println(\"static block\");  <br>\r\n    }  <br>\r\n    public static void main(String[] args) {  <br>\r\n    First_C c = new First_C();  <br>\r\n    c.First_C();  <br>\r\n    c.myMethod();  <br>\r\n  }  <br>\r\n}   <br>', 'Instance block, method, static block, and constructor', 'Method, constructor, instance block, and static block', 'Static block, method, instance block, and constructor', 'Static block, instance block, constructor, and method', 'D', 'The static block will execute whenever the class is loaded by JVM.\r\nInstance block will execute whenever an object is created, and they are invoked before the constructors. For example, if there are two objects, the instance block will execute two ti'),
(9, 'java', 'What will be the output of the following program?<br>\r\npublic class MyFirst {  <br>\r\n      public static void main(String[] args) {  <br>\r\n         MyFirst obj = new MyFirst(n);  <br>\r\n }  <br>\r\n static int a = 10;  <br>\r\n static int n;  <br>\r\n int b = 5;  <br>\r\n int c;  <br>\r\n public MyFirst(int m) {  <br>\r\n       System.out.println(a + \", \" + b + \", \" + c + \", \" + n + \", \" + m);  <br>\r\n   }  <br>\r\n// Instance Block  <br>\r\n  {  <br>\r\n     b = 30;  <br>\r\n     n = 20;  <br>\r\n  }   <br>\r\n// Static Block  <br>\r\n  static   <br>\r\n{  <br>\r\n          a = 60;  <br>\r\n     }   <br>\r\n }  <br>', '10, 5, 0, 20, 0', '10, 30, 20', '60, 5, 0, 20', '60, 30, 0, 20, 0', 'D', 'In the above code, there are two values of variable a, i.e., 10 and 60. Similarly, there are two values of variable b, i.e., 5 and 30. But in the output, the values of a and b are 60 and 30, respectively. It is because of the execution order of the p'),
(10, 'java', 'The u0021 article referred to as a', 'Unicode escape sequence', 'Octal escape', 'Hexadecimal', 'Line feed', 'A', 'In Java, Unicode characters can be used in string literals, comments, and commands, and are expressed by Unicode Escape Sequences. A Unicode escape sequence is made up of the following articles:\r\n\r\nA backslash \"\" (ASCII character 92)\r\nA \"u\" (ASCII 11'),
(16, 'java', ' _____ is used to find and fix bugs in the Java programs.', 'JVM', 'JRE', 'JDK', 'JDB', 'D', 'The Java Debugger (JDB or jdb) is a command-line java debugger that debugs the java class. It is a part of the Java Platform Debugger Architecture (JPDA) that helps in the inspections and debugging of a local or remote Java Virtual Machine (JVM).\r\n\r\n'),
(17, 'java', 'Which of the following is a valid declaration of a char?', 'char ch = \"utea\";', 'char ca = \"tea\";', 'char cr = u0223;', 'char cc = \"itea\";', 'A', 'A char literal may contain a Unicode character (UTF-16). We can directly use these characters only if our file system allows us, else use a Unicode escape (u) such as \"u02tee\". The char literals are always declared in single quotes (\").\r\n\r\nThe option'),
(18, 'java', 'What is the return type of the hashCode() method in the Object class?', 'Object', 'int', 'long', 'void', 'B', 'In Java, the return type of hashCode() method is an integer, as it returns a hash code value for the object.'),
(19, 'java', 'Which of the following is a valid long literal?', 'ABH8097', 'L990023', '904423', '0xnf029L', 'D', 'For every long literal to be recognized by Java, we need to add L character at the end of the expression. It can be either uppercase (L) or lowercase (l) character. However, it is recommended to use uppercase character instead of lowercase because th'),
(20, 'java', 'What does the expression float a = 35 / 0 return?', '0', 'Not a Number', 'Infinity', 'Run time exception', 'C', 'In Java, whenever we divide any number (double, float, and long except integer) by zero, it results in infinity. According to the IEEE Standard for Floating-Point Arithmetic (IEEE 754), if we divide 1/0 will give positive infinity, -1/0 will give neg'),
(21, 'java', 'Evaluate the following Java expression, if x=3, y=5, and z=10:\r\nEvaluate the following Java expression, if x=3, y=5, and z=10:', '24', '23', '20', '25', 'D', 'In the above expression, ++z means that the value will first increment by 1, i.e. 12. Now, evaluate the statement by putting the values of x, y, and z. On evaluating the expression, we get 25, as shown below.'),
(22, 'java', 'What will be the output of the following program?\r\npublic class Test {  \r\npublic static void main(String[] args) {  \r\n    int count = 1;  \r\n    while (count <= 15) {  \r\n    System.out.println(count % 2 == 1 ? \"***\" : \"+++++\");  \r\n    ++count;  \r\n        }      // end while  \r\n    }       // end main   \r\n }  \r\n', '15 times ***', '15 times +++++', '8 times *** and 7 times +++++', 'oth will print only once', 'C', 'In the above code, we have declared count = 1. The value of count will be increased till 14 because of the while (count<=15) statement. If the remainder is equal to 1 on dividing the count by 2, it will print (***) else print (+++++). Therefore, for '),
(23, 'java', 'Which of the following tool is used to generate API documentation in HTML format from doc comments in source code?', 'javap tool', 'javaw command', 'Javadoc tool', 'javah command', 'C', 'The Javadoc is a tool that is used to generate API documentation in HTML format from the Java source files. In other words, it is a program (tool) that reads a collection of source files into an internal form.\r\n\r\nThe Javadoc command line syntax is,\r\n'),
(24, 'java', 'Which of the following creates a List of 3 visible items and multiple selections abled?', 'new List(false, 3)', 'new List(3, true)', 'new List(true, 3)', 'new List(3, false)', 'B', 'From the above statements, the new List(3, true) is the correct answer; this is because of the constructor type. To create a list of 3 visible items along with the multiple selections abled, we have to use the following constructor of the List class.'),
(25, 'java', 'Which of the following for loop declaration is not valid?', 'for ( int i = 99; i >= 0; i / 9 )', 'for ( int i = 7; i <= 77; i += 7 )', 'for ( int i = 20; i >= 2; - -i )', 'for ( int i = 2; i <= 20; i = 2* i )', 'A', 'The first option is not a valid declaration as i/9 is not declared correctly. The correct statement will be:\r\n      for ( int i= 99; i>=0; i= i/9)\r\n\r\nThen the code would execute. But without assigning the value of i/9 to a variable, it would not exec'),
(26, 'java', 'Which method of the Class.class is used to determine the name of a class represented by the class object as a String?', 'getClass()', 'intern()', 'getName()', 'toString()', 'C', 'The getName() method of the Class class returns the name (as String) of the entity (class, interface) represented by this Class object. It is a non-static method, and available in the java.lang package.\r\n\r\nThe getClass() method of the Object class re'),
(27, 'java', 'In which process, a local variable has the same name as one of the instance variables?', 'Serialization', 'Variable Shadowing', 'Abstraction', 'Multi-threading', 'B', 'There are following reasons for considering a variable shadowing, they are listed below:\r\n\r\nWhen we define a variable in a local scope with a variable name same as the name of a variable defined in an instance scope.\r\nWhen a subclass declares a varia'),
(28, 'java', 'Which of the following is true about the anonymous inner class?', 'It has only methods', 'Objects can\"t be created', 'It has a fixed class name', 'It has a fixed class name', 'D', 'Anonymous inner classes are the same as the local classes except that they don\"t have any name. The main use of it is to override methods of classes or interfaces. And the rest three options are false about the anonymous inner classes as it can have '),
(29, 'java', 'Which package contains the Random class?', 'java.util package', 'java.lang package', 'java.awt package', 'jjava.awt package', 'A', 'The Random class is available in the java.util package. An object of the Random class is used to generate a series of pseudorandom numbers. And the object of this class is a thread-safe and cryptographically insecure object. The Random class provides'),
(30, 'java', 'What do you mean by nameless objects?', 'An object created by using the new keyword.', 'An object of a superclass created in the subclass.', 'An object without having any name but having a reference.', 'An object that has no reference.', 'D', 'The nameless objects are basically referred to as anonymous objects. The anonymous objects do not have any names. We can also say that, when an object is initialized but is not assigned to any reference variable, it is called an anonymous object. For'),
(31, 'java', ' An interface with no fields or methods is known as a ______', 'Runnable Interface', 'Marker Interface', 'Abstract Interface', 'CharSequence Interface', 'B', 'An interface with no methods and fields is known as the marker interface. In other words, an empty interface (containing no fields and methods) is called a marker interface. In Java, the most commonly used marker interfaces are Serializable, Cloneabl'),
(32, 'java', 'Which of the following is an immediate subclass of the Panel class?', 'Applet class', 'Window class', 'Frame class', 'Dialog class', 'A', 'According to the class hierarchy of Java Swing, the Applet class is the direct subclass of the Panel class. You can go through the link, (https://www.javatpoint.com/java-swing) to deeply understand the class hierarchy diagram. The Panel class and Win'),
(33, 'java', 'Which option is false about the final keyword?', 'A final method cannot be overridden in its subclasses.', 'A final class cannot be extended.', 'A final class cannot extend other classes.', 'A final method can be inherited.', 'A', 'The final is a reserved keyword in Java that is used to make a variable, method, and class immutable. The important features of the final keyword are:\r\n\r\nUsing the final keyword with a variable makes it constant or immutable. We can\"t reassign the va'),
(34, 'java', 'Which of these classes are the direct subclasses of the Throwable class?', 'RuntimeException and Error class', 'Exception and VirtualMachineError class', 'Error and Exception class', 'IOException and VirtualMachineError class', 'C', 'According to the class hierarchy of Throwable class, the Error and Exception classes are the direct subclasses of the Throwable class, '),
(35, 'java', 'What do you mean by chained exceptions in Java?', 'Exceptions occurred by the VirtualMachineError', 'An exception caused by other exceptions', 'Exceptions occur in chains with discarding the debugging information', 'None of the above', 'B', 'In Java, an exception caused by other exceptions is known as a chained exception. Generally, the first exception causes the second exception. It helps in identifying the cause of the exception. In chained exceptions, the debugging information is not '),
(36, 'java', 'In which memory a String is stored, when we create a string using new operator?', 'Stack', 'String memory', 'Heap memory', 'Random storage space', 'C', 'When a String is created using a new operator, it always created in the heap memory. Whereas when we create a string using double quotes, it will check for the same value as of the string in the string constant pool. If it is found, returns a referen'),
(37, 'java', 'What is the use of the intern() method?', 'It returns the existing string from memory', 'It creates a new string in the database', 'It modifies the existing string in the database', 'None of the above', 'A', 'The intern() method is used to return the existing strings from the database. In other words, the intern() method returns a reference of the string. For example, if the string constant pool already has a string object with the same value, the intern('),
(38, 'java', 'Which of the following is a marker interface?', 'Runnable interface', 'Remote interface', 'Readable interface', 'Result interface', 'B', 'A marker interface is an interface with no fields and methods. In other words, an empty interface (contains nothing) is known as the marker interface. Examples of marker interfaces are Cloneable, Serializable, ThreadSafe, and Remote interface.\r\n\r\nThe'),
(39, 'java', 'Which of the following is a reserved keyword in Java?', 'object', 'strictfp', 'main', 'system', 'B', 'In the above options, strictfp is the only reserved keyword of Java. The strictfp keyword is a modifier that restricts the floating-point calculations to assure portability and it was added in Java version 1.2. The objects are referring to those vari'),
(40, 'java', 'Which keyword is used for accessing the features of a package?', 'package', 'import', 'extends', 'export', 'B', 'The import keyword is used to access the classes and interfaces of a particular package to the current file. In other words, it is used to import the user-defined and built-in classes and interfaces into the source file of java so that the current fi'),
(41, 'java', 'In java, jar stands for_____.', 'JIn java, jar stands for_____.', 'Java Application Resource', 'Java Application Runner', 'None of the above', 'D', 'A Java ARchive (JAR) is a package file format used to combine all the metadata and resources into a single file. In other words, it is a file that contains several components, which make up a self-contained, executable, and deployable jar used to exe'),
(42, 'java', 'public class Test2 {  <br>\r\n    public static void main(String[] args) {  <br>\r\n        StringBuffer s1 = new <br>StringBuffer(\"Complete\");  <br>\r\n        s1.setCharAt(1,\"i\");  <br>\r\n        s1.setCharAt(7,\"d\");  <br>\r\n        System.out.println(s1);  <br>\r\n     }  <br>\r\n } <br>', 'Complete', 'Iomplede', 'Cimpletd', 'Coipletd', 'C', 'In the above code snippet, we have passed a string with value \"Complete\" and set character \"i\" and \"d\" at the index position 1 and 7, respectively. According to the string \"Complete,\" \"o\" is at position 1, and \"e\" is at the position 7. The setChar() '),
(43, 'java', 'Which of the following is false?', 'The rt.jar stands for the runtime jar', 'It is an optional jar file', 'It contains all the compiled class files', 'All the classes available in rt.jar is known to the JVM', 'B', 'The rt.jar stands for the runtime jar that comprises of all the compiled core class files for the Java Runtime Environment. It generally consists of classes like java.lang.String, java.lang.Object, java.io.Exception, etc., and all packages and classe'),
(44, 'java', 'What is the use of w in regex?', 'Used for a non-whitespace character', 'Used for a non-whitespace character', 'Used for a word character', 'Used for a non-word character', 'C', 'In java, the \"w\" regex is used to match with a word character consists of [a-zA-Z_0-9]. For example, w+ matches one or more word character that is same as ([a-zA-Z_0-9] +).'),
(45, 'java', 'Which of the given methods are of Object class?', 'notify(), wait( long msecs ), and synchronized()', 'wait( long msecs ), interrupt(), and notifyAll()', 'notify(), notifyAll(), and wait()', 'sleep( long msecs ), wait(), and notify()', 'C', 'The notify(), notifyAll(), and wait() are the methods of the Object class. The notify() method is used to raise a single thread that is waiting on the object\"s monitor. The notifyAll() method is similar to the notify() method, except that it wakes up'),
(46, 'java', 'Given that Student is a class, how many reference variables and objects are created by the following code?\r\nStudent studentName, studentId;  \r\nstudentName = new Student();  \r\nStudent stud_class = new Student();   ', 'Three reference variables and two objects are created.', 'Two reference variables and two objects are created.', 'One reference variable and two objects are created.', 'Three reference variables and three objects are created.', 'A', 'Explanation: In the above code, there are three reference variables and two objects. The studentName, studentId, and stud_class are the three reference variables. The objects are those variables that are created using the new operator, i.e., studentN'),
(47, 'java', '37) Which of the following is a valid syntax to synchronize the HashMap?\r\n\r\n', 'Map m = hashMap.synchronizeMap();', 'HashMap map =hashMap.synchronizeMap();', 'Map m1 = Collections.synchronizedMap(hashMap);', 'Map m2 = Collection.synchronizeMap(hashMap);', 'C', ' By default, the HashMap class is a non-synchronized collection class. The need for synchronization is to perform thread-safe operations on the class. To synchronize the HashMap class explicitly, we should use the Collections.synchronizedMap(hashMap)'),
(48, 'java', 'Given,\r\n\r\nArrayList list = new ArrayList();  <br>\r\nWhat is the initial quantity of the ArrayList list?\r\n\r\n', '5', '1', '0', '100', 'B', 'The initial or default quantity of an ArrayList is 10. It means when we create an ArrayList without specifying any quantity, it will be created with the default capacity, i.e., 10. Hence, an ArrayList with the default capacity can hold ten (10) value'),
(49, 'java', 'Which of the following is a mutable class in java?', 'java.lang.String', 'java.lang.Byte', 'java.lang.Short', 'java.lang.StringBuilder', 'D', 'A mutable class is a class in which changes can be made after its creation. We can modify the internal state and fields of a mutable class. The StringBuilder class is a mutable class, as it can be altered after it is created.\r\n\r\nThe String, Byte, and'),
(50, 'java', 'What will be the output of the following program?<br>\r\nabstract class MyFirstClass  <br>\r\n{  <br>\r\n     abstract num (int a, int b) {  }  <br>\r\n}  <br>', 'No error', 'Method is not defined properly', 'Constructor is not defined properly', 'Extra parentheses', 'B', 'Following are some rules for declaring an abstract method:\r\n\r\nAbstract methods do not specify a method body, but they only have a method signature.\r\nAbstract methods are always defined inside an abstract class.\r\nIn the above code, MyFirstClass is an '),
(51, 'java', 'What is meant by the classes and objects that dependents on each other?', 'Tight Coupling', 'Cohesion', 'Loose Coupling', 'None of the above', 'A', 'In tight coupling, a group of classes and objects are highly dependent on each other. Tight coupling is also used in some cases, like when an object creates some other objects that are going to be used by them.\r\n\r\nTight coupling is the correct answer'),
(52, 'java', 'Given,\r\n<br>\r\nint values[ ] = {1,2,3,4,5,6,7,8,9,10};  <br>\r\nfor(int i=0;i< Y; ++i)  <br>\r\nSystem.out.println(values[i]);  <br>\r\nFind the value of value[i]?', '10', '11', '15', 'None of the above', 'D', 'In the above code, we have not defined the variable Y. The code will not execute without any specific value for Y; it results in exception, as shown below.\r\n\r\nException in thread \"main\" java.lang.Error: Unresolved compilation problem:\r\n        Y cann'),
(53, 'java', 'Which of the following code segment would execute the stored procedure \"getPassword()\" located in a database server?\r\n\r\n', 'CallableStatement cs = connection.prepareCall(\"{call.getPassword()}\"); cs.executeQuery();', 'CallabledStatement callable = conn.prepareCall(\"{call getPassword()}\"); callable.executeUpdate();', 'CallableStatement cab = con.prepareCall(\"{call getPassword()}\"); cab.executeQuery();', 'Callablestatement cstate = connect.prepareCall(\"{call getpassword()}\"); cstate.executeQuery();', 'C', 'In Java, java.sql.CallableStatement interface is used to call the SQL stored procedures in the database. The stored procedures are similar to functions as they perform some specific tasks, except that they are only available in the database. The Call'),
(54, 'java', 'How many threads can be executed at a time?', 'Only one thread', 'Multiple threads', 'Only main (main() method) thread', 'Two threads', 'B', 'In Java, multiple threads can be executed at the same time. A Java standalone application always starts with a single thread known as the main thread that is associated with the main() method.\r\n\r\nIn the operating system, only one thread is executed a'),
(55, 'java', 'If three threads trying to share a single object at the same time, which condition will arise in this scenario?', 'Time-Lapse', 'Critical situation', 'Race condition', 'Recursion', 'C', 'If two or more threads are trying to access a common resource at the same time. This situation is known as race condition. It generally occurs during the execution of multi-threaded application. It also refers to a programming bug or issue that occur'),
(56, 'java', 'If a thread goes to sleep\r\n\r\n', 'It releases all the locks it has.', 'It does not release any locks.', 'It releases half of its locks.', 'It releases all of its lock except one.', 'B', 'The sleep() method does not release any locks of an object for a specific time or until an interrupt occurs. It leads to the poor performance or deadlock of threads. Whereas, the wait() method does not release the locks of an object.\r\n\r\nTherefore, wh'),
(57, 'java', 'Which of the following modifiers can be used for a variable so that it can be accessed by any thread or a part of a program?', 'global', 'transient', 'volatile', 'default', 'C', 'In Java, we can modify the values of a variable with the help of a reserved keyword known as volatile. It is a different way of making a class thread-safe. Thread-safe means that the methods and objects of a class are accessible by multiple threads a'),
(58, 'java', 'What is the result of the following program?<br>\r\npublic static synchronized void main(String[] args) throws  <br>\r\nInterruptedException {  <br>\r\n     Thread f = new Thread();  <br>\r\n      f.start();  <br>\r\n      System.out.print(\"A\");  <br>\r\n      f.wait(1000);  <br>\r\n      System.out.print(\"B\");  <br>\r\n}  ', 'It prints A and B with a 1000 seconds delay between them', 'It only prints A and exits', 'It only prints B and exits', 'A will be printed, and then an exception is thrown.', 'D', 'The InterruptedException is thrown when a thread is waiting, sleeping, or occupied. The output of the above code is shown below:\r\n\r\nA\r\nException in thread \"main\" java.lang.IllegalMonitorStateException\r\n	at java.lang.Object.wait(Native Method)\r\n	at co'),
(59, 'java', 'In character stream I/O, a single read/write operation performs _____.', 'Two bytes read/write at a time.', 'Eight bytes read/write at a time.', 'One byte read/write at a time.', 'Five bytes read/ write at a time.', 'A', 'There are two types of I/O stream. One is a byte stream, and the other is the character stream. The Byte stream is used to perform input or output 8-bit (equals to 1 byte) Unicode bytes whereas, the Character stream is used to read or write a 16-bit '),
(60, 'java', 'What is the default encoding for an OutputStreamWriter?', 'UTF-8', 'Default encoding of the host platform', 'UTF-12', 'None of the above', 'B', 'The OutputStreamWriter class translates Unicode character into bytes by using the character encoding. The character encoding can be either a default encoding dependent on the system or encoding that is explicitly defined. If no external encoding is s'),
(61, 'java', 'Which of the following option leads to the portability and security of Java?', 'Bytecode is executed by JVM', 'The applet makes the Java code secure and portable', 'Use of exception handling', 'Dynamic binding between objects', 'A', 'The output of the Java compiler is bytecode, which leads to the security and portability of the Java code. It is a highly developed set of instructions that are designed to be executed by the Java runtime system known as Java Virtual Machine (JVM). T'),
(62, 'java', 'Which of the following is not a Java features?', 'Dynamic', 'Architecture Neutral', 'Use of pointers', 'Object-oriented', 'C', 'he Java language does not support pointers; some of the major reasons are listed below:\r\n\r\nOne of the major factors of not using pointers in Java is security concerns. Due to pointers, most of the users consider C-language very confusing and complex.'),
(63, 'java', 'The u0021 article referred to as a\r\n\r\n', 'Unicode escape sequence', 'Octal escape', 'Hexadecimal', 'Line feed', 'A', 'In Java, Unicode characters can be used in string literals, comments, and commands, and are expressed by Unicode Escape Sequences. A Unicode escape sequence is made up of the following articles:\r\n\r\nA backslash \"\"(ASCII character 92)\r\nA \"u\" (ASCII 117'),
(64, 'java', '____ is used to find and fix bugs in the Java programs.', 'JVM', 'JRE', 'JDK', 'JDB', 'D', 'The Java Debugger (JDB or jdb) is a command-line java debugger that debugs the java class. It is a part of the Java Platform Debugger Architecture (JPDA) that helps in the inspections and debugging of a local or remote Java Virtual Machine (JVM).\r\n\r\n'),
(65, 'java', 'Which of the following is a valid declaration of a char?', 'char ch = \"utea\";', 'char ca = \"tea\";', 'char cr = u0223;', 'char cc = \"itea\";', 'A', 'A char literal may contain a Unicode character (UTF-16). We can directly use these characters only if our file system allows us, else use a Unicode escape (u) such as \"u02tee\". The char literals are always declared in single quotes (\").\r\n\r\nThe option'),
(66, 'java', 'What is the return type of the hashCode() method in the Object class?\r\n\r\n', 'Object', 'int', 'long', 'void', 'B', 'In Java, the return type of hashCode() method is an integer, as it returns a hash code value for the object.'),
(67, 'java', 'Which of the following is a valid long literal?', 'ABH8097', 'L990023', '904423', '0xnf029L', 'D', 'For every long literal to be recognized by Java, we need to add L character at the end of the expression. It can be either uppercase (L) or lowercase (l) character. However, it is recommended to use uppercase character instead of lowercase because th'),
(68, 'java', 'What does the expression float a = 35 / 0 return?', '0', 'Not a Number', 'Infinity', 'Run time exception', 'C', 'In Java, whenever we divide any number (double, float, and long except integer) by zero, it results in infinity. According to the IEEE Standard for Floating-Point Arithmetic (IEEE 754), if we divide 1/0 will give positive infinity, -1/0 will give neg'),
(69, 'java', 'Evaluate the following Java expression, if x=3, y=5, and z=10:\r\n\r\n++z + y - y + z + x++', '24', '23', '20', '25', 'D', ' In the above expression, ++z means that the value will first increment by 1, i.e. 12. Now, evaluate the statement by putting the values of x, y, and z. On evaluating the expression, we get 25, as shown below.\r\n<br>\r\n++z +y -y +z + x++ <br>\r\n11 + 5 -'),
(70, 'java', 'What will be the output of the following program?<br>\r\npublic class Test {  <br>\r\npublic static void main(String[] args) {  <br>\r\n    int count = 1;  <br>\r\n    while (count <= 15) {  <br>\r\n    System.out.println(count % 2 == 1 ? \"***\" : \"+++++\");  <br>\r\n    ++count;  <br>\r\n        }      // end while  <br>\r\n    }       // end main   <br>\r\n }  ', '15 times ***', '15 times +++++', '8 times *** and 7 times +++++', 'Both will print only once', 'C', 'In the above code, we have declared count = 1. The value of count will be increased till 14 because of the while (count<=15) statement. If the remainder is equal to 1 on dividing the count by 2, it will print (***) else print (+++++). Therefore, for '),
(71, 'java', 'Which of the following tool is used to generate API documentation in HTML format from doc comments in source code?', 'javap tool', 'javaw command', 'Javadoc tool', 'javah command', 'C', 'The Javadoc is a tool that is used to generate API documentation in HTML format from the Java source files. In other words, it is a program (tool) that reads a collection of source files into an internal form.'),
(72, 'java', 'Which of the following creates a List of 3 visible items and multiple selections abled?', 'new List(false, 3)', 'new List(3, true)', 'new List(true, 3)', 'new List(3, false)', 'B', 'From the above statements, the new List(3, true) is the correct answer; this is because of the constructor type. To create a list of 3 visible items along with the multiple selections abled, we have to use the following constructor of the List class.'),
(73, 'java', 'Which of the following for loop declaration is not valid?', 'for ( int i = 99; i >= 0; i / 9 )', 'for ( int i = 7; i <= 77; i += 7 )', 'for ( int i = 20; i >= 2; - -i )', 'for ( int i = 2; i <= 20; i = 2* i )', 'A', 'The first option is not a valid declaration as i/9 is not declared correctly. The correct statement will be:\r\n      for ( int i= 99; i>=0; i= i/9)\r\n\r\nThen the code would execute. But without assigning the value of i/9 to a variable, it would not exec'),
(74, 'java', 'Which method of the Class.class is used to determine the name of a class represented by the class object as a String?', 'getClass()', 'intern()', 'getName()', 'toString()', 'C', 'The getName() method of the Class class returns the name (as String) of the entity (class, interface) represented by this Class object. It is a non-static method, and available in the java.lang package.\r\n\r\nThe getClass() method of the Object class re'),
(75, 'java', 'In which process, a local variable has the same name as one of the instance variables?', 'Serialization', 'Variable Shadowing', 'Abstraction', 'Multi-threading', 'B', 'There are following reasons for considering a variable shadowing, they are listed below:\r\n\r\nWhen we define a variable in a local scope with a variable name same as the name of a variable defined in an instance scope.\r\nWhen a subclass declares a varia'),
(76, 'java', 'Which of the following is true about the anonymous inner class?', 'It has only methods', 'Objects can\"t be created', 'It has a fixed class name', 'It has no class name', 'D', 'Anonymous inner classes are the same as the local classes except that they don\"t have any name. The main use of it is to override methods of classes or interfaces. And the rest three options are false about the anonymous inner classes as it can have '),
(77, '', 'Which package contains the Random class?', 'java.util package', 'java.lang package', 'java.awt package', 'java.io package', 'A', 'The Random class is available in the java.util package. An object of the Random class is used to generate a series of pseudorandom numbers. And the object of this class is a thread-safe and cryptographically insecure object. The Random class provides'),
(78, 'java', 'What do you mean by nameless objects?', 'An object created by using the new keyword.', 'An object of a superclass created in the subclass.', 'An object without having any name but having a reference.', 'An object that has no reference.', 'D', 'The nameless objects are basically referred to as anonymous objects. The anonymous objects do not have any names. We can also say that, when an object is initialized but is not assigned to any reference variable, it is called an anonymous object. For'),
(79, 'java', 'An interface with no fields or methods is known as a ______.', 'Runnable Interface', 'Marker Interface', 'Abstract Interface', 'CharSequence Interface', 'B', 'An interface with no methods and fields is known as the marker interface. In other words, an empty interface (containing no fields and methods) is called a marker interface. In Java, the most commonly used marker interfaces are Serializable, Cloneabl'),
(80, 'java', 'Which of the following is an immediate subclass of the Panel class?', 'Applet class', 'Window class', 'Frame class', 'Dialog class', 'A', 'According to the class hierarchy of Java Swing, the Applet class is the direct subclass of the Panel class. You can go through the link, (https://www.javatpoint.com/java-swing) to deeply understand the class hierarchy diagram. The Panel class and Win'),
(81, 'java', 'Which of the following is a reserved keyword in Java?', 'object', 'strictfp', 'main', 'system', 'B', 'In the above options, strictfp is the only reserved keyword of Java. The strictfp keyword is a modifier that restricts the floating-point calculations to assure portability and it was added in Java version 1.2. The objects are referring to those vari'),
(82, 'java', 'Which keyword is used for accessing the features of a package?', 'package', 'import', 'extends', 'export', 'B', 'The import keyword is used to access the classes and interfaces of a particular package to the current file. In other words, it is used to import the user-defined and built-in classes and interfaces into the source file of java so that the current fi'),
(83, 'java', 'In java, jar stands for_____.', 'Java Archive Runner', 'Java Application Resource', 'Java Application Runner', 'None of the above', 'D', 'A Java ARchive (JAR) is a package file format used to combine all the metadata and resources into a single file. In other words, it is a file that contains several components, which make up a self-contained, executable, and deployable jar used to exe'),
(84, 'java', 'Which of the following is false?', 'The rt.jar stands for the runtime jar', 'It is an optional jar file', 'It contains all the compiled class files', 'All the classes available in rt.jar is known to the JVM', 'B', 'The rt.jar stands for the runtime jar that comprises of all the compiled core class files for the Java Runtime Environment. It generally consists of classes like java.lang.String, java.lang.Object, java.io.Exception, etc., and all packages and classe'),
(85, 'java', 'What is the use of w in regex?', 'Used for a whitespace character', 'Used for a non-whitespace character', 'Used for a word character', 'Used for a non-word character', 'C', 'In java, the \"w\" regex is used to match with a word character consists of [a-zA-Z_0-9]. For example, w+ matches one or more word character that is same as ([a-zA-Z_0-9] +).'),
(86, 'java', 'Which of the given methods are of Object class?', 'notify(), wait( long msecs ), and synchronized()', 'wait( long msecs ), interrupt(), and notifyAll()', 'notify(), notifyAll(), and wait()', 'sleep( long msecs ), wait(), and notify()', 'C', 'The notify(), notifyAll(), and wait() are the methods of the Object class. The notify() method is used to raise a single thread that is waiting on the object\"s monitor. The notifyAll() method is similar to the notify() method, except that it wakes up'),
(87, 'java', 'Given that Student is a class, how many reference variables and objects are created by the following code?<br>\r\nStudent studentName, studentId;  <br>\r\nstudentName = new Student();  <br>\r\nStudent stud_class = new Student();   ', 'Three reference variables and two objects are created.', 'Two reference variables and two objects are created.', 'One reference variable and two objects are created.', 'Three reference variables and three objects are created.', 'A', 'In the above code, there are three reference variables and two objects. The studentName, studentId, and stud_class are the three reference variables. The objects are those variables that are created using the new operator, i.e., studentName and stud_'),
(88, 'java', 'Which of the following is a valid syntax to synchronize the HashMap?', 'Map m = hashMap.synchronizeMap();', 'HashMap map =hashMap.synchronizeMap();', 'Map m1 = Collections.synchronizedMap(hashMap);', 'Map m2 = Collection.synchronizeMap(hashMap);', 'C', 'By default, the HashMap class is a non-synchronized collection class. The need for synchronization is to perform thread-safe operations on the class. To synchronize the HashMap class explicitly, we should use the Collections.synchronizedMap(hashMap) '),
(89, 'java', 'What is the initial quantity of the ArrayList list?\r\n\r\n', '5', '10', '0', '100', 'B', 'The initial or default quantity of an ArrayList is 10. It means when we create an ArrayList without specifying any quantity, it will be created with the default capacity, i.e., 10. Hence, an ArrayList with the default capacity can hold ten (10) value'),
(90, 'java', 'Which of the following is a mutable class in java?', 'java.lang.String', 'java.lang.Byte', 'java.lang.Short', 'java.lang.StringBuilder', 'D', 'A mutable class is a class in which changes can be made after its creation. We can modify the internal state and fields of a mutable class. The StringBuilder class is a mutable class, as it can be altered after it is created.\r\n\r\nThe String, Byte, and'),
(91, '', '', '', '', '', '', '', ''),
(92, '', '', '', '', '', '', '', ''),
(93, 'java', 'What is meant by the classes and objects that dependents on each other?', 'Tight Coupling', 'Cohesion', 'Loose Coupling', 'None of the above', 'A', 'In tight coupling, a group of classes and objects are highly dependent on each other. Tight coupling is also used in some cases, like when an object creates some other objects that are going to be used by them.\r\n\r\nTight coupling is the correct answer'),
(94, 'java', 'Which of the following code segment would execute the stored procedure \"getPassword()\" located in a database server?', 'CallableStatement cs = connection.prepareCall(\"{call.getPassword()}\"); cs.executeQuery();', 'CallabledStatement callable = conn.prepareCall(\"{call getPassword()}\"); callable.executeUpdate();', 'CallableStatement cab = con.prepareCall(\"{call getPassword()}\"); cab.executeQuery();', 'Callablestatement cstate = connect.prepareCall(\"{call getpassword()}\"); cstate.executeQuery();', 'C', 'In Java, java.sql.CallableStatement interface is used to call the SQL stored procedures in the database. The stored procedures are similar to functions as they perform some specific tasks, except that they are only available in the database. The Call'),
(95, 'java', 'How many threads can be executed at a time?', 'Only one thread', 'Multiple threads', 'Only main (main() method) thread', 'Two threads', 'B', 'In Java, multiple threads can be executed at the same time. A Java standalone application always starts with a single thread known as the main thread that is associated with the main() method.\r\n\r\nIn the operating system, only one thread is executed a'),
(96, 'java', ' If three threads trying to share a single object at the same time, which condition will arise in this scenario?', 'Time-Lapse', 'Critical situation', 'Race condition', 'Recursion', 'C', 'If two or more threads are trying to access a common resource at the same time. This situation is known as race condition. It generally occurs during the execution of multi-threaded application. It also refers to a programming bug or issue that occur'),
(97, 'java', 'Which of the following modifiers can be used for a variable so that it can be accessed by any thread or a part of a program?', 'global', 'transient', 'volatile', 'default', 'C', 'In Java, we can modify the values of a variable with the help of a reserved keyword known as volatile. It is a different way of making a class thread-safe. Thread-safe means that the methods and objects of a class are accessible by multiple threads a'),
(98, 'java', '\r\nNumber of primitive data types in Java are?', '6', '7', '8', '9', 'C', ''),
(99, 'java', 'What is the size of float and double in java?', '32 and 64', '32 and 32', '64 and 64', '64 and 32', 'A', ''),
(100, 'java', 'JDK stands for ____.', 'Java development kit', 'Java deployment kit', 'JavaScript deployment kit', 'None of these', 'A', 'JDK stands for Java Development Kit. It is a platform to develop and run Java applications.\r\n\r\n'),
(101, 'java', 'JRE stands for ___.', 'Java run ecosystem', 'JDK runtime Environment', 'Java Runtime Environment', 'None of these', 'C', 'JRE stands for Java Runtime Environment which provides an environment to run a java program.\r\n\r\n'),
(102, 'java', 'What makes the Java platform independent?', 'Advanced programming language', 'It uses bytecode for execution', 'Class compilation', 'All of these', 'B', 'In Java, programs are compiled into byte code and that byte code is platform-independent.\r\n\r\n'),
(103, 'java', 'Can we keep a different name for the java class name and java file name?', 'Yes', 'No', 'don\"t know', 'none of the above', 'A', 'we can keep a different name'),
(104, 'java', 'What are the types of memory allocated in memory in java?', 'Heap memory', 'Stack memory', 'Both A and B', 'None of these', 'C', 'Memory allocation in java occurs in two ways, mainly, stack and heap space.\r\n\r\n'),
(105, 'java', 'Multiline comment is created using ___.', '//', '/* */', 'None of these\r\n', 'All of these', 'B', 'Multi-line comments start with /* and ends with */. Any text between /* and */ will be ignored by Java.'),
(106, 'java', 'What is the entry point of a program in Java?', 'main() method', 'The first line of code', 'Last line of code', 'main class', 'A', 'Generally, the main() method is treated as the point where the flow of code starts.\r\n\r\n'),
(107, 'java', 'Which keyword in java is used for exception handling?', 'exep', 'excepHand', 'throw', 'All of these', 'C', 'the throw is a keyword introduced in java for exception handling.\r\n\r\n'),
(108, 'java', 'Which class in Java is used to take input from the user?', 'Scanner', 'Input', 'Applier', 'None of these', 'A', 'The Scanner class is used to get user input, and it is found in the java. util package.\r\n\r\n'),
(109, 'java', 'Method used to take a string as input in Java?', 'next()', 'nextLine()', 'Both A. and B.', 'None of these', 'B', 'The next() method can read the input only till the space. It can\"t read two words separated by space, while the nextLine() reads input including space between the words (that is, it reads till the end of line \n).'),
(110, 'java', 'Which of the following is the correct syntax to create a variable in Java?', 'var name;', 'int name;', 'var name int;', 'All of these', 'B', 'Read here: Java variable declarations'),
(111, 'java', 'Which of the following is the correct syntax to create a variable in Java?', 'var name;', 'int name;', 'var name int;', 'All of these', 'B', 'Read here: Java variable declarations'),
(112, 'python', ' Who developed Python Programming Language?', 'Wick van Rossum', 'Rasmus Lerdorf', ' Guido van Rossum', 'Niene Stom', 'C', ' Python language is designed by a Dutch programmer Guido van Rossum in the Netherlands. '),
(113, 'python', '', 'object-oriented programming', 'structured programming', ' functional programming', 'all of the mentioned', 'D', ': Python is an interpreted programming language, which supports object-oriented, structured, and functional programming.'),
(114, 'python', '. Is Python case sensitive when dealing with identifiers?', 'no', 'yes', 'machine dependent', 'none of the mentioned', 'B', ' Case is always significant while dealing with identifiers in python.'),
(115, 'python', 'Which of the following is the correct extension of the Python file?', ' .python', ' .pl', ' .py', '.p', 'C', ' \".py\" is the correct extension of the Python file. Python programs can be written in any text editor. To save these programs we need to save in files with file extension \".py\".'),
(116, 'python', ' Is Python code compiled or interpreted?', 'Python code is both compiled and interpreted', 'Python code is neither compiled nor interpreted', 'Python code is only compiled', ' Python code is only interpreted', 'A', 'Many languages have been implemented using both compilers and interpreters, including C, Pascal, and Python.'),
(117, 'python', 'All keywords in Python are in _________', 'Capitalized', 'lower case', 'UPPER CASE', 'None of the mentioned', 'D', ' True, False and None are capitalized while the others are in lower case.'),
(118, 'python', 'What will be the value of the following Python expression? <br>\r\n4 + 3 % 5', '7', '2', '4', '1', 'A', 'The order of precedence is: %, +. Hence the expression above, on simplification results in 4 + 3 = 7. Hence the result is 7.'),
(119, 'python', 'Which of the following is used to define a block of code in Python language?', 'Indentation', ' Key', 'Brackets', 'All of the mentioned', 'A', ' In Python, to define a block of code we use indentation. Indentation refers to whitespaces at the beginning of the line.'),
(120, 'python', ' Which keyword is used for function in Python language?', 'Function', 'def', 'Fun', 'Define', 'B', 'The def keyword is used to create, (or define) a function in python.'),
(121, 'python', ' Which of the following character is used to give single-line comments in Python?', '//', '#', '!', '/*', 'B', 'To write single-line comments in Python use the Hash character (#) at the beginning of the line. It is also called number sign or pound sign. To write multi-line comments, close the text between triple quotes.\r\nExample: “”” comment\r\ntext “””'),
(122, 'python', '\r\nWhat will be the output of the following Python code?<br>\r\ni = 1<br>\r\nwhile True: <br>\r\n    if i%3 == 0: <br>\r\n        break <br>\r\n    print(i) <br>\r\n \r\n    i + = 1', '1 2 3', 'error', '1 2', 'none of the mentioned', 'B', 'SyntaxError, there shouldn’t be a space between + and = in +=.'),
(123, 'python', 'SyntaxError, there shouldn’t be a space between + and = in +=.', ' sys.version(1)', 'sys.version(0)', ' sys.version()', 'sys.version', 'D', ' The function sys.version can help us to find the version of python that we are currently working on. It also contains information on the build number and compiler used. For example, 3.5.2, 2.7.3 etc. this function also returns the current date, time'),
(124, 'python', '. Python supports the creation of anonymous functions at runtime, using a construct called __________', 'pi', 'anonymous', 'lambda', 'none of the mentioned', 'C', ' Python supports the creation of anonymous functions (i.e. functions that are not bound to a name) at runtime, using a construct called lambda. Lambda functions are restricted to a single expression. They can be used wherever normal functions can be '),
(125, 'python', ' What is the order of precedence in python?', 'Exponential, Parentheses, Multiplication, Division, Addition, Subtraction', ' Exponential, Parentheses, Division, Multiplication, Addition, Subtraction', ' Parentheses, Exponential, Multiplication, Division, Subtraction, Addition', ' Parentheses, Exponential, Multiplication, Division, Addition, Subtraction', 'D', 'For order of precedence, just remember this PEMDAS (similar to BODMAS).'),
(126, 'python', ' What will be the output of the following Python code snippet if x=1?', '4', '2', '8', '1', 'A', 'The binary form of 1 is 0001. The expression x<<2 implies we are performing bitwise left shift on x. This shift yields the value: 0100, which is the binary form of the number 4.'),
(127, 'python', '. What does pip stand for python?', 'Pip Installs Python', 'Pip Installs Packages', 'Preferred Installer Program', 'All of the mentioned', 'C', ' pip is a package manager for python. Which is also called Preferred Installer Program.');
INSERT INTO `practice_questions` (`id`, `course_name`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `answer`, `explaination`) VALUES
(128, 'python', ' Which of the following is true for variable names in Python?', 'underscore and ampersand are the only two special characters allowed', 'unlimited length', 'all private members must have leading and trailing underscores', ' none of the mentioned', 'B', ' Variable names can be of any length.'),
(129, 'python', ' What are the values of the following Python expressions?<br>\r\n 2**(3**2)<br>\r\n (2**3)**2<br>\r\n 2**3**2', ' 512, 64, 512', ' 512, 512, 512', ' 64, 512, 64', '64, 64, 64', 'A', ' Expression 1 is evaluated as: 2**9, which is equal to 512. Expression 2 is evaluated as 8**2, which is equal to 64. The last expression is evaluated as 2**(3**2). This is because the associativity of ** operator is from right to left. Hence the resu'),
(130, 'python', 'Which of the following is the truncation division operator in Python?', '/', '//', '|', '%', 'B', ' // is the operator for truncation division. It is called so because it returns only the integer part of the quotient, truncating the decimal part. For example: 20//3 = 6.'),
(131, 'python', 'What will be the output of the following Python code?<br>\r\nl=[1, 0, 2, 0, \"hello\", \', []] <br>\r\nlist(filter(bool, l))', '[1, 0, 2, \"hello\", ”, []] ', 'Error', '[1, 2, ‘hello’] ', '[1, 0, 2, 0, ‘hello’, ”, []] ', 'C', 'The code shown above returns a new list containing only those elements of the list l which do not amount to zero. Hence the output is: [1, 2, \"hello\"].'),
(132, 'python', 'Which of the following functions is a built-in function in python?', ' factorial()', ' print()', 'seed()', ' sqrt()', 'B', ' The function seed is a function which is present in the random module. The functions sqrt and factorial are a part of the math module. The print function is a built-in function which prints a value directly to the system output.'),
(133, 'python', ' Which of the following is the use of id() function in python?', 'Every object doesn’t have a unique id', ' Id returns the identity of the object', 'All of the mentioned', ' None of the mentioned', 'B', ' Each object in Python has a unique id. The id() function returns the object’s id. '),
(134, 'python', ' The following python program can work with ____ parameters.<br>\r\ndef f(x): <br>\r\n    def f1(*args, **kwargs):\r\n           print(\"Sanfoundry\")\r\n           return x(*args, **kwargs)\r\n    return f1', ' any number of', '0', '1', '2', 'A', ' The code shown above shows a general decorator which can work with any number of arguments.'),
(135, 'python', 'What will be the output of the following Python function? <br>\r\nmin(max(False,-3,-4), 2,7)', '-4', '-3', '2', 'False', 'D', 'The function max() is being used to find the maximum value from among -3, -4 and false. Since false amounts to the value zero, hence we are left with min(0, 2, 7) Hence the output is 0 (false).'),
(136, 'python', 'Which of the following is not a core data type in Python programming?', 'Tuples', 'Lists', 'Class', 'Dictionary', 'C', 'Class is a user-defined data type. '),
(137, 'python', ' What will be the output of the following Python expression if x=56.236?<br>\r\nprint(\"%.2f\"%x)', '56.236', '56.23', ' 56.0000', '56.24', 'C', ' The expression shown above rounds off the given number to the number of decimal places specified. Since the expression given specifies rounding off to two decimal places, the output of this expression will be 56.24. Had the value been x=56.234 (last'),
(138, 'python', ' Which of these is the definition for packages in Python?', 'A set of main modules', 'A folder of python modules', 'A number of files containing Python definitions and statements', 'A set of programs making use of Python modules', 'B', ' A folder of python programs is called as a package of modules.'),
(139, 'python', 'What will be the output of the following Python function? <br>\r\nlen([\"hello\",2, 4, 6])', 'Error', '6', '4', '3', 'C', ' The function len() returns the length of the number of elements in the iterable. Therefore the output of the function shown above is 4.'),
(140, 'python', 'What will be the output of the following Python code?<br>\r\nx = \"abcd\" <br>\r\nfor i in x: <br>\r\n    print(i.upper())', 'a B C D', 'b) a b c d', 'Cerror', 'D', '', ''),
(141, 'python', 'What is the order of namespaces in which Python looks for an identifier?', 'Python first searches the built-in namespace, then the global namespace and finally the local namespace', 'Python first searches the built-in namespace, then the local namespace and finally the global namespace', 'Python first searches the local namespace, then the global namespace and finally the built-in namespace', 'Python first searches the global namespace, then the local namespace and finally the built-in namespace', 'C', 'Python first searches for the local, then the global and finally the built-in namespace.'),
(142, '', 'What will be the output of the following Python code snippet?<br>\r\nfor i in [1, 2, 3, 4][::-1]: <br>\r\n    print(i, end=)', '4 3 2 1', 'Error', '1 2 3 4', 'none of the mentioned', 'A', '[::-1] reverses the list.'),
(143, 'python', 'hat will be the output of the following Python statement? <br>\r\n>>>\"a\"+\"bc\"', 'bc', 'abc', 'a', 'bca', 'B', 'perator is concatenation operator. '),
(144, 'python', ' function is called when the following Python program is executed? <br>\r\nf = foo() <br>\r\nformat(f)', 'str()', ' format()', '__str__()', ' __format__()', 'C', ' Both str(f) and format(f) call f.__str__().'),
(145, 'python', ' Which one of the following is not a keyword in Python language?', 'pass', 'eval', 'assert', 'nonlocal', 'B', 'eval can be used as a variable.'),
(146, 'python', ' What will be the output of the following Python code?<br>\r\nclass tester: <br>\r\n    def __init__(self, id): <br>\r\n        self.id = str(id) <br>\r\n        id=\"224\" <br>\r\n \r\n>>>temp = tester(12) <br>\r\n>>>print(temp.id)', '12', '224', 'none', 'error', 'A', ' Id in this case will be the attribute of the instance. '),
(147, 'python', ' What will be the output of the following Python program? <br>\r\ndef foo(x): <br>\r\n    x[0] = [\"def\"] <br>\r\n    x[1] = [\"abc\"] <br>\r\n    return id(x) <br>\r\nq = [\"abc\", \"def\"]\r\nprint(id(q) == foo(q))', 'Error', 'None', 'False', 'True', 'D', 'The same object is modified in the function.'),
(148, 'python', ' What will be the output of the following Python program? <br>\r\ndef foo(x): <br>\r\n    x[0] = [\"def\"] <br>\r\n    x[1] = [\"abc\"] <br>\r\n    return id(x) <br>\r\nq = [\"abc\", \"def\"]\r\nprint(id(q) == foo(q))', 'Error', 'None', 'False', 'True', 'D', 'The same object is modified in the function.'),
(149, 'python', ' What will be the output of the following Python program? <br>\r\ndef foo(x): <br>\r\n    x[0] = [\"def\"] <br>\r\n    x[1] = [\"abc\"] <br>\r\n    return id(x) <br>\r\nq = [\"abc\", \"def\"]\r\nprint(id(q) == foo(q))', 'Error', 'None', 'False', 'True', 'D', 'The same object is modified in the function.'),
(150, 'python', ' What will be the output of the following Python program? <br>\r\ndef foo(x): <br>\r\n    x[0] = [\"def\"] <br>\r\n    x[1] = [\"abc\"] <br>\r\n    return id(x) <br>\r\nq = [\"abc\", \"def\"]\r\nprint(id(q) == foo(q))', 'Error', 'None', 'False', 'True', 'D', 'The same object is modified in the function.'),
(151, 'python', ' What will be the output of the following Python program? <br>\r\ndef foo(x): <br>\r\n    x[0] = [\"def\"] <br>\r\n    x[1] = [\"abc\"] <br>\r\n    return id(x) <br>\r\nq = [\"abc\", \"def\"]\r\nprint(id(q) == foo(q))', 'Error', 'None', 'False', 'True', 'D', 'The same object is modified in the function.'),
(152, 'python', 'Which module in the python standard library parses options received from the command line?', ' getarg', 'getopt', 'main', 'os', 'B', 'getopt parses options received from the command line.'),
(153, 'python', ' What arithmetic operators cannot be used with strings in Python?', '*', '-', '+', 'All of the mentioned', 'B', ' + is used to concatenate and * is used to multiply strings.'),
(154, 'python', 'What will be the output of the following Python code? <br>\r\nprint(\"abc. DEF\".capitalize())', 'Abc. def', ' abc. def', 'Abc. Def', 'ABC. DEF', 'A', 'The first letter of the string is converted to uppercase and the others are converted to lowercase.'),
(155, 'python', ' Which of the following statements is used to create an empty set in Python?', '( )', '[ ] ', '{ }', 'set()', 'D', ' { } creates a dictionary not a set. Only set() creates an empty set. '),
(156, 'cpp', ' What will be the value of ‘result’ in following Python program? <br>\r\nlist1 = [1,2,3,4] <br>\r\nlist2 = [2,4,5,6] <br>\r\nlist3 = [2,6,7,8] <br>\r\nresult = list() <br>\r\nresult.extend(i for i in list1 if i not in (list2+list3) and i not in result) <br>\r\nresult.extend(i for i in list2 if i not in (list1+list3) and i not in result) <br>\r\nresult.extend(i for i in list3 if i not in (list1+list2) and i not in result)', '[1, 3, 5, 7, 8] ', '[1, 7, 8] ', '[1, 2, 4, 7, 8] ', 'error', 'A', ' Here, ‘result’ is a list which is extending three times. When first time ‘extend’ function is called for ‘result’, the inner code generates a generator object, which is further used in ‘extend’ function. This generator object contains the values whi'),
(157, 'python', ' To add a new element to a list we use which Python command?', 'list1.addEnd(5)', 'list1.addLast(5)', 'list1.append(5)', 'list1.add(5)', 'C', ' We use the function append to add an element to the list. '),
(158, '', '0', ' * abcde *', ') *abcde *', ' * abcde*', '* abcde *', 'B', ' Padding is done towards the right-hand-side first when the final string is of even length.'),
(159, 'python', 'What will be the output of the following Python code? <br>\r\n>>>list1 = [1, 3] <br>\r\n>>>list2 = list1 <br>\r\n>>>list1[0] = 4 <br>\r\n>>>print(list2)', ' [1, 4] ', ' [1, 3, 4] ', ' [4, 3] ', '[1, 3] ', 'C', ' Lists should be copied by executing [:] operation.'),
(160, 'python', ' Which one of the following is the use of function in python?', 'Functions don’t provide better modularity for your application', 'you can’t also create your own functions', ' Functions are reusable pieces of programs', ' All of the mentioned', 'C', ': Functions are reusable pieces of programs. They allow you to give a name to a block of statements, allowing you to run that block using the specified name anywhere in your program and any number of times. '),
(161, '', ' Which of the following Python statements will result in the output: 6? <br>\r\nA = [[1, 2, 3], <br>\r\n     [4, 5, 6], <br>\r\n     [7, 8, 9]]', 'A[2][1] ', 'A[1][2] ', 'A[3][2] ', 'A[2][3] ', 'B', ' The output that is required is 6, that is, row 2, item 3. This position is represented by the statement: A[1][2].'),
(162, 'python', 'What is the maximum possible length of an identifier in Python?', '79 characters', '31 characters', '63 characters', ' none of the mentioned', 'D', ' Identifiers can be of any length.'),
(163, 'python', 'What will be the output of the following Python program? <br>\r\ni = 0 <br>\r\nwhile i < 5: <br>\r\n    print(i) <br>\r\n    i += 1 <br>\r\n    if i == 3: <br>\r\n        break <br>\r\nelse: <br>\r\n    print(0)', 'error', ' 0 1 2 0', '0 1 2', 'none of the mentioned', 'C', 'The else part is not executed if control breaks out of the loop.'),
(164, 'python', 'hat will be the output of the following Python code?\r\nx = \"abcd\" <br>\r\nfor i in range(len(x)): <br>\r\n    print(i)', 'error', '1 2 3 4', ' a b c d', '0 1 2 3', 'D', ' i takes values 0, 1, 2 and 3.'),
(165, 'python', ' What are the two main types of functions in Python?', 'System function', 'Custom function', ' Built-in function & User defined function', 'User function', 'C', 'Built-in functions and user defined ones. The built-in functions are part of the Python language. Examples are: dir(), len() or abs(). The user defined functions are functions created with the def keyword. '),
(166, 'python', ' What will be the output of the following Python program?<br>\r\ndef addItem(listParam): <br>\r\n    listParam += [1] <br>\r\n \r\nmylist = [1, 2, 3, 4] <br>\r\naddItem(mylist) <br>\r\nprint(len(mylist))', '5', '8', '2', '1', 'A', ' + will append the element to the list.'),
(167, 'python', 'Which of the following is a Python tuple?', ' {1, 2, 3}', ' {}', '[1, 2, 3] ', ' (1, 2, 3)', 'D', 'Tuples are represented with round brackets.'),
(168, 'python', 'What will be the output of the following Python code snippet? <br>\r\nz=set(\"abc$de\") <br>\r\n\"a\" in z', 'Error', 'True', 'False', 'No output', 'B', ': The code shown above is used to check whether a particular item is a part of a given set or not. Since ‘a’ is a part of the set z, the output is true. Note that this code would result in an error in the absence of the quotes.'),
(169, 'python', 'What will be the output of the following Python expression? <br>\r\nround(4.576)', '4', '4.6', '5', '4.5', 'C', ' This is a built-in function which rounds a number to give precision in decimal digits. In the above case, since the number of decimal places has not been specified, the decimal number is rounded off to a whole number. Hence the output will be 5.'),
(170, 'python', ' Which of the following is a feature of Python DocString?', 'In Python all functions should have a docstring', 'Docstrings can be accessed by the __doc__ attribute on objects', 'It provides a convenient way of associating documentation with Python modules, functions, classes, and methods', 'All of the mentioned', 'D', 'Python has a nifty feature called documentation strings, usually referred to by its shorter name docstrings. DocStrings are an important tool that you should make use of since it helps to document the program better and makes it easier to understand.'),
(171, 'python', 'What will be the output of the following Python code? <br>\r\nprint(\"Hello {0[0]} and {0[1]}\".format((\"foo\", \"bin\"\r\n)))', 'Hello (\"foo\", \"bin\") and (\"foo\", \"bin\")', 'Error', 'Hello foo and bin', 'None of the mentioned', 'C', ' The elements of the tuple are accessed by their indices.'),
(172, 'python', 'What is output of print(math.pow(3, 2))?', '9.0', 'None', '9', 'none of the mentioned', 'A', ' math.pow() returns a floating point number.'),
(173, 'python', ' Which of the following is the use of id() function in python?', ' Every object in Python doesn’t have a unique id', 'In Python Id function returns the identity of the object', 'None of the mentioned', 'All of the mentioned', 'B', ' Each object in Python has a unique id. The id() function returns the object\"s id. '),
(174, 'python', ' What will be the output of the following Python code? <br>\r\nx = [[0], [1]] <br>\r\nprint((.join(list(map(str, x))),))', '01', '[0] [1] ', '(\"01\")', ' (\"[0] [1]\",)', 'D', ' (element,) is not the same as element. It is a tuple with one item.'),
(175, '', ' The process of pickling in Python includes ____________', 'conversion of a Python object hierarchy into byte stream', 'conversion of a datatable into a list', 'conversion of a byte stream into Python object hierarchy', 'conversion of a list into a datatable', 'A', ' Pickling is the process of serializing a Python object, that is, conversion of a Python object hierarchy into a byte stream. The reverse of this process is known as unpickling.'),
(176, 'python', 'What will be the output of the following Python code? <br>\r\ndef foo(): <br>\r\n    try: <br>\r\n        return 1 <br>\r\n    finally: <br>\r\n        return 2 <br>\r\nk = foo() <br>\r\nprint(k)', 'error, there is more than one return statement in a single try-finally block', '3', '2', '1', 'C', ' The finally block is executed even there is a return statement in the try block.'),
(177, 'python', 'What is the maximum possible length of an identifier?', '16', '32', '64', 'none of the mentioned', 'D', 'The maximum possible length of an identifier is not defined in the python language. It can be of any number.'),
(178, 'python', 'Who developed the Python language?', 'Zim Den', 'Guido van Rossum', 'Niene Stom', 'Wick van Rossum', 'B', ' Python language was developed by Guido van Rossum in the Netherlands.'),
(179, 'python', ' Python language was developed by Guido van Rossum in the Netherlands.', '1995', '1972', '1981', '1989', 'D', ': Python language was developed by Guido van Rossum in 1989.'),
(180, 'python', 'In which language is Python written?', 'English', 'PHP', 'C', 'All of the above', 'C', ' Python is written in C programming language, and it is also called CPython.'),
(181, 'python', 'Which one of the following is the correct extension of the Python file?', '.py', '.python', '.p', 'None of these', 'A', '\".py\" is the correct extension of the Python file. '),
(182, 'python', 'In which year was the Python 3.0 version developed?', '2008', '2000', '2010', '2005', 'A', 'Python 3.0 version was developed on December 3, 2008.'),
(183, 'python', 'What do we use to define a block of code in Python language?', 'Key', 'Brackets', 'Indentation', 'None of these', 'C', ' Python uses indentation to define blocks of code. Indentations are simply spaces or tabs used as an indicator that is part of the indent code child. As used in curly braces C, C++, and Java.'),
(184, 'python', ' Which of the following statements is correct regarding the object-oriented programming concept in Python?', 'Classes are real-world entities while objects are not real', 'Objects are real-world entities while classes are not real', 'Both objects and classes are real-world entities', 'All of the above', 'B', ' Objects are real-world entities while classes are not real'),
(185, 'python', 'What is the method inside the class in python language?', 'Object', 'Function', 'Attribute', 'Argument', 'B', ' Function is also known as the method.'),
(186, 'python', ' Which of the following declarations is incorrect?', '_x = 2', '__x = 3', '__xyz__ = 5', 'None of these', 'D', ' All declarations will execute successfully but at the expense of low readability.'),
(187, 'python', 'Why does the name of local variables start with an underscore discouraged', 'To identify the variable', 'It confuses the interpreter', 'It indicates a private variable of a class', 'None of these', 'C', ': Since there is no concept of private variables in Python language, the major underscore is used to denote variables that cannot be accessed from outside the class.'),
(188, 'python', 'Which of the following is not a keyword in Python language?', 'val', 'raise', 'try', 'with', 'A', ' \"val\" is not a keyword in python language.'),
(189, 'python', '', 'All variable names must begin with an underscore.', 'Unlimited length', 'The variable name length is a maximum of 2.', 'All of the above', 'B', 'None'),
(190, 'cpp', ' Which of the following declarations is incorrect in python language?', 'xyzp = 5,000,000', 'x y z p = 5000 6000 7000 8000', 'x,y,z,p = 5000, 6000, 7000, 8000', 'x_y_z_p = 5,000,000', 'B', ' Spaces are not allowed in variable names.'),
(191, 'python', ' Which of the following words cannot be a variable in python language?', '_val', 'val', 'try', '_try_', 'C', '\"try\" is a keyword.'),
(192, 'python', 'Which of the following operators is the correct option for power(ab)?', 'a ^ b', 'a**b', 'a ^ ^ b', 'a ^ * b', 'B', ' The power operator in python is a**b, i.e., 2**3=8.'),
(193, 'python', ') Which of the following precedence order is correct in Python?', 'Parentheses, Exponential, Multiplication, Division, Addition, ', 'Multiplication, Division, Addition, Subtraction, Parentheses, Exponential', 'Division, Multiplication, Addition, Subtraction, Parentheses, Exponential', 'Exponential, Parentheses, Multiplication, Division, Addition, Subtraction', 'A', 'PEMDAS (similar to BODMAS).'),
(194, 'python', 'Which one of the following has the same precedence level?', 'Division, Power, Multiplication, Addition and Subtraction', 'Division and Multiplication', 'Subtraction and Division', 'Power and Division', 'B', 'None'),
(195, 'python', 'Which one of the following has the highest precedence in the expression?', 'Division', 'Subtraction', 'Power', 'Parentheses', 'D', 'PEMDAS (similar to BODMAS).'),
(196, 'python', 'Which of the following functions is a built-in function in python language?', 'val()', 'print()', 'print()', 'None of these', 'B', ' The print() function is a built-in function in python language that prints a value directly to the system.'),
(197, 'python', ' Study the following function:<br>\r\nround(4.576)  <br>\r\nWhat will be the output of this function?', '4', '6', '576', '5', 'D', 'The round function is a built-in function in the Python language that round-off the value (like 3.85 is 4), so the output of this function will be 5.'),
(198, 'python', 'Which of the following is correctly evaluated for this function?<br>\r\npow(x,y,z)  \r\n', '(x**y) / z', '(x / y) * z', '(x**y) % z', '(x / y) / z', 'C', 'None'),
(199, 'python', ' Study the following function:<br>\r\nall([2,4,0,6])  \r\nWhat will be the output of this function?\r\n', 'False', 'True', '0', 'Invalid code', 'A', 'If any element is zero, it returns a false value, and if all elements are non-zero, it returns a true value. Hence, the output of this \"all([2,4,0,6])\" function will be false.'),
(200, 'python', 'Study the following program:<br>\r\nx = 1  <br>\r\nwhile True:  <br>\r\n    if x % 5 = = 0:  <br>\r\n        break  <br>\r\n    print(x)   <br>\r\n    x + = 1  <br>\r\nWhat will be the output of this code?\r\n', 'Error', '2 1', '0 3 1', 'none of the mentioned', 'A', 'Syntax error, there should not be a space between + and =.'),
(201, 'python', ' Which one of the following syntaxes is the correct syntax to read from a simple text file stored in \'d:java.txt\'?', 'Infile = open(\'d:\\java.txt\', \'r\')', 'Infile = open(file=\'d:\\java.txt\', \'r\')', 'Infile = open(\'d:java.txt\',\'r\')', 'Infile = open.file(\'d:\\java.txt\',\'r\')', 'A', 'None'),
(202, 'python', 'Study the following code: <br>\r\nx = [\"XX\", \"YY\"]  <br>\r\nfor i in a:  <br>\r\n    i.lower()  <br>\r\nprint(a)  <br>\r\nWhat will be the output of this program?\r\n', '[\"XX\", \"YY\"]', '[\"xx\", \"yy\"]', '[XX, yy]', 'None of these', 'A', 'None'),
(203, 'python', 'Study the following function: <br>\r\nimport math  <br>\r\nabs(math.sqrt(36))  <br>\r\nWhat will be the output of this code?\r\n', 'Error', '-6', '6', '6.0', 'D', ' This function prints the square of the value. '),
(204, 'python', 'Study the following function:<br>\r\nany([5>8, 6>3, 3>1])  <br>', 'False', 'True', 'invalid code', 'none of the mentioned', 'B', 'none'),
(205, 'python', ' Study the following statement:\r\n<br>\r\n>>>\"a\"+\"bc\"  <br>\r\nWhat will be the output of this statement?', 'a+bc', 'abc', 'a bc', 'a', 'B', 'In Python, the \"+\" operator acts as a concatenation operator between two strings. '),
(206, 'python', 'Study the following code:<br>\r\n>>>\"javatprint\"[5:]  <br>\r\nWhat will be the output of this code?', 'avap', 'java', 'print', 'none of the mentioned', 'C', 'Slice operation is performed on the string.'),
(207, 'python', 'The output to execute string.ascii_letters can also be obtained from:?', 'character', 'ascii_lowercase_string.digits', 'lowercase_string.upercase', 'ascii_lowercase+string.ascii_upercase', 'D', 'None'),
(208, 'python', 'Study the following statements: <br>\r\n>>> str1 = \"javat\"  <br>\r\n>>> str2 = \":\"  <br>\r\n>>> str3 = \"point\"  <br>\r\n>>> str1[-1:]  <br>\r\nWhat will be the output of this statement?', 't', 'j', 'point', 'java', 'A', 'The correct output of this program is \"t\" because -1 corresponds to the last index.'),
(209, 'python', 'Study the following statements: <br>\r\n>>> print(0xA + 0xB + 0xC)  <br>\r\nWhat will be the output of this statement?', '33', '63', '0xA + 0xB + 0xC', 'none of the mentioned', 'A', ' A, B and C are hexadecimal integers with values 10, 11 and 12 respectively, so the sum of A, B and C is 33.'),
(210, 'python', 'Study the following statements:\r\n\r\n>>> print(ord(\"h\") - ord(\"z\"))  \r\nWhat will be the output of this statement?', '18', '-18', '17', '-17', 'B', 'ASCII value of h is less than the z. Hence the output of this code is 104-122, which is equal to -18.'),
(211, 'python', 'Study the following program:<br>\r\na = 1  <br>\r\nwhile True: <br> \r\n    if a % 7 = = 0:  <br>\r\n        break  <br>\r\n    print(a)  <br>\r\n    a += 1  <br>\r\nWhich of the following is correct output of this program?', '1 2 3 4 5', '1 2 3 4 5 6', '1 2 3 4 5 6 7', 'Invalid syntax', 'B', 'None'),
(212, 'python', 'Study the following program:<br>\r\ni = 0<br>  \r\nwhile i < 5:<br>  \r\n    print(i)  <br>\r\n    i += 1  <br>\r\n    if i == 3:  <br>\r\n        break  <br>\r\nelse:  <br>\r\n    print(0)  <br>\r\nWhat will be the output of this statement?', '1 2 3', '0 1 2 3', '0 1 2', '3 2 1', 'C', 'None'),
(213, 'python', 'Study the following program:<br>\r\ni = 0  <br>\r\nwhile i < 3:<br>  \r\n    print(i)  <br>\r\n    i += 1  <br>\r\nelse:  <br>\r\n    print(0) <br> \r\nWhat will be the output of this statement?', '0 1', '0 1 2', '0 1 2 0', '0 1 2 3', 'C', 'None'),
(214, 'python', 'Study the following program: <br>\r\nz = \"xyz\"  <br>\r\nj = \"j\"  <br>\r\nwhile j in z:  <br>\r\n    print(j, end=\" \")  <br>\r\nWhat will be the output of this statement?', 'xyz', 'No output', 'x y z', 'j j j j j j j..', 'B', '\"j\" is not in \"xyz\".'),
(215, 'python', 'Which of the following option is not a core data type in the python language?', 'Dictionary', 'Lists', 'Class', 'All of the above', 'C', 'Class is not a core data type because it is a user-defined data type. '),
(216, 'python', ' What happens when \"2\" == 2 is executed?', 'False', 'True', 'ValueError occurs', 'TypeError occurs', 'A', ' It only evaluates to false.'),
(217, 'python', 'Study the following statement<br>\r\nz = {\"x\":0, \"y\":1}  <br>\r\nWhich of the following is the correct statement?', 'x dictionary z is created', 'x and y are the keys of dictionary z', '0 and 1 are the values of dictionary z', 'All of the above', 'D', 'All of the above statements is correct regarding Python code');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `level` varchar(250) NOT NULL,
  `year` int(11) NOT NULL,
  `question` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `course_name`, `qualification`, `level`, `year`, `question`) VALUES
(1, 'cpp', 'HND', '200', 2022, 'C++_PROGRAMMING_PAST_QUESTION (1).pdf'),
(2, 'cpp', 'HND', '200', 2021, 'C++_PROGRAMMING_PAST_QUESTION (2).pdf'),
(3, 'cpp', 'HND', '200', 2020, 'C++_PROGRAMMING_PAST_QUESTION (3).pdf'),
(4, 'cpp', 'HND', '200', 2023, 'C++_PROGRAMMING_PAST_QUESTION (4).pdf'),
(5, 'database', 'HND', '200', 2022, 'Database.pdf'),
(6, 'database', 'HND', '200', 2020, 'Database3.pdf'),
(7, 'database', 'HND', '200', 2019, 'Database4.pdf'),
(8, 'hci', 'HND', '200', 2021, 'hci21l200.pdf'),
(9, 'java', 'HND', '200', 2022, 'Java.pdf'),
(10, 'cpp', 'HND', '200', 2023, 'Cpp Resit 2023.pdf'),
(11, 'database', 'HND', '200', 2023, 'Database Resit 2023.pdf'),
(12, 'ecom', 'HND', '200', 2019, 'ecom1.pdf'),
(13, 'ecom', 'HND', '200', 2022, 'ecom2.pdf'),
(17, 'com. skills', 'DIP', '100', 2023, 'comskills23dep.pdf'),
(18, 'java', 'Btech', '200', 2024, 'Fast Scan 06-01-2024 11_15.pdf'),
(19, 'com. skills', 'HND', '100', 2018, 'COMMUNICATION SKILLS TWO  (3).pdf'),
(20, 'com. skills', 'HND', '100', 2017, 'COMMUNICATION SKILLS TWO  (2).pdf'),
(21, 'com. skills', 'HND', '100', 2017, 'COMMUNICATION SKILLS TWO  (1).pdf'),
(22, 'com. skills', 'HND', '100', 2021, 'COMMUNICATION_SKILLS_ONE_PAST_QUESTION (1).pdf'),
(23, 'com. skills', 'HND', '100', 2021, 'COMMUNICATION_SKILLS_ONE_PAST_QUESTION (1).pdf'),
(24, 'com. skills', 'HND', '100', 2020, 'COMMUNICATION_SKILLS_ONE_PAST_QUESTION (2).pdf'),
(25, 'com. skills', 'HND', '100', 2020, 'COMMUNICATION_SKILLS_ONE_PAST_QUESTION (3).pdf'),
(26, 'com. skills', 'Btech', '100', 2021, 'COMMUNICATION_SKILLS_ONE_PAST_QUESTION (4).pdf'),
(27, 'com. skills', 'Btech', '100', 2021, 'COMMUNICATION_SKILLS_ONE_PAST_QUESTION (5).pdf'),
(28, 'com. skills', 'HND', '100', 2021, 'COMMUNICATION_SKILLS_ONE_PAST_QUESTION (7).pdf'),
(29, 'com. skills', 'HND', '100', 2021, 'COMMUNICATION_SKILLS_ONE_PAST_QUESTION (6).pdf'),
(30, 'com. skills', 'HND', '0', 2021, 'COMMUNICATION_SKILLS_ONE_PAST_QUESTION (6).pdf'),
(31, 'infotech', 'HND', '100', 2021, 'INFORMATION_TECHNOLOGY_ONE_PAST_QUESTION (1).pdf'),
(32, 'infotech', 'HND', 'Exams', 2016, 'INFORMATION TECHNOLOGY TWO (1).pdf'),
(33, 'infotech', 'HND', 'Exams', 2017, 'INFORMATION TECHNOLOGY TWO (2).pdf'),
(35, 'infotech', 'HND', 'Exams', 2017, 'INFORMATION TECHNOLOGY TWO (3).pdf'),
(36, 'infotech', 'HND', 'Exams', 2017, 'INFORMATION TECHNOLOGY TWO.pdf'),
(37, 'com. skills', 'HND', 'Exam', 2021, 'INFORMATION_TECHNOLOGY_ONE_PAST_QUESTION (1).pdf'),
(38, 'com. skills', 'HND', 'Resit', 2018, 'INFORMATION_TECHNOLOGY_ONE_PAST_QUESTION (2).pdf'),
(39, 'com. skills', 'HND', 'Exam', 2019, 'INFORMATION_TECHNOLOGY_ONE_PAST_QUESTION (3).pdf'),
(40, 'com. skills', 'HND', 'Exam', 2021, 'INFORMATION_TECHNOLOGY_ONE_PAST_QUESTION (4).pdf'),
(41, 'com. skills', 'HND', 'Exam', 2022, 'INFORMATION_TECHNOLOGY_ONE_PAST_QUESTION (5).pdf'),
(42, 'java', 'HND', 'Exam', 2017, 'JAVA PROGRAMMING (1).pdf'),
(43, 'java', 'HND', 'Mid-Sem', 2017, 'JAVA PROGRAMMING (4).pdf'),
(44, 'java', 'HND', 'Exam', 2020, 'JAVA PROGRAMMING (6).pdf'),
(45, 'java', 'HND', 'Exam', 2018, 'JAVA PROGRAMMING (7).pdf'),
(46, 'java', 'HND', 'Exam', 2018, 'JAVA PROGRAMMING (8).pdf'),
(47, 'com app', 'Btech', 'Exams', 2022, 'COMPUTER_APPLICATIONS_PAST_QUESTION (1).pdf'),
(48, 'com app', 'HND', 'Exams', 2020, 'COMPUTER_APPLICATIONS_PAST_QUESTION (2).pdf'),
(49, 'com app', 'Btech', 'Resit', 2021, 'COMPUTER_APPLICATIONS_PAST_QUESTION (3).pdf'),
(50, 'com app', 'HND', 'Mid-Sem', 2021, 'COMPUTER_APPLICATIONS_PAST_QUESTION (4).pdf'),
(51, 'com app', 'HND', 'Exams', 2016, 'COMPUTER_APPLICATIONS_PAST_QUESTION (5).pdf'),
(52, 'com app', 'HND', 'Exams', 2019, 'COMPUTER_APPLICATIONS_PAST_QUESTION (6).pdf'),
(53, 'com app', 'HND', 'Exams', 2019, 'COMPUTER APPLICATION IN HOSPITALITY MANAGEMENT.pdf'),
(54, 'com app', 'HND', 'Exams', 2018, 'COMPUTER APPLICATIONS IN HOSPITALITY.pdf'),
(55, 'com app', 'HND', 'Exams', 2018, 'COOMUNICATION IN HOSPITALITY.pdf'),
(56, 'african studies', 'HND', 'Exams', 2012, 'AFRICAN STUDIES_PAST_QUESTION (1).pdf'),
(57, 'african studies', 'HND', 'Exams', 2011, 'AFRICAN STUDIES_PAST_QUESTION (2).pdf'),
(58, 'african studies', 'HND', 'Exams', 2021, 'AFRICAN STUDIES_PAST_QUESTION (3).pdf'),
(59, 'african studies', 'HND', 'Exams', 2018, 'AFRICAN STUDIES_PAST_QUESTION (3).pdf'),
(60, 'african studies', 'HND', 'Exams', 2019, 'AFRICAN_STUDIES_PAST_QUESTION (5).pdf'),
(61, 'african studies', 'HND', 'Mid-Sem', 2016, 'AFRICAN_STUDIES_PAST_QUESTION (6).pdf'),
(62, 'african studies', 'HND', 'Resit', 2018, 'AFRICAN_STUDIES_PAST_QUESTION (7).pdf'),
(63, 'african studies', 'Btech', 'Exams', 2021, 'AFRICAN_STUDIES_PAST_QUESTION (8).pdf'),
(64, 'african studies', 'HND', 'Exams', 2020, 'AFRICAN_STUDIES_PAST_QUESTION (9).pdf'),
(65, 'african studies', 'HND', 'Mid-Sem', 2016, 'AFRICAN STUDIES_PAST_QUESTION (9).pdf'),
(66, 'african studies', 'HND', 'Mid-Sem', 2019, 'AFRICAN STUDIES_PAST_QUESTION (10).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(11) NOT NULL,
  `student_id` varchar(250) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `lecturer_id` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL,
  `marks` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `started`
--

CREATE TABLE `started` (
  `id` int(11) NOT NULL,
  `course` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL,
  `lecturer_id` varchar(250) NOT NULL,
  `lecturer_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fullName`, `username`, `email`, `department`, `password`, `registration_date`) VALUES
(1, 'Oppong Coffie', '', 'student1', '', 'student1', '2023-11-16 03:22:13'),
(2, 'Oppong Coffie', '', 'godblessme5011', '', '', '2023-11-30 10:58:11'),
(4, 'Bh', '', 'Ui', '', 'uu', '2023-12-10 20:20:44'),
(5, 'JamAGod ', '', 'yanksonpaa04@gmail.com', '', 'qwertyuiop', '2023-12-10 22:17:14'),
(6, 'Concert Boy', '', 'cboy@gmail.com', '', 'password', '2023-12-20 13:13:17'),
(7, 'Max', '', 'nur30067@zslsz.com', '', 'Nur30067@zslsz.com1', '2023-12-20 21:21:17'),
(8, 'ss', '', 'ss', '', 'ss', '2024-01-02 18:00:03'),
(9, 'kwekuboat', '', 'khodednova@gmail.com', '', '14112001', '2024-01-02 21:46:46'),
(10, 'Wadosty', '', 'Wadostyisaac@gmail.com', '', 'Wadosty1010', '2024-01-04 13:03:10'),
(11, 'Joseph baah', '', 'kojob603@gmail.com', '', 'kojobaah246', '2024-01-04 13:03:24'),
(15, '', '', '', '', '', '2024-01-04 13:05:21'),
(17, 'kwameattipoe12', '', 'kwameattipoe12@gmail.com', '', '0030109107', '2024-01-04 13:29:24'),
(18, 'Ishmael Sozah', '', 'ishmaelsozah@gmail.com', '', 'sweetjey', '2024-01-04 13:30:28'),
(21, 'Theodora ', '', 'theodoracobbinah261@gmail.com', '', 'madeinghana1', '2024-01-04 13:34:22'),
(23, 'Gideon Frimpong Dadzie', '', 'dadziegideon823@gmail.com', '', 'miss.dawson1', '2024-01-04 13:42:20'),
(24, 'Hybrain ', '', 'hybrain2811@gmail', '', 'sam0505443800', '2024-01-04 13:44:16'),
(27, 'Tweneboah Gideon', '', 'tg5753264@gmail.com', '', 'Myttustudies', '2024-01-04 13:58:25'),
(28, 'Kornaa Kadir ', '', 'Kornaakadir447@gmail.com', '', 'Mygmail.com2', '2024-01-04 14:32:31'),
(29, 'Blaisedrich Ndede Ackah ', '', 'pastorkuma5050@gmail.com', '', 'pasTor5050', '2024-01-04 14:35:35'),
(31, 'Godswill', '', 'gconduah11@gmail.com', '', 'Tawiah11', '2024-01-04 16:25:16'),
(32, 'Kenneth Samuel', '', 'kennethfugar25@gmail.com', '', 'Cleanstoneminessa!!!', '2024-01-04 18:20:10'),
(38, 'Godfred', '', 'Quarm', '', 'GodwinQuarm@1', '2024-01-05 12:59:26'),
(39, 'Godfred', '', 'godfredquarm123@gmail.com', '', 'GodwinQuarm@1', '2024-01-05 14:15:03'),
(40, 'hilary', '', 'hilaryaa@yahoo.com', '', '998822', '2024-01-05 16:28:23'),
(43, 'Ata Ahenkorah', 'ata', 'ata@gmail.com', 'it', '5011', '2024-01-06 19:25:23'),
(44, 'Michael', 'BMiche', 'mariadonna595@gmail.com', 'it', 'cookielyon19', '2024-01-06 21:41:50'),
(45, 'Godwin', 'Nana Amoah', 'godwinnanaamoah1975@gmail.com', 'it', 'Go0535957055', '2024-01-07 01:32:22'),
(46, 'Maxwell Mokwah', 'Maxwell Mokwah ', 'maxwellmokwah@gmail.com', 'it', 'Sarahmokwah1234', '2024-01-07 06:51:59'),
(47, 'mends', 'gyan', 'gyankwadwomends2001@gmail.com', 'it', 'mends1234', '2024-01-07 14:26:25'),
(48, 'Cosmos Dadzie ', 'CDJ', 'dadziecosmosjunior9321@gmail.com', 'it', 'Wodaada24', '2024-01-08 16:34:34'),
(49, 'Ata Ahenkorah ', 'Aya', 'oppongcoffie27@gmail.com ', 'it', '5011', '2024-01-09 18:46:29'),
(50, 'Mike', 'Mikekofii', 'kofiatomari@gmail.com', 'it', '12345', '2024-01-09 20:53:46'),
(51, 'Washington Harris-osei', 'Washington', 'nanayaairis_quiss@icloud .com', 'it', 'Lilkenquis2', '2024-01-10 22:25:37'),
(52, 'Onan Knowledge ', 'Kwabiionan', 'kwabiionan@gmail.com', 'it', 'Cj7campus', '2024-01-10 22:32:46'),
(53, 'GAD KATEY OCANSEY', 'Gadoo', 'gad.ocansey@ttu.edu.gh', 'it', '11111111', '2024-01-14 21:02:42'),
(57, 'Isaac Carry ', 'Big Nasty', 'nastynicee4@gmail.com', 'it', 'qwerty123', '2024-01-18 15:48:30'),
(58, 'Leah Dugbartey Dornukie ', 'twilight', 'BCITS23033@ttu.edu.gh', 'it', 'BPXVNKWD4', '2024-01-18 15:59:53'),
(59, 'Agbettor Jona', 'Jona', 'agbettorj1@gmail.com', 'it', 'Brainboi1', '2024-01-24 21:57:49'),
(60, 'Pm Devs', 'Pmd', 'bci360gh@gmail.com', 'it', 'pmd100', '2024-01-24 21:58:59'),
(61, 'Benjamin Benya ', 'qweku.triggered', 'benjaminbenya08@gmail.com', 'it', 'vrockpokey1', '2024-01-24 21:59:07'),
(62, 'Mhame Yhaa', 'Mhame ', 'mhameyhaa6@gmail.com', 'it', 'Mhame123', '2024-01-24 21:59:33'),
(63, 'Daniel', '5star Danny', 'cobbinahdaniel17@gmail.com', 'it', '6dan6iel2', '2024-01-24 22:02:51'),
(64, 'Blaq', 'Blaq0', 'mosquitogh55@gmail.com', 'it', 'qwerty', '2024-01-24 22:03:07'),
(65, 'Digital', 'Louis', 'digitallouis4@gmail.com', 'it', 'simple123', '2024-01-24 22:11:02'),
(66, 'Boakye Frederick', 'realboss', 'boakyefred2070@icloud.com', 'it', 'realBoss12345', '2024-01-24 22:38:40'),
(67, 'Pious Armoh', '@pious', 'piusarmoh1@gmail.com', 'it', 'Vero0503', '2024-01-24 22:55:04'),
(68, 'Gershon Korley Dzeagu ', 'Gershonson', 'gershondzeagu@gmail.com', 'it', 'levelup', '2024-01-24 23:00:22'),
(69, 'Emmanuel Mensah Addai', 'Addai58', '0721000012@ttu.edu.gh', 'it', 'Linkwise58@', '2024-01-24 23:01:52'),
(70, 'Olivia ', 'Mensah ', '815mensaholivia@gmail.com', 'it', 'olivia815', '2024-01-25 00:17:33'),
(72, 'Abdulai ', 'ibrahim', 'belindajackson470@gmail.com', 'it', 'Abdulai35', '2024-01-25 01:00:36'),
(73, 'patrick gyamfi', 'Pkay ', 'nanakojo1435@gmail.com', 'it', 'pkay1435', '2024-01-25 01:12:02'),
(74, 'Eugene ekow quarshie', 'Eugene1', 'Eugenequarshie2016@gmail.com', 'it', 'Eugy6255e', '2024-01-25 04:35:20'),
(75, 'Amaana Ishaque ', 'Amaana ', 'amaanaishaquehayfeen@gmail.com', 'it', 'Amaana', '2024-01-25 06:14:16'),
(76, 'Michael Narteh ', 'Micky ', '0720000280@ttu.edu.gh', 'it', 'mickymj', '2024-01-25 06:55:19'),
(77, 'Amoayiti Akanyakum ', 'John', 'amoayitijohn8@gmail.com', 'it', 'peFvu5-denhix-qarpit', '2024-01-25 06:56:45'),
(78, 'GYESIE PAUL JUNIOR ', 'PAUL GOLD ', 'paulgyesiejunior7@gmail.com', 'it', 'Goldboy.pajun22', '2024-01-25 07:22:58'),
(79, 'Naomi Larteyley Lartey', 'Maame Esi', 'larteynaomi39@gmail.com', 'it', 'Mama2232', '2024-01-25 07:32:02'),
(80, 'Charlotte', 'Bala ', 'balacharlotte759@gmail.com', 'it', 'AkosuA20', '2024-01-25 07:45:56'),
(81, 'Kkkjo', 'Hh', 'Jk@mm', 'it', '12345', '2024-01-25 07:55:11'),
(82, 'Enock Baidoo', 'ENOCKBAIDOO', 'enock.12baidoo@gmail.com', 'it', 'Baidoo2003', '2024-01-25 07:55:37'),
(83, 'Cephas', 'Beckley', 'cephasbeck23@gmail.com ', 'it', '@Mancity123', '2024-01-25 08:28:24'),
(84, 'Emmanuel ', 'Osei kwame ', 'ek9427544@gmail.com', 'it', 'Emma@709', '2024-01-25 08:58:59'),
(85, 'Louisa bruce ', 'Louisa ', 'Louisabruce557@gmail.com', 'it', '0592235950AA', '2024-01-25 09:05:36'),
(86, 'King ', 'Jamal', 'jamalabdulnasel@gmail.com', 'it', 'gobboj-coxhy8-niDdud', '2024-01-25 09:27:23'),
(87, 'Daniel ', 'Dadzie ', 'ddanzzy97@gmail.com', 'it', 'danzzy97', '2024-01-25 10:34:16'),
(88, 'Kofi Obuom Agyare', 'Seyram', 'kofiobuomagyare@gmail.com', 'it', 'Kofi@Seyram08', '2024-01-25 11:49:12'),
(89, 'Boadu-Dwamena David ', 'David109', 'boaddavid1@gmail.com', 'it', 'King0547938109', '2024-01-25 12:45:51'),
(90, 'Oscar Love Stephens', 'Oscar Love ', 'stephensoscar603@gmail.com ', 'it', 'Oscarlove03', '2024-01-25 13:47:35'),
(91, 'nana prah', 'nanaDC69', 'kuntuebo@gmail.com', 'it', '13May2021', '2024-01-25 15:22:01'),
(92, 'Martin Nyankey', '0722000013', '0722000013@ttu.edu.com', 'it', 'EYEF7XUA', '2024-01-25 16:41:58'),
(93, 'ELLIOT EDMUND GARDENER', 'Delali', 'delalieddie@icloud.com', 'it', 'Delali@1994', '2024-01-25 17:07:47'),
(94, 'Clement Ansah ', 'CKAnsah', 'kwameansah24@gmail.com', 'it', 'passw0rd', '2024-01-25 17:30:14'),
(95, 'EBENEZER KOFI ANSAH-WALTERS ', 'Kofi Walters ', 'kofiwalters45@gmail.com', 'it', 'Dr@kw0402', '2024-01-25 17:38:36'),
(98, 'John Adonso', 'Adonso', 'Johnquansah498@gmail.com', 'it', 'Adonso@12345', '2024-01-25 18:20:27'),
(99, 'ABROKWAH BEDZRAH NANA', 'Abrokwah', 'nanaabrokwah9@gmail.com', 'it', 'Abrokwah1', '2024-01-26 07:10:47'),
(100, 'Joe Tetteh ', 'Nii', 'tetteh0547@gmail.com', 'it', 'Iii@1234', '2024-01-26 18:49:21'),
(101, 'SILAS BOTCHEY ', 'Kwaku_Dunga ', 'silasbotchey97@gmail.com', 'it', 'Botchey97', '2024-01-29 11:44:32'),
(102, 'Duodu Frimpong ', 'Dblaz ', 'blazdanny@gmail.com', 'it', '200494', '2024-02-02 06:52:59'),
(103, 'Ebenezer', 'Nk', 'ebenezeradjeisah2003@gmail.com', 'it', '11111', '2024-02-12 17:19:21'),
(104, 'John', 'John', 'John@gmail.com', 'it', '1234', '2024-02-12 17:21:32'),
(105, 'Judith Ackaah-Gyasi ', 'Adwoa', 'ackaahgyasijudithpraizes@gmail.com', 'it', 'judie2002', '2024-02-12 17:49:11'),
(107, 'Ebenezer Mensah ', 'ebenezermensah2550@gmail.com', 'ebenezermensah2550@gmail.com', 'it', '71018', '2024-02-21 14:41:06'),
(108, 'Emmanuel Ajigiwe Atio ', 'Ajigiwe ', 'minatoflash82@gmail.com', 'it', 'vader123', '2024-02-22 09:03:11'),
(109, 'ABOAGYE NICHOLAS AKOMENG ELKANNAH ', 'unknown1107', 'elkannahnichol@gmail.com', 'it', 'Nakae@21..', '2024-02-24 16:58:00'),
(110, 'Dora Fie', 'Blaq', 'dorese26@gmail.com', 'it', '0550083698', '2024-02-25 16:14:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_practice_questions`
--
ALTER TABLE `access_practice_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment_setup`
--
ALTER TABLE `assignment_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practice_questions`
--
ALTER TABLE `practice_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `started`
--
ALTER TABLE `started`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_practice_questions`
--
ALTER TABLE `access_practice_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `assignment_setup`
--
ALTER TABLE `assignment_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `practice_questions`
--
ALTER TABLE `practice_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `started`
--
ALTER TABLE `started`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
