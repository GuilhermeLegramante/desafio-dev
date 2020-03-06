-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Diretor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Diretor` (
  `idDiretor` INT NOT NULL,
  `nome` VARCHAR(100) NULL,
  PRIMARY KEY (`idDiretor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Filme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Filme` (
  `idFilme` INT NOT NULL,
  `titulo` VARCHAR(100) NULL,
  `ano` INT NULL,
  `Diretor_idDiretor` INT NOT NULL,
  PRIMARY KEY (`idFilme`),
  INDEX `fk_Filme_Diretor1_idx` (`Diretor_idDiretor` ASC),
  CONSTRAINT `fk_Filme_Diretor1`
    FOREIGN KEY (`Diretor_idDiretor`)
    REFERENCES `mydb`.`Diretor` (`idDiretor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Ator`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Ator` (
  `idAtor` INT NOT NULL,
  `nome` VARCHAR(100) NULL,
  PRIMARY KEY (`idAtor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Filme_has_Ator`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Filme_has_Ator` (
  `Filme_idFilme` INT NOT NULL,
  `Ator_idAtor` INT NOT NULL,
  PRIMARY KEY (`Filme_idFilme`, `Ator_idAtor`),
  INDEX `fk_Filme_has_Ator_Ator1_idx` (`Ator_idAtor` ASC),
  INDEX `fk_Filme_has_Ator_Filme_idx` (`Filme_idFilme` ASC),
  CONSTRAINT `fk_Filme_has_Ator_Filme`
    FOREIGN KEY (`Filme_idFilme`)
    REFERENCES `mydb`.`Filme` (`idFilme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Filme_has_Ator_Ator1`
    FOREIGN KEY (`Ator_idAtor`)
    REFERENCES `mydb`.`Ator` (`idAtor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
