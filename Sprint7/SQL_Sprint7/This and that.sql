USE WorldEvents

SELECT EventName, EventDate, EventDetails, EventID, CHARINDEX('this', EventDetails, 1) AS thisPosition, CHARINDEX('that', EventDetails) AS thatPosition, CHARINDEX('that', EventDetails) - CHARINDEX('this', EventDetails, 1) AS Offset
FROM tblEvent

WHERE EventDetails LIKE '%this%' AND EventDetails LIKE '%that%'