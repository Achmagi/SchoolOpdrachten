USE WorldEvents

SELECT CountryName, EventID

FROM     tblEvent RIGHT OUTER JOIN
                  tblCountry ON tblEvent.CountryID = tblCountry.CountryID

WHERE EventID IS NULL