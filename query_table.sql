CREATE TABLE `db_rental`.`` 
( `_id` INT(11) NOT NULL AUTO_INCREMENT , 
`input_time` TIMESTAMP NULL , 
`input_user_id` INT NOT NULL , 
`mod_time` TIMESTAMP NULL , 
`mod_user_id` INT NOT NULL , 
`status_batal` INT(11) NOT NULL,
PRIMARY KEY (`_id`)) ENGINE = InnoDB; 