USE DoctorWho

SELECT DoctorName, Title
FROM tblDoctor AS d
	JOIN tblEpisode AS e
		ON d.DoctorId = e.DoctorId
WHERE EpisodeDate LIKE '%2010%'