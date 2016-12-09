//Author : Kunchala Anil
//Email : anilkunchalaece@gmail.com
//php code to Get the Data from Post Request send from Node Mcu and Save it in the Database
//site : padma1ver2.16mb.com

<?php
echo "Hello Anil";


$uName =  $_POST['uName'];
$eMail = $_POST['eMail'];
$pWord =  $_POST['pWord'];

echo 'userName';
echo $uName;
echo '<br>';

echo 'email';
echo $eMail;
echo '<br>';

echo 'password';
echo $pWord;

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
$sql = "INSERT INTO ca(username,email,password)
VALUES ($uName,$eMail,$pWord)";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
