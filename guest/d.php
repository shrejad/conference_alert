
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

$sql = "SELECT * FROM  userreg";
$result = mysqli_query($conn, $sql);


mysqli_close($conn);
?> 

</body>
</html>