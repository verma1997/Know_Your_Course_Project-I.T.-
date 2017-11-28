<?php
        session_start();
    $con=mysqli_connect("localhost","root","");
        
     mysqli_select_db($con,"course_feedback");
     if(isset($_POST['submit'])){
         $teachername=mysqli_real_escape_string($con,$_POST['name']);
         $course=mysqli_real_escape_string($con,$_POST['course']);
         $password=mysqli_real_escape_string($con,$_POST['psw']);
         $password2=mysqli_real_escape_string($con,$_POST['psw2']);
         $email=mysqli_real_escape_string($con,$_POST['email']);
         $username=$_POST['username'];
         
         if($password==$password2){
            $password=md5($password);
              $s="insert into teachers (teachername,course,email,username,password) values ('".$teachername."','".$course."','".$email."','".$username."','".$password."')";
     $k=mysqli_query($con,$s);
             echo '<script language="javascript">';
  echo 'alert("Record added successfully")';
  echo '</script>';
  
             $_SESSION['username']=$username;
             header("location: register_teacher.php");
             
         }
         else{
             $_SESSION['message']="Password do not match";
         }
    
     }
?>
<html>
<head>
    
    <!--<link href='registe.css' type="text/css" rel="stylesheet">-->
    <style type="">
      form{
      border: 3px solid #f1f1f1;
    background-color: #ECEFF1;
}
input[type=text], input[type=password],input[type=email],input[type=tel],input[type=date]{
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
     border-radius: 15px;
}
input[type=radio]{
    text-align: inherit;
}

.but {
    background-color: #1565C0;
    color: white;
    padding: 14px 20px;
    opacity: 0.85;
    border-radius: 15px;
    cursor: pointer;
    width: 20%;
    font-size: 15px;
   

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

.but:hover {
    opacity: 0.8;
}

.container {
    padding: 16px;
    text-align: center;
    
}

span.register1{
    float: right;
}
    </style>
    </head>
<body>
<form method="post" action="">
   
      
  <div class="container">
      <h1>Sign Up</h1>
      <label><b>Teacher Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
    <br>
    <label><b>Course</b></label>
    <input type="text" placeholder="Enter Course" name="course" required>
    <br>
    <label><b>Email</b></label>
    <input type="email" placeholder="example@gmail.com" name="email" required>
       <br>
          <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
       <br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        <br>
   <label><b>Confirm Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw2" required>
        <br>       
      <div ><br>
   <input class="but" type="submit" name="submit" value="Sign Up">
          <br>
          <?php
      if(isset($_SESSION['message'])){
          echo "<div id='error_msg'>".$_SESSION['message']."</div>";
          unset($_SESSION['message']);
          }
      ?>
     </div> 
      
      
     
     
      

</div>

    
  
</form>

</body>
</html>