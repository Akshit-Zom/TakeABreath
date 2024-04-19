<?php
require 'db/db_config.php'; // Include your database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $servicename = $_POST['servicename'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO services (servicename, description, price)
            VALUES (:servicename, :description, :price)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':servicename', $servicename);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);

    // Execute the statement
    if ($stmt->execute()) {
        // Set a flag to display the success message
        $successMessage = "Thank you for adding a service";

        // Redirect back to index.php after a delay
        header("Refresh: 1; URL=index.php");
    } else {
        // Set a flag to display the error message
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
