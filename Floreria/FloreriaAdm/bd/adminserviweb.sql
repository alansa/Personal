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
  `costoCompraProducto` VARCHAR(45) NULL,
  `existenciaProducto` INT NULL,
  `detalleProducto` VARCHAR(45) NULL,
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
  `existenciaArreglo` INT NULL,
  `rutaImagen` VARCHAR(45) NULL,
  `activo` VARCHAR(2) NULL,
  `top` VARCHAR(2) NULL,
  `existencia` INT NULL,
  PRIMARY KEY (`idArreglo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adminserviweb`.`datoCliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminserviweb`.`datoCliente` (
  `folio` INT NOT NULL AUTO_INCREMENT,
  `nombreCliente` VARCHAR(45) NULL,
  `apellidoCliente` VARCHAR(45) NULL,
  `direccionCliente` VARCHAR(45) NULL,
  `telefonoCliente` VARCHAR(45) NULL,
  `emailCliente` VARCHAR(45) NULL,
  `nombreTarjeta` VARCHAR(45) NULL,
  `tipoTarjeta` VARCHAR(45) NULL,
  `numeroTarjeta` VARCHAR(45) NULL,
  `vigencia` VARCHAR(45) NULL,
  `numVerificacionTarjeta` VARCHAR(45) NULL,
  `nombreDestino` VARCHAR(45) NULL,
  `apellidoDestino` VARCHAR(45) NULL,
  `direccionDestino` VARCHAR(45) NULL,
  `telefonoDestino` VARCHAR(45) NULL,
  PRIMARY KEY (`folio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adminserviweb`.`repartidor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminserviweb`.`repartidor` (
  `idRepartidor` INT NOT NULL AUTO_INCREMENT,
  `nombreCompleto` VARCHAR(60) NULL,
  PRIMARY KEY (`idRepartidor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adminserviweb`.`datoVenta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminserviweb`.`datoVenta` (
  `folio` INT NOT NULL AUTO_INCREMENT,
  `nombreArreglo` VARCHAR(45) NULL,
  `costoUnit` VARCHAR(45) NULL,
  `cantidadArreglo` VARCHAR(45) NULL,
  `precioTotal` VARCHAR(45) NULL,
  `fechaEntrega` VARCHAR(45) NULL,
  `datoCliente_folio` INT NOT NULL,
  `repartidor_idRepartidor` INT NOT NULL,
  PRIMARY KEY (`folio`),
  INDEX `fk_datoVenta_datoCliente1_idx` (`datoCliente_folio` ASC),
  INDEX `fk_datoVenta_repartidor1_idx` (`repartidor_idRepartidor` ASC),
  CONSTRAINT `fk_datoVenta_datoCliente1`
    FOREIGN KEY (`datoCliente_folio`)
    REFERENCES `adminserviweb`.`datoCliente` (`folio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_datoVenta_repartidor1`
    FOREIGN KEY (`repartidor_idRepartidor`)
    REFERENCES `adminserviweb`.`repartidor` (`idRepartidor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adminserviweb`.`carrito`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminserviweb`.`carrito` (
  `idArreglo` INT NOT NULL,
  `cantidad` VARCHAR(45) NULL,
  `precio` VARCHAR(45) NULL,
  `nombreArreglo` VARCHAR(45) NULL,
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
