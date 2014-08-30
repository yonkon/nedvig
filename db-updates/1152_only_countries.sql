-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2012 at 01:22 PM
-- Server version: 5.5.19
-- PHP Version: 5.3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_19',city_c='Russia_pr_19_city_1',current_city_c='Санкт-Петербург' WHERE current_address_c LIKE '%SPB%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_19',city_c='Russia_pr_19_city_1',current_city_c='Санкт-Петербург' WHERE current_address_c LIKE '%San Petersburgo%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_22',city_c='Russia_pr_22_city_1',current_city_c='Москва' WHERE current_address_c LIKE '%Москва%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_22',city_c='Russia_pr_22_city_1',current_city_c='Москва' WHERE current_address_c LIKE '%Moscu%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_33',city_c='Russia_pr_33_city_1',current_city_c='Рязань' WHERE current_address_c LIKE '%Рязань%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_32',city_c='Russia_pr_32_city_1',current_city_c='Ростов-на-дону' WHERE current_address_c LIKE '%Rostov del Don%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_43',city_c='Russia_pr_43_city_5',current_city_c='Салехард' WHERE current_address_c LIKE '%Salekhard%';
UPDATE sphr_client_cstm SET country_c ='Russia', region_c = 'Russia_pr_43',city_c='Russia_pr_43_city_1',current_city_c='Тюмень' WHERE current_address_c LIKE '%Tyumen%';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;