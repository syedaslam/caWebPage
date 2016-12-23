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

$queData = array();

$tagId = 6; //$_POST['tag'];

$subTagId = 9; //$_POST['subtagname'];

if($conn->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql='SELECT * FROM questiontagsnew where tag_id='.$tagId.' and sub_tag_id ='.$subTagId;
		$res=$conn->query($sql);
		$index = 1;
         while ($row = $res->fetch_assoc()) {


           $queData[$index]=$row['question_id'];
			$index++;
 }

 echo json_encode($queData);
        }
?>
