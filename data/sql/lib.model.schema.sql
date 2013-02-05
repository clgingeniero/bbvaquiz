
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
	`correct` VARCHAR(1) default '0',
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
	PRIMARY KEY (`id_quiz_usr`),
	KEY `id_question_idx`(`id_question`),
	KEY `id_answer_idx`(`id_answer`),
	CONSTRAINT `quizusr_FK_1`
		FOREIGN KEY (`id_question`)
		REFERENCES `question` (`id_question`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	CONSTRAINT `quizusr_FK_2`
		FOREIGN KEY (`id_answer`)
		REFERENCES `answer` (`id_answer`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
