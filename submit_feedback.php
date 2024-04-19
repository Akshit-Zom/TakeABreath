<?php
require 'db/db_config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("INSERT INTO reviews (rating, comment, date_posted) VALUES (?, ?, ?)");

    $stmt->bindParam(1, $_POST['rating']);
    $stmt->bindParam(2, $_POST['comment']);
    $stmt->bindParam(3, $_POST['date_posted']);

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
    <title>Feedback</title>
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
    <h2 style="margin-left: 350px;">Reviews</h2>
    <table style="margin-left: 350px; width: 800px;">
        <thead>
            <tr>
                <th>rating</th>
                <th>comment</th>
                <th>date posted</th>
            </tr>
        </thead>
        <tbody>
            <?php

            try {
                $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT * FROM reviews";
                $stmt = $pdo->query($sql);
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row['rating'] . "</td>";
                    echo "<td>" . $row['comment'] . "</td>";
                    echo "<td>" . $row['date_posted'] . "</td>";
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
