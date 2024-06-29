<?php
//session_start();
require 'dbcon.php';

if(isset($_POST['delete_memory']))
{
    $memory_filename = mysqli_real_escape_string($con, $_POST['delete_memory']);

    $query = "DELETE FROM memory WHERE filename='$memory_filename' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Memory Deleted Successfully";
        header("Location: display.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Memory Not Deleted";
        header("Location: display.php");
        exit(0);
    }
}


if(isset($_POST['save_memory']))
{
//    $filename = mysqli_real_escape_string($con, $_POST['filename']);
    $filename = mysqli_real_escape_string($con, $_FILES['filename']['name']);
    $note = mysqli_real_escape_string($con, $_POST['note']);
    $date = mysqli_real_escape_string($con, $_POST['date']);

    $query = "INSERT INTO memory (filename, note, date) VALUES ('$filename','$note','$date')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Memory Created Successfully";
        move_uploaded_file($_FILES['filename']['tmp_name'], "storage/". $_FILES['filename']['name']);
        header("Location: display.php");
        exit(0);
    }
    else
    {
        echo "image not found!";
        $_SESSION['message'] = "Memory Not Created";
        header("Location: display.php");
        exit(0);
    }
}

if(isset($_POST['update_memory']))
{
    $filename = mysqli_real_escape_string($con, $_POST['filename']);
    $note = mysqli_real_escape_string($con, $_POST['note']);
    $date = mysqli_real_escape_string($con, $_POST['date']);

    $query = "UPDATE memory SET note = '$note', date= '$date' WHERE filename = '$filename'";

    if(mysqli_query($con, $query))
    {
        echo "cập nhật thành công";
        $_SESSION['message'] = "Memory Created Successfully";
        header("Location: memory-detail.php?filename=$filename");
        exit(0);
    }
    else
    {

        echo "image not found!";
        $_SESSION['message'] = "Memory Not Created";
        header("Location: display.php");
        exit(0);
    }

}

if(isset($_POST['login_page'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pwd = mysqli_real_escape_string($con, $_POST['password']);
    $query = "SELECT * FROM users WHERE email= '$email'";
    $result = mysqli_query($con, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $record = mysqli_fetch_assoc($result);
        if ($pwd == $record['password']) {
            $_SESSION["login"] = True;
            $_SESSION["username"] = $record['username'];
            header("Location: display.php");
        } else {
            header("Location: test.php?mess=0");
        }
    } else {
        header("Location: test.php?mess=2");
    }
}


?>