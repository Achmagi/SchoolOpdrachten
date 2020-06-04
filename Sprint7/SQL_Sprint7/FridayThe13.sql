USE WorldEvents

SELECT 
	EventDate,
	FORMAT(EventDate,'dddd dd MMMM yyyy'),
	DATENAME(weekday, EventDate) AS 'Day of week',
	day(EventDate) AS 'Day number'


FROM 
	tblEvent