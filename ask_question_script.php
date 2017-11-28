<?php
session_start();
$connect = mysqli_connect("localhost","root","");
mysqli_select_db($connect,"course_feedback");
$userid = $_SESSION['Userid'];
//$student_id = $_POST['studentid'];
$student_name = $_POST['studentname'];
$course = $_POST['course_names'];
$question = $_POST['question'];

$query = "INSERT INTO ask_questions (id,name,course_name,question,action) VALUES ('".$userid."','".$student_name."','".$course."','".$question."','unmarked')";
$update_prob = "UPDATE ask_questions SET t_username='bharab' WHERE course_name='Probability & Statistics'";
$update_algo = "UPDATE ask_questions SET t_username='barun' WHERE course_name='Algorithm & Problem Solving'";
$update_eco = "UPDATE ask_questions SET t_username='pavneet' WHERE course_name='Economics'";
$update_oop = "UPDATE ask_questions SET t_username='pmjat' WHERE course_name='Object Oriented Programming'";
$update_it = "UPDATE ask_questions SET t_username='maniklal' WHERE course_name='Information Technology & Knowledge Society'";

if(mysqli_query($connect,$query)){
    if($course=='Probability & Statistics')
    {
    	$update_query = mysqli_query($connect,$update_prob);
    	if(isset($update_query)){	   
          echo "Question Updated !!";echo "<br>";
          echo "<a href='ask_questions.php'>Back To Dashboard</a>";
    	}
    }
    elseif($course=='Economics')
    {
    	mysqli_query($connect,$update_eco);
    	echo "Question Updated !!";echo "<br>";
          echo "<a href='ask_questions.php'>Back To Dashboard</a>";
    }
    elseif($course=='Algorithm & Problem Solving')
    {
    	mysqli_query($connect,$update_algo);
    	echo "Question Updated !!";echo "<br>";
          echo "<a href='ask_questions.php'>Back To Dashboard</a>";
    }
    elseif($course=='Object Oriented Programming')
    {
    	mysqli_query($connect,$update_oop);
    	echo "Question Updated !!";echo "<br>";
          echo "<a href='ask_questions.php'>Back To Dashboard</a>";
    }
    elseif($course=='Information Technology & Knowledge Society')
    {
    	mysqli_query($connect,$update_it);
    	echo "Question Updated !!";echo "<br>";
          echo "<a href='ask_questions.php'>Back To Dashboard</a>";
    }
}
else{
    echo 'Not Inserted';
}
?>