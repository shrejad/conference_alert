 	
	


<?php   include'settings.php'   ?>



<?php include'delete.php' ?>
<?php include'registerdb.php' ?>
<?php include'update.php' ?>	
<?php include"search.php";?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>COnference Admin Panel</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="index.php">Conference</a>
                </h1>
                <span>C</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li>
                    <a href="index.php">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        Components
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        
                            <a href="forms.php">Forms</a>
                       
                       
                        <li>
                            <a href="tables.php">Tables</a>
                        </li>
                    </ul>
                </li>
                <li>
                  
               
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        User
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="login.php">Login</a>
                        </li>
                        <li>
                            <a href="register.php">Register</a>
                        </li>
                        <li>
                            <a href="forgot.php">Forgot password</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                    <form action="" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <!--// Search-from -->
  
                <!--// Forms-3 -->
  
                <!--// Forms-3 -->
                <!--// Forms-3 -->
                <!--// Forms-3 -->
                <!--// Forms-3 -->
                <!--// Forms-3 -->
                <!--// Forms-3 -->
                <!--// Forms-3 -->
                           
            <!--// top-bar -->
  <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Add Confernces to Show ON websites</h4>
                
				
				
				
				
				    <form action="#" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Conference_Name</label>
                                <input type="text" name="conname" class="form-control" id="inputEmail4" placeholder="" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Location</label>
                                <input type="text" name="conlocation" class="form-control" id="inputPassword4" placeholder="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Topic</label>
                            <input type="text" class="form-control" name="contopic" id="inputAddress" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2"> Type</label>
                            <input type="text" class="form-control" name="contype" id="inputAddress2" placeholder="" required="">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Date</label>
                                <input type="date" name="dto" class="form-control" id="inputCity" required="">
                            </div>
                           </div>
                        <div class="form-group">
                            <div class="form-check">
                              
                            </div>
                        </div>
                        <button type="submit" name="insert" class="btn btn-primary">Insert</button>
                    </form>
					<h1><br><br>DELETE </h1>
                 <form action=""settings.php";" method="post" style="margin-top: 50px" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2"  name="id" type="" placeholder="ENTER_ID" aria-label="" required="">
                        <button class="btn btn-style my-2 my-sm-0"  name="del" type="submit">DELETE</button>
                    </form>   
				</div>
                <!--// Forms-3 -->
  <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Update Confernces to Show ON websites</h4>
                
				
				
				
				
				    <form action="#" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">id</label>
                                <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="" required="">
                            </div>
						   
						   
						    <div class="form-group col-md-6">
                                <label for="inputEmail4">Conference_Name</label>
                                <input type="text" name="conname" class="form-control" id="inputEmail4" placeholder="" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Location</label>
                                <input type="text" name="conlocation" class="form-control" id="inputPassword4" placeholder="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Topic</label>
                            <input type="text" class="form-control" name="contopic" id="inputAddress" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2"> Type</label>
                            <input type="text" class="form-control" name="contype" id="inputAddress2" placeholder="" required="">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Date</label>
                                <input type="date" name="dto" class="form-control" id="inputCity" required="">
                            </div>
                           </div>
                        <div class="form-group">
                            <div class="form-check">
                              
                            </div>
                        </div>
                        <button type="submit" name="insert" class="btn btn-primary">Insert</button>
                    </form>
				</div>
              
            <!--// Forms content -->
   <!--// Forms-3 -->
              
            <!--// Forms content -->
	</div></div>	</div>
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Conference Alert . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> Nidhi & Shreyash </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>

    <!-- Required common Js -->
    <script src='../shreyashadmin/js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Validation Script -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';

            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!--// Validation Script -->

    <!-- dropdown nav -->
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

    <!-- Js for bootstrap working-->
    <script src="../shreyashadmin/js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>