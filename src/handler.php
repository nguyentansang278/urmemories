<?php
//session_start();
require 'dbcon.php';
$username=$_SESSION['username'];
$storage_id = "storage/".$username;


if(isset($_POST['delete_memory']))
{
    $memory_filename = mysqli_real_escape_string($con, $_POST['delete_memory']);

    $query = "DELETE FROM memory WHERE filename='$memory_filename' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Memory Deleted Successfully";
        header("Location: memories_display.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Memory Not Deleted";
        header("Location: memories_display.php");
        exit(0);
    }
    mysqli_close($con);

}


if(isset($_POST['save_memory']))
{
//    $filename = mysqli_real_escape_string($con, $_POST['filename']);
    $filename = $username.mysqli_real_escape_string($con, $_FILES['filename']['name']);
    $note = mysqli_real_escape_string($con, $_POST['note']);
    $date = mysqli_real_escape_string($con, $_POST['date']);

    $query = "INSERT INTO memory (filename, note, date, storage_id) VALUES ('$filename','$note','$date', '$username')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        if (!file_exists($storage)) {
            mkdir($storage, 0777, true);
        }
        $_SESSION['message'] = "Memory Created Successfully";
        move_uploaded_file($_FILES['filename']['tmp_name'], ($storage_id."/").$filename);
        header("Location: memories_display.php");
        exit(0);
    }
    else
    {
        echo "image not found!";
        $_SESSION['message'] = "Memory Not Created";
        header("Location: memories_display.php");
        exit(0);
    }
    mysqli_close($con);

}

if(isset($_POST['update_memory']))
{
    $filename = mysqli_real_escape_string($con, $_POST['filename']);
    $note = mysqli_real_escape_string($con, $_POST['note']);
    $date = mysqli_real_escape_string($con, $_POST['date']);

    $query = "UPDATE memory SET note = '$note', date= '$date' WHERE filename = '$filename' AND storage_id = '$username' ";

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
        header("Location: memories_display.php");
        exit(0);
    }
    mysqli_close($con);


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
            header("Location: memories_display.php");
        } else {
            header("Location: test.php?mess=0");
        }
    } else {
        header("Location: test.php?mess=2");
    }
    mysqli_close($con);
}

if ($_GET["action"] == "logout") {
    logout();
}
function logout(){
    $_SESSION=[];
    session_unset();
    session_destroy();
    header("Location:index.php");
}
?>