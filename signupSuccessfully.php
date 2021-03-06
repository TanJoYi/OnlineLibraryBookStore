<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/opensans-web-font.css" />
        <link rel="stylesheet" href="assets/css/montserrat-web-font.css" />

		<!--For font-awesome css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <nav class="mainmenu navbar navbar-default navbar-fixed-top">
            <div class="container">
			
			<div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					
					<div class="brand-bg">
					<p><b><strong>Library</strong></b></p>
                    <a class="navbar-brand" href="index.html"><img src="assets/images/logo_1.png" alt="Freelancer Logo" /></a>
					</div>
                </div>

                <!-- Collect the nav links, forms, and othe r content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                        
                        <li><a href="./index.html">HomePage</a></li>
                        <li><a href="./more_books.php">Books</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="signin.php">login</a></li>
                        <li><a href="./signup.php">SignUp</a></li>

                        <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                        <li><a href="#"><i class="fa fa-dollar"></i></a></li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
				</div>
				
            </div><!-- /.container-fluid -->
        </nav>
        <?php
        session_start();
        ?>
        <!--Home page style-->
        <header class="home-bg">
		<div class="overlay-img">
			<div class="container">
				<div class="row">
						<div class="header-details">
                        <form action="signin.php" method="post">
                        <div class="col-md-6 col-sm-12 col-xs-12">
							<h1 class="text-center"><span>Sign Up Successfully!</span></h1>
							<h5 class="text-center"><span>Tee Time Library, your faithful reading companion.</span></h5>
                            <p class="lead text-center">
                            <?php 
                            $input1 = $_POST ['name'];
							$input2 = $_POST ['email'];
							$input3 = $_POST ['password'];
                            $input4 = $_POST ['gender'];
                            $input5 = 1;  
                            $input6 = 1;    
                            $conn = new mysqli ('localhost','tan jo yi', '12345', 'librarysystem') or die("unable to connect");
                            $sql="INSERT INTO user_information (name,email,password,gender,subcriptionPlan,role) VALUES ('$input1','$input2','$input3','$input4','$input5','$input6')";
                            $query=mysqli_query($conn,$sql);
                            $_SESSION["username"]='$name';
                            $_SESSION["password"]='$password'; 
                            echo "<p>Welcome, <b>$input1</b></p>";
                            ?>
							<br>
							<input type="submit"  value="Homepage" style="font-size:15pt;color:white;background-color:#E55451;border:2px solid #E55451;padding:6px"> </p>
						</div>
					</div>
				</div>
			</div>
		</div>	
        </header>

        
        <!--Footer-->
        <footer>
            <div class="container">
			<hr>
            	<div class="row">
				
            		<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="social-network">
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					
            		<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="copyright">
							<p>Made with <i class="fa fa-heart"></i> by <a target="_blank" href="http://facebook.com"> UM students </a>. All rights reserved.</p>
						</div>
					</div>

            	</div>
            </div>
        </footer>


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
