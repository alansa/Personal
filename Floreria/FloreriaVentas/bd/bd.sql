-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema adminserviweb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema adminserviweb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `adminserviweb` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema adminserviweb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema adminserviweb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `adminserviweb` DEFAULT CHARACTER SET utf8 ;
USE `adminserviweb` ;

-- -----------------------------------------------------
-- Table `adminserviweb`.`proveedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminserviweb`.`proveedor` (
  `idProveedor` VARCHAR(15) NOT NULL,
  `nombreEmpresa` VARCHAR(45) NULL,
  `nombreProveedor` VARCHAR(45) NULL,
  `apPaProveedor` VARCHAR(45) NULL,
  `apMaProveedor` VARCHAR(45) NULL,
  `telefonoProveedor` VARCHAR(45) NULL,
  `correoProveedor` VARCHAR(45) NULL,
  `direccionFiscal` VARCHAR(45) NULL,
  `rfcProveedor` VARCHAR(45) NULL,
  PRIMARY KEY (`idProveedor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adminserviweb`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminserviweb`.`producto` (
  `idProducto` VARCHAR(15) NOT NULL,
  `nombreProducto` VARCHAR(45) NULL,
  `tipoProducto` VARCHAR(45) NULL,
  `descripcionProducto` VARCHAR(45) NULL,
  `costoCompraProducto` VARCHAR(45) NULL,
  `existenciaProducto` VARCHAR(45) NULL,
  PRIMARY KEY (`idProducto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adminserviweb`.`arreglo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminserviweb`.`arreglo` (
  `idArreglo` VARCHAR(15) NOT NULL,
  `nombreArreglo` VARCHAR(45) NULL,
  `categoriaArreglo` VARCHAR(45) NULL,
  `floresArreglo` VARCHAR(45) NULL,
  `cantidadFlores` VARCHAR(45) NULL,
  `formaArreglo` VARCHAR(45) NULL,
  `adornoArreglo` VARCHAR(45) NULL,
  `precioArreglo` VARCHAR(45) NULL,
  `existenciaArreglo` VARCHAR(45) NULL,
  PRIMARY KEY (`idArreglo`))
ENGINE = InnoDB;

USE `adminserviweb` ;

-- -----------------------------------------------------
-- Table `adminserviweb`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminserviweb`.`usuarios` (
  `id` VARCHAR(10) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apPaterno` VARCHAR(45) NOT NULL,
  `apMaterno` VARCHAR(45) NULL,
  `tipoUsuario` VARCHAR(45) NOT NULL,
  `nombreUsuario` VARCHAR(45) NOT NULL,
  `pass` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 11
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
