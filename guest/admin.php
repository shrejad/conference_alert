
	
<?php include"search.php";?>



<?php   

		
			$name=$_POST["name"];
			$lastname=$_POST["lastname"];
			$email=$_POST["email"];
			$password=$_POST["password"];
			$cnfpassword=$_POST["cnfpassword"];
			

?>
<!DOCTYPE html>	
<html lang="zxx">

<head profile="http://www.w3.org/2005/10/profile">
    <title> Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Replenish a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" >
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/zoomslider.css" rel='stylesheet' type='text/css' />
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="css/button.css" rel='stylesheet' type='text/css' />
	  <link href="css/textblinking.css" rel='stylesheet' type='text/css' />
	
	<link rel=�shortcut icon� href=�http://www.mysites.com/favicon.png� type=�image/png�>
<link rel=�icon� href=�http://www.mysites.com/favicon.png� type=�image/png�></head>
<script>// Make sure in jsFiddle you have selected option onLoad.
(function() {
  var cx = '017643444788069204610:4gvhea_mvga'; // Insert your own Custom Search Engine ID here
  var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
  gcse.src = (document.location.protocol == 'https' ? 'https:' : 'http:') +
      '//www.google.com/cse/cse.js?cx=' + cx;
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
})();</script>
<body>
    <!-- banner-inner -->
	
	                         
    <div id="demo-1" data-zs-src='["images/1.jpg", "images/2.jpg","images/3.jpg", "images/4.jpg"]' data-zs-overlay="dots">
        <div class="demo-inner-content">
            <div class="header-top">
                <header>
                    <div class="top-head ml-lg-auto text-center">
                        <div class="row">
 						 <span>
<?php
if($_SESSION["login_user"]) {
?>
Welcome <?php echo $_SESSION["login_user"]; ?> <p>Click here to </p><a href="logout.php" tite="Logout">Logout</a>
<?php
}else echo "<h1 >Please Sign To See More .</h1>";
?>
                                 </span>
                            <div class="col-md-3">
                              <a href='http://www.freevisitorcounters.com'></a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=15da2b18b06b794c1e59d3be7792b327fec9a1d8'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/426714/t/0"></script>
							   
							     </div>
                            <div class="col-md-3 sign-btn">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                    <i class="fas fa-lock"></i> Sign In</a>
                            </div>
                            <div class="col-md-3 sign-btn">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
                                    <i class="far fa-user"></i> Register</a>
                            </div>
                            <div class="search col-md-2">
                                <div class="mobile-nav-button">
                                    <button id="trigger-overlay" type="button" name="">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                                <!-- open/close -->
								
								
                                <div class="overlay overlay-door">
                                    <button type="button" class="overlay-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                              <form action="searchresult.php" method="post" class="d-flex" >
                                        <input class="form-control" type="search" name="valueToSearch"  value="Filter" placeholder="Search here..." required="">
                                        <button type="submit" class="btn btn-primary submit" name="search">
                                            <i class="fas fa-search"></i>
                                        </button>
													
										
										
                                    </form>
								
                                </div></div>
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
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fas fa-bars"></i>
                            </span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto text-center">
                                <li class="nav-item active">
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
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </header>
            </div>
            <!--/banner-info-w3layouts-->
            <div class="banner-info-w3layouts text-center">

                <h3>
                    <span>Connect With Us To Find The Conference Of Your Interested Topic</span> 
                    <span>Right Now.</span>
                </h3>
                <p>Your Conference search starts and ends with us.</p>

                <form action="#" method="post" class="ban-form row">
                    <div class="col-md-3 banf">
                        <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                    </div>
                    <div class="col-md-3 banf">
                        <select class="form-control" id="country12">
                            <option>Location</option>
                            <option>India</option>
                            <option>Alaska</option>
                            <option>Andong</option>
                            <option>Bologna</option>
                            <option>Canada</option>
                            <option>France</option>
                            <option>Germany</option>
                        </select>
                    </div>
                    <div class="col-md-3 banf">
                        <select id="country13" class="form-control">
                            <option>TOPIC</option>
                            <option>Banking Sector</option>
                            <option> Engineering Sector</option>
                            <option>Accounting Sector</option>
                            <option>Interior Design</option>
                          
                        </select>

                    </div>
                    <div class="col-md-3 banf">
                        <button class="btn1" type="submit">FIND
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!--//banner-info-w3layouts-->
        </div>
    </div>
    <!-- banner-text -->
    <!-- banner-bottom-wthree -->

  
  
  
    <!--/process-->
   
  
  
  
  
  
  
	
	
	
<button class="button button1">Green</button>
<button class="button button2">Blue</button>
<button class="button button3">Red</button>
<button class="button button4">Gray</button>
<button class="button button5">Black</button>

	
	
	
	
	
	
	<!--//job -->
	
  








    <!--job -->
    <section class="banner-bottom-wthree mid py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <div class="mid-info text-center pt-3">
                    <h3 class="tittle text-center cen mb-lg-5 mb-3">
                        <span></span>For Alerts Connect With Us</h3>
                    <p></p>
                    <div class="resume">
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
                            <i class="far fa-user"></i> Create Acccount</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//job -->
    <!--google-->
          <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>                      <!--
                            -->
    <!--//google -->
    <!--/candidates -->
    <!--/candidates -->
    <!--/stats-->
    <!--//stats-->

    <!--/mobile-app -->
    
    <!--clients-->
   
    <!--//clients-->
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
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
						
						<li>
							<a href="contact.html">Contact Us</a>
						</li>
					</ul>
					<ul class="links">
						<li>
							<a href="how.html">How it works</a>
						</li>
						<li>
							<a href="contact.html">Support</a>
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
						<form action="logindb.php" method="post">
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

								<input type="text" class="form-control" name="firstname" id="validationDefault01" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Last name</label>
								<input type="text" class="form-control" name="lastname" id="validationDefault02" placeholder="" required="">
							</div>
                         	<div class="form-group">
								<label>email</label>
								<input type="email" class="form-control" name="email" id="validationDefault02" placeholder="" required="">
							</div>

							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" name="password" id="password1" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" class="form-control" name="cnfpassword"  id="password2" placeholder="" required="">
							</div>

							<button type="submit" class="btn btn-primary submit mb-4" name="submit">Register</button>
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
    <script src="js/jquery.zoomslider.min.js"></script>
    <!--//slider-->
    <!--search jQuery-->
    <script src="js/classie-search.js"></script>
    <script src="js/demo1-search.js"></script>
    <!--//search jQuery-->

    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- password-script -->
    <script>
        window.onload = function() {
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

    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->

    <!-- //js -->
    <script src="js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
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



