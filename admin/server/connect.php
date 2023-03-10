<?php

ini_set('display_errors', 1);
error_reporting(~0);
//202.137.141.57
//serverapis
$serverName = "serverapis";
$userName = "sa";
$userPassword = "sql@2019";
//sql@13
$dbName = "OSPP_IT1";
//OSPP_IT


try {
   $connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true,"CharacterSet"  => 'UTF-8');
   $conn = sqlsrv_connect( $serverName, $connectionInfo);
   
   if($conn)
   {
   //   echo "connected";
   }
   else
   {
    die( print_r( sqlsrv_errors(), true));
   }
} 
catch (PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
}

?>