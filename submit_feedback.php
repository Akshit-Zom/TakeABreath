<?php
require 'db/db_config.php'; // Include your database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    $date_posted = $_POST['date_posted'];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO feedback (rating, comment, date_posted)
            VALUES (:rating, :comment, :date_posted)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':rating', $rating);
    $stmt->bindParam(':comment', $comment);
    $stmt->bindParam(':date_posted', $date_posted);
    // Execute the statement
    if ($stmt->execute()) {
        // Set a flag to display the success message
        $successMessage = "Feedback has been submited";

        // Redirect back to index.php after a delay
        header("Refresh: 1; URL=index.php");
    } else {
        // Set a flag to display the error message
        $errorMessage = "Error occurred while adding the feedback";
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

