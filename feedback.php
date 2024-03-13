<?php
echo '<section id="div-feedback" class="feedback-section">
            <div class="container">
                <h1>Feedback</h1>
          
                </br>
                 <form action="submit_feedback.php" method="post">
                 

                    <label for="message">Your feedback matter to us:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">Submit Feedback</button>
                </form>
                </br>
                <h2>Rate us:</h2>
                </br>
                <div class="feedback-img" id="feedback-div" >  
                <img src="./assets/img/good.webp" alt="Good" id="feedback-img" >
                <img src="./assets/img/neutre.png" alt="Neutral" id="feedback-img" >
                <img src="./assets/img/bad.webp" alt="Bad" id="feedback-img" >
                </div>
            </div>
        </section>';
