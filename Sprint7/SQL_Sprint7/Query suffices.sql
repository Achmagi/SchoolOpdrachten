USE WorldEvents



SELECT
	EventName,
	EventDate,
	CONVERT(char(10), EventDate, 100),
	DATENAME(DW, EventDate) + ' ' +
	DATENAME(DD, EventDate) + ' ' +
	DATENAME(MM, EventDate) + ' ' +
	DATENAME(YYYY, EventDate) + ' '

FROM tblEvent