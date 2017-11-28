<!DOCTYPE html>
<html>
<head>
	<title>Feedback Form | Know_Your _Course</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
        	.top_margin{
        		margin-top: 20px;
        	}
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
                padding-top: 100px;
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
                padding-right: 440px;
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
	<!-- Header -->
        <div style="float: left;">
            <ul>
                <li><center><a href="courses.php" class="font1">COURSES</a></center></li>
                <li><center><a href="yourrecord.php" class="font1">YOUR RECORD</a></center></li>
                <li><center><a href="submit_assignments.php" class="font1">SUBMIT ASSIGNMENTS</a></center></li>
                <li><center><a href="http://iiitvadodara.ac.in/pdf/AC-IIITV.pdf" class="font1">ACADEMIC CALENDAR</a></center></li>
                <li><center><a href="ask_questions.php" class="font1">ASK QUESTIONS</a></center></li>
                <li><center><a href="form_new.php" class="font1">FEEDBACK FORM</a></center></li>
                <li><center><a href="change_pass_student.php" class="font1">CHANGE PASSWORD</a></center></li>
                <li><center><a href="logout_student.php" class="font1">SIGNOUT</a></center></li>
                <li><center><a href="index_new.php" class="font1">HOME</a></center></li>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <center><h4 class="font1" style="color: white;">IIITV</h4></center>
            </ul>
        </div>
    <!--Header end-->
    <div style="float: right;" class="content">
        <!--<div class="container">
		<div class="row top_margin">
			<div class="col-xs-6">
				<div class="panel panel-primary">
					<div class="panel-heading"><h3>Student Feedback Form</h3></div>
					<div class="panel-body">-->
                        <h1 class="font1">FEEDBACK FORM</h1>
						<form method="post" action="user_feedback_script.php">
							<div class="form-group">
								<label for="id">ID : </label>
								<input type="id" class="form-control" id="id" name="id" required>	
							</div>
							<div class="form-group">
								<label for="first_name">First Name : </label>
								<input type="first_name" class="form-control" id="first_name" name="first_name" required>
							</div>
							<div class="form-group">
								<label for="last_name">Last Name : </label>
								<input type="last_name" class="form-control" id="last_name" name="last_name" required>	
							</div>
							<div class="form-group">
								<label for="branch_name">Branch :</label>
								<input list="branch_names" class="form-control" type="branch_names" name="branch_names" required>
									<datalist id="branch_names">
										<option value="Computer Science"></option>
										<option value="Information Technology"></option>
									</datalist>	
							</div>
							<div class="form-group">
								<label for="course_name">Course Name :</label>
								<input list="course_names" class="form-control" type="course_names" name="course_names" required>
									<datalist id="course_names">
										<option value="Probability & Statistics"></option>
										<option value="Economics"></option>
										<option value="Object Oriented Programming"></option>
										<option value="Algorithm & Problem Solving"></option>
										<option value="Information Technology & Knowledge Society"></option>
									</datalist>	
							</div>
							<!--<div class="form-group">
								<label for="course_code">Course Code</label>
								<input type="course_code" class="form-control" id="course_code" name="course_code">
							</div>-->
							Consider the following statements and fill the appropriate circle :<br><br>
							<h3>A. COURSE CONTENT</h3>
							(a) The teacher covers the entire syllabus.
							<br>
							<input type="radio" name="grade1" value="1"> 1<br> 
							<input type="radio" name="grade1" value="2"> 2<br>
							<input type="radio" name="grade1" value="3"> 3<br>
							<input type="radio" name="grade1" value="4"> 4<br>
							<input type="radio" name="grade1" value="5"> 5<br>
							(b) The teacher discusses topics in detail
							<br>
							<input type="radio" name="grade2" value="1"> 1<br> 
							<input type="radio" name="grade2" value="2"> 2<br>
							<input type="radio" name="grade2" value="3"> 3<br>
							<input type="radio" name="grade2" value="4"> 4<br>
							<input type="radio" name="grade2" value="5"> 5<br>
							(c) The teacher possesses dep knowledge of the subject taught
							<br>
							<input type="radio" name="grade3" value="1"> 1<br> 
							<input type="radio" name="grade3" value="2"> 2<br>
							<input type="radio" name="grade3" value="3"> 3<br>
							<input type="radio" name="grade3" value="4"> 4<br>
							<input type="radio" name="grade3" value="5"> 5<br>
							(d) The teacher communicates clearly
							<br>
							<input type="radio" name="grade4" value="1"> 1<br> 
							<input type="radio" name="grade4" value="2"> 2<br>
							<input type="radio" name="grade4" value="3"> 3<br>
							<input type="radio" name="grade4" value="4"> 4<br>
							<input type="radio" name="grade4" value="5"> 5<br>
							(e) The teacher inspires me by his/her knowledge in the subject
							<br>
							<input type="radio" name="grade5" value="1"> 1<br> 
							<input type="radio" name="grade5" value="2"> 2<br>
							<input type="radio" name="grade5" value="3"> 3<br>
							<input type="radio" name="grade5" value="4"> 4<br>
							<input type="radio" name="grade5" value="5"> 5<br>
							<br><br><br>
							<h3>B. TEACHING- LEARNING PROCESS</h3>
							(f) The teacher is punctual to the class
							<br>
							<input type="radio" name="grade6" value="1"> 1<br> 
							<input type="radio" name="grade6" value="2"> 2<br>
							<input type="radio" name="grade6" value="3"> 3<br>
							<input type="radio" name="grade6" value="4"> 4<br>
							<input type="radio" name="grade6" value="5"> 5<br>
							(g) The teacher engages the class for the full duration and completes the course in time
							<br>
							<input type="radio" name="grade7" value="1"> 1<br> 
							<input type="radio" name="grade7" value="2"> 2<br>
							<input type="radio" name="grade7" value="3"> 3<br>
							<input type="radio" name="grade7" value="4"> 4<br>
							<input type="radio" name="grade7" value="5"> 5<br>
							(h) the teacher comes fully prepared for the class
							<br>
							<input type="radio" name="grade8" value="1"> 1<br> 
							<input type="radio" name="grade8" value="2"> 2<br>
							<input type="radio" name="grade8" value="3"> 3<br>
							<input type="radio" name="grade8" value="4"> 4<br>
							<input type="radio" name="grade8" value="5"> 5<br>
							(i) The teacher provides guidance counselling in academic and non-academic matters in/out side the class
							<br>
							<input type="radio" name="grade9" value="1"> 1<br> 
							<input type="radio" name="grade9" value="2"> 2<br>
							<input type="radio" name="grade9" value="3"> 3<br>
							<input type="radio" name="grade9" value="4"> 4<br>
							<input type="radio" name="grade9" value="5"> 5<br>
							<center>
								<button type="submit" class="btn btn-primary" value="feedback_submit">SUBMIT</button>
							</center>	
						</form>
					</div>
				<!--</div>
			</div>
		</div>
	</div>
    </div>-->
    
    <!--Footer-->
        <footer>
                <center>
                    <p class="padding-footer">Copyright &copy; Know Your Course | Indian Institute of Information Technology, Vadodara. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
                </center>
        </footer>
        <!--Footer end-->
</body>
</html>