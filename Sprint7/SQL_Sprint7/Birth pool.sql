USE WorldEvents

SELECT EventName, EventDate, DATEDIFF(day, EventDate, '2016-04-26') AS offset, ABS(DATEDIFF(day, EventDate, '2016-04-26')) AS DaysDifference
FROM tblEvent

