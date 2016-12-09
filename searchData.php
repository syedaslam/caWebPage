<?php

$serverName = "mysql.hostinger.in";
$userName = "u576780510_anil";
$password = "123456";
$db = "u576780510_padma";
//Create Connection
$conn = new mysqli($serverName,$userName,$password,$db);
if($conn ->connect_error){
	die("Connection Failed: ".$conn->connect_error);
	}
echo "Connected successfully";

$search_value=$_POST["search"];

if($conn->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from information where First_Name like '%$search_value%'";

        $res=$conn->query($sql);

        while($row=$res->fetch_assoc()){
            echo 'First_name:  '.$row["email"];


            }

        }
?>
