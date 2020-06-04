USE WorldEvents

SELECT 
ContinentName, 
CountryName, 
(SELECT COUNT(EventName) AS 'Number Of Events'
 FROM tblEvent
 WHERE COUNT(EventName) > 5)

FROM     
	tblContinent INNER JOIN
				tblCountry ON tblContinent.ContinentID = tblCountry.ContinentID INNER JOIN
				tblEvent ON tblCountry.CountryID = tblEvent.CountryID

GROUP BY CountryName, ContinentName

