<?php
//     session_start();
     require 'dbcon.php';

     $query = "SELECT * FROM memory WHERE filename = '" .$_GET['filename']."' AND storage_id = '".$_SESSION["username"]."' ";
     $result = mysqli_query($con, $query);
     if ($result && mysqli_num_rows($result) > 0) {
          $record = mysqli_fetch_assoc($result);
     // Sử dụng $record['column_name'] để truy cập dữ liệu của từng cột
     }
?>

<!DOCTYPE html>
<html lang="en">
     <head>
         <link rel="shortcut icon" href="../imgs/heart-solid.svg" type="image/x-icon">

         <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <style>
              *{
                  margin: 0;
                  padding: 0;
                  box-sizing: border-box;
                  font-family: 'Courier New', Courier, monospace;
                  user-select: none;
              }
               html{
                    background-color: rgb(255, 152, 152);

               }
               .container {
                    display: flex;
                    height: 100vh;
                    /* padding: 20px; */
               }
               .left-side {
                   flex: 80%;
                    background-color: rgb(0,0,0);
                    display: grid;
                    justify-items: center; /* Căn giữa chiều ngang */
                    align-content: center;
                    
               }
               img{
                    max-height:100vh;
                    max-width:100%;
               }
               .right-side {
                    flex: 20%;
                    background-color: rgb(255,255,255);
                    padding: 20px;
                    display:flex;
                   position: relative;
                   /*justify-content: center;*/

               }
               .right-side .date{
                   font-family: "Roboto", sans-serif;
               }
               .edit-close-btn{
                   height:40px;
                   display: flex;
                   align-items: center;
                   bottom:0;
                   position: absolute;
               }
               a.btn{
                    margin:10px;
                    padding: 0 20px;
                    text-align: center;
                    text-decoration: none;
                    font-weight: 900;
                    font-size: 20px;
               }
               .btn-close{
                    padding:5px;
                    top:7px;
                    right:10px;
                    height:auto;
                    position:absolute;
                    cursor: pointer;
                    /* transform:translateX(-80%); */
               }
               .btn-close img {
                   transform: scale(0.7);
               }
               a.btn-delete{
                    color: rgb(0,0,0);
                    background-color: rgb(255, 68, 68); 
               }
               a.btn-edit{
                    color: rgb(0,0,0);
                    background-color: rgb(252, 212, 103); 
               }

               p.note{
                   padding: 0 5px;
                   background-color: rgb(255, 146, 101);
               }


          </style>
     </head>
     <body>
          <div class="container">
               <div class="left-side">
                    <img src="../storage/<?= $record['storage_id'];?>/<?= $record['filename']; ?>" alt="Your Image">
               </div>
               <div class="right-side">
                   <pre>
                       <h1 class="date"><?= $record['date'];?></h1>
                       <p class="note"><?=$record['note'];?></p>
                   </pre>
                   <div class="btn btn-close" id="btn-close-detail"><img src="../imgs/xmark-solid.svg"></div>
                   <div class="edit-close-btn">
                       <p><a href="memory-update.php?filename=<?= $record['filename']; ?>" class="btn btn-edit">Edit</a></p>
                       <p><a href="memory-create.php" class="btn btn-delete">Delete</a></p>
                   </div>
               </div>
               
          </div>
          <div class="footer">

          </div>
     </body>
     <script src="https://kit.fontawesome.com/1e993a9369.js" crossorigin="anonymous"></script>
     <script>
          (document.getElementById('btn-close-detail')).onclick = function () {
               location.replace("display.php");          
          }
     </script>
</html>