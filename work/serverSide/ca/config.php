<?php
$serverName = "localhost";
$userName = "anil";
$password = "anil";
$db = "virtualm_jobportal";

$conn = new mysqli($serverName,$userName,$password,$db);

if($conn->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
      //echo 'Connected';
    }
?>
