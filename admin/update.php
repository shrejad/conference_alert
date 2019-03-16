

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
 if(isset($_POST['insert'])){

$sql = "UPDATE conference_details SET  id='".$id."', ConName='".$conname."',ConLocation='".$conlocation."',ConType='".$contopic."',ConType='".$contype."',DTO='".$dto."'";


if (mysqli_query($conn, $sql)) {
	    echo "<center><h1 style='font-style:caption;font-size:15px'> COnference Updates<h1></center>";
		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}













mysqli_close($conn);

?>