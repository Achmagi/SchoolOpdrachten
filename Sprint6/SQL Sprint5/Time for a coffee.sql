USE DoctorWho

SELECT AuthorName, Title, DoctorName, EnemyName, LEN(AuthorName) + LEN(Title) + LEN(DoctorName) + LEN(EnemyName) as TotalLenght

FROM     tblAuthor INNER JOIN
                  tblEpisode ON tblAuthor.AuthorId = tblEpisode.AuthorId INNER JOIN
                  tblDoctor ON tblEpisode.DoctorId = tblDoctor.DoctorId CROSS JOIN
                  tblEnemy

WHERE LEN(AuthorName) + LEN(Title) + LEN(DoctorName) + LEN(EnemyName) < 40