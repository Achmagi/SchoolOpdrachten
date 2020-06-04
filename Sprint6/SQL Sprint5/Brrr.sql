USE WorldEvents

SELECT EventName, EventDate, CountryName, ContinentName
FROM 
	tblContinent as co
	JOIN tblCountry as c
		ON  co.ContinentID = c.ContinentID
	JOIN tblEvent as e
		ON c.CountryID = e.CountryID
WHERE ContinentName = 'Antarctic' OR CountryName = 'Russia'
