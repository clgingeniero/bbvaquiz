
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- answer
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `answer`;


CREATE TABLE `answer`
(
	`id_answer` INTEGER(10)  NOT NULL AUTO_INCREMENT,
	`answer` VARCHAR(200) default '0',
	`id_question` INTEGER(11) default 0,
	`correct` VARCHAR(1),
	PRIMARY KEY (`id_answer`),
	KEY `FK__question`(`id_question`),
	CONSTRAINT `answer_FK_1`
		FOREIGN KEY (`id_question`)
		REFERENCES `question` (`id_question`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- correct_answer_question
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `correct_answer_question`;


CREATE TABLE `correct_answer_question`
(
	`id_correct_answer_question` INTEGER(10)  NOT NULL AUTO_INCREMENT,
	`id_question` INTEGER(10),
	`id_answer` INTEGER(10),
	PRIMARY KEY (`id_correct_answer_question`),
	KEY `FK_correct_answer_question_question`(`id_question`),
	KEY `FK_correct_answer_question_answer`(`id_answer`),
	CONSTRAINT `correct_answer_question_FK_1`
		FOREIGN KEY (`id_question`)
		REFERENCES `question` (`id_question`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `correct_answer_question_FK_2`
		FOREIGN KEY (`id_answer`)
		REFERENCES `answer` (`id_answer`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- dificulty
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `dificulty`;


CREATE TABLE `dificulty`
(
	`id_dificulty` INTEGER(10)  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(100),
	`value` FLOAT,
	PRIMARY KEY (`id_dificulty`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- dificulty_quiz
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `dificulty_quiz`;


CREATE TABLE `dificulty_quiz`
(
	`id_dif_quiz` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`easy` INTEGER(11),
	`medium` INTEGER(11),
	`hard` INTEGER(11),
	`id_quiz` INTEGER(11),
	PRIMARY KEY (`id_dif_quiz`),
	KEY `id_quiz_idx`(`id_quiz`),
	CONSTRAINT `dificulty_quiz_FK_1`
		FOREIGN KEY (`id_quiz`)
		REFERENCES `quiz` (`id_quiz`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- instructions
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `instructions`;


CREATE TABLE `instructions`
(
	`id_instruction` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`instruction` TEXT,
	PRIMARY KEY (`id_instruction`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- question
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `question`;


CREATE TABLE `question`
(
	`id_question` INTEGER(10)  NOT NULL AUTO_INCREMENT,
	`question` TEXT,
	`id_dificultad` INTEGER(11),
	PRIMARY KEY (`id_question`),
	KEY `FK_question_dificulty`(`id_dificultad`),
	CONSTRAINT `question_FK_1`
		FOREIGN KEY (`id_dificultad`)
		REFERENCES `dificulty` (`id_dificulty`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- questions_quiz
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `questions_quiz`;


CREATE TABLE `questions_quiz`
(
	`id_questions_quiz` INTEGER(10)  NOT NULL AUTO_INCREMENT,
	`id_quiz` INTEGER(10) default 0,
	`id_question` INTEGER(10) default 0,
	PRIMARY KEY (`id_questions_quiz`),
	KEY `FK_questions_quiz_quiz`(`id_quiz`),
	KEY `FK_questions_quiz_question`(`id_question`),
	CONSTRAINT `questions_quiz_FK_1`
		FOREIGN KEY (`id_quiz`)
		REFERENCES `quiz` (`id_quiz`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `questions_quiz_FK_2`
		FOREIGN KEY (`id_question`)
		REFERENCES `question` (`id_question`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- quiz
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `quiz`;


CREATE TABLE `quiz`
(
	`id_quiz` INTEGER(10)  NOT NULL AUTO_INCREMENT,
	`description` TEXT,
	`inicial_time` DATETIME,
	`final_time` DATETIME,
	PRIMARY KEY (`id_quiz`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- quizlog
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `quizlog`;


CREATE TABLE `quizlog`
(
	`id_quiz_usr_log` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`id_quizlog` INTEGER(11),
	`id_usrql` INTEGER(11)  NOT NULL,
	`status` INTEGER(11) default 1,
	`result` FLOAT default 0,
	PRIMARY KEY (`id_quiz_usr_log`),
	KEY `id_quiz_log_idx`(`id_quizlog`),
	CONSTRAINT `quizlog_FK_1`
		FOREIGN KEY (`id_quizlog`)
		REFERENCES `quiz` (`id_quiz`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- quizusr
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `quizusr`;


CREATE TABLE `quizusr`
(
	`id_quiz_usr` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`id_usr_qu` INTEGER(11)  NOT NULL,
	`id_question` INTEGER(11),
	`id_answer` INTEGER(11),
	`id_quiz` INTEGER(11),
	PRIMARY KEY (`id_quiz_usr`),
	KEY `id_question_idx`(`id_question`),
	KEY `id_answer_idx`(`id_answer`),
	KEY `idquiz_idx`(`id_quiz`),
	CONSTRAINT `quizusr_FK_1`
		FOREIGN KEY (`id_question`)
		REFERENCES `question` (`id_question`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `quizusr_FK_2`
		FOREIGN KEY (`id_answer`)
		REFERENCES `answer` (`id_answer`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `quizusr_FK_3`
		FOREIGN KEY (`id_quiz`)
		REFERENCES `quiz` (`id_quiz`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- sf_guard_group
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sf_guard_group`;


CREATE TABLE `sf_guard_group`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`description` TEXT,
	PRIMARY KEY (`id`),
	UNIQUE KEY `sf_guard_group_U_1` (`name`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- sf_guard_group_permission
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sf_guard_group_permission`;


CREATE TABLE `sf_guard_group_permission`
(
	`group_id` INTEGER(11)  NOT NULL,
	`permission_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`group_id`,`permission_id`),
	KEY `sf_guard_group_permission_FI_2`(`permission_id`),
	CONSTRAINT `sf_guard_group_permission_FK_1`
		FOREIGN KEY (`group_id`)
		REFERENCES `sf_guard_group` (`id`)
		ON UPDATE RESTRICT
		ON DELETE CASCADE,
	CONSTRAINT `sf_guard_group_permission_FK_2`
		FOREIGN KEY (`permission_id`)
		REFERENCES `sf_guard_permission` (`id`)
		ON UPDATE RESTRICT
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- sf_guard_permission
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sf_guard_permission`;


CREATE TABLE `sf_guard_permission`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`description` TEXT,
	PRIMARY KEY (`id`),
	UNIQUE KEY `sf_guard_permission_U_1` (`name`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- sf_guard_remember_key
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sf_guard_remember_key`;


CREATE TABLE `sf_guard_remember_key`
(
	`user_id` INTEGER(11)  NOT NULL,
	`remember_key` VARCHAR(32),
	`ip_address` VARCHAR(50)  NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`user_id`,`ip_address`),
	CONSTRAINT `sf_guard_remember_key_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON UPDATE RESTRICT
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- sf_guard_user
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sf_guard_user`;


CREATE TABLE `sf_guard_user`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(128)  NOT NULL,
	`algorithm` VARCHAR(128) default 'sha1' NOT NULL,
	`salt` VARCHAR(128)  NOT NULL,
	`password` VARCHAR(128)  NOT NULL,
	`created_at` DATETIME,
	`last_login` DATETIME,
	`is_active` TINYINT(4) default 1 NOT NULL,
	`is_super_admin` TINYINT(4) default 0 NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `sf_guard_user_U_1` (`username`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- sf_guard_user_group
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sf_guard_user_group`;


CREATE TABLE `sf_guard_user_group`
(
	`user_id` INTEGER(11)  NOT NULL,
	`group_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`user_id`,`group_id`),
	KEY `sf_guard_user_group_FI_2`(`group_id`),
	CONSTRAINT `sf_guard_user_group_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON UPDATE RESTRICT
		ON DELETE CASCADE,
	CONSTRAINT `sf_guard_user_group_FK_2`
		FOREIGN KEY (`group_id`)
		REFERENCES `sf_guard_group` (`id`)
		ON UPDATE RESTRICT
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- sf_guard_user_permission
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sf_guard_user_permission`;


CREATE TABLE `sf_guard_user_permission`
(
	`user_id` INTEGER(11)  NOT NULL,
	`permission_id` INTEGER(11)  NOT NULL,
	PRIMARY KEY (`user_id`,`permission_id`),
	KEY `sf_guard_user_permission_FI_2`(`permission_id`),
	CONSTRAINT `sf_guard_user_permission_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON UPDATE RESTRICT
		ON DELETE CASCADE,
	CONSTRAINT `sf_guard_user_permission_FK_2`
		FOREIGN KEY (`permission_id`)
		REFERENCES `sf_guard_permission` (`id`)
		ON UPDATE RESTRICT
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- sf_guard_user_profile
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sf_guard_user_profile`;


CREATE TABLE `sf_guard_user_profile`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER(11)  NOT NULL,
	`first_name` VARCHAR(20),
	`last_name` VARCHAR(20),
	`birthday` DATE,
	PRIMARY KEY (`id`),
	KEY `sf_guard_user_profile_FI_1`(`user_id`),
	CONSTRAINT `sf_guard_user_profile_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON UPDATE RESTRICT
		ON DELETE CASCADE
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
