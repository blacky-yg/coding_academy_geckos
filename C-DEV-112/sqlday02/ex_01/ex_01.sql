SELECT count(profiles.id) AS "Number of members", floor(AVG(DATEDIFF(CURRENT_DATE(), birthdate) / 365.25)) AS "Average age" FROM profiles INNER JOIN member ON profiles.id = member.profile_id;