
--Non actif
SELECT username, email,concat("/link/", confirmation_token) as link
FROM `user`
where enabled = 0

--Non complet
SELECT concat(email, ',') FROM `user`
where isAcountComplete = 0 and enabled = 1

--City and Not CP
SELECT username, email, enabled, isAcountComplete, cpCity, postal_code_id FROM `user`
where postal_code_id is null
and cpCity is not null

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
