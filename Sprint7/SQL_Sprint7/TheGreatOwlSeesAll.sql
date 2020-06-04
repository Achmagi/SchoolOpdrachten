USE WorldEvents

SELECT EventName, EventDate AS NotFormatted, FORMAT(EventDate, 'dd/MM/yyyy') AS UsingFormat, CONVERT(char,EventDate,104) AS UsingConvert
FROM tblEvent

WHERE EventDate LIKE '%2003%'