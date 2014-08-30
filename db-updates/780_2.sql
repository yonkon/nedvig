/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

 CREATE TABLE IF NOT EXISTS opportuniti_sphr_client_c (
    id varchar(36) NOT NULL,
    date_modified datetime DEFAULT NULL,
    deleted tinyint(1) DEFAULT '0',
    opportunitf5c8unities_ida varchar(36) DEFAULT NULL,
    opportunitf4a8_client_idb varchar(36) DEFAULT NULL,
    PRIMARY KEY (id),
    KEY opportunities_sphr_client_alt (opportunitf5c8unities_ida,opportunitf4a8_client_idb)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS sphr_inspec_sphr_client_c (
    id varchar(36) NOT NULL,
    date_modified datetime DEFAULT NULL,
    deleted tinyint(1) DEFAULT '0',
    sphr_inspe351fon_tour_ida varchar(36) DEFAULT NULL,
    sphr_inspe7f78_client_idb varchar(36) DEFAULT NULL,
    PRIMARY KEY (id),
    KEY sphr_inspecur_sphr_client_ida1 (sphr_inspe351fon_tour_ida),
    KEY sphr_inspecur_sphr_client_idb2 (sphr_inspe7f78_client_idb),
    KEY sphr_inspecur_sphr_client_alt (sphr_inspe351fon_tour_ida,sphr_inspe7f78_client_idb)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;