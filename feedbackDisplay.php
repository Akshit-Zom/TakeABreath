<?php
// Database connection
require 'db/db_config.php'; 

$sql = "SELECT * FROM feedback LIMIT 6";

// Execute SQL query
$result = $conn->query($sql);

// Check if there are any rows in the result
if ($result->rowCount() > 0) {
    echo '<style>';
    echo '.feedback-container { display: flex; flex-wrap: wrap; justify-content: space-between; }';
    echo '.feedback-item { width: calc(50% - 10px); margin-bottom: 20px; padding: 15px; border: 2px solid blueviolet; border-radius: 10px; font-family: "Space Grotesk", sans-serif; background-color: #fff; }';
    echo '.user-info { font-weight: bold; font-family: "Kanit", sans-serif; }';
    echo '.service-info { font-style: italic; font-family: "Montserrat", sans-serif; }';
    echo '.comment { margin-top: 10px; font-family: "Poppins", sans-serif; }';
    echo '.rating { margin-top: 10px; font-family: "Roboto Mono", monospace; }';
    echo '</style>';

    echo '<div class="feedback-container">';
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="feedback-item">';
        echo '<div class="user-info">User ID: ' . $row["user_id"] . '</div>';
        echo '<div class="service-info">Service ID: ' . $row["service_id"] . '</div>';
        echo '<div class="comment">' . $row["comment"] . '</div>';
        echo '<div class="rating">Rating: ' . $row["rating"] . '</div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "0 results";
}

// Close database connection
$conn = null;
?>
