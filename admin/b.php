
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

$sql = "SELECT id,conference_name,type,place,Date FROM 	addsdetails";
$result = mysqli_query($conn, $sql);


mysqli_close($conn);
?> 

</body>
</html>