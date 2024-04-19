<?php
require 'db/db_config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("INSERT INTO service_providers (provider_name, provider_contact, provider_email, service_category, description, hourly_rate, city, availability) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bindParam(1, $_POST['provider_name']);
    $stmt->bindParam(2, $_POST['provider_contact']);
    $stmt->bindParam(3, $_POST['provider_email']);
    $stmt->bindParam(4, $_POST['service_category']);
    $stmt->bindParam(5, $_POST['description']);
    $stmt->bindParam(6, $_POST['hourly_rate']);
    $stmt->bindParam(7, $_POST['city']);
    $stmt->bindParam(8, $_POST['availability']);

    try {
        $stmt->execute();
        echo "";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2 style="margin-left: 350px;">Our Services</h2>
    <table style="margin-left: 350px; width: 800px;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Category</th>
                <th>Description</th>
                <th>Hourly rate</th>
                <th>City</th>
                <th>Availability</th>
            </tr>
        </thead>
        <tbody>
            <?php

            try {
                $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT * FROM service_providers";
                $stmt = $pdo->query($sql);
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row['provider_name'] . "</td>";
                    echo "<td>" . $row['provider_contact'] . "</td>";
                    echo "<td>" . $row['provider_email'] . "</td>";
                    echo "<td>" . $row['service_category'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>" . $row['hourly_rate'] . "</td>";
                    echo "<td>" . $row['city'] . "</td>";
                    echo "<td>" . $row['availability'] . "</td>";
                    echo "</tr>";
                  
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            ?>
        </tbody>
    </table>
    <br>
    <br>
</body>

</html>
