CREATE TABLE potential_user (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, isSociety TINYINT(1) NOT NULL, isJobber TINYINT(1) NOT NULL, email VARCHAR(255) NOT NULL, isSendMail TINYINT(1) NOT NULL, DateSendMail DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
ALTER TABLE advert CHANGE cpCity cpCity VARCHAR(100) DEFAULT NULL;

ALTER TABLE potential_user CHANGE DateSendMail DateSendMail DATETIME DEFAULT NULL;
