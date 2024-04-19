<?php
$currentDate = date('Y-m-d H:i:s');
?>

<section id="div-feedback" class="feedback-section">
    <div class="container">
        <h1>Feedback</h1>
        
        <form action="submit_feedback.php" method="post">
            <label for="rating">Rate us:</label>
            <input id="rating" name="rating" rows="1" required></input>
            <label for="comment">Your feedback matters to us:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
            <input id="date_posted" name="date_posted" value="<?php echo $currentDate; ?>" readonly required></input>

            <button type="submit">Submit Feedback</button>
        </form>
        
    </div>
</section>
