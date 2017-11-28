<?php
session_start();
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"course_feedback");
    if(isset($_POST['login'])){
    $username=mysqli_real_escape_string($con,$_POST["username"]);
    $password=mysqli_real_escape_string($con,$_POST["psw"]);
     
     $s="SELECT * FROM teachers WHERE username='$username' AND password='$password'";
 $k=mysqli_query($con,$s);
if(mysqli_num_rows($k)==1){
          $_SESSION['message']="you are now logged in";
             $_SESSION['username']=$username;
             header("location: t_submit_student_record.php");
         }
else{
    $_SESSION['message']="Username/Password combination incorrect";
}
  }
?>
<html>
<head>
    
    <!--<link href="login.css" type="text/css" rel="stylesheet">-->
    <style type="text/css">
      form{
      border: 3px solid #f1f1f1;
    background-color: #ECEFF1;
}
input[type=text], input[type=password]{
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
     border-radius: 15px;
}

button {
    background-color: #1565C0;
    color: white;
    padding: 14px 20px;
    opacity: 0.85;
    border-radius: 15px;
    cursor: pointer;
    width: 20%;
   

}
#error_msg{
    width: 50%;
    margin: 5px auto;
    height: 30px;
    border: 1px solid #FF0000;
    background: #FFB9BB;
    color: #FF0000;
    text-align: center;
    padding-top: 10px;
}

button:hover {
    opacity: 0.8;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
    text-align: center;
    
}

span.psw {
    float: right;
    
}
</style>
    </head>
<body>
   

<form method="post" action="">
  <div class="imgcontainer">
      
    <img src="student-portal_icon.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
      
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter UserName" name="username" required>
    <br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        <?php
      if(isset($_SESSION['message'])){
          echo "<div id='error_msg'>".$_SESSION['message']."</div>";
          unset($_SESSION['message']);
          }
      ?>
      
      <div ><br>
    <input type="submit" name="login" value="Login">
          
         
     </div>  
      <div>
       <span class="psw">Forgot <a href="#">password?</a></span>
       <h3><a href="Page2_new.php">Back To Login Dashboard</a></h3>
   </div>
</div>
</form>
</body>
</html>