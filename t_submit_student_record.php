<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Know_Your_Course</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <style type="text/css">
            @font-face{
                font-family: 'heroimagefont';
                src: url('centerfont.otf');
            }
            .font1{
                font-family: 'heroimagefont';
            }
            @font-face{
                font-family: 'crabmeal';
                src: url('crabmeal.otf');
            }
            .font2{
                font-family: 'crabmeal';
            }
            a:link{
                text-decoration: none;
            }
            .bg{
                background-image: url("background_new2.jpg");
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .logo{
                padding-top: 10px;
            }
            .space_links{
                padding-top: 20px;
            }
            .hero-text{
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
            }
            
            .padding-content{
                padding-top: 84px;
            }
            .padding-footer{
                padding-top: 670px;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                width: 220px;
                background-color: #0B4350;
            }

            li a {
                display: block;
                color: white;
                padding: 8px 16px;
                text-decoration: none;
            }

            /* Change the link color on hover */
            li a:hover {
                background-color: none;
                color: white;
            }
            .content{
                padding-right: 800px;
            }
            
            button.accordion {
                background-color: #E5E8E8;
                color: #444;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 15px;
                transition: 0.4s;
            }
            /*ACCORDIAN CSS*/
            button.accordion.active, button.accordion:hover {
                background-color: #E8DAEF;
            }

            button.accordion:after {
                content: '\002B';
                color: #777;
                font-weight: bold;
                float: right;
                margin-left: 5px;
            }

            button.accordion.active:after {
                content: "\2212";
            }

            div.panel {
                padding: 0 18px;
                background-color: white;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.2s ease-out;
            }
            /*ACCORDIAN CSS END*/
        </style>
</head>
<body>    
        <div style="float: left;">
            <ul>
                <li><center><a href="t_submit_student_record.php" class="font1">UPDATE RECORD</a></center></li>
                <li><center><a href="t_submit_assignment.php" class="font1">STUDENT ASSIGNMENTS</a></center></li>
                <li><center><a href="fetch_questions.php" class="font1">QUESTIONS</a></center></li>
                <!--<li><center><a href="#contact" class="font1">SEND UPDATES</a></center></li>-->
                <li><center><a href="analysis_script.php" class="font1">FEEDBACK FROM STUDENTS</a></center></li>
                <li><center><a href="change_pass_teacher.php" class="font1">CHANGE PASSWORD</a></center></li>
                <li><center><a href="logout_teacher.php" class="font1">SIGNOUT</a></center></li>
                <li><center><a href="index_new.php" class="font1">HOME</a></center></li>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <center><h4 class="font1" style="color: white;">IIITV</h4></center>
            </ul>
        </div>    
    <!--BODY-->
    <div style="float: right;" class="content">
        <h1 class="font1">UPDATE RECORD</h1>
        <h3 class="font1">Marks</h3>
        <form method="post" action="">
            <div class="form-group">
                <label for="student_id">Student ID :</label>
                <input class="form-control" type="text" name="student_id" required>
            </div>
            <div class="form-group">
                <label for="student_name">Student Name :</label>
                <input class="form-control" type="text" name="student_name" required>
            </div>
            <div class="form-group">
                <label for="courses">Courses :</label>
                    <input list="course_names" class="form-control" type="course_names" name="course_name" required>
                        <datalist id="course_names">
                            <option value="Probability & Statistics"></option>
                            <option value="Economics"></option>
                            <option value="Algorithms & Problem Solving"></option>
                            <option value="Object Oriented Programming"></option>
                            <option value="Information Technology & Knowledge Society"></option>
                        </datalist>
            </div>
            <div class="form-group">
                <label for="test">Test : </label>
                    <input list="test" class="form-control" type="test" name="test" required>
                        <datalist id="test">
                            <option value="Quiz 1"></option>
                            <option value="Mid-Semester Examination"></option>
                            <option value="Quiz 2"></option>
                            <option value="End-Semester Examination"></option>
                        </datalist>
            </div>
            <div class="form-group">
                <label for="marks_gained">Marks Gained :</label>
                <input class="form-control" type="text" name="marks_gained">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit" style="color: white"/>
        </form>
    </div>
    <!--BODY-->
        <footer>
            <center><p class="padding-footer" style="color: black;">Copyright &amp; Know Your Course | Indian Institute of Informaion Technology, Vadodara Contact: +91 90000 90000 </p></center>
        </footer>
   
</body>
</html>

<?php
   $con=mysqli_connect("localhost","root","");
   mysqli_select_db($con,"course_feedback");
  
  if(isset($_POST['submit'])){
    $studentid=mysqli_real_escape_string($con,$_POST["student_id"]);
    $studentname=mysqli_real_escape_string($con,$_POST["student_name"]);
    $coursename=mysqli_real_escape_string($con,$_POST["course_name"]);
    $test=mysqli_real_escape_string($con,$_POST["test"]);
    $marksgained=mysqli_real_escape_string($con,$_POST["marks_gained"]);
      
    $s="insert into update_record (StudentId,StudentName,CourseName,Test,Mark) values ('".$studentid."','".$studentname."','".$coursename."','".$test."','".$marksgained."')";
      
    $result=mysqli_query($con,$s);
    if(isset($result)){
      echo '<script language="javascript">';
      echo 'alert("Record update successfully")';
      echo '</script>';
      exit;
    }
  }
?>