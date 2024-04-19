<?php
require 'db/db_config.php'; 
include 'header.php';

if (isset($_GET['search']) && !empty($_GET['search'])) {
    $searchTerm = $_GET['search'];

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM services WHERE servicename LIKE :term OR description LIKE :term");
    $stmt->bindValue(':term', '%' . $searchTerm . '%');
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


    echo '<div class="service-container">';

    if (count($results) > 0) {
        foreach ($results as $service) {
            echo '<div class="service" style="padding-top: 100px; text-align:center;">';
            echo '<div class="service-info">';
            echo '<h3>' . htmlspecialchars($service['servicename']) . '</h3>';
            echo '<p>' . htmlspecialchars($service['description']) . '</p>';
            echo '<p class="service-price">$' . htmlspecialchars($service['price']) . '</p>';
            echo '<button class="buy-btn">Buy Service Now</button>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>No services found matching your search.</p>';
    }

    echo '</div>';
} else {
    echo '<p>Please enter a search term.</p>';
}
?>
