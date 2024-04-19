<?php
require 'db/db_config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    $date_posted = $_POST['date_posted'];

    $sql = "INSERT INTO feedback (rating, comment, date_posted)
            VALUES (:rating, :comment, :date_posted)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':rating', $rating);
    $stmt->bindParam(':comment', $comment);
    $stmt->bindParam(':date_posted', $date_posted);
    if ($stmt->execute()) {

        $successMessage = "Feedback has been submited";


        header("Refresh: 1; URL=index.php");
    } else {

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

