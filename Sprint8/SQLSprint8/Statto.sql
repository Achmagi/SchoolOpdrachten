USE WorldEvents

SELECT COUNT(EventName) AS 'Number of events', MIN(EventDate) AS 'Earliest date', MAX(EventDate) AS 'Latest date'
FROM tblEvent
