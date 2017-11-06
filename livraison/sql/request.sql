
--Non actif
SELECT username, email,concat("/link/", confirmation_token) as link
FROM `user`
where enabled = 0

--Non complet
SELECT concat(email, ',') FROM `user`
where isAcountComplete = 0 and enabled = 1
