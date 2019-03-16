
<?php

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'Conference');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>



<?php



if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `conference_details` WHERE CONCAT(`id`, `ConName`, `ConType`, `ConLocation`, `DTO`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
   
    $query = "SELECT * FROM `conference_details`";
    $search_result = filterTable($query);
	
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "Conference");
	    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
