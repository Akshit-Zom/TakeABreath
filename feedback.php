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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@200&family=Poppins:wght@200&family=Roboto+Mono:wght@140&family=Space+Grotesk:wght@300..700&display=swap">
    <style>
        /* CSS styles */
        body { 
            margin: 0; 
            display: flex; 
            align-items: center; 
            justify-content: space-around; 
            flex-direction: column; 
            height: 100vh; 
            background-color: white; 
            font-family: 'Poppins', sans-serif; 
        } 
  
        .textup { 
            text-align: center; 
            color: rgb(11, 118, 11); 
            font-weight: 700; 
        } 
  
        i { 
            margin-right: 3px; 
        } 
  
        .form-box { 
            background-color: #fff; 
            box-shadow: 0 0 10px rgba(36, 67, 40, 0.8); 
            padding: 15px; 
            border-radius: 8px; 
            width: 500px; 
        } 
  
        form { 
            max-width: 400px; 
            margin: 0 auto; 
        } 
  
        .radio-group { 
            display: flex; 
            margin-bottom: 16px; 
        } 
  
        input[type="radio"] { 
            margin-right: 8px; 
        } 
  
        label { 
            display: block; 
            margin-bottom: 8px; 
            font-size: 17px; 
            color: black; 
            font-weight: 600; 
        } 
  
        input, 
        textarea { 
            width: 100%; 
            padding: 8px; 
            margin-bottom: 12px; 
            box-sizing: border-box; 
            border-radius: 10px; 
        } 
  
        button { 
            background-color: black; 
            color: #fff; 
            padding: 10px; 
            border: none; 
            border-radius: 25px; 
            cursor: pointer; 
            width: 100%; 
            font-size: 15px; 
            transition: .2s linear; 
        } 
  
        button:hover { 
            background-color: #0a6808; 
            border: none; 
            transform: translateY(-10px); 
        } 
  
        h1 { 
            color: green; 
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
