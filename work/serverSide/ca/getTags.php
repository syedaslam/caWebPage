<?php
include 'config.php';
$key = $_POST['key'];

switch($key){
  case "tag" :
  $sql="select * from tags";
  $res=$conn->query($sql);
   while ($row = $res->fetch_assoc()) {
     $jsonData[$row['tag_id']]=$row['tag'];
  }
         echo json_encode($jsonData); //Array to Json Conversion
  break;

  default:
  $sql="error";
}


?>
