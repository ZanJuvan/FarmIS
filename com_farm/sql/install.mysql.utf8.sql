CREATE TABLE IF NOT EXISTS `#__farm_field`
(
    `id`               int(11)              NOT NULL    AUTO_INCREMENT,
    `name`             varchar(255)         NOT NULL,
    `size`             int(11)                          DEFAULT NULL,
    `num_plot`         varchar(255)                     DEFAULT NULL,
    `type`             varchar(255)         NOT NULL;
    `checked_out`      int(11)              NOT NULL    DEFAULT 0,
    `checked_out_time` datetime                         DEFAULT NULL,
    `created_by`       int(11)                          DEFAULT 0,
    `created`          datetime                         DEFAULT NULL,
    `modified_by`      int(11)                          DEFAULT 0,
    `modified`         datetime                         DEFAULT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE = MyISAM
    AUTO_INCREMENT = 5
    DEFAULT CHARSET = utf8mb4
    COLLATE = utf8mb4_general_ci;


CREATE TABLE IF NOT EXISTS `#__farm_job`
(
    `id`               int(11)              NOT NULL    AUTO_INCREMENT,
    `field_id`         int(11)              NOT NULL,
    `type`             varchar(255)         NOT NULL,
    `number`           int(11)              NOT NULL    DEFAULT 0,
    `date`             datetime             NOT NULL,
    `checked_out`      int(11)              NOT NULL    DEFAULT 0,
    `checked_out_time` datetime                         DEFAULT NULL,
    `created_by`       int(11)                          DEFAULT 0,
    `created`          datetime                         DEFAULT NULL,
    `modified_by`      int(11)                          DEFAULT 0,
    `modified`         datetime                         DEFAULT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE = MyISAM
    AUTO_INCREMENT = 5
    DEFAULT CHARSET = utf8mb4
    COLLATE = utf8mb4_general_ci;


CREATE TABLE IF NOT EXISTS `#__farm_animal`
(
    `id`                int(11)             NOT NULL    AUTO_INCREMENT,
    `name`              varchar(255)        NOT NULL,
    `type`              varchar(255)        NOT NULL,
    `birthdate`         datetime                        DEFAULT NULL,
    `code`              varchar(255)                    DEFAULT NULL,
    `number`            int(11)                         DEFAULT 1,
    `sex`               int(11)                         DEFAULT 0,
    `checked_out`       int(11)             NOT NULL    DEFAULT 0,
    `checked_out_time`  datetime                        DEFAULT NULL,
    `created_by`        int(11)                         DEFAULT 0,
    `created`           datetime                        DEFAULT NULL,
    `modified_by`       int(11)                         DEFAULT 0,
    `modified`          datetime                        DEFAULT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE = MyISAM
    AUTO_INCREMENT = 5
    DEFAULT CHARSET = utf8mb4
    COLLATE = utf8mb4_general_ci;


CREATE TABLE IF NOT EXISTS `#__farm_equipment`
(
    `id`                int(11)             NOT NULL    AUTO_INCREMENT,
    `manufacturer`      varchar(255)        NOT NULL,
    `model`             varchar(255)        NOT NULL,
    `description`       varchar(255)                    DEFAULT NULL,
    `type`              varchar(255)        NOT NULL,
    `create_date`       datetime            NOT NULL,
    `checked_out`       int(11)             NOT NULL DEFAULT 0,
    `checked_out_time`  datetime                        DEFAULT NULL,
    `created_by`        int(11)                         DEFAULT 0,
    `created`           datetime                        DEFAULT NULL,
    `modified_by`       int(11)                         DEFAULT 0,
    `modified`          datetime                        DEFAULT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE = MyISAM
    AUTO_INCREMENT = 5
    DEFAULT CHARSET = utf8mb4
    COLLATE = utf8mb4_general_ci;


CREATE TABLE IF NOT EXISTS `#__farm_service`
(
    `id`                int(11)             NOT NULL    AUTO_INCREMENT,
    `description`       varchar(255)        NOT NULL,
    `type`              varchar(255)        NOT NULL,
    `date`              datetime            NOT NULL,
    `checked_out`       int(11)             NOT NULL    DEFAULT 0,
    `checked_out_time`  datetime                        DEFAULT NULL,
    `created_by`        int(11)                         DEFAULT 0,
    `created`           datetime                        DEFAULT NULL,
    `modified_by`       int(11)                         DEFAULT 0,
    `modified`          datetime                        DEFAULT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE = MyISAM
    AUTO_INCREMENT = 5
    DEFAULT CHARSET = utf8mb4
    COLLATE = utf8mb4_general_ci;