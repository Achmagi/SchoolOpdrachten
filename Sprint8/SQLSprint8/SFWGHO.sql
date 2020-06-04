USE DoctorWho

SELECT
    YEAR(tblEpisode.EpisodeDate) AS 'Episode year',
    tblEnemy.EnemyName,
    COUNT(*) AS 'Number of episodes'

FROM
    tblEpisode
    INNER JOIN tblDoctor ON tblEpisode.DoctorId = tblDoctor.DoctorId
    INNER JOIN tblEpisodeEnemy ON tblEpisode.EpisodeId = tblEpisodeEnemy.EpisodeId
    INNER JOIN tblEnemy ON tblEnemy.EnemyId = tblEpisodeEnemy.EnemyId

WHERE
    YEAR(tblDoctor.BirthDate) < 1970

GROUP BY
    YEAR(EpisodeDate),
    EnemyName

HAVING COUNT(*) > 1

ORDER BY 'Number of episodes' DESC