UPDATE movies SET producer_id = (SELECT pro.id FROM (SELECT * FROM producers) AS pro WHERE pro.id = 86 AND pro.name LIKE "%film") WHERE producer_id IS
NULL;