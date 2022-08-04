<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9edbc45998.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>PHP login system!</title>
        <style>
        
        :root {
            --main-color: rgb(21, 21, 124);
            --black: #444;
            --light-color: #777;
            --box-shadow: .5rem .5rem 0 rgba(22, 160, 133, .2);
            --text-shadow: .4rem .4rem 0 rgba(0, 0, 0, .2);
            --border: .2rem solid var(--main-color);
        }


        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }

        header {
            padding: 20px;
            background: #ffffff;
            color: white;
            font-size: 30px;
            text-align: left;
        }

        body {
            overflow-y: hidden;
            margin: 0;
            overflow-y: scroll;
            background-color: #eae7dc;
            background-image: url('../images/quizimg.jpeg');
            background-repeat: no-repeat;
            margin-top: 0%;
        }


.loading-wrapper{
    display: inline-block;
    margin: 20px;
}

    .waivy {
   background-color: transparent;
  position: relative;
  -webkit-box-reflect: below -20px linear-gradient(transparent, rgba(0,0,0,.2));
  font-size: 40px;
}
.waivy span {
  /* font-family: 'Alfa Slab One', cursive; */
  position: relative;
  display: inline-block;
  color: rgb(20, 20, 88);
  /* text-transform: uppercase; */
  animation: waivy .9s infinite;
  animation-delay: calc(.1s * var(--i));
}
@keyframes waivy {
  0%,40%,100% {
    transform: translateY(0)
  }
  20% {
    transform: translateY(-20px)
  }
}

img{
    /* display: flex; */
    width:50vh;
    height:50vh;
}



        .sm-wrapper {
            margin-top: 100px;
            color: #000000;
        }

        .sidemenu {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #0b0804;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;

        }

        .sidemenu a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #ffffff;
            display: block;
            letter-spacing: 5px;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .sidemenu .close {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 50px;
            margin-left: 50px;
        }

        .sm-wrapper a:after {
            z-index: -1;
            position: absolute;
            left: 0%;
            width: 0;
            height: 50px;
            background: rgb(13, 13, 100);
            content: '';
            transition: width 0.35s ease-in-out;
        }

        .sm-wrapper a:hover:after {
            width: 10%;
        }

        .sm-wrapper a:hover {
            transition: 0.35s ease-in-out;

        }
        .Navbar{
            margin: 0px;
            width: 100vw;
        }
        #pg-content {
            transition: margin-left 0.5s;
            padding: 16px;
            padding-top: 2px;
            background-color: rgb(21, 21, 124);
            width: 2000pxz;
            height: 80px;
        }



        section {
            padding: 2rem 9%;
            margin-top: 50px;
            margin-left: 200px;
        }



        section:nth-child(even) {
            background: #f5f5f5;
            margin-top: 50px;
            margin-left: 200px;
        }

        .wrapper .display #time {
            align-items: center;
        }

        .wrapper .display #time {
            line-height: 85px;
            color: rgb(41, 36, 140);
            font-size: 50px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .wrapper span {
            height: 00%;
            width: 100%;
            background: inherit;
            border-radius: 10px;

        }

        .wrapper span:first-child {
            filter: blur(10px);
        }

        .wrapper span:last-child {
            filter: blur(20px);

        }

        .wrapper {
            height: 100px;
            /* width: 360px; */
            cursor: default;
            margin-left: 75%;
            /* position: absolute; */
            /* right: 10px; */
            border-radius: 10px;
            animation: animate 1.5s linear infinite;
            /* align-self: flex-end; */
        }

        @keyframes animate {
            100% {
                filter: hue-rotate(360deg);
            }
        }

        .wrapper .display,
        .wrapper span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .wrapper .display {

            z-index: 999;

            height: 85px;
            width: 345px;
            border-radius: 6px;
            text-align: center;
        }

        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800);

        
        h2,
        h3,
        h4,
        h5,
        p,
        a,
        span {
            font-family: 'Open Sans', sans-serif;
        }

        .transition {
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
        }
        h1{
            font-family: 'Open Sans', sans-serif;
            font-weight: 600;
            font-size: 50px;
        }

        .longTransition {
            transition: all .2s;
            -webkit-transition: all .2s;
        }

        .rel-wrapper {
            position: relative;
        }

        .block-element {
            display: block;
        }

        .no-underline {
            text-decoration: none;
        }

        .no-margin {
            margin: 0;
        }

        .inline-element {
            display: inline-block;
        }

        .text-align-center {
            text-align: center;
        }

        .small-font-size {
            font-size: .85rem;
        }

        .normal-font-size {
            font-size: 1rem;
        }

        .medium-font-size {
            font-size: 1.25rem;
        }

        .medium-font-size2 {
            font-size: 1.5rem;
        }

        .large-font-size {
            font-size: 1.8rem;
        }

        .large-font-size2 {
            font-size: 2rem;
        }

        .extra-large-font-size {
            font-size: 2.5rem;
        }

        .extra-large-font-size2 {
            font-size: 3rem;
        }

        .thin-font-weight {
            font-weight: 100;
        }

        .light-font-weight {
            font-weight: 300;
        }

        .normal-font-weight {
            font-weight: 400;
        }

        .medium-font-weight {
            font-weight: 500;
        }

        .semibold-font-weight{
            font-weight: 600;
        }

        .bold-font-weight {
            font-weight: 700;
        }

        .ultrabold-font-weight {
            font-weight: 900;
        }

        .vertical-center-align {
            position: absolute;
            top: 50%;
            -moz-transform: translateY(-50%) !important;
            -ms-transform: translateY(-50%) !important;
            -webkit-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }

        .loading-wrapper {
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 0;
        }

        .loading-text {
            color: #777;
            width: 100%;
            font-size: 4rem;
            animation-delay: 1.5s;
            animation-duration: 1s;
            animation-fill-mode: forwards;
            animation-name: getGlow;
        }

        .loading-text span {

            padding: 0 .4%;
            transform: translateX(-2rem);
            -webkit-transform: translateX(-2rem);
            opacity: 0;
            animation-delay: .5s;
            animation-duration: .3s;
            animation-fill-mode: forwards;
            animation-name: loadingAnim;
        }

        .loading-text span:nth-child(1) {
            animation-delay: .5s;
        }

        .loading-text span:nth-child(2) {
            animation-delay: .7s;
        }

        .loading-text span:nth-child(3) {
            animation-delay: 1.1s;
        }

        .loading-text span:nth-child(4) {
            animation-delay: 1.5s;
        }

        .loading-text span:nth-child(5) {
            animation-delay: 1.9s;
        }

        .loading-text span:nth-child(6) {
            animation-delay: 2.3s;
        }

        .loading-text span:nth-child(7) {
            animation-delay: 2.8s;
        }

        @keyframes getGlow {
            0% {
                text-shadow: 0 0 1em transparent;
            }

            100% {
                text-shadow: 0 0 1em #ededed;
            }
        }

        @keyframes loadingAnim {
            0% {
                transform: translateX(-2rem);
                -webkit-transform: translateX(-2rem);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                -webkit-transform: translateX(0);
                opacity: 1;
            }
        }
        #Line-f{
        font-size:50vh;
        font-family: 'Dancing Script', cursive;
        font-family: 'Josefin Sans', sans-serif;
        font-family: 'Kdam Thmor Pro', sans-serif;
        /* margin-top:3%;
        margin-left: 45%; */
        text-transform: uppercase;
        background-image: linear-gradient(
          -225deg,
          #231557 0%,
          #44107a 29%,
          #ff1361 67%,
          #fff800 100%
        );
        /* background-size: auto auto; */
        /* background-clip: border-box; */
        background-size: 200% auto;
        color: #fff;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: textclip 2s linear infinite;
        /* display: inline-block; */
        display: flex;
        justify-content: center;
        
        }
        
        @keyframes textclip {
          to {
            background-position: 200% center;
          }
        }


        .para h1{
            color: #231557;
            font-size:xx-large;
        }

        .Last-l{
                font-family: 'Open Sans', sans-serif;
                font-weight: 60;
                font-size: 30px;
                color:white;
                text-align: center;
                margin: 20px;
        }
        .lol{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .wrap{
            margin: 20px;
        }

.link_wrapper{
  position: relative;
}

a{
  display: block;
  width: 250px;
  height: 50px;
  line-height: 50px;
  font-weight: bold;
  text-decoration: none;
  background: rgb(0, 0, 0);
  text-align: center;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 1px;
  border: 3px solid rgb(0, 0, 0);
  transition: all .35s;
}

.icon{
  width: 50px;
  height: 50px;
  border: 3px solid transparent;
  position: absolute;
  transform: rotate(45deg);
  right: 0;
  top: 0;
  z-index: -1;
  transition: all .35s;
}

.icon svg{
  width: 30px;
  position: absolute;
  top: calc(50% - 15px);
  left: calc(50% - 15px);
  transform: rotate(-45deg);
  fill: rgb(11, 11, 197);
  transition: all .35s;
}
a:hover{
  /* width: 200px; */
  border: 3px solid black;
  background: transparent;
  /* color: rgb(255, 247, 247); */
}

a:hover + .icon{
  border: 3px solid black;
  right: -25%;
}


@media (max-width:480px)  { /* smartphones, Android phones, landscape iPhone */ 
    body{
        overflow: hidden;
    }
    .waivy{
        margin-left: 20px;
        font-size: 20px;
        font-weight: 500;
    }
    #Line-f h1{
        font-size: 35px;

    }
    .wrapper .display #time {
        line-height: 85px;
        color: rgb(41, 36, 140);
        font-size: 20px;
        font-weight: 500;
        letter-spacing: 0px;
        margin:0px;
        padding: 0px;
    }   
    .wrapper {
            height: 100px;
            /* width: 360px; */
            cursor: default;
            margin: 0px;
            /* position: absolute; */
            /* right: 10px; */
            border-radius: 10px;
            animation: animate 1.5s linear infinite;
            /* align-self: flex-end; */
        }
        .sidemenu a {
            padding: 8px 8px 8px 32px;
            font-size: 25px; 
            letter-spacing: 5px;
            margin-bottom: 20px;
        }
        .sidemenu a i{
            font-size: 25px;
        }
        .fas{
            
        }
}
    </style>
</head>

<body>
    <!-- <header>Viktorina</header> -->
    <div class="Navbar">
        <div id="mySidemenu" class="sidemenu">
            <a href="javascript:void(0)" class="close" onclick="closeSM()">
                &times;</a>
            <div class="sm-wrapper">
                <a href="https://webdproj2.000webhostapp.com/webdproj2/AJAY/student/firstpage.php"><i
                        class="fas fa-home" color="white"></i> Home</a>
                <a href="https://webdproj2.000webhostapp.com/webdproj2/AJAY/student/quiz.php"><i class="fas fa-qrcode"
                        color="white"></i> Quiz's</a>
                <a href="https://webdproj2.000webhostapp.com/webdproj2/AJAY/student/prof.php"><i
                        class="fas fa-address-card" color="white"></i> Profile</a>
                <a class="nav-link" href="logout.php"><i class="fas fa-door-open" color="white"></i>
                    Logout</a>
            </div>
        </div>
        <div id="pg-content">
            <div style="font-size: 50px; cursor:pointer ; color:#ffffff;" onclick="openSM()">&#9776; <b>Viktorina</b>
            </div>
            <!-- <h1>Side Menu<br><span>Tutorial</span></h1> -->
        </div>
    </div>




    <br>
    <div class="main_d">
        <div class="lol">

            <div class="wrapper">
                <div class="display">
                    <div id="time" style="align-items: center;">

                    </div>
                    <span> </span>
                    <span> </span>
                </div>
            </div>

            <div class="cont">
                <div id="Line-f">
                    <h1>Hi , <span><?php echo $_SESSION['user_name'] ?></span></h1>
                </div><br>
                <div class="loading-wrapper">
                    <div class="waivy"><b>
                            <span style="--i:1">W</span>
                            <span style="--i:2">E</span>
                            <span style="--i:3">L</span>
                            <span style="--i:4">C</span>
                            <span style="--i:5">O</span>
                            <span style="--i:6">M</span>
                            <span style="--i:7">E</span>
                            <span style="--i:8"> </span>
                            <span style="--i:9">T</span>
                            <span style="--i:10">O</span>
                            <span style="--i:11"> </span>
                            <span style="--i:12">V</span>
                            <span style="--i:13">I</span>
                            <span style="--i:14">K</span>
                            <span style="--i:15">T</span>
                            <span style="--i:16">O</span>
                            <span style="--i:17">R</span>
                            <span style="--i:18">I</span>
                            <span style="--i:19">N</span>
                            <span style="--i:20">A</span></b>
                    </div>


                </div>
                <div class="Last-l">Easy and Online Intuitive Online Testing</div>
            </div>
            <div class="wrap">
                <div class="link_wrapper">
                    <a href="https://webdproj2.000webhostapp.com/webdproj2/AJAY/student/quiz.php">Get Started!</a>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.832 268.832">
                            <path
                                d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.883-4.882 4.883-12.796 0-17.678z" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>


        </section>
        <div>

            <br>
            <br>
            <!-- <div class="wrap">
            <div class="link_wrapper">
                <a href="#">Get Started!</a>
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.832 268.832">
                    <path d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.883-4.882 4.883-12.796 0-17.678z"/>
                  </svg>
                </div>
              </div>
         </div>  -->
        </div>

        <script>
            function openSM() {
                document.getElementById("mySidemenu").style.width = "300px";
                document.getElementById("pg-content").style.width = "100vw";
                document.getElementById("pg-content").style.marginLeft = "235px";

            }
            function closeSM() {
                document.getElementById("mySidemenu").style.width = "0";
                document.getElementById("mySidemenu").style.marginLeft = "0";
                document.getElementById("pg-content").style.marginLeft = "0px";
            }


            setInterval(() => {
                const time = document.querySelector("#time");
                let date = new Date();
                let hours = date.getHours();
                let minutes = date.getMinutes();
                let seconds = date.getSeconds();
                let day_night = "AM";
                if (hours > 12) {
                    day_night = "PM";
                    hours = hours - 12;
                }
                if (hours < 10) {
                    hours = "0" + hours;
                }
                if (minutes < 10) {
                    minutes = "0" + minutes;
                }
                if (seconds < 10) {
                    seconds = "0" + seconds;
                }
                time.textContent = hours + ":" + minutes + ":" + seconds + " " + day_night;
            });

        </script>
</body>


</html>