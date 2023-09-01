
-- Create a 'cars' table
CREATE TABLE IF NOT EXISTS cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand_id INT NOT NULL,
    model VARCHAR(50) NOT NULL,
    year VARCHAR(50) NOT NULL,
    price INT NOT NULL,
    transmission VARCHAR(50) NOT NULL,
    fuel VARCHAR(50) NOT NULL,
    machine VARCHAR(50) NOT NULL,
    seats INT NOT NULL,
    body VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (brand_id) REFERENCES brands(id)
);

INSERT INTO cars(brand_id, model, year, price, transmission, fuel, machine, seats, body)
VALUES (1,'Corolla','2021',6000,'Automatic','Gas','BWD',4,'Sedan'),
(1,'Avalon','2019',5000,'Automatic','Gas','BWD',4,'Sedan'),
(1,'86','2020',8000,'Automatic','Gas','BWD',4,'Sedan'),
(2,'Altima','2020',4000,'Automatic','Gas','FWD',4,'Sedan'),
(2,'Rogue','2021',7000,'Manual','Gas','4x4',6,'SUV'),
(2,'Terra','2018',5000,'Manual','Gas','BWD',6,'SUV'),
(3,'S','2019',15000,'Automatic','Electric','BWD',4,'Sedan');





