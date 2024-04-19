<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TakeABreath Services</title>
<link rel="stylesheet" href="./assets/style/style.css">

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .service-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 20px;
    }

    .service {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
        width: 80%;
        box-sizing: border-box;
    }

    .service img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-right: 20px;
    }

    .service-info {
        flex-grow: 1;
    }

    .service h3 {
        margin: 0 0 10px;
        color: #333;
    }

    .service p {
        margin: 0;
        color: #666;
    }

    .service-price {
        font-weight: bold;
        color: #27ae60;
        font-size: 1.2em;
        margin-bottom: 10px;
    }

    .buy-btn {
        background-color: #27ae60;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .buy-btn:hover {
        background-color: #219653;
    }
</style>
</head>
<body>

<div class="service-container">
<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "qazplm123@";
$dbname = "takeabreath"; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve data from the database
    $stmt = $conn->prepare("SELECT * FROM services");
    $stmt->execute();

    // Check if there are any rows returned
    if ($stmt->rowCount() > 0) {
        // Output data of each row
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="service">';
            // echo '<img src="service_image.jpg" alt="Service Image">';
            echo '<div class="service-info">';
            echo '<h3>' . $row["servicename"] . '</h3>';
            echo '<p>' . $row["description"] . '</p>';
            echo '<p class="service-price">$' . $row["price"] . '</p>';
            echo '<button class="buy-btn">Buy Service Now</button>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "0 results";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection (not necessary with PDO)
// $conn = null;
?>

</div>

<?php
// Include the footer
include 'footer.php';
?>
</body>
</html>
