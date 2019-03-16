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
 if(isset($_POST['feedsubmit'])){

$sql = "INSERT INTO contactdetails (name, email,message)
VALUES ('$_POST[feedName]','$_POST[feedEmail]','$_POST[feedmessage]')";
if (mysqli_query($conn, $sql)) {
	    echo "<center><marquee style='font-style:caption;font-size:30px;color:white;background-color:black; behavior:alternate;' >If You Want To Contact Us We Definately Reply  You In 2-3 Working Days,Thank you</marquee></center>";
		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}













mysqli_close($conn);

?>