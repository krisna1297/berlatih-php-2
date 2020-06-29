CREATE TABLE `customers` (
	`id` INT AUTO_INCREMENT,
	`name` VARCHAR(255),
	`email` VARCHAR(255),
	`password` VARCHAR(255),
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`id` INT AUTO_INCREMENT,
	`amount` VARCHAR(255),
    `customer_id` INT,
	PRIMARY KEY (`id`),
    CONSTRAINT `fk_customer` FOREIGN KEY (`customer_id`) REFERENCES `customers`(`id`)
);