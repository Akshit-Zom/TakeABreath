<?php
require 'db/db_config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servicename = $_POST['servicename'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO services (servicename, description, price)
            VALUES (:servicename, :description, :price)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':servicename', $servicename);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);

    if ($stmt->execute()) {
        $successMessage = "Thank you for adding a service";

        header("Refresh: 1; URL=index.php");
    } else {
        $errorMessage = "Error occurred while adding the service";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <?php if(isset($successMessage)): ?>
    <script>
        alert("<?php echo $successMessage; ?>");
    </script>
    <?php endif; ?>
</body>
</html>
