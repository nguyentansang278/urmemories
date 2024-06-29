<?php
    require 'dbcon.php';

    if(!empty($_SESSION['username'])){
        header("Location: display.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="code.php" method="POST">
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <button type="submit" name="login_page">Sign in</button>
    </div>
</form>
</body>
</html>