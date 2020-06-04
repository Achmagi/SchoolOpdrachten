USE WorldEvents

SELECT LEFT(CategoryName, 1) AS CategoryInitial, COUNT(EventName) AS NumberOfEvents, CAST(AVG(LEN(EventName)) AS FLOAT) AS AverageEventNameLenght

FROM     tblCategory INNER JOIN
                  tblEvent ON tblCategory.CategoryID = tblEvent.CategoryID

GROUP BY LEFT(CategoryName, 1)