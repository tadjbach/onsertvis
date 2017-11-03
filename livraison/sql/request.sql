SELECT username, email,concat("/link/", confirmation_token) as link
FROM `user`
where enabled = 0
