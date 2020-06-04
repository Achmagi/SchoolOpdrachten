USE WorldEvents

SELECT EventName, EventDate, CategoryName
FROM 
	tblCategory AS c
	LEFT JOIN tblEvent AS e
		ON c.CategoryID = e.CategoryID

WHERE EventName IS NULL