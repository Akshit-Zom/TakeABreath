<?php
echo '  <section id="div-support" class="support-section">
<div class="container">
    <h2>Support</h2>
    <p>If you need assistance, please fill out the form below:</p>
    <form action="submit_support.php" method="post">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="issue">Describe Your Issue:</label>
        <textarea id="issue" name="issue" rows="4" required></textarea>

        <button type="submit">Submit Support Request</button>
    </form>
</div>
</section>';

?>