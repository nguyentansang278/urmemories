
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UM</title>
    <!-- icon web -->
    <link rel="shortcut icon" href="imgs/heart-solid.svg" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

</head>
<body>
    <div class="header">
        <div class="nav_bar">
            <div>
                <button class="btn_open_side_navbar" id="side_navbar_open" onclick="side_navbar_open()"><span><i class="fa-solid fa-bars"></i></span></button>
            </div>
            <div class="side_navbar">
                <div class="header_side_navbar">
                    <div class="logo">
                        <a href="/"><img alt="" loading="lazy" src="imgs/logo1.png"></a>
                    </div>
                    <div>
                        <button class="btn_close_side_navbar" id="side_navbar_close" onclick="side_navbar_close()"><span><i class="fa-solid fa-xmark" style="color: #000000;"></i></span></button>
                    </div>
                </div>
                <div class="main_navbar">
                    <a href="#">Why us</a>
                    <a href="#">Features</a>
                    <a href="#">Support</a>
                </div>
                
            </div>
        </div>
    </div>
    <main>
        <div class="page1">
            <div class="logo2">
                <img alt="" src="imgs/logo2.png">
            </div>
            <div class="intro">
                <h1>Store memories with peace of mind</h1>
                <p>Upload photos, take notes, and even add tags for easy searching later, helps you save and manage memorable moments in life.</p>
                <p><a href="signin-signup.php" class="btn_explore">Explore now</a></p>
            </div>
            <div>
                

            </div>
        </div>
        <div class="page2">
            <div class="video_bg">
                <video autoplay muted loop id="myVideo">
                    <source src="imgs/video_bg.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </main>
    
    


    <!-- <div class="footer">
        <p>Footer</p>
    </div> -->

    <!-- font awesome -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="js/event-handling.js"></script>
    
    <script src="https://kit.fontawesome.com/1e993a9369.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


</body>
</html>