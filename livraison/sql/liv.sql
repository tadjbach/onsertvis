ALTER TABLE auction ADD isCanceled TINYINT(1) NOT NULL;

UPDATE `advert_state` SET `labelNormal` = 'En cours' WHERE `advert_state`.`id` = 2;
UPDATE `advert_state` SET `labelNormal` = 'Terminée' WHERE `advert_state`.`id` = 3;
