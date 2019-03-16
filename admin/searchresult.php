 
								<?php include"search.php";?>
 
 
 <!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title> Search Result </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Replenish a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/searchtable.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>
<?php session_start();?>
 
<body>
	<!-- banner-inner -->
	<div id="demo-1" class="page-content">
		<div class="dotts">
			<div class="header-top">
				<header>
					<div class="top-head ml-lg-auto text-center">
						<div class="row top-vl">

						
                                <span> 						
<?php
if($_SESSION["login_user"]) {
?>
Welcome <?php echo $_SESSION["login_user"]; ?> <p>Click here to <a href="logout.php" tite="Logout" style="color:#FFFFFF">Logout</a></p>
<?php
}else echo "<span>Please Sign To See More </span>";
?></span>
                            		
							
								<!-- open/close -->
								<div class="overlay overlay-door">
									
									
										</div> 
								</div>
								<!-- open/close -->
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<nav class="navbar navbar-expand-lg navbar-light">
						<div class="logo">
							<h1>
								<a class="navbar-brand" href="index.html">
									<i class="fab fa-codepen"></i> Conference Alert</a>
							</h1>
						</div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						    aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon">
									<i class="fas fa-bars"></i>
								</span>
			
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-lg-auto text-center">
								<li class="nav-item">
									<a class="nav-link" href="guest.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								
								
								<li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
								<li class="nav-item">
									<a class="nav-link" href="how.php">How it works</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
									    aria-expanded="false">
									 Conferences By Topic
										<i class="fas fa-angle-down"></i>
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										
										 <a class="dropdown-item" href="candidates_list.html" title="">Social Science And Humanities</a>
                                        <a class="dropdown-item" href="candidates_list.html" title="">Programming</a>
                                        <a class="dropdown-item" href="candidates_list.html" title="">Political</a>
                                        <a class="dropdown-item" href="candidates_single.html" title="">Engineering</a>


									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="pricing.php">Pricing</a>
								</li>
								<li class="nav-item active">
									<a class="nav-link" href="contact.php">Contact</a>
								</li>
							</ul>

						</div>
					</nav>
				</header>
			</div>
			<!--/banner-info-w3layouts-->
			<div class="banner-info-w3layouts text-center">
			</div>
			<!--//banner-info-w3layouts-->
		</div>
	</div>
	<ol class="breadcrumb justify-content-left">
		<li class="breadcrumb-item">
			<a href="guest.html">Home</a>
		</li>
		<li class="breadcrumb-item active">Search Results</li>
	</ol>
	<!-- banner-text -->
	<!-- contact -->
	<section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
		<div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
		<!---728x90--->
			<h3 class="tittle text-center mb-lg-5 mb-3">
<span></span>Your Matched Search Result</h3>


<center>		
				 <table id="customers">
                <tr  style="font-size:30px">
                    <th>Id</th>
                    <th>ConferenceName</th>
                    <th>ConferenceType</th>
					 <th>ConferenceLocation</th>
                    <th>date</th>
                </tr>

      <!-- populate table from mysql database -->
           
		    
		        <?php 
		
				
			while($row = mysqli_fetch_array($search_result)):?>
                <tr style="font-size:30px">
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['ConName'];?></td>
                    <td><?php echo $row['ConType'];?></td>
                    <td><?php echo $row['ConLocation'];?></td>
					<td><?php echo $row['DTO'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
			
			
			
			
	</center>			
				
				<!---728x90---></div></section>
	<!-- //contact -->
	<!---728x90--->
	<br /></br>
	<!--footer -->
	<footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top">
				<div class="col-lg-3 footer-grid-wthree-w3ls">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>We Are Here To alert you For any Conference Related To your Interested Topic</p>
						<ul class="footer-social text-left mt-lg-4 mt-3">

							<li class="mx-2">
								<a href="#">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-google-plus-g"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-linkedin-in"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fas fa-rss"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-vk"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-wthree-w3ls">
					<div class="footer-title">
						<h3>Get in touch</h3>
					</div>
					<div class="contact-info">
						<h4>Location :</h4>
						<p>Sector No.29 DYPMCA</p>
						<div class="phone">
							<h4>Contact :</h4>
							<p>Phone : +919993242969, 9607048646</p>
							<p>Email :ShreyashJadhav14@gmail.com <br> nidhishritrivedi@gmail.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-wthree-w3ls">
					<div class="footer-title">
						<h3>Quick Links</h3>
					</div>
					<ul class="links">
						<li>
							<a href="guest.php">Home</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						
						<li>
							<a href="contact.php">Contact Us</a>
						</li>
					</ul>
					<ul class="links">
						<li>
							<a href="how.php">How it works</a>
						</li>
						<li>
							<a href="contact.php">Support</a>
						</li>
						
					</ul>

					<div class="clearfix"></div>
				</div>
				<div class="col-lg-3 footer-grid-wthree-w3ls">
					<div class="footer-title">
						<h3>Sign up for your offers</h3>
					</div>
					<div class="footer-text">
						<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
						<form action="#" method="post">
							<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
							<button class="btn2">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			</div>
			<div class="copyright mt-4">
				<p class="copy-right text-center ">&copy; 2018 Conference Alert. All Rights Reserved | Design by
					<a href="http://w3layouts.com/"> SHREYASH JADHAV  <br>&nbsp;&nbsp;&nbsp;&nbsp NIDHISHREE TRIVEDI </a>
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!--model-forms-->
	<!--/Login-->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="login px-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Login Now</h5>
						<form action="guest.php" method="post">
						<div class=""></div>
							<div class="form-group">
								<label class="mb-2">Email address</label>
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
							</div>
							<button type="submit" name="loginbtn" class="btn btn-primary submit mb-4">Sign In</button>
							<p class="text-center pb-4">
								<a href="#" data-toggle="modal2" data-target="#exampleModalCenter"> Don't have an account?</a>
							</p>
						</form>
					
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--//Login-->
	<!--/Register-->
	<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Register Now</h5>
						<form action="#" method="post">
							<div class="form-group">
								<label>First name</label>

								<input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Last name</label>
								<input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
							</div>

							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" id="password1" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" class="form-control" id="password2" placeholder="" required="">
							</div>

							<button type="submit" class="btn btn-primary submit mb-4">Register</button>
							<p class="text-center pb-4">
								<a href="#">By clicking Register, I agree to your terms</a>
							</p>
						</form>

					</div>
				</div>

			</div>
		</div>
	</div>
	<!--//Register-->

	<!--//model-form-->
	<!-- js -->
	<!--/slider-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!--//slider-->
	<!--search jQuery-->
	<script src="js/classie-search.js"></script>
	<script src="js/demo1-search.js"></script>
	<!--//search jQuery-->

	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<!-- //js -->
	<script src="js/bootstrap.js"></script>
	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<script>
		$(document).ready(function () {
			/*
									var defaults = {
										  containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									 };
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!--// end-smoth-scrolling -->
</body>

</html>