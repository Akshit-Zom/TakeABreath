<?php
require 'db/db_config.php'; // Ensure you have included your database configuration

// Check if a search term is set
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $searchTerm = $_GET['search'];

    // Connect to the database
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare a SQL statement to search for services
    $stmt = $conn->prepare("SELECT * FROM services WHERE servicename LIKE :term OR description LIKE :term");
    $stmt->bindValue(':term', '%' . $searchTerm . '%');
    $stmt->execute();

    // Fetch the results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // You can then display the results to the user
    foreach ($results as $service) {
        echo "<div>";
        echo "<h2>" . htmlspecialchars($service['servicename']) . "</h2>";
        echo "<p>" . htmlspecialchars($service['description']) . "</p>";
        echo "<p>Price: $" . htmlspecialchars($service['price']) . "</p>";
        echo "</div>";
    }
} else {
    echo "Please enter a search term.";
}
?>
