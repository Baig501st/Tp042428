<?php

//connection string
$connectionInfo = array("UID" => "apuadmin", "pwd" => "A2663405d", "Database" => "dbtp042428", 
"LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:ddsctp042428.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(!$conn)
{
  die("Error connection: ".sqlsrv_errors());
}

$sql= "SELECT * FROM [dbo].[restaurant]";
 $getResults= sqlsrv_query($conn, $sql);

if ($getResults == FALSE)
{
 die(sqlsrv_errors());
}

 while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
{
 echo "<tr>";
 echo "<td>". $row['restaurant_id'] . "</td>";
 echo "<td>". $row['restaurant_name'] ."</td>";
 echo "<td>". $row['restaurant_address'] . "</td>";
 echo "<td>". $row['restaurant_phone'] . "</td>";
 echo "</tr>";
 }
 sqlsrv_free_stmt($getResults);
 echo "Connection Success: connected!";
?>
