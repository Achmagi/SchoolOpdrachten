USE DoctorWho

SELECT AuthorName, DoctorName, COUNT(EpisodeNumber) AS 'Episodes'
FROM     tblAuthor INNER JOIN
                  tblEpisode ON tblAuthor.AuthorId = tblEpisode.AuthorId INNER JOIN
                  tblDoctor ON tblEpisode.DoctorId = tblDoctor.DoctorId

GROUP BY AuthorName, DoctorName
HAVING COUNT(EpisodeNumber) > 5
ORDER BY COUNT(EpisodeNumber) DESC
