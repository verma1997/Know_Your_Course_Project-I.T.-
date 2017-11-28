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
                padding-top: 600px;
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
        </style>
</head>
<body>    
    <!--header-->
    <div style="float: left;">
            <ul>
                <li><center><a href="courses.php" class="font1">COURSES</a></center></li>
                <li><center><a href="yourrecord.php" class="font1">YOUR RECORD</a></center></li>
                <li><center><a href="submit_assignments.php" class="font1">SUBMIT ASSIGNMENTS</a></center></li>
                <li><center><a href="http://iiitvadodara.ac.in/pdf/AC-IIITV.pdf" class="font1">ACADEMIC CALENDAR</a></center></li>
                <!--<li><center><a href="time_table" class="font1">TIME TABLE</a></center></li>-->
                <!--<li><center><a href="updates" class="font1">UPDATES</a></center></li>-->
                <li><center><a href="ask_questions.php" class="font1">ASK QUESTIONS</a></center></li>
                <li><center><a href="form_new.php" class="font1">FEEDBACK FORM</a></center></li>
                <li><center><a href="change_pass_student.php" class="font1">CHANGE PASSWORD</a></center></li>
                <li><center><a href="logout_student.php" class="font1">SIGNOUT</a></center></li>
                <li><center><a href="index_new.php" class="font1">HOME</a></center></li>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <center><h4 class="font1" style="color: white;">IIITV</h4></center>
            </ul>
        </div>
    <!--header ends-->
    <!--body-->
    <div style="float: right; padding-top: 20px;" class="content">
        <div style="padding: 70px; border: 1px solid #999">
            <h2>Upload PDF File :</h2>
            <form enctype="multipart/form-data"
                action="<?php print $_SERVER['PHP_SELF']?>" method="post">
            <p><input type="hidden" name="MAX_FILE_SIZE" value="200000" />
                <input type="file" name="file" accept="application/pdf" /><br />
            <br />
                <input type="submit" name="submit" value="Save"/></p>
            </form>
        </div>
    </div>    
    <!--body ends-->    
    <!--footer-->    
        <footer>
            <center>
                <p class="padding-footer" style="color: black;">Copyright &amp; Know Your Course | Indian Institute of Information Technology, Vadodara Contact: +91 9000090000 </p>
            </center>
        </footer>
    <!--footer ends-->
</body>
</html>

<?php   
	if($_POST['submit']=="Save")
		{
			$file=$_FILES['file']['name'];
			print_r($file); 
			echo "<br>";	
			move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$file);
			
			$con=mysqli_connect("localhost","root","");
            mysqli_select_db($con,"course_feedback");
			
			$s="insert into upload(file) value('".$file."')";
			if( mysqli_query($con,$s))
				echo "record saved";
			else
				echo mysqli_error($con);
		}
?>
			
			
	
