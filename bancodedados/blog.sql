CREATE TABLE `usuario` (
	`id` int NOT NULL AUTO_INCREMENT,
	`nome` varchar(30) NOT NULL,
	`avatar` varchar(30) NOT NULL UNIQUE,
	`email` varchar(255) NOT NULL UNIQUE,
	`senha` varchar(255) NOT NULL,
	`status` tinyint(1) NOT NULL DEFAULT '0',
	`admin` tinyint(1) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE `post` (
	`id` int NOT NULL AUTO_INCREMENT,
	`titulo` varchar(30) NOT NULL,
	`conteudo` TEXT NOT NULL,
	`id_usuario` int NOT NULL,
	`id_tag` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `tag` (
	`id` int NOT NULL AUTO_INCREMENT,
	`titulo` varchar(30) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

ALTER TABLE `post` ADD CONSTRAINT `post_fk0` FOREIGN KEY (`id_usuario`) REFERENCES `usuario`(`id`);

ALTER TABLE `post` ADD CONSTRAINT `post_fk1` FOREIGN KEY (`id_tag`) REFERENCES `tag`(`id`);




