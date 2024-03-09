CREATE DATABASE IF NOT EXISTS takeabreath;
USE takeabreath;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(60) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    address VARCHAR(255),
    phone VARCHAR(15),
    user_type ENUM('user', 'service_provider') NOT NULL
);

CREATE TABLE IF NOT EXISTS service_providers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    service_category VARCHAR(255) NOT NULL,
    description TEXT,
    hourly_rate DECIMAL(10, 2),
    latitude DECIMAL(10, 8),
    longitude DECIMAL(11, 8),
    city VARCHAR(255) NOT NULL,
    availability TEXT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    service_provider_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (service_provider_id) REFERENCES service_providers(id)
);

CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    service_provider_id INT NOT NULL,
    service_id INT,
    date_time DATETIME NOT NULL,
    status ENUM('confirmed', 'pending', 'cancelled') NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (service_provider_id) REFERENCES service_providers(id),
    FOREIGN KEY (service_id) REFERENCES services(id)
);

CREATE TABLE IF NOT EXISTS reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    service_provider_id INT NOT NULL,
    rating INT NOT NULL,
    comment TEXT,
    date_posted DATETIME NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (service_provider_id) REFERENCES service_providers(id)
);

CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    from_user_id INT NOT NULL,
    to_user_id INT NOT NULL,
    message TEXT NOT NULL,
    date_time_sent DATETIME NOT NULL,
    FOREIGN KEY (from_user_id) REFERENCES users(id),
    FOREIGN KEY (to_user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS favorites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    service_provider_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (service_provider_id) REFERENCES service_providers(id)
);
