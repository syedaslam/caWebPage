<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body{background-image:url(images/exm.jpg);
     background-repeat:no-repeat;
	 background-size:cover;}
</style>
</head>
<body>
<h1>your regrestration in successfull
<a href="http://localhost/stulogin.html">chick here to login</a></h1>
<?php
echo "your regrestration in successfull<br> ";


$uName     =  $_POST['uName'];

$eMail     = $_POST['eMail'];

$phone     =  $_POST['phone'];

$altemail  =  $_POST['altemail'];

$degree    = $_POST['degree'];

$branch    =  $_POST['branch'];

$gender    = $_POST['gender'];
if ($gender == 1){
	$gender = "MALE";
	
}else{
	$gender = "FEMALE";
}

$Ccode     =  $_POST['Ccode'];

$yop       = $_POST['yop'];

$Pword     =  $_POST['Pword'];

 

$edob  =  $_POST['ydob'].$_POST['mdob'].$_POST['ddob'];

$country   =  $_POST['country'];

$state     =  $_POST['state'];


echo 'userName:';

echo $uName;

echo '<br>';


echo 'email:';

echo $eMail;

echo '<br>';

$host="localhost";
$user="root";
$password="";
$db="cadatabase";
$conn = new mysqli($host,$user,$password,$db);

if($conn ->connect_error)
{
	
die("Connection Failed: ".$conn->connect_error);

}

echo "Connected successfully";

$sql = "INSERT INTO register(uName,eMail,phone,altemail,degree,branch,gender,Ccode,yop,Pword,edob,country,state)
VALUES ('$uName','$eMail','$phone','$altemail','$degree','$branch','$gender','$Ccode','$yop','$Pword','$edob','$country','$state')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";

}
 else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

mysqli_close($conn);

?>
</body>
</html>