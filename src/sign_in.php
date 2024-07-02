<?php
    require 'dbcon.php';
    if(!empty($_SESSION['username'])){
        header("Location: memories_display.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign in</title>
    <link rel="shortcut icon" href="../imgs/heart-solid.svg" type="image/x-icon">
    <style>
        .container{
            margin: auto;
            width: 50%;
            border: 3px solid green;
            padding: 10px;
            text-align: center;
            height: 100%;
        }
        form{
            height:100%;
        }

    </style>
</head>
<body>
<header>

</header>

<main>
    <div class="container" id="signin-form">
        <form action="handler.php" method="POST">
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
    </div>
</main>

<footer>

</footer>
</body>
</html>