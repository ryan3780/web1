<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'work_record');

$sql = "INSERT INTO record_work (id, date, tw, kind, wm, wt, rn, wn, wnum) VALUES (NULL,'".$_POST["date"]."','".$_POST["first_tag"]."','".$_POST["second_tag"]."','".$_POST["work_num"]."','".$_POST["work_time"]."','".$_POST["req_user"]."','".$_POST["work_user"]."','".$_POST["user_num"]."')";

if(empty($_POST['second_tag'])){
	
 echo "<script>alert(\"이렇게 띄우면 되자나\");</script>";


} else if($conn -> query($sql) === TRUE){

header('Location: http://127.0.0.1');

} 

$conn->close();

?>
