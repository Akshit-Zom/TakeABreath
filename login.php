<?php
require 'db/db_config.php'; 
include 'header.php';
session_start(); 


if (isset($_SESSION['user_id'])) {
    header('Location: addservice.php'); 
    exit();
}

$loginError = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email']; 
    $password = $_POST['password']; 

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT user_id, password FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['user_id']; 

            header('Location: addservice.php'); 
            exit();
        } else {
            $loginError = 'Invalid email or password.';
        }
    } else {
        $loginError = 'Invalid email or password.';
    }
}

echo '<section id="login-section" class="login-section">
        <div class="container" style="padding-top: 100px;">
            <h1>Login</h1>
            <form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                <button type="submit">Login</button>
            </form>';

if (!empty($loginError)) {
    echo '<p class="error">' . $loginError . '</p>';
}

echo '   </div>
    </section>';
?>
