<?php include"truesession.php";?>
<?php include'logindb.php'   ?>
<?php   include'settings.php'   ?>



<?php include'delete.php' ?>
<?php include'registerdb.php' ?>
<?php include'update.php' ?>	
<?php include"search.php";?>


<?php include"a.php";?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Tables</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
   
    <link href="css/table2.css" rel='stylesheet' type='text/css' />
   
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->
<?php include"settings.php";?>
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
                <span>M</span>
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
                       
                        <li>
                            <a href="forms.php">Forms</a>
                        </li>
                        <li>
                            <a href="tables.php">Tables</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                    </ul>
                </li>
                <li>
                </li>
                <li>
                </li>
                <li>
                </li>
                <li>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                    </ul>
                </li>
                <li>
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
                    <form action="#" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <!--// Search-from -->
                 
				    
				 
				 
				 
				 
				 
				 
				 
				    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-bell"></i>
                                <span class="badge">4</span>
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-1">
                                    <div class="notif-img-agileinfo">
                                        </div>
                                    <div class="notif-content-wthree">
                                      
                                    </div>
                                </a>
                                    <div class="notif-img-agileinfo">
                                    </div>
                                    <div class="notif-content-wthree">
                                    </div>
                                </a>
                                    <div class="notif-img-agileinfo">
                                    </div>
                                    <div class="notif-content-wthree">
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                    </div>
                                    <div class="notif-content-wthree">
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <div class="dropdown-menu top-grid-scroll drop-2">
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                    </div>
                                    <div class="profile-r align-self-center">
                                    </div>
                                </div>
                                </a>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                </a>
                                <a class="dropdown-item" href="login.html">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Tables</h2>
			
			
			
            <br><!--// main-heading -->
 <br>	
 
 
 <center>
<div>



<h1 style="font-family:caption; font-size:24px; color:#000000; text-shadow:#990000;">Organized Conferences </h1>

</div>
</center>

<br><br>

 
 <?php 
   
echo "<center><table  border='1' id='customers'>
<tr>
<th>id</th>
<th>ConName</th>
<th>ConLocation</th>
<th>ConTopic</th>
<th>DTO</th>



</tr></center>";

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

<br><br>

<div>



<h1 style="font-family:caption; font-size:24px; color:#000000; text-shadow:#990000">Conference Request  upload by User</h1>

</div>
<br><br>


<?php include"b.php";?>

 <?php 
   
echo "<center><table  border='1' id='customers'>
<tr>
<th>id</th>
<th>conference_name</th>
<th>type</th>
<th>place</th>
<th>Date</th>



</tr></center>";

if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {


echo "<tr>";
echo "<td><a href='#.php'> " . $row['id'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['conference_name'] . "</a></td>";

echo "<td><a href='#.php'>" . $row['type'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['place'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['Date'] . "</a></td>";

echo "</tr>";
}
echo "</table>";

    }
 else {
    echo "0 results";
}

?>

<br><br>
<div>



<h1 style="font-family:caption; font-size:24px; color:#000000; text-shadow:#990000">Booking Request  upload by User</h1>

</div>

<?php include"c.php";?>
<br><br>
<?php 
   
echo "<center><table  border='1' id='customers'>
<tr>
<th>id</th>
<th>fullname</th>
<th>company</th>
<th>email</th>
<th>street_address</th>
<th>street_address2</th>
<th>countary</th>
<th>city</th>
<th>zipcode</th>
<th>phone</th>


</tr></center>";

if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {


echo "<tr>";
echo "<td><a href='#.php'> " . $row['id'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['fullname'] . "</a></td>";

echo "<td><a href='#.php'>" . $row['company'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['email'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['street_address'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['street_address2'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['countary'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['city'] . "</a></td>";

echo "<td><a href='#.php'>" . $row['zipcode'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['phone'] . "</a></td>";
echo "</tr>";
}
echo "</table>";

    }
 else {
    echo "0 results";
}

?>


<?php include"d.php";?>
<br><br>
<div>



<h1 style="font-family:caption; font-size:24px; color:#000000; text-shadow:#990000">Register user of Conference alert</h1>

</div>

<br><br>

<?php 
   
echo "<center><table  border='1' id='customers'>
<tr>
<th>id</th>
<th>firstName</th>
<th>lastname</th>
<th>email</th>
<th>password</th>
<th>cnfpassword</th>



</tr></center>";

if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {


echo "<tr>";
echo "<td><a href='#.php'> " . $row['id'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['firstName'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['lastname'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['email'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['password'] . "</a></td>";
echo "<td><a href='#.php'>" . $row['cnfpassword'] . "</a></td>";


echo "</tr>";
}
echo "</table>";

    }
 else {
    echo "0 results";
}

?>






















     </div></div>       <!-- Tables content -->
            
            <!--// Tables content -->

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Conference . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> NidhiTrivedi & Shreyash Jadhav </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
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
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>