DROP DATABASE `dating`;
CREATE DATABASE `dating`;

USE `dating`;

CREATE TABLE `User` (
          `case_id` VARCHAR(10),
          `name` VARCHAR(50),
          `address` VARCHAR(50),
          `phone_number` VARCHAR(20),
          `email` VARCHAR(50),
          `age` INT(10),
          `gender` CHAR(10),
          `sexual_orientation` VARCHAR(20),
          `height` VARCHAR(10),
          `race` VARCHAR(30),
          `country` VARCHAR(20),
          PRIMARY KEY(`case_id`)
);
CREATE TABLE `Staff_Faculty`(
          `title` VARCHAR(20),
          `department` VARCHAR(20),
          `case_id` VARCHAR(10),
          PRIMARY KEY(`case_id`)
);

CREATE TABLE `Marital_history` (
          `m_id` INT NOT NULL AUTO_INCREMENT,
          `divorce_number` VARCHAR(10),
          `children_number` INT(10),
          `case_id` VARCHAR(10),
          PRIMARY KEY(`m_id`),
          FOREIGN KEY(`case_id`) REFERENCES Staff_Faculty(`case_id`));


CREATE TABLE `Property`(
          `p_id` INT NOT NULL AUTO_INCREMENT,
          `salary` INT(10),
          `car_number` INT(10),
          `house_number` INT(10),
          `case_id` VARCHAR(10),
          PRIMARY KEY(`p_id`),
          FOREIGN KEY(`case_id`) REFERENCES Staff_Faculty(`case_id`));

CREATE TABLE `Class`(
          `class_id` INT(10),
          `case_id` VARCHAR(10),
          `class_name` VARCHAR(20),
          PRIMARY KEY(`class_id`),
          FOREIGN KEY(`case_id`) REFERENCES Staff_Faculty(`case_id`));

CREATE TABLE `Student`(
          `graduate_yr` INT(10),
          `major` VARCHAR(50),
          `case_id` VARCHAR(10),
          PRIMARY KEY(`case_id`));

CREATE TABLE `Preference`(
          `case_id` VARCHAR(10),
          `smoke` INT(10),
          `alcohol` INT(10),
          `music_preference` VARCHAR(50),
          `exercise_frequency` INT(10),
          `has_pets` INT(10),
          `major` VARCHAR(50),
          `race` VARCHAR(30),
          `height` VARCHAR(10),
          `age` INT(10),
          `country` VARCHAR(30),
          PRIMARY KEY(`case_id`));

INSERT INTO `user`(`case_id`, `name`,`address`,`phone_number`, `email`, `age`, `gender`, `sexual_orientation`, `height`,`race`,`country`) VALUES
('yxl2298', 'Yuanzhe Lu','10001 Chester Ave','2166504121','yxl2298@case.edu','21','male','heterosexual','5ft10','asian','China'),
('yxt1234', 'Yiheng Tao', '10001 Chester Ave','2161234567','yxt1234@case.edu','21','male','heterosexual','5ft10','asian','China'),
('mkz18', 'Maria Zhu', '10001 Chester Ave','7038322830','mkz18@case.edu','20','female','heterosexual','5ft8','asian','USA'),
('qwe123', 'Abbey Carroll', '10900 Euclid Ave','1234567890','qwe123@case.edu','44','female','heterosexual','5ft9','white','USA'),
('asd123', 'Allen James', '10900 Euclid Ave','2347684270','asd123@case.edu','50','male','heterosexual','6ft1','black','USA'),
('nds123', 'Bella Bracken', '10900 Euclid Ave','3471292379','nds123@case.edu','33','female','heterosexual','5ft5','white','USA');

INSERT INTO `Marital_history`(`m_id`, `divorce_number`, `children_number`,`case_id`) VALUES
('D1', '2','qwe123'),
('D2', '1','asd123'),
('NULL', '0','nds123');

INSERT INTO `Property`(`p_id`, `salary`, `car_number`,`house_number`,`case_id`) VALUES
('50000', '1','1','qwe123'),
('60000', '1','2','asd123'),
('63000', '2','2','nds123');

INSERT INTO `Class`(`class_id`, `case_id`, `class_name`) VALUES
('101', 'qwe123', 'Introduction to Data Analysis'),
('202', 'asd123', 'Database System'),
('303', 'nds123', 'Algorithm'),
('404', 'qwe123', 'Introduction to Data Science');

INSERT INTO `Staff_Faculty`(`title`, `department`, `case_id`) VALUES
('Professor','Computer Science', 'qwe123'),
('Professor', 'Mathematics','asd123'),
('Professor', 'Computer Science','nds123');

INSERT INTO `Student`(`graduate_yr`, `major`, `case_id`) VALUES
('2023','Data Science', 'yxl2298'),
('2023', 'Mathematics','yxt1234'),
('2022', 'Data Science','mkz18');

INSERT INTO `Preference`(`case_id`, `smoke`, `alcohol`,`music_preference`, `exercise_frequency`, `has_pets`,`major`, `race`, `height`,`age`, `country`) VALUES
('yxl2298','0','0','metal','2','1','Data Science', 'Asian','5ft8','20','China'),
('yxt1234','0','0','hip-hop','3','0','Statistics', 'white','5ft8','26','USA'),
('mkz18','0','0','jazz','5','0','Mathematics', 'Asian','5ft10','20','China');