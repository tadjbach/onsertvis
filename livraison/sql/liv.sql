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

ALTER TABLE user ADD isNewMessage TINYINT(1) NOT NULL, ADD isNewAuction TINYINT(1) NOT NULL, ADD isValideAuction TINYINT(1) NOT NULL;
ALTER TABLE message ADD isNew TINYINT(1) NOT NULL;


ALTER TABLE advert ADD user_valide_id INT NOT NULL;
ALTER TABLE advert ADD CONSTRAINT FK_54F1F40BE3B631AD FOREIGN KEY (user_valide_id) REFERENCES user (id);
CREATE INDEX IDX_54F1F40BE3B631AD ON advert (user_valide_id);

/*
SELECT * FROM (SELECT 	m.id as msgId,
                                  m.user_sender,
                                  m.advert_id,
                                  m.content,
                                  m.state as msgState,
                                  m.isPublished as msgIsPublished,
                                  m.isDeleted as msgIsDeleted,
                                  m.dateCreation as msgDateCreation,
                                  m.user_receiver,
                                  a.user_id as advert_user_id
                      FROM message m
                      INNER JOIN advert a ON m.advert_id = a.id
                      INNER JOIN user sender ON sender.id = m.user_sender
                      INNER JOIN user receiver ON receiver.id = m.user_receiver
                                  WHERE m.user_receiver = 56
                                  AND m.isPublished = 1
                                  AND m.isDeleted = 0
                                  AND a.user_id = 56
                              ORDER BY m.dateCreation  DESC
                          )msg

                       GROUP BY advert_id, user_sender
                       ORDER BY msgDateCreation  DESC
*/
