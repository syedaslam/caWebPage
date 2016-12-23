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
//$qId = $_POST['qId'];
//$subTagId = 9; //$_POST['subtagname'];
if($conn->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql='SELECT * FROM mcquestions_hi where question_id=1'; //.$qId;
		$res=$conn->query($sql);
         while ($row = $res->fetch_assoc()) {
         echo $row['option1'];
		 echo "<br>";
   		 echo $row['option2'];
		 echo "<br>";
         echo $row['option3'];
		 echo "<br>";
         echo $row['option4'];
		 echo "<br>";
         echo $row['option5'];
		 
 }
// echo $queData;
        }
?>