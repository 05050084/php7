-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Dec 20, 2007, 10:29 AM
-- 伺服器版本: 5.0.41
-- PHP 版本: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `ch09`
-- 
CREATE DATABASE `ch09` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ch09`;

-- --------------------------------------------------------

-- 
-- 資料表格式： `books`
-- 

CREATE TABLE `books` (
  `書籍編號` int(11) NOT NULL auto_increment,
  `書籍名稱` varchar(20) collate utf8_unicode_ci NOT NULL,
  `價格` decimal(6,2) NOT NULL,
  `負責員工編號` int(11) NOT NULL,
  PRIMARY KEY  (`書籍編號`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

-- 
-- 列出以下資料庫的數據： `books`
-- 

INSERT INTO `books` (`書籍編號`, `書籍名稱`, `價格`, `負責員工編號`) VALUES 
(1, 'Windows Server 系統實務', 500.00, 2),
(2, 'Outlook 快學快用', 350.00, 4),
(3, 'AutoCAD 電腦繪圖', 450.00, 3),
(4, 'Word 使用手冊', 300.00, 8),
(5, '抓住你的 Photoshop', 450.00, 1),
(6, 'Linux 架站實務', 500.00, 2),
(7, 'EXECL 快速入門', 350.00, 6),
(8, 'PHP 程式語言', 460.00, 2),
(9, 'XOOPS 架站王', 380.00, 8),
(10, '防火牆架設實務', 480.00, 1),
(11, 'Linux 系統管理實務', 450.00, 5),
(12, 'Windows 使用手冊', 320.00, 7);

-- --------------------------------------------------------

-- 
-- 資料表格式： `company1`
-- 

CREATE TABLE `company1` (
  `書籍編號` int(11) NOT NULL auto_increment,
  `書籍名稱` varchar(20) collate utf8_unicode_ci NOT NULL,
  `價格` decimal(6,2) NOT NULL,
  PRIMARY KEY  (`書籍編號`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- 列出以下資料庫的數據： `company1`
-- 

INSERT INTO `company1` (`書籍編號`, `書籍名稱`, `價格`) VALUES 
(1, 'Windows 使用手冊', 400.00),
(2, 'Linux 架站實務', 500.00),
(3, 'PHP 程式語言', 420.00);

-- --------------------------------------------------------

-- 
-- 資料表格式： `company2`
-- 

CREATE TABLE `company2` (
  `書籍編號` int(11) NOT NULL auto_increment,
  `書籍名稱` varchar(20) collate utf8_unicode_ci NOT NULL,
  `價格` decimal(6,2) NOT NULL,
  PRIMARY KEY  (`書籍編號`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- 列出以下資料庫的數據： `company2`
-- 

INSERT INTO `company2` (`書籍編號`, `書籍名稱`, `價格`) VALUES 
(1, 'Windows 使用手冊', 400.00),
(2, 'Linux 架站實務', 490.00),
(3, 'SQL 指令寶典', 440.00);

-- --------------------------------------------------------

-- 
-- 資料表格式： `employee`
-- 

CREATE TABLE `employee` (
  `員工編號` int(11) NOT NULL auto_increment,
  `性別` char(1) collate utf8_unicode_ci NOT NULL,
  `姓名` varchar(10) collate utf8_unicode_ci NOT NULL,
  `電話` varchar(10) collate utf8_unicode_ci NOT NULL,
  `主管編號` int(11) default NULL,
  PRIMARY KEY  (`員工編號`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

-- 
-- 列出以下資料庫的數據： `employee`
-- 

INSERT INTO `employee` (`員工編號`, `性別`, `姓名`, `電話`, `主管編號`) VALUES 
(1, '女', '陳圓圓', '0223219845', 2),
(2, '女', '劉敏敏', '0246546777', NULL),
(3, '男', '劉國城', '0246465465', 2),
(4, '女', '蘇菲菲', '0287658764', 3),
(5, '男', '郭逸洋', '0354686546', 1),
(6, '男', '邱大熊', '0266873546', 1),
(7, '男', '王國維', '0688643546', 3),
(8, '女', '簡成琳', '0358547646', 1);
