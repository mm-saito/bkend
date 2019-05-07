SELECT p.name, COUNT(*) FROM city c
INNER JOIN prefecture p ON p.prefecture_id = c.prefecture_id
WHERE c.name LIKE '%区'
GROUP BY p.name
ORDER BY p.prefecture_id;