SELECT floor AS "Floor number", COUNT(seats) AS "Total number of seats", COUNT(room_number) AS "Total number of rooms" FROM rooms GROUP BY floor ORDER
BY seats;