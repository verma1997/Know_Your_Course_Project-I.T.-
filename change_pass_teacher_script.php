<?php
session_start();
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"course_feedback");
$s = $_SESSION['username'];
$sql = "SELECT password FROM teachers WHERE username='$s'";
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
			$query = "UPDATE teachers SET password='$newpassword' WHERE username='$s'";
			if($result = mysqli_query($con,$query)){
			echo "Password Changed Successfully !!";
			echo "<a href='t_submit_student_record.php'>Back To Dashboard</a>";
		}	
	}		
}
?>