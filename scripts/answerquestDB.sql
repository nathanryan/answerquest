-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2015 at 10:07 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a9684151_mytest`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `correct` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` VALUES(1, 1, 'False', '1');
INSERT INTO `answers` VALUES(2, 1, 'True', '0');
INSERT INTO `answers` VALUES(3, 2, '1938', '1');
INSERT INTO `answers` VALUES(4, 2, '1918', '0');
INSERT INTO `answers` VALUES(5, 2, '1833', '0');
INSERT INTO `answers` VALUES(6, 2, '1990', '0');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `question` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` VALUES(1, 1, 'capital of ireland is Paris', 'tf');
INSERT INTO `questions` VALUES(2, 2, 'what year did WW2 start?', 'mc');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_takers`
--

CREATE TABLE `quiz_takers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `percentage` varchar(24) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `quiz_takers`
--

INSERT INTO `quiz_takers` VALUES(1, 'nato', '66', '2015-06-19 14:33:34');

