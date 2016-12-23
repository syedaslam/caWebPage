<?php
$host="localhost";
$user="root";
$password="";
$db="virtualm_jobportal";
$conn = new mysqli($host,$user,$password,$db);
if($conn ->connect_error){
	die("Connection Failed: ".$conn->connect_error);
	}
//echo "Connected successfully";

$jsonData = array();

if($conn->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from tags";
        $res=$conn->query($sql);
         while ($row = $res->fetch_assoc()) {

            // echo $row['tag_id'];
            // echo $row['tag'];
           $jsonData[$row['tag_id']]=$row['tag'];
 }
           echo json_encode($jsonData); //Array to Json Conversion

        }
?>
