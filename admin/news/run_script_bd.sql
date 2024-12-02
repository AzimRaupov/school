-- MySQL Script generated by MySQL Workbench
-- Fri Nov  8 13:35:35 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema school
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema school
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `school` DEFAULT CHARACTER SET utf8 ;
USE `school` ;

-- -----------------------------------------------------
-- Table `school`.`news`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `school`.`news` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `topic` INT NOT NULL,
  `user_add` INT NOT NULL,
  `headr` VARCHAR(45) NULL,
  `image` VARCHAR(45) NULL,
  `info` TEXT NULL,
  `date_add` DATE NULL,
  `chick` VARCHAR(200) NULL,
  PRIMARY KEY (`id`))
ENGINE = INNODB;


-- -----------------------------------------------------
-- Table `school`.`topics`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `school`.`topics` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `topic` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = INNODB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
