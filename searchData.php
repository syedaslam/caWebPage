<html>
<head>
<style type="text/css">
body{
	background-image:url(images/books.jpg);
	background-repeat:no-repeat;
	background-size:cover;
}
h3{
	color:#057;
	margin-left:10%;
}
h2{
	color:white;
	text-align:center;
}
</style>
</head>
<?php
$host="localhost";
$user="root";
$password="";
$db="virtualm_jobportal";
//Create Connection
$conn = new mysqli($host,$user,$password,$db);
if($conn ->connect_error){
die("Connection Failed: ".$conn->connect_error);
}
echo "<h2>Retrieve data from database<br></h2>";
//$search_value=$_POST["register"];
if($conn->connect_error){
echo 'Connection Faild: '.$con->connect_error;
}else{
$sql="SELECT * FROM `tags`";
$res=$conn->query($sql);
while($row=$res->fetch_assoc()){
echo '<h3>'.$row["tag"].'<br></h3>';
}
}
?>
