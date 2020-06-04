USE DoctorWho

SELECT  
AuthorName,
COUNT(*) AS Episodes,
MIN(EpisodeDate) AS ' Latest Date ',
MAX(EpisodeDate) AS ' Earliest Date '



FROM     tblAuthor INNER JOIN
                  tblEpisode ON tblAuthor.AuthorId = tblEpisode.AuthorId

GROUP BY AuthorName
ORDER BY Episodes DESC