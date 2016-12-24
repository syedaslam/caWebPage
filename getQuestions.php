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
$qId = $_POST['qId'];
$subTagId = 9; //$_POST['subtagname'];
if($conn->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql='SELECT * FROM mcquestions_hi where question_id=6'; //.$qId;
		$res=$conn->query($sql);
         while ($row = $res->fetch_assoc()) {
         $queData["que"]= $row['question'];
		 $queData["opt1"]=$row["option1"];
		 $queData["opt2"]=$row["option2"];
		 $queData["opt3"]=$row["option3"];
		 $queData["opt4"]=$row["option4"];
		 $queData["opt5"]=$row["option5"];
 }
echo json_encode($queData);
        }
?>
