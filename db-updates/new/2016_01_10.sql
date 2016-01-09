ALTER TABLE `sphr_client` ADD `idn` INT NULL DEFAULT NULL , ADD INDEX (`idn`) ;

UPDATE sphr_client c JOIN
  (SELECT @rn:=@rn+1 AS rank, `id`
	  FROM (
        	SELECT *
  		    FROM sphr_client
  		    ORDER BY `date_entered` ASC
		      ) t1,
          (SELECT @rn:=0) t2
  ) t3
   ON t3.id = c.id
SET idn = rank;

DROP TRIGGER IF EXISTS `AUTO_INCERMENT_IDN`;
DELIMITER //
CREATE TRIGGER `AUTO_INCERMENT_IDN` BEFORE INSERT ON `sphr_client`
FOR EACH ROW SET NEW.idn =
(SELECT idn
 FROM sphr_client
 ORDER BY idn DESC
 LIMIT 1) + 1
//
DELIMITER ;
