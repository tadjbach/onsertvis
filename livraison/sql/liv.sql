ALTER TABLE auction ADD isCanceled TINYINT(1) NOT NULL;

UPDATE `advert_state` SET `labelNormal` = 'En cours' WHERE `advert_state`.`id` = 2;
UPDATE `advert_state` SET `labelNormal` = 'Terminée' WHERE `advert_state`.`id` = 3;

ALTER TABLE `calendar` ADD `day_fr_abbr` VARCHAR(50) NOT NULL AFTER `day_fr`;
UPDATE `calendar` SET `day_fr_abbr` = 'L' WHERE `calendar`.`id` = 1;
UPDATE `calendar` SET `day_fr_abbr` = 'M' WHERE `calendar`.`id` = 2;
UPDATE `calendar` SET `day_fr_abbr` = 'M' WHERE `calendar`.`id` = 3;
UPDATE `calendar` SET `day_fr_abbr` = 'J' WHERE `calendar`.`id` = 4;
UPDATE `calendar` SET `day_fr_abbr` = 'V' WHERE `calendar`.`id` = 5;
UPDATE `calendar` SET `day_fr_abbr` = 'S' WHERE `calendar`.`id` = 6;
UPDATE `calendar` SET `day_fr_abbr` = 'D' WHERE `calendar`.`id` = 7;
