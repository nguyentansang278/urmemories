
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UM</title>
    <!-- icon web -->
    <link rel="shortcut icon" href="../imgs/heart-solid.svg" type="image/x-icon">
    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* font-size: 100%; */
            font-family: "Roboto", sans-serif;
            font-weight: 100;
            font-style: normal;
            font-size:18px;
        }



        body{
            background-color: rgb(255, 255, 255);
            /* width:100%; */
        }

        .intro a{
            transition:.2s;
            margin: 25px;
        }

        .intro a:link,
        .intro a:visited{
            background-color: white;
            color: black;
            padding: 15px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
        .intro a:hover,.intro a:active {
            background-color: #ff7171;
            color: white;
        }

        .header{
            background-color: rgb(0, 0, 0);
            text-align: end;
            width:100%;
            position:relative;
            z-index:1;
            height:65px;
        }

        .page1{
            width:100%;
            /* height:150vh; */
            background:rgb(0,0,0);
            /* height:100vh; */
            /* z-index: 1; */
            position:relative;
            padding-bottom: 100px;
        }
        .logo2{
            display:flex;
            justify-content: center;
            width:100%;
            overflow:hidden;
        }
        .intro{
            text-align: center;
            width:70%;
            max-width:550px;
            margin:auto;
            color:#ff9f9f;
        }
        .page2{
            display:flex;
            justify-content: center;
            width:100%;
            height:120vh;
            overflow:hidden;
            z-index: -1;
        }
        .page2 video{
            width:100%;
        }
        .page2 .video_bg::before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 15%;
            background: -webkit-linear-gradient(top, #070707, hsla(0, 0%, 39%, 0) 100%);
            z-index: 2;
        }
        .page2 .video_bg{
            position:absolute;
            filter: brightness(.6);
        }
        .footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
        }


        @media only screen and (max-width: 600px){

            .btn_open_side_navbar {
                color: rgb(255, 255, 255);
            }

            .side_navbar {
                width:100%;
                height: 100%;
                background-color: rgb(255,255,255);
                position:fixed;
                transform: translate(-100%, 0);
                transition: .2s;
                z-index: 1;
                top:0;
            }
            .transformleft{
                transform: translate(0, 0);

            }
            .side_navbar a{
                background-color: #ffffff;
                color: black;
                display:block;
                padding: 20px;
                text-decoration: none;
                width:100%;
                text-align: start;

            }
            .btn_open_side_navbar,
            .btn_close_side_navbar{
                height:65px;
                padding: 20px;
                border:none;
                background-color: rgba(0,0,0,0);
            }


            .header_side_navbar{
                height:80px;
                justify-content: space-between;
                display:flex;
                width:100%;
            }
            .logo {
                height:100%;
                width:90px;
                display:flex;
                overflow:hidden;
                /* border-radius: 50%; */
            }
            .logo img{
                height:100%;
                width:100%;
            }
            .logo a:hover{
                transform: scale(1.2);
            }

            .page1 h1{
                font-size:40px;
            }
            .logo2 img{
                height:100%;
                max-height:300px;
                /* max-width: 1200px; */
            }
            .page2 .video_bg{
                height:800px;
            }
        }
        @media only screen and (min-width: 600px){


            .btn_open_side_navbar,
            .btn_close_side_navbar,
            .logo{
                display:none;

            }

            .header{
                display:flex;
                height:80px;
                justify-content: center;

            }
            .main_navbar{
                height:80px;
                background-color: rgb(0, 0, 0);
                display: flex;
            }
            .side_navbar a{
                color: rgb(255, 255, 255);
                margin: 30px;
                text-decoration: none;
                font-weight: 500;

            }

            .page1 h1{
                font-size:40px;
                margin-bottom:10px;
            }
            .logo2 img{
                width:90%;
                max-width:1300px;
                /* max-width: 1200px; */
            }
            .page2 .video_bg{
                width:100%;
            }
        }

    </style>
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
                        <a href="/"><img alt="" loading="lazy" src="../imgs/logo1.png"></a>
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
                <img alt="" src="../imgs/logo2.png">
            </div>
            <div class="intro">
                <h1>Store memories with peace of mind</h1>
                <p>Upload photos, take notes, and even add tags for easy searching later, helps you save and manage memorable moments in life.</p>
                <p><a href="sign_in.php" class="btn_explore">Explore now</a></p>
            </div>
            <div>
                

            </div>
        </div>
        <div class="page2">
            <div class="video_bg">
                <video autoplay muted loop id="myVideo">
                    <source src="../imgs/video_bg.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </main>
    <!-- <div class="footer">
        <p>Footer</p>
    </div> -->
    <!-- font awesome -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../js/event-handling.js"></script>
<script src="https://kit.fontawesome.com/1e993a9369.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function side_navbar_open(){
        $( ".side_navbar" ).addClass("transformleft");

    }

    function side_navbar_close(){
        $( ".side_navbar" ).removeClass("transformleft");
    }


    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
            $( ".header" ).css('position', 'fixed');
            $( ".page1" ).css('padding-top', '75px');
            // $( ".btn_open_side_navbar" ).css('color', 'rgb(0, 0, 0)');

        } else {
            $( ".header" ).css('position', 'relative');
            $( ".page1" ).css('padding-top', '0');
        }
    }
</script>
</body>
</html>