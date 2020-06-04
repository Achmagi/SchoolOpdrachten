USE WorldEvents

SELECT 
ContinentName,
CountryName, 
COUNT(EventName) AS NumberOfEvents

FROM     
	tblContinent INNER JOIN
				tblCountry ON tblContinent.ContinentID = tblCountry.ContinentID INNER JOIN
				tblEvent ON tblCountry.CountryID = tblEvent.CountryID


GROUP BY CountryName, ContinentName
HAVING COUNT(EventName) > 5 AND ContinentName NOT LIKE '%Europe%'
ORDER BY ContinentName DESC
