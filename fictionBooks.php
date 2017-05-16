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
    <?php session_start() ?>
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
                        <li><a href="more_books.php">Books</a></li>
                        <li><a href="#contact">Contact</a></li>
                         <?php
						  $email=$_SESSION["email"];
						  $conn = mysqli_connect('localhost','tan jo yi', '12345', 'librarysystem') or die("unable to connect");	
						  $sql="SELECT * FROM user_information WHERE role=2";
						  $results=mysqli_query($conn,$sql); 
						  while ($row = mysqli_fetch_row ($results))
							{
							 if($row[2]==$email){
							 ?> 
							 <li><a href="./addBook.php">addBook</a></li>
							<?php }
						}
							mysqli_free_result ($results);
							mysqli_close ($conn);
							?>

                        <li><a href="./index.html">LogOut</a></li>

                        <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                        <li><a href="#"><i class="fa fa-dollar"></i></a></li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
				</div>
				
            </div><!-- /.container-fluid -->
        </nav>

        <!--Home page style-->
        <header class="home-bg">
		<div class="overlay-img">
			<div class="container">
				<div class="row">
						<div class="header-details">
							<div class="text-center">
							<h2><b>List of Fictional Books</b></h2>
							<h5>Click <i>BORROW ME</i> to borrow</h5>

							<!--start php -->
							
								<form action="./borrowBook.php" method="post">
								<?php
							     $conn = mysqli_connect('localhost','tan jo yi', '12345', 'librarysystem') or die("unable to connect");			
								 $sql='SELECT * FROM book WHERE category=1 ';
								 $results=mysqli_query($conn,$sql); 
										echo '<table width=100% cellpading=100 cellspacing=2 border=2>';
										echo'<tr><td><b>BookID</b></td><td><b>Title</b></td><td><b>Author</b></td><td><b>Year Of Publishing</b></td><td><b>Description</b></td><td><b>Borrow</b></td></tr>';
										
										while ($row = mysqli_fetch_row ($results))
										{
										echo '<tr>';
										echo '<td>' . $row[0] . '</td>';
										echo '<td>' . $row[1] . '</td>';
										echo '<td>' . $row[2] . '</td>';
										echo '<td>' . $row[3] . '</td>';
										echo '<td>' . $row[4] . '</td>';
										
                                        echo '<input type="hidden" name="bookID" value='.$row[0].'>';

							            echo '<td><button class="btn btn-default" style="font-size:15pt solid;color:#2F4F4F;background-color:transparent;"><b>BORROW ME</b></button></a></td>';
										echo '</tr>';
										}
										echo '</table>';
									mysqli_free_result ($results);
									
									mysqli_close ($conn);
								?>  
								</form>
<!--end PHP-->			 </div>
						</div>
					</div>
				</div>
			</div>
		</div>	
        </header>

        <!-- Sections -->
        <section id="promotion-area" class="sections">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="promotion">
						
						<h1>Fiction Books<i class="fa fa-circle"></i></h1>
						<p>Literature created from <i>imagination</i>, <i>Mysteries</i>, <i>science fiction</i>, <i>romance</i>, <i>fantasy</i>, <i>chick lit</i>, <i>crime thrillers</i>.</p>
						<a href="#contact"><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a>
						
						</div>
					</div>
					
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="promotion">
						
						<h1>Non-Fiction Books<i class="fa fa-circle"></i></h1>
						<p>Literature based in fact.</p>
						<a href="nonFictionBooks.php"><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a>
						
						</div>
					</div>
					
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="promotion">
						
						<h1>Research Paper<i class="fa fa-circle"></i></h1>
						<p>With ONLY $9.99 every month, you can access to all our professional research papers and free sharing with a third party.</p>

						<?php
						$email=$_SESSION["email"];
						  $conn = mysqli_connect('localhost','tan jo yi', '12345', 'librarysystem') or die("unable to connect");	
						  $sql="SELECT * FROM user_information WHERE subcriptionPlan=2" ;
						  $results=mysqli_query($conn,$sql); 
				   		 while ($row = mysqli_fetch_row ($results))
							{
							 if($row[2]==$email){
							 echo '<a href=signin.php><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a>'; 
					         }
							}
							mysqli_free_result ($results);
							mysqli_close ($conn);
							?>
						
						</div>
					</div>

                </div>
            </div> <!-- /container -->       
        </section>
		
			
        	<p></p>
        	<p></p>
        	<p></p>
			
				<div class="container">
					<h1 class="title text-center" id="contact">Contact Us</h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="footer-content">
								<p class="large">Co-founded by Undergraduate students of Faculty of Computer Science and Information Technology in University of Malaya.</p>
								<ul class="list-icons">
									<li><i class="fa fa-map-marker pr-10"></i> University of Malaya, Petaling Jaya, 54100</li>
									<li><i class="fa fa-phone pr-10"></i> +03 6843217</li>
									<li><i class="fa fa-fax pr-10"></i> +03 5426843 </li>
									<li><i class="fa fa-envelope-o pr-10"></i> TeeTime@gmail.com</li>
								</ul>
								
							</div>
						</div>
						<div class="col-sm-6">
							<div class="footer-content">
								<form action="message.php" method="post">
								    <div class="form-group has-feedback">
										<label class="sr-only" for="name2">Name</label>
										<input type="text" class="form-control" id="name2" placeholder="Name" name="name2" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="email2">Email address</label>
										<input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2" required>
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="message2">Message</label>
										<textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<input type="submit" value="Send" class="btn btn-default">
								</form>
							</div>
						</div>
					</div>
				</div>

		
		<div class="scroll-top">
		
			<div class="scrollup">
				<i class="fa fa-angle-double-up"></i>
			</div>
			
		</div>
		
			</div>
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
