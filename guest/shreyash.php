
<?php
$result = mysql_query("SELECT * FROM names");
?>
<?php include"search.php";?>



<?php

<table border="2">
   <tr>
      <th>id</th>
      <th>ConName</th>
      <th>ConType</th>
      <th>ConLocation</th>
	  <th>DTO</th>
    </tr>
    <? 
    while ($array = mysql_fetch_row($result));
    {
        print "<tr> <td>";
        echo $array[0]; 
        print "</td> <td>";
        echo $array[1]; 
        print "</td> <td>";
        echo $array[2]; 
        print "</td> <td>";
        echo $array[3]; 
        print "</td> </tr>";
		    echo $array[4]; 
        print "</td> </tr>";
    }
?>



?>