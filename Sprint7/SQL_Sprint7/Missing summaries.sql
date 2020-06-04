USE WorldEvents

SELECT ContinentName, Summary, ISNULL(Summary, 'No summary') AS UsingISNULL, COALESCE(Summary, 'No summary') AS UsingCOALESCE,
CASE
	WHEN Summary IS NULL THEN 'No summary'
	ELSE Summary
	
END AS UsingCASE
FROM tblContinent
