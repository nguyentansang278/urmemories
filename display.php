<?php
    require 'dbcon.php';
    if(!empty($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else{
        header("Location: signin-signup.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>UM</title>
     <!-- icon web -->
     <link rel="shortcut icon" href="imgs/heart-solid.svg" type="image/x-icon">
     <link rel="stylesheet" href="css/fordisplay.css">
</head>
<body>
     <header>
          <div class="header">
          </div>
     </header>
     <main>
          <?php
               $query = "SELECT * FROM memory ORDER BY date DESC";
               $query_run = mysqli_query($con, $query);

               if(mysqli_num_rows($query_run) > 0)
               {
                    foreach($query_run as $memo)
                    {
          ?>
               <div class="container">
                    <div class="mm">
                         <div class="pic">
                              <a href="memory-detail.php?filename=<?= $memo['filename']; ?>"><img src="storage/<?= $username?>/<?= $memo['filename']; ?>" ></a>
                         </div>
                    </div>
               </div>
          <?php
                    }
               }
               else
               {
                    echo "<h5> No Record Found </h5>";
               }
          ?>
     </main>
     <footer>
          <p><a href="index.php" class="btn">Home</a></p>
          <p><a href="memory-create.php" class="btn">Create memory</a></p>
          <p><a href="logout.php" class="btn">Log out</a></p>
     </footer>
</body>
</html>