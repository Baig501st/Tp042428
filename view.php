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
 echo "Connection Success: connected!";
?>
