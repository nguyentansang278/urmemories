<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../imgs/heart-solid.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Memory Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <!-- <?php include('message.php'); ?> -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Memory Add 
                            <a href="memories_display.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="handler.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label>Image file</label>
                                <input type="file" name="filename" class="form-control"  accept="image/png, image/gif, image/jpeg" />
                            </div>
                            <div class="mb-3">
                                <label>Note</label>
                                <input type="text" name="note" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Date</label>
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_memory" class="btn btn-primary">Save Memory</button>
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