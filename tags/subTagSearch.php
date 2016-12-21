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
//echo "Connected successfully";

$jsonData = array();

$tagId = $_POST['tag'];

if($conn->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from subtags where tagid = ".$tagId;
        $res=$conn->query($sql);
         while ($row = $res->fetch_assoc()) {

            // echo $row['tag_id'];
            // echo $row['tag'];
           $jsonData[$row['subtagid']]=$row['subtagname'];
 }
           echo json_encode($jsonData); //Array to Json Conversion

        }
?>
