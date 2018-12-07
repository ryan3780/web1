<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'work_record');
$sql = "INSERT INTO record_work (id, date, tw, kind, wm, wt, rn, wn, wnum) VALUES (NULL,'".$_POST["date"]."','".$_POST["first_tag"]."','".$_POST["second_tag"]."','".$_POST["work_num"]."','".$_POST["work_time"]."','".$_POST["req_user"]."','".$_POST["work_user"]."','".$_POST["user_num"]."')";
//$sql = "SELECT * FROM record_work";
$result = mysqli_query($conn, $sql);
//$row = mysqli_fetch_array($result);
//echo '<h1>'.$row['date'].'</h1>';
//echo $row['tw'];
$conn->close();
?>

