<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Conference";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 if(isset($_POST['bookbtn'])){

$sql = "INSERT INTO booknow (fullname,company,email,street_address,street_address2,countary,city,zipcode,phone)
VALUES ('$_POST[Name]','$_POST[Company]','$_POST[Email]','$_POST[Address]','$_POST[Address2]','$_POST[Region]','$_POST[city]','$_POST[Zip]','$_POST[Number]')";
if (mysqli_query($conn, $sql)) {
	    echo "<center><h1 style='font-style:caption;font-size:15px'>Your Conference Is Booked<h1></center>";
		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

 ?>