-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema shopmaster_cecor
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema shopmaster_cecor
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `shopmaster_cecor` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci ;
USE `shopmaster_cecor` ;

-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`brands`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`brands` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `description` LONGTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_general_ci;


-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`categories` (
  `id` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `description` LONGTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_general_ci;


-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`companies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`companies` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nit` VARCHAR(45) NOT NULL,
  `name` VARCHAR(50) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`containers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`containers` (
  `id` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `document` LONGBLOB NOT NULL,
  `import_date` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_general_ci;


-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `image` VARCHAR(255) NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `description` LONGTEXT NULL DEFAULT NULL,
  `price` DECIMAL(11,2) NOT NULL,
  `stock` INT NOT NULL DEFAULT '0',
  `brands_id` INT NOT NULL,
  `creation_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  INDEX `fk_products_brands1_idx` (`brands_id` ASC) VISIBLE,
  CONSTRAINT `fk_products_brands1`
    FOREIGN KEY (`brands_id`)
    REFERENCES `shopmaster_cecor`.`brands` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_general_ci;


-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`container_products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`container_products` (
  `product_id` INT NOT NULL,
  `container_id` INT NOT NULL,
  PRIMARY KEY (`product_id`, `container_id`),
  INDEX `fk_products_has_container_container1_idx` (`container_id` ASC) VISIBLE,
  INDEX `fk_products_has_container_products1_idx` (`product_id` ASC) VISIBLE,
  CONSTRAINT `fk_products_has_container_container1`
    FOREIGN KEY (`container_id`)
    REFERENCES `shopmaster_cecor`.`containers` (`id`),
  CONSTRAINT `fk_products_has_container_products1`
    FOREIGN KEY (`product_id`)
    REFERENCES `shopmaster_cecor`.`products` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_general_ci;


-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`products_categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`products_categories` (
  `product_id` INT NOT NULL,
  `categorie_id` INT NOT NULL,
  PRIMARY KEY (`product_id`, `categorie_id`),
  INDEX `fk_products_has_categories_categories1_idx` (`categorie_id` ASC) VISIBLE,
  INDEX `fk_products_has_categories_products1_idx` (`product_id` ASC) VISIBLE,
  CONSTRAINT `fk_products_has_categories_categories1`
    FOREIGN KEY (`categorie_id`)
    REFERENCES `shopmaster_cecor`.`categories` (`id`),
  CONSTRAINT `fk_products_has_categories_products1`
    FOREIGN KEY (`product_id`)
    REFERENCES `shopmaster_cecor`.`products` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_general_ci;


-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`tags`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`tags` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_general_ci;


-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`products_tags`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`products_tags` (
  `product_id` INT NOT NULL,
  `tag_id` INT NOT NULL,
  PRIMARY KEY (`product_id`, `tag_id`),
  INDEX `fk_tags_has_products_products1_idx` (`product_id` ASC) VISIBLE,
  INDEX `fk_tags_has_products_tags1_idx` (`tag_id` ASC) VISIBLE,
  CONSTRAINT `fk_tags_has_products_products1`
    FOREIGN KEY (`product_id`)
    REFERENCES `shopmaster_cecor`.`products` (`id`),
  CONSTRAINT `fk_tags_has_products_tags1`
    FOREIGN KEY (`tag_id`)
    REFERENCES `shopmaster_cecor`.`tags` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_general_ci;


-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`rols`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`rols` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type_role` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`states`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`states` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_general_ci;


-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `image` VARCHAR(255) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `document` VARCHAR(20) NOT NULL,
  `country_phone` VARCHAR(10) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `role_id` INT NOT NULL,
  `companie_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users_roles_idx` (`role_id` ASC) VISIBLE,
  INDEX `fk_users_companies_idx` (`companie_id` ASC) VISIBLE,
  CONSTRAINT `fk_users_companies`
    FOREIGN KEY (`companie_id`)
    REFERENCES `shopmaster_cecor`.`companies` (`id`),
  CONSTRAINT `fk_users_roles`
    FOREIGN KEY (`role_id`)
    REFERENCES `shopmaster_cecor`.`rols` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 0
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`shoping_cars`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`shoping_cars` (
  `id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `creation_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `price` DECIMAL(11,2) NOT NULL,
  `status_id` INT NOT NULL,
  `discounts` DECIMAL(4,2) NULL DEFAULT NULL,
  `note` LONGTEXT NOT NULL,
  `delivery_number` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `user_id`, `status_id`),
  INDEX `fk_shoping_cars_users_idx` (`user_id` ASC) VISIBLE,
  INDEX `fk_shoping_cars_states1_idx` (`status_id` ASC) VISIBLE,
  CONSTRAINT `fk_shoping_cars_states1`
    FOREIGN KEY (`status_id`)
    REFERENCES `shopmaster_cecor`.`states` (`id`),
  CONSTRAINT `fk_shoping_cars_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `shopmaster_cecor`.`users` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_general_ci;


-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`shoping_car_container`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`shoping_car_container` (
  `shoping_car_id` INT NOT NULL,
  `container_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`shoping_car_id`, `container_id`, `user_id`),
  INDEX `fk_shoping_cars_has_containers_containers1_idx` (`container_id` ASC) VISIBLE,
  INDEX `fk_shoping_cars_has_containers_shoping_cars1_idx` (`shoping_car_id` ASC, `user_id` ASC) VISIBLE,
  CONSTRAINT `fk_shoping_cars_has_containers_containers1`
    FOREIGN KEY (`container_id`)
    REFERENCES `shopmaster_cecor`.`containers` (`id`),
  CONSTRAINT `fk_shoping_cars_has_containers_shoping_cars1`
    FOREIGN KEY (`shoping_car_id` , `user_id`)
    REFERENCES `shopmaster_cecor`.`shoping_cars` (`id` , `user_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_general_ci;


-- -----------------------------------------------------
-- Table `shopmaster_cecor`.`shoping_car_produtc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopmaster_cecor`.`shoping_car_produtc` (
  `product_id` INT NOT NULL,
  `shoping_car_id` INT NOT NULL,
  `quantity` INT NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`, `shoping_car_id`),
  INDEX `fk_products_has_shoping_cars_shoping_cars1_idx` (`shoping_car_id` ASC) VISIBLE,
  INDEX `fk_products_has_shoping_cars_products1_idx` (`product_id` ASC) VISIBLE,
  CONSTRAINT `fk_products_has_shoping_cars_products1`
    FOREIGN KEY (`product_id`)
    REFERENCES `shopmaster_cecor`.`products` (`id`),
  CONSTRAINT `fk_products_has_shoping_cars_shoping_cars1`
    FOREIGN KEY (`shoping_car_id`)
    REFERENCES `shopmaster_cecor`.`shoping_cars` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
