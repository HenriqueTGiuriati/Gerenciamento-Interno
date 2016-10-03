-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema gerenciamento_interno
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema gerenciamento_interno
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `gerenciamento_interno` DEFAULT CHARACTER SET utf8 ;
USE `gerenciamento_interno` ;

-- -----------------------------------------------------
-- Table `gerenciamento_interno`.`membros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gerenciamento_interno`.`membros` (
  `id` INT NOT NULL,
  `nome` VARCHAR(75) NOT NULL,
  `nusp` VARCHAR(8) NOT NULL,
  `cpf` VARCHAR(15) NULL,
  `rg` VARCHAR(15) NULL,
  `data_inicio` DATE NOT NULL,
  `endereco` VARCHAR(45) NULL,
  `complemento` VARCHAR(45) NULL,
  `bairro` VARCHAR(45) NULL,
  `cidade` VARCHAR(45) NULL,
  `data_nasc` DATE NULL,
  `telefone` VARCHAR(15) NULL,
  `celular` VARCHAR(15) NULL,
  `email` VARCHAR(15) NULL,
  `senha` VARCHAR(15) NOT NULL,
  `cargo` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gerenciamento_interno`.`diretorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gerenciamento_interno`.`diretorias` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gerenciamento_interno`.`membros_diretoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gerenciamento_interno`.`membros_diretoria` (
  `diretorias_id` INT NOT NULL,
  `membros_id` INT NOT NULL,
  `data_inicial` DATE NULL,
  `data_final` DATE NULL,
  INDEX `fk_membros_diretoria_diretorias_idx` (`diretorias_id` ASC),
  INDEX `fk_membros_diretoria_membros1_idx` (`membros_id` ASC),
  CONSTRAINT `fk_membros_diretoria_diretorias`
    FOREIGN KEY (`diretorias_id`)
    REFERENCES `gerenciamento_interno`.`diretorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_membros_diretoria_membros1`
    FOREIGN KEY (`membros_id`)
    REFERENCES `gerenciamento_interno`.`membros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gerenciamento_interno`.`diretorias_diretores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gerenciamento_interno`.`diretorias_diretores` (
  `membros_id` INT NOT NULL,
  `diretorias_id` INT NOT NULL,
  `data_inicial` DATE NULL,
  `data_final` DATE NULL,
  INDEX `fk_diretorias_diretores_membros1_idx` (`membros_id` ASC),
  INDEX `fk_diretorias_diretores_diretorias1_idx` (`diretorias_id` ASC),
  CONSTRAINT `fk_diretorias_diretores_membros1`
    FOREIGN KEY (`membros_id`)
    REFERENCES `gerenciamento_interno`.`membros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_diretorias_diretores_diretorias1`
    FOREIGN KEY (`diretorias_id`)
    REFERENCES `gerenciamento_interno`.`diretorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gerenciamento_interno`.`reunioes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gerenciamento_interno`.`reunioes` (
  `id` INT NOT NULL,
  `diretorias_id` INT NOT NULL,
  `horario_fixo` TINYINT(1) NULL,
  `date` DATE NULL,
  `hora` TIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_reunioes_diretorias1_idx` (`diretorias_id` ASC),
  CONSTRAINT `fk_reunioes_diretorias1`
    FOREIGN KEY (`diretorias_id`)
    REFERENCES `gerenciamento_interno`.`diretorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gerenciamento_interno`.`chamada`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gerenciamento_interno`.`chamada` (
  `reunioes_id` INT NOT NULL,
  `membros_id` INT NOT NULL,
  `presente` TINYINT(1) NULL,
  INDEX `fk_chamada_reunioes1_idx` (`reunioes_id` ASC),
  INDEX `fk_chamada_membros1_idx` (`membros_id` ASC),
  CONSTRAINT `fk_chamada_reunioes1`
    FOREIGN KEY (`reunioes_id`)
    REFERENCES `gerenciamento_interno`.`reunioes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_chamada_membros1`
    FOREIGN KEY (`membros_id`)
    REFERENCES `gerenciamento_interno`.`membros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gerenciamento_interno`.`avaliacao_mensal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gerenciamento_interno`.`avaliacao_mensal` (
  `id_avaliacao` INT NOT NULL,
  `membros_id` INT NOT NULL,
  `data` DATE NULL,
  `assiduidade` INT NULL,
  `pontualidade` INT NULL,
  `participacao_eventos` INT NULL,
  `participacao_treinamento` INT NULL,
  `participacao_reuniao` INT NULL,
  PRIMARY KEY (`id_avaliacao`),
  INDEX `fk_avaliacao_mensal_membros1_idx` (`membros_id` ASC),
  CONSTRAINT `fk_avaliacao_mensal_membros1`
    FOREIGN KEY (`membros_id`)
    REFERENCES `gerenciamento_interno`.`membros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
