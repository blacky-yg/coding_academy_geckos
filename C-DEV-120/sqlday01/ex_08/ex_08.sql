SELECT title, genre_id FROM movies INNER JOIN genres ON genres.id=movies.genre_id WHERE (genres.id=8 OR genres.id=13);