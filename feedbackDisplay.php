<?php
// Database connection
require 'db/db_config.php'; 

$sql = "SELECT * FROM feedback";

// Execute SQL query
$result = $conn->query($sql);

// Check if there are any rows in the result
if ($result->rowCount() > 0) {
    echo '<style>';
    echo '@import url("https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@200&family=Poppins:wght@200&family=Roboto+Mono:wght@140&family=Space+Grotesk:wght@300..700&display=swap");';
    echo '.feedback-container { display: flex; flex-wrap: wrap; justify-content: space-between; }';
    echo '.feedback-item { width: calc(50% - 10px); margin-bottom: 20px; padding: 15px; border: 1px solid #ccc; font-family: "Space Grotesk", sans-serif; }';
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
