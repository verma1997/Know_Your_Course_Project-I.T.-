<?php
session_start();
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"course_feedback");
$s = $_SESSION['Userid'];
$sql = "SELECT password FROM student_login WHERE UserId='$s'";
$check = mysqli_query($con,$sql);
if($row = mysqli_fetch_assoc($check)){
	$store = $row['password'];
}

$oldpassword = $_POST['Password1'];
$newpassword = $_POST['Password2'];
$confirmnewpassword = $_POST['Password3'];
if($oldpassword==$store)
{
		if($newpassword==$confirmnewpassword)
		{		
			$query = "UPDATE student_login SET password='$newpassword' WHERE UserId='$s'";
			if($result = mysqli_query($con,$query)){
			echo "Password Changed Successfully !!";
			echo "<a href='courses.php'>Back To Dashboard</a>";
		}	
	}		
}
?>