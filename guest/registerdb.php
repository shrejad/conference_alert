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
 if(isset($_POST['submit'])){

$sql = "INSERT INTO userreg (firstname, lastname, email,password,cnfpassword)
VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]','$_POST[cnfpassword]')";
if (mysqli_query($conn, $sql)) {
	    echo "<center><h1 style='font-style:caption;font-size:15px'>Thanks For Connecting With Us<h1></center>";
		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}













mysqli_close($conn);

?>