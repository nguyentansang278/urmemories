<?php
    require 'dbcon.php';
    $username1 = 'sang123';

?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    print_r($_SESSION);
    session_unset();

    // destroy the session
    session_destroy();
    ?>
</body>
