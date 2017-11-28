<?php

$con = mysqli_connect("localhost", "root", "");

mysqli_select_db($con,"course_feedback");

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$branch = $_POST['branch_names'];
$course_name = $_POST['course_names'];
$Q1 = $_POST['grade1'];
$Q2 = $_POST['grade2'];
$Q3 = $_POST['grade3'];
$Q4 = $_POST['grade4'];
$Q5 = $_POST['grade5'];
$Q6 = $_POST['grade6'];
$Q7 = $_POST['grade7'];
$Q8 = $_POST['grade8'];
$Q9 = $_POST['grade9'];

$query_insert = "INSERT INTO feedback_record (id,firstname,lastname,branch,coursename,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9) VALUES ('".$id."','".$first_name."','".$last_name."','".$branch."','".$course_name."','".$Q1."','".$Q2."','".$Q3."','".$Q4."','".$Q5."','".$Q6."','".$Q7."','".$Q8."','".$Q9."')";

if(!mysqli_query($con,$query_insert))
{
    echo 'Not Inserted';
}
else
{
    echo 'Inserted';
    header ("location: welcome_feedback.php");
}

?>

<!--SCRIPT ENDS-->