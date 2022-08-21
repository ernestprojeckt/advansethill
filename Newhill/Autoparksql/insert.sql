INSERT INTO parks
(serial_number, address)
VALUES
    ('#2', 'address 2'),
    ('#3', 'address 3'),
    ('#4', 'address 4'),
    ('#5', 'address 5');


INSERT INTO cars
(park_id, model, year, price)
VALUES
    (1,'Toyota', 2015, 40),
    (1, 'Slavuta', 2004, 10),
    (2, 'BMW', 2004, 20),
    (4, 'BMW', 2004, 20),
    (3, 'BMW', 2014, 35),
    (4, 'Lanos', 2006, 12),
    (3, 'VW', 2018, 30);

INSERT INTO drivers
(car_id, license_ID, full_name, birthdate)
VALUES
    (22, '#1', 'Driver 1', '1990-02-01'),
    (25, '#4', 'Driver 2', '1990-03-01'),
    (26, '#3', 'Driver 3', '1990-04-01'),
    (28, '#2', 'Driver 4', '1990-05-01');

INSERT INTO customers
(email, name, surname)
VALUES
    ('email1@gmail.com', 'Customer', '1'),
    ('email2@gmail.com', 'Customer', '2'),
    ('email3@gmail.com', 'Customer', '3'),
    ('email4@gmail.com', 'Customer', '4'),
    ('email5@gmail.com', 'Customer', '5');

INSERT INTO orders
(driver_id, customer_id, first_address, destination_address)
VALUES
    (5, 1,'point a', 'point f'),
    (6, 2, 'point b', 'point g'),
    (7, 3, 'point b', 'point g'),
    (8, 4, 'point b', 'point g');

DELETE FROM customers WHERE id = 5 OR id = 1;
UPDATE customers SET surname = "bendera" WHERE id =5
