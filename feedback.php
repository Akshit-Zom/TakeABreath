<?php
include 'db/db_config.php';

$currentDate = date('Y-m-d H:i:s');

// Heredoc syntax for separating HTML content and PHP logic
echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        /* CSS styles */
        .feedback-section {
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: blueviolet;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: black;
        }
    </style>
</head>
<body>

<section id="div-feedback" class="feedback-section">
    <div class="container">
        <h1>Feedback</h1>
        
        <form action="submit_feedback.php" method="post">
            <label for="rating">Rate us:</label>
            <input id="rating" name="rating" rows="1" required></input>
            <label for="comment">Your feedback matters to us:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
            <input id="date_posted" name="date_posted" value="$currentDate" readonly required></input>

            <button type="submit">Submit Feedback</button>
        </form>
        
    </div>
</section>

</body>
</html>
HTML;
?>
