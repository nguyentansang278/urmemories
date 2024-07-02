<?php
    require 'dbcon.php';
    if(!empty($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else{
        header("Location: sign_in.php");
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
    <link rel="shortcut icon" href="../imgs/heart-solid.svg" type="image/x-icon">
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-weight: 100;
            font-style: normal;
            font-size:18px;
            user-select: none;
        }

        body{
            background-color: rgb(255, 152, 152);
        }

        header{
            /*text-align: center;*/
            justify-content: center;
            padding:10px;
            margin: 20px;
            display:flex;
        }

        main{
            margin: 10px 0px;
            width:100%;
            display: table;
            /* border: rgb(255,255,255) 3px solid; */
        }


        .mm{
            display: block;
            margin:10px;
            float:left;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.9);
        }



        .mm img{
            cursor:pointer;
            height:220px;
            display:block;
        }

        a.btn{
            background-color: white;
            color: black;
            margin:5px;
            padding: 15px 25px;
            text-align: center;
            text-decoration: none;
            font-family: 'Courier New', Courier, monospace;

        }
        footer{

        }
    </style>
</head>
<body>
     <header>
          <p><a href="memory-create.php" class="btn">Create memory</a></p>
          <p><a href="handler.php?action=logout" class="btn">Log out</a></p>
     </header>
     <main>
          <?php
               $query = "SELECT * FROM memory WHERE storage_id = '$username' ORDER BY date DESC";
               $query_run = mysqli_query($con, $query);

               if(mysqli_num_rows($query_run) > 0)
               {
                    foreach($query_run as $memo)
                    {
          ?>
               <div class="container">
                    <div class="mm">
                         <div class="pic">
                              <a href="memory-detail.php?filename=<?= $memo['filename']; ?>"><img src="../storage/<?= $memo['storage_id'];?>/<?= $memo['filename']; ?>" ></a>
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
</body>
</html>