<?php
require 'db/db_config.php'; 

if (isset($_GET['search']) && !empty($_GET['search'])) {
    $searchTerm = $_GET['search'];

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM services WHERE servicename LIKE :term OR description LIKE :term");
    $stmt->bindValue(':term', '%' . $searchTerm . '%');
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
