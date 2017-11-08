
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
