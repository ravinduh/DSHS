SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `DSHS` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `DSHS` ;

-- -----------------------------------------------------
-- Table `DSHS`.`student`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DSHS`.`student` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `description` VARCHAR(800) NULL ,
  `school` VARCHAR(200) NULL ,
  `date_of_birth` DATE NULL ,
  `contact_nu` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DSHS`.`moderator`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DSHS`.`moderator` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `designation` VARCHAR(200) NOT NULL ,
  `address` VARCHAR(256) NOT NULL ,
  `contact_nu` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(128) NULL ,
  `nic` VARCHAR(10) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DSHS`.`verify`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DSHS`.`verify` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `moderator_id` INT NOT NULL ,
  `student_id` INT NOT NULL ,
  `verified_date` DATE NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `moderator_id_idx` (`moderator_id` ASC) ,
  INDEX `student_id_idx` (`student_id` ASC) ,
  CONSTRAINT `fk_verify_moderator1`
    FOREIGN KEY (`moderator_id` )
    REFERENCES `DSHS`.`moderator` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_verify_student1`
    FOREIGN KEY (`student_id` )
    REFERENCES `DSHS`.`student` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DSHS`.`refree`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DSHS`.`refree` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(128) NOT NULL ,
  `designation` VARCHAR(200) NOT NULL ,
  `contact_nu` VARCHAR(45) NULL ,
  `nic` VARCHAR(10) NOT NULL ,
  `moderator_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `moderator_id_idx` (`moderator_id` ASC) ,
  CONSTRAINT `fk_refree_moderator1`
    FOREIGN KEY (`moderator_id` )
    REFERENCES `DSHS`.`moderator` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DSHS`.`guradian`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DSHS`.`guradian` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(128) NOT NULL ,
  `occupation` VARCHAR(128) NOT NULL ,
  `address` VARCHAR(256) NOT NULL ,
  `contact_nu` VARCHAR(45) NOT NULL ,
  `student_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `student_id_idx` (`student_id` ASC) ,
  CONSTRAINT `fk_guardian_student1`
    FOREIGN KEY (`student_id` )
    REFERENCES `DSHS`.`student` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DSHS`.`requirement`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DSHS`.`requirement` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `details` VARCHAR(1000) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DSHS`.`student_has_requirement`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DSHS`.`student_has_requirement` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `student_id` INT NOT NULL ,
  `requirement_id` INT NOT NULL ,
  `moderator_id` INT NOT NULL ,
  `donated_date` DATE NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `requirement_id_idx` (`requirement_id` ASC) ,
  INDEX `moderator_id_idx` (`moderator_id` ASC) ,
  INDEX `student_id_idx` (`student_id` ASC) ,
  CONSTRAINT `fk_student_has_requirement_student1`
    FOREIGN KEY (`student_id` )
    REFERENCES `DSHS`.`student` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_student_has_requirement_moderator1`
    FOREIGN KEY (`moderator_id` )
    REFERENCES `DSHS`.`moderator` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_student_has_requirement_requirement1`
    FOREIGN KEY (`requirement_id` )
    REFERENCES `DSHS`.`requirement` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DSHS`.`donor`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DSHS`.`donor` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(128) NOT NULL ,
  `occupation` VARCHAR(128) NULL ,
  `address` VARCHAR(256) NOT NULL ,
  `contact_nu` VARCHAR(45) NOT NULL ,
  `nic` VARCHAR(10) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DSHS`.`donor_donate_student`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DSHS`.`donor_donate_student` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `student_id` INT NOT NULL ,
  `donated_date` DATE NOT NULL ,
  `details` VARCHAR(500) NULL ,
  `donor_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `student_id_idx` (`student_id` ASC) ,
  INDEX `donor_id_idx` (`donor_id` ASC) ,
  CONSTRAINT `fk_donor_donate_student_student1`
    FOREIGN KEY (`student_id` )
    REFERENCES `DSHS`.`student` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_donor_donate_student_donor1`
    FOREIGN KEY (`donor_id` )
    REFERENCES `DSHS`.`donor` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `DSHS` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
