<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- custom css file link  -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="stylesidebar.css">
<div id="mySidemenu" class="sidemenu">
        <a href="javascript:void(0)" class="close" onclick="closeSM()">
            &times;</a>
        <div class="sm-wrapper">
            <a href="firstpage.html">Home</a>
            <a href="quiz.php">Quiz's</a>
            <a href="prof.html">Profile</a>
            <a class="nav-link" href="../logout.php">Logout</a>
        </div>
    </div>
<div class="container">

<div class="content">
   <h3>hi, <span>user</span></h3>
   <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
   <p>this is an user page</p>
   <!-- <a href="login_form.php" class="btn">login</a> -->
   <!-- <a href="register_form.php" class="btn">register</a> -->
   <!-- <a href="logout.php" class="btn">logout</a> -->
</div>
</div>

      
    
</body>
</html>
