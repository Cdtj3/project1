USE `design_vv_app` ;

DROP TABLE IF EXISTS `design_vv_app`.`member` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`member` (
  `id` INT NOT NULL,
  `firstname` VARCHAR(45) NULL,
  `membercol` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `gender` VARCHAR(45) NULL,
  `type` VARCHAR(45) NULL,
  `year_driving_licence` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `design_vv_app`.`media`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `design_vv_app`.`media` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`media` (
  `id` INT NOT NULL,
  `type` VARCHAR(45) NULL,
  `path` VARCHAR(45) NULL,
  `creation_date` DATE NULL,
  `share_status` VARCHAR(45) NULL,
  `description` VARCHAR(1000) NULL,
  `title` VARCHAR(50) NULL,
  `member_id` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `design_vv_app`.`player`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `design_vv_app`.`player` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`player` (
  `id` INT NOT NULL,
  `lastname` VARCHAR(45) NULL,
  `firstname` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`city`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `design_vv_app`.`city` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`city` (
  `id` INT NOT NULL,
  `city_name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`club`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `design_vv_app`.`club` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`club` (
  `id` INT NOT NULL,
  `name` VARCHAR(255) NULL,
  `city_id` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`team`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `design_vv_app`.`team` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`team` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `club_id` INT NULL,
  `coach_id` INT NULL,
  PRIMARY KEY (`id`))
 ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`player_team`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `design_vv_app`.`player_team` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`player_team` (
  `id` INT NOT NULL,
  `player_id` INT NULL,
  `team_id` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`member_player`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `design_vv_app`.`member_player` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`member_player` (
  `id` INT NOT NULL,
  `member_id` INT NULL,
  `player_id` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`program`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `design_vv_app`.`program` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`program` (
  `id` INT NOT NULL,
  `weeknumber` INT NULL,
  `date` DATE NULL,
  `starting_time` VARCHAR(45) NULL,
  `home_team_id` INT NULL,
  `away_team_id` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`car`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `design_vv_app`.`car` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`car` (
  `id` INT NOT NULL,
  `type` VARCHAR(255) NULL,
  `model` VARCHAR(255) NULL,
  `make_year` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`car_member`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `design_vv_app`.`car_member` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`car_member` (
  `id` INT NOT NULL,
  `car_id` INT NULL,
  `member_id` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ride`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `design_vv_app`.`ride` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`ride` (
  `id` INT NOT NULL,
  `seats_offered` INT NULL,
  `contribution_amount` VARCHAR(45) NULL,
  `member_car_id` INT NULL,
  `pogram_id` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`request_status`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `design_vv_app`.`request_status` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`request_status` (
  `id` INT NOT NULL,
  `status` VARCHAR(45) NULL,
  `description` VARCHAR(255) NULL,
  `status_date` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ride_request`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `design_vv_app`.`ride_request` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`ride_request` (
  `id` INT NOT NULL,
  `member_id` INT NULL,
  `ride_id` INT NULL,
  `request_status_id` INT NULL,
  `seats_requested` INT NULL)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `design_vv_app`.`member_preferences`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `design_vv_app`.`member_preferences` ;

CREATE TABLE IF NOT EXISTS `design_vv_app`.`member_preferences` (
  `id` INT NOT NULL,
  `member_id` INT NULL,
  `is_pets_allowed` VARCHAR(4) NULL,
  `is_smoking_allowed` VARCHAR(4) NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `member_id`
    FOREIGN KEY (`member_id`)
    REFERENCES `design_vv_app`.`member` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



