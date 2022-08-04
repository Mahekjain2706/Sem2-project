<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
  header('location:https://webdproj2.000webhostapp.com/webdproj2/AJAY/login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin page</title>

  <!-- custom css file link  -->
  <link rel="stylesheet" href="style (1) (2).css">

</head>
<style>
  body {
    background: url(images/admin.jpeg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    margin-top: 0%;
  }

  #first {
    font-size: xxx-large;
    font-family: 'Dancing Script', cursive;
    font-family: 'Josefin Sans', sans-serif;
    font-family: 'Kdam Thmor Pro', sans-serif;
    margin-top: 3%;
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
    text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textclip 2s linear infinite;
    display: inline-block;
  }


  @keyframes textclip {
    to {
      background-position: 200% center;
    }
  }

  .waviy {
    background-color: transparent;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    -webkit-box-reflect: below -20px linear-gradient(transparent, rgba(0, 0, 0, .2));
    font-size: 50px;
    margin-bottom: 4vh;
  }

  .waviy span {
    /* font-family: 'Alfa Slab One', cursive; */
    position: relative;
    display: inline-block;
    color: black;
    /* text-transform: uppercase; */
    animation: waviy 1s infinite;
    animation-delay: calc(.1s * var(--i));

  }

  .btn {
    margin-top: 10px;
  }

  @keyframes waviy {

    0%,
    40%,
    100% {
      transform: translateY(0)
    }

    20% {
      transform: translateY(-20px)
    }
  }
</style>

<body>

  <div class="container">

    <div class="content">
      <div id="first">
        <h2>Hi , <span><?php echo $_SESSION['admin_name'] ?></span></h2>
      </div><br>


      <div class="waviy">
        <!-- <h1>Welcome <span>Admin</span></h1> -->
        <b><span style="--i:1">W</span>
          <span style="--i:2">e</span>
          <span style="--i:3">l</span>
          <span style="--i:4">c</span>
          <span style="--i:5">o</span>
          <span style="--i:6">m</span>
          <span style="--i:7">e</span>
          <span style="--i:8"><span>Admin</span></span></b>
      </div>
      <p id="tempara"><b></b></p>






      <a style="
      margin-top: 10px;
  " href="../learning php/details.php" class="btn btn-1 btn-sep icon-quiz">New Quiz</a>
      <a style="
      margin-top: 10px;
  " target="_blank" href="https://docs.google.com/forms/u/0/?tgif=d" class="btn btn-2 btn-sep icon-class">Take me
        to Forms</a>
      <a style="
      margin-top: 10px;
  " href="https://databases-auth.000webhost.com/sql.php?server=1&db=id19262624_user_db&table=quiz_data2&pos=0"
        class="btn btn-3 btn-sep icon-cart">Manage Old Quiz</a>
      <!-- Ismpe Excel sheet wala svg  -->
      <a style="
      margin-top: 10px;
  " href="https://docs.google.com/spreadsheets/d/1WZUrE9azAoxcy86byOMXUAlQp2kFG1HEWjsWuWmDu-0/edit?resourcekey=null#gid=1756879897"
        class="btn btn-4 btn-sep icon-heart">Excel Sheet</a>
      <!-- <a href="login_form.php" class="btn">login</a> -->
      <!-- <a href="register_form.php" class="btn">register</a> -->
      <a href="logout.php" class=" btn btn-5 btn-sep icon-send" style="
    margin-top: 10px;
">logout</a>
      <a onclick="myreset()" class=" btn btn-5 btn-sep icon-send" style="
margin-top: 10px; color:white;
" id="resetbtn">RESET ALL</a>
      <br>
      <br>
      <br>
      <h3>In Collaboration With <span>Google Forms</span></h3>
    </div>

  </div>

</body>

<script>
// function myFunction() {
//   console.log("Hello Working");
// }
// function myreset2(){
//     console.log("Hello Working");
// }
let temp = document.getElementById("tempara");

  function myreset() {
    console.log("RESET Clicked");
    var proceed = confirm("Resetting Values for All will allow \n Students to Attempt Again \n Do you want to proceed ?");
if (proceed) {
 <?php 
       
      error_reporting(0);
    $conn = mysqli_connect('localhost', 'id19262624_root', '4>x!2^~0$Sz0d-C}', 'id19262624_user_db');
    $query = " SELECT * FROM flag_data2 ";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    echo $total;
    $update2 = "UPDATE `flag_data2` SET bool_value='0' ";
    $query_run = mysqli_query($conn, $update2);
      ?>

      
      setTimeout(function(){ temp.innerHTML="<b  >VALUES </b>" }, 10);
      setTimeout(function(){ temp.innerHTML="<b>VALUES  UPDATED </b>" }, 1000);
      setTimeout(function(){ temp.innerHTML="<b>VALUES  UPDATED  SUCCESSFULLY !!</b>" }, 2000);
      setTimeout(function(){ temp.innerHTML="<b></b>" }, 3000);
} else {
  console.log("No change in Values");
}
     
      
};  
</script>

</html>