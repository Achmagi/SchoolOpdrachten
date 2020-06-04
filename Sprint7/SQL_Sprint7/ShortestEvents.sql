USE WorldEvents

SELECT EventName, LEN(EventName) AS LenghtOfName

FROM tblEvent 

ORDER BY LenghtOfName ASC
