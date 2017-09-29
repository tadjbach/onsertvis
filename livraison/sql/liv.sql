ALTER TABLE auction ADD isCanceled TINYINT(1) NOT NULL;

UPDATE `advert_state` SET `labelNormal` = 'En cours' WHERE `advert_state`.`id` = 2;
UPDATE `advert_state` SET `labelNormal` = 'Terminée' WHERE `advert_state`.`id` = 3;

ALTER TABLE `calendar` ADD `day_fr_abbr` VARCHAR(50) NOT NULL AFTER `day_fr`;
UPDATE `calendar` SET `day_fr_abbr` = 'Lun' WHERE `calendar`.`id` = 1;
UPDATE `calendar` SET `day_fr_abbr` = 'Mar' WHERE `calendar`.`id` = 2;
UPDATE `calendar` SET `day_fr_abbr` = 'Mer' WHERE `calendar`.`id` = 3;
UPDATE `calendar` SET `day_fr_abbr` = 'jeu' WHERE `calendar`.`id` = 4;
UPDATE `calendar` SET `day_fr_abbr` = 'Ven' WHERE `calendar`.`id` = 5;
UPDATE `calendar` SET `day_fr_abbr` = 'Sam' WHERE `calendar`.`id` = 6;
UPDATE `calendar` SET `day_fr_abbr` = 'Dim' WHERE `calendar`.`id` = 7;
