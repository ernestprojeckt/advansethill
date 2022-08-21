SELECT park_id, COUNT(model) as coount_of_cars
FROM cars
WHERE  year > 2004 OR price > 30
GROUP BY park_id;


SELECT park_id, COUNT(model) as coount_of_cars
FROM cars
WHERE  year > 2004 OR price > 30
GROUP BY park_id

HAVING  coount_of_cars > 1
ORDER BY park_id DESC
    LIMIT 1;

SELECT DISTINCT model, price
FROM cars;

SELECT parks.serial_number, parks.address, cars.model, cars.year
FROM parks, cars
WHERE cars.park_id = parks.id;

SELECT parks.serial_number, parks.address, cars.model, cars.year
FROM parks
         LEFT JOIN cars on parks.id = cars.park_id;


SELECT parks.serial_number, parks.address, cars.model, cars.year
FROM parks
         INNER JOIN cars ON parks.id = cars.park_id;

SELECT parks.serial_number, parks.address, cars.model, cars.year
FROM parks
         JOIN cars ON parks.id = cars.park_id
WHERE cars.park_id IS NULL OR parks.id IS NULL;