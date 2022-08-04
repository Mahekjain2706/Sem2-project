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
<body style=" color: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);">

   <!-- <h1><p><centre>Student Login</centre></p></h1> -->
<div class="form-container">
   <form action="" method="post">
   
      <h3>Faculty  ‎  login</h3>
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
      <p>New User? <a href="https://webdproj2.000webhostapp.com/webdproj2/AJAY/register_form.php"><u>Register now</u></a></p>
      <br>
      <a href="https://webdproj2.000webhostapp.com/webdproj2/AJAY/index.html" style="font-size:25px"> ← Viktorina</a>
   </form>

</div>

</body>
</html>