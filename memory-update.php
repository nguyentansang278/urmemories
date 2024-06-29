<?php
//session_start();
require 'dbcon.php';
$query = "SELECT * FROM memory WHERE filename = '" .$_GET['filename']."'";
$result = mysqli_query($con, $query);
if ($result && mysqli_num_rows($result) > 0) {
    $record = mysqli_fetch_assoc($result);
    // Sử dụng $record['column_name'] để truy cập dữ liệu của từng cột
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imgs/heart-solid.svg" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Memory Update</title>
</head>
<body>

<div class="container mt-5">

    <!-- <?php include('message.php'); ?> -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Memory Update
                        <a href="display.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="application/x-www-form-urlencoded">
                        <div class="mb-3" style="display:none">
                            <label>Image file</label>
                            <input type="text" name="filename" class="form-control" value="<?= $record['filename']?>"  />
                        </div>
                        <div class="mb-3">
                            <label>Note</label>
                            <input type="text" name="note" class="form-control" value="<?= $record['note']; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control" value="<?= $record['date']?>">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="update_memory" class="btn btn-primary">Save Memory</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>