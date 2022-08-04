<?php
error_reporting(0);
$conn = mysqli_connect('localhost','id19262624_root','4>x!2^~0$Sz0d-C}','id19262624_user_db');
if ($conn->connect_error) {
    echo "kyu nahi chalra\n";
  die("Connection failed: " . $conn->connect_error);
}

$query=" SELECT * FROM quiz_data2";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
?>
<?php

// @include 'config.php';

// session_start();

// if(!isset($_SESSION['user_name'])){
//    header('location:login_form.php');
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9edbc45998.js" crossorigin="anonymous"></script> -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <script type="text/javascript" src="js/sidemenu.js"></script> -->
    <title>Document</title>

    <link rel="stylesheet" href="quizstyle_a.css">
    <style>
        html {
             background-image: url(image/quizbk2.jpeg);
              /*background-repeat: no-repeat;*/
                background-size: cover;
            /*background: no-repeat center center fixed;*/
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            margin-top: 0%;
            overflow: scroll;
        }

        .quiz-div {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
        }

        .room-no-103{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #first {
            font-size: xxx-large;
            font-family: 'Dancing Script', cursive;
            font-family: 'Josefin Sans', sans-serif;
            font-family: 'Kdam Thmor Pro', sans-serif;
            /* margin-top: 10%;
            margin-left: 26%; */
            text-transform: uppercase;
            background-image: linear-gradient(-225deg,
                    #231557 0%,
                    #44107a 29%,
                    #ff1361 67%,
                    #fff800 100%);
            /* background-size: auto auto; */
            /* background-clip: border-box; */
            background-size: 200% auto;
            color: #fff;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 2s linear infinite;
            display: inline-block;

        }

        .da-div {
            height: 90%;
            display: flex;
            align-items: center;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        #second {
            margin: 20px 0;
            display: flex;
            justify-content: center;
        }

        @keyframes textclip {
            to {
                background-position: 200% center;
            }
        }

        #clkme {}

        #tdmain {   
            font-size: x-large;
            font-style: italic;
        }

        @import url('https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@1,500&display=swap');

        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }

        header {
            padding: 20px;
            background: #000000;
            color: white;
            font-size: 30px;
            text-align: left;
        }

        p {
            font-size: 20px;
        }

        body {
            margin: 0;
            overflow: hidden;
            font-family: 'Albert Sans', sans-serif;

        }

        #clkme {
            background-color: rgb(21, 21, 124);
            color: #ffffff;
            font-size: 10px;
            box-shadow: 0 4px 8px 0 rgba(26, 25, 25, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            width:70%;
            padding:13px;
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
            background-color: black;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;

        }

        .sidemenu a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 45px;
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
            font-size: 60px;
            margin-left: 50px;
        }

        .sm-wrapper a:after {
            z-index: -1;
            position: absolute;
            left: 0%;
            width: 0;
            height: 50px;
            background: rgb(21, 21, 124);
            content: '';
            transition: width 0.35s ease-in-out;
        }

        .sm-wrapper a:hover:after {
            width: 10%;
        }

        .sm-wrapper a:hover {
            padding-left: 64px;
            transition: 0.35s ease-in-out;

        }

        #pg-content {
            transition: margin-left 0.5s;
            padding: 8px;
            background-color: rgb(21, 21, 124);
            width: 100%;
            height: 10%;
        }


        .quiz1 {
            position: relative;
            display: inline-block;
            padding: 20px;
            margin: 20px;
            color: #170d0d;
            text-decoration: none;
            text-transform: uppercase;
            transition: 1s;
            letter-spacing: 4px;
            overflow: hidden;
            margin-right: 50px;
        }

        .quiz1:hover {
            background: #000000;
            color: #ffffff;
            box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 200px #03e9f4;
            /* -webkit-box-reflect: below 1px linear-gradient(transparent, rgba(255, 0, 0, 0.333)); */
        }

        .quiz1:nth-child(1) {
            filter: hue-rotate(270deg);
        }

        .quiz1:nth-child(2) {
            filter: hue-rotate(110deg);
        }

        .quiz1 span {
            position: absolute;
            display: block;
        }

        .quiz1 span:nth-child(1) {
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #000000);
            animation: animate1 1s linear infinite;
        }

        @keyframes animate1 {
            0% {
                left: -100%;
            }

            50%,
            100% {
                left: 100%;
            }
        }

        .quiz1 span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #000000);
            animation: animate2 1s linear infinite;
            animation-delay: 0.25s;
        }

        @keyframes animate2 {
            0% {
                top: -100%;
            }

            50%,
            100% {
                top: 100%;
            }
        }

        .quiz1 span:nth-child(3) {
            bottom: 0;
            right: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #000000);
            animation: animate3 1s linear infinite;
            animation-delay: 0.50s;
        }

        @keyframes animate3 {
            0% {
                right: -100%;
            }

            50%,
            100% {
                right: 100%;
            }
        }


        .quiz1 span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #000000);
            animation: animate4 1s linear infinite;
            animation-delay: 0.75s;
        }

        @keyframes animate4 {
            0% {
                bottom: -100%;
            }

            50%,
            100% {
                bottom: 100%;
            }
        }



        @media only screen and (max-width: 768px) 
        {
            html{
               background-image: url(image/quizbk3.jpeg);
          background-repeat: no-repeat;
          /*background-color:black;*/
           background-size: cover;
            }
        }
    </style>
</head>

<body>
    <!-- <header>Viktorina</header> -->
    <div id="mySidemenu" class="sidemenu">
        <a href="javascript:void(0)" class="close" onclick="closeSM()">
            &times;</a>
        <div class="sm-wrapper">
            <a style="font-size:35px" href="firstpage.php"><i class="fas fa-home" color="white"></i> Home</a>
            <a style="font-size:35px" href="quiz.php"><i class="fas fa-qrcode" color="white"></i> Quiz's</a>
            <a style="font-size:35px" href="prof.php"><i class="fas fa-address-card" color="white"></i> Profile</a>
            <a style="font-size:35px" class="nav-link" href="../logout.php"><i class="fas fa-door-open"
                    color="white"></i> Logout</a>
        </div>
    </div>
    <div id="pg-content">
        <div style="font-size:40px; cursor:pointer ; color:#ffffff;" onclick="openSM()"><b>&#9776; Viktorina</b></div>
        <!-- <h1>Side Menu<br><span>Tutorial</span></h1> -->
    </div>
    <div class="room-no-103">
        <div class="da-div">
            <br>
            <!-- <p id="first" align="center"><b>Number of Quiz Available : 4<span id="yahavalue"></span></b></p><br><br> -->
            <div class="quiz-div">
                <p id="first" align="center">Number of Quiz Available : <span id="yahavalue"> <?php echo $total?> </span> </p>
                <!-- <p id="first" align="center">Number of Quiz Available : <span id="yahavalue"><?php echo $total ?></span> </p> -->
            </div>
            <div id="second">
                <button onclick="loadquiz()" id="clkme" style="font-size:30px ; ">Click me to load all
                    quiz's</button>
            </div>
        </div>
    </div>
    

    <script>
        function openSM() {
            document.getElementById("mySidemenu").style.width = "275px";
            document.getElementById("pg-content").style.width = "3000px";
            document.getElementById("pg-content").style.marginLeft = "235px";
            document.getElementById("quiz1").style.marginLeft = "330px";
        }
        function closeSM() {
            document.getElementById("mySidemenu").style.width = "0";
            document.getElementById("mySidemenu").style.marginLeft = "0";
            document.getElementById("pg-content").style.marginLeft = "0px";
            document.getElementById("quiz1").style.marginLeft = "20px";
        }


        function loadquiz() {
            console.log("Clicked");
            // let ttl = document.getElementById("yahavalue").innerText;
             var ttl  = <?php echo json_encode($total); ?>;
            var num = ttl;
            // var num = 4;
            var htmml = "";

            for (i = 1; i <= num; i++) {
                if (i == 1) {
                    htmml += `<div><a class="quiz1" href="quizes/firstquiz.php">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Quiz-${i}
                </a></div>`}
                if (i == 2) {
                    htmml += `<div><a class="quiz1" href="quizes/secondquiz.php">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Quiz-${i}
                </a></div>`}
                if (i == 3) {
                    htmml += `<div><a class="quiz1" href="quizes/thirdquiz.php">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Quiz-${i}
                </a></div>`}
                if (i == 4) {
                    htmml += `<div><a class="quiz1" href="quizes/fourthquiz.php">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Quiz-${i}
                </a></div>`}
                if (i == 5) {
                    htmml += `<div><a class="quiz1" href="quizes/fifthquiz.php">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Quiz-${i}
                </a></div>`}
                // htmml += `<br><br>`;
            }
            const tdmain=document.createElement('div');
            tdmain.id='tdmain';
            tdmain.innerHTML = htmml;
            document.querySelector('.room-no-103').append(tdmain);
            document.getElementById("clkme").style.visibility = "hidden";
        }
    </script>
</body>

</html>