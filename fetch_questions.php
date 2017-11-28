<?php
session_start();
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"course_feedback");
$t = $_SESSION['username'];
$sql = "SELECT id,name,question,unique_id FROM ask_questions WHERE t_username='$t' AND action='unmarked'";
$question = mysqli_query($con,$sql);       
?>

<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fetch Questions</title>
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
                padding-top: 700px;
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
                padding-right: 200px;
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
            table{
                border-collapse: collapse;
                width: 80%;
            }
            th,td{
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            tr:hover{
                background-color: #f5f5f5;
            }
        </style>
</head>
<body>
    <!--Header-->

    <div style="float: left;">
            <ul>
                <li><center><a href="update_record.php" class="font1">UPDATE RECORD</a></center></li>
                <li><center><a href="#" class="font1">STUDENT ASSIGNMENTS</a></center></li>
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
    <!--Header End-->
    <div class="container">
          <div>
          <h1 class="font1">Questions :</h1>
               <div>
                   <table>
                       <tr>
                           <th>Student ID</th>
                           <th>Student Name</th>
                           <th>Question</th>
                       </tr>
                    <?php
                        while($row = mysqli_fetch_assoc($question)) {   
                          echo "<tr>";
                          echo "<td>" . $row['id'] . "</td>";
                          echo "<td>" . $row['name'] . "</td>";
                          echo "<td>" . $row['question'] . "</td>";
                          echo "<td>" . "<a href='answer.php'>Answer</a>" . "</td>";
                          echo "<td>" . "<a href='delete.php'>Delete</a>" . "</td>";
                          echo "</tr>";
                        }
                       mysqli_close($con);
                    ?>
               </div>
      </div>
    </div>
</body>
</html>

