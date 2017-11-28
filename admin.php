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
                padding-top: 250px;
            }
        </style>
</head>
<body>
    <div class="bg">
        <!--HEADER-->
        <div class="container">
            <a href="index_new.php" style="color: white;font-family: 'Raleway', sans-serif; float: right;" class="logo"><h3>Home</h3></a>
            <!--<a href="contact.php" style="float: right; color: white;" class="space_links"><h3>Contact</h3></a>
            <a href="team.php" style="float: right; color: white;" class="space_links"><h3>Team&nbsp;&nbsp;&nbsp;</h3></a>
            <a href="home.php" style="float: right; color: white;" class="space_links"><h3>Home&nbsp;&nbsp;&nbsp;</h3></a>-->
        </div>
        <!--HEADER END-->
        <div id="content">
            <div class="container">
                <center>
                    <div class="padding-content">
                        <a href="register_student.php" style="color: white;" class="logo"><h1 class="font2">- - Register For Student</h1></a><br>
                        <a href="register_teacher.php" style="color: white;" class="logo"><h1 class="font2">- - Register For Teacher</h1></a>
                        <br><br><br><br><br>
                    </div>
                </center>
            </div>
        </div>
        
        <footer>
            <center><p class="padding-footer" style="color: white;">Copyright &amp; Know Your Course | Indian Institute of Information Technology, Vadodara Contact: +91 90000 90000</p></center>
        </footer>
    </div>
</body>
</html>