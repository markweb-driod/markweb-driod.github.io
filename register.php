<?php
session_start();
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>showNotification("Registration successful. You can now login.", "success");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}

$conn->close();
?>

<!-- HTML form for registration -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="dynamic-image.js" defer></script>
    <title>AX_CHANGE</title>
</head>
<body>

    <header>
        <img src="img/logo.jpg" alt="Site Logo">
        <h1 style="display: flex; font-family: courier new;font-size: 40px;">AXCHANGE </h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="payment.html">PAYMENT TAGS</a></li>
            <li><a href="tradegift.html">TRADE</a></li>
           
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
        
    </nav>
    <div id="notification-container" class="hidden">
        <div id="notification" class="success">
            <p id="notification-message">Registered Successfully! Please login</p>
            <span id="close-notification">&times;</span>
        </div>
    </div>

    <div class="ahh">
        <div class="container">
    <h2>Register</h2>
    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </div>
    </div>

     <!-- WhatsApp and Telegram Icons -->
     <div class="contact-icons">
            <a href="whatsapp-link" target="_blank"><img src="img/whatsapp.png" alt="WhatsApp"></a>
            <br>
            <a href="telegram-link" target="_blank"><img src="img/telegram.png" alt="Telegram"></a>
        </div>
    </main>

    <div class = "foo">
        <footer  >
        <p style="font-family: verdana; color:white; text-decoration: solid;"> (c) 2023 Powered by <a href="###" style="font-family: verdana; color: white;font-weight: bold;"> SHRINE </a></p>
     </footer>
    </div>


</body>
</html>
