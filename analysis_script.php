<?php
session_start();
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"course_feedback");
$t = $_SESSION['username'];
$sql_query = "SELECT Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9 FROM feedback_record WHERE t_username = '$t'";
?>


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
        <link rel="stylesheet" type="text/css" href='css/analsis.php'>
        <style type="text/css" href="analysis.css">
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
                padding-top: 900px;
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
                padding-right: 600px;
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

            th,td{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            }
            
            tr:hover{background-color:#f5f5f5}
            
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
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <center><h4 class="font1" style="color: white;">IIITV</h4></center>
            </ul>
        </div>    
    <!--BODY-->
    <div class="content" style="float: right;">
        <h2 class="font1">FEEDBACK ANALYSIS</h2>
        
        <?php
        $total = ""; $total_quantity = ""; $sum = ""; $total = ""; $percent = "";
        /*$total_eco = ""; $total_quantity_eco = ""; $sum_eco = ""; $total_eco = ""; $percent_eco = "";
        $total_algo = ""; $total_quantity_algo = ""; $sum_algo = ""; $total_algo = ""; $percent_algo = "";
        $total_oop = ""; $total_quantity_oop = ""; $sum_oop = ""; $total_oop = ""; $percent_oop = "";
        $total_it = ""; $total_quantity_it = ""; $sum_it = ""; $total_it = ""; $percent_it = "";

        $sql_query2 = "SELECT Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9 FROM feedback_record WHERE coursename='Economics'";
        $sql_query1 = "SELECT Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9 FROM feedback_record WHERE coursename='Probability & Statistics'";
        $sql_query3 = "SELECT Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9 FROM feedback_record WHERE coursename='Algorithm & Problem Solving'";
        $sql_query5 = "SELECT Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9 FROM feedback_record WHERE coursename='Information Technology & Knowledge Society'";
        $sql_query4 = "SELECT Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9 FROM feedback_record WHERE coursename='Object Oriented Programming'";
        */
        if($result=mysqli_query($con,$sql_query))
        {
          // Fetch one and one row
          while ($row=mysqli_fetch_row($result))
            {
                  $total = $row[0] + $row[1] + $row[2] + $row[3] + $row[4] + $row[5] + $row[6] + $row[7] + $row[8];
                  $total_quantity = $total_quantity + 1;
                  $sum = $sum + $total;
            }
            mysqli_free_result($result);
        }
        /*echo "<strong>" . "Probability & Statistics" . "</strong>"; echo "<br>";echo "<br>";*/
        /*echo "Total : " . $sum; echo "<br>"; 
        echo "Total Number Of Responses : " . $total_quantity; echo "<br>";*/
        $percent = ($sum/($total_quantity*45));
        $int_percent = (int)($percent*100);
 
        /*echo $int_percent; echo "%"; echo "<br>";echo "<br>";echo "<br>";
        */
        echo "<table>";
            echo "<tr>";
                echo "<th>". "Total (All The Responses)". "</th>";
                echo "<th>" . "Students Given Feedback" . "</th>";
                echo "<th>" . "Percentage" . "</th>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>". $sum . "</th>";
                echo "<th>" . $total_quantity . "</th>";
                echo "<th>" . $int_percent . "%". "</th>";
            echo "</tr>";
        echo "</table>";
        /*
        if($result1=mysqli_query($con,$sql_query1))
        {
          // Fetch one and one row
          while ($row=mysqli_fetch_row($result1))
            {
                  $total_prob = $row[0] + $row[1] + $row[2] + $row[3] + $row[4] + $row[5] + $row[6] + $row[7] + $row[8];
                  $total_quantity_prob = $total_quantity_prob + 1;
                  $sum_prob = $sum_prob + $total_prob;
            }
            mysqli_free_result($result1);
        }
        echo "<strong>" . "Probability & Statistics" . "</strong>"; echo "<br>";echo "<br>";
        echo "Total : " . $sum_prob; echo "<br>"; 
        echo "Total Number Of Responses : " . $total_quantity_prob; echo "<br>";
        $percent_prob = ($sum_prob/($total_quantity_prob*45));
        $int_prob = (int)($percent_prob*100); 
        echo $int_prob; echo "%"; echo "<br>";echo "<br>";echo "<br>";
        
        if($result2=mysqli_query($con,$sql_query2))
        {
          // Fetch one and one row
          while ($row=mysqli_fetch_row($result2))
            {
                  $total_eco = $row[0] + $row[1] + $row[2] + $row[3] + $row[4] + $row[5] + $row[6] + $row[7] + $row[8];
                  $total_quantity_eco = $total_quantity_eco + 1;
                  $sum_eco = $sum_eco + $total_eco;
            }
            mysqli_free_result($result2);
        }
        echo "<strong>" . "Economics" . "</strong>"; echo "<br>";echo "<br>";
        echo "Total : " . $sum_eco; echo "<br>"; 
        echo "Total Number Of Responses : " . $total_quantity_eco; echo "<br>";
        $percent_eco = ($sum_eco/($total_quantity_eco*45));
        $int_eco = (int)($percent_eco*100); 
        echo $int_eco; echo "%"; echo "<br>";echo "<br>";


        if($result3=mysqli_query($con,$sql_query3))
        {
          // Fetch one and one row
          while ($row=mysqli_fetch_row($result3))
            {
                  $total_algo = $row[0] + $row[1] + $row[2] + $row[3] + $row[4] + $row[5] + $row[6] + $row[7] + $row[8];
                  $total_quantity_algo = $total_quantity_algo + 1;
                  $sum_algo = $sum_algo + $total_algo;
            }
            mysqli_free_result($result3);
        }
        echo "<strong>" . "Algorithm & Problem Solving" . "</strong>"; echo "<br>";echo "<br>";
        echo "Total : " . $sum_algo; echo "<br>"; 
        echo "Total Number Of Responses : " . $total_quantity_algo; echo "<br>";
        $percent_algo = ($sum_algo/($total_quantity_algo*45));
        echo ($percent_algo*100); echo "%"; echo "<br>";echo "<br>";


        if($result4=mysqli_query($con,$sql_query4))
        {
          // Fetch one and one row
          while ($row=mysqli_fetch_row($result4))
            {
                  $total_oop = $row[0] + $row[1] + $row[2] + $row[3] + $row[4] + $row[5] + $row[6] + $row[7] + $row[8];
                  $total_quantity_oop = $total_quantity_oop + 1;
                  $sum_oop = $sum_oop + $total_oop;
            }
            mysqli_free_result($result4);
        }
        echo "<strong>" . "Object Oriented Programming" . "</strong>"; echo "<br>";echo "<br>";
        echo "Total : " . $sum_oop; echo "<br>"; 
        echo "Total Number Of Responses : " . $total_quantity_oop; echo "<br>";
        $percent_oop = ($sum_oop/($total_quantity_oop*45));
        echo ($percent_oop*100); echo "%"; echo "<br>";echo "<br>";


        if($result5=mysqli_query($con,$sql_query5))
        {
          // Fetch one and one row
          while ($row=mysqli_fetch_row($result5))
            {
                  $total_it = $row[0] + $row[1] + $row[2] + $row[3] + $row[4] + $row[5] + $row[6] + $row[7] + $row[8];
                  $total_quantity_it = $total_quantity_it + 1;
                  $sum_it = $sum_it + $total_it;
            }
            mysqli_free_result($result5);
        }
        echo "<strong>" . "Information Technology & Knowledge Society" . "</strong>"; echo "<br>";echo "<br>";
        echo "Total : " . $sum_it; echo "<br>"; 
        echo "Total Number Of Responses : " . $total_quantity_it; echo "<br>";
        $percent_it = ($sum_it/($total_quantity_it*45));
        echo ($percent_it*100); echo "%"; echo "<br>";echo "<br>";

        echo "<table>";
        echo "<tr>";
        echo "<th></th>";
        echo "<th>Probability & Statistics</th>";
        echo "<th>Economics</th>";
        echo "<th>Algorithm & Problem Solving</th>";
        echo "<th>Object Oriented Programming</th>";
        echo "<th>Information Technology & Knowledge Society</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<th>Total</th>";
        echo "<th>" . $sum_prob . "</th>";
        echo "<th>" . $sum_eco . "</th>";
        echo "<th>" . $sum_algo . "</th>";
        echo "<th>" . $sum_oop . "</th>";
        echo "<th>" . $sum_it . "</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<th>Total Responses</th>";
        echo "<th>" . $total_quantity_prob . "</th>";
        echo "<th>" . $total_quantity_eco . "</th>";
        echo "<th>" . $total_quantity_algo . "</th>";
        echo "<th>" . $total_quantity_oop . "</th>";
        echo "<th>" . $total_quantity_it . "</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<th>Percentage ( % )</th>";
        echo "<th>" . ($percent_prob*100) . "</th>";
        echo "<th>" . ($percent_eco*100) . "</th>";
        echo "<th>" . ($percent_algo*100) . "</th>";
        echo "<th>" . ($percent_oop*100) . "</th>";
        echo "<th>" . ($percent_it*100) . "</th>";
        echo "</tr>";

        echo "</table>";
        */
        mysqli_close($con);
        ?>
        <!--SCRIPT ENDS-->
        <h3 class="font1">RATING CHART</h3>
        <b>BETWEEN 0 TO 20% : </b><h4 style="color: red">Very Poor</h4>
        <b>BETWEEN 21% TO 45% : </b><h4 style="color: red">Poor</h4>
        <b>BETWEEN 46% TO 60% : </b><h4 style="color: red">Average</h4>
        <b>BETWEEN 61% TO 85% : </b><h4 style="color: red">Good</h4>
        <b>BETWEEN 86% TO 100% : </b><h4 style="color: red">Excellent</h4>
    </div>    
    <!--BODY-->
        <footer>
            <center>
                <p class="padding-footer" style="color: black;">Copyright &amp; Know Your Course | Indian Institute of Information Technology, Vadodara Contact: +91 9000090000 </p>
            </center>
        </footer>
   
</body>
</html>
