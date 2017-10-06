<?php

$con = mysqli_connect("localhost", "root", "");

mysqli_select_db($con,"course_feedback");

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$branch = $_POST['branch'];
$course_name = $_POST['course_names'];
$course_code = $_POST['course_code'];
$Q1 = $_POST['grade1'];
$Q2 = $_POST['grade2'];
$Q3 = $_POST['grade3'];
$Q4 = $_POST['grade4'];
$Q5 = $_POST['grade5'];
$Q6 = $_POST['grade6'];
$Q7 = $_POST['grade7'];
$Q8 = $_POST['grade8'];
$Q9 = $_POST['grade9'];

$query = "INSERT INTO record (id,firstname,lastname,branch,coursename,coursecode,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9) VALUES ('".$id."','".$first_name."','".$last_name."','".$branch."','".$course_name."','".$course_code."','".$Q1."','".$Q2."','".$Q3."','".$Q4."','".$Q5."','".$Q6."','".$Q7."','".$Q8."','".$Q9."')";
if(!mysqli_query($con,$query))
{
    echo 'Not Inserted';
}
else
{
    echo 'Inserted';
}

?>
