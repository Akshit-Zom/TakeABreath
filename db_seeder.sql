-- Select the database to use
USE takeabreath;

-- Insert sample data into the 'users' table
INSERT INTO users (email, name, password) VALUES
('john.doe@example.com', 'John Doe', 'hashed_password_1'),
('jane.smith@example.com', 'Jane Smith', 'hashed_password_2'),
('alice.johnson@example.com', 'Alice Johnson', 'hashed_password_3'),
('bob.brown@example.com', 'Bob Brown', 'hashed_password_4');

-- Insert sample data into the 'services' table
INSERT INTO services (servicename, description, price) VALUES
('Web Development', 'Full-stack web development services, including frontend, backend, and database development.', 1200.00),
('Graphic Design', 'Professional graphic design services for logos, banners, and promotional materials.', 600.00),
('Digital Marketing', 'Comprehensive digital marketing solutions, including SEO, PPC, and social media management.', 850.00),
('Photography', 'Professional photography services for events, products, and portraits.', 500.00);

-- Insert sample data into the 'feedback' table
INSERT INTO feedback (user_id, service_id, comment, rating) VALUES
(1, 1, 'The service was excellent and the project was completed on time.', 5),
(2, 2, 'Creative designs but the project was slightly delayed.', 4),
(3, 3, 'Very effective marketing strategies, saw an increase in traffic.', 5),
(4, 4, 'Photos were good but not great, expected better quality for the price.', 3);

-- Insert sample data into the 'reviews' table
INSERT INTO reviews (user_id, service_id, review_text, stars) VALUES
(1, 1, 'Highly recommend their web development services. The team is skilled and very professional.', 5),
(2, 1, 'Good service overall, but communication could have been better.', 4),
(3, 2, 'Outstanding creativity, loved the designs!', 5),
(4, 3, 'Did not see much improvement in our ad campaigns, was expecting more.', 2);

-- Commit the transactions to make sure all data is saved properly
COMMIT;
