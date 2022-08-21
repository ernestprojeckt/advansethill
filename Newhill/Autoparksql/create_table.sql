
CREATE TABLE parks(
                      id BIGINT PRIMARY KEY AUTO_INCREMENT,
                      serial_number VARCHAR(16) NOT NULL UNIQUE,
                      address VARCHAR(250) NOT NULL

);


CREATE TABLE cars
(
    id      BIGINT PRIMARY KEY AUTO_INCREMENT,
    park_id BIGINT,
    model   VARCHAR(50)  NOT NULL,
    year    YEAR     NOT NULL,
    price   FLOAT(11, 2) NOT NULL DEFAULT 0,

    FOREIGN KEY (park_id) REFERENCES parks(id) ON DELETE SET NULL
);

CREATE TABLE  drivers
(
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    car_id BIGINT,
    license_ID VARCHAR(16)NOT NULL UNIQUE,
    full_name VARCHAR(150) NOT NULL,
    birthdate DATE NOT NULL,

    FOREIGN KEY (car_id) REFERENCES cars(id) ON DELETE SET NULL

);

CREATE TABLE  customers
(
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100)NOT NULL UNIQUE,
    name VARCHAR(50) NOT NULL,
    surname VARCHAR(100) NOT NULL
);

CREATE TABLE orders
(
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    driver_id BIGINT,
    customer_id BIGINT,
    first_address VARCHAR(250) NOT NULL,
    destination_address VARCHAR(250) NOT NULL,

    FOREIGN KEY (driver_id) REFERENCES drivers (id) ON DELETE SET NULL ,
    FOREIGN KEY (customer_id) REFERENCES customers (id) ON DELETE SET NULL

);

