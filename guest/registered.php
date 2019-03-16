<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
		License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php include"truesession.php";?>
<?php include"settings.php";?>
<?php 
if (isset($_POST['submitform']))
    {   
    ?>
<script type="text/javascript">
window.location = "registered.php";
</script>      
    <?php
    }?>


<?php
include"logindb.php";

include"a.php";
?>
	
<?php include"search.php";?>

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
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/zoomslider.css" rel='stylesheet' type='text/css' />
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	
	 <link href="css/table2.css" rel='stylesheet' type='text/css' />
	<link rel=”shortcut icon” href=”http://www.mysites.com/favicon.png” type=”image/png”>
<link rel=”icon” href=”http://www.mysites.com/favicon.png” type=”image/png”></head>

<body>
    <!-- banner-inner -->
    <div id="demo-1" data-zs-src='["images/1.jpg", "images/2.jpg","images/3.jpg", "images/4.jpg"]' data-zs-overlay="dots">
        <div class="demo-inner-content">
            <div class="header-top">
                <header>
                    <div class="top-head ml-lg-auto text-center">
                        <div class="row">

                            <div class="col-md-4">
                                <span> 						
<?php
if($_SESSION["login_user"]) {
?>
Welcome <?php echo $_SESSION["login_user"]; ?> <p>Click here to <a href="logout.php" tite="Logout" style="color:#FFFFFF">Logout</a></p>
<?php
}else echo "<span>Please Sign To See More </span>";
?></span>
                            </div>
                            <div class="col-md-3">
                               
                            </div>
                           
                            <div class="col-md-3 sign-btn">
                                <a href="#"  data-target="#exampleModalCenter2">
                                    <i class="far fa-user"></i> </a>
                            </div>
                            <div class="search col-md-2">
                                <div class="mobile-nav-button">
                                    <button id="trigger-overlay" type="button">
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
                                </div>
                                <!-- open/close -->
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo">
                            <h1>
                                <a class="navbar-brand" href="guest.php">
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
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Trending Topics</span>Upcomming Conference</h3>
                <div class="row populor_category_grids mt-5">
                    <div class="col-md-3 category_grid">
                        <div class="view view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-bullhorn"></i>
                                <h3> Multimedia</h3>
                                 </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category_grid">
                        <div class="view view1 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-graduation-cap"></i>
                                <h3>Engineering</h3>
                 </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p2.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 category_grid">
                        <div class="view view2 view-tenth">
                            <div class="category_text_box">
                                <i class="fab fa-accusoft"></i>
                                <h3>Acounting & finance</h3>
                               
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p3.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category_grid">
                        <div class="view view3 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-users"></i>
                                <h3> Human Psychology</h3>
                               
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p4.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner-bottom-wthree -->
  
  
  
  
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span></span>  </h3>
                <div class="row mt-5">

                    <div class="card-deck">
                        <div class="card">
                            <img src="images/bankok.jpg" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size:10px">Upcomming:International Conference on Research In Teaching,Education And Learning</h5>
                               
                            </div>
                          
                        </div>
                        <div class="card">
                            <img src="images/christmas.png" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"stitle="color:Red;"style="font-size:10px">Upcomming: Academic Christmas Conference</h5>
                               
                            </div>
                           
                        </div>
						  <div class="card">
                            <img src="images/christmas.png" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"stitle="color:Red;"style="font-size:10px">Upcomming: Academic Christmas Conference</h5>
                               
                            </div>
                           
                        </div>
						
                        <div class="card">
                            <img src="images/oxford.png" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"style="font-size:10px">Upcomming:University Of London Academic Confernces</h5>
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <div>
 <center>
 <h1 style="background-color:#CCCCCC; font-size:24px; font-family:caption;color:#FF0000">Latest Data OF Conference</h1>
 
 
 </center>
 
 
 
 </div>   
  <?php 
   
echo "<table border='1' id='customers'>
<tr>
<th>id</th>
<th>ConName</th>
<th>ConLocation</th>
<th>ConTopic</th>
<th>DTO</th>



</tr>";

if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {


echo "<tr>";
echo "<td><a href='#.php'> " . $row['id'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['ConName'] . "</a></td>";

echo "<td><a href='#.php'>" . $row['ConLocation'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['ConTopic'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['DTO'] . "</a></td>";

echo "</tr>";
}
echo "</table>";

    }
 else {
    echo "0 results";
}






?>
 
  
  
    <!--/process-->
    <section class="banner-bottom-wthree pb-lg-5 pb-md-4 pb-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
			<!---728x90--->
                <h3 class="tittle text-center mb-lg-4 mb-3">
			
                    <span>Some Info</span>Latest Upcomming Conferences</h3>
					<!---728x90--->
                <div class="tabs mt-5">
                    <ul class="nav nav-pills my-4" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">National Confernces</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">International Confernces</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="menu-grids mt-4">
                                <div class="row t-in">
                                    <div class="col-lg-8 text-info-sec">
                                        <!--/job1-->

                                        <div class="job-post-main row">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">Conference On  User Interface Project Management</a>
                                                    </h4>
                                                   
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> Bhopal</li>
                                                        </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    <i class="far fa-heart"></i> </span>
                                                <a href="booknow.php" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div>
                                        <!--//job1-->
                                        <!--/job2-->

                                        <div class="job-post-main row my-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                         Conference on  Regional Sales Manager</a>
                                                    </h4>
                                                  
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> California</li>
                                                       </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    <a href="booknow.php class="aply-btn ">Book Now</a>
                                            </div>
                                        </div>
                                        <!--//job2-->
                                        <!--/job3-->

                                        <div class="job-post-main row">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                        Conference on  Web Designer / Developer</a>
                                                    </h4>
                                                    <ul class="job-list-info d-flex">
                                                         <li>
                                                            <i class="fas fa-map-marker-alt"></i> Indore</li>
                                                       </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                  
                                                <a href=booknow.php" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div>
                                        <!--//job3-->
                                        <!--/job4-->

                                        <div class="job-post-main row mt-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                         Conference   Marketing Research</a>
                                                    </h4>
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> France</li>
                                                        </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                  
                                                <a href="booknow.php" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div>
                                        <!--//job4-->
                                        <!--/job1-->

                                        <div class="job-post-main row mt-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">ConferenceDeveloper for Site Maintenance </a>
                                                    </h4>
                                                  
                                                    <ul class="job-list-info d-flex">
                                                       
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> Pune</li>
                                                      
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    
                                                <a href="booknow.php" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div>
                                        <!--//job1-->
                                        <!--/job2-->

                                        <div class="job-post-main row my-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                           Conference Content Writer and Speaker</a>
                                                    </h4>
                                                  <ul class="job-list-info d-flex">
                                                        <i class="fas fa-map-marker-alt"></i>navi Mumbai</li>
                                                       </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    
                                                <a href="booknow.php" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div>
                                        <!--//job2-->
                                        <!--/job3-->

                                        <div class="job-post-main row">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                       Conference  on   Web Designer / Developer</a>
                                                    </h4>
                                                   
                                                    <ul class="job-list-info d-flex">
                                                       
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> Nagpur</li>
                                                      
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                           
                                                <a href="booknow.php" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div>
                                        <!--//job3-->
                                        <!--/job4-->

                                        <div class="job-post-main row mt-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                            Marketing Reasearch</a>
                                                    </h4>
                                                 
                                                    <ul class="job-list-info d-flex">
                                                      <li>
                                                            <i class="fas fa-map-marker-alt"></i> France</li>
                                                        </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    
                                                <a href="booknow.php" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div>
                                        <!--//job4-->
                                    </div>
                                    <div class="col-lg-4 text-info-sec">
                                        <img src="images/1535621812Untitledssaaaaa.png" alt=" " class="img-fluid" height="500px" />
                                    </div>
									
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="menu-grids mt-4">
                                <div class="row t-in">
                                    <div class="col-lg-4 text-info-sec">
                                        <img src="images/1535028146INSTITUTE OF RESEARCH AND JOURNALS.png" alt=" " class="img-fluid" />
                                    </div>
                                    <div class="col-lg-8 text-info-sec">
                                        <!--/job1-->

                                        <div class="job-post-main row">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">Developer for Site Maintenance </a>
                                                    </h4>
                                                 
                                                    <ul class="job-list-info d-flex">
                                               
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> pune</li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                  
                                                <a href="booknow.php" class="aply-btn ">Book  Now</a>
                                            </div>
                                        </div>
                                        <!--//job1-->
                                        <!--/job2-->

                                        <div class="job-post-main row my-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                       Confernce on     Content Writeing and Speaking</a>
                                                    </h4>
                                                   
                                                    <ul class="job-list-info d-flex">
                                                       
                                                            <i class="fas fa-map-marker-alt"></i> England</li>
                                                       
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                  
                                                <a href="booknow.php" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div>
                                        <!--//job2-->
                                        <!--/job3-->

                                        <div class="job-post-main row">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                            Web Designer / Developer</a>
                                                    </h4>
                                                   
                                                    <ul class="job-list-info d-flex">
                                                       
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> Indore</li>
                                                       
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                  
                                                <a href="booknow.php" class="aply-btn ">Book  Now</a>
                                            </div>
                                        </div>
                                        <!--//job3-->
                                        <!--/job4-->

                                        <div class="job-post-main row mt-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                            Marketing Director</a>
                                                    </h4>
                                                 <ul class="job-list-info d-flex">
                                                        
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> France</li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                 <a href="booknow.php" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div>
                                        <!--//job4-->
                                        <!--/job1-->

                                        <div class="job-post-main row mt-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">Developer Conference </a>
                                                    </h4>
                                              
                                                    <ul class="job-list-info d-flex">
                                                        
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> Mandsaur</li>
                                                     
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                   
                                                <a href="booknow.php" class="aply-btn ">Book  Now</a>
                                            </div>
                                        </div>
                                        <!--//job1-->
                                        <!--/job2-->

                                        <div class="job-post-main row my-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                            Content Writer and Speaker</a>
                                                    </h4>
                                                   
                                                    <ul class="job-list-info d-flex">
                                                      
                                                            <i class="fas fa-map-marker-alt"></i> California</li>
                                                       
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                   
                                                <a href="booknow.php" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div>
                                        <!--//job2-->
                                        <!--/job3-->

                                        <div class="job-post-main row">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                       Conference  On    Web Designer / Developer</a>
                                                    </h4>
                                                  
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> California</li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                 
                                                <a href="booknow.php" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div>
                                        <!--//job3-->
                                        <!--/job4-->

                                        <div class="job-post-main row mt-3">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#">
                                                            Marketing Direction</a>
                                                    </h4>
                                                   
                                                    <ul class="job-list-info d-flex">
                                                        
                                                            <i class="fas fa-map-marker-alt"></i> France</li>
                                                       
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                 
                                                <a href="booknow.php" class="aply-btn ">Book Now</a>
                                            </div>
                                        </div>
                                        <!--//job4-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//preocess-->
  <!--job -->
  
  
  
  
  
  
  
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span></span>  </h3>
                <div class="row mt-5">

                    <div class="card-deck">
                        <div class="card">
                            <img src="images/bankok.jpg" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"style="font-size:10px">Upcomming:International Conference on Research In Teaching,Education And Learning</h5>
                               
                            </div>
                          
                        </div>
                        <div class="card">
                            <img src="images/christmas.png" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"stitle="color:Red; "   style="font-size:10px">Upcomming: Academic Christmas Conference</h5>
                               
                            </div>
                           
                        </div>
						  <div class="card">
                            <img src="images/christmas.png" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"stitle="color:Red;" style="font-size:10px">Upcomming: Academic Christmas Conference</h5>
                               
                            </div>
                           
                        </div>
						
                        <div class="card">
                            <img src="images/oxford.png" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"style="font-size:10px"> Upcomming:University Of London Academic Confernces</h5>
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	
	
	
  
  
  
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
	
	<!--//Login-->
	<!--/Register-->
	
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