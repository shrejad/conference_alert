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
 if(isset($_POST['addsSubmit'])){

$sql = "INSERT INTO  addsdetails (conference_name,type,place,Date)
VALUES ('$_POST[EventName]','$_POST[EventType]','$_POST[place]','$_POST[date]')";
if (mysqli_query($conn, $sql)) {
	    echo "<center><h1 style='font-style:caption;font-size:15px'>Thanks For Giving Details<h1></center>";
		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}






