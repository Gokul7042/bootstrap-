CREATE TABLE `tbl_recharge` (
  `id` (225) int AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `number` varchar(225) NOT NULL,
  `Employee Id`	varchar(225)not NULL,
   PRIMARY KEY (id)
)

INSERT INTO `tbl_recharge`(
  `id`, `name`, `email`, `number`) 
  VALUES ('[1]','[raj]','[raj@123gmail.com]','[2738326468]')

CREATE TABLE `register` (
    `username` VARCHAR(225)  NOT NULL ,
    `email` VARCHAR(225) NOT NULL,
    `mobile_number` VARCHAR(255) NOT NULL,
    `employee_id` VARCHAR(225) NOT NULL
);