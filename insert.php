<?php

	include 'db_config.php';

$sql = "INSERT INTO record_work (date, tw, kind, wm, wt, rn, wn, wnum, etc) VALUES ('".$_POST["date"]."','".$_POST["first_tag"]."','".$_POST["second_tag"]."','".$_POST["work_num"]."','".$_POST["work_time"]."','".$_POST["req_user"]."','".$_POST["work_user"]."','".$_POST["user_num"]."', '".$_POST["etc"]."')";


if(empty($_POST['second_tag']) or empty($_POST['work_num']) or empty($_POST['work_time']) or empty($_POST['req_user']) or empty($_POST['work_user'])){

	$message = "빠진거 이뜸";

	echo "<script type='text/javascript'>alert('$message');history.back();</script>";

}else if($conn -> query($sql) === TRUE){

	header('Location: index.html');
	
} 


$conn->close();


?>


<!--------

      한달치 내역만 보여주기 


$month_ini = new DateTime("first day of last month");
$month_end = new DateTime("last day of last month");

echo $month_ini->format('Y-m-d'); // 2012-02-01
echo $month_end->format('Y-m-d'); // 2012-02-29


---------->