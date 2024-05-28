
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    studentID VARCHAR(20) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);



INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Daza', 'admin123');

CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255) NOT NULL,
    mode VARCHAR(50) NOT NULL,
    category VARCHAR(50) NOT NULL,
    brand VARCHAR(50) NOT NULL,
    quantity INT NOT NULL,
    quantity_left INT NOT NULL,
    can_borrow BOOLEAN DEFAULT TRUE
);
INSERT INTO items (image, mode, category, brand, quantity, quantity_left, can_borrow) VALUES
('images/71OFFI4WTDL._SL1500_.jpg', 'mode1', 'category1', 'brand1', 10, 5, TRUE),
('https://example.com/images/item2.jpg', 'mode2', 'category2', 'brand2', 15, 15, TRUE),
('https://example.com/images/item3.jpg', 'mode3', 'category3', 'brand3', 20, 10, FALSE);

CREATE TABLE borrowers (
    borrower_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    studentID VARCHAR(100) NOT NULL,
    items_borrowed INT DEFAULT 0
);
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    studentID VARCHAR(255) NOT NULL,
    role ENUM('admin', 'borrower') NOT NULL
);

