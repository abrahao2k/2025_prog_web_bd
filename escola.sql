-- -----------------------------------------------------
-- Schema escola
-- -----------------------------------------------------

DROP SCHEMA IF EXISTS `escola` ;


CREATE SCHEMA IF NOT EXISTS `escola` DEFAULT CHARACTER SET utf8mb4 ;
USE `escola` ;

-- -----------------------------------------------------
-- Table `escola`.`aluno`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `escola`.`aluno` ;

CREATE TABLE IF NOT EXISTS `escola`.`aluno` (
  `codigo` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `curso` VARCHAR(100) NULL DEFAULT NULL,
  `turno` VARCHAR(45) NULL DEFAULT NULL,
  `bolsista` VARCHAR(45) NULL DEFAULT NULL,
  `atleta` VARCHAR(45) NULL DEFAULT NULL,
  `observacao` VARCHAR(250) NULL DEFAULT NULL,
  PRIMARY KEY (`codigo`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4;