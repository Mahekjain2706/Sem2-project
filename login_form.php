<?php
error_reporting(0);
@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:https://webdproj2.000webhostapp.com/webdproj2/AJAY/admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         // $_SESSION['user_typ'] = $row['user_type'];
         header('location:https://webdproj2.000webhostapp.com/webdproj2/AJAY/user_page.php');
         // header('location:user_page.php');
         // header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');

* {

   font-family: 'Poppins', sans-serif;
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   outline: none;
   border: none;
   text-decoration: none;
}

body {
   background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);
}


.container {
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding: 20px;
   padding-bottom: 60px;
}

.container .content {
   text-align: center;
}

.container .content h3 {
   font-size: 30px;
   color: #333;
}

.container .content h3 span {
   background: crimson;
   color: #fff;
   border-radius: 5px;
   padding: 0 15px;
}

.container .content h1 {
   font-size: 50px;
   color: #333;
}

.container .content h1 span {
   color: #4b6cb7;
}

.container .content p {
   font-size: 25px;
   margin-bottom: 20px;
}

.container .content .btn {
   display: inline-block;
   padding: 10px 30px;
   font-size: 20px;
   background: #333;
   color: #fff;
   margin: 0 5px;
   text-transform: capitalize;
}

.container .content .btn:hover {
   background: #10182a;
}

.form-container {
   min-height: 100vh;
   min-width: 100vw;
   display: flex;
   align-items: center;
   justify-content: center;
   /* padding:50px; */
   /*padding-bottom: 60px;  */
   background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);
   /* border-radius: 20px; */
   margin: 0px;
}

.form-container form {
   padding: 50px;
   min-width: 40vw;
   min-height: 50vh;
   border-radius: 10px;
   box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
   background: #fff;
   text-align: center;
   width: 500px;
}

.form-container form h3 {
   font-size: 30px;
   text-transform: uppercase;
   margin-bottom: 10px;
   color: #333;
}

.form-container form input,
.form-container form select {
   width: 100%;
   padding: 10px 15px;
   font-size: 17px;
   margin: 8px 0;
   background: #eee;
   border-radius: 5px;
}

.form-container form select option {
   background: #fff;
}

.form-container form .form-btn {
   background: #4b6cb7;
   width: 30%;
   color: whitesmoke;
   text-transform: capitalize;
   font-size: 18px;
   cursor: pointer;
}

.form-container form .form-btn:hover {
   background: #000000;
   color: #fff;
}

.form-container form p {
   margin-top: 10px;
   font-size: 20px;
   color: #333;
}

.form-container form p a {
   color: #4b6cb7;
   text-decoration: underline;
}

.form-container form .error-msg {
   margin: 10px 0;
   display: block;
   background: crimson;
   color: #fff;
   border-radius: 5px;
   font-size: 20px;
   padding: 10px;
}
</style>

<body style=" color: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);">

   <!-- <h1><p><centre>Student Login</centre></p></h1> -->
<div class="form-container">
   <form action="" method="post">
   
      <h3>Student  ‎  login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Email">
      <input type="password" name="password" required placeholder="Password">
      <input type="submit" name="submit" value="login" class="form-btn" id="form_btn">
      <p>New User? <a href="register_form.php"><u>Register now</u></a></p>
      <br>
      <a href="index.html" style="font-size:25px"> ← Viktorina</a>
   </form>

</div>

</body>
</html>